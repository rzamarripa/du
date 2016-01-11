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

class TramitesCertificadoOcupacion extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 3013; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['p1NombrePropietario', 'p1DireccionPropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1UsoActual', 'p1UsoSolicitado', 'p1Cajones', 'p1Observaciones', 'p2PlanoAutorizado', 'p2Licencia', 'p2Pago', 'p2Vitacora', 'p4Resolutivo', 'p3NombreSupervisor', 'p3Observaciones', 'p3Expediente', 'p6Certificado', 'p7Observaciones'], 'string'],
                [['p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaBajaXConstruir', 'p1PlantaAltaXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir'], 'double'],
                [['p3Supervision', 'p5PlanoAutorizado', 'p5Licencia', 'p5Pago', 'p5Vitacora', 'p5Expediente', 'p7EnvioExpediente'], 'integer'],
                [['p1NombrePropietario', 'p1DireccionPropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaBajaXConstruir', 'p1PlantaAltaXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir', 'p1UsoActual', 'p1UsoSolicitado', 'p1Cajones', 'p1Observaciones'], 'required', 'on'=>'1071'],
                [['p2PlanoAutorizado', 'p2Licencia', 'p2Pago', 'p2Vitacora'], 'required', 'on'=>'1072'],
                [['p4Resolutivo'], 'required', 'on'=>'1074'],
                [['p3Supervision', 'p3NombreSupervisor', 'p3Observaciones', 'p3Expediente'], 'required', 'on'=>'1073'],
                [['p5PlanoAutorizado', 'p5Licencia', 'p5Pago', 'p5Vitacora', 'p5Expediente'], 'required', 'on'=>'1075'],
                [['p6Certificado'], 'required', 'on'=>'1076'],
                [['p7EnvioExpediente', 'p7Observaciones'], 'required', 'on'=>'1077'],
                [['p1NombrePropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1UsoActual', 'p1UsoSolicitado', 'p1Cajones', 'p3NombreSupervisor'], 'string', 'max' => 50],
                [['p1DireccionPropietario', 'p1Observaciones', 'p3Observaciones', 'p7Observaciones'], 'string', 'max' => 500]];

        
            
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
            'p1NortePredio' => 'Al Norte',
            'p1SurPredio' => 'Al Sur',
            'p1OrientePredio' => 'Al Oriente',
            'p1PonientePredio' => 'Al Poniente',
            'p1PlantaBajaConstruida' => 'Planta Baja Construida',
            'p1PlantaAltaConstruida' => 'Planta Alta Construida',
            'p1OtrosConstruida' => 'Otros',
            'p1TotalConstruida' => 'TOTAL',
            'p1PlantaBajaXConstruir' => 'Planta Baja Por Construir',
            'p1PlantaAltaXConstruir' => 'Planta Alta Por Construir',
            'p1OtrosXConstruir' => 'Otros',
            'p1TotalXConstruir' => 'TOTAL',
            'p1UsoActual' => 'Uso Actual',
            'p1UsoSolicitado' => 'Uso Solicitado',
            'p1Cajones' => 'No de Cajones de Estacionamiento',
            'p1Observaciones' => 'Observaciones',
            'p2PlanoAutorizado' => 'Copia de plano autorizado',
            'p2Licencia' => 'Copia de licencia',
            'p2Pago' => 'Pago',
            'p2Vitacora' => 'Copia de la nota de Bitácora',
            'p4Resolutivo' => 'Resolutivo',
            'p3Supervision' => 'Supervision',
            'p3NombreSupervisor' => 'Nombre del Supervisor',
            'p3Observaciones' => 'Observaciones',
            'p3Expediente' => 'Expediente',
            'p5PlanoAutorizado' => 'Copia de plano autorizado',
            'p5Licencia' => 'Copia de licencia',
            'p5Pago' => 'Pago',
            'p5Vitacora' => 'Copia de la nota de Bitácora',
            'p5Expediente' => 'Expediente de supervision',
            'p6Certificado' => 'Certificado de Ocupacion',
            'p7EnvioExpediente' => 'Se envío Expediente',
            'p7Observaciones' => 'Observaciones',
        ];
    }

    public function getP1NombrePropietario()
    {
        return (string) $this->retriveAttr(3646,1071)->valor; 
    }
    public function setP1NombrePropietario($value)
    {   
        $atributo=$this->retriveAttr(3646,1071);
        $atributo->valor = $value;
    }
    public function getP1DireccionPropietario()
    {
        return (string) $this->retriveAttr(3647,1071)->valor; 
    }
    public function setP1DireccionPropietario($value)
    {   
        $atributo=$this->retriveAttr(3647,1071);
        $atributo->valor = $value;
    }
    public function getP1TelefonoPropietario()
    {
        return (string) $this->retriveAttr(3648,1071)->valor; 
    }
    public function setP1TelefonoPropietario($value)
    {   
        $atributo=$this->retriveAttr(3648,1071);
        $atributo->valor = $value;
    }
    public function getP1CallePredio()
    {
        return (string) $this->retriveAttr(3652,1071)->valor; 
    }
    public function setP1CallePredio($value)
    {   
        $atributo=$this->retriveAttr(3652,1071);
        $atributo->valor = $value;
    }
    public function getP1FraccColoniaPredio()
    {
        return (string) $this->retriveAttr(3653,1071)->valor; 
    }
    public function setP1FraccColoniaPredio($value)
    {   
        $atributo=$this->retriveAttr(3653,1071);
        $atributo->valor = $value;
    }
    public function getP1LotePredio()
    {
        return (string) $this->retriveAttr(3654,1071)->valor; 
    }
    public function setP1LotePredio($value)
    {   
        $atributo=$this->retriveAttr(3654,1071);
        $atributo->valor = $value;
    }
    public function getP1ManzanaPredio()
    {
        return (string) $this->retriveAttr(3655,1071)->valor; 
    }
    public function setP1ManzanaPredio($value)
    {   
        $atributo=$this->retriveAttr(3655,1071);
        $atributo->valor = $value;
    }
    public function getP1ClaveCatastralPredio()
    {
        return (string) $this->retriveAttr(3656,1071)->valor; 
    }
    public function setP1ClaveCatastralPredio($value)
    {   
        $atributo=$this->retriveAttr(3656,1071);
        $atributo->valor = $value;
    }
    public function getP1NortePredio()
    {
        return (float) $this->retriveAttr(3657,1071)->valor; 
    }
    public function setP1NortePredio($value)
    {   
        $atributo=$this->retriveAttr(3657,1071);
        $atributo->valor = $value;
    }
    public function getP1SurPredio()
    {
        return (float) $this->retriveAttr(3658,1071)->valor; 
    }
    public function setP1SurPredio($value)
    {   
        $atributo=$this->retriveAttr(3658,1071);
        $atributo->valor = $value;
    }
    public function getP1OrientePredio()
    {
        return (float) $this->retriveAttr(3659,1071)->valor; 
    }
    public function setP1OrientePredio($value)
    {   
        $atributo=$this->retriveAttr(3659,1071);
        $atributo->valor = $value;
    }
    public function getP1PonientePredio()
    {
        return (float) $this->retriveAttr(3660,1071)->valor; 
    }
    public function setP1PonientePredio($value)
    {   
        $atributo=$this->retriveAttr(3660,1071);
        $atributo->valor = $value;
    }
    public function getP1PlantaBajaConstruida()
    {
        return (float) $this->retriveAttr(3661,1071)->valor; 
    }
    public function setP1PlantaBajaConstruida($value)
    {   
        $atributo=$this->retriveAttr(3661,1071);
        $atributo->valor = $value;
    }
    public function getP1PlantaAltaConstruida()
    {
        return (float) $this->retriveAttr(3662,1071)->valor; 
    }
    public function setP1PlantaAltaConstruida($value)
    {   
        $atributo=$this->retriveAttr(3662,1071);
        $atributo->valor = $value;
    }
    public function getP1OtrosConstruida()
    {
        return (float) $this->retriveAttr(3663,1071)->valor; 
    }
    public function setP1OtrosConstruida($value)
    {   
        $atributo=$this->retriveAttr(3663,1071);
        $atributo->valor = $value;
    }
    public function getP1TotalConstruida()
    {
        return (float) $this->retriveAttr(3664,1071)->valor; 
    }
    public function setP1TotalConstruida($value)
    {   
        $atributo=$this->retriveAttr(3664,1071);
        $atributo->valor = $value;
    }
    public function getP1PlantaBajaXConstruir()
    {
        return (float) $this->retriveAttr(3665,1071)->valor; 
    }
    public function setP1PlantaBajaXConstruir($value)
    {   
        $atributo=$this->retriveAttr(3665,1071);
        $atributo->valor = $value;
    }
    public function getP1PlantaAltaXConstruir()
    {
        return (float) $this->retriveAttr(3666,1071)->valor; 
    }
    public function setP1PlantaAltaXConstruir($value)
    {   
        $atributo=$this->retriveAttr(3666,1071);
        $atributo->valor = $value;
    }
    public function getP1OtrosXConstruir()
    {
        return (float) $this->retriveAttr(3667,1071)->valor; 
    }
    public function setP1OtrosXConstruir($value)
    {   
        $atributo=$this->retriveAttr(3667,1071);
        $atributo->valor = $value;
    }
    public function getP1TotalXConstruir()
    {
        return (float) $this->retriveAttr(3668,1071)->valor; 
    }
    public function setP1TotalXConstruir($value)
    {   
        $atributo=$this->retriveAttr(3668,1071);
        $atributo->valor = $value;
    }
    public function getP1UsoActual()
    {
        return (string) $this->retriveAttr(3669,1071)->valor; 
    }
    public function setP1UsoActual($value)
    {   
        $atributo=$this->retriveAttr(3669,1071);
        $atributo->valor = $value;
    }
    public function getP1UsoSolicitado()
    {
        return (string) $this->retriveAttr(3670,1071)->valor; 
    }
    public function setP1UsoSolicitado($value)
    {   
        $atributo=$this->retriveAttr(3670,1071);
        $atributo->valor = $value;
    }
    public function getP1Cajones()
    {
        return (string) $this->retriveAttr(3672,1071)->valor; 
    }
    public function setP1Cajones($value)
    {   
        $atributo=$this->retriveAttr(3672,1071);
        $atributo->valor = $value;
    }
    public function getP1Observaciones()
    {
        return (string) $this->retriveAttr(3673,1071)->valor; 
    }
    public function setP1Observaciones($value)
    {   
        $atributo=$this->retriveAttr(3673,1071);
        $atributo->valor = $value;
    }
    public function getP2PlanoAutorizado()
    {
        return  $this->retriveAttr(3679,1072)->valor; 
    }
    public function setP2PlanoAutorizado($value)
    {   
        $atributo=$this->retriveAttr(3679,1072);
        $atributo->valor = $value;
    }
    public function getP2Licencia()
    {
        return  $this->retriveAttr(3680,1072)->valor; 
    }
    public function setP2Licencia($value)
    {   
        $atributo=$this->retriveAttr(3680,1072);
        $atributo->valor = $value;
    }
    public function getP2Pago()
    {
        return  $this->retriveAttr(3681,1072)->valor; 
    }
    public function setP2Pago($value)
    {   
        $atributo=$this->retriveAttr(3681,1072);
        $atributo->valor = $value;
    }
    public function getP2Vitacora()
    {
        return  $this->retriveAttr(3682,1072)->valor; 
    }
    public function setP2Vitacora($value)
    {   
        $atributo=$this->retriveAttr(3682,1072);
        $atributo->valor = $value;
    }
    public function getP4Resolutivo()
    {
        return  $this->retriveAttr(3692,1074)->valor; 
    }
    public function setP4Resolutivo($value)
    {   
        $atributo=$this->retriveAttr(3692,1074);
        $atributo->valor = $value;
    }
    public function getP3Supervision()
    {
        return (int) $this->retriveAttr(3693,1073)->valor; 
    }
    public function setP3Supervision($value)
    {   
        $atributo=$this->retriveAttr(3693,1073);
        $atributo->valor = $value;
    }
    public function getP3NombreSupervisor()
    {
        return (string) $this->retriveAttr(3694,1073)->valor; 
    }
    public function setP3NombreSupervisor($value)
    {   
        $atributo=$this->retriveAttr(3694,1073);
        $atributo->valor = $value;
    }
    public function getP3Observaciones()
    {
        return (string) $this->retriveAttr(3695,1073)->valor; 
    }
    public function setP3Observaciones($value)
    {   
        $atributo=$this->retriveAttr(3695,1073);
        $atributo->valor = $value;
    }
    public function getP3Expediente()
    {
        return  $this->retriveAttr(3696,1073)->valor; 
    }
    public function setP3Expediente($value)
    {   
        $atributo=$this->retriveAttr(3696,1073);
        $atributo->valor = $value;
    }
    public function getP5PlanoAutorizado()
    {
        return (int) $this->retriveAttr(3697,1075)->valor; 
    }
    public function setP5PlanoAutorizado($value)
    {   
        $atributo=$this->retriveAttr(3697,1075);
        $atributo->valor = $value;
    }
    public function getP5Licencia()
    {
        return (int) $this->retriveAttr(3698,1075)->valor; 
    }
    public function setP5Licencia($value)
    {   
        $atributo=$this->retriveAttr(3698,1075);
        $atributo->valor = $value;
    }
    public function getP5Pago()
    {
        return (int) $this->retriveAttr(3699,1075)->valor; 
    }
    public function setP5Pago($value)
    {   
        $atributo=$this->retriveAttr(3699,1075);
        $atributo->valor = $value;
    }
    public function getP5Vitacora()
    {
        return (int) $this->retriveAttr(3700,1075)->valor; 
    }
    public function setP5Vitacora($value)
    {   
        $atributo=$this->retriveAttr(3700,1075);
        $atributo->valor = $value;
    }
    public function getP5Expediente()
    {
        return (int) $this->retriveAttr(3701,1075)->valor; 
    }
    public function setP5Expediente($value)
    {   
        $atributo=$this->retriveAttr(3701,1075);
        $atributo->valor = $value;
    }
    public function getP6Certificado()
    {
        return  $this->retriveAttr(3702,1076)->valor; 
    }
    public function setP6Certificado($value)
    {   
        $atributo=$this->retriveAttr(3702,1076);
        $atributo->valor = $value;
    }
    public function getP7EnvioExpediente()
    {
        return (int) $this->retriveAttr(3703,1077)->valor; 
    }
    public function setP7EnvioExpediente($value)
    {   
        $atributo=$this->retriveAttr(3703,1077);
        $atributo->valor = $value;
    }
    public function getP7Observaciones()
    {
        return (string) $this->retriveAttr(3704,1077)->valor; 
    }
    public function setP7Observaciones($value)
    {   
        $atributo=$this->retriveAttr(3704,1077);
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
    //esto es generico
    public function getEncabezadoImagen()
    {
        return $this->hasOne(EncabezadoImagenes::className(), ['tramite_id' => 'id']);
    }

}
