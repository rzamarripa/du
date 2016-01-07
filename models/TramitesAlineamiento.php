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

class TramitesAlineamiento extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 3008; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['p1NombrePropietario', 'p1DireccionPropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1AlineamientoObservaciones', 'p1NoOficialObservaciones', 'p1ProMatObservaciones', 'p1ProHospObservaciones', 'p1ProAlfObservaciones', 'p1TotalObservaciones', 'p1NorteLocalizacion', 'p1SurLocalizacion', 'p1OrienteLocalizacion', 'p1PonienteLocalizacion', 'p2CopiaEscritura', 'p2Croquis', 'p2Pago', 'p3NombreSupervisor', 'p3Observaciones', 'p4Nombre', 'p4Expediente', 'p4Observaciones', 'p6Alineamiento', 'p7Observaciones'], 'string'],
                [['p3Supervision', 'p5CopiaEscritura', 'p5Croquis', 'p5Pago', 'p5Expediente', 'p7EnvioExpediente'], 'integer'],
                [['p1NombrePropietario', 'p1DireccionPropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1AlineamientoObservaciones', 'p1NoOficialObservaciones', 'p1ProMatObservaciones', 'p1ProHospObservaciones', 'p1ProAlfObservaciones', 'p1TotalObservaciones', 'p1NorteLocalizacion', 'p1SurLocalizacion', 'p1OrienteLocalizacion', 'p1PonienteLocalizacion'], 'required', 'on'=>'1038'],
                [['p2CopiaEscritura', 'p2Croquis', 'p2Pago'], 'required', 'on'=>'1039'],
                [['p3Supervision', 'p3NombreSupervisor', 'p3Observaciones'], 'required', 'on'=>'1040'],
                [['p4Nombre', 'p4Expediente', 'p4Observaciones'], 'required', 'on'=>'1041'],
                [['p5CopiaEscritura', 'p5Croquis', 'p5Pago', 'p5Expediente'], 'required', 'on'=>'1042'],
                [['p6Alineamiento'], 'required', 'on'=>'1043'],
                [['p7EnvioExpediente', 'p7Observaciones'], 'required', 'on'=>'1044'],
                [['p1NombrePropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1AlineamientoObservaciones', 'p1NoOficialObservaciones', 'p1ProMatObservaciones', 'p1ProHospObservaciones', 'p1ProAlfObservaciones', 'p1TotalObservaciones', 'p1NorteLocalizacion', 'p1SurLocalizacion', 'p1OrienteLocalizacion', 'p1PonienteLocalizacion', 'p3NombreSupervisor', 'p4Nombre'], 'string', 'max' => 50],
                [['p1DireccionPropietario', 'p3Observaciones', 'p4Observaciones', 'p7Observaciones'], 'string', 'max' => 500]];

        
            
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
            'p3Supervision' => 'Supervision',
            'p3NombreSupervisor' => 'Nombre del Supervisor',
            'p3Observaciones' => 'Observaciones',
            'p4Nombre' => 'Nombre del dibujante',
            'p4Expediente' => 'Expediente',
            'p4Observaciones' => 'Observaciones',
            'p5CopiaEscritura' => 'Copia de escritura o constancia de posesion',
            'p5Croquis' => 'Solicitud con croquis de ubicacion',
            'p5Pago' => 'Pago',
            'p5Expediente' => 'Expediente de supervision',
            'p6Alineamiento' => 'Documento de Alineamiento',
            'p7EnvioExpediente' => 'Se envío Expediente',
            'p7Observaciones' => 'Observaciones',
        ];
    }

    public function getP1NombrePropietario()
    {
        return (string) $this->retriveAttr(3499,1038)->valor; 
    }
    public function setP1NombrePropietario($value)
    {   
        $atributo=$this->retriveAttr(3499,1038);
        $atributo->valor = $value;
    }
    public function getP1DireccionPropietario()
    {
        return (string) $this->retriveAttr(3500,1038)->valor; 
    }
    public function setP1DireccionPropietario($value)
    {   
        $atributo=$this->retriveAttr(3500,1038);
        $atributo->valor = $value;
    }
    public function getP1TelefonoPropietario()
    {
        return (string) $this->retriveAttr(3501,1038)->valor; 
    }
    public function setP1TelefonoPropietario($value)
    {   
        $atributo=$this->retriveAttr(3501,1038);
        $atributo->valor = $value;
    }
    public function getP1CallePredio()
    {
        return (string) $this->retriveAttr(3502,1038)->valor; 
    }
    public function setP1CallePredio($value)
    {   
        $atributo=$this->retriveAttr(3502,1038);
        $atributo->valor = $value;
    }
    public function getP1FraccColoniaPredio()
    {
        return (string) $this->retriveAttr(3503,1038)->valor; 
    }
    public function setP1FraccColoniaPredio($value)
    {   
        $atributo=$this->retriveAttr(3503,1038);
        $atributo->valor = $value;
    }
    public function getP1LotePredio()
    {
        return (string) $this->retriveAttr(3504,1038)->valor; 
    }
    public function setP1LotePredio($value)
    {   
        $atributo=$this->retriveAttr(3504,1038);
        $atributo->valor = $value;
    }
    public function getP1ManzanaPredio()
    {
        return (string) $this->retriveAttr(3505,1038)->valor; 
    }
    public function setP1ManzanaPredio($value)
    {   
        $atributo=$this->retriveAttr(3505,1038);
        $atributo->valor = $value;
    }
    public function getP1ClaveCatastralPredio()
    {
        return (string) $this->retriveAttr(3506,1038)->valor; 
    }
    public function setP1ClaveCatastralPredio($value)
    {   
        $atributo=$this->retriveAttr(3506,1038);
        $atributo->valor = $value;
    }
    public function getP1AlineamientoObservaciones()
    {
        return (string) $this->retriveAttr(3507,1038)->valor; 
    }
    public function setP1AlineamientoObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3507,1038);
        $atributo->valor = $value;
    }
    public function getP1NoOficialObservaciones()
    {
        return (string) $this->retriveAttr(3508,1038)->valor; 
    }
    public function setP1NoOficialObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3508,1038);
        $atributo->valor = $value;
    }
    public function getP1ProMatObservaciones()
    {
        return (string) $this->retriveAttr(3509,1038)->valor; 
    }
    public function setP1ProMatObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3509,1038);
        $atributo->valor = $value;
    }
    public function getP1ProHospObservaciones()
    {
        return (string) $this->retriveAttr(3510,1038)->valor; 
    }
    public function setP1ProHospObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3510,1038);
        $atributo->valor = $value;
    }
    public function getP1ProAlfObservaciones()
    {
        return (string) $this->retriveAttr(3511,1038)->valor; 
    }
    public function setP1ProAlfObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3511,1038);
        $atributo->valor = $value;
    }
    public function getP1TotalObservaciones()
    {
        return (string) $this->retriveAttr(3512,1038)->valor; 
    }
    public function setP1TotalObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3512,1038);
        $atributo->valor = $value;
    }
    public function getP1NorteLocalizacion()
    {
        return (string) $this->retriveAttr(3513,1038)->valor; 
    }
    public function setP1NorteLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3513,1038);
        $atributo->valor = $value;
    }
    public function getP1SurLocalizacion()
    {
        return (string) $this->retriveAttr(3514,1038)->valor; 
    }
    public function setP1SurLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3514,1038);
        $atributo->valor = $value;
    }
    public function getP1OrienteLocalizacion()
    {
        return (string) $this->retriveAttr(3515,1038)->valor; 
    }
    public function setP1OrienteLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3515,1038);
        $atributo->valor = $value;
    }
    public function getP1PonienteLocalizacion()
    {
        return (string) $this->retriveAttr(3516,1038)->valor; 
    }
    public function setP1PonienteLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3516,1038);
        $atributo->valor = $value;
    }
    public function getP2CopiaEscritura()
    {
        return  $this->retriveAttr(3571,1039)->valor; 
    }
    public function setP2CopiaEscritura($value)
    {   
        $atributo=$this->retriveAttr(3571,1039);
        $atributo->valor = $value;
    }
    public function getP2Croquis()
    {
        return  $this->retriveAttr(3572,1039)->valor; 
    }
    public function setP2Croquis($value)
    {   
        $atributo=$this->retriveAttr(3572,1039);
        $atributo->valor = $value;
    }
    public function getP2Pago()
    {
        return  $this->retriveAttr(3579,1039)->valor; 
    }
    public function setP2Pago($value)
    {   
        $atributo=$this->retriveAttr(3579,1039);
        $atributo->valor = $value;
    }
    public function getP3Supervision()
    {
        return (int) $this->retriveAttr(3581,1040)->valor; 
    }
    public function setP3Supervision($value)
    {   
        $atributo=$this->retriveAttr(3581,1040);
        $atributo->valor = $value;
    }
    public function getP3NombreSupervisor()
    {
        return (string) $this->retriveAttr(3582,1040)->valor; 
    }
    public function setP3NombreSupervisor($value)
    {   
        $atributo=$this->retriveAttr(3582,1040);
        $atributo->valor = $value;
    }
    public function getP3Observaciones()
    {
        return (string) $this->retriveAttr(3583,1040)->valor; 
    }
    public function setP3Observaciones($value)
    {   
        $atributo=$this->retriveAttr(3583,1040);
        $atributo->valor = $value;
    }
    public function getP4Nombre()
    {
        return (string) $this->retriveAttr(3593,1041)->valor; 
    }
    public function setP4Nombre($value)
    {   
        $atributo=$this->retriveAttr(3593,1041);
        $atributo->valor = $value;
    }
    public function getP4Expediente()
    {
        return  $this->retriveAttr(3594,1041)->valor; 
    }
    public function setP4Expediente($value)
    {   
        $atributo=$this->retriveAttr(3594,1041);
        $atributo->valor = $value;
    }
    public function getP4Observaciones()
    {
        return (string) $this->retriveAttr(3595,1041)->valor; 
    }
    public function setP4Observaciones($value)
    {   
        $atributo=$this->retriveAttr(3595,1041);
        $atributo->valor = $value;
    }
    public function getP5CopiaEscritura()
    {
        return (int) $this->retriveAttr(3596,1042)->valor; 
    }
    public function setP5CopiaEscritura($value)
    {   
        $atributo=$this->retriveAttr(3596,1042);
        $atributo->valor = $value;
    }
    public function getP5Croquis()
    {
        return (int) $this->retriveAttr(3597,1042)->valor; 
    }
    public function setP5Croquis($value)
    {   
        $atributo=$this->retriveAttr(3597,1042);
        $atributo->valor = $value;
    }
    public function getP5Pago()
    {
        return (int) $this->retriveAttr(3598,1042)->valor; 
    }
    public function setP5Pago($value)
    {   
        $atributo=$this->retriveAttr(3598,1042);
        $atributo->valor = $value;
    }
    public function getP5Expediente()
    {
        return (int) $this->retriveAttr(3599,1042)->valor; 
    }
    public function setP5Expediente($value)
    {   
        $atributo=$this->retriveAttr(3599,1042);
        $atributo->valor = $value;
    }
    public function getP6Alineamiento()
    {
        return  $this->retriveAttr(3600,1043)->valor; 
    }
    public function setP6Alineamiento($value)
    {   
        $atributo=$this->retriveAttr(3600,1043);
        $atributo->valor = $value;
    }
    public function getP7EnvioExpediente()
    {
        return (int) $this->retriveAttr(3601,1044)->valor; 
    }
    public function setP7EnvioExpediente($value)
    {   
        $atributo=$this->retriveAttr(3601,1044);
        $atributo->valor = $value;
    }
    public function getP7Observaciones()
    {
        return (string) $this->retriveAttr(3602,1044)->valor; 
    }
    public function setP7Observaciones($value)
    {   
        $atributo=$this->retriveAttr(3602,1044);
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
