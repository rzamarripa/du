<?php
use app\models\TiposTramite;
use yii\helpers\Inflector;
/**
 * This is the template for generating the model class of a specified table.
 */

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\model\Generator */
/* @var $tableName string full table name */
/* @var $className string class name */
/* @var $queryClassName string query class name */
/* @var $tableSchema yii\db\TableSchema */
/* @var $labels string[] list of attribute labels (name => label) */
/* @var $rules string[] list of validation rules */
/* @var $relations array list of relations (name => relation declaration) */

echo "<?php\n";
?>

namespace <?= $generator->ns ?>;

use Yii;

/**
 * This is the model class for table "<?= $generator->generateTableName($tableName) ?>".
 *
<?php foreach ($tableSchema->columns as $column): ?>
 * @property <?= "{$column->phpType} \${$column->name}\n" ?>
<?php endforeach; ?>
<?php if (!empty($relations)): ?>
 *
<?php foreach ($relations as $name => $relation): ?>
 * @property <?= $relation[1] . ($relation[2] ? '[]' : '') . ' $' . lcfirst($name) . "\n" ?>
<?php endforeach; ?>
<?php endif; ?>
 */

class <?= $className ?> extends <?= '\\' . ltrim($generator->baseClass, '\\') . "\n" ?>
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '<?= $generator->generateTableName($tableName) ?>';
    }
<?php  if ($generator->db !== 'db'): ?>

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('<?= $generator->db ?>');
    }
<?php endif; ?>


<?php if (!empty($generator->especializado)): ?>

    private $_pasos=[];


    private $__tipoTramite=1;

    private $__salvando=0;


    /**
     * @inheritdoc
     */

    public function salvar()
    {
        
        $transaction = Yii::$app->db->beginTransaction();
        try{
            $paso = $this->retrivePasoActual();
            
            $this->pasoActualId=$paso->id;
            $this->tipoTramiteId=$this->__tipoTramite;
            $this->save();
            foreach ($paso->atributos as $atributo) {
                $valor = $this->retriveAttr($atributo->nombre,$paso->id);
                $valor->tramiteId=$this->id;
                //print_r($valor);
                $valor->save();
                # code...
            }
            $paso = $this->retriveSiguientePaso();
            $this->pasoActualId=$paso->id;
            $this->save();
            $transaction->commit();

        }
        catch (Exception $e) {
            $transaction->rollBack();
        }
       // print_r($paso->atributos);
        
    }

    public function retrivePasoActual()
    {
       if(!empty($this->pasoActualId))
            $paso = PasosTramite::findOne($this->pasoActualId);
        else
            $paso = PasosTramite::find()->where(['tipoTramiteId'=>$this->__tipoTramite])->orderBy('secuencia')->one();

        return $paso;

    }
    public function retriveSiguientePaso()
    {
        print_r($this->pasoActualId);
        if(empty($this->pasoActualId))
            $paso = PasosTramite::find()->where(['tipoTramiteId'=>$this->__tipoTramite])->orderBy('secuencia')->one();
        else{
            $pasos = PasosTramite::find()->where(['tipoTramiteId'=>$this->__tipoTramite])->orderBy('secuencia')->all();
            $actual = $this->retrivePasoActual();
            
            foreach ($pasos as $value) 
            {

                if($value->secuencia > $actual->secuencia)
                    return $value;
            }
             $paso = PasosTramite::find()->where(['tipoTramiteId'=>$this->__tipoTramite])->orderBy('secuencia desc')->one();
        }

        return $paso;
    }


    public function retriveAttr($attrname,$paso)
    {
        if(!empty($this->_pasos[$paso][$attrname]))
            return $this->_pasos[$paso][$attrname];
        $atributo = Atributos::find()->where(['nombre'=>$attrname, 'tipoTramiteId'=>$this->__tipoTramite])->one();
        if(empty($atributo))
        {
              throw new UnknownPropertyException('Setting unknown property: ' . get_class($this) . '::' . $attrname);
        }
 

        $valor = new ValoresTramite;
        $valor->atributoId = $atributo->id;

        if(!empty($this->id))
        {
            $valtemp = ValoresTramite::find()->where(['atributoId'=>$atributo->id,'tramiteId'=>$this->id])->one();
        }            
        $this->_pasos[$paso][$attrname]=$valor;
        return $valor;
    }

<?php endif; ?>


    /**
     * @inheritdoc
     */
    public function rules()
    {
    <?php if (!empty($generator->especializado)){ ?>
    if($this->__salvando==1){
            return [<?= "\n            " . implode(",\n            ", $rules) . "\n            " ?>];
        }
        else{ 
            $pasoActual=$this->retrivePasoActual()->id;
            return [<?=  implode(",\n                ", $generator->generateRulesEspecialesGlobales()) ?>];
<?php 
$tramite = TiposTramite::findOne($generator->especializado);
foreach ($tramite->pasosTramites as  $pasopararegla): ?>
            if($pasoActual==<?= $pasopararegla->id ?>)
                return [<?=  implode(",\n                ", $generator->generateRulesEspeciales($pasopararegla->id)) ?>];
<?php
endforeach;
?>
        }
            
<?php } else{ ?>
        return [<?= "\n            " . implode(",\n            ", $rules) . "\n        " ?>];
<?php } ?>
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
<?php foreach ($labels as $name => $label): ?>
            <?= "'$name' => " . $generator->generateString($label) . ",\n" ?>
<?php endforeach; ?>
        ];
    }

<?php if (!empty($generator->especializado)): 
        $tramite = TiposTramite::findOne($generator->especializado);
        foreach ($tramite->atributos as $atributo) :
            

?>
    public function get<?= Inflector::id2camel($atributo->nombre, '_') ?>()
    {
        return $this->retriveAttr('<?= $atributo->nombre ?>',<?= $atributo->pasoId ?>);
    }
    public function set<?= Inflector::id2camel($atributo->nombre, '_') ?>($value)
    {
        $atributo=$this->retriveAttr('<?= $atributo->nombre ?>',<?= $atributo->pasoId ?>);

        $atributo->valor = $value;

    }
<?php 
        endforeach;
    endif;
?>

<?php foreach ($relations as $name => $relation): ?>

    /**
     * @return \yii\db\ActiveQuery
     */
    public function get<?= $name ?>()
    {
        <?= $relation[0] . "\n" ?>
    }
<?php endforeach; ?>
<?php if ($queryClassName): ?>
<?php
    $queryClassFullName = ($generator->ns === $generator->queryNs) ? $queryClassName : '\\' . $generator->queryNs . '\\' . $queryClassName;
    echo "\n";
?>
    /**
     * @inheritdoc
     * @return <?= $queryClassFullName ?> the active query used by this AR class.
     */
    public static function find()
    {
        return new <?= $queryClassFullName ?>(get_called_class());
    }
<?php endif; ?>
}
