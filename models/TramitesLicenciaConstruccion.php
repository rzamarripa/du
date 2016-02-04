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
 * @property integer $folio
 * @property integer $ciclo
 *
 * @property EncabezadoImagenes[] $encabezadoImagenes
 * @property Estatus $estatus
 * @property PasosTramite $pasoActual
 * @property TiposTramite $tipoTramite
 * @property ValoresTramite[] $valoresTramites
 */

class TramitesLicenciaConstruccion extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 1; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1NombreDRO', 'p1NumeroDRO', 'p1TelefonoDRO', 'p1CallePredio', 'p1ColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1NorteLocalizacion', 'p1SurLocalizacion', 'p1OrienteLocalizacion', 'p1PonienteLocalizacion', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaBajaXConstruir', 'p1PlantaAltaXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir', 'p1Observaciones', 'p2CopiaEscritura', 'p2PlanoManzanero', 'p2CasaHabitacionAlineamientoNumeroOficial', 'p2CasaHabitacionCroquis', 'p2CasaHabitacionPredial', 'p2CasaHabitacionEscrituras', 'p2ConstruccionCasaHabitacionAlineamiento', 'p2ConstruccionCasaHabitacionPlano', 'p2ConstruccionCasaHabitacionPredial', 'p2ConstruccionCasaHabitacionEscrituras', 'p2ConstruccionCasaHabitacionBitacora', 'p2Solicitud', 'p2ConstruccionCasaHabitacionSolicitud', 'p2ConstruccionCasaHabitacionProyecto', 'p2ConstruccionLocalAlineamiento', 'p2ConstruccionLocalPlano', 'p2ConstruccionLocalLicencia', 'p2ConstruccionLocalPredial', 'p2ConstruccionLocalEscrituras', 'p2ConstruccionLocalSolicitud', 'p2ConstruccionLocalBitacora', 'p2ConstruccionLocalProyecto', 'p2BardasAlineamiento', 'p2BardasMarcarBarda', 'p2BardasPredial', 'p2BardasEscrituras', 'p2BardasAltura', 'p2RemodelacionAlineamiento', 'p2RemodelacionCroquis', 'p2RemodelacionPresupuesto', 'p2RemodelacionPredial', 'p2RemodelacionEscrituras', 'p2RemodelacionLicencia', 'p2BanquetasPredial', 'p2BanquetasCroquis', 'p2ProrrogaPermiso', 'p2ProrrogaRecibo', 'p2ProrrogaPlano', 'p2ProrrogaSolicitud', 'p2PermisoSolicitud', 'p2DemolicionEscrituras', 'p2DemolicionPredial', 'p2DemolicionPlano', 'p3Resolutivo', 'p5Licencia', 'p6Observaciones', 'p1Concepto', 'p1Tipo'], 'string'],
                [['p4Escrituras', 'p4Solicitud', 'p4PlanoManzanero', 'p4CasaHabitacionAlineamientoNumeroOficial', 'p4CasaHabitacionCroquis', 'p4CasaHabitacionPredial', 'p4CasaHabitacionEscrituras', 'p4ConstruccionCasaHabitacionAlineamiento', 'p4ConstruccionCasaHabitacionPlano', 'p4ConstruccionCasaHabitacionPredial', 'p4ConstruccionCasaHabitacionEscrituras', 'p4ConstruccionCasaHabitacionBitacora', 'p4ConstruccionCasaHabitacionSolicitud', 'p4ConstruccionCasaHabitacionProyecto', 'p4ConstruccionLocalAlineamiento', 'p4ConstruccionLocalPlano', 'p4ConstruccionLocalLicencia', 'p4ConstruccionLocalPredial', 'p4ConstruccionLocalEscrituras', 'p4ConstruccionLocalSolicitud', 'p4ConstruccionLocalBitacora', 'p4ConstruccionLocalProyecto', 'p4BardasAlineamiento', 'p4BardasMarcarBarda', 'p4BardasPredial', 'p4BardasEscrituras', 'p4BardasAltura', 'p4RemodelacionAlineamiento', 'p4RemodelacionCroquis', 'p4RemodelacionPresupuesto', 'p4RemodelacionPredial', 'p4RemodelacionEscrituras', 'p4RemodelacionLicencia', 'p4BanquetasPredial', 'p4BanquetasCroquis', 'p4ProrrogaPermiso', 'p4ProrrogaRecibo', 'p4ProrrogaPlano', 'p4ProrrogaSolicitud', 'p4PermisoSolicitud', 'p4DemolicionEscrituras', 'p4DemolicionPredial', 'p4DemolicionPlano', 'p6EnvioExpediente'], 'integer'],
                [['p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1NombreDRO', 'p1NumeroDRO', 'p1TelefonoDRO', 'p1CallePredio', 'p1ColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1NorteLocalizacion', 'p1SurLocalizacion', 'p1OrienteLocalizacion', 'p1PonienteLocalizacion', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaBajaXConstruir', 'p1PlantaAltaXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir', 'p1Observaciones', 'p1Concepto', 'p1Tipo'], 'required', 'on'=>'1'],
                [['p2CopiaEscritura', 'p2PlanoManzanero', 'p2CasaHabitacionAlineamientoNumeroOficial', 'p2CasaHabitacionCroquis', 'p2CasaHabitacionPredial', 'p2CasaHabitacionEscrituras', 'p2ConstruccionCasaHabitacionAlineamiento', 'p2ConstruccionCasaHabitacionPlano', 'p2ConstruccionCasaHabitacionPredial', 'p2ConstruccionCasaHabitacionEscrituras', 'p2ConstruccionCasaHabitacionBitacora', 'p2Solicitud', 'p2ConstruccionCasaHabitacionSolicitud', 'p2ConstruccionCasaHabitacionProyecto', 'p2ConstruccionLocalAlineamiento', 'p2ConstruccionLocalPlano', 'p2ConstruccionLocalLicencia', 'p2ConstruccionLocalPredial', 'p2ConstruccionLocalEscrituras', 'p2ConstruccionLocalSolicitud', 'p2ConstruccionLocalBitacora', 'p2ConstruccionLocalProyecto', 'p2BardasAlineamiento', 'p2BardasMarcarBarda', 'p2BardasPredial', 'p2BardasEscrituras', 'p2BardasAltura', 'p2RemodelacionAlineamiento', 'p2RemodelacionCroquis', 'p2RemodelacionPresupuesto', 'p2RemodelacionPredial', 'p2RemodelacionEscrituras', 'p2RemodelacionLicencia', 'p2BanquetasPredial', 'p2BanquetasCroquis', 'p2ProrrogaPermiso', 'p2ProrrogaRecibo', 'p2ProrrogaPlano', 'p2ProrrogaSolicitud', 'p2PermisoSolicitud', 'p2DemolicionEscrituras', 'p2DemolicionPredial', 'p2DemolicionPlano'], 'required', 'on'=>'2'],
                [['p3Resolutivo'], 'required', 'on'=>'1084'],
                [['p4Escrituras', 'p4Solicitud', 'p4PlanoManzanero', 'p4CasaHabitacionAlineamientoNumeroOficial', 'p4CasaHabitacionCroquis', 'p4CasaHabitacionPredial', 'p4CasaHabitacionEscrituras', 'p4ConstruccionCasaHabitacionAlineamiento', 'p4ConstruccionCasaHabitacionPlano', 'p4ConstruccionCasaHabitacionPredial', 'p4ConstruccionCasaHabitacionEscrituras', 'p4ConstruccionCasaHabitacionBitacora', 'p4ConstruccionCasaHabitacionSolicitud', 'p4ConstruccionCasaHabitacionProyecto', 'p4ConstruccionLocalAlineamiento', 'p4ConstruccionLocalPlano', 'p4ConstruccionLocalLicencia', 'p4ConstruccionLocalPredial', 'p4ConstruccionLocalEscrituras', 'p4ConstruccionLocalSolicitud', 'p4ConstruccionLocalBitacora', 'p4ConstruccionLocalProyecto', 'p4BardasAlineamiento', 'p4BardasMarcarBarda', 'p4BardasPredial', 'p4BardasEscrituras', 'p4BardasAltura', 'p4RemodelacionAlineamiento', 'p4RemodelacionCroquis', 'p4RemodelacionPresupuesto', 'p4RemodelacionPredial', 'p4RemodelacionEscrituras', 'p4RemodelacionLicencia', 'p4BanquetasPredial', 'p4BanquetasCroquis', 'p4ProrrogaPermiso', 'p4ProrrogaRecibo', 'p4ProrrogaPlano', 'p4ProrrogaSolicitud', 'p4PermisoSolicitud', 'p4DemolicionEscrituras', 'p4DemolicionPredial', 'p4DemolicionPlano'], 'required', 'on'=>'1085'],
                [['p5Licencia'], 'required', 'on'=>'1086'],
                [['p6EnvioExpediente', 'p6Observaciones'], 'required', 'on'=>'1087'],
                [['p1NombrePropietarios', 'p1TelefonoPropietarios', 'p1NombreDRO', 'p1NumeroDRO', 'p1TelefonoDRO', 'p1CallePredio', 'p1ColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1NorteLocalizacion', 'p1SurLocalizacion', 'p1OrienteLocalizacion', 'p1PonienteLocalizacion', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaBajaXConstruir', 'p1PlantaAltaXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir', 'p1Concepto', 'p1Tipo'], 'string', 'max' => 50],
                [['p1DireccionPropietarios', 'p1Observaciones', 'p6Observaciones'], 'string', 'max' => 500]];

        
            
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
            'folio' => 'Folio',
            'ciclo' => 'Ciclo',
            'p1NombrePropietarios' => 'Nombre',
            'p1DireccionPropietarios' => 'Direccion',
            'p1TelefonoPropietarios' => 'Telefono',
            'p1NombreDRO' => 'Nombre',
            'p1NumeroDRO' => 'DRO No',
            'p1TelefonoDRO' => 'Telefono',
            'p1CallePredio' => 'Calle',
            'p1ColoniaPredio' => 'Fraccionamiento o Colonia',
            'p1LotePredio' => 'No Lote',
            'p1ManzanaPredio' => 'Manzana No',
            'p1ClaveCatastralPredio' => 'Clave Catastral',
            'p1NorteLocalizacion' => 'Al Norte',
            'p1SurLocalizacion' => 'Al Sur',
            'p1OrienteLocalizacion' => 'Al Oriente',
            'p1PonienteLocalizacion' => 'Al Poniente',
            'p1PlantaBajaConstruida' => 'Planta Baja Construida',
            'p1PlantaAltaConstruida' => 'Planta Alta Construida',
            'p1OtrosConstruida' => 'Otros',
            'p1TotalConstruida' => 'TOTAL',
            'p1PlantaBajaXConstruir' => 'Planta Baja Por Construir',
            'p1PlantaAltaXConstruir' => 'Planta Alta Por Construir',
            'p1OtrosXConstruir' => 'Otros',
            'p1TotalXConstruir' => 'TOTAL',
            'p1Observaciones' => 'Observaciones',
            'p2CopiaEscritura' => 'Copia de escritura o constancia de posesion',
            'p2PlanoManzanero' => 'Copia del plano manzanero del instituto catastral',
            'p2CasaHabitacionAlineamientoNumeroOficial' => 'Alineamiento y Numero Oficial',
            'p2CasaHabitacionCroquis' => 'Copia del croquis del proyecto por construir',
            'p2CasaHabitacionPredial' => 'Estado de cuenta del predial o copia del recibo de pago de predial',
            'p2CasaHabitacionEscrituras' => 'Copia de Escrituras solo si no es necesario el alineamiento',
            'p2ConstruccionCasaHabitacionAlineamiento' => 'Alineamiento y Numero Oficial en caso que el predio se localice en un fraccionamiento el requisito de alineamiento se omite',
            'p2ConstruccionCasaHabitacionPlano' => 'Plano Proyecto y 3 copias en caso de ampliacion marcar lo que esta construido y lo que va a construir',
            'p2ConstruccionCasaHabitacionPredial' => 'Estado de cuenta del predial o copia del recibo de pago de predial',
            'p2ConstruccionCasaHabitacionEscrituras' => 'Copia de Escrituras solo si no es necesario el alineamiento',
            'p2ConstruccionCasaHabitacionBitacora' => 'Bitacora firmada por el DRO Director Responsable de Obra y el propietario',
            'p2Solicitud' => 'Solicitud con croquis de ubicacion',
            'p2ConstruccionCasaHabitacionSolicitud' => 'Solicitud del H. Ayuntamiento firmada por DRO Director Responsable de Obra',
            'p2ConstruccionCasaHabitacionProyecto' => 'Copia del proyecto final en cd Disco Compacto',
            'p2ConstruccionLocalAlineamiento' => 'Alineamiento y Numero Oficial',
            'p2ConstruccionLocalPlano' => 'Plano Proyecto autorizado por la secretaria de salubridad y asistencia y 3 Copias',
            'p2ConstruccionLocalLicencia' => 'Licencia de uso de suelo original y copia si es condicionada presentar los requisitos que se le piden',
            'p2ConstruccionLocalPredial' => 'Estado de cuenta del predial o copia del recibo de pago de predial',
            'p2ConstruccionLocalEscrituras' => 'Copia de Escrituras solo si no es necesario el alineamiento',
            'p2ConstruccionLocalSolicitud' => 'Solicitud del H. Ayuntamiento firmada por DRO Director Responsable de Obra',
            'p2ConstruccionLocalBitacora' => 'Bitacora firmada por el DRO Director Responsable de Obra y el propietario',
            'p2ConstruccionLocalProyecto' => 'Copia del proyecto final en cd Disco Compacto',
            'p2BardasAlineamiento' => 'Alineamiento y Numero Oficial',
            'p2BardasMarcarBarda' => 'Marcar la barda que va a construir en el alineamiento y de no haberse solicitado este marcar la barda en copia de plano o  croquis',
            'p2BardasPredial' => 'Estado de cuenta del predial o copia del recibo de pago de predial',
            'p2BardasEscrituras' => 'Copia de Escrituras solo si no es necesario el alineamiento',
            'p2BardasAltura' => 'Cuando la altura sea mayor a 250 mtrs Elaboracion de calculo estructural firmado por DRO Director Responsable de Estructura',
            'p2RemodelacionAlineamiento' => 'Alineamiento y Numero Oficial',
            'p2RemodelacionCroquis' => 'Croquis del Proyecto actual y remodelado',
            'p2RemodelacionPresupuesto' => 'Presupuesto detallado de material y mano de obra',
            'p2RemodelacionPredial' => 'Estado de cuenta del predial o copia del recibo de pago de predial',
            'p2RemodelacionEscrituras' => 'Copia de Escrituras solo si no es necesario el alineamiento',
            'p2RemodelacionLicencia' => 'En caso de cambiar el uso del inmueble se quiere licencia de uso de suelo',
            'p2BanquetasPredial' => 'Estado de cuenta del predial o copia del recibo de pago de predial',
            'p2BanquetasCroquis' => 'Croquis de ubicacion y de construccion',
            'p2ProrrogaPermiso' => 'Permiso de construccion Original y copia',
            'p2ProrrogaRecibo' => 'Recibo de pago del permiso anterior',
            'p2ProrrogaPlano' => '2 copias del plano aprobado',
            'p2ProrrogaSolicitud' => 'Solicitud del H. Ayuntamiento firmada por DRO Director Responsable de Obra',
            'p2PermisoSolicitud' => 'Solicitud',
            'p2DemolicionEscrituras' => 'Copia de Escrituras',
            'p2DemolicionPredial' => 'Estado de cuenta del predial o copia del recibo de pago de predial',
            'p2DemolicionPlano' => 'Copia del plano o croquis cuando excela los 5000 m2 debera presentar DRO Director Responsable de Obra',
            'p3Resolutivo' => 'Resolutivo',
            'p4Escrituras' => 'Copia de escritura o constancia de posesion',
            'p4Solicitud' => 'Solicitud con croquis de ubicacion',
            'p4PlanoManzanero' => 'Copia del plano manzanero del instituto catastral',
            'p4CasaHabitacionAlineamientoNumeroOficial' => 'Alineamiento y Numero Oficial',
            'p4CasaHabitacionCroquis' => 'Croquis del proyecto por construir una copia',
            'p4CasaHabitacionPredial' => 'Estado de cuenta del predial o copia del recibo de pago de predial',
            'p4CasaHabitacionEscrituras' => 'Copia de Escrituras solo si no es necesario el alineamiento',
            'p4ConstruccionCasaHabitacionAlineamiento' => 'Alineamiento y Numero Oficial en caso que el predio se localice en un fraccionamiento el requisito de alineamiento se omite',
            'p4ConstruccionCasaHabitacionPlano' => 'Plano Proyecto y 3 copias en caso de ampliacion marcar lo que esta construido y lo que va a construir',
            'p4ConstruccionCasaHabitacionPredial' => 'Estado de cuenta del predial o copia del recibo de pago de predial',
            'p4ConstruccionCasaHabitacionEscrituras' => 'Copia de Escrituras solo si no es necesario el alineamiento',
            'p4ConstruccionCasaHabitacionBitacora' => 'Bitacora firmada por el DRO Director Responsable de Obra y el propietario',
            'p4ConstruccionCasaHabitacionSolicitud' => 'Solicitud del H. Ayuntamiento firmada por DRO Director Responsable de Obra',
            'p4ConstruccionCasaHabitacionProyecto' => 'Copia del proyecto final en cd Disco Compacto',
            'p4ConstruccionLocalAlineamiento' => 'Alineamiento y Numero Oficial',
            'p4ConstruccionLocalPlano' => 'Plano Proyecto autorizado por la secretaria de salubridad y asistencia y 3 Copias',
            'p4ConstruccionLocalLicencia' => 'Licencia de uso de suelo original y copia si es condicionada presentar los requisitos que se le piden',
            'p4ConstruccionLocalPredial' => 'Estado de cuenta del predial o copia del recibo de pago de predial',
            'p4ConstruccionLocalEscrituras' => 'Copia de Escrituras solo si no es necesario el alineamiento',
            'p4ConstruccionLocalSolicitud' => 'Solicitud del H. Ayuntamiento firmada por DRO Director Responsable de Obra',
            'p4ConstruccionLocalBitacora' => 'Bitacora firmada por el DRO Director Responsable de Obra y el propietario',
            'p4ConstruccionLocalProyecto' => 'Copia del proyecto final en cd Disco Compacto',
            'p4BardasAlineamiento' => 'Alineamiento y Numero Oficial',
            'p4BardasMarcarBarda' => 'Marcar la barda que va a construir en el alineamiento y de no haberse solicitado este marcar la barda en copia de plano o  croquis',
            'p4BardasPredial' => 'Estado de cuenta del predial o copia del recibo de pago de predial',
            'p4BardasEscrituras' => 'Copia de Escrituras solo si no es necesario el alineamiento',
            'p4BardasAltura' => 'Cuando la altura sea mayor a 250 mtrs Elaboracion de calculo estructural firmado por DRO Director Responsable de Estructura',
            'p4RemodelacionAlineamiento' => 'Alineamiento y Numero Oficial',
            'p4RemodelacionCroquis' => 'Croquis del Proyecto actual y remodelado',
            'p4RemodelacionPresupuesto' => 'Presupuesto detallado de material y mano de obra',
            'p4RemodelacionPredial' => 'Estado de cuenta del predial o copia del recibo de pago de predial',
            'p4RemodelacionEscrituras' => 'Copia de Escrituras solo si no es necesario el alineamiento',
            'p4RemodelacionLicencia' => 'En caso de cambiar el uso del inmueble se quiere licencia de uso de suelo',
            'p4BanquetasPredial' => 'Estado de cuenta del predial o copia del recibo de pago de predial',
            'p4BanquetasCroquis' => 'Croquis de ubicacion y de construccion',
            'p4ProrrogaPermiso' => 'Permiso de construccion Original y copia',
            'p4ProrrogaRecibo' => 'Recibo de pago del permiso anterior',
            'p4ProrrogaPlano' => '2 copias del plano aprobado',
            'p4ProrrogaSolicitud' => 'Solicitud del H. Ayuntamiento firmada por DRO Director Responsable de Obra',
            'p4PermisoSolicitud' => 'Solicitud',
            'p4DemolicionEscrituras' => 'Copia de Escrituras',
            'p4DemolicionPredial' => 'Estado de cuenta del predial o copia del recibo de pago de predial',
            'p4DemolicionPlano' => 'Copia del plano o croquis cuando exceda los 5000 m2 debera presentar DRO Director Responsable de Obra',
            'p5Licencia' => 'Licencia de Construccion',
            'p6EnvioExpediente' => 'Se envío Expediente',
            'p6Observaciones' => 'Observaciones',
            'p1Concepto' => 'Concepto',
            'p1Tipo' => 'Tipo',
        ];
    }

    public function getP1NombrePropietarios()
    {
        return (string) $this->retriveAttr(3737,1)->valor; 
    }
    public function setP1NombrePropietarios($value)
    {   
        $atributo=$this->retriveAttr(3737,1);
        $atributo->valor = $value;
    }
    public function getP1DireccionPropietarios()
    {
        return (string) $this->retriveAttr(3738,1)->valor; 
    }
    public function setP1DireccionPropietarios($value)
    {   
        $atributo=$this->retriveAttr(3738,1);
        $atributo->valor = $value;
    }
    public function getP1TelefonoPropietarios()
    {
        return (string) $this->retriveAttr(3739,1)->valor; 
    }
    public function setP1TelefonoPropietarios($value)
    {   
        $atributo=$this->retriveAttr(3739,1);
        $atributo->valor = $value;
    }
    public function getP1NombreDRO()
    {
        return (string) $this->retriveAttr(3740,1)->valor; 
    }
    public function setP1NombreDRO($value)
    {   
        $atributo=$this->retriveAttr(3740,1);
        $atributo->valor = $value;
    }
    public function getP1NumeroDRO()
    {
        return (string) $this->retriveAttr(3741,1)->valor; 
    }
    public function setP1NumeroDRO($value)
    {   
        $atributo=$this->retriveAttr(3741,1);
        $atributo->valor = $value;
    }
    public function getP1TelefonoDRO()
    {
        return (string) $this->retriveAttr(3742,1)->valor; 
    }
    public function setP1TelefonoDRO($value)
    {   
        $atributo=$this->retriveAttr(3742,1);
        $atributo->valor = $value;
    }
    public function getP1CallePredio()
    {
        return (string) $this->retriveAttr(3743,1)->valor; 
    }
    public function setP1CallePredio($value)
    {   
        $atributo=$this->retriveAttr(3743,1);
        $atributo->valor = $value;
    }
    public function getP1ColoniaPredio()
    {
        return (string) $this->retriveAttr(3744,1)->valor; 
    }
    public function setP1ColoniaPredio($value)
    {   
        $atributo=$this->retriveAttr(3744,1);
        $atributo->valor = $value;
    }
    public function getP1LotePredio()
    {
        return (string) $this->retriveAttr(3745,1)->valor; 
    }
    public function setP1LotePredio($value)
    {   
        $atributo=$this->retriveAttr(3745,1);
        $atributo->valor = $value;
    }
    public function getP1ManzanaPredio()
    {
        return (string) $this->retriveAttr(3746,1)->valor; 
    }
    public function setP1ManzanaPredio($value)
    {   
        $atributo=$this->retriveAttr(3746,1);
        $atributo->valor = $value;
    }
    public function getP1ClaveCatastralPredio()
    {
        return (string) $this->retriveAttr(3747,1)->valor; 
    }
    public function setP1ClaveCatastralPredio($value)
    {   
        $atributo=$this->retriveAttr(3747,1);
        $atributo->valor = $value;
    }
    public function getP1NorteLocalizacion()
    {
        return (string) $this->retriveAttr(3748,1)->valor; 
    }
    public function setP1NorteLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3748,1);
        $atributo->valor = $value;
    }
    public function getP1SurLocalizacion()
    {
        return (string) $this->retriveAttr(3749,1)->valor; 
    }
    public function setP1SurLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3749,1);
        $atributo->valor = $value;
    }
    public function getP1OrienteLocalizacion()
    {
        return (string) $this->retriveAttr(3750,1)->valor; 
    }
    public function setP1OrienteLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3750,1);
        $atributo->valor = $value;
    }
    public function getP1PonienteLocalizacion()
    {
        return (string) $this->retriveAttr(3751,1)->valor; 
    }
    public function setP1PonienteLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3751,1);
        $atributo->valor = $value;
    }
    public function getP1PlantaBajaConstruida()
    {
        return (string) $this->retriveAttr(3752,1)->valor; 
    }
    public function setP1PlantaBajaConstruida($value)
    {   
        $atributo=$this->retriveAttr(3752,1);
        $atributo->valor = $value;
    }
    public function getP1PlantaAltaConstruida()
    {
        return (string) $this->retriveAttr(3753,1)->valor; 
    }
    public function setP1PlantaAltaConstruida($value)
    {   
        $atributo=$this->retriveAttr(3753,1);
        $atributo->valor = $value;
    }
    public function getP1OtrosConstruida()
    {
        return (string) $this->retriveAttr(3754,1)->valor; 
    }
    public function setP1OtrosConstruida($value)
    {   
        $atributo=$this->retriveAttr(3754,1);
        $atributo->valor = $value;
    }
    public function getP1TotalConstruida()
    {
        return (string) $this->retriveAttr(3755,1)->valor; 
    }
    public function setP1TotalConstruida($value)
    {   
        $atributo=$this->retriveAttr(3755,1);
        $atributo->valor = $value;
    }
    public function getP1PlantaBajaXConstruir()
    {
        return (string) $this->retriveAttr(3756,1)->valor; 
    }
    public function setP1PlantaBajaXConstruir($value)
    {   
        $atributo=$this->retriveAttr(3756,1);
        $atributo->valor = $value;
    }
    public function getP1PlantaAltaXConstruir()
    {
        return (string) $this->retriveAttr(3757,1)->valor; 
    }
    public function setP1PlantaAltaXConstruir($value)
    {   
        $atributo=$this->retriveAttr(3757,1);
        $atributo->valor = $value;
    }
    public function getP1OtrosXConstruir()
    {
        return (string) $this->retriveAttr(3758,1)->valor; 
    }
    public function setP1OtrosXConstruir($value)
    {   
        $atributo=$this->retriveAttr(3758,1);
        $atributo->valor = $value;
    }
    public function getP1TotalXConstruir()
    {
        return (string) $this->retriveAttr(3759,1)->valor; 
    }
    public function setP1TotalXConstruir($value)
    {   
        $atributo=$this->retriveAttr(3759,1);
        $atributo->valor = $value;
    }
    public function getP1Observaciones()
    {
        return (string) $this->retriveAttr(3760,1)->valor; 
    }
    public function setP1Observaciones($value)
    {   
        $atributo=$this->retriveAttr(3760,1);
        $atributo->valor = $value;
    }
    public function getP2CopiaEscritura()
    {
        return  $this->retriveAttr(3761,2)->valor; 
    }
    public function setP2CopiaEscritura($value)
    {   
        $atributo=$this->retriveAttr(3761,2);
        $atributo->valor = $value;
    }
    public function getP2PlanoManzanero()
    {
        return  $this->retriveAttr(3762,2)->valor; 
    }
    public function setP2PlanoManzanero($value)
    {   
        $atributo=$this->retriveAttr(3762,2);
        $atributo->valor = $value;
    }
    public function getP2CasaHabitacionAlineamientoNumeroOficial()
    {
        return  $this->retriveAttr(3763,2)->valor; 
    }
    public function setP2CasaHabitacionAlineamientoNumeroOficial($value)
    {   
        $atributo=$this->retriveAttr(3763,2);
        $atributo->valor = $value;
    }
    public function getP2CasaHabitacionCroquis()
    {
        return  $this->retriveAttr(3764,2)->valor; 
    }
    public function setP2CasaHabitacionCroquis($value)
    {   
        $atributo=$this->retriveAttr(3764,2);
        $atributo->valor = $value;
    }
    public function getP2CasaHabitacionPredial()
    {
        return  $this->retriveAttr(3765,2)->valor; 
    }
    public function setP2CasaHabitacionPredial($value)
    {   
        $atributo=$this->retriveAttr(3765,2);
        $atributo->valor = $value;
    }
    public function getP2CasaHabitacionEscrituras()
    {
        return  $this->retriveAttr(3766,2)->valor; 
    }
    public function setP2CasaHabitacionEscrituras($value)
    {   
        $atributo=$this->retriveAttr(3766,2);
        $atributo->valor = $value;
    }
    public function getP2ConstruccionCasaHabitacionAlineamiento()
    {
        return  $this->retriveAttr(3767,2)->valor; 
    }
    public function setP2ConstruccionCasaHabitacionAlineamiento($value)
    {   
        $atributo=$this->retriveAttr(3767,2);
        $atributo->valor = $value;
    }
    public function getP2ConstruccionCasaHabitacionPlano()
    {
        return  $this->retriveAttr(3768,2)->valor; 
    }
    public function setP2ConstruccionCasaHabitacionPlano($value)
    {   
        $atributo=$this->retriveAttr(3768,2);
        $atributo->valor = $value;
    }
    public function getP2ConstruccionCasaHabitacionPredial()
    {
        return  $this->retriveAttr(3769,2)->valor; 
    }
    public function setP2ConstruccionCasaHabitacionPredial($value)
    {   
        $atributo=$this->retriveAttr(3769,2);
        $atributo->valor = $value;
    }
    public function getP2ConstruccionCasaHabitacionEscrituras()
    {
        return  $this->retriveAttr(3770,2)->valor; 
    }
    public function setP2ConstruccionCasaHabitacionEscrituras($value)
    {   
        $atributo=$this->retriveAttr(3770,2);
        $atributo->valor = $value;
    }
    public function getP2ConstruccionCasaHabitacionBitacora()
    {
        return  $this->retriveAttr(3771,2)->valor; 
    }
    public function setP2ConstruccionCasaHabitacionBitacora($value)
    {   
        $atributo=$this->retriveAttr(3771,2);
        $atributo->valor = $value;
    }
    public function getP2Solicitud()
    {
        return  $this->retriveAttr(3772,2)->valor; 
    }
    public function setP2Solicitud($value)
    {   
        $atributo=$this->retriveAttr(3772,2);
        $atributo->valor = $value;
    }
    public function getP2ConstruccionCasaHabitacionSolicitud()
    {
        return  $this->retriveAttr(3773,2)->valor; 
    }
    public function setP2ConstruccionCasaHabitacionSolicitud($value)
    {   
        $atributo=$this->retriveAttr(3773,2);
        $atributo->valor = $value;
    }
    public function getP2ConstruccionCasaHabitacionProyecto()
    {
        return  $this->retriveAttr(3774,2)->valor; 
    }
    public function setP2ConstruccionCasaHabitacionProyecto($value)
    {   
        $atributo=$this->retriveAttr(3774,2);
        $atributo->valor = $value;
    }
    public function getP2ConstruccionLocalAlineamiento()
    {
        return  $this->retriveAttr(3775,2)->valor; 
    }
    public function setP2ConstruccionLocalAlineamiento($value)
    {   
        $atributo=$this->retriveAttr(3775,2);
        $atributo->valor = $value;
    }
    public function getP2ConstruccionLocalPlano()
    {
        return  $this->retriveAttr(3776,2)->valor; 
    }
    public function setP2ConstruccionLocalPlano($value)
    {   
        $atributo=$this->retriveAttr(3776,2);
        $atributo->valor = $value;
    }
    public function getP2ConstruccionLocalLicencia()
    {
        return  $this->retriveAttr(3777,2)->valor; 
    }
    public function setP2ConstruccionLocalLicencia($value)
    {   
        $atributo=$this->retriveAttr(3777,2);
        $atributo->valor = $value;
    }
    public function getP2ConstruccionLocalPredial()
    {
        return  $this->retriveAttr(3778,2)->valor; 
    }
    public function setP2ConstruccionLocalPredial($value)
    {   
        $atributo=$this->retriveAttr(3778,2);
        $atributo->valor = $value;
    }
    public function getP2ConstruccionLocalEscrituras()
    {
        return  $this->retriveAttr(3779,2)->valor; 
    }
    public function setP2ConstruccionLocalEscrituras($value)
    {   
        $atributo=$this->retriveAttr(3779,2);
        $atributo->valor = $value;
    }
    public function getP2ConstruccionLocalSolicitud()
    {
        return  $this->retriveAttr(3780,2)->valor; 
    }
    public function setP2ConstruccionLocalSolicitud($value)
    {   
        $atributo=$this->retriveAttr(3780,2);
        $atributo->valor = $value;
    }
    public function getP2ConstruccionLocalBitacora()
    {
        return  $this->retriveAttr(3781,2)->valor; 
    }
    public function setP2ConstruccionLocalBitacora($value)
    {   
        $atributo=$this->retriveAttr(3781,2);
        $atributo->valor = $value;
    }
    public function getP2ConstruccionLocalProyecto()
    {
        return  $this->retriveAttr(3782,2)->valor; 
    }
    public function setP2ConstruccionLocalProyecto($value)
    {   
        $atributo=$this->retriveAttr(3782,2);
        $atributo->valor = $value;
    }
    public function getP2BardasAlineamiento()
    {
        return  $this->retriveAttr(3783,2)->valor; 
    }
    public function setP2BardasAlineamiento($value)
    {   
        $atributo=$this->retriveAttr(3783,2);
        $atributo->valor = $value;
    }
    public function getP2BardasMarcarBarda()
    {
        return  $this->retriveAttr(3784,2)->valor; 
    }
    public function setP2BardasMarcarBarda($value)
    {   
        $atributo=$this->retriveAttr(3784,2);
        $atributo->valor = $value;
    }
    public function getP2BardasPredial()
    {
        return  $this->retriveAttr(3785,2)->valor; 
    }
    public function setP2BardasPredial($value)
    {   
        $atributo=$this->retriveAttr(3785,2);
        $atributo->valor = $value;
    }
    public function getP2BardasEscrituras()
    {
        return  $this->retriveAttr(3786,2)->valor; 
    }
    public function setP2BardasEscrituras($value)
    {   
        $atributo=$this->retriveAttr(3786,2);
        $atributo->valor = $value;
    }
    public function getP2BardasAltura()
    {
        return  $this->retriveAttr(3787,2)->valor; 
    }
    public function setP2BardasAltura($value)
    {   
        $atributo=$this->retriveAttr(3787,2);
        $atributo->valor = $value;
    }
    public function getP2RemodelacionAlineamiento()
    {
        return  $this->retriveAttr(3788,2)->valor; 
    }
    public function setP2RemodelacionAlineamiento($value)
    {   
        $atributo=$this->retriveAttr(3788,2);
        $atributo->valor = $value;
    }
    public function getP2RemodelacionCroquis()
    {
        return  $this->retriveAttr(3789,2)->valor; 
    }
    public function setP2RemodelacionCroquis($value)
    {   
        $atributo=$this->retriveAttr(3789,2);
        $atributo->valor = $value;
    }
    public function getP2RemodelacionPresupuesto()
    {
        return  $this->retriveAttr(3790,2)->valor; 
    }
    public function setP2RemodelacionPresupuesto($value)
    {   
        $atributo=$this->retriveAttr(3790,2);
        $atributo->valor = $value;
    }
    public function getP2RemodelacionPredial()
    {
        return  $this->retriveAttr(3791,2)->valor; 
    }
    public function setP2RemodelacionPredial($value)
    {   
        $atributo=$this->retriveAttr(3791,2);
        $atributo->valor = $value;
    }
    public function getP2RemodelacionEscrituras()
    {
        return  $this->retriveAttr(3792,2)->valor; 
    }
    public function setP2RemodelacionEscrituras($value)
    {   
        $atributo=$this->retriveAttr(3792,2);
        $atributo->valor = $value;
    }
    public function getP2RemodelacionLicencia()
    {
        return  $this->retriveAttr(3793,2)->valor; 
    }
    public function setP2RemodelacionLicencia($value)
    {   
        $atributo=$this->retriveAttr(3793,2);
        $atributo->valor = $value;
    }
    public function getP2BanquetasPredial()
    {
        return  $this->retriveAttr(3794,2)->valor; 
    }
    public function setP2BanquetasPredial($value)
    {   
        $atributo=$this->retriveAttr(3794,2);
        $atributo->valor = $value;
    }
    public function getP2BanquetasCroquis()
    {
        return  $this->retriveAttr(3795,2)->valor; 
    }
    public function setP2BanquetasCroquis($value)
    {   
        $atributo=$this->retriveAttr(3795,2);
        $atributo->valor = $value;
    }
    public function getP2ProrrogaPermiso()
    {
        return  $this->retriveAttr(3796,2)->valor; 
    }
    public function setP2ProrrogaPermiso($value)
    {   
        $atributo=$this->retriveAttr(3796,2);
        $atributo->valor = $value;
    }
    public function getP2ProrrogaRecibo()
    {
        return  $this->retriveAttr(3797,2)->valor; 
    }
    public function setP2ProrrogaRecibo($value)
    {   
        $atributo=$this->retriveAttr(3797,2);
        $atributo->valor = $value;
    }
    public function getP2ProrrogaPlano()
    {
        return  $this->retriveAttr(3798,2)->valor; 
    }
    public function setP2ProrrogaPlano($value)
    {   
        $atributo=$this->retriveAttr(3798,2);
        $atributo->valor = $value;
    }
    public function getP2ProrrogaSolicitud()
    {
        return  $this->retriveAttr(3799,2)->valor; 
    }
    public function setP2ProrrogaSolicitud($value)
    {   
        $atributo=$this->retriveAttr(3799,2);
        $atributo->valor = $value;
    }
    public function getP2PermisoSolicitud()
    {
        return  $this->retriveAttr(3800,2)->valor; 
    }
    public function setP2PermisoSolicitud($value)
    {   
        $atributo=$this->retriveAttr(3800,2);
        $atributo->valor = $value;
    }
    public function getP2DemolicionEscrituras()
    {
        return  $this->retriveAttr(3801,2)->valor; 
    }
    public function setP2DemolicionEscrituras($value)
    {   
        $atributo=$this->retriveAttr(3801,2);
        $atributo->valor = $value;
    }
    public function getP2DemolicionPredial()
    {
        return  $this->retriveAttr(3802,2)->valor; 
    }
    public function setP2DemolicionPredial($value)
    {   
        $atributo=$this->retriveAttr(3802,2);
        $atributo->valor = $value;
    }
    public function getP2DemolicionPlano()
    {
        return  $this->retriveAttr(3803,2)->valor; 
    }
    public function setP2DemolicionPlano($value)
    {   
        $atributo=$this->retriveAttr(3803,2);
        $atributo->valor = $value;
    }
    public function getP3Resolutivo()
    {
        return  $this->retriveAttr(3804,1084)->valor; 
    }
    public function setP3Resolutivo($value)
    {   
        $atributo=$this->retriveAttr(3804,1084);
        $atributo->valor = $value;
    }
    public function getP4Escrituras()
    {
        return (int) $this->retriveAttr(3805,1085)->valor; 
    }
    public function setP4Escrituras($value)
    {   
        $atributo=$this->retriveAttr(3805,1085);
        $atributo->valor = $value;
    }
    public function getP4Solicitud()
    {
        return (int) $this->retriveAttr(3806,1085)->valor; 
    }
    public function setP4Solicitud($value)
    {   
        $atributo=$this->retriveAttr(3806,1085);
        $atributo->valor = $value;
    }
    public function getP4PlanoManzanero()
    {
        return (int) $this->retriveAttr(3807,1085)->valor; 
    }
    public function setP4PlanoManzanero($value)
    {   
        $atributo=$this->retriveAttr(3807,1085);
        $atributo->valor = $value;
    }
    public function getP4CasaHabitacionAlineamientoNumeroOficial()
    {
        return (int) $this->retriveAttr(3808,1085)->valor; 
    }
    public function setP4CasaHabitacionAlineamientoNumeroOficial($value)
    {   
        $atributo=$this->retriveAttr(3808,1085);
        $atributo->valor = $value;
    }
    public function getP4CasaHabitacionCroquis()
    {
        return (int) $this->retriveAttr(3809,1085)->valor; 
    }
    public function setP4CasaHabitacionCroquis($value)
    {   
        $atributo=$this->retriveAttr(3809,1085);
        $atributo->valor = $value;
    }
    public function getP4CasaHabitacionPredial()
    {
        return (int) $this->retriveAttr(3810,1085)->valor; 
    }
    public function setP4CasaHabitacionPredial($value)
    {   
        $atributo=$this->retriveAttr(3810,1085);
        $atributo->valor = $value;
    }
    public function getP4CasaHabitacionEscrituras()
    {
        return (int) $this->retriveAttr(3811,1085)->valor; 
    }
    public function setP4CasaHabitacionEscrituras($value)
    {   
        $atributo=$this->retriveAttr(3811,1085);
        $atributo->valor = $value;
    }
    public function getP4ConstruccionCasaHabitacionAlineamiento()
    {
        return (int) $this->retriveAttr(3812,1085)->valor; 
    }
    public function setP4ConstruccionCasaHabitacionAlineamiento($value)
    {   
        $atributo=$this->retriveAttr(3812,1085);
        $atributo->valor = $value;
    }
    public function getP4ConstruccionCasaHabitacionPlano()
    {
        return (int) $this->retriveAttr(3813,1085)->valor; 
    }
    public function setP4ConstruccionCasaHabitacionPlano($value)
    {   
        $atributo=$this->retriveAttr(3813,1085);
        $atributo->valor = $value;
    }
    public function getP4ConstruccionCasaHabitacionPredial()
    {
        return (int) $this->retriveAttr(3814,1085)->valor; 
    }
    public function setP4ConstruccionCasaHabitacionPredial($value)
    {   
        $atributo=$this->retriveAttr(3814,1085);
        $atributo->valor = $value;
    }
    public function getP4ConstruccionCasaHabitacionEscrituras()
    {
        return (int) $this->retriveAttr(3815,1085)->valor; 
    }
    public function setP4ConstruccionCasaHabitacionEscrituras($value)
    {   
        $atributo=$this->retriveAttr(3815,1085);
        $atributo->valor = $value;
    }
    public function getP4ConstruccionCasaHabitacionBitacora()
    {
        return (int) $this->retriveAttr(3816,1085)->valor; 
    }
    public function setP4ConstruccionCasaHabitacionBitacora($value)
    {   
        $atributo=$this->retriveAttr(3816,1085);
        $atributo->valor = $value;
    }
    public function getP4ConstruccionCasaHabitacionSolicitud()
    {
        return (int) $this->retriveAttr(3817,1085)->valor; 
    }
    public function setP4ConstruccionCasaHabitacionSolicitud($value)
    {   
        $atributo=$this->retriveAttr(3817,1085);
        $atributo->valor = $value;
    }
    public function getP4ConstruccionCasaHabitacionProyecto()
    {
        return (int) $this->retriveAttr(3818,1085)->valor; 
    }
    public function setP4ConstruccionCasaHabitacionProyecto($value)
    {   
        $atributo=$this->retriveAttr(3818,1085);
        $atributo->valor = $value;
    }
    public function getP4ConstruccionLocalAlineamiento()
    {
        return (int) $this->retriveAttr(3819,1085)->valor; 
    }
    public function setP4ConstruccionLocalAlineamiento($value)
    {   
        $atributo=$this->retriveAttr(3819,1085);
        $atributo->valor = $value;
    }
    public function getP4ConstruccionLocalPlano()
    {
        return (int) $this->retriveAttr(3820,1085)->valor; 
    }
    public function setP4ConstruccionLocalPlano($value)
    {   
        $atributo=$this->retriveAttr(3820,1085);
        $atributo->valor = $value;
    }
    public function getP4ConstruccionLocalLicencia()
    {
        return (int) $this->retriveAttr(3821,1085)->valor; 
    }
    public function setP4ConstruccionLocalLicencia($value)
    {   
        $atributo=$this->retriveAttr(3821,1085);
        $atributo->valor = $value;
    }
    public function getP4ConstruccionLocalPredial()
    {
        return (int) $this->retriveAttr(3822,1085)->valor; 
    }
    public function setP4ConstruccionLocalPredial($value)
    {   
        $atributo=$this->retriveAttr(3822,1085);
        $atributo->valor = $value;
    }
    public function getP4ConstruccionLocalEscrituras()
    {
        return (int) $this->retriveAttr(3823,1085)->valor; 
    }
    public function setP4ConstruccionLocalEscrituras($value)
    {   
        $atributo=$this->retriveAttr(3823,1085);
        $atributo->valor = $value;
    }
    public function getP4ConstruccionLocalSolicitud()
    {
        return (int) $this->retriveAttr(3824,1085)->valor; 
    }
    public function setP4ConstruccionLocalSolicitud($value)
    {   
        $atributo=$this->retriveAttr(3824,1085);
        $atributo->valor = $value;
    }
    public function getP4ConstruccionLocalBitacora()
    {
        return (int) $this->retriveAttr(3825,1085)->valor; 
    }
    public function setP4ConstruccionLocalBitacora($value)
    {   
        $atributo=$this->retriveAttr(3825,1085);
        $atributo->valor = $value;
    }
    public function getP4ConstruccionLocalProyecto()
    {
        return (int) $this->retriveAttr(3826,1085)->valor; 
    }
    public function setP4ConstruccionLocalProyecto($value)
    {   
        $atributo=$this->retriveAttr(3826,1085);
        $atributo->valor = $value;
    }
    public function getP4BardasAlineamiento()
    {
        return (int) $this->retriveAttr(3827,1085)->valor; 
    }
    public function setP4BardasAlineamiento($value)
    {   
        $atributo=$this->retriveAttr(3827,1085);
        $atributo->valor = $value;
    }
    public function getP4BardasMarcarBarda()
    {
        return (int) $this->retriveAttr(3828,1085)->valor; 
    }
    public function setP4BardasMarcarBarda($value)
    {   
        $atributo=$this->retriveAttr(3828,1085);
        $atributo->valor = $value;
    }
    public function getP4BardasPredial()
    {
        return (int) $this->retriveAttr(3829,1085)->valor; 
    }
    public function setP4BardasPredial($value)
    {   
        $atributo=$this->retriveAttr(3829,1085);
        $atributo->valor = $value;
    }
    public function getP4BardasEscrituras()
    {
        return (int) $this->retriveAttr(3830,1085)->valor; 
    }
    public function setP4BardasEscrituras($value)
    {   
        $atributo=$this->retriveAttr(3830,1085);
        $atributo->valor = $value;
    }
    public function getP4BardasAltura()
    {
        return (int) $this->retriveAttr(3831,1085)->valor; 
    }
    public function setP4BardasAltura($value)
    {   
        $atributo=$this->retriveAttr(3831,1085);
        $atributo->valor = $value;
    }
    public function getP4RemodelacionAlineamiento()
    {
        return (int) $this->retriveAttr(3832,1085)->valor; 
    }
    public function setP4RemodelacionAlineamiento($value)
    {   
        $atributo=$this->retriveAttr(3832,1085);
        $atributo->valor = $value;
    }
    public function getP4RemodelacionCroquis()
    {
        return (int) $this->retriveAttr(3833,1085)->valor; 
    }
    public function setP4RemodelacionCroquis($value)
    {   
        $atributo=$this->retriveAttr(3833,1085);
        $atributo->valor = $value;
    }
    public function getP4RemodelacionPresupuesto()
    {
        return (int) $this->retriveAttr(3834,1085)->valor; 
    }
    public function setP4RemodelacionPresupuesto($value)
    {   
        $atributo=$this->retriveAttr(3834,1085);
        $atributo->valor = $value;
    }
    public function getP4RemodelacionPredial()
    {
        return (int) $this->retriveAttr(3835,1085)->valor; 
    }
    public function setP4RemodelacionPredial($value)
    {   
        $atributo=$this->retriveAttr(3835,1085);
        $atributo->valor = $value;
    }
    public function getP4RemodelacionEscrituras()
    {
        return (int) $this->retriveAttr(3836,1085)->valor; 
    }
    public function setP4RemodelacionEscrituras($value)
    {   
        $atributo=$this->retriveAttr(3836,1085);
        $atributo->valor = $value;
    }
    public function getP4RemodelacionLicencia()
    {
        return (int) $this->retriveAttr(3837,1085)->valor; 
    }
    public function setP4RemodelacionLicencia($value)
    {   
        $atributo=$this->retriveAttr(3837,1085);
        $atributo->valor = $value;
    }
    public function getP4BanquetasPredial()
    {
        return (int) $this->retriveAttr(3838,1085)->valor; 
    }
    public function setP4BanquetasPredial($value)
    {   
        $atributo=$this->retriveAttr(3838,1085);
        $atributo->valor = $value;
    }
    public function getP4BanquetasCroquis()
    {
        return (int) $this->retriveAttr(3839,1085)->valor; 
    }
    public function setP4BanquetasCroquis($value)
    {   
        $atributo=$this->retriveAttr(3839,1085);
        $atributo->valor = $value;
    }
    public function getP4ProrrogaPermiso()
    {
        return (int) $this->retriveAttr(3840,1085)->valor; 
    }
    public function setP4ProrrogaPermiso($value)
    {   
        $atributo=$this->retriveAttr(3840,1085);
        $atributo->valor = $value;
    }
    public function getP4ProrrogaRecibo()
    {
        return (int) $this->retriveAttr(3841,1085)->valor; 
    }
    public function setP4ProrrogaRecibo($value)
    {   
        $atributo=$this->retriveAttr(3841,1085);
        $atributo->valor = $value;
    }
    public function getP4ProrrogaPlano()
    {
        return (int) $this->retriveAttr(3842,1085)->valor; 
    }
    public function setP4ProrrogaPlano($value)
    {   
        $atributo=$this->retriveAttr(3842,1085);
        $atributo->valor = $value;
    }
    public function getP4ProrrogaSolicitud()
    {
        return (int) $this->retriveAttr(3843,1085)->valor; 
    }
    public function setP4ProrrogaSolicitud($value)
    {   
        $atributo=$this->retriveAttr(3843,1085);
        $atributo->valor = $value;
    }
    public function getP4PermisoSolicitud()
    {
        return (int) $this->retriveAttr(3844,1085)->valor; 
    }
    public function setP4PermisoSolicitud($value)
    {   
        $atributo=$this->retriveAttr(3844,1085);
        $atributo->valor = $value;
    }
    public function getP4DemolicionEscrituras()
    {
        return (int) $this->retriveAttr(3845,1085)->valor; 
    }
    public function setP4DemolicionEscrituras($value)
    {   
        $atributo=$this->retriveAttr(3845,1085);
        $atributo->valor = $value;
    }
    public function getP4DemolicionPredial()
    {
        return (int) $this->retriveAttr(3846,1085)->valor; 
    }
    public function setP4DemolicionPredial($value)
    {   
        $atributo=$this->retriveAttr(3846,1085);
        $atributo->valor = $value;
    }
    public function getP4DemolicionPlano()
    {
        return (int) $this->retriveAttr(3847,1085)->valor; 
    }
    public function setP4DemolicionPlano($value)
    {   
        $atributo=$this->retriveAttr(3847,1085);
        $atributo->valor = $value;
    }
    public function getP5Licencia()
    {
        return  $this->retriveAttr(3848,1086)->valor; 
    }
    public function setP5Licencia($value)
    {   
        $atributo=$this->retriveAttr(3848,1086);
        $atributo->valor = $value;
    }
    public function getP6EnvioExpediente()
    {
        return (int) $this->retriveAttr(3849,1087)->valor; 
    }
    public function setP6EnvioExpediente($value)
    {   
        $atributo=$this->retriveAttr(3849,1087);
        $atributo->valor = $value;
    }
    public function getP6Observaciones()
    {
        return (string) $this->retriveAttr(3850,1087)->valor; 
    }
    public function setP6Observaciones($value)
    {   
        $atributo=$this->retriveAttr(3850,1087);
        $atributo->valor = $value;
    }
    public function getP1Concepto()
    {
        return (string) $this->retriveAttr(3851,1)->valor; 
    }
    public function setP1Concepto($value)
    {   
        $atributo=$this->retriveAttr(3851,1);
        $atributo->valor = $value;
    }
    public function getP1Tipo()
    {
        return (string) $this->retriveAttr(3852,1)->valor; 
    }
    public function setP1Tipo($value)
    {   
        $atributo=$this->retriveAttr(3852,1);
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
}
