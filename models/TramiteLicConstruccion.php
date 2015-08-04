<?php

namespace app\models;

use Yii;
use yii\web\ForbiddenHttpException;
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

class TramiteLicConstruccion extends TramitExt
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Tramites';
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
