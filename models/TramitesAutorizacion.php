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

class TramitesAutorizacion extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 2008; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['p1NombreSolicitante', 'p1DireccionSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescripcionProceso', 'p1NoCajones', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1ClaveCatastralPredio', 'p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1Observaciones', 'p1NombreGestor', 'p1DireccionGestor', 'p1TelefonoGestor', 'p1CorreoGestor', 'p2Constancia', 'p3Observaciones', 'p5TituloPropiedad', 'p5PlanoLocalizacion', 'p5PlanoTopogra', 'p5PlanoLotificacionVialidad', 'p7Aprobacion', 'p8Solicitud', 'p8AcrediteCaracter', 'p8ActaConstitutiva', 'p8LibertadGravamen', 'p8Minuta', 'p8PlanoNomenclatura', 'p8FactibilidadJapac', 'p8FactibilidadCFE', 'p8EstudiosHidrologico', 'p8Alumbrado', 'p8ProteccionCivil', 'p8Vialidad', 'p10Autorizacion'], 'string'],
                [['p1SuperficiePredio', 'p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1SegundoNivelConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaBajaXConstruir', 'p1PlantaAltaXConstruir', 'p1SegundoNivelXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir'], 'double'],
                [['p3Supervisor', 'p4Constancia', 'p6TituloPropiedad', 'p6PlanoLocalizacion', 'p6PlanoTopogra', 'p6PlanoLotificacionVialidad', 'p9Solicitud', 'p9AcrediteCaracter', 'p9ActaConstitutiva', 'p9LibertadGravamen', 'p9Minuta', 'p9PlanoNomenclatura', 'p9FactibilidadJapac', 'p9FactibilidadCFE', 'p9EstudiosHidrologico', 'p9Alumbrado', 'p9ProteccionCivil', 'p9Vialidad'], 'integer'],
                [['p1NombreSolicitante', 'p1DireccionSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescripcionProceso', 'p1NoCajones', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1ClaveCatastralPredio', 'p1SuperficiePredio', 'p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1SegundoNivelConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaBajaXConstruir', 'p1PlantaAltaXConstruir', 'p1SegundoNivelXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir', 'p1Observaciones', 'p1NombreGestor', 'p1DireccionGestor', 'p1TelefonoGestor', 'p1CorreoGestor'], 'required', 'on'=>'36'],
                [['p2Constancia'], 'required', 'on'=>'37'],
                [['p3Supervisor', 'p3Observaciones'], 'required', 'on'=>'38'],
                [['p4Constancia'], 'required', 'on'=>'39'],
                [['p5TituloPropiedad', 'p5PlanoLocalizacion', 'p5PlanoTopogra', 'p5PlanoLotificacionVialidad'], 'required', 'on'=>'40'],
                [['p6TituloPropiedad', 'p6PlanoLocalizacion', 'p6PlanoTopogra', 'p6PlanoLotificacionVialidad'], 'required', 'on'=>'41'],
                [['p7Aprobacion'], 'required', 'on'=>'42'],
                [['p8Solicitud', 'p8AcrediteCaracter', 'p8ActaConstitutiva', 'p8LibertadGravamen', 'p8Minuta', 'p8PlanoNomenclatura', 'p8FactibilidadJapac', 'p8FactibilidadCFE', 'p8EstudiosHidrologico', 'p8Alumbrado', 'p8ProteccionCivil', 'p8Vialidad'], 'required', 'on'=>'43'],
                [['p9Solicitud', 'p9AcrediteCaracter', 'p9ActaConstitutiva', 'p9LibertadGravamen', 'p9Minuta', 'p9PlanoNomenclatura', 'p9FactibilidadJapac', 'p9FactibilidadCFE', 'p9EstudiosHidrologico', 'p9Alumbrado', 'p9ProteccionCivil', 'p9Vialidad'], 'required', 'on'=>'44'],
                [['p10Autorizacion'], 'required', 'on'=>'46'],
                [['p1NombreSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1NoCajones', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1NombrePropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1NombreGestor', 'p1TelefonoGestor', 'p1CorreoGestor'], 'string', 'max' => 50],
                [['p1DireccionSolicitante', 'p1DescripcionProceso', 'p1DireccionPropietarios', 'p1Observaciones', 'p1DireccionGestor', 'p3Observaciones'], 'string', 'max' => 500],
                [['p1TelefonoSolicitante'], 'string', 'max' => 20],
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
            'tipoTramiteId' => 'Tipo Tramite ID',
            'fechaCreacion' => 'Fecha Creacion',
            'fechaModificacion' => 'Fecha Modificacion',
            'observaciones' => 'Observaciones',
            'estatusId' => 'Estatus ID',
            'p1NombreSolicitante' => 'Nombre',
            'p1DireccionSolicitante' => 'Direccion',
            'p1TelefonoSolicitante' => 'Telefono',
            'p1CorreoSolicitante' => 'Correo',
            'p1UsoActual' => 'Uso Actual',
            'p1UsoSolicitado' => 'Uso Solicitado',
            'p1DescripcionProceso' => 'Descripcion del Proceso',
            'p1NoCajones' => 'No. de Cajones con que cuenta el Establecimiento',
            'p1CallePredio' => 'Calle',
            'p1ColoniaPredio' => 'Fraccionamiento o Colonia',
            'p1NumeroOficial' => 'Numero Oficial',
            'p1NumeroInterio' => 'Numero Interior',
            'p1PobladoPredio' => 'Poblado',
            'p1SindicaturaPredio' => 'Sindicatura',
            'p1ClaveCatastralPredio' => 'Clave Catastral',
            'p1SuperficiePredio' => 'Superficie de Predio',
            'p1NortePredio' => 'Norte',
            'p1SurPredio' => 'Sur',
            'p1OrientePredio' => 'Oriente',
            'p1PonientePredio' => 'Poniente',
            'p1NombrePropietarios' => 'Nombre',
            'p1DireccionPropietarios' => 'Direccion',
            'p1TelefonoPropietarios' => 'Telefono',
            'p1CorreoPropietarios' => 'Correo',
            'p1PlantaBajaConstruida' => 'Planta Baja',
            'p1PlantaAltaConstruida' => 'Planta Alta',
            'p1SegundoNivelConstruida' => 'Segundo Nivel',
            'p1OtrosConstruida' => 'Otros',
            'p1TotalConstruida' => 'Total Construida',
            'p1PlantaBajaXConstruir' => 'Planta Baja',
            'p1PlantaAltaXConstruir' => 'Planta Alta',
            'p1SegundoNivelXConstruir' => 'Segundo Nivel',
            'p1OtrosXConstruir' => 'Otros',
            'p1TotalXConstruir' => 'Total Por Construir',
            'p1Observaciones' => 'Observaciones',
            'p1NombreGestor' => 'Nombre',
            'p1DireccionGestor' => 'Direccion',
            'p1TelefonoGestor' => 'Telefono',
            'p1CorreoGestor' => 'Correo',
            'p2Constancia' => 'Constancia',
            'p3Supervisor' => 'Supervisor',
            'p3Observaciones' => 'Observaciones',
            'p4Constancia' => 'Constancia',
            'p5TituloPropiedad' => 'Titulo de Propiedad del Terreno Debidamente Inscrito en el Registro Publico de la Propiedad',
            'p5PlanoLocalizacion' => 'Plano de Localizacion del Terreno',
            'p5PlanoTopogra' => 'Plano Topografico con Curvas de Nivel',
            'p5PlanoLotificacionVialidad' => 'Anteproyecto de Lotificación, vialidades y uso de suelo',
            'p6TituloPropiedad' => 'Titulo de Propiedad del Terreno Debidamente Inscrito en el Registro Publico de la Propiedad',
            'p6PlanoLocalizacion' => 'Plano de Localizacion del Terreno',
            'p6PlanoTopogra' => 'Plano Topografico con Curvas de Nivel',
            'p6PlanoLotificacionVialidad' => 'Plano de Lotificacion Vialidad y Uso del Suelo con Autorizacion de la Direccion de Desarrollo Urbano y Ecologia y Archivo Digitalizado',
            'p7Aprobacion' => 'Aprobacion de Proyecto',
            'p8Solicitud' => 'Solicitud de Autorizacion del Fraccionamiento dirigido al Presidente Municipal por parte del Propietario de los terrenos o por su Representante Legitimo con poder bastante para el caso',
            'p8AcrediteCaracter' => 'Se Acredite el Caracter de Reoresentante con Escritura Notarial que contenga poder para ctos de Dominio, INscrita en el Registro Publico de la Propiedad',
            'p8ActaConstitutiva' => 'Si el Propietario fuera Persona Moral Debe Anexar el Acta Constitutiva',
            'p8LibertadGravamen' => 'Certificado de Libertad de Gravamen Expedido por el Registro Publico de la Propiedad',
            'p8Minuta' => 'Minuta de la Escritura Publica a favor del Ayuntamiento Mediante la que se perfeccione la donacion de los terrenos para equipamiento urbano.',
            'p8PlanoNomenclatura' => 'Plano de Nomenclatura con el Vo.Bo. del Consejo Municipal de Nomenclatura',
            'p8FactibilidadJapac' => 'Factibilidad de servicios de agua potable y alcantarillado Sanitario (JAPAC)',
            'p8FactibilidadCFE' => 'Factibilidad de Servicios de Energia Electrica (CFE)',
            'p8EstudiosHidrologico' => 'Estudio Hidrologico y Solucion Pluvial(Pluvial Obras Publicas)',
            'p8Alumbrado' => 'Factibilidad de Servicios Publicos (Alumbrado Publico)',
            'p8ProteccionCivil' => 'Dictamen de Riesgo y Vulnerabilidad (Instituto de Proteccion Civil del Estado)',
            'p8Vialidad' => 'Dictamen de Impacto Vial (Vialidad y Transporte de Gobierno del Estado)',
            'p9Solicitud' => 'Solicitud de Autorizacion del Fraccionamiento dirigido al Presidente Municipal por parte del Propietario de los terrenos o por su Representante Legitimo con poder bastante para el caso',
            'p9AcrediteCaracter' => 'Se Acredite el Caracter de Reoresentante con Escritura Notarial que contenga poder para ctos de Dominio, INscrita en el Registro Publico de la Propiedad',
            'p9ActaConstitutiva' => 'Si el Propietario fuera Persona Moral Debe Anexar el Acta Constitutiva',
            'p9LibertadGravamen' => 'Certificado de Libertad de Gravamen Expedido por el Registro Publico de la Propiedad',
            'p9Minuta' => 'Minuta de la Escritura Publica a favor del Ayuntamiento Mediante la que se perfeccione la donacion de los terrenos para equipamiento urbano.',
            'p9PlanoNomenclatura' => 'Plano de Nomenclatura con el Vo.Bo. del Consejo Municipal de Nomenclatura',
            'p9FactibilidadJapac' => 'Factibilidad de servicios de agua potable y alcantarillado Sanitario (JAPAC)',
            'p9FactibilidadCFE' => 'Factibilidad de Servicios de Energia Electrica (CFE)',
            'p9EstudiosHidrologico' => 'Estudio Hidrologico y Solucion Pluvial(Pluvial Obras Publicas)',
            'p9Alumbrado' => 'Factibilidad de Servicios Publicos (Alumbrado Publico)',
            'p9ProteccionCivil' => 'Dictamen de Riesgo y Vulnerabilidad (Instituto de Proteccion Civil del Estado)',
            'p9Vialidad' => 'Dictamen de Impacto Vial (Vialidad y Transporte de Gobierno del Estado)',
            'p10Autorizacion' => 'Autorizacion',
        ];
    }

    public function getP1NombreSolicitante()
    {
        return (string) $this->retriveAttr(1421,36)->valor; 
    }
    public function setP1NombreSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1421,36);
        $atributo->valor = $value;
    }
    public function getP1DireccionSolicitante()
    {
        return (string) $this->retriveAttr(1422,36)->valor; 
    }
    public function setP1DireccionSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1422,36);
        $atributo->valor = $value;
    }
    public function getP1TelefonoSolicitante()
    {
        return (string) $this->retriveAttr(1423,36)->valor; 
    }
    public function setP1TelefonoSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1423,36);
        $atributo->valor = $value;
    }
    public function getP1CorreoSolicitante()
    {
        return (string) $this->retriveAttr(1424,36)->valor; 
    }
    public function setP1CorreoSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1424,36);
        $atributo->valor = $value;
    }
    public function getP1UsoActual()
    {
        return (string) $this->retriveAttr(1425,36)->valor; 
    }
    public function setP1UsoActual($value)
    {   
        $atributo=$this->retriveAttr(1425,36);
        $atributo->valor = $value;
    }
    public function getP1UsoSolicitado()
    {
        return (string) $this->retriveAttr(1426,36)->valor; 
    }
    public function setP1UsoSolicitado($value)
    {   
        $atributo=$this->retriveAttr(1426,36);
        $atributo->valor = $value;
    }
    public function getP1DescripcionProceso()
    {
        return (string) $this->retriveAttr(1427,36)->valor; 
    }
    public function setP1DescripcionProceso($value)
    {   
        $atributo=$this->retriveAttr(1427,36);
        $atributo->valor = $value;
    }
    public function getP1NoCajones()
    {
        return (string) $this->retriveAttr(1428,36)->valor; 
    }
    public function setP1NoCajones($value)
    {   
        $atributo=$this->retriveAttr(1428,36);
        $atributo->valor = $value;
    }
    public function getP1CallePredio()
    {
        return (string) $this->retriveAttr(1429,36)->valor; 
    }
    public function setP1CallePredio($value)
    {   
        $atributo=$this->retriveAttr(1429,36);
        $atributo->valor = $value;
    }
    public function getP1ColoniaPredio()
    {
        return (string) $this->retriveAttr(1430,36)->valor; 
    }
    public function setP1ColoniaPredio($value)
    {   
        $atributo=$this->retriveAttr(1430,36);
        $atributo->valor = $value;
    }
    public function getP1NumeroOficial()
    {
        return (string) $this->retriveAttr(1431,36)->valor; 
    }
    public function setP1NumeroOficial($value)
    {   
        $atributo=$this->retriveAttr(1431,36);
        $atributo->valor = $value;
    }
    public function getP1NumeroInterio()
    {
        return (string) $this->retriveAttr(1432,36)->valor; 
    }
    public function setP1NumeroInterio($value)
    {   
        $atributo=$this->retriveAttr(1432,36);
        $atributo->valor = $value;
    }
    public function getP1PobladoPredio()
    {
        return (string) $this->retriveAttr(1433,36)->valor; 
    }
    public function setP1PobladoPredio($value)
    {   
        $atributo=$this->retriveAttr(1433,36);
        $atributo->valor = $value;
    }
    public function getP1SindicaturaPredio()
    {
        return (string) $this->retriveAttr(1434,36)->valor; 
    }
    public function setP1SindicaturaPredio($value)
    {   
        $atributo=$this->retriveAttr(1434,36);
        $atributo->valor = $value;
    }
    public function getP1ClaveCatastralPredio()
    {
        return (string) $this->retriveAttr(1435,36)->valor; 
    }
    public function setP1ClaveCatastralPredio($value)
    {   
        $atributo=$this->retriveAttr(1435,36);
        $atributo->valor = $value;
    }
    public function getP1SuperficiePredio()
    {
        return (float) $this->retriveAttr(1436,36)->valor; 
    }
    public function setP1SuperficiePredio($value)
    {   
        $atributo=$this->retriveAttr(1436,36);
        $atributo->valor = $value;
    }
    public function getP1NortePredio()
    {
        return (float) $this->retriveAttr(1437,36)->valor; 
    }
    public function setP1NortePredio($value)
    {   
        $atributo=$this->retriveAttr(1437,36);
        $atributo->valor = $value;
    }
    public function getP1SurPredio()
    {
        return (float) $this->retriveAttr(1438,36)->valor; 
    }
    public function setP1SurPredio($value)
    {   
        $atributo=$this->retriveAttr(1438,36);
        $atributo->valor = $value;
    }
    public function getP1OrientePredio()
    {
        return (float) $this->retriveAttr(1439,36)->valor; 
    }
    public function setP1OrientePredio($value)
    {   
        $atributo=$this->retriveAttr(1439,36);
        $atributo->valor = $value;
    }
    public function getP1PonientePredio()
    {
        return (float) $this->retriveAttr(1440,36)->valor; 
    }
    public function setP1PonientePredio($value)
    {   
        $atributo=$this->retriveAttr(1440,36);
        $atributo->valor = $value;
    }
    public function getP1NombrePropietarios()
    {
        return (string) $this->retriveAttr(1441,36)->valor; 
    }
    public function setP1NombrePropietarios($value)
    {   
        $atributo=$this->retriveAttr(1441,36);
        $atributo->valor = $value;
    }
    public function getP1DireccionPropietarios()
    {
        return (string) $this->retriveAttr(1442,36)->valor; 
    }
    public function setP1DireccionPropietarios($value)
    {   
        $atributo=$this->retriveAttr(1442,36);
        $atributo->valor = $value;
    }
    public function getP1TelefonoPropietarios()
    {
        return (string) $this->retriveAttr(1443,36)->valor; 
    }
    public function setP1TelefonoPropietarios($value)
    {   
        $atributo=$this->retriveAttr(1443,36);
        $atributo->valor = $value;
    }
    public function getP1CorreoPropietarios()
    {
        return (string) $this->retriveAttr(1444,36)->valor; 
    }
    public function setP1CorreoPropietarios($value)
    {   
        $atributo=$this->retriveAttr(1444,36);
        $atributo->valor = $value;
    }
    public function getP1PlantaBajaConstruida()
    {
        return (float) $this->retriveAttr(1445,36)->valor; 
    }
    public function setP1PlantaBajaConstruida($value)
    {   
        $atributo=$this->retriveAttr(1445,36);
        $atributo->valor = $value;
    }
    public function getP1PlantaAltaConstruida()
    {
        return (float) $this->retriveAttr(1446,36)->valor; 
    }
    public function setP1PlantaAltaConstruida($value)
    {   
        $atributo=$this->retriveAttr(1446,36);
        $atributo->valor = $value;
    }
    public function getP1SegundoNivelConstruida()
    {
        return (float) $this->retriveAttr(1447,36)->valor; 
    }
    public function setP1SegundoNivelConstruida($value)
    {   
        $atributo=$this->retriveAttr(1447,36);
        $atributo->valor = $value;
    }
    public function getP1OtrosConstruida()
    {
        return (float) $this->retriveAttr(1448,36)->valor; 
    }
    public function setP1OtrosConstruida($value)
    {   
        $atributo=$this->retriveAttr(1448,36);
        $atributo->valor = $value;
    }
    public function getP1TotalConstruida()
    {
        return (float) $this->retriveAttr(1449,36)->valor; 
    }
    public function setP1TotalConstruida($value)
    {   
        $atributo=$this->retriveAttr(1449,36);
        $atributo->valor = $value;
    }
    public function getP1PlantaBajaXConstruir()
    {
        return (float) $this->retriveAttr(1450,36)->valor; 
    }
    public function setP1PlantaBajaXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1450,36);
        $atributo->valor = $value;
    }
    public function getP1PlantaAltaXConstruir()
    {
        return (float) $this->retriveAttr(1451,36)->valor; 
    }
    public function setP1PlantaAltaXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1451,36);
        $atributo->valor = $value;
    }
    public function getP1SegundoNivelXConstruir()
    {
        return (float) $this->retriveAttr(1452,36)->valor; 
    }
    public function setP1SegundoNivelXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1452,36);
        $atributo->valor = $value;
    }
    public function getP1OtrosXConstruir()
    {
        return (float) $this->retriveAttr(1453,36)->valor; 
    }
    public function setP1OtrosXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1453,36);
        $atributo->valor = $value;
    }
    public function getP1TotalXConstruir()
    {
        return (float) $this->retriveAttr(1454,36)->valor; 
    }
    public function setP1TotalXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1454,36);
        $atributo->valor = $value;
    }
    public function getP1Observaciones()
    {
        return (string) $this->retriveAttr(1455,36)->valor; 
    }
    public function setP1Observaciones($value)
    {   
        $atributo=$this->retriveAttr(1455,36);
        $atributo->valor = $value;
    }
    public function getP1NombreGestor()
    {
        return (string) $this->retriveAttr(1456,36)->valor; 
    }
    public function setP1NombreGestor($value)
    {   
        $atributo=$this->retriveAttr(1456,36);
        $atributo->valor = $value;
    }
    public function getP1DireccionGestor()
    {
        return (string) $this->retriveAttr(1457,36)->valor; 
    }
    public function setP1DireccionGestor($value)
    {   
        $atributo=$this->retriveAttr(1457,36);
        $atributo->valor = $value;
    }
    public function getP1TelefonoGestor()
    {
        return (string) $this->retriveAttr(1458,36)->valor; 
    }
    public function setP1TelefonoGestor($value)
    {   
        $atributo=$this->retriveAttr(1458,36);
        $atributo->valor = $value;
    }
    public function getP1CorreoGestor()
    {
        return (string) $this->retriveAttr(1459,36)->valor; 
    }
    public function setP1CorreoGestor($value)
    {   
        $atributo=$this->retriveAttr(1459,36);
        $atributo->valor = $value;
    }
    public function getP2Constancia()
    {
        return  $this->retriveAttr(1460,37)->valor; 
    }
    public function setP2Constancia($value)
    {   
        $atributo=$this->retriveAttr(1460,37);
        $atributo->valor = $value;
    }
    public function getP3Supervisor()
    {
        return (int) $this->retriveAttr(1461,38)->valor; 
    }
    public function setP3Supervisor($value)
    {   
        $atributo=$this->retriveAttr(1461,38);
        $atributo->valor = $value;
    }
    public function getP3Observaciones()
    {
        return (string) $this->retriveAttr(1462,38)->valor; 
    }
    public function setP3Observaciones($value)
    {   
        $atributo=$this->retriveAttr(1462,38);
        $atributo->valor = $value;
    }
    public function getP4Constancia()
    {
        return (int) $this->retriveAttr(1463,39)->valor; 
    }
    public function setP4Constancia($value)
    {   
        $atributo=$this->retriveAttr(1463,39);
        $atributo->valor = $value;
    }
    public function getP5TituloPropiedad()
    {
        return  $this->retriveAttr(1464,40)->valor; 
    }
    public function setP5TituloPropiedad($value)
    {   
        $atributo=$this->retriveAttr(1464,40);
        $atributo->valor = $value;
    }
    public function getP5PlanoLocalizacion()
    {
        return  $this->retriveAttr(1465,40)->valor; 
    }
    public function setP5PlanoLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(1465,40);
        $atributo->valor = $value;
    }
    public function getP5PlanoTopogra()
    {
        return  $this->retriveAttr(1466,40)->valor; 
    }
    public function setP5PlanoTopogra($value)
    {   
        $atributo=$this->retriveAttr(1466,40);
        $atributo->valor = $value;
    }
    public function getP5PlanoLotificacionVialidad()
    {
        return  $this->retriveAttr(1467,40)->valor; 
    }
    public function setP5PlanoLotificacionVialidad($value)
    {   
        $atributo=$this->retriveAttr(1467,40);
        $atributo->valor = $value;
    }
    public function getP6TituloPropiedad()
    {
        return (int) $this->retriveAttr(1468,41)->valor; 
    }
    public function setP6TituloPropiedad($value)
    {   
        $atributo=$this->retriveAttr(1468,41);
        $atributo->valor = $value;
    }
    public function getP6PlanoLocalizacion()
    {
        return (int) $this->retriveAttr(1469,41)->valor; 
    }
    public function setP6PlanoLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(1469,41);
        $atributo->valor = $value;
    }
    public function getP6PlanoTopogra()
    {
        return (int) $this->retriveAttr(1470,41)->valor; 
    }
    public function setP6PlanoTopogra($value)
    {   
        $atributo=$this->retriveAttr(1470,41);
        $atributo->valor = $value;
    }
    public function getP6PlanoLotificacionVialidad()
    {
        return (int) $this->retriveAttr(1471,41)->valor; 
    }
    public function setP6PlanoLotificacionVialidad($value)
    {   
        $atributo=$this->retriveAttr(1471,41);
        $atributo->valor = $value;
    }
    public function getP7Aprobacion()
    {
        return  $this->retriveAttr(1472,42)->valor; 
    }
    public function setP7Aprobacion($value)
    {   
        $atributo=$this->retriveAttr(1472,42);
        $atributo->valor = $value;
    }
    public function getP8Solicitud()
    {
        return  $this->retriveAttr(1473,43)->valor; 
    }
    public function setP8Solicitud($value)
    {   
        $atributo=$this->retriveAttr(1473,43);
        $atributo->valor = $value;
    }
    public function getP8AcrediteCaracter()
    {
        return  $this->retriveAttr(1474,43)->valor; 
    }
    public function setP8AcrediteCaracter($value)
    {   
        $atributo=$this->retriveAttr(1474,43);
        $atributo->valor = $value;
    }
    public function getP8ActaConstitutiva()
    {
        return  $this->retriveAttr(1475,43)->valor; 
    }
    public function setP8ActaConstitutiva($value)
    {   
        $atributo=$this->retriveAttr(1475,43);
        $atributo->valor = $value;
    }
    public function getP8LibertadGravamen()
    {
        return  $this->retriveAttr(1476,43)->valor; 
    }
    public function setP8LibertadGravamen($value)
    {   
        $atributo=$this->retriveAttr(1476,43);
        $atributo->valor = $value;
    }
    public function getP8Minuta()
    {
        return  $this->retriveAttr(1477,43)->valor; 
    }
    public function setP8Minuta($value)
    {   
        $atributo=$this->retriveAttr(1477,43);
        $atributo->valor = $value;
    }
    public function getP8PlanoNomenclatura()
    {
        return  $this->retriveAttr(1478,43)->valor; 
    }
    public function setP8PlanoNomenclatura($value)
    {   
        $atributo=$this->retriveAttr(1478,43);
        $atributo->valor = $value;
    }
    public function getP8FactibilidadJapac()
    {
        return  $this->retriveAttr(1479,43)->valor; 
    }
    public function setP8FactibilidadJapac($value)
    {   
        $atributo=$this->retriveAttr(1479,43);
        $atributo->valor = $value;
    }
    public function getP8FactibilidadCFE()
    {
        return  $this->retriveAttr(1480,43)->valor; 
    }
    public function setP8FactibilidadCFE($value)
    {   
        $atributo=$this->retriveAttr(1480,43);
        $atributo->valor = $value;
    }
    public function getP8EstudiosHidrologico()
    {
        return  $this->retriveAttr(1481,43)->valor; 
    }
    public function setP8EstudiosHidrologico($value)
    {   
        $atributo=$this->retriveAttr(1481,43);
        $atributo->valor = $value;
    }
    public function getP8Alumbrado()
    {
        return  $this->retriveAttr(1482,43)->valor; 
    }
    public function setP8Alumbrado($value)
    {   
        $atributo=$this->retriveAttr(1482,43);
        $atributo->valor = $value;
    }
    public function getP8ProteccionCivil()
    {
        return  $this->retriveAttr(1483,43)->valor; 
    }
    public function setP8ProteccionCivil($value)
    {   
        $atributo=$this->retriveAttr(1483,43);
        $atributo->valor = $value;
    }
    public function getP8Vialidad()
    {
        return  $this->retriveAttr(1484,43)->valor; 
    }
    public function setP8Vialidad($value)
    {   
        $atributo=$this->retriveAttr(1484,43);
        $atributo->valor = $value;
    }
    public function getP9Solicitud()
    {
        return (int) $this->retriveAttr(1485,44)->valor; 
    }
    public function setP9Solicitud($value)
    {   
        $atributo=$this->retriveAttr(1485,44);
        $atributo->valor = $value;
    }
    public function getP9AcrediteCaracter()
    {
        return (int) $this->retriveAttr(1486,44)->valor; 
    }
    public function setP9AcrediteCaracter($value)
    {   
        $atributo=$this->retriveAttr(1486,44);
        $atributo->valor = $value;
    }
    public function getP9ActaConstitutiva()
    {
        return (int) $this->retriveAttr(1487,44)->valor; 
    }
    public function setP9ActaConstitutiva($value)
    {   
        $atributo=$this->retriveAttr(1487,44);
        $atributo->valor = $value;
    }
    public function getP9LibertadGravamen()
    {
        return (int) $this->retriveAttr(1488,44)->valor; 
    }
    public function setP9LibertadGravamen($value)
    {   
        $atributo=$this->retriveAttr(1488,44);
        $atributo->valor = $value;
    }
    public function getP9Minuta()
    {
        return (int) $this->retriveAttr(1489,44)->valor; 
    }
    public function setP9Minuta($value)
    {   
        $atributo=$this->retriveAttr(1489,44);
        $atributo->valor = $value;
    }
    public function getP9PlanoNomenclatura()
    {
        return (int) $this->retriveAttr(1490,44)->valor; 
    }
    public function setP9PlanoNomenclatura($value)
    {   
        $atributo=$this->retriveAttr(1490,44);
        $atributo->valor = $value;
    }
    public function getP9FactibilidadJapac()
    {
        return (int) $this->retriveAttr(1491,44)->valor; 
    }
    public function setP9FactibilidadJapac($value)
    {   
        $atributo=$this->retriveAttr(1491,44);
        $atributo->valor = $value;
    }
    public function getP9FactibilidadCFE()
    {
        return (int) $this->retriveAttr(1492,44)->valor; 
    }
    public function setP9FactibilidadCFE($value)
    {   
        $atributo=$this->retriveAttr(1492,44);
        $atributo->valor = $value;
    }
    public function getP9EstudiosHidrologico()
    {
        return (int) $this->retriveAttr(1493,44)->valor; 
    }
    public function setP9EstudiosHidrologico($value)
    {   
        $atributo=$this->retriveAttr(1493,44);
        $atributo->valor = $value;
    }
    public function getP9Alumbrado()
    {
        return (int) $this->retriveAttr(1494,44)->valor; 
    }
    public function setP9Alumbrado($value)
    {   
        $atributo=$this->retriveAttr(1494,44);
        $atributo->valor = $value;
    }
    public function getP9ProteccionCivil()
    {
        return (int) $this->retriveAttr(1495,44)->valor; 
    }
    public function setP9ProteccionCivil($value)
    {   
        $atributo=$this->retriveAttr(1495,44);
        $atributo->valor = $value;
    }
    public function getP9Vialidad()
    {
        return (int) $this->retriveAttr(1496,44)->valor; 
    }
    public function setP9Vialidad($value)
    {   
        $atributo=$this->retriveAttr(1496,44);
        $atributo->valor = $value;
    }
    public function getP10Autorizacion()
    {
        return  $this->retriveAttr(1497,46)->valor; 
    }
    public function setP10Autorizacion($value)
    {   
        $atributo=$this->retriveAttr(1497,46);
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
