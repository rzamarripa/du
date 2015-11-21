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

class TramitesZonificacion extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 2002; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['p1NombreSolicitante', 'p1DireccionSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1FirmaSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescriProceso', 'p1NoCajones', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficialPredio', 'p1NumeroInteriorPredio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1ClaveCatastralPredio', 'p1NombrePropietario', 'p1DireccionPropietario', 'p1TelefonoPropietario', 'p1CorreoPropietario', 'p1FirmaPropietario', 'p1Observaciones', 'p1NombreGestor', 'p1DireccionGestor', 'p1TelefonoGestor', 'p1CorreoGestor', 'p1FirmaGestor'], 'string','on'=>3],
                [['p1SuperficiePredio', 'p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1PlantabajaConstruida', 'p1PlantaaltaConstruida', 'p1SegundonivelConstruida', 'p1OtrosConstruida', 'p1PlantabajaXConstruir', 'p1PlantaaltaXConstruir', 'p1SegundonivelXConstruir', 'p1OtrosXConstruir', 'p1TotalConstruida', 'p1TotalXConstruir'], 'double','on'=>3],
                [['p2Escrituras', 'p2ReciboDerechos', 'p2CroquisUbicacion', 'p2Pago'], 'string','on'=>4],
                [['p3Pago', 'p3Escrituras', 'p3ReciboDerechos', 'p3CroquisUbicacion'], 'integer','on'=>5],
                [['p4Imprimir'], 'string','on'=>7],
                [['p3Pago', 'p3Escrituras', 'p3ReciboDerechos', 'p3CroquisUbicacion'], 'required', 'on'=>'5'],
                [['p1NombreSolicitante', 'p1CorreoSolicitante', 'p1FirmaSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1CallePredio', 'p1ColoniaPredio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1NombrePropietario', 'p1CorreoPropietario', 'p1FirmaPropietario', 'p1NombreGestor', 'p1CorreoGestor', 'p1FirmaGestor'], 'string', 'max' => 50,'on'=>3],
                [['p1DireccionSolicitante', 'p1DescriProceso', 'p1DireccionPropietario', 'p1Observaciones', 'p1DireccionGestor'], 'string', 'max' => 500,'on'=>3],
                [['p1TelefonoSolicitante', 'p1NoCajones', 'p1NumeroOficialPredio', 'p1NumeroInteriorPredio', 'p1TelefonoPropietario', 'p1TelefonoGestor'], 'string', 'max' => 20,'on'=>3],
                [['p1ClaveCatastralPredio'], 'string', 'max' => 30,'on'=>3],
                [['p4Imprimir'], 'string', 'max' => 1,'on'=>7]];


        
            
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
            'p1NombreSolicitante' => 'Nombre',
            'p1DireccionSolicitante' => 'Direccion',
            'p1TelefonoSolicitante' => 'Telefono',
            'p1CorreoSolicitante' => 'Correo',
            'p1FirmaSolicitante' => 'Firma',
            'p1UsoActual' => 'Uso Actual',
            'p1UsoSolicitado' => 'Uso Solicitado',
            'p1DescriProceso' => 'Descripción del Proyecto',
            'p1NoCajones' => 'No. Cajones de Estacionamiento con que cuenta el Establecimiento',
            'p2Escrituras' => 'Copia de Escrituras',
            'p2ReciboDerechos' => 'Recibo de Pago de Derechos Correspondientes',
            'p2CroquisUbicacion' => 'Croquis de Ubicacion',
            'p1CallePredio' => 'calle',
            'p1ColoniaPredio' => 'fraccionamiento o colonia',
            'p1NumeroOficialPredio' => 'número oficial',
            'p1NumeroInteriorPredio' => 'número interior',
            'p1PobladoPredio' => 'Poblado',
            'p1SindicaturaPredio' => 'Sindicatura',
            'p1ClaveCatastralPredio' => 'Clave Catastral',
            'p1SuperficiePredio' => 'Superficie del predio',
            'p1NortePredio' => 'Norte',
            'p1SurPredio' => 'sur',
            'p1OrientePredio' => 'oriente',
            'p1PonientePredio' => 'poniente',
            'p1NombrePropietario' => 'Nombre',
            'p1DireccionPropietario' => 'Dirección',
            'p1TelefonoPropietario' => 'teléfono',
            'p1CorreoPropietario' => 'Correo',
            'p1FirmaPropietario' => 'Firma',
            'p1PlantabajaConstruida' => 'plantabaja',
            'p1PlantaaltaConstruida' => 'plantaalta',
            'p1SegundonivelConstruida' => 'segundonivel',
            'p1OtrosConstruida' => 'otros',
            'p1PlantabajaXConstruir' => 'plantabaja',
            'p1PlantaaltaXConstruir' => 'plantaalta',
            'p1SegundonivelXConstruir' => 'segundonivel',
            'p1OtrosXConstruir' => 'otros',
            'p1TotalConstruida' => 'total',
            'p1TotalXConstruir' => 'total1',
            'p1Observaciones' => 'observaciones',
            'p1NombreGestor' => 'Nombre',
            'p1DireccionGestor' => 'Dirección',
            'p1TelefonoGestor' => 'telefono',
            'p1CorreoGestor' => 'Correo',
            'p1FirmaGestor' => 'Firma',
            'p3Pago' => 'Solicitud',
            'p3Escrituras' => 'Copia de Escrituras',
            'p3ReciboDerechos' => 'Recibo de Pago de Derechos Correspondientes',
            'p3CroquisUbicacion' => 'Croquis de Ubicacion',
            'p2Pago' => 'Pago',
            'p4Imprimir' => 'Imprimir',
            'p4Supervisor' => 'Revisar Supervisor'
            'p4ObservacionesSupervisor' => 'Observaciones',

        ];
    }

    public function getP1NombreSolicitante()
    {
        return (string) $this->retriveAttr(1020,3)->valor; 
    }
    public function setP1NombreSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1020,3);
        $atributo->valor = $value;
    }
    public function getP1DireccionSolicitante()
    {
        return (string) $this->retriveAttr(1021,3)->valor; 
    }
    public function setP1DireccionSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1021,3);
        $atributo->valor = $value;
    }
    public function getP1TelefonoSolicitante()
    {
        return (string) $this->retriveAttr(1022,3)->valor; 
    }
    public function setP1TelefonoSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1022,3);
        $atributo->valor = $value;
    }
    public function getP1CorreoSolicitante()
    {
        return (string) $this->retriveAttr(1023,3)->valor; 
    }
    public function setP1CorreoSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1023,3);
        $atributo->valor = $value;
    }
    public function getP1FirmaSolicitante()
    {
        return (string) $this->retriveAttr(1024,3)->valor; 
    }
    public function setP1FirmaSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1024,3);
        $atributo->valor = $value;
    }
    public function getP1UsoActual()
    {
        return (string) $this->retriveAttr(1025,3)->valor; 
    }
    public function setP1UsoActual($value)
    {   
        $atributo=$this->retriveAttr(1025,3);
        $atributo->valor = $value;
    }
    public function getP1UsoSolicitado()
    {
        return (string) $this->retriveAttr(1026,3)->valor; 
    }
    public function setP1UsoSolicitado($value)
    {   
        $atributo=$this->retriveAttr(1026,3);
        $atributo->valor = $value;
    }
    public function getP1DescriProceso()
    {
        return (string) 'hola'; 
    }
    public function setP1DescriProceso($value)
    {   
        $atributo=$this->retriveAttr(1027,3);
        $atributo->valor = $value;
    }
    public function getP1NoCajones()
    {
        return (string) $this->retriveAttr(1028,3)->valor; 
    }
    public function setP1NoCajones($value)
    {   
        $atributo=$this->retriveAttr(1028,3);
        $atributo->valor = $value;
    }
    public function getP2Escrituras()
    {
        return  $this->retriveAttr(1030,4)->valor; 
    }
    public function setP2Escrituras($value)
    {   
        $atributo=$this->retriveAttr(1030,4);
        $atributo->valor = $value;
    }
    public function getP2ReciboDerechos()
    {
        return  $this->retriveAttr(1032,4)->valor; 
    }
    public function setP2ReciboDerechos($value)
    {   
        $atributo=$this->retriveAttr(1032,4);
        $atributo->valor = $value;
    }
    public function getP2CroquisUbicacion()
    {
        return  $this->retriveAttr(1034,4)->valor; 
    }
    public function setP2CroquisUbicacion($value)
    {   
        $atributo=$this->retriveAttr(1034,4);
        $atributo->valor = $value;
    }
    public function getP1CallePredio()
    {
        return (string) $this->retriveAttr(1059,3)->valor; 
    }
    public function setP1CallePredio($value)
    {   
        $atributo=$this->retriveAttr(1059,3);
        $atributo->valor = $value;
    }
    public function getP1ColoniaPredio()
    {
        return (string) $this->retriveAttr(1060,3)->valor; 
    }
    public function setP1ColoniaPredio($value)
    {   
        $atributo=$this->retriveAttr(1060,3);
        $atributo->valor = $value;
    }
    public function getP1NumeroOficialPredio()
    {
        return (string) $this->retriveAttr(1061,3)->valor; 
    }
    public function setP1NumeroOficialPredio($value)
    {   
        $atributo=$this->retriveAttr(1061,3);
        $atributo->valor = $value;
    }
    public function getP1NumeroInteriorPredio()
    {
        return (string) $this->retriveAttr(1062,3)->valor; 
    }
    public function setP1NumeroInteriorPredio($value)
    {   
        $atributo=$this->retriveAttr(1062,3);
        $atributo->valor = $value;
    }
    public function getP1PobladoPredio()
    {
        return (string) $this->retriveAttr(1063,3)->valor; 
    }
    public function setP1PobladoPredio($value)
    {   
        $atributo=$this->retriveAttr(1063,3);
        $atributo->valor = $value;
    }
    public function getP1SindicaturaPredio()
    {
        return (string) $this->retriveAttr(1064,3)->valor; 
    }
    public function setP1SindicaturaPredio($value)
    {   
        $atributo=$this->retriveAttr(1064,3);
        $atributo->valor = $value;
    }
    public function getP1ClaveCatastralPredio()
    {
        return (string) $this->retriveAttr(1065,3)->valor; 
    }
    public function setP1ClaveCatastralPredio($value)
    {   
        $atributo=$this->retriveAttr(1065,3);
        $atributo->valor = $value;
    }
    public function getP1SuperficiePredio()
    {
        return (float) $this->retriveAttr(1066,3)->valor; 
    }
    public function setP1SuperficiePredio($value)
    {   
        $atributo=$this->retriveAttr(1066,3);
        $atributo->valor = $value;
    }
    public function getP1NortePredio()
    {
        return (float) $this->retriveAttr(1067,3)->valor; 
    }
    public function setP1NortePredio($value)
    {   
        $atributo=$this->retriveAttr(1067,3);
        $atributo->valor = $value;
    }
    public function getP1SurPredio()
    {
        return (float) $this->retriveAttr(1068,3)->valor; 
    }
    public function setP1SurPredio($value)
    {   
        $atributo=$this->retriveAttr(1068,3);
        $atributo->valor = $value;
    }
    public function getP1OrientePredio()
    {
        return (float) $this->retriveAttr(1069,3)->valor; 
    }
    public function setP1OrientePredio($value)
    {   
        $atributo=$this->retriveAttr(1069,3);
        $atributo->valor = $value;
    }
    public function getP1PonientePredio()
    {
        return (float) $this->retriveAttr(1070,3)->valor; 
    }
    public function setP1PonientePredio($value)
    {   
        $atributo=$this->retriveAttr(1070,3);
        $atributo->valor = $value;
    }
    public function getP1NombrePropietario()
    {
        return (string) $this->retriveAttr(1071,3)->valor; 
    }
    public function setP1NombrePropietario($value)
    {   
        $atributo=$this->retriveAttr(1071,3);
        $atributo->valor = $value;
    }
    public function getP1DireccionPropietario()
    {
        return (string) $this->retriveAttr(1072,3)->valor; 
    }
    public function setP1DireccionPropietario($value)
    {   
        $atributo=$this->retriveAttr(1072,3);
        $atributo->valor = $value;
    }
    public function getP1TelefonoPropietario()
    {
        return (string) $this->retriveAttr(1073,3)->valor; 
    }
    public function setP1TelefonoPropietario($value)
    {   
        $atributo=$this->retriveAttr(1073,3);
        $atributo->valor = $value;
    }
    public function getP1CorreoPropietario()
    {
        return (string) $this->retriveAttr(1074,3)->valor; 
    }
    public function setP1CorreoPropietario($value)
    {   
        $atributo=$this->retriveAttr(1074,3);
        $atributo->valor = $value;
    }
    public function getP1FirmaPropietario()
    {
        return (string) $this->retriveAttr(1075,3)->valor; 
    }
    public function setP1FirmaPropietario($value)
    {   
        $atributo=$this->retriveAttr(1075,3);
        $atributo->valor = $value;
    }
    public function getP1PlantabajaConstruida()
    {
        return (float) $this->retriveAttr(1076,3)->valor; 
    }
    public function setP1PlantabajaConstruida($value)
    {   
        $atributo=$this->retriveAttr(1076,3);
        $atributo->valor = $value;
    }
    public function getP1PlantaaltaConstruida()
    {
        return (float) $this->retriveAttr(1077,3)->valor; 
    }
    public function setP1PlantaaltaConstruida($value)
    {   
        $atributo=$this->retriveAttr(1077,3);
        $atributo->valor = $value;
    }
    public function getP1SegundonivelConstruida()
    {
        return (float) $this->retriveAttr(1078,3)->valor; 
    }
    public function setP1SegundonivelConstruida($value)
    {   
        $atributo=$this->retriveAttr(1078,3);
        $atributo->valor = $value;
    }
    public function getP1OtrosConstruida()
    {
        return (float) $this->retriveAttr(1079,3)->valor; 
    }
    public function setP1OtrosConstruida($value)
    {   
        $atributo=$this->retriveAttr(1079,3);
        $atributo->valor = $value;
    }
    public function getP1PlantabajaXConstruir()
    {
        return (float) $this->retriveAttr(1080,3)->valor; 
    }
    public function setP1PlantabajaXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1080,3);
        $atributo->valor = $value;
    }
    public function getP1PlantaaltaXConstruir()
    {
        return (float) $this->retriveAttr(1081,3)->valor; 
    }
    public function setP1PlantaaltaXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1081,3);
        $atributo->valor = $value;
    }
    public function getP1SegundonivelXConstruir()
    {
        return (float) $this->retriveAttr(1083,3)->valor; 
    }
    public function setP1SegundonivelXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1083,3);
        $atributo->valor = $value;
    }
    public function getP1OtrosXConstruir()
    {
        return (float) $this->retriveAttr(1084,3)->valor; 
    }
    public function setP1OtrosXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1084,3);
        $atributo->valor = $value;
    }
    public function getP1TotalConstruida()
    {
        return (float) $this->retriveAttr(1085,3)->valor; 
    }
    public function setP1TotalConstruida($value)
    {   
        $atributo=$this->retriveAttr(1085,3);
        $atributo->valor = $value;
    }
    public function getP1TotalXConstruir()
    {
        return (float) $this->retriveAttr(1086,3)->valor; 
    }
    public function setP1TotalXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1086,3);
        $atributo->valor = $value;
    }
    public function getP1Observaciones()
    {
        return (string) $this->retriveAttr(1087,3)->valor; 
    }
    public function setP1Observaciones($value)
    {   
        $atributo=$this->retriveAttr(1087,3);
        $atributo->valor = $value;
    }
    public function getP1NombreGestor()
    {
        return (string) $this->retriveAttr(1089,3)->valor; 
    }
    public function setP1NombreGestor($value)
    {   
        $atributo=$this->retriveAttr(1089,3);
        $atributo->valor = $value;
    }
    public function getP1DireccionGestor()
    {
        return (string) $this->retriveAttr(1090,3)->valor; 
    }
    public function setP1DireccionGestor($value)
    {   
        $atributo=$this->retriveAttr(1090,3);
        $atributo->valor = $value;
    }
    public function getP1TelefonoGestor()
    {
        return (string) $this->retriveAttr(1091,3)->valor; 
    }
    public function setP1TelefonoGestor($value)
    {   
        $atributo=$this->retriveAttr(1091,3);
        $atributo->valor = $value;
    }
    public function getP1CorreoGestor()
    {
        return (string) $this->retriveAttr(1092,3)->valor; 
    }
    public function setP1CorreoGestor($value)
    {   
        $atributo=$this->retriveAttr(1092,3);
        $atributo->valor = $value;
    }
    public function getP1FirmaGestor()
    {
        return (string) $this->retriveAttr(1093,3)->valor; 
    }
    public function setP1FirmaGestor($value)
    {   
        $atributo=$this->retriveAttr(1093,3);
        $atributo->valor = $value;
    }
    public function getP3Pago()
    {
        return (int) $this->retriveAttr(1094,5)->valor; 
    }
    public function setP3Pago($value)
    {   
        $atributo=$this->retriveAttr(1094,5);
        $atributo->valor = $value;
    }
    public function getP3Escrituras()
    {
        return (int) $this->retriveAttr(1095,5)->valor; 
    }
    public function setP3Escrituras($value)
    {   
        $atributo=$this->retriveAttr(1095,5);
        $atributo->valor = $value;
    }
    public function getP3ReciboDerechos()
    {
        return (int) $this->retriveAttr(1096,5)->valor; 
    }
    public function setP3ReciboDerechos($value)
    {   
        $atributo=$this->retriveAttr(1096,5);
        $atributo->valor = $value;
    }
    public function getP3CroquisUbicacion()
    {
        return (int) $this->retriveAttr(1098,5)->valor; 
    }
    public function setP3CroquisUbicacion($value)
    {   
        $atributo=$this->retriveAttr(1098,5);
        $atributo->valor = $value;
    }
    public function getP2Pago()
    {
        return  $this->retriveAttr(1127,4)->valor; 
    }
    public function setP2Pago($value)
    {   
        $atributo=$this->retriveAttr(1127,4);
        $atributo->valor = $value;
    }
    public function getP4Imprimir()
    {
        return (string) $this->retriveAttr(1128,7)->valor; 
    }
    public function setP4Imprimir($value)
    {   
        $atributo=$this->retriveAttr(1128,7);
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
