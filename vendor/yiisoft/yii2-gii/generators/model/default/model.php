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
<?php if (!empty($generator->especializado)): ?>
    
    public function tipoDeTramite(){ return <?= $generator->especializado; ?>; }
<?php endif; ?>

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





    /**
     * @inheritdoc
     */
    public function rules()
    {
    <?php if (!empty($generator->especializado)){ ?>
    
            
            return [<?=  implode(",\n                ", $generator->generateRulesEspecialesGlobales()) ?>];

        
            
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
        <?php 
            switch ($atributo->tipoAtributo->nombre) {
                case app\models\TiposAtributo::ENTERO:
                    echo "return (int) \$this->retriveAttr({$atributo->id},{$atributo->pasoId})->valor;";
                    break;
                case app\models\TiposAtributo::BOLEANO:
                    echo "return (bool) \$this->retriveAttr({$atributo->id},{$atributo->pasoId})->valor;";
                    break;
                case app\models\TiposAtributo::CADENA:
                case app\models\TiposAtributo::TEXTO:
                default:
                    echo "return (string) \$this->retriveAttr({$atributo->id},{$atributo->pasoId})->valor;";
            }
        ?> 
    }
    public function set<?= Inflector::id2camel($atributo->nombre, '_') ?>($value)
    {   
        $atributo=$this->retriveAttr(<?= $atributo->id ?>,<?= $atributo->pasoId ?>);
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
<?php if (!empty($generator->especializado) && $name=='TipoTramite' ):?>
        $this->tipoTramiteId = $this->tipoDeTramite();
<?php endif ?>
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
