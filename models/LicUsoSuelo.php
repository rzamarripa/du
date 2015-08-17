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

class LicUsoSuelo extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 1007; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['nombre', 'direccion', 'telefono', 'calle', 'colonia', 'loteNo', 'manzanaNo', 'claveCatastral', 'usoSolicitado', 'cajonesEstacionamiento', 'pBConstruida', 'pAConstruida', 'otrosConstruida', 'totalConstruida', 'pBPorConstruir', 'pAPorConstruir', 'otrosPorConstruir', 'totalPorConstruir', 'observaciones', 'solicitud', 'escrituras', 'requisitosTotales', 'solicitudCorrecta', 'documentosCorrectos', 'pago', 'imprimirLicencia'], 'string'],
                [['usoActual'], 'integer'],
                [['nombre', 'direccion', 'telefono', 'calle', 'colonia', 'loteNo', 'manzanaNo', 'claveCatastral', 'usoActual', 'usoSolicitado', 'cajonesEstacionamiento'], 'required', 'on'=>'1019'],
                [['solicitud', 'escrituras', 'requisitosTotales'], 'required', 'on'=>'1020'],
                [['solicitudCorrecta', 'documentosCorrectos'], 'required', 'on'=>'1021'],
                [['pago'], 'required', 'on'=>'1022'],
                [['imprimirLicencia'], 'required', 'on'=>'1023'],
                [['nombre'], 'string', 'max' => 150],
                [['direccion'], 'string', 'max' => 255],
                [['telefono'], 'string', 'max' => 20],
                [['calle', 'colonia', 'loteNo', 'manzanaNo', 'claveCatastral', 'pBConstruida', 'pAConstruida', 'otrosConstruida', 'totalConstruida', 'pBPorConstruir', 'pAPorConstruir', 'otrosPorConstruir', 'totalPorConstruir'], 'string', 'max' => 100],
                [['usoSolicitado', 'cajonesEstacionamiento'], 'string', 'max' => 10],
                [['observaciones'], 'string', 'max' => 500],
                [['solicitud', 'escrituras', 'requisitosTotales', 'solicitudCorrecta', 'documentosCorrectos', 'pago'], 'string', 'max' => 1]];

        
            
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
        return (string) $this->retriveAttr(18,1019)->valor;
    }
    public function setNombre($value)
    {   
        $atributo=$this->retriveAttr(18,1019);
        $atributo->valor = $value;
    }
    public function getDireccion()
    {
        return (string) $this->retriveAttr(19,1019)->valor;
    }
    public function setDireccion($value)
    {   
        $atributo=$this->retriveAttr(19,1019);
        $atributo->valor = $value;
    }
    public function getTelefono()
    {
        return (string) $this->retriveAttr(20,1019)->valor;
    }
    public function setTelefono($value)
    {   
        $atributo=$this->retriveAttr(20,1019);
        $atributo->valor = $value;
    }
    public function getCalle()
    {
        return (string) $this->retriveAttr(21,1019)->valor;
    }
    public function setCalle($value)
    {   
        $atributo=$this->retriveAttr(21,1019);
        $atributo->valor = $value;
    }
    public function getColonia()
    {
        return (string) $this->retriveAttr(22,1019)->valor;
    }
    public function setColonia($value)
    {   
        $atributo=$this->retriveAttr(22,1019);
        $atributo->valor = $value;
    }
    public function getLoteNo()
    {
        return (string) $this->retriveAttr(23,1019)->valor;
    }
    public function setLoteNo($value)
    {   
        $atributo=$this->retriveAttr(23,1019);
        $atributo->valor = $value;
    }
    public function getManzanaNo()
    {
        return (string) $this->retriveAttr(24,1019)->valor;
    }
    public function setManzanaNo($value)
    {   
        $atributo=$this->retriveAttr(24,1019);
        $atributo->valor = $value;
    }
    public function getClaveCatastral()
    {
        return (string) $this->retriveAttr(25,1019)->valor;
    }
    public function setClaveCatastral($value)
    {   
        $atributo=$this->retriveAttr(25,1019);
        $atributo->valor = $value;
    }
    public function getUsoActual()
    {
        return (bool) $this->retriveAttr(26,1019)->valor;
    }
    public function setUsoActual($value)
    {   
        $atributo=$this->retriveAttr(26,1019);
        $atributo->valor = $value;
    }
    public function getUsoSolicitado()
    {
        return (string) $this->retriveAttr(27,1019)->valor;
    }
    public function setUsoSolicitado($value)
    {   
        $atributo=$this->retriveAttr(27,1019);
        $atributo->valor = $value;
    }
    public function getCajonesEstacionamiento()
    {
        return (string) $this->retriveAttr(28,1019)->valor;
    }
    public function setCajonesEstacionamiento($value)
    {   
        $atributo=$this->retriveAttr(28,1019);
        $atributo->valor = $value;
    }
    public function getPBConstruida()
    {
        return (string) $this->retriveAttr(29,1019)->valor;
    }
    public function setPBConstruida($value)
    {   
        $atributo=$this->retriveAttr(29,1019);
        $atributo->valor = $value;
    }
    public function getPAConstruida()
    {
        return (string) $this->retriveAttr(30,1019)->valor;
    }
    public function setPAConstruida($value)
    {   
        $atributo=$this->retriveAttr(30,1019);
        $atributo->valor = $value;
    }
    public function getOtrosConstruida()
    {
        return (string) $this->retriveAttr(31,1019)->valor;
    }
    public function setOtrosConstruida($value)
    {   
        $atributo=$this->retriveAttr(31,1019);
        $atributo->valor = $value;
    }
    public function getTotalConstruida()
    {
        return (string) $this->retriveAttr(32,1019)->valor;
    }
    public function setTotalConstruida($value)
    {   
        $atributo=$this->retriveAttr(32,1019);
        $atributo->valor = $value;
    }
    public function getPBPorConstruir()
    {
        return (string) $this->retriveAttr(33,1019)->valor;
    }
    public function setPBPorConstruir($value)
    {   
        $atributo=$this->retriveAttr(33,1019);
        $atributo->valor = $value;
    }
    public function getPAPorConstruir()
    {
        return (string) $this->retriveAttr(34,1019)->valor;
    }
    public function setPAPorConstruir($value)
    {   
        $atributo=$this->retriveAttr(34,1019);
        $atributo->valor = $value;
    }
    public function getOtrosPorConstruir()
    {
        return (string) $this->retriveAttr(35,1019)->valor;
    }
    public function setOtrosPorConstruir($value)
    {   
        $atributo=$this->retriveAttr(35,1019);
        $atributo->valor = $value;
    }
    public function getTotalPorConstruir()
    {
        return (string) $this->retriveAttr(36,1019)->valor;
    }
    public function setTotalPorConstruir($value)
    {   
        $atributo=$this->retriveAttr(36,1019);
        $atributo->valor = $value;
    }
    public function getObservaciones()
    {
        return (string) $this->retriveAttr(37,1019)->valor;
    }
    public function setObservaciones($value)
    {   
        $atributo=$this->retriveAttr(37,1019);
        $atributo->valor = $value;
    }
    public function getSolicitud()
    {
        return (string) $this->retriveAttr(38,1020)->valor;
    }
    public function setSolicitud($value)
    {   
        $atributo=$this->retriveAttr(38,1020);
        $atributo->valor = $value;
    }
    public function getEscrituras()
    {
        return (string) $this->retriveAttr(39,1020)->valor;
    }
    public function setEscrituras($value)
    {   
        $atributo=$this->retriveAttr(39,1020);
        $atributo->valor = $value;
    }
    public function getRequisitosTotales()
    {
        return (string) $this->retriveAttr(40,1020)->valor;
    }
    public function setRequisitosTotales($value)
    {   
        $atributo=$this->retriveAttr(40,1020);
        $atributo->valor = $value;
    }
    public function getSolicitudCorrecta()
    {
        return (string) $this->retriveAttr(41,1021)->valor;
    }
    public function setSolicitudCorrecta($value)
    {   
        $atributo=$this->retriveAttr(41,1021);
        $atributo->valor = $value;
    }
    public function getDocumentosCorrectos()
    {
        return (string) $this->retriveAttr(42,1021)->valor;
    }
    public function setDocumentosCorrectos($value)
    {   
        $atributo=$this->retriveAttr(42,1021);
        $atributo->valor = $value;
    }
    public function getPago()
    {
        return (string) $this->retriveAttr(43,1022)->valor;
    }
    public function setPago($value)
    {   
        $atributo=$this->retriveAttr(43,1022);
        $atributo->valor = $value;
    }
    public function getImprimirLicencia()
    {
        return (string) $this->retriveAttr(44,1023)->valor;
    }
    public function setImprimirLicencia($value)
    {   
        $atributo=$this->retriveAttr(44,1023);
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
