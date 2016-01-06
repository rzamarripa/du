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

class TramitesRegimenCondominio extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 3012; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['p1NombrePropietario', 'p1DireccionPropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1Observaciones', 'p1UsoActual', 'p1UsoSolicitado', 'p1Cajones', 'p2Escrituras', 'p2Predial', 'p2Planos', 'p2TablaAreas', 'p2Pago', 'p3Resolutivo', 'p5RegimenCondominio', 'p6Observaciones'], 'string'],
                [['p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1PlantaAltaConstruida', 'p1PlantaBajaConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaBajaXConstruir', 'p1PlantaAltaXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir'], 'double'],
                [['p4Escrituras', 'p4Predial', 'p4Planos', 'p4TablaAreas', 'p4Pago', 'p6EnvioExpediente'], 'integer'],
                [['p1NombrePropietario', 'p1DireccionPropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1PlantaAltaConstruida', 'p1PlantaBajaConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaBajaXConstruir', 'p1PlantaAltaXConstruir', 'p1OtrosXConstruir', 'p1Observaciones', 'p1UsoActual', 'p1UsoSolicitado', 'p1Cajones', 'p1TotalXConstruir'], 'required', 'on'=>'1065'],
                [['p2Escrituras', 'p2Predial', 'p2Planos', 'p2TablaAreas', 'p2Pago'], 'required', 'on'=>'1066'],
                [['p3Resolutivo'], 'required', 'on'=>'1067'],
                [['p4Escrituras', 'p4Predial', 'p4Planos', 'p4TablaAreas', 'p4Pago'], 'required', 'on'=>'1068'],
                [['p5RegimenCondominio'], 'required', 'on'=>'1069'],
                [['p6EnvioExpediente', 'p6Observaciones'], 'required', 'on'=>'1070'],
                [['p1NombrePropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1UsoActual', 'p1UsoSolicitado', 'p1Cajones'], 'string', 'max' => 50],
                [['p1DireccionPropietario', 'p1Observaciones', 'p6Observaciones'], 'string', 'max' => 500]];

        
            
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
            'p1PlantaAltaConstruida' => 'Planta Alta Construida',
            'p1PlantaBajaConstruida' => 'Planta Baja Construida',
            'p1OtrosConstruida' => 'Otros',
            'p1TotalConstruida' => 'TOTAL',
            'p1PlantaBajaXConstruir' => 'Planta Baja Por Construir',
            'p1PlantaAltaXConstruir' => 'Planta Alta Por Construir',
            'p1OtrosXConstruir' => 'Otros',
            'p1Observaciones' => 'Observaciones',
            'p1UsoActual' => 'Uso Actual',
            'p1UsoSolicitado' => 'Uso Solicitado',
            'p1Cajones' => 'No de Cajones de Estacionamiento',
            'p1TotalXConstruir' => 'TOTAL',
            'p2Escrituras' => 'Copia de Escrituras',
            'p2Predial' => 'Estado de cuenta o recibo de predial al corriente',
            'p2Planos' => 'Planos',
            'p2TablaAreas' => 'Tabla de Areas',
            'p2Pago' => 'Pago',
            'p3Resolutivo' => 'Resolutivo',
            'p4Escrituras' => 'Copia de Escrituras',
            'p4Predial' => 'Estado de cuenta o recibo de predial al corriente',
            'p4Planos' => 'Planos',
            'p4TablaAreas' => 'Tabla de Areas',
            'p4Pago' => 'Pago',
            'p5RegimenCondominio' => 'Documento de Regimen en Condominio',
            'p6EnvioExpediente' => 'Se envío Expediente',
            'p6Observaciones' => 'Observaciones',
        ];
    }

    public function getP1NombrePropietario()
    {
        return (string) $this->retriveAttr(3626,1065)->valor; 
    }
    public function setP1NombrePropietario($value)
    {   
        $atributo=$this->retriveAttr(3626,1065);
        $atributo->valor = $value;
    }
    public function getP1DireccionPropietario()
    {
        return (string) $this->retriveAttr(3627,1065)->valor; 
    }
    public function setP1DireccionPropietario($value)
    {   
        $atributo=$this->retriveAttr(3627,1065);
        $atributo->valor = $value;
    }
    public function getP1TelefonoPropietario()
    {
        return (string) $this->retriveAttr(3628,1065)->valor; 
    }
    public function setP1TelefonoPropietario($value)
    {   
        $atributo=$this->retriveAttr(3628,1065);
        $atributo->valor = $value;
    }
    public function getP1CallePredio()
    {
        return (string) $this->retriveAttr(3629,1065)->valor; 
    }
    public function setP1CallePredio($value)
    {   
        $atributo=$this->retriveAttr(3629,1065);
        $atributo->valor = $value;
    }
    public function getP1FraccColoniaPredio()
    {
        return (string) $this->retriveAttr(3630,1065)->valor; 
    }
    public function setP1FraccColoniaPredio($value)
    {   
        $atributo=$this->retriveAttr(3630,1065);
        $atributo->valor = $value;
    }
    public function getP1LotePredio()
    {
        return (string) $this->retriveAttr(3631,1065)->valor; 
    }
    public function setP1LotePredio($value)
    {   
        $atributo=$this->retriveAttr(3631,1065);
        $atributo->valor = $value;
    }
    public function getP1ManzanaPredio()
    {
        return (string) $this->retriveAttr(3632,1065)->valor; 
    }
    public function setP1ManzanaPredio($value)
    {   
        $atributo=$this->retriveAttr(3632,1065);
        $atributo->valor = $value;
    }
    public function getP1ClaveCatastralPredio()
    {
        return (string) $this->retriveAttr(3633,1065)->valor; 
    }
    public function setP1ClaveCatastralPredio($value)
    {   
        $atributo=$this->retriveAttr(3633,1065);
        $atributo->valor = $value;
    }
    public function getP1NortePredio()
    {
        return (float) $this->retriveAttr(3634,1065)->valor; 
    }
    public function setP1NortePredio($value)
    {   
        $atributo=$this->retriveAttr(3634,1065);
        $atributo->valor = $value;
    }
    public function getP1SurPredio()
    {
        return (float) $this->retriveAttr(3635,1065)->valor; 
    }
    public function setP1SurPredio($value)
    {   
        $atributo=$this->retriveAttr(3635,1065);
        $atributo->valor = $value;
    }
    public function getP1OrientePredio()
    {
        return (float) $this->retriveAttr(3636,1065)->valor; 
    }
    public function setP1OrientePredio($value)
    {   
        $atributo=$this->retriveAttr(3636,1065);
        $atributo->valor = $value;
    }
    public function getP1PonientePredio()
    {
        return (float) $this->retriveAttr(3637,1065)->valor; 
    }
    public function setP1PonientePredio($value)
    {   
        $atributo=$this->retriveAttr(3637,1065);
        $atributo->valor = $value;
    }
    public function getP1PlantaAltaConstruida()
    {
        return (float) $this->retriveAttr(3638,1065)->valor; 
    }
    public function setP1PlantaAltaConstruida($value)
    {   
        $atributo=$this->retriveAttr(3638,1065);
        $atributo->valor = $value;
    }
    public function getP1PlantaBajaConstruida()
    {
        return (float) $this->retriveAttr(3639,1065)->valor; 
    }
    public function setP1PlantaBajaConstruida($value)
    {   
        $atributo=$this->retriveAttr(3639,1065);
        $atributo->valor = $value;
    }
    public function getP1OtrosConstruida()
    {
        return (float) $this->retriveAttr(3640,1065)->valor; 
    }
    public function setP1OtrosConstruida($value)
    {   
        $atributo=$this->retriveAttr(3640,1065);
        $atributo->valor = $value;
    }
    public function getP1TotalConstruida()
    {
        return (float) $this->retriveAttr(3641,1065)->valor; 
    }
    public function setP1TotalConstruida($value)
    {   
        $atributo=$this->retriveAttr(3641,1065);
        $atributo->valor = $value;
    }
    public function getP1PlantaBajaXConstruir()
    {
        return (float) $this->retriveAttr(3642,1065)->valor; 
    }
    public function setP1PlantaBajaXConstruir($value)
    {   
        $atributo=$this->retriveAttr(3642,1065);
        $atributo->valor = $value;
    }
    public function getP1PlantaAltaXConstruir()
    {
        return (float) $this->retriveAttr(3643,1065)->valor; 
    }
    public function setP1PlantaAltaXConstruir($value)
    {   
        $atributo=$this->retriveAttr(3643,1065);
        $atributo->valor = $value;
    }
    public function getP1OtrosXConstruir()
    {
        return (float) $this->retriveAttr(3644,1065)->valor; 
    }
    public function setP1OtrosXConstruir($value)
    {   
        $atributo=$this->retriveAttr(3644,1065);
        $atributo->valor = $value;
    }
    public function getP1Observaciones()
    {
        return (string) $this->retriveAttr(3645,1065)->valor; 
    }
    public function setP1Observaciones($value)
    {   
        $atributo=$this->retriveAttr(3645,1065);
        $atributo->valor = $value;
    }
    public function getP1UsoActual()
    {
        return (string) $this->retriveAttr(3649,1065)->valor; 
    }
    public function setP1UsoActual($value)
    {   
        $atributo=$this->retriveAttr(3649,1065);
        $atributo->valor = $value;
    }
    public function getP1UsoSolicitado()
    {
        return (string) $this->retriveAttr(3650,1065)->valor; 
    }
    public function setP1UsoSolicitado($value)
    {   
        $atributo=$this->retriveAttr(3650,1065);
        $atributo->valor = $value;
    }
    public function getP1Cajones()
    {
        return (string) $this->retriveAttr(3651,1065)->valor; 
    }
    public function setP1Cajones($value)
    {   
        $atributo=$this->retriveAttr(3651,1065);
        $atributo->valor = $value;
    }
    public function getP1TotalXConstruir()
    {
        return (float) $this->retriveAttr(3671,1065)->valor; 
    }
    public function setP1TotalXConstruir($value)
    {   
        $atributo=$this->retriveAttr(3671,1065);
        $atributo->valor = $value;
    }
    public function getP2Escrituras()
    {
        return  $this->retriveAttr(3674,1066)->valor; 
    }
    public function setP2Escrituras($value)
    {   
        $atributo=$this->retriveAttr(3674,1066);
        $atributo->valor = $value;
    }
    public function getP2Predial()
    {
        return  $this->retriveAttr(3675,1066)->valor; 
    }
    public function setP2Predial($value)
    {   
        $atributo=$this->retriveAttr(3675,1066);
        $atributo->valor = $value;
    }
    public function getP2Planos()
    {
        return  $this->retriveAttr(3676,1066)->valor; 
    }
    public function setP2Planos($value)
    {   
        $atributo=$this->retriveAttr(3676,1066);
        $atributo->valor = $value;
    }
    public function getP2TablaAreas()
    {
        return  $this->retriveAttr(3677,1066)->valor; 
    }
    public function setP2TablaAreas($value)
    {   
        $atributo=$this->retriveAttr(3677,1066);
        $atributo->valor = $value;
    }
    public function getP2Pago()
    {
        return  $this->retriveAttr(3678,1066)->valor; 
    }
    public function setP2Pago($value)
    {   
        $atributo=$this->retriveAttr(3678,1066);
        $atributo->valor = $value;
    }
    public function getP3Resolutivo()
    {
        return  $this->retriveAttr(3683,1067)->valor; 
    }
    public function setP3Resolutivo($value)
    {   
        $atributo=$this->retriveAttr(3683,1067);
        $atributo->valor = $value;
    }
    public function getP4Escrituras()
    {
        return (int) $this->retriveAttr(3684,1068)->valor; 
    }
    public function setP4Escrituras($value)
    {   
        $atributo=$this->retriveAttr(3684,1068);
        $atributo->valor = $value;
    }
    public function getP4Predial()
    {
        return (int) $this->retriveAttr(3685,1068)->valor; 
    }
    public function setP4Predial($value)
    {   
        $atributo=$this->retriveAttr(3685,1068);
        $atributo->valor = $value;
    }
    public function getP4Planos()
    {
        return (int) $this->retriveAttr(3686,1068)->valor; 
    }
    public function setP4Planos($value)
    {   
        $atributo=$this->retriveAttr(3686,1068);
        $atributo->valor = $value;
    }
    public function getP4TablaAreas()
    {
        return (int) $this->retriveAttr(3687,1068)->valor; 
    }
    public function setP4TablaAreas($value)
    {   
        $atributo=$this->retriveAttr(3687,1068);
        $atributo->valor = $value;
    }
    public function getP4Pago()
    {
        return (int) $this->retriveAttr(3688,1068)->valor; 
    }
    public function setP4Pago($value)
    {   
        $atributo=$this->retriveAttr(3688,1068);
        $atributo->valor = $value;
    }
    public function getP5RegimenCondominio()
    {
        return  $this->retriveAttr(3689,1069)->valor; 
    }
    public function setP5RegimenCondominio($value)
    {   
        $atributo=$this->retriveAttr(3689,1069);
        $atributo->valor = $value;
    }
    public function getP6EnvioExpediente()
    {
        return (int) $this->retriveAttr(3690,1070)->valor; 
    }
    public function setP6EnvioExpediente($value)
    {   
        $atributo=$this->retriveAttr(3690,1070);
        $atributo->valor = $value;
    }
    public function getP6Observaciones()
    {
        return (string) $this->retriveAttr(3691,1070)->valor; 
    }
    public function setP6Observaciones($value)
    {   
        $atributo=$this->retriveAttr(3691,1070);
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
