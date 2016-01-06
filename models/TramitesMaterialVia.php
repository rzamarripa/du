<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Tramites".
 *
 * @property integer $id
 * @property integer $pasoActualId
 * @property integer $tipoTramiteId
 * @property string $fechaCreacion
 * @property string $fechaModificacion
 * @property string $observaciones
 * @property integer $estatusId
 *
 * @property Estatus $estatus
 * @property PasosTramite $pasoActual
 * @property TiposTramite $tipoTramite
 * @property ValoresTramite[] $valoresTramites
 */

class TramitesMaterialVia extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 3011; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['p1NombrePropietario', 'p1DireccionPropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1AlineamientoObservaciones', 'p1NoOficialObservaciones', 'p1ProMatObservaciones', 'p1ProHospObservaciones', 'p1ProAlfObservaciones', 'p1TotalObservaciones', 'p1NorteLocalizacion', 'p1SurLocalizacion', 'p1OrienteLocalizacion', 'p1PonienteLocalizacion', 'p6Observaciones', 'p5MaterialVialPublica', 'p3Resolutivo', 'p2Pago'], 'string'],
                [['p6EnvioExpediente', 'p4Pago', 'p4Resolutivo'], 'integer'],
                [['p1NombrePropietario', 'p1DireccionPropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1AlineamientoObservaciones', 'p1NoOficialObservaciones', 'p1ProMatObservaciones', 'p1ProHospObservaciones', 'p1ProAlfObservaciones', 'p1TotalObservaciones', 'p1NorteLocalizacion', 'p1SurLocalizacion', 'p1OrienteLocalizacion', 'p1PonienteLocalizacion'], 'required', 'on'=>'1059'],
                [['p6EnvioExpediente', 'p6Observaciones'], 'required', 'on'=>'1064'],
                [['p5MaterialVialPublica'], 'required', 'on'=>'1063'],
                [['p3Resolutivo'], 'required', 'on'=>'1061'],
                [['p2Pago'], 'required', 'on'=>'1060'],
                [['p4Pago', 'p4Resolutivo'], 'required', 'on'=>'1062'],
                [['p1NombrePropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1AlineamientoObservaciones', 'p1NoOficialObservaciones', 'p1ProMatObservaciones', 'p1ProHospObservaciones', 'p1ProAlfObservaciones', 'p1TotalObservaciones', 'p1NorteLocalizacion', 'p1SurLocalizacion', 'p1OrienteLocalizacion', 'p1PonienteLocalizacion'], 'string', 'max' => 50],
                [['p1DireccionPropietario', 'p6Observaciones'], 'string', 'max' => 500]];

        
            
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
            'fechaCreacion' => 'Fecha Creacion',
            'fechaModificacion' => 'Fecha Modificacion',
            'observaciones' => 'Observaciones',
            'estatusId' => 'Estatus ID',
            'p1NombrePropietario' => 'Nombre',
            'p1DireccionPropietario' => 'Direccion',
            'p1TelefonoPropietario' => 'Telefono',
            'p1CallePredio' => 'Calle',
            'p1FraccColoniaPredio' => 'Fraccionamiento o Colonia',
            'p1LotePredio' => 'Lote No',
            'p1ManzanaPredio' => 'Manzana No',
            'p1ClaveCatastralPredio' => 'Clave Catastral',
            'p1AlineamientoObservaciones' => 'Alineamiento',
            'p1NoOficialObservaciones' => 'No Oficial',
            'p1ProMatObservaciones' => '15 % PRO-MAT',
            'p1ProHospObservaciones' => '5 % PRO-HOSP',
            'p1ProAlfObservaciones' => '5 % PRO-ALF',
            'p1TotalObservaciones' => 'TOTAL',
            'p1NorteLocalizacion' => 'Al Norte',
            'p1SurLocalizacion' => 'Al Sur',
            'p1OrienteLocalizacion' => 'Al Oriente',
            'p1PonienteLocalizacion' => 'Al Poniente',
            'p6EnvioExpediente' => 'Se envío Expediente',
            'p6Observaciones' => 'Observaciones',
            'p5MaterialVialPublica' => 'Documento de Material en la Vía Publica',
            'p3Resolutivo' => 'Resolutivo',
            'p2Pago' => 'Pago',
            'p4Pago' => 'Pago',
            'p4Resolutivo' => 'Resolutivo',
        ];
    }

    public function getP1NombrePropietario()
    {
        return (string) $this->retriveAttr(3553,1059)->valor; 
    }
    public function setP1NombrePropietario($value)
    {   
        $atributo=$this->retriveAttr(3553,1059);
        $atributo->valor = $value;
    }
    public function getP1DireccionPropietario()
    {
        return (string) $this->retriveAttr(3554,1059)->valor; 
    }
    public function setP1DireccionPropietario($value)
    {   
        $atributo=$this->retriveAttr(3554,1059);
        $atributo->valor = $value;
    }
    public function getP1TelefonoPropietario()
    {
        return (string) $this->retriveAttr(3555,1059)->valor; 
    }
    public function setP1TelefonoPropietario($value)
    {   
        $atributo=$this->retriveAttr(3555,1059);
        $atributo->valor = $value;
    }
    public function getP1CallePredio()
    {
        return (string) $this->retriveAttr(3556,1059)->valor; 
    }
    public function setP1CallePredio($value)
    {   
        $atributo=$this->retriveAttr(3556,1059);
        $atributo->valor = $value;
    }
    public function getP1FraccColoniaPredio()
    {
        return (string) $this->retriveAttr(3557,1059)->valor; 
    }
    public function setP1FraccColoniaPredio($value)
    {   
        $atributo=$this->retriveAttr(3557,1059);
        $atributo->valor = $value;
    }
    public function getP1LotePredio()
    {
        return (string) $this->retriveAttr(3558,1059)->valor; 
    }
    public function setP1LotePredio($value)
    {   
        $atributo=$this->retriveAttr(3558,1059);
        $atributo->valor = $value;
    }
    public function getP1ManzanaPredio()
    {
        return (string) $this->retriveAttr(3559,1059)->valor; 
    }
    public function setP1ManzanaPredio($value)
    {   
        $atributo=$this->retriveAttr(3559,1059);
        $atributo->valor = $value;
    }
    public function getP1ClaveCatastralPredio()
    {
        return (string) $this->retriveAttr(3560,1059)->valor; 
    }
    public function setP1ClaveCatastralPredio($value)
    {   
        $atributo=$this->retriveAttr(3560,1059);
        $atributo->valor = $value;
    }
    public function getP1AlineamientoObservaciones()
    {
        return (string) $this->retriveAttr(3561,1059)->valor; 
    }
    public function setP1AlineamientoObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3561,1059);
        $atributo->valor = $value;
    }
    public function getP1NoOficialObservaciones()
    {
        return (string) $this->retriveAttr(3562,1059)->valor; 
    }
    public function setP1NoOficialObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3562,1059);
        $atributo->valor = $value;
    }
    public function getP1ProMatObservaciones()
    {
        return (string) $this->retriveAttr(3563,1059)->valor; 
    }
    public function setP1ProMatObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3563,1059);
        $atributo->valor = $value;
    }
    public function getP1ProHospObservaciones()
    {
        return (string) $this->retriveAttr(3564,1059)->valor; 
    }
    public function setP1ProHospObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3564,1059);
        $atributo->valor = $value;
    }
    public function getP1ProAlfObservaciones()
    {
        return (string) $this->retriveAttr(3565,1059)->valor; 
    }
    public function setP1ProAlfObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3565,1059);
        $atributo->valor = $value;
    }
    public function getP1TotalObservaciones()
    {
        return (string) $this->retriveAttr(3566,1059)->valor; 
    }
    public function setP1TotalObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3566,1059);
        $atributo->valor = $value;
    }
    public function getP1NorteLocalizacion()
    {
        return (string) $this->retriveAttr(3567,1059)->valor; 
    }
    public function setP1NorteLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3567,1059);
        $atributo->valor = $value;
    }
    public function getP1SurLocalizacion()
    {
        return (string) $this->retriveAttr(3568,1059)->valor; 
    }
    public function setP1SurLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3568,1059);
        $atributo->valor = $value;
    }
    public function getP1OrienteLocalizacion()
    {
        return (string) $this->retriveAttr(3569,1059)->valor; 
    }
    public function setP1OrienteLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3569,1059);
        $atributo->valor = $value;
    }
    public function getP1PonienteLocalizacion()
    {
        return (string) $this->retriveAttr(3570,1059)->valor; 
    }
    public function setP1PonienteLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3570,1059);
        $atributo->valor = $value;
    }
    public function getP6EnvioExpediente()
    {
        return (int) $this->retriveAttr(3619,1064)->valor; 
    }
    public function setP6EnvioExpediente($value)
    {   
        $atributo=$this->retriveAttr(3619,1064);
        $atributo->valor = $value;
    }
    public function getP6Observaciones()
    {
        return (string) $this->retriveAttr(3620,1064)->valor; 
    }
    public function setP6Observaciones($value)
    {   
        $atributo=$this->retriveAttr(3620,1064);
        $atributo->valor = $value;
    }
    public function getP5MaterialVialPublica()
    {
        return  $this->retriveAttr(3621,1063)->valor; 
    }
    public function setP5MaterialVialPublica($value)
    {   
        $atributo=$this->retriveAttr(3621,1063);
        $atributo->valor = $value;
    }
    public function getP3Resolutivo()
    {
        return  $this->retriveAttr(3622,1061)->valor; 
    }
    public function setP3Resolutivo($value)
    {   
        $atributo=$this->retriveAttr(3622,1061);
        $atributo->valor = $value;
    }
    public function getP2Pago()
    {
        return  $this->retriveAttr(3623,1060)->valor; 
    }
    public function setP2Pago($value)
    {   
        $atributo=$this->retriveAttr(3623,1060);
        $atributo->valor = $value;
    }
    public function getP4Pago()
    {
        return (int) $this->retriveAttr(3624,1062)->valor; 
    }
    public function setP4Pago($value)
    {   
        $atributo=$this->retriveAttr(3624,1062);
        $atributo->valor = $value;
    }
    public function getP4Resolutivo()
    {
        return (int) $this->retriveAttr(3625,1062)->valor; 
    }
    public function setP4Resolutivo($value)
    {   
        $atributo=$this->retriveAttr(3625,1062);
        $atributo->valor = $value;
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstatus()
    {
        return $this->hasOne(Estatus::className(), ['id' => 'estatusId']);
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
