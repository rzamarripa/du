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
 * @property EncabezadoImagenes[] $encabezadoImagenes
 * @property Estatus $estatus
 * @property PasosTramite $pasoActual
 * @property TiposTramite $tipoTramite
 * @property ValoresTramite[] $valoresTramites
 */

class TramitesAperturaCepas extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 3014; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['p1Solicitud', 'p1DirectorResponsable', 'p1PlanoTrayectoria', 'p1ProgramaObra', 'p1PresupuestoObra', 'p1AnuenciaVecinos', 'p1Fianza', 'p1Pago', 'p2NombreSupervisor', 'p2Observaciones', 'p2Expediente', 'p3Resolutivo', 'p3Pago', 'p5AperturasCepas', 'p6Observaciones', 'p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1ClaveCatastralPredio'], 'string'],
                [['p2Supervision', 'p4Solicitud', 'p4DirectorResponsable', 'p4PlanoTrayectoria', 'p4ProgramaObra', 'p4PresupuestoObra', 'p4AnuenciaVecinos', 'p4Fianza', 'p4PagoDerechos', 'p4Expediente', 'p4Pago', 'p4Resolutivo', 'p6EnvioExpediente'], 'integer'],
                [['p1Solicitud', 'p1DirectorResponsable', 'p1PlanoTrayectoria', 'p1ProgramaObra', 'p1PresupuestoObra', 'p1AnuenciaVecinos', 'p1Fianza', 'p1Pago', 'p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1ClaveCatastralPredio'], 'required', 'on'=>'1078'],
                [['p2Supervision', 'p2NombreSupervisor', 'p2Observaciones', 'p2Expediente'], 'required', 'on'=>'1079'],
                [['p3Resolutivo', 'p3Pago'], 'required', 'on'=>'1080'],
                [['p4Solicitud', 'p4DirectorResponsable', 'p4PlanoTrayectoria', 'p4ProgramaObra', 'p4PresupuestoObra', 'p4AnuenciaVecinos', 'p4Fianza', 'p4PagoDerechos', 'p4Expediente', 'p4Pago', 'p4Resolutivo'], 'required', 'on'=>'1081'],
                [['p5AperturasCepas'], 'required', 'on'=>'1082'],
                [['p6EnvioExpediente', 'p6Observaciones'], 'required', 'on'=>'1083'],
                [['p2NombreSupervisor', 'p1NombrePropietarios', 'p1TelefonoPropietarios', 'p1ClaveCatastralPredio'], 'string', 'max' => 50],
                [['p2Observaciones', 'p6Observaciones', 'p1DireccionPropietarios'], 'string', 'max' => 500]];

        
            
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
            'p1Solicitud' => 'Solicitud por escrito dirigida a la dirección de desarrollo urbano y ecologico',
            'p1DirectorResponsable' => 'Deberá contratar los servicios de un director responsable de obra',
            'p1PlanoTrayectoria' => 'Deberá entregar plano de trayectoria y ubicación de registro en coordenadas UTM. Firmado por DRO',
            'p1ProgramaObra' => 'Entregar programa de obra detallado. Firmado por DRO',
            'p1PresupuestoObra' => 'Entregar presupuesto de obra civil detallado acorde al trabajo a realizar. Firmado por DRO',
            'p1AnuenciaVecinos' => 'Presentar anuencia de vecinos, a los cuales la trayectoria de la cepa pase por enfrente',
            'p1Fianza' => 'Presentar fianza como garantía de realizar las reparaciones correspondientes, la cual sera por el monto del presupuesto autorizado, un año de vigencia y a favor de municipio de culiacan',
            'p1Pago' => 'Pagar los derechos correspondientes según la ley de hacienda',
            'p2Supervision' => 'Supervision',
            'p2NombreSupervisor' => 'Nombre del Supervisor',
            'p2Observaciones' => 'Observaciones',
            'p2Expediente' => 'Expediente de supervision',
            'p3Resolutivo' => 'Resolutivo',
            'p3Pago' => 'Pago',
            'p4Solicitud' => 'Solicitud',
            'p4DirectorResponsable' => 'Deberá contratar los servicios de un director responsable de obra',
            'p4PlanoTrayectoria' => 'Deberá entregar plano de trayectoria y ubicación de registro en coordenadas UTM. Firmado por DRO',
            'p4ProgramaObra' => 'Entregar programa de obra detallado. Firmado por DRO',
            'p4PresupuestoObra' => 'Entregar presupuesto de obra civil detallado acorde al trabajo a realizar. Firmado por DRO',
            'p4AnuenciaVecinos' => 'Presentar anuencia de vecinos, a los cuales la trayectoria de la cepa pase por enfrente',
            'p4Fianza' => 'Presentar fianza como garantía de realizar las reparaciones correspondientes, la cual sera por el monto del presupuesto autorizado, un año de vigencia y a favor de municipio de culiacan',
            'p4PagoDerechos' => 'Pagar los derechos correspondientes según la ley de hacienda',
            'p4Expediente' => 'Expediente de supervision',
            'p4Pago' => 'Pago',
            'p4Resolutivo' => 'Resolutivo',
            'p5AperturasCepas' => 'Aperturas de Cepas',
            'p6EnvioExpediente' => 'Se envío Expediente',
            'p6Observaciones' => 'Observaciones',
            'p1NombrePropietarios' => 'Nombre',
            'p1DireccionPropietarios' => 'Direccion',
            'p1TelefonoPropietarios' => 'Telefono',
            'p1ClaveCatastralPredio' => 'Clave Catastral',
        ];
    }

    public function getP1Solicitud()
    {
        return  $this->retriveAttr(3705,1078)->valor; 
    }
    public function setP1Solicitud($value)
    {   
        $atributo=$this->retriveAttr(3705,1078);
        $atributo->valor = $value;
    }
    public function getP1DirectorResponsable()
    {
        return  $this->retriveAttr(3706,1078)->valor; 
    }
    public function setP1DirectorResponsable($value)
    {   
        $atributo=$this->retriveAttr(3706,1078);
        $atributo->valor = $value;
    }
    public function getP1PlanoTrayectoria()
    {
        return  $this->retriveAttr(3707,1078)->valor; 
    }
    public function setP1PlanoTrayectoria($value)
    {   
        $atributo=$this->retriveAttr(3707,1078);
        $atributo->valor = $value;
    }
    public function getP1ProgramaObra()
    {
        return  $this->retriveAttr(3708,1078)->valor; 
    }
    public function setP1ProgramaObra($value)
    {   
        $atributo=$this->retriveAttr(3708,1078);
        $atributo->valor = $value;
    }
    public function getP1PresupuestoObra()
    {
        return  $this->retriveAttr(3709,1078)->valor; 
    }
    public function setP1PresupuestoObra($value)
    {   
        $atributo=$this->retriveAttr(3709,1078);
        $atributo->valor = $value;
    }
    public function getP1AnuenciaVecinos()
    {
        return  $this->retriveAttr(3710,1078)->valor; 
    }
    public function setP1AnuenciaVecinos($value)
    {   
        $atributo=$this->retriveAttr(3710,1078);
        $atributo->valor = $value;
    }
    public function getP1Fianza()
    {
        return  $this->retriveAttr(3711,1078)->valor; 
    }
    public function setP1Fianza($value)
    {   
        $atributo=$this->retriveAttr(3711,1078);
        $atributo->valor = $value;
    }
    public function getP1Pago()
    {
        return  $this->retriveAttr(3712,1078)->valor; 
    }
    public function setP1Pago($value)
    {   
        $atributo=$this->retriveAttr(3712,1078);
        $atributo->valor = $value;
    }
    public function getP2Supervision()
    {
        return (int) $this->retriveAttr(3713,1079)->valor; 
    }
    public function setP2Supervision($value)
    {   
        $atributo=$this->retriveAttr(3713,1079);
        $atributo->valor = $value;
    }
    public function getP2NombreSupervisor()
    {
        return (string) $this->retriveAttr(3714,1079)->valor; 
    }
    public function setP2NombreSupervisor($value)
    {   
        $atributo=$this->retriveAttr(3714,1079);
        $atributo->valor = $value;
    }
    public function getP2Observaciones()
    {
        return (string) $this->retriveAttr(3715,1079)->valor; 
    }
    public function setP2Observaciones($value)
    {   
        $atributo=$this->retriveAttr(3715,1079);
        $atributo->valor = $value;
    }
    public function getP2Expediente()
    {
        return  $this->retriveAttr(3716,1079)->valor; 
    }
    public function setP2Expediente($value)
    {   
        $atributo=$this->retriveAttr(3716,1079);
        $atributo->valor = $value;
    }
    public function getP3Resolutivo()
    {
        return  $this->retriveAttr(3717,1080)->valor; 
    }
    public function setP3Resolutivo($value)
    {   
        $atributo=$this->retriveAttr(3717,1080);
        $atributo->valor = $value;
    }
    public function getP3Pago()
    {
        return  $this->retriveAttr(3718,1080)->valor; 
    }
    public function setP3Pago($value)
    {   
        $atributo=$this->retriveAttr(3718,1080);
        $atributo->valor = $value;
    }
    public function getP4Solicitud()
    {
        return (int) $this->retriveAttr(3719,1081)->valor; 
    }
    public function setP4Solicitud($value)
    {   
        $atributo=$this->retriveAttr(3719,1081);
        $atributo->valor = $value;
    }
    public function getP4DirectorResponsable()
    {
        return (int) $this->retriveAttr(3720,1081)->valor; 
    }
    public function setP4DirectorResponsable($value)
    {   
        $atributo=$this->retriveAttr(3720,1081);
        $atributo->valor = $value;
    }
    public function getP4PlanoTrayectoria()
    {
        return (int) $this->retriveAttr(3721,1081)->valor; 
    }
    public function setP4PlanoTrayectoria($value)
    {   
        $atributo=$this->retriveAttr(3721,1081);
        $atributo->valor = $value;
    }
    public function getP4ProgramaObra()
    {
        return (int) $this->retriveAttr(3722,1081)->valor; 
    }
    public function setP4ProgramaObra($value)
    {   
        $atributo=$this->retriveAttr(3722,1081);
        $atributo->valor = $value;
    }
    public function getP4PresupuestoObra()
    {
        return (int) $this->retriveAttr(3723,1081)->valor; 
    }
    public function setP4PresupuestoObra($value)
    {   
        $atributo=$this->retriveAttr(3723,1081);
        $atributo->valor = $value;
    }
    public function getP4AnuenciaVecinos()
    {
        return (int) $this->retriveAttr(3724,1081)->valor; 
    }
    public function setP4AnuenciaVecinos($value)
    {   
        $atributo=$this->retriveAttr(3724,1081);
        $atributo->valor = $value;
    }
    public function getP4Fianza()
    {
        return (int) $this->retriveAttr(3725,1081)->valor; 
    }
    public function setP4Fianza($value)
    {   
        $atributo=$this->retriveAttr(3725,1081);
        $atributo->valor = $value;
    }
    public function getP4PagoDerechos()
    {
        return (int) $this->retriveAttr(3726,1081)->valor; 
    }
    public function setP4PagoDerechos($value)
    {   
        $atributo=$this->retriveAttr(3726,1081);
        $atributo->valor = $value;
    }
    public function getP4Expediente()
    {
        return (int) $this->retriveAttr(3727,1081)->valor; 
    }
    public function setP4Expediente($value)
    {   
        $atributo=$this->retriveAttr(3727,1081);
        $atributo->valor = $value;
    }
    public function getP4Pago()
    {
        return (int) $this->retriveAttr(3728,1081)->valor; 
    }
    public function setP4Pago($value)
    {   
        $atributo=$this->retriveAttr(3728,1081);
        $atributo->valor = $value;
    }
    public function getP4Resolutivo()
    {
        return (int) $this->retriveAttr(3729,1081)->valor; 
    }
    public function setP4Resolutivo($value)
    {   
        $atributo=$this->retriveAttr(3729,1081);
        $atributo->valor = $value;
    }
    public function getP5AperturasCepas()
    {
        return  $this->retriveAttr(3730,1082)->valor; 
    }
    public function setP5AperturasCepas($value)
    {   
        $atributo=$this->retriveAttr(3730,1082);
        $atributo->valor = $value;
    }
    public function getP6EnvioExpediente()
    {
        return (int) $this->retriveAttr(3731,1083)->valor; 
    }
    public function setP6EnvioExpediente($value)
    {   
        $atributo=$this->retriveAttr(3731,1083);
        $atributo->valor = $value;
    }
    public function getP6Observaciones()
    {
        return (string) $this->retriveAttr(3732,1083)->valor; 
    }
    public function setP6Observaciones($value)
    {   
        $atributo=$this->retriveAttr(3732,1083);
        $atributo->valor = $value;
    }
    public function getP1NombrePropietarios()
    {
        return (string) $this->retriveAttr(3733,1078)->valor; 
    }
    public function setP1NombrePropietarios($value)
    {   
        $atributo=$this->retriveAttr(3733,1078);
        $atributo->valor = $value;
    }
    public function getP1DireccionPropietarios()
    {
        return (string) $this->retriveAttr(3734,1078)->valor; 
    }
    public function setP1DireccionPropietarios($value)
    {   
        $atributo=$this->retriveAttr(3734,1078);
        $atributo->valor = $value;
    }
    public function getP1TelefonoPropietarios()
    {
        return (string) $this->retriveAttr(3735,1078)->valor; 
    }
    public function setP1TelefonoPropietarios($value)
    {   
        $atributo=$this->retriveAttr(3735,1078);
        $atributo->valor = $value;
    }
    public function getP1ClaveCatastralPredio()
    {
        return (string) $this->retriveAttr(3736,1078)->valor; 
    }
    public function setP1ClaveCatastralPredio($value)
    {   
        $atributo=$this->retriveAttr(3736,1078);
        $atributo->valor = $value;
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEncabezadoImagenes()
    {
        return $this->hasMany(EncabezadoImagenes::className(), ['tramite_id' => 'id']);
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
    //esto es generico
    public function getEncabezadoImagen()
    {
        return $this->hasOne(EncabezadoImagenes::className(), ['tramite_id' => 'id']);
    }
    
}
