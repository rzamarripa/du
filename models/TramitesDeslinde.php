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

class TramitesDeslinde extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 3010; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['p1NombrePropietario', 'p1DireccionPropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1AlineamientoObservaciones', 'p1NoOficialObservaciones', 'p1ProMatObservaciones', 'p1ProHospObservaciones', 'p1ProAlfObservaciones', 'p1TotalObservaciones', 'p1NorteLocalizacion', 'p1SurLocalizacion', 'p1OrienteLocalizacion', 'p1PonienteLocalizacion', 'p2CopiaEscritura', 'p2Croquis', 'p2PlanoManzanero', 'p2Pago', 'p4Nombre', 'p4Observaciones', 'p4Expediente', 'p6Deslinde', 'p7Observaciones'], 'string'],
                [['p3Supervision', 'p3NombreSupervisor', 'p3Observaciones', 'p5CopiaEscritura', 'p5Croquis', 'p5Pago', 'p5PlanoManzanero', 'p5Expediente', 'p7EnvioExpediente'], 'integer'],
                [['p1NombrePropietario', 'p1DireccionPropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1AlineamientoObservaciones', 'p1NoOficialObservaciones', 'p1ProMatObservaciones', 'p1ProHospObservaciones', 'p1ProAlfObservaciones', 'p1TotalObservaciones', 'p1NorteLocalizacion', 'p1SurLocalizacion', 'p1OrienteLocalizacion', 'p1PonienteLocalizacion'], 'required', 'on'=>'1052'],
                [['p2CopiaEscritura', 'p2Croquis', 'p2PlanoManzanero', 'p2Pago'], 'required', 'on'=>'1053'],
                [['p3Supervision', 'p3NombreSupervisor', 'p3Observaciones'], 'required', 'on'=>'1054'],
                [['p4Nombre', 'p4Observaciones', 'p4Expediente'], 'required', 'on'=>'1055'],
                [['p5CopiaEscritura', 'p5Croquis', 'p5Pago', 'p5PlanoManzanero', 'p5Expediente'], 'required', 'on'=>'1056'],
                [['p6Deslinde'], 'required', 'on'=>'1057'],
                [['p7EnvioExpediente', 'p7Observaciones'], 'required', 'on'=>'1058'],
                [['p1NombrePropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1AlineamientoObservaciones', 'p1NoOficialObservaciones', 'p1ProMatObservaciones', 'p1ProHospObservaciones', 'p1ProAlfObservaciones', 'p1TotalObservaciones', 'p1NorteLocalizacion', 'p1SurLocalizacion', 'p1OrienteLocalizacion', 'p1PonienteLocalizacion', 'p4Nombre'], 'string', 'max' => 50],
                [['p1DireccionPropietario', 'p4Observaciones', 'p7Observaciones'], 'string', 'max' => 500]];

        
            
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
            'p2PlanoManzanero' => 'Copia del plano manzanero del instituto catastral',
            'p2Pago' => 'Pago',
            'p3Supervision' => 'Supervision',
            'p3NombreSupervisor' => 'Nombre del Supervisor',
            'p3Observaciones' => 'Observaciones',
            'p4Nombre' => 'Nombre del dibujante',
            'p4Observaciones' => 'Observaciones',
            'p4Expediente' => 'Expediente',
            'p5CopiaEscritura' => 'Copia de escritura o constancia de posesion',
            'p5Croquis' => 'Solicitud con croquis de ubicacion',
            'p5Pago' => 'Pago',
            'p5PlanoManzanero' => 'Copia del plano manzanero del instituto catastral',
            'p5Expediente' => 'Expediente de supervision',
            'p6Deslinde' => 'Documento de Deslinde',
            'p7EnvioExpediente' => 'Se envío Expediente',
            'p7Observaciones' => 'Observaciones',
        ];
    }

    public function getP1NombrePropietario()
    {
        return (string) $this->retriveAttr(3535,1052)->valor; 
    }
    public function setP1NombrePropietario($value)
    {   
        $atributo=$this->retriveAttr(3535,1052);
        $atributo->valor = $value;
    }
    public function getP1DireccionPropietario()
    {
        return (string) $this->retriveAttr(3536,1052)->valor; 
    }
    public function setP1DireccionPropietario($value)
    {   
        $atributo=$this->retriveAttr(3536,1052);
        $atributo->valor = $value;
    }
    public function getP1TelefonoPropietario()
    {
        return (string) $this->retriveAttr(3537,1052)->valor; 
    }
    public function setP1TelefonoPropietario($value)
    {   
        $atributo=$this->retriveAttr(3537,1052);
        $atributo->valor = $value;
    }
    public function getP1CallePredio()
    {
        return (string) $this->retriveAttr(3538,1052)->valor; 
    }
    public function setP1CallePredio($value)
    {   
        $atributo=$this->retriveAttr(3538,1052);
        $atributo->valor = $value;
    }
    public function getP1FraccColoniaPredio()
    {
        return (string) $this->retriveAttr(3539,1052)->valor; 
    }
    public function setP1FraccColoniaPredio($value)
    {   
        $atributo=$this->retriveAttr(3539,1052);
        $atributo->valor = $value;
    }
    public function getP1LotePredio()
    {
        return (string) $this->retriveAttr(3540,1052)->valor; 
    }
    public function setP1LotePredio($value)
    {   
        $atributo=$this->retriveAttr(3540,1052);
        $atributo->valor = $value;
    }
    public function getP1ManzanaPredio()
    {
        return (string) $this->retriveAttr(3541,1052)->valor; 
    }
    public function setP1ManzanaPredio($value)
    {   
        $atributo=$this->retriveAttr(3541,1052);
        $atributo->valor = $value;
    }
    public function getP1ClaveCatastralPredio()
    {
        return (string) $this->retriveAttr(3542,1052)->valor; 
    }
    public function setP1ClaveCatastralPredio($value)
    {   
        $atributo=$this->retriveAttr(3542,1052);
        $atributo->valor = $value;
    }
    public function getP1AlineamientoObservaciones()
    {
        return (string) $this->retriveAttr(3543,1052)->valor; 
    }
    public function setP1AlineamientoObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3543,1052);
        $atributo->valor = $value;
    }
    public function getP1NoOficialObservaciones()
    {
        return (string) $this->retriveAttr(3544,1052)->valor; 
    }
    public function setP1NoOficialObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3544,1052);
        $atributo->valor = $value;
    }
    public function getP1ProMatObservaciones()
    {
        return (string) $this->retriveAttr(3545,1052)->valor; 
    }
    public function setP1ProMatObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3545,1052);
        $atributo->valor = $value;
    }
    public function getP1ProHospObservaciones()
    {
        return (string) $this->retriveAttr(3546,1052)->valor; 
    }
    public function setP1ProHospObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3546,1052);
        $atributo->valor = $value;
    }
    public function getP1ProAlfObservaciones()
    {
        return (string) $this->retriveAttr(3547,1052)->valor; 
    }
    public function setP1ProAlfObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3547,1052);
        $atributo->valor = $value;
    }
    public function getP1TotalObservaciones()
    {
        return (string) $this->retriveAttr(3548,1052)->valor; 
    }
    public function setP1TotalObservaciones($value)
    {   
        $atributo=$this->retriveAttr(3548,1052);
        $atributo->valor = $value;
    }
    public function getP1NorteLocalizacion()
    {
        return (string) $this->retriveAttr(3549,1052)->valor; 
    }
    public function setP1NorteLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3549,1052);
        $atributo->valor = $value;
    }
    public function getP1SurLocalizacion()
    {
        return (string) $this->retriveAttr(3550,1052)->valor; 
    }
    public function setP1SurLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3550,1052);
        $atributo->valor = $value;
    }
    public function getP1OrienteLocalizacion()
    {
        return (string) $this->retriveAttr(3551,1052)->valor; 
    }
    public function setP1OrienteLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3551,1052);
        $atributo->valor = $value;
    }
    public function getP1PonienteLocalizacion()
    {
        return (string) $this->retriveAttr(3552,1052)->valor; 
    }
    public function setP1PonienteLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3552,1052);
        $atributo->valor = $value;
    }
    public function getP2CopiaEscritura()
    {
        return  $this->retriveAttr(3573,1053)->valor; 
    }
    public function setP2CopiaEscritura($value)
    {   
        $atributo=$this->retriveAttr(3573,1053);
        $atributo->valor = $value;
    }
    public function getP2Croquis()
    {
        return  $this->retriveAttr(3574,1053)->valor; 
    }
    public function setP2Croquis($value)
    {   
        $atributo=$this->retriveAttr(3574,1053);
        $atributo->valor = $value;
    }
    public function getP2PlanoManzanero()
    {
        return  $this->retriveAttr(3577,1053)->valor; 
    }
    public function setP2PlanoManzanero($value)
    {   
        $atributo=$this->retriveAttr(3577,1053);
        $atributo->valor = $value;
    }
    public function getP2Pago()
    {
        return  $this->retriveAttr(3578,1053)->valor; 
    }
    public function setP2Pago($value)
    {   
        $atributo=$this->retriveAttr(3578,1053);
        $atributo->valor = $value;
    }
    public function getP3Supervision()
    {
        return (int) $this->retriveAttr(3584,1054)->valor; 
    }
    public function setP3Supervision($value)
    {   
        $atributo=$this->retriveAttr(3584,1054);
        $atributo->valor = $value;
    }
    public function getP3NombreSupervisor()
    {
        return (int) $this->retriveAttr(3585,1054)->valor; 
    }
    public function setP3NombreSupervisor($value)
    {   
        $atributo=$this->retriveAttr(3585,1054);
        $atributo->valor = $value;
    }
    public function getP3Observaciones()
    {
        return (int) $this->retriveAttr(3586,1054)->valor; 
    }
    public function setP3Observaciones($value)
    {   
        $atributo=$this->retriveAttr(3586,1054);
        $atributo->valor = $value;
    }
    public function getP4Nombre()
    {
        return (string) $this->retriveAttr(3590,1055)->valor; 
    }
    public function setP4Nombre($value)
    {   
        $atributo=$this->retriveAttr(3590,1055);
        $atributo->valor = $value;
    }
    public function getP4Observaciones()
    {
        return (string) $this->retriveAttr(3591,1055)->valor; 
    }
    public function setP4Observaciones($value)
    {   
        $atributo=$this->retriveAttr(3591,1055);
        $atributo->valor = $value;
    }
    public function getP4Expediente()
    {
        return  $this->retriveAttr(3592,1055)->valor; 
    }
    public function setP4Expediente($value)
    {   
        $atributo=$this->retriveAttr(3592,1055);
        $atributo->valor = $value;
    }
    public function getP5CopiaEscritura()
    {
        return (int) $this->retriveAttr(3603,1056)->valor; 
    }
    public function setP5CopiaEscritura($value)
    {   
        $atributo=$this->retriveAttr(3603,1056);
        $atributo->valor = $value;
    }
    public function getP5Croquis()
    {
        return (int) $this->retriveAttr(3604,1056)->valor; 
    }
    public function setP5Croquis($value)
    {   
        $atributo=$this->retriveAttr(3604,1056);
        $atributo->valor = $value;
    }
    public function getP5Pago()
    {
        return (int) $this->retriveAttr(3605,1056)->valor; 
    }
    public function setP5Pago($value)
    {   
        $atributo=$this->retriveAttr(3605,1056);
        $atributo->valor = $value;
    }
    public function getP5PlanoManzanero()
    {
        return (int) $this->retriveAttr(3606,1056)->valor; 
    }
    public function setP5PlanoManzanero($value)
    {   
        $atributo=$this->retriveAttr(3606,1056);
        $atributo->valor = $value;
    }
    public function getP5Expediente()
    {
        return (int) $this->retriveAttr(3607,1056)->valor; 
    }
    public function setP5Expediente($value)
    {   
        $atributo=$this->retriveAttr(3607,1056);
        $atributo->valor = $value;
    }
    public function getP6Deslinde()
    {
        return  $this->retriveAttr(3608,1057)->valor; 
    }
    public function setP6Deslinde($value)
    {   
        $atributo=$this->retriveAttr(3608,1057);
        $atributo->valor = $value;
    }
    public function getP7EnvioExpediente()
    {
        return (int) $this->retriveAttr(3609,1058)->valor; 
    }
    public function setP7EnvioExpediente($value)
    {   
        $atributo=$this->retriveAttr(3609,1058);
        $atributo->valor = $value;
    }
    public function getP7Observaciones()
    {
        return (string) $this->retriveAttr(3610,1058)->valor; 
    }
    public function setP7Observaciones($value)
    {   
        $atributo=$this->retriveAttr(3610,1058);
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
