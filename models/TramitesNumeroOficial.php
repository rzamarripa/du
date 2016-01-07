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

class TramitesNumeroOficial extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 3009; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['p1NombrePropietario', 'p1DireccionPropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1AlineamientoObservaciones', 'p1NoOficialObservaciones', 'p1ProMatObservaciones', 'p1ProHospObservaciones', 'p1ProAlfObservaciones', 'p1TotalObservaciones', 'p1NorteLocalizacion', 'p1SurLocalizacion', 'p1OrienteLocalizacion', 'p1PonienteLocalizacion', 'p2CopiaEscritura', 'p2Croquis', 'p2Pago', 'p3Nombre', 'p3NumeroAsignado', 'p3Observaciones', 'p4Resolutivo', 'p6NumeroOficial', 'p7Observaciones'], 'string'],
                [['p5CopiaEscritura', 'p5Croquis', 'p5Pago', 'p5Resolutivo', 'p7EnvioExpediente'], 'integer'],
                [['p1NombrePropietario', 'p1DireccionPropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1AlineamientoObservaciones', 'p1NoOficialObservaciones', 'p1ProMatObservaciones', 'p1ProHospObservaciones', 'p1ProAlfObservaciones', 'p1TotalObservaciones', 'p1NorteLocalizacion', 'p1SurLocalizacion', 'p1OrienteLocalizacion', 'p1PonienteLocalizacion'], 'required', 'on'=>'1045'],
                [['p2CopiaEscritura', 'p2Croquis', 'p2Pago'], 'required', 'on'=>'1046'],
                [['p3Nombre', 'p3NumeroAsignado', 'p3Observaciones'], 'required', 'on'=>'1047'],
                [['p4Resolutivo'], 'required', 'on'=>'1048'],
                [['p5CopiaEscritura', 'p5Croquis', 'p5Pago', 'p5Resolutivo'], 'required', 'on'=>'1049'],
                [['p6NumeroOficial'], 'required', 'on'=>'1050'],
                [['p7EnvioExpediente', 'p7Observaciones'], 'required', 'on'=>'1051'],
                [['p1NombrePropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1AlineamientoObservaciones', 'p1NoOficialObservaciones', 'p1ProMatObservaciones', 'p1ProHospObservaciones', 'p1ProAlfObservaciones', 'p1TotalObservaciones', 'p1NorteLocalizacion', 'p1SurLocalizacion', 'p1OrienteLocalizacion', 'p1PonienteLocalizacion', 'p3Nombre', 'p3NumeroAsignado'], 'string', 'max' => 50],
                [['p1DireccionPropietario', 'p3Observaciones', 'p7Observaciones'], 'string', 'max' => 500]];

        
            
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
            'p2CopiaEscritura' => 'Copia de escritura o constancia de posesion',
            'p2Croquis' => 'Solicitud con croquis de ubicacion',
            'p2Pago' => 'Pago',
            'p3Nombre' => 'Nombre',
            'p3NumeroAsignado' => 'Numero Asignado',
            'p3Observaciones' => 'Observaciones',
            'p4Resolutivo' => 'Resolutivo',
            'p5CopiaEscritura' => 'Copia de escritura o constancia de posesion',
            'p5Croquis' => 'Solicitud con croquis de ubicacion',
            'p5Pago' => 'Pago',
            'p5Resolutivo' => 'Resolutivo',
            'p6NumeroOficial' => 'Documento del Numero Oficial',
            'p7EnvioExpediente' => 'Se envío Expediente',
            'p7Observaciones' => 'Observaciones',
        ];
    }

    public function getP1NombrePropietario()
    {
        return (string) $this->retriveAttr(3517,1045)->valor; 
    }
    public function setP1NombrePropietario($value)
    {   
        $atributo=$this->retriveAttr(3517,1045);
        $atributo->valor = $value;
    }
    public function getP1DireccionPropietario()
    {
        return (string) $this->retriveAttr(3518,1045)->valor; 
    }
    public function setP1DireccionPropietario($value)
    {   
        $atributo=$this->retriveAttr(3518,1045);
        $atributo->valor = $value;
    }
    public function getP1TelefonoPropietario()
    {
        return (string) $this->retriveAttr(3519,1045)->valor; 
    }
    public function setP1TelefonoPropietario($value)
    {   
        $atributo=$this->retriveAttr(3519,1045);
        $atributo->valor = $value;
    }
    public function getP1CallePredio()
    {
        return (string) $this->retriveAttr(3520,1045)->valor; 
    }
    public function setP1CallePredio($value)
    {   
        $atributo=$this->retriveAttr(3520,1045);
        $atributo->valor = $value;
    }
    public function getP1FraccColoniaPredio()
    {
        return (string) $this->retriveAttr(3521,1045)->valor; 
    }
    public function setP1FraccColoniaPredio($value)
    {   
        $atributo=$this->retriveAttr(3521,1045);
        $atributo->valor = $value;
    }
    public function getP1LotePredio()
    {
        return (string) $this->retriveAttr(3522,1045)->valor; 
    }
    public function setP1LotePredio($value)
    {   
        $atributo=$this->retriveAttr(3522,1045);
        $atributo->valor = $value;
    }
    public function getP1ManzanaPredio()
    {
        return (string) $this->retriveAttr(3523,1045)->valor; 
    }
    public function setP1ManzanaPredio($value)
    {   
        $atributo=$this->retriveAttr(3523,1045);
        $atributo->valor = $value;
    }
    public function getP1ClaveCatastralPredio()
    {
        return (string) $this->retriveAttr(3524,1045)->valor; 
    }
    public function setP1ClaveCatastralPredio($value)
    {   
        $atributo=$this->retriveAttr(3524,1045);
        $atributo->valor = $value;
    }
    public function getP1AlineamientoObservaciones()
    {
        return (string) $this->retriveAttr(3525,1045)->valor; 
    }
    public function setP1AlineamientoObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3525,1045);
        $atributo->valor = $value;
    }
    public function getP1NoOficialObservaciones()
    {
        return (string) $this->retriveAttr(3526,1045)->valor; 
    }
    public function setP1NoOficialObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3526,1045);
        $atributo->valor = $value;
    }
    public function getP1ProMatObservaciones()
    {
        return (string) $this->retriveAttr(3527,1045)->valor; 
    }
    public function setP1ProMatObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3527,1045);
        $atributo->valor = $value;
    }
    public function getP1ProHospObservaciones()
    {
        return (string) $this->retriveAttr(3528,1045)->valor; 
    }
    public function setP1ProHospObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3528,1045);
        $atributo->valor = $value;
    }
    public function getP1ProAlfObservaciones()
    {
        return (string) $this->retriveAttr(3529,1045)->valor; 
    }
    public function setP1ProAlfObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3529,1045);
        $atributo->valor = $value;
    }
    public function getP1TotalObservaciones()
    {
        return (string) $this->retriveAttr(3530,1045)->valor; 
    }
    public function setP1TotalObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3530,1045);
        $atributo->valor = $value;
    }
    public function getP1NorteLocalizacion()
    {
        return (string) $this->retriveAttr(3531,1045)->valor; 
    }
    public function setP1NorteLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3531,1045);
        $atributo->valor = $value;
    }
    public function getP1SurLocalizacion()
    {
        return (string) $this->retriveAttr(3532,1045)->valor; 
    }
    public function setP1SurLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3532,1045);
        $atributo->valor = $value;
    }
    public function getP1OrienteLocalizacion()
    {
        return (string) $this->retriveAttr(3533,1045)->valor; 
    }
    public function setP1OrienteLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3533,1045);
        $atributo->valor = $value;
    }
    public function getP1PonienteLocalizacion()
    {
        return (string) $this->retriveAttr(3534,1045)->valor; 
    }
    public function setP1PonienteLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3534,1045);
        $atributo->valor = $value;
    }
    public function getP2CopiaEscritura()
    {
        return  $this->retriveAttr(3575,1046)->valor; 
    }
    public function setP2CopiaEscritura($value)
    {   
        $atributo=$this->retriveAttr(3575,1046);
        $atributo->valor = $value;
    }
    public function getP2Croquis()
    {
        return  $this->retriveAttr(3576,1046)->valor; 
    }
    public function setP2Croquis($value)
    {   
        $atributo=$this->retriveAttr(3576,1046);
        $atributo->valor = $value;
    }
    public function getP2Pago()
    {
        return  $this->retriveAttr(3580,1046)->valor; 
    }
    public function setP2Pago($value)
    {   
        $atributo=$this->retriveAttr(3580,1046);
        $atributo->valor = $value;
    }
    public function getP3Nombre()
    {
        return (string) $this->retriveAttr(3587,1047)->valor; 
    }
    public function setP3Nombre($value)
    {   
        $atributo=$this->retriveAttr(3587,1047);
        $atributo->valor = $value;
    }
    public function getP3NumeroAsignado()
    {
        return (string) $this->retriveAttr(3588,1047)->valor; 
    }
    public function setP3NumeroAsignado($value)
    {   
        $atributo=$this->retriveAttr(3588,1047);
        $atributo->valor = $value;
    }
    public function getP3Observaciones()
    {
        return (string) $this->retriveAttr(3589,1047)->valor; 
    }
    public function setP3Observaciones($value)
    {   
        $atributo=$this->retriveAttr(3589,1047);
        $atributo->valor = $value;
    }
    public function getP4Resolutivo()
    {
        return  $this->retriveAttr(3611,1048)->valor; 
    }
    public function setP4Resolutivo($value)
    {   
        $atributo=$this->retriveAttr(3611,1048);
        $atributo->valor = $value;
    }
    public function getP5CopiaEscritura()
    {
        return (int) $this->retriveAttr(3612,1049)->valor; 
    }
    public function setP5CopiaEscritura($value)
    {   
        $atributo=$this->retriveAttr(3612,1049);
        $atributo->valor = $value;
    }
    public function getP5Croquis()
    {
        return (int) $this->retriveAttr(3613,1049)->valor; 
    }
    public function setP5Croquis($value)
    {   
        $atributo=$this->retriveAttr(3613,1049);
        $atributo->valor = $value;
    }
    public function getP5Pago()
    {
        return (int) $this->retriveAttr(3614,1049)->valor; 
    }
    public function setP5Pago($value)
    {   
        $atributo=$this->retriveAttr(3614,1049);
        $atributo->valor = $value;
    }
    public function getP5Resolutivo()
    {
        return (int) $this->retriveAttr(3615,1049)->valor; 
    }
    public function setP5Resolutivo($value)
    {   
        $atributo=$this->retriveAttr(3615,1049);
        $atributo->valor = $value;
    }
    public function getP6NumeroOficial()
    {
        return  $this->retriveAttr(3616,1050)->valor; 
    }
    public function setP6NumeroOficial($value)
    {   
        $atributo=$this->retriveAttr(3616,1050);
        $atributo->valor = $value;
    }
    public function getP7EnvioExpediente()
    {
        return (int) $this->retriveAttr(3617,1051)->valor; 
    }
    public function setP7EnvioExpediente($value)
    {   
        $atributo=$this->retriveAttr(3617,1051);
        $atributo->valor = $value;
    }
    public function getP7Observaciones()
    {
        return (string) $this->retriveAttr(3618,1051)->valor; 
    }
    public function setP7Observaciones($value)
    {   
        $atributo=$this->retriveAttr(3618,1051);
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
