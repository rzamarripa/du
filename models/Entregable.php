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

class Entregable extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 1008; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['nombre', 'direccion', 'imprimirLicencia'], 'string'],
                [['nombre'], 'required', 'on'=>'1024'],
                [['direccion'], 'required', 'on'=>'1025'],
                [['imprimirLicencia'], 'required', 'on'=>'1026'],
                [['nombre'], 'string', 'max' => 50],
                [['direccion'], 'string', 'max' => 255],
                [['imprimirLicencia'], 'string', 'max' => 1]];

        
            
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
        ];
    }

    public function getNombre()
    {
        return (string) $this->retriveAttr(45,1024)->valor;
    }
    public function setNombre($value)
    {   
        $atributo=$this->retriveAttr(45,1024);
        $atributo->valor = $value;
    }
    public function getDireccion()
    {
        return (string) $this->retriveAttr(46,1025)->valor;
    }
    public function setDireccion($value)
    {   
        $atributo=$this->retriveAttr(46,1025);
        $atributo->valor = $value;
    }
    public function getImprimirLicencia()
    {
        return (string) $this->retriveAttr(47,1026)->valor;
    }
    public function setImprimirLicencia($value)
    {   
        $atributo=$this->retriveAttr(47,1026);
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
        $this->tipoTramiteId = $this->tipoDeTramite();
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
