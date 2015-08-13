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

class TramitePruebaCrud extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 2; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['Nombre', 'Apellido', 'Direccion', 'Celular', 'Empresa', 'Puesto', 'Telefono', 'Extension'], 'string'],
                [['edad'], 'integer'],
                [['Nombre', 'Apellido', 'edad'], 'required', 'on'=>'3'],
                [['Empresa', 'Puesto', 'Telefono', 'Extension'], 'required', 'on'=>'4'],
                [['Nombre', 'Apellido'], 'string', 'max' => 64],
                [['Direccion'], 'string', 'max' => 128],
                [['Celular', 'Telefono'], 'string', 'max' => 13],
                [['Empresa', 'Puesto'], 'string', 'max' => 256],
                [['Extension'], 'string', 'max' => 6]];

        
            
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
        return (string) $this->retriveAttr(7,3)->valor;
    }
    public function setNombre($value)
    {   
        $atributo=$this->retriveAttr(7,3);
        $atributo->valor = $value;
    }
    public function getApellido()
    {
        return (string) $this->retriveAttr(8,3)->valor;
    }
    public function setApellido($value)
    {   
        $atributo=$this->retriveAttr(8,3);
        $atributo->valor = $value;
    }
    public function getDireccion()
    {
        return (string) $this->retriveAttr(9,3)->valor;
    }
    public function setDireccion($value)
    {   
        $atributo=$this->retriveAttr(9,3);
        $atributo->valor = $value;
    }
    public function getCelular()
    {
        return (string) $this->retriveAttr(10,3)->valor;
    }
    public function setCelular($value)
    {   
        $atributo=$this->retriveAttr(10,3);
        $atributo->valor = $value;
    }
    public function getEmpresa()
    {
        return (string) $this->retriveAttr(11,4)->valor;
    }
    public function setEmpresa($value)
    {   
        $atributo=$this->retriveAttr(11,4);
        $atributo->valor = $value;
    }
    public function getPuesto()
    {
        return (string) $this->retriveAttr(12,4)->valor;
    }
    public function setPuesto($value)
    {   
        $atributo=$this->retriveAttr(12,4);
        $atributo->valor = $value;
    }
    public function getTelefono()
    {
        return (string) $this->retriveAttr(13,4)->valor;
    }
    public function setTelefono($value)
    {   
        $atributo=$this->retriveAttr(13,4);
        $atributo->valor = $value;
    }
    public function getExtension()
    {
        return (string) $this->retriveAttr(14,4)->valor;
    }
    public function setExtension($value)
    {   
        $atributo=$this->retriveAttr(14,4);
        $atributo->valor = $value;
    }
    public function getEdad()
    {
        return (int) $this->retriveAttr(15,3)->valor;
    }
    public function setEdad($value)
    {   
        $atributo=$this->retriveAttr(15,3);
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
