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

class TramitesRecepcion extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 2009; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['p1NombreSolicitante', 'p1DireccionSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescripcionProceso', 'p1NoCajones', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1ClaveCatastralPredio', 'p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1Observaciones', 'p1NombreGestor', 'p1DireccionGestor', 'p1TelefonoGestor', 'p1CorreoGestor', 'p2Observaciones', 'p5SolicitudPresidenteMuni', 'p3CertificadoCabildo', 'p5PlanoLotificacion', 'p5RecepcionJapac', 'p3ActaRecepcion', 'p3MemoriaTecno', 'p3PlanoAgua', 'p3PlanoAlcantarillado', 'p5RecepcionCfe', 'p3ActaRecepcionCfe', 'p3CartaCompromiso', 'p3MemoriaTecnoCfe', 'p3PlanoCfe', 'p5RecepcionAlumbrado', 'p3OficioRecepcion', 'p3MemoriaTecnoAlumbrado', 'p3PlanoAlumbrado', 'p5RecepcionCivil', 'p3ActaTecnica', 'p3MemoriaTecnoCivil', 'p5PlanoObras', 'p3Donaciones', 'p3EscriturasPublica', 'p5PlanoPoligono', 'p7Recepcion', 'p2Expediente'], 'string'],
                [['p1SuperficiePredio', 'p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1SegundoNivelConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaBajaXConstruir', 'p1PlantaAltaXConstruir', 'p1SegundoNivelXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir', 'p1NorOrientePredio', 'p1SurOrientePredio', 'p1NorPonientePredio', 'p1SurPonientePredio'], 'double'],
                [['p2Supervisor', 'p6SolicitudPresidenteMuni', 'p6CertificadoCabildo', 'p6PlanoLotificacion', 'p6RecepcionJapac', 'p6ActaTecnica', 'p6MemoriaTecno', 'p6PlanoAgua', 'p6PlanoAlcantarillado', 'p6RecepcionCfe', 'p6ActaRecepcion', 'p6CartaCompromiso', 'p6MemoriaTecnoCfe', 'p6PlanoCfe', 'p6RecepcionAlumbrado', 'p6OficioRecepcion', 'p6MemoriaTecnoAlumbrado', 'p6PlanoAlumbrado', 'p6RecepcionCivil', 'p6ActaTecnicaObras', 'p6MemoriaTecnoCivil', 'p6PlanoObras', 'p6Donaciones', 'p6EscriturasPublica', 'p6PlanoPoligono', 'p6Expediente'], 'integer'],
                [['p1NombreSolicitante', 'p1DireccionSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescripcionProceso', 'p1NoCajones', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1ClaveCatastralPredio', 'p1SuperficiePredio', 'p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1SegundoNivelConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaBajaXConstruir', 'p1PlantaAltaXConstruir', 'p1SegundoNivelXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir', 'p1Observaciones', 'p1NombreGestor', 'p1DireccionGestor', 'p1TelefonoGestor', 'p1CorreoGestor', 'p1NorOrientePredio', 'p1SurOrientePredio', 'p1NorPonientePredio', 'p1SurPonientePredio'], 'required', 'on'=>'45'],
                [['p2Supervisor', 'p2Observaciones', 'p2Expediente'], 'required', 'on'=>'48'],
                [['p5SolicitudPresidenteMuni', 'p3CertificadoCabildo', 'p5PlanoLotificacion', 'p5RecepcionJapac', 'p3ActaRecepcion', 'p3MemoriaTecno', 'p3PlanoAgua', 'p3PlanoAlcantarillado', 'p5RecepcionCfe', 'p3ActaRecepcionCfe', 'p3CartaCompromiso', 'p3MemoriaTecnoCfe', 'p3PlanoCfe', 'p5RecepcionAlumbrado', 'p3OficioRecepcion', 'p3MemoriaTecnoAlumbrado', 'p3PlanoAlumbrado', 'p5RecepcionCivil', 'p3ActaTecnica', 'p3MemoriaTecnoCivil', 'p5PlanoObras', 'p3Donaciones', 'p3EscriturasPublica', 'p5PlanoPoligono'], 'required', 'on'=>'50'],
                [['p6SolicitudPresidenteMuni', 'p6CertificadoCabildo', 'p6PlanoLotificacion', 'p6RecepcionJapac', 'p6ActaTecnica', 'p6MemoriaTecno', 'p6PlanoAgua', 'p6PlanoAlcantarillado', 'p6RecepcionCfe', 'p6ActaRecepcion', 'p6CartaCompromiso', 'p6MemoriaTecnoCfe', 'p6PlanoCfe', 'p6RecepcionAlumbrado', 'p6OficioRecepcion', 'p6MemoriaTecnoAlumbrado', 'p6PlanoAlumbrado', 'p6RecepcionCivil', 'p6ActaTecnicaObras', 'p6MemoriaTecnoCivil', 'p6PlanoObras', 'p6Donaciones', 'p6EscriturasPublica', 'p6PlanoPoligono', 'p6Expediente'], 'required', 'on'=>'51'],
                [['p7Recepcion'], 'required', 'on'=>'52'],
                [['p1NombreSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1CallePredio', 'p1ColoniaPredio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1NombrePropietarios', 'p1CorreoPropietarios', 'p1NombreGestor', 'p1CorreoGestor'], 'string', 'max' => 50],
                [['p1DireccionSolicitante', 'p1DescripcionProceso', 'p1DireccionPropietarios', 'p1Observaciones', 'p1DireccionGestor', 'p2Observaciones'], 'string', 'max' => 500],
                [['p1TelefonoSolicitante', 'p1NoCajones', 'p1NumeroOficial', 'p1NumeroInterio', 'p1TelefonoPropietarios', 'p1TelefonoGestor'], 'string', 'max' => 20],
                [['p1ClaveCatastralPredio'], 'string', 'max' => 30]];

        
            
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pasoActualId' => 'Paso Actual ID',
            'tipoTramiteId' => 'Tipo Trámite ID',
            'fechaCreacion' => 'Fecha Creación',
            'fechaModificacion' => 'Fecha Modificación',
            'observaciones' => 'Observaciones',
            'estatusId' => 'Estatus ID',
            'p1NombreSolicitante' => 'Nombre',
            'p1DireccionSolicitante' => 'Dirección',
            'p1TelefonoSolicitante' => 'Teléfono',
            'p1CorreoSolicitante' => 'Correo',
            'p1UsoActual' => 'Uso Actual',
            'p1UsoSolicitado' => 'Uso Solicitado',
            'p1DescripcionProceso' => 'Descripción del Proyecto',
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
            'p1PlantaBajaConstruida' => 'Planta Baja',
            'p1PlantaAltaConstruida' => 'Planta Alta',
            'p1SegundoNivelConstruida' => 'Segundo Nivel',
            'p1OtrosConstruida' => 'Otros',
            'p1TotalConstruida' => 'Total Construída',
            'p1PlantaBajaXConstruir' => 'Planta Baja',
            'p1PlantaAltaXConstruir' => 'Planta Alta',
            'p1SegundoNivelXConstruir' => 'Segundo Nivel',
            'p1OtrosXConstruir' => 'Otros',
            'p1TotalXConstruir' => 'Total Por Construir',
            'p1Observaciones' => 'Observaciones',
            'p1NombreGestor' => 'Nombre',
            'p1DireccionGestor' => 'Dirección',
            'p1TelefonoGestor' => 'Teléfono',
            'p1CorreoGestor' => 'Correo',
            'p2Supervisor' => 'Supervisor',
            'p2Observaciones' => 'Observaciones',
            'p5SolicitudPresidenteMuni' => 'Solicitud de recepción, dirigido al presidente municipal por parte del propietario o por su representante legítimo con poder bastante para el caso',
            'p3CertificadoCabildo' => 'Certificado de aprobación del fraccionamiento por parte del H.Cabildo',
            'p5PlanoLotificacion' => 'Plano definitivo de la lotificación, vialidad y uso de suelo, aprobado por la dirección de Desarrollo Urbano',
            'p5RecepcionJapac' => 'Recepción de las obras de agua potable y alcantarillado sanitario por parte de JAPAC',
            'p3ActaRecepcion' => 'Acta de Recepción',
            'p3MemoriaTecno' => 'Memoria Tecno-descriptiva de la supervisión y aprobación',
            'p3PlanoAgua' => 'Plano de la red de agua potable(Obra terminada) Aprobada por JAPAC',
            'p3PlanoAlcantarillado' => 'Plano de la red de alcantarillado sanitario (Obra Terminada) aprobado por JAPAC',
            'p5RecepcionCfe' => 'Recepción de las obras de electricidad por parte de la Comisión Federal de Electricidad',
            'p3ActaRecepcionCfe' => 'Acta de Recepción',
            'p3CartaCompromiso' => 'Carta Compromiso',
            'p3MemoriaTecnoCfe' => 'Memoria Tecno-descriptiva',
            'p3PlanoCfe' => 'Plano definitivo de la red de electricidad aprobado por CFE',
            'p5RecepcionAlumbrado' => 'Recepción de las obras de alumbrado público, por parte de la dirección general de Servicios Públicos Municipales',
            'p3OficioRecepcion' => 'Oficio de Recepcion',
            'p3MemoriaTecnoAlumbrado' => 'Memoria Tecnodescriptiva de Alumbrado',
            'p3PlanoAlumbrado' => 'Plano definitivo de alumbrado publico (Obra Terminada) Aprobado por el departamento de Alumbrado Publico',
            'p5RecepcionCivil' => 'Recepcion de obras civiles de urbanizacion (Vialidades, Guarniciones, Banquetas, Drenaje Pluvial) por parte de la Direccion de Desarrollo Urbano y Ecologia',
            'p3ActaTecnica' => 'Acta de aprobacion tecnica de las obras',
            'p3MemoriaTecnoCivil' => 'Memoria Tecnodescriptiva Civil',
            'p5PlanoObras' => 'Planos de obra terminada aprobado por la Direccion de Desarrollo Urbano de Obras Publicas',
            'p3Donaciones' => 'Escrituras de areas de donacion',
            'p3EscriturasPublica' => 'Escritura publica a favor del H. Ayuntamiento inscrita en el registro publico de la propiedad',
            'p5PlanoPoligono' => 'Plano del poligono de las areas de donacion con medidas, colindancias y cuadro de construccion',
            'p6SolicitudPresidenteMuni' => 'Solicitud de recepcion, dirigido al presidente municipal por parte del propietario o por su representante legitimo con poder bastante para el caso',
            'p6CertificadoCabildo' => 'Certificado de aprobacion del fraccionamiento por parte del H.Cabildo',
            'p6PlanoLotificacion' => 'Plano definitivo de la lotificacion, vialidad y uso de suelo, aprobado por la direccion de Desarrollo Urbano',
            'p6RecepcionJapac' => 'Recepcion de las obras de agua potable y alcantarillado sanitariopor parte de JAPAC',
            'p6ActaTecnica' => 'Acta de aprobacion tecnica',
            'p6MemoriaTecno' => 'Memoria Tecnodescriptiva de la supervision y aprobacion',
            'p6PlanoAgua' => 'Plano de la red de agua potable(Obra terminada) Aprobada por JAPAC',
            'p6PlanoAlcantarillado' => 'Plano de la red de alcantarillado sanitario (Obra Terminada) aprobado por JAPAC',
            'p6RecepcionCfe' => 'Recepcion de las obras de electricidad por parte de la Comision Federal de Electricidad',
            'p6ActaRecepcion' => 'Acta de Recepcion',
            'p6CartaCompromiso' => 'Carta Compromiso',
            'p6MemoriaTecnoCfe' => 'Memoria Tecnodescriptiva',
            'p6PlanoCfe' => 'Plano definitivo de la red de electricidad aprobado por CFE',
            'p6RecepcionAlumbrado' => 'Recepcion de las obras de alumbrado publico, por parte de la direccion general de Servicios Publicos Municipales',
            'p6OficioRecepcion' => 'Oficio de Recepcion',
            'p6MemoriaTecnoAlumbrado' => 'Memoria Tecnodescriptiva de Alumbrado',
            'p6PlanoAlumbrado' => 'Plano definitivo de alumbrado publico (Obra Terminada) Aprobado por el departamento de Alumbrado Publico',
            'p6RecepcionCivil' => 'Recepcion de obras civiles de urbanizacion (Vialidades, Guarniciones, Banquetas, Drenaje Pluvial) por parte de la Direccion de Desarrollo Urbano y Ecologia',
            'p6ActaTecnicaObras' => 'Acta de aprobacion tecnica de las obras',
            'p6MemoriaTecnoCivil' => 'Memoria Tecnodescriptiva Civil',
            'p6PlanoObras' => 'Planos de obra terminada aprobado por la Direccion de Desarrollo Urbano de Obras Publicas',
            'p6Donaciones' => 'Escrituras de areas de donacion',
            'p6EscriturasPublica' => 'Escritura publica a favor del H. Ayuntamiento inscrita en el registro publico de la propiedad',
            'p6PlanoPoligono' => 'Plano del poligono de las areas de donacion con medidas, colindancias y cuadro de construccion',
            'p7Recepcion' => 'Constancia',
            'p1NorOrientePredio' => 'NorOriente',
            'p1SurOrientePredio' => 'SurOriente',
            'p1NorPonientePredio' => 'NorPoniente',
            'p1SurPonientePredio' => 'SurPoniente',
            'p2Expediente' => 'Expediente',
            'p6Expediente' => 'Expediente de Supervision',
        ];
    }

    public function getP1NombreSolicitante()
    {
        return (string) $this->retriveAttr(1498,45)->valor; 
    }
    public function setP1NombreSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1498,45);
        $atributo->valor = $value;
    }
    public function getP1DireccionSolicitante()
    {
        return (string) $this->retriveAttr(1499,45)->valor; 
    }
    public function setP1DireccionSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1499,45);
        $atributo->valor = $value;
    }
    public function getP1TelefonoSolicitante()
    {
        return (string) $this->retriveAttr(1500,45)->valor; 
    }
    public function setP1TelefonoSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1500,45);
        $atributo->valor = $value;
    }
    public function getP1CorreoSolicitante()
    {
        return (string) $this->retriveAttr(1501,45)->valor; 
    }
    public function setP1CorreoSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1501,45);
        $atributo->valor = $value;
    }
    public function getP1UsoActual()
    {
        return (string) $this->retriveAttr(1502,45)->valor; 
    }
    public function setP1UsoActual($value)
    {   
        $atributo=$this->retriveAttr(1502,45);
        $atributo->valor = $value;
    }
    public function getP1UsoSolicitado()
    {
        return (string) $this->retriveAttr(1503,45)->valor; 
    }
    public function setP1UsoSolicitado($value)
    {   
        $atributo=$this->retriveAttr(1503,45);
        $atributo->valor = $value;
    }
    public function getP1DescripcionProceso()
    {
        return (string) $this->retriveAttr(1504,45)->valor; 
    }
    public function setP1DescripcionProceso($value)
    {   
        $atributo=$this->retriveAttr(1504,45);
        $atributo->valor = $value;
    }
    public function getP1NoCajones()
    {
        return (string) $this->retriveAttr(1505,45)->valor; 
    }
    public function setP1NoCajones($value)
    {   
        $atributo=$this->retriveAttr(1505,45);
        $atributo->valor = $value;
    }
    public function getP1CallePredio()
    {
        return (string) $this->retriveAttr(1506,45)->valor; 
    }
    public function setP1CallePredio($value)
    {   
        $atributo=$this->retriveAttr(1506,45);
        $atributo->valor = $value;
    }
    public function getP1ColoniaPredio()
    {
        return (string) $this->retriveAttr(1507,45)->valor; 
    }
    public function setP1ColoniaPredio($value)
    {   
        $atributo=$this->retriveAttr(1507,45);
        $atributo->valor = $value;
    }
    public function getP1NumeroOficial()
    {
        return (string) $this->retriveAttr(1508,45)->valor; 
    }
    public function setP1NumeroOficial($value)
    {   
        $atributo=$this->retriveAttr(1508,45);
        $atributo->valor = $value;
    }
    public function getP1NumeroInterio()
    {
        return (string) $this->retriveAttr(1509,45)->valor; 
    }
    public function setP1NumeroInterio($value)
    {   
        $atributo=$this->retriveAttr(1509,45);
        $atributo->valor = $value;
    }
    public function getP1PobladoPredio()
    {
        return (string) $this->retriveAttr(1510,45)->valor; 
    }
    public function setP1PobladoPredio($value)
    {   
        $atributo=$this->retriveAttr(1510,45);
        $atributo->valor = $value;
    }
    public function getP1SindicaturaPredio()
    {
        return (string) $this->retriveAttr(1511,45)->valor; 
    }
    public function setP1SindicaturaPredio($value)
    {   
        $atributo=$this->retriveAttr(1511,45);
        $atributo->valor = $value;
    }
    public function getP1ClaveCatastralPredio()
    {
        return (string) $this->retriveAttr(1512,45)->valor; 
    }
    public function setP1ClaveCatastralPredio($value)
    {   
        $atributo=$this->retriveAttr(1512,45);
        $atributo->valor = $value;
    }
    public function getP1SuperficiePredio()
    {
        return (float) $this->retriveAttr(1513,45)->valor; 
    }
    public function setP1SuperficiePredio($value)
    {   
        $atributo=$this->retriveAttr(1513,45);
        $atributo->valor = $value;
    }
    public function getP1NortePredio()
    {
        return (float) $this->retriveAttr(1514,45)->valor; 
    }
    public function setP1NortePredio($value)
    {   
        $atributo=$this->retriveAttr(1514,45);
        $atributo->valor = $value;
    }
    public function getP1SurPredio()
    {
        return (float) $this->retriveAttr(1515,45)->valor; 
    }
    public function setP1SurPredio($value)
    {   
        $atributo=$this->retriveAttr(1515,45);
        $atributo->valor = $value;
    }
    public function getP1OrientePredio()
    {
        return (float) $this->retriveAttr(1516,45)->valor; 
    }
    public function setP1OrientePredio($value)
    {   
        $atributo=$this->retriveAttr(1516,45);
        $atributo->valor = $value;
    }
    public function getP1PonientePredio()
    {
        return (float) $this->retriveAttr(1517,45)->valor; 
    }
    public function setP1PonientePredio($value)
    {   
        $atributo=$this->retriveAttr(1517,45);
        $atributo->valor = $value;
    }
    public function getP1NombrePropietarios()
    {
        return (string) $this->retriveAttr(1518,45)->valor; 
    }
    public function setP1NombrePropietarios($value)
    {   
        $atributo=$this->retriveAttr(1518,45);
        $atributo->valor = $value;
    }
    public function getP1DireccionPropietarios()
    {
        return (string) $this->retriveAttr(1519,45)->valor; 
    }
    public function setP1DireccionPropietarios($value)
    {   
        $atributo=$this->retriveAttr(1519,45);
        $atributo->valor = $value;
    }
    public function getP1TelefonoPropietarios()
    {
        return (string) $this->retriveAttr(1520,45)->valor; 
    }
    public function setP1TelefonoPropietarios($value)
    {   
        $atributo=$this->retriveAttr(1520,45);
        $atributo->valor = $value;
    }
    public function getP1CorreoPropietarios()
    {
        return (string) $this->retriveAttr(1521,45)->valor; 
    }
    public function setP1CorreoPropietarios($value)
    {   
        $atributo=$this->retriveAttr(1521,45);
        $atributo->valor = $value;
    }
    public function getP1PlantaBajaConstruida()
    {
        return (float) $this->retriveAttr(1522,45)->valor; 
    }
    public function setP1PlantaBajaConstruida($value)
    {   
        $atributo=$this->retriveAttr(1522,45);
        $atributo->valor = $value;
    }
    public function getP1PlantaAltaConstruida()
    {
        return (float) $this->retriveAttr(1523,45)->valor; 
    }
    public function setP1PlantaAltaConstruida($value)
    {   
        $atributo=$this->retriveAttr(1523,45);
        $atributo->valor = $value;
    }
    public function getP1SegundoNivelConstruida()
    {
        return (float) $this->retriveAttr(1524,45)->valor; 
    }
    public function setP1SegundoNivelConstruida($value)
    {   
        $atributo=$this->retriveAttr(1524,45);
        $atributo->valor = $value;
    }
    public function getP1OtrosConstruida()
    {
        return (float) $this->retriveAttr(1525,45)->valor; 
    }
    public function setP1OtrosConstruida($value)
    {   
        $atributo=$this->retriveAttr(1525,45);
        $atributo->valor = $value;
    }
    public function getP1TotalConstruida()
    {
        return (float) $this->retriveAttr(1526,45)->valor; 
    }
    public function setP1TotalConstruida($value)
    {   
        $atributo=$this->retriveAttr(1526,45);
        $atributo->valor = $value;
    }
    public function getP1PlantaBajaXConstruir()
    {
        return (float) $this->retriveAttr(1527,45)->valor; 
    }
    public function setP1PlantaBajaXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1527,45);
        $atributo->valor = $value;
    }
    public function getP1PlantaAltaXConstruir()
    {
        return (float) $this->retriveAttr(1528,45)->valor; 
    }
    public function setP1PlantaAltaXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1528,45);
        $atributo->valor = $value;
    }
    public function getP1SegundoNivelXConstruir()
    {
        return (float) $this->retriveAttr(1529,45)->valor; 
    }
    public function setP1SegundoNivelXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1529,45);
        $atributo->valor = $value;
    }
    public function getP1OtrosXConstruir()
    {
        return (float) $this->retriveAttr(1530,45)->valor; 
    }
    public function setP1OtrosXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1530,45);
        $atributo->valor = $value;
    }
    public function getP1TotalXConstruir()
    {
        return (float) $this->retriveAttr(1531,45)->valor; 
    }
    public function setP1TotalXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1531,45);
        $atributo->valor = $value;
    }
    public function getP1Observaciones()
    {
        return (string) $this->retriveAttr(1532,45)->valor; 
    }
    public function setP1Observaciones($value)
    {   
        $atributo=$this->retriveAttr(1532,45);
        $atributo->valor = $value;
    }
    public function getP1NombreGestor()
    {
        return (string) $this->retriveAttr(1533,45)->valor; 
    }
    public function setP1NombreGestor($value)
    {   
        $atributo=$this->retriveAttr(1533,45);
        $atributo->valor = $value;
    }
    public function getP1DireccionGestor()
    {
        return (string) $this->retriveAttr(1534,45)->valor; 
    }
    public function setP1DireccionGestor($value)
    {   
        $atributo=$this->retriveAttr(1534,45);
        $atributo->valor = $value;
    }
    public function getP1TelefonoGestor()
    {
        return (string) $this->retriveAttr(1535,45)->valor; 
    }
    public function setP1TelefonoGestor($value)
    {   
        $atributo=$this->retriveAttr(1535,45);
        $atributo->valor = $value;
    }
    public function getP1CorreoGestor()
    {
        return (string) $this->retriveAttr(1536,45)->valor; 
    }
    public function setP1CorreoGestor($value)
    {   
        $atributo=$this->retriveAttr(1536,45);
        $atributo->valor = $value;
    }
    public function getP2Supervisor()
    {
        return (int) $this->retriveAttr(1538,48)->valor; 
    }
    public function setP2Supervisor($value)
    {   
        $atributo=$this->retriveAttr(1538,48);
        $atributo->valor = $value;
    }
    public function getP2Observaciones()
    {
        return (string) $this->retriveAttr(1539,48)->valor; 
    }
    public function setP2Observaciones($value)
    {   
        $atributo=$this->retriveAttr(1539,48);
        $atributo->valor = $value;
    }
    public function getP5SolicitudPresidenteMuni()
    {
        return  $this->retriveAttr(1541,50)->valor; 
    }
    public function setP5SolicitudPresidenteMuni($value)
    {   
        $atributo=$this->retriveAttr(1541,50);
        $atributo->valor = $value;
    }
    public function getP3CertificadoCabildo()
    {
        return  $this->retriveAttr(1542,50)->valor; 
    }
    public function setP3CertificadoCabildo($value)
    {   
        $atributo=$this->retriveAttr(1542,50);
        $atributo->valor = $value;
    }
    public function getP5PlanoLotificacion()
    {
        return  $this->retriveAttr(1543,50)->valor; 
    }
    public function setP5PlanoLotificacion($value)
    {   
        $atributo=$this->retriveAttr(1543,50);
        $atributo->valor = $value;
    }
    public function getP5RecepcionJapac()
    {
        return  $this->retriveAttr(1544,50)->valor; 
    }
    public function setP5RecepcionJapac($value)
    {   
        $atributo=$this->retriveAttr(1544,50);
        $atributo->valor = $value;
    }
    public function getP3ActaRecepcion()
    {
        return  $this->retriveAttr(1545,50)->valor; 
    }
    public function setP3ActaRecepcion($value)
    {   
        $atributo=$this->retriveAttr(1545,50);
        $atributo->valor = $value;
    }
    public function getP3MemoriaTecno()
    {
        return  $this->retriveAttr(1546,50)->valor; 
    }
    public function setP3MemoriaTecno($value)
    {   
        $atributo=$this->retriveAttr(1546,50);
        $atributo->valor = $value;
    }
    public function getP3PlanoAgua()
    {
        return  $this->retriveAttr(1547,50)->valor; 
    }
    public function setP3PlanoAgua($value)
    {   
        $atributo=$this->retriveAttr(1547,50);
        $atributo->valor = $value;
    }
    public function getP3PlanoAlcantarillado()
    {
        return  $this->retriveAttr(1548,50)->valor; 
    }
    public function setP3PlanoAlcantarillado($value)
    {   
        $atributo=$this->retriveAttr(1548,50);
        $atributo->valor = $value;
    }
    public function getP5RecepcionCfe()
    {
        return  $this->retriveAttr(1549,50)->valor; 
    }
    public function setP5RecepcionCfe($value)
    {   
        $atributo=$this->retriveAttr(1549,50);
        $atributo->valor = $value;
    }
    public function getP3ActaRecepcionCfe()
    {
        return  $this->retriveAttr(1550,50)->valor; 
    }
    public function setP3ActaRecepcionCfe($value)
    {   
        $atributo=$this->retriveAttr(1550,50);
        $atributo->valor = $value;
    }
    public function getP3CartaCompromiso()
    {
        return  $this->retriveAttr(1551,50)->valor; 
    }
    public function setP3CartaCompromiso($value)
    {   
        $atributo=$this->retriveAttr(1551,50);
        $atributo->valor = $value;
    }
    public function getP3MemoriaTecnoCfe()
    {
        return  $this->retriveAttr(1552,50)->valor; 
    }
    public function setP3MemoriaTecnoCfe($value)
    {   
        $atributo=$this->retriveAttr(1552,50);
        $atributo->valor = $value;
    }
    public function getP3PlanoCfe()
    {
        return  $this->retriveAttr(1553,50)->valor; 
    }
    public function setP3PlanoCfe($value)
    {   
        $atributo=$this->retriveAttr(1553,50);
        $atributo->valor = $value;
    }
    public function getP5RecepcionAlumbrado()
    {
        return  $this->retriveAttr(1554,50)->valor; 
    }
    public function setP5RecepcionAlumbrado($value)
    {   
        $atributo=$this->retriveAttr(1554,50);
        $atributo->valor = $value;
    }
    public function getP3OficioRecepcion()
    {
        return  $this->retriveAttr(1555,50)->valor; 
    }
    public function setP3OficioRecepcion($value)
    {   
        $atributo=$this->retriveAttr(1555,50);
        $atributo->valor = $value;
    }
    public function getP3MemoriaTecnoAlumbrado()
    {
        return  $this->retriveAttr(1556,50)->valor; 
    }
    public function setP3MemoriaTecnoAlumbrado($value)
    {   
        $atributo=$this->retriveAttr(1556,50);
        $atributo->valor = $value;
    }
    public function getP3PlanoAlumbrado()
    {
        return  $this->retriveAttr(1557,50)->valor; 
    }
    public function setP3PlanoAlumbrado($value)
    {   
        $atributo=$this->retriveAttr(1557,50);
        $atributo->valor = $value;
    }
    public function getP5RecepcionCivil()
    {
        return  $this->retriveAttr(1558,50)->valor; 
    }
    public function setP5RecepcionCivil($value)
    {   
        $atributo=$this->retriveAttr(1558,50);
        $atributo->valor = $value;
    }
    public function getP3ActaTecnica()
    {
        return  $this->retriveAttr(1559,50)->valor; 
    }
    public function setP3ActaTecnica($value)
    {   
        $atributo=$this->retriveAttr(1559,50);
        $atributo->valor = $value;
    }
    public function getP3MemoriaTecnoCivil()
    {
        return  $this->retriveAttr(1560,50)->valor; 
    }
    public function setP3MemoriaTecnoCivil($value)
    {   
        $atributo=$this->retriveAttr(1560,50);
        $atributo->valor = $value;
    }
    public function getP5PlanoObras()
    {
        return  $this->retriveAttr(1561,50)->valor; 
    }
    public function setP5PlanoObras($value)
    {   
        $atributo=$this->retriveAttr(1561,50);
        $atributo->valor = $value;
    }
    public function getP3Donaciones()
    {
        return  $this->retriveAttr(1562,50)->valor; 
    }
    public function setP3Donaciones($value)
    {   
        $atributo=$this->retriveAttr(1562,50);
        $atributo->valor = $value;
    }
    public function getP3EscriturasPublica()
    {
        return  $this->retriveAttr(1563,50)->valor; 
    }
    public function setP3EscriturasPublica($value)
    {   
        $atributo=$this->retriveAttr(1563,50);
        $atributo->valor = $value;
    }
    public function getP5PlanoPoligono()
    {
        return  $this->retriveAttr(1564,50)->valor; 
    }
    public function setP5PlanoPoligono($value)
    {   
        $atributo=$this->retriveAttr(1564,50);
        $atributo->valor = $value;
    }
    public function getP6SolicitudPresidenteMuni()
    {
        return (int) $this->retriveAttr(1565,51)->valor; 
    }
    public function setP6SolicitudPresidenteMuni($value)
    {   
        $atributo=$this->retriveAttr(1565,51);
        $atributo->valor = $value;
    }
    public function getP6CertificadoCabildo()
    {
        return (int) $this->retriveAttr(1566,51)->valor; 
    }
    public function setP6CertificadoCabildo($value)
    {   
        $atributo=$this->retriveAttr(1566,51);
        $atributo->valor = $value;
    }
    public function getP6PlanoLotificacion()
    {
        return (int) $this->retriveAttr(1567,51)->valor; 
    }
    public function setP6PlanoLotificacion($value)
    {   
        $atributo=$this->retriveAttr(1567,51);
        $atributo->valor = $value;
    }
    public function getP6RecepcionJapac()
    {
        return (int) $this->retriveAttr(1568,51)->valor; 
    }
    public function setP6RecepcionJapac($value)
    {   
        $atributo=$this->retriveAttr(1568,51);
        $atributo->valor = $value;
    }
    public function getP6ActaTecnica()
    {
        return (int) $this->retriveAttr(1569,51)->valor; 
    }
    public function setP6ActaTecnica($value)
    {   
        $atributo=$this->retriveAttr(1569,51);
        $atributo->valor = $value;
    }
    public function getP6MemoriaTecno()
    {
        return (int) $this->retriveAttr(1570,51)->valor; 
    }
    public function setP6MemoriaTecno($value)
    {   
        $atributo=$this->retriveAttr(1570,51);
        $atributo->valor = $value;
    }
    public function getP6PlanoAgua()
    {
        return (int) $this->retriveAttr(1571,51)->valor; 
    }
    public function setP6PlanoAgua($value)
    {   
        $atributo=$this->retriveAttr(1571,51);
        $atributo->valor = $value;
    }
    public function getP6PlanoAlcantarillado()
    {
        return (int) $this->retriveAttr(1572,51)->valor; 
    }
    public function setP6PlanoAlcantarillado($value)
    {   
        $atributo=$this->retriveAttr(1572,51);
        $atributo->valor = $value;
    }
    public function getP6RecepcionCfe()
    {
        return (int) $this->retriveAttr(1573,51)->valor; 
    }
    public function setP6RecepcionCfe($value)
    {   
        $atributo=$this->retriveAttr(1573,51);
        $atributo->valor = $value;
    }
    public function getP6ActaRecepcion()
    {
        return (int) $this->retriveAttr(1574,51)->valor; 
    }
    public function setP6ActaRecepcion($value)
    {   
        $atributo=$this->retriveAttr(1574,51);
        $atributo->valor = $value;
    }
    public function getP6CartaCompromiso()
    {
        return (int) $this->retriveAttr(1575,51)->valor; 
    }
    public function setP6CartaCompromiso($value)
    {   
        $atributo=$this->retriveAttr(1575,51);
        $atributo->valor = $value;
    }
    public function getP6MemoriaTecnoCfe()
    {
        return (int) $this->retriveAttr(1576,51)->valor; 
    }
    public function setP6MemoriaTecnoCfe($value)
    {   
        $atributo=$this->retriveAttr(1576,51);
        $atributo->valor = $value;
    }
    public function getP6PlanoCfe()
    {
        return (int) $this->retriveAttr(1577,51)->valor; 
    }
    public function setP6PlanoCfe($value)
    {   
        $atributo=$this->retriveAttr(1577,51);
        $atributo->valor = $value;
    }
    public function getP6RecepcionAlumbrado()
    {
        return (int) $this->retriveAttr(1578,51)->valor; 
    }
    public function setP6RecepcionAlumbrado($value)
    {   
        $atributo=$this->retriveAttr(1578,51);
        $atributo->valor = $value;
    }
    public function getP6OficioRecepcion()
    {
        return (int) $this->retriveAttr(1579,51)->valor; 
    }
    public function setP6OficioRecepcion($value)
    {   
        $atributo=$this->retriveAttr(1579,51);
        $atributo->valor = $value;
    }
    public function getP6MemoriaTecnoAlumbrado()
    {
        return (int) $this->retriveAttr(1580,51)->valor; 
    }
    public function setP6MemoriaTecnoAlumbrado($value)
    {   
        $atributo=$this->retriveAttr(1580,51);
        $atributo->valor = $value;
    }
    public function getP6PlanoAlumbrado()
    {
        return (int) $this->retriveAttr(1581,51)->valor; 
    }
    public function setP6PlanoAlumbrado($value)
    {   
        $atributo=$this->retriveAttr(1581,51);
        $atributo->valor = $value;
    }
    public function getP6RecepcionCivil()
    {
        return (int) $this->retriveAttr(1582,51)->valor; 
    }
    public function setP6RecepcionCivil($value)
    {   
        $atributo=$this->retriveAttr(1582,51);
        $atributo->valor = $value;
    }
    public function getP6ActaTecnicaObras()
    {
        return (int) $this->retriveAttr(1583,51)->valor; 
    }
    public function setP6ActaTecnicaObras($value)
    {   
        $atributo=$this->retriveAttr(1583,51);
        $atributo->valor = $value;
    }
    public function getP6MemoriaTecnoCivil()
    {
        return (int) $this->retriveAttr(1584,51)->valor; 
    }
    public function setP6MemoriaTecnoCivil($value)
    {   
        $atributo=$this->retriveAttr(1584,51);
        $atributo->valor = $value;
    }
    public function getP6PlanoObras()
    {
        return (int) $this->retriveAttr(1585,51)->valor; 
    }
    public function setP6PlanoObras($value)
    {   
        $atributo=$this->retriveAttr(1585,51);
        $atributo->valor = $value;
    }
    public function getP6Donaciones()
    {
        return (int) $this->retriveAttr(1586,51)->valor; 
    }
    public function setP6Donaciones($value)
    {   
        $atributo=$this->retriveAttr(1586,51);
        $atributo->valor = $value;
    }
    public function getP6EscriturasPublica()
    {
        return (int) $this->retriveAttr(1587,51)->valor; 
    }
    public function setP6EscriturasPublica($value)
    {   
        $atributo=$this->retriveAttr(1587,51);
        $atributo->valor = $value;
    }
    public function getP6PlanoPoligono()
    {
        return (int) $this->retriveAttr(1588,51)->valor; 
    }
    public function setP6PlanoPoligono($value)
    {   
        $atributo=$this->retriveAttr(1588,51);
        $atributo->valor = $value;
    }
    public function getP7Recepcion()
    {
        return  $this->retriveAttr(1589,52)->valor; 
    }
    public function setP7Recepcion($value)
    {   
        $atributo=$this->retriveAttr(1589,52);
        $atributo->valor = $value;
    }
    public function getP1NorOrientePredio()
    {
        return (float) $this->retriveAttr(3488,45)->valor; 
    }
    public function setP1NorOrientePredio($value)
    {   
        $atributo=$this->retriveAttr(3488,45);
        $atributo->valor = $value;
    }
    public function getP1SurOrientePredio()
    {
        return (float) $this->retriveAttr(3489,45)->valor; 
    }
    public function setP1SurOrientePredio($value)
    {   
        $atributo=$this->retriveAttr(3489,45);
        $atributo->valor = $value;
    }
    public function getP1NorPonientePredio()
    {
        return (float) $this->retriveAttr(3490,45)->valor; 
    }
    public function setP1NorPonientePredio($value)
    {   
        $atributo=$this->retriveAttr(3490,45);
        $atributo->valor = $value;
    }
    public function getP1SurPonientePredio()
    {
        return (float) $this->retriveAttr(3491,45)->valor; 
    }
    public function setP1SurPonientePredio($value)
    {   
        $atributo=$this->retriveAttr(3491,45);
        $atributo->valor = $value;
    }
    public function getP2Expediente()
    {
        return  $this->retriveAttr(3496,48)->valor; 
    }
    public function setP2Expediente($value)
    {   
        $atributo=$this->retriveAttr(3496,48);
        $atributo->valor = $value;
    }
    public function getP6Expediente()
    {
        return (int) $this->retriveAttr(3498,51)->valor; 
    }
    public function setP6Expediente($value)
    {   
        $atributo=$this->retriveAttr(3498,51);
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
