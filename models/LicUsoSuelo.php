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

class LicUsoSuelo extends \app\models\TramitEXt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 3; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['Nombre', 'Direccion', 'CodigoPostal', 'Escrituras', 'PagoEscaneado', 'Boton'], 'string'],
                [['Nombre', 'CodigoPostal'], 'required', 'on'=>'6'],
                [['Escrituras'], 'required', 'on'=>'7'],
                [['PagoEscaneado'], 'required', 'on'=>'8'],
                [['Boton'], 'required', 'on'=>'9'],
                [['Nombre', 'Escrituras', 'PagoEscaneado', 'Boton'], 'string', 'max' => 100],
                [['Direccion'], 'string', 'max' => 200],
                [['CodigoPostal'], 'string', 'max' => 5]];

        
            
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
        return (string) $this->retriveAttr(13,6)->valor;
    }
    public function setNombre($value)
    {   
        $atributo=$this->retriveAttr(13,6);
        $atributo->valor = $value;
    }
    public function getDireccion()
    {
        return (string) $this->retriveAttr(14,6)->valor;
    }
    public function setDireccion($value)
    {   
        $atributo=$this->retriveAttr(14,6);
        $atributo->valor = $value;
    }
    public function getCodigoPostal()
    {
        return (string) $this->retriveAttr(15,6)->valor;
    }
    public function setCodigoPostal($value)
    {   
        $atributo=$this->retriveAttr(15,6);
        $atributo->valor = $value;
    }
    public function getEscrituras()
    {
        return (string) $this->retriveAttr(16,7)->valor;
    }
    public function setEscrituras($value)
    {   
        $atributo=$this->retriveAttr(16,7);
        $atributo->valor = $value;
    }
    public function getPagoEscaneado()
    {
        return (string) $this->retriveAttr(17,8)->valor;
    }
    public function setPagoEscaneado($value)
    {   
        $atributo=$this->retriveAttr(17,8);
        $atributo->valor = $value;
    }
    public function getBoton()
    {
        return (string) $this->retriveAttr(18,9)->valor;
    }
    public function setBoton($value)
    {   
        $atributo=$this->retriveAttr(18,9);
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
