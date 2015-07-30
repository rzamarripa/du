<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Tramites".
 *
 * @property integer $id
 * @property integer $pasoActualId
 * @property integer $tipoTramiteId
 *
 * @property PasosTramite $pasoActual
 * @property TiposTramite $tipoTramite
 * @property ValoresTramite[] $valoresTramites
 */

class TramiteLicConstruccion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Tramites';
    }



    private $_pasos=[];


    private $__tipoTramite=1;

//      $__salvando;



    /**
     * @inheritdoc
     */

    private function psalvar($paso)
    {

        $transaction = Yii::$app->db->beginTransaction();

        try{
            
            
            $this->pasoActualId=$paso->id;
            $this->tipoTramiteId=$this->__tipoTramite;
            
            $this->scenario =$this->pasoActualId;
            $this->save();

            foreach ($paso->atributos as $atributo) {
                $valor = $this->retriveAttr($atributo->nombre,$paso->id);
                $valor->tramiteId=$this->id;
                $valor->save();
            }
            $paso = $this->retriveSiguientePaso();
            $this->pasoActualId=$paso->id;
            $this->save();
            $transaction->commit();
            
            return true;


        }
        catch (Exception $e) {
            $transaction->rollBack();
            return false;

        }
        return false;
    }

    public function salvar()
    {
        $paso = $this->retrivePasoActual();
        return $this->psalvar($paso);
    }

    public function salvarPaso($pasoIndex)
    {

        $pasos=PasosTramite::find()->where(['tipoTramiteId'=>$this->__tipoTramite])->orderBy('secuencia')->all();
        
        for ($i=0; $i <$pasoIndex ; $i++) { 
            $paso = $pasos[$i];
        }
        
        return $this->psalvar($paso);
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
 

        
        if(!empty($this->id))
        {
            $valtemp = ValoresTramite::find()->where(['atributoId'=>$atributo->id,'tramiteId'=>$this->id])->one();
            if(!empty($valtemp))
            {
                $this->_pasos[$paso][$attrname]=$valtemp;
                return $valtemp;
            }
        }            
        $valor = new ValoresTramite;
        $valor->atributoId = $atributo->id;

        
        $this->_pasos[$paso][$attrname]=$valor;
        return $valor;
    }



    /**
     * @inheritdoc
     */
    public function rules()
    {
       


            
           
            return [[['nombre', 'direccion', 'edad','telefono', 'correo'], 'string'],
                [['correo'], 'required', 'on' => 2],
                [['nombre'], 'required', 'on' => 1],
                
                [['telefono'], 'string', 'max' => 20],
                [['correo'], 'string', 'max' => 128],
                [['nombre'], 'string', 'max' => 256],
                [['edad'], 'string', 'max' => 3]];
            
    }
  
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pasoActualId' => 'Paso Actual ID',
            'tipoTramiteId' => 'Tipo Tramite ID',
            'nombre' =>'Nombre',
            'direccion'=>'Direccion',
            'edad'=>'Edad',
            'telefono'=>'Telefono',
            'correo'=>'Correo'

        ];
    }

    public function getNombre()
    {
        return $this->retriveAttr('nombre',1)->valor;
    }
    public function setNombre($value)
    {
        $atributo=$this->retriveAttr('nombre',1);

        $atributo->valor = $value;

    }
    public function getDireccion()
    {
        return $this->retriveAttr('direccion',1)->valor;
    }
    public function setDireccion($value)
    {
        $atributo=$this->retriveAttr('direccion',1);

        $atributo->valor = $value;

    }
    public function getEdad()
    {
        return $this->retriveAttr('edad',1)->valor;
    }
    public function setEdad($value)
    {
        $atributo=$this->retriveAttr('edad',1);

        $atributo->valor = $value;

    }
    public function getTelefono()
    {
        return $this->retriveAttr('telefono',2)->valor;
    }
    public function setTelefono($value)
    {
        $atributo=$this->retriveAttr('telefono',2);

        $atributo->valor = $value;

    }
    public function getCorreo()
    {
        return $this->retriveAttr('correo',2)->valor;
    }
    public function setCorreo($value)
    {
        $atributo=$this->retriveAttr('correo',2);

        $atributo->valor = $value;

    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPasoActual()
    {
        return $this->hasOne(PasosTramite::className(), ['id' => 'pasoActualId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoTramite()
    {
        $this->tipoTramiteId = $this->__tipoTramite;
        return $this->hasOne(TiposTramite::className(), ['id' => 'tipoTramiteId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getValoresTramites()
    {
        return $this->hasMany(ValoresTramite::className(), ['tramiteId' => 'id']);
    }
}
