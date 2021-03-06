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

class TramiteRelotificacion extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 2004; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['p1NombreSolicitante', 'p1DireccionSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescriProceso', 'p1NoCajones', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1ClaveCatastralPredio', 'p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1FirmaSolicitante', 'p1FirmaPropietarios', 'p1Observaciones', 'p1Sellos', 'p1NombreGestor', 'p1DireccionGestor', 'p1TelefonoGestor', 'p1CorreoGestor', 'p1FirmaGestor', 'p2Escrituras', 'p2ReciboDerechos', 'p2CroquisUbicacion', 'p2Pago', 'p2Alineamiento', 'p2PropuestaRelotificacion', 'p4Imprimir', 'p5Constancia', 'p4ObservacionesSupervisor','p4ExpSupervisor'], 'string'],
                [['p1SuperficiePredio', 'p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1SegundoNivelConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaAltaXConstruir', 'p1PlantaBajaXConstruir', 'p1SegundoNivelXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir'], 'double'],
                [['p3Escrituras', 'p3ReciboDerechos', 'p3CroquisUbicacion', 'p3Pago', 'p3Alineamiento', 'p3PropuestaRelotificacion', 'p4Supervisor'], 'integer'],
                [['p1NombreSolicitante', 'p1DireccionSolicitante', 'p1TelefonoSolicitante'], 'required', 'on'=>'12'],
                [['p2Alineamiento', 'p2PropuestaRelotificacion'], 'required', 'on'=>'13'],
                [['p4ObservacionesSupervisor'], 'string', 'on'=>'22'],
                [['p5Constancia'], 'required', 'on'=>'15'],
                [['p3Alineamiento', 'p3PropuestaRelotificacion'], 'required', 'on'=>'14'],
                [['p1NombreSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescriProceso', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1NombrePropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1FirmaSolicitante', 'p1FirmaPropietarios', 'p1NombreGestor', 'p1TelefonoGestor', 'p1CorreoGestor', 'p1FirmaGestor'], 'string', 'max' => 50],
                [['p1DireccionSolicitante', 'p1DireccionPropietarios', 'p1Observaciones', 'p1Sellos', 'p1DireccionGestor', 'p4ObservacionesSupervisor'], 'string', 'max' => 500],
                [['p1NoCajones'], 'string', 'max' => 20],
                [['p1ClaveCatastralPredio'], 'string', 'max' => 30],
                [['p4Imprimir'], 'string', 'max' => 1]];

        
            
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
            'fechaModificacion' => 'Fecha Modificación',
            'observaciones' => 'Observaciones',
            'estatusId' => 'Estatus ID',
            'p1NombreSolicitante' => 'Nombre',
            'p1DireccionSolicitante' => 'Dirección',
            'p1TelefonoSolicitante' => 'Teléfono',
            'p1CorreoSolicitante' => 'Correo',
            'p1UsoActual' => 'Uso Actual',
            'p1UsoSolicitado' => 'Uso Solicitado',
            'p1DescriProceso' => 'Descripción del Proyecto',
            'p1NoCajones' => 'No. de Cajones con que cuenta el Establecimiento',
            'p1CallePredio' => 'Calle',
            'p1ColoniaPredio' => 'Fraccionamiento o Colonia',
            'p1NumeroOficial' => 'Número Oficial',
            'p1NumeroInterio' => 'Número Interior',
            'p1PobladoPredio' => 'Poblado',
            'p1SindicaturaPredio' => 'Sindicatura',
            'p1ClaveCatastralPredio' => 'Clave Catastral',
            'p1SuperficiePredio' => 'Superficie de Predio',
            'p1NortePredio' => 'Norte',
            'p1SurPredio' => 'Sur',
            'p1OrientePredio' => 'Oriente',
            'p1PonientePredio' => 'Poniente',
            'p1NombrePropietarios' => 'Nombre',
            'p1DireccionPropietarios' => 'Dirección',
            'p1TelefonoPropietarios' => 'Teléfono',
            'p1CorreoPropietarios' => 'Correo',
            'p1FirmaSolicitante' => 'Firma',
            'p1FirmaPropietarios' => 'Firma',
            'p1PlantaBajaConstruida' => 'Planta Baja',
            'p1PlantaAltaConstruida' => 'Planta Alta',
            'p1SegundoNivelConstruida' => 'Segundo Nivel',
            'p1OtrosConstruida' => 'Otros',
            'p1TotalConstruida' => 'Total',
            'p1PlantaAltaXConstruir' => 'Planta Alta',
            'p1PlantaBajaXConstruir' => 'Planta Baja',
            'p1SegundoNivelXConstruir' => 'Segundo Nivel',
            'p1OtrosXConstruir' => 'Otros',
            'p1TotalXConstruir' => 'Total',
            'p1Observaciones' => 'Observaciones',
            'p1Sellos' => 'Sellos',
            'p1NombreGestor' => 'Nombre',
            'p1DireccionGestor' => 'Dirección',
            'p1TelefonoGestor' => 'Teléfono',
            'p1CorreoGestor' => 'Correo',
            'p1FirmaGestor' => 'Firma',
            'p2Escrituras' => 'Copia de Escrituras',
            'p2ReciboDerechos' => 'Recibo de Pago de Derechos Correspondientes',
            'p2CroquisUbicacion' => 'Croquis de Ubicación',
            'p2Pago' => 'Pago',
            'p2Alineamiento' => 'Alineamiento y Número Oficial',
            'p2PropuestaRelotificacion' => '2 Copias de la Propuesta de Relotificación y/o Fusión',
            'p3Escrituras' => 'Copia de Escrituras',
            'p3ReciboDerechos' => 'Recibo de Pago de Derechos Correspondientes',
            'p3CroquisUbicacion' => 'Croquis de Ubicación',
            'p3Pago' => 'Pago',
            'p3Alineamiento' => 'Alineamiento y Numero Oficial',
            'p3PropuestaRelotificacion' => '2 Copias de la Propuesta de Relotificación y/o Fusión',
            'p4Imprimir' => 'Imprimir',
            'p5Constancia' => 'Constancia',
            'p4Supervisor' => 'Supervisor',
            'p4ObservacionesSupervisor' => 'Observaciones',
            'p4ExpSupervisor' => 'Expediente de Supervision',
        ];
    }

    public function getP1NombreSolicitante()
    {
        return (string) $this->retriveAttr(1199,12)->valor; 
    }
    public function setP1NombreSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1199,12);
        $atributo->valor = $value;
    }
    public function getP1DireccionSolicitante()
    {
        return (string) $this->retriveAttr(1200,12)->valor; 
    }
    public function setP1DireccionSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1200,12);
        $atributo->valor = $value;
    }
    public function getP1TelefonoSolicitante()
    {
        return (string) $this->retriveAttr(1201,12)->valor; 
    }
    public function setP1TelefonoSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1201,12);
        $atributo->valor = $value;
    }
    public function getP1CorreoSolicitante()
    {
        return (string) $this->retriveAttr(1202,12)->valor; 
    }
    public function setP1CorreoSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1202,12);
        $atributo->valor = $value;
    }
    public function getP1UsoActual()
    {
        return (string) $this->retriveAttr(1203,12)->valor; 
    }
    public function setP1UsoActual($value)
    {   
        $atributo=$this->retriveAttr(1203,12);
        $atributo->valor = $value;
    }
    public function getP1UsoSolicitado()
    {
        return (string) $this->retriveAttr(1204,12)->valor; 
    }
    public function setP1UsoSolicitado($value)
    {   
        $atributo=$this->retriveAttr(1204,12);
        $atributo->valor = $value;
    }
    public function getP1DescriProceso()
    {
        return (string) $this->retriveAttr(1205,12)->valor; 
    }
    public function setP1DescriProceso($value)
    {   
        $atributo=$this->retriveAttr(1205,12);
        $atributo->valor = $value;
    }
    public function getP1NoCajones()
    {
        return (string) $this->retriveAttr(1206,12)->valor; 
    }
    public function setP1NoCajones($value)
    {   
        $atributo=$this->retriveAttr(1206,12);
        $atributo->valor = $value;
    }
    public function getP1CallePredio()
    {
        return (string) $this->retriveAttr(1207,12)->valor; 
    }
    public function setP1CallePredio($value)
    {   
        $atributo=$this->retriveAttr(1207,12);
        $atributo->valor = $value;
    }
    public function getP1ColoniaPredio()
    {
        return (string) $this->retriveAttr(1208,12)->valor; 
    }
    public function setP1ColoniaPredio($value)
    {   
        $atributo=$this->retriveAttr(1208,12);
        $atributo->valor = $value;
    }
    public function getP1NumeroOficial()
    {
        return (string) $this->retriveAttr(1209,12)->valor; 
    }
    public function setP1NumeroOficial($value)
    {   
        $atributo=$this->retriveAttr(1209,12);
        $atributo->valor = $value;
    }
    public function getP1NumeroInterio()
    {
        return (string) $this->retriveAttr(1210,12)->valor; 
    }
    public function setP1NumeroInterio($value)
    {   
        $atributo=$this->retriveAttr(1210,12);
        $atributo->valor = $value;
    }
    public function getP1PobladoPredio()
    {
        return (string) $this->retriveAttr(1211,12)->valor; 
    }
    public function setP1PobladoPredio($value)
    {   
        $atributo=$this->retriveAttr(1211,12);
        $atributo->valor = $value;
    }
    public function getP1SindicaturaPredio()
    {
        return (string) $this->retriveAttr(1212,12)->valor; 
    }
    public function setP1SindicaturaPredio($value)
    {   
        $atributo=$this->retriveAttr(1212,12);
        $atributo->valor = $value;
    }
    public function getP1ClaveCatastralPredio()
    {
        return (string) $this->retriveAttr(1213,12)->valor; 
    }
    public function setP1ClaveCatastralPredio($value)
    {   
        $atributo=$this->retriveAttr(1213,12);
        $atributo->valor = $value;
    }
    public function getP1SuperficiePredio()
    {
        return (float) $this->retriveAttr(1214,12)->valor; 
    }
    public function setP1SuperficiePredio($value)
    {   
        $atributo=$this->retriveAttr(1214,12);
        $atributo->valor = $value;
    }
    public function getP1NortePredio()
    {
        return (float) $this->retriveAttr(1215,12)->valor; 
    }
    public function setP1NortePredio($value)
    {   
        $atributo=$this->retriveAttr(1215,12);
        $atributo->valor = $value;
    }
    public function getP1SurPredio()
    {
        return (float) $this->retriveAttr(1216,12)->valor; 
    }
    public function setP1SurPredio($value)
    {   
        $atributo=$this->retriveAttr(1216,12);
        $atributo->valor = $value;
    }
    public function getP1OrientePredio()
    {
        return (float) $this->retriveAttr(1217,12)->valor; 
    }
    public function setP1OrientePredio($value)
    {   
        $atributo=$this->retriveAttr(1217,12);
        $atributo->valor = $value;
    }
    public function getP1PonientePredio()
    {
        return (float) $this->retriveAttr(1218,12)->valor; 
    }
    public function setP1PonientePredio($value)
    {   
        $atributo=$this->retriveAttr(1218,12);
        $atributo->valor = $value;
    }
    public function getP1NombrePropietarios()
    {
        return (string) $this->retriveAttr(1219,12)->valor; 
    }
    public function setP1NombrePropietarios($value)
    {   
        $atributo=$this->retriveAttr(1219,12);
        $atributo->valor = $value;
    }
    public function getP1DireccionPropietarios()
    {
        return (string) $this->retriveAttr(1220,12)->valor; 
    }
    public function setP1DireccionPropietarios($value)
    {   
        $atributo=$this->retriveAttr(1220,12);
        $atributo->valor = $value;
    }
    public function getP1TelefonoPropietarios()
    {
        return (string) $this->retriveAttr(1221,12)->valor; 
    }
    public function setP1TelefonoPropietarios($value)
    {   
        $atributo=$this->retriveAttr(1221,12);
        $atributo->valor = $value;
    }
    public function getP1CorreoPropietarios()
    {
        return (string) $this->retriveAttr(1222,12)->valor; 
    }
    public function setP1CorreoPropietarios($value)
    {   
        $atributo=$this->retriveAttr(1222,12);
        $atributo->valor = $value;
    }
    public function getP1FirmaSolicitante()
    {
        return (string) $this->retriveAttr(1223,12)->valor; 
    }
    public function setP1FirmaSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1223,12);
        $atributo->valor = $value;
    }
    public function getP1FirmaPropietarios()
    {
        return (string) $this->retriveAttr(1224,12)->valor; 
    }
    public function setP1FirmaPropietarios($value)
    {   
        $atributo=$this->retriveAttr(1224,12);
        $atributo->valor = $value;
    }
    public function getP1PlantaBajaConstruida()
    {
        return (float) $this->retriveAttr(1225,12)->valor; 
    }
    public function setP1PlantaBajaConstruida($value)
    {   
        $atributo=$this->retriveAttr(1225,12);
        $atributo->valor = $value;
    }
    public function getP1PlantaAltaConstruida()
    {
        return (float) $this->retriveAttr(1226,12)->valor; 
    }
    public function setP1PlantaAltaConstruida($value)
    {   
        $atributo=$this->retriveAttr(1226,12);
        $atributo->valor = $value;
    }
    public function getP1SegundoNivelConstruida()
    {
        return (float) $this->retriveAttr(1227,12)->valor; 
    }
    public function setP1SegundoNivelConstruida($value)
    {   
        $atributo=$this->retriveAttr(1227,12);
        $atributo->valor = $value;
    }
    public function getP1OtrosConstruida()
    {
        return (float) $this->retriveAttr(1228,12)->valor; 
    }
    public function setP1OtrosConstruida($value)
    {   
        $atributo=$this->retriveAttr(1228,12);
        $atributo->valor = $value;
    }
    public function getP1TotalConstruida()
    {
        return (float) $this->retriveAttr(1229,12)->valor; 
    }
    public function setP1TotalConstruida($value)
    {   
        $atributo=$this->retriveAttr(1229,12);
        $atributo->valor = $value;
    }
    public function getP1PlantaAltaXConstruir()
    {
        return (float) $this->retriveAttr(1230,12)->valor; 
    }
    public function setP1PlantaAltaXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1230,12);
        $atributo->valor = $value;
    }
    public function getP1PlantaBajaXConstruir()
    {
        return (float) $this->retriveAttr(1231,12)->valor; 
    }
    public function setP1PlantaBajaXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1231,12);
        $atributo->valor = $value;
    }
    public function getP1SegundoNivelXConstruir()
    {
        return (float) $this->retriveAttr(1232,12)->valor; 
    }
    public function setP1SegundoNivelXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1232,12);
        $atributo->valor = $value;
    }
    public function getP1OtrosXConstruir()
    {
        return (float) $this->retriveAttr(1233,12)->valor; 
    }
    public function setP1OtrosXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1233,12);
        $atributo->valor = $value;
    }
    public function getP1TotalXConstruir()
    {
        return (float) $this->retriveAttr(1234,12)->valor; 
    }
    public function setP1TotalXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1234,12);
        $atributo->valor = $value;
    }
    public function getP1Observaciones()
    {
        return (string) $this->retriveAttr(1235,12)->valor; 
    }
    public function setP1Observaciones($value)
    {   
        $atributo=$this->retriveAttr(1235,12);
        $atributo->valor = $value;
    }
    public function getP1Sellos()
    {
        return (string) $this->retriveAttr(1236,12)->valor; 
    }
    public function setP1Sellos($value)
    {   
        $atributo=$this->retriveAttr(1236,12);
        $atributo->valor = $value;
    }
    public function getP1NombreGestor()
    {
        return (string) $this->retriveAttr(1237,12)->valor; 
    }
    public function setP1NombreGestor($value)
    {   
        $atributo=$this->retriveAttr(1237,12);
        $atributo->valor = $value;
    }
    public function getP1DireccionGestor()
    {
        return (string) $this->retriveAttr(1238,12)->valor; 
    }
    public function setP1DireccionGestor($value)
    {   
        $atributo=$this->retriveAttr(1238,12);
        $atributo->valor = $value;
    }
    public function getP1TelefonoGestor()
    {
        return (string) $this->retriveAttr(1239,12)->valor; 
    }
    public function setP1TelefonoGestor($value)
    {   
        $atributo=$this->retriveAttr(1239,12);
        $atributo->valor = $value;
    }
    public function getP1CorreoGestor()
    {
        return (string) $this->retriveAttr(1240,12)->valor; 
    }
    public function setP1CorreoGestor($value)
    {   
        $atributo=$this->retriveAttr(1240,12);
        $atributo->valor = $value;
    }
    public function getP1FirmaGestor()
    {
        return (string) $this->retriveAttr(1241,12)->valor; 
    }
    public function setP1FirmaGestor($value)
    {   
        $atributo=$this->retriveAttr(1241,12);
        $atributo->valor = $value;
    }
    public function getP2Escrituras()
    {
        return  $this->retriveAttr(1244,13)->valor; 
    }
    public function setP2Escrituras($value)
    {   
        $atributo=$this->retriveAttr(1244,13);
        $atributo->valor = $value;
    }
    public function getP2ReciboDerechos()
    {
        return  $this->retriveAttr(1245,13)->valor; 
    }
    public function setP2ReciboDerechos($value)
    {   
        $atributo=$this->retriveAttr(1245,13);
        $atributo->valor = $value;
    }
    public function getP2CroquisUbicacion()
    {
        return  $this->retriveAttr(1246,13)->valor; 
    }
    public function setP2CroquisUbicacion($value)
    {   
        $atributo=$this->retriveAttr(1246,13);
        $atributo->valor = $value;
    }
    public function getP2Pago()
    {
        return  $this->retriveAttr(1247,13)->valor; 
    }
    public function setP2Pago($value)
    {   
        $atributo=$this->retriveAttr(1247,13);
        $atributo->valor = $value;
    }
    public function getP2Alineamiento()
    {
        return  $this->retriveAttr(1248,13)->valor; 
    }
    public function setP2Alineamiento($value)
    {   
        $atributo=$this->retriveAttr(1248,13);
        $atributo->valor = $value;
    }
    public function getP2PropuestaRelotificacion()
    {
        return  $this->retriveAttr(1249,13)->valor; 
    }
    public function setP2PropuestaRelotificacion($value)
    {   
        $atributo=$this->retriveAttr(1249,13);
        $atributo->valor = $value;
    }
    public function getP3Escrituras()
    {
        return (int) $this->retriveAttr(1250,14)->valor; 
    }
    public function setP3Escrituras($value)
    {   
        $atributo=$this->retriveAttr(1250,14);
        $atributo->valor = $value;
    }
    public function getP3ReciboDerechos()
    {
        return (int) $this->retriveAttr(1251,14)->valor; 
    }
    public function setP3ReciboDerechos($value)
    {   
        $atributo=$this->retriveAttr(1251,14);
        $atributo->valor = $value;
    }
    public function getP3CroquisUbicacion()
    {
        return (int) $this->retriveAttr(1252,14)->valor; 
    }
    public function setP3CroquisUbicacion($value)
    {   
        $atributo=$this->retriveAttr(1252,14);
        $atributo->valor = $value;
    }
    public function getP3Pago()
    {
        return (int) $this->retriveAttr(1253,14)->valor; 
    }
    public function setP3Pago($value)
    {   
        $atributo=$this->retriveAttr(1253,14);
        $atributo->valor = $value;
    }
    public function getP3Alineamiento()
    {
        return (int) $this->retriveAttr(1254,14)->valor; 
    }
    public function setP3Alineamiento($value)
    {   
        $atributo=$this->retriveAttr(1254,14);
        $atributo->valor = $value;
    }
    public function getP3PropuestaRelotificacion()
    {
        return (int) $this->retriveAttr(1255,14)->valor; 
    }
    public function setP3PropuestaRelotificacion($value)
    {   
        $atributo=$this->retriveAttr(1255,14);
        $atributo->valor = $value;
    }
    public function getP4Imprimir()
    {
        return (string) $this->retriveAttr(1256,15)->valor; 
    }
    public function setP4Imprimir($value)
    {   
        $atributo=$this->retriveAttr(1256,15);
        $atributo->valor = $value;
    }
    public function getP5Constancia()
    {
        return  $this->retriveAttr(1351,15)->valor; 
    }
    public function setP5Constancia($value)
    {   
        $atributo=$this->retriveAttr(1351,15);
        $atributo->valor = $value;
    }
    public function getP4Supervisor()
    {
        return (int) $this->retriveAttr(1359,22)->valor; 
    }
    public function setP4Supervisor($value)
    {   
        $atributo=$this->retriveAttr(1359,22);
        $atributo->valor = $value;
    }
    public function getP4ObservacionesSupervisor()
    {
        return (string) $this->retriveAttr(1360,22)->valor; 
    }
    public function setP4ObservacionesSupervisor($value)
    {   
        $atributo=$this->retriveAttr(1360,22);
        $atributo->valor = $value;
    }
	  public function getP4ExpSupervisor() 
	  { 
	      return $this->retriveAttr(3425,22)->valor;  
	  } 
	  public function setP4ExpSupervisor($value) 
	  {   
	      $atributo=$this->retriveAttr(3425,22); 
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
