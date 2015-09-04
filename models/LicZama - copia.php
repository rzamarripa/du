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

class LicZama extends \app\models\TramitEXt
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
        
            
            return [[['Nombre', 'Apellidos', 'Cvecatastral', 'escrituras', 'imprmirLicencia'], 'string'],
                [['Nombre', 'Apellidos'], 'required', 'on'=>'3'],
                [['Cvecatastral'], 'required', 'on'=>'4'],
                [['escrituras', 'imprmirLicencia'], 'required', 'on'=>'5'],
                [['Nombre', 'Apellidos', 'Cvecatastral', 'escrituras', 'imprmirLicencia'], 'string', 'max' => 100]];

        
            
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
        return (string) $this->retriveAttr(8,3)->valor;
    }
    public function setNombre($value)
    {   
        $atributo=$this->retriveAttr(8,3);
        $atributo->valor = $value;
    }
    public function getApellidos()
    {
        return (string) $this->retriveAttr(9,3)->valor;
    }
    public function setApellidos($value)
    {   
        $atributo=$this->retriveAttr(9,3);
        $atributo->valor = $value;
    }
    public function getCvecatastral()
    {
        return (string) $this->retriveAttr(10,4)->valor;
    }
    public function setCvecatastral($value)
    {   
        $atributo=$this->retriveAttr(10,4);
        $atributo->valor = $value;
    }
    public function getEscrituras()
    {
        return (string) $this->retriveAttr(11,5)->valor;
    }
    public function setEscrituras($value)
    {   
        $atributo=$this->retriveAttr(11,5);
        $atributo->valor = $value;
    }
    public function getImprmirLicencia()
    {
        return (string) $this->retriveAttr(12,5)->valor;
    }
    public function setImprmirLicencia($value)
    {   
        $atributo=$this->retriveAttr(12,5);
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
