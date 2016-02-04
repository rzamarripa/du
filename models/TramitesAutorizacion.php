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
        
            
            return [[['p1NombreSolicitante', 'p1DireccionSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescripcionProceso', 'p1NoCajones', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1ClaveCatastralPredio', 'p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1Observaciones', 'p1NombreGestor', 'p1DireccionGestor', 'p1TelefonoGestor', 'p1CorreoGestor', 'p2Constancia', 'p3Observaciones', 'p5TituloPropiedad', 'p5PlanoLocalizacion', 'p5PlanoTopogra', 'p5AnteproyectoLotificacionVialidad', 'p7Aprobacion', 'p8Solicitud', 'p8AcrediteCaracter', 'p8ActaConstitutiva', 'p8LibertadGravamen', 'p8Minuta', 'p8PlanoNomenclatura', 'p8FactibilidadJapac', 'p8FactibilidadCFE', 'p8EstudiosHidrologico', 'p8Alumbrado', 'p8ProteccionCivil', 'p8Vialidad', 'p10Autorizacion', 'p3Expediente', 'p6Comentario', 'p7PlanoLotificacionVialidad', 'P11MemoriaFraccionamiento', 'p11EstudioMecanicaEstructura', 'p11MemoriaAguaAlcantarillado', 'p11MemoriaElectrificacion', 'p11MemoriaInfraestructura', 'p11MemoriaHidrologico', 'p11Presupuesto', 'p11EstimarPlazo', 'p11PagoSupervision', 'p11GarantiaCumplimiento', 'p11OtorgarEscrituras', 'p11PlanoLocalizacion', 'p11PlanoTopografico', 'p11PlanoLotificacion', 'p11PlanoTrazo', 'p11PlanoPerfiles', 'p11PlanoAguaPotable', 'p11PlanoElectrificacion', 'p11PlanoAlumbrado', 'p11PlanoArborizacion', 'p11ResolucionImpactoAmbiental', 'p11ProyectoVialTransporte', 'p9Notas', 'p9FechaEnvio', 'p7SuperficieGeneral', 'p7Vivienda', 'p7Comercial', 'p7Donacion', 'p7AreasVerdes', 'p7Vialidad', 'p7Reserva', 'p7Otro', 'p7NumLotes', 'p7DensidadVivienda', 'p7DonacionRequerida'], 'string'],
                [['p1SuperficiePredio', 'p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1SegundoNivelConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaBajaXConstruir', 'p1PlantaAltaXConstruir', 'p1SegundoNivelXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir', 'p1NorOrientePredio', 'p1SurOrientePredio', 'p1NorPonientePredio', 'p1SurPonientePredio'], 'double'],
                [['p3Supervisor', 'p4Constancia', 'p6TituloPropiedad', 'p6PlanoLocalizacion', 'p6PlanoTopogra', 'p6PlanoLotificacionVialidad', 'p9Solicitud', 'p9AcrediteCaracter', 'p9ActaConstitutiva', 'p9LibertadGravamen', 'p9Minuta', 'p9PlanoNomenclatura', 'p9FactibilidadJapac', 'p9FactibilidadCFE', 'p9EstudiosHidrologico', 'p9Alumbrado', 'p9ProteccionCivil', 'p9Vialidad', 'P12MemoriaFraccionamiento', 'p12EstudioMecanicaEstructura', 'p12MemoriaAguaAlcantarillado', 'p12MemoriaElectrificacion', 'p12MemoriaInfraestructura', 'p12MemoriaHidrologico', 'p12Presupuesto', 'p12EstimarPlazo', 'p12PagoSupervision', 'p12GarantiaCumplimiento', 'p12OtorgarEscrituras', 'p12PlanoLocalizacion', 'p12PlanoTopografico', 'p12PlanoLotificacion', 'p12PlanoTrazo', 'p12PlanoPerfiles', 'p12PlanoAguaPotable', 'p12PlanoElectrificacion', 'p12PlanoAlumbrado', 'p12PlanoArborizacion', 'p12ResolucionImpactoAmbiental', 'p12ProyectoVialTransporte', 'p9Secretaria', 'p10MandarProyecto'], 'integer'],
                [['p1NombreSolicitante', 'p1DireccionSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescripcionProceso', 'p1NoCajones', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1ClaveCatastralPredio', 'p1SuperficiePredio', 'p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1SegundoNivelConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaBajaXConstruir', 'p1PlantaAltaXConstruir', 'p1SegundoNivelXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir', 'p1Observaciones', 'p1NombreGestor', 'p1DireccionGestor', 'p1TelefonoGestor', 'p1CorreoGestor', 'p1NorOrientePredio', 'p1SurOrientePredio', 'p1NorPonientePredio', 'p1SurPonientePredio'], 'required', 'on'=>'36'],
                [['p2Constancia'], 'required', 'on'=>'37'],
                [['p3Supervisor', 'p3Observaciones'], 'required', 'on'=>'38'],
                [['p4Constancia'], 'required', 'on'=>'39'],
                [['p5TituloPropiedad', 'p5PlanoLocalizacion', 'p5PlanoTopogra', 'p5AnteproyectoLotificacionVialidad'], 'required', 'on'=>'40'],
                [['p6TituloPropiedad', 'p6PlanoLocalizacion', 'p6PlanoTopogra', 'p6PlanoLotificacionVialidad', 'p6Comentario'], 'required', 'on'=>'41'],
                [['p7Aprobacion', 'p7PlanoLotificacionVialidad', 'p7SuperficieGeneral', 'p7Vivienda', 'p7Comercial', 'p7Donacion', 'p7AreasVerdes', 'p7Vialidad', 'p7Reserva', 'p7Otro', 'p7NumLotes', 'p7DensidadVivienda', 'p7DonacionRequerida'], 'required', 'on'=>'42'],
                [['p8Solicitud', 'p8AcrediteCaracter', 'p8ActaConstitutiva', 'p8LibertadGravamen', 'p8Minuta', 'p8PlanoNomenclatura', 'p8FactibilidadJapac', 'p8FactibilidadCFE', 'p8EstudiosHidrologico', 'p8Alumbrado', 'p8ProteccionCivil', 'p8Vialidad'], 'required', 'on'=>'43'],
                [['p9Solicitud', 'p9AcrediteCaracter', 'p9ActaConstitutiva', 'p9LibertadGravamen', 'p9Minuta', 'p9PlanoNomenclatura', 'p9FactibilidadJapac', 'p9FactibilidadCFE', 'p9EstudiosHidrologico', 'p9Alumbrado', 'p9ProteccionCivil', 'p9Vialidad', 'p9Notas', 'p9Secretaria', 'p9FechaEnvio'], 'required', 'on'=>'44'],
                [['p10Autorizacion', 'p10MandarProyecto'], 'required', 'on'=>'46'],
                [['P11MemoriaFraccionamiento', 'p11EstudioMecanicaEstructura', 'p11MemoriaAguaAlcantarillado', 'p11MemoriaElectrificacion', 'p11MemoriaInfraestructura', 'p11MemoriaHidrologico', 'p11Presupuesto', 'p11EstimarPlazo', 'p11PagoSupervision', 'p11GarantiaCumplimiento', 'p11OtorgarEscrituras', 'p11PlanoLocalizacion', 'p11PlanoTopografico', 'p11PlanoLotificacion', 'p11PlanoTrazo', 'p11PlanoPerfiles', 'p11PlanoAguaPotable', 'p11PlanoElectrificacion', 'p11PlanoAlumbrado', 'p11PlanoArborizacion', 'p11ResolucionImpactoAmbiental', 'p11ProyectoVialTransporte'], 'required', 'on'=>'1036'],
                [['P12MemoriaFraccionamiento', 'p12EstudioMecanicaEstructura', 'p12MemoriaAguaAlcantarillado', 'p12MemoriaElectrificacion', 'p12MemoriaInfraestructura', 'p12MemoriaHidrologico', 'p12Presupuesto', 'p12EstimarPlazo', 'p12PagoSupervision', 'p12GarantiaCumplimiento', 'p12OtorgarEscrituras', 'p12PlanoLocalizacion', 'p12PlanoTopografico', 'p12PlanoLotificacion', 'p12PlanoTrazo', 'p12PlanoPerfiles', 'p12PlanoAguaPotable', 'p12PlanoElectrificacion', 'p12PlanoAlumbrado', 'p12PlanoArborizacion', 'p12ResolucionImpactoAmbiental', 'p12ProyectoVialTransporte'], 'required', 'on'=>'1037'],
                [['p1NombreSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1NoCajones', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1NombrePropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1NombreGestor', 'p1TelefonoGestor', 'p1CorreoGestor', 'p7SuperficieGeneral', 'p7Vivienda', 'p7Comercial', 'p7Donacion', 'p7AreasVerdes', 'p7Vialidad', 'p7Reserva', 'p7Otro', 'p7NumLotes', 'p7DensidadVivienda', 'p7DonacionRequerida'], 'string', 'max' => 50],
                [['p1DireccionSolicitante', 'p1DescripcionProceso', 'p1DireccionPropietarios', 'p1Observaciones', 'p1DireccionGestor', 'p3Observaciones', 'p6Comentario', 'p9Notas'], 'string', 'max' => 500],
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
            'p1TotalConstruida' => 'Total Construida',
            'p1PlantaBajaXConstruir' => 'Planta Baja',
            'p1PlantaAltaXConstruir' => 'Planta Alta',
            'p1SegundoNivelXConstruir' => 'Segundo Nivel',
            'p1OtrosXConstruir' => 'Otros',
            'p1TotalXConstruir' => 'Total Por Construir',
            'p1Observaciones' => 'Observaciones',
            'p1NombreGestor' => 'Nombre',
            'p1DireccionGestor' => 'Dirección',
            'p1TelefonoGestor' => 'Telefono',
            'p1CorreoGestor' => 'Correo',
            'p2Constancia' => 'Constancia',
            'p3Supervisor' => 'Supervisor',
            'p3Observaciones' => 'Observaciones',
            'p4Constancia' => 'Constancia',
            'p5TituloPropiedad' => 'Titulo de Propiedad del Terreno Debidamente Inscrito en el Registro Publico de la Propiedad',
            'p5PlanoLocalizacion' => 'Plano de Localización del Terreno',
            'p5PlanoTopogra' => 'Plano Topografico con Curvas de Nivel',
            'p5AnteproyectoLotificacionVialidad' => 'Anteproyecto de Lotificación, Vialidad y Uso de Suelo',
            'p6TituloPropiedad' => 'Titulo de Propiedad del Terreno Debidamente Inscrito en el Registro Publico de la Propiedad',
            'p6PlanoLocalizacion' => 'Plano de Localización del Terreno',
            'p6PlanoTopogra' => 'Plano Topografico con Curvas de Nivel',
            'p6PlanoLotificacionVialidad' => 'Plano de Lotificacion Vialidad y Uso del Suelo con Autorización de la Dirección de Desarrollo Urbano y Ecología y Archivo Digitalizado',
            'p7Aprobacion' => 'Aprobacion de Proyecto',
            'p8Solicitud' => 'Solicitud de Autorización del Fraccionamiento dirigido al Presidente Municipal por parte del Propietario de los terrenos o por su Representante Legitimo con poder bastante para el caso',
            'p8AcrediteCaracter' => 'Se Acredite el Carácter de Representante con Escritura Notarial que contenga poder para actos de Dominio, Inscrita en el Registro Publico de la Propiedad',
            'p8ActaConstitutiva' => 'Si el Propietario fuera Persona Moral Debe Anexar el Acta Constitutiva',
            'p8LibertadGravamen' => 'Certificado de Libertad de Gravamen Expedido por el Registro Publico de la Propiedad',
            'p8Minuta' => 'Minuta de la Escritura Publica a favor del Ayuntamiento Mediante la que se perfeccione la donación de los terrenos para equipamiento urbano.',
            'p8PlanoNomenclatura' => 'Plano de Nomenclatura con el Vo.Bo. del Consejo Municipal de Nomenclatura',
            'p8FactibilidadJapac' => 'Factibilidad de servicios de agua potable y alcantarillado Sanitario (JAPAC)',
            'p8FactibilidadCFE' => 'Factibilidad de Servicios de Energía Eléctrica (CFE)',
            'p8EstudiosHidrologico' => 'Estudio Hidrológico y Solución Pluvial(Pluvial Obras Publicas)',
            'p8Alumbrado' => 'Factibilidad de Servicios Públicos (Alumbrado Publico)',
            'p8ProteccionCivil' => 'Dictamen de Riesgo y Vulnerabilidad (Instituto de Protección Civil del Estado)',
            'p8Vialidad' => 'Dictamen de Impacto Vial (Vialidad y Transporte de Gobierno del Estado)',
            'p9Solicitud' => 'Solicitud de Autorización del Fraccionamiento dirigido al Presidente Municipal por parte del Propietario de los terrenos o por su Representante Legitimo con poder bastante para el caso',
            'p9AcrediteCaracter' => 'Se Acredite el Carácter de Representante con Escritura Notarial que contenga poder para actos de Dominio, Inscrita en el Registro Publico de la Propiedad',
            'p9ActaConstitutiva' => 'Si el Propietario fuera Persona Moral Debe Anexar el Acta Constitutiva',
            'p9LibertadGravamen' => 'Certificado de Libertad de Gravamen Expedido por el Registro Publico de la Propiedad',
            'p9Minuta' => 'Minuta de la Escritura Publica a favor del Ayuntamiento Mediante la que se perfeccione la donación de los terrenos para equipamiento urbano.',
            'p9PlanoNomenclatura' => 'Plano de Nomenclatura con el Vo.Bo. del Consejo Municipal de Nomenclatura',
            'p9FactibilidadJapac' => 'Factibilidad de servicios de agua potable y alcantarillado Sanitario (JAPAC)',
            'p9FactibilidadCFE' => 'Factibilidad de Servicios de Energía Eléctrica (CFE)',
            'p9EstudiosHidrologico' => 'Estudio Hidrológico y Solución Pluvial(Pluvial Obras Publicas)',
            'p9Alumbrado' => 'Factibilidad de Servicios Públicos (Alumbrado Publico)',
            'p9ProteccionCivil' => 'Dictamen de Riesgo y Vulnerabilidad (Instituto de Protección Civil del Estado)',
            'p9Vialidad' => 'Dictamen de Impacto Vial (Vialidad y Transporte de Gobierno del Estado)',
            'p10Autorizacion' => 'Autorización',
            'p1NorOrientePredio' => 'NorOriente',
            'p1SurOrientePredio' => 'SurOriente',
            'p1NorPonientePredio' => 'NorPoniente',
            'p1SurPonientePredio' => 'SurPoniente',
            'p3Expediente' => 'Expediente',
            'p6Comentario' => 'Comentarios de Comité',
            'p7PlanoLotificacionVialidad' => 'Plano de Lotificacion Vialidad y Uso del Suelo con Autorización',
            'P11MemoriaFraccionamiento' => 'Memoria descriptiva del fraccionamiento',
            'p11EstudioMecanicaEstructura' => 'Estudio de mecánica de suelos y estructuras de pavimentos',
            'p11MemoriaAguaAlcantarillado' => 'Memoria de los proyectos de las redes de servicios de infraestructuras agua potable y alcantarillado sanitario (memoria descriptiva y de calculo especificaciones y anexos aprobados por los organismos competentes)',
            'p11MemoriaElectrificacion' => 'Memoria de los proyectos de las redes de servicios de infraestructura Electrificación (memoria descriptiva y de calculo especificaciones y anexos aprobados por los organismos competentes)',
            'p11MemoriaInfraestructura' => 'Memoria de los proyectos de las redes de servicios de infraestructura Alumbrado publico (memoria descriptiva y de calculo especificaciones y anexos aprobados por los organismos competentes)',
            'p11MemoriaHidrologico' => 'Memoria descriptiva del estudio hidrológico y el diseño o solución pluvial (firma de corresponsable)',
            'p11Presupuesto' => 'Presupuesto por concepto y especificaciones de las obras de urbanización',
            'p11EstimarPlazo' => 'Estimar plazo en que deban quedar concluidas todas las obras del fraccionamiento programas de obras de urbanización y plano por etapas (en caso de ser aprobado por etapas)',
            'p11PagoSupervision' => 'Pago ante tesorería por concepto de supervisión',
            'p11GarantiaCumplimiento' => 'Constituir garantía que asegure el cumplimiento de las obligaciones relativas a la conclusión de todas las obras del fraccionamiento hasta por el 10% del presupuesto de las obras (fianza)',
            'p11OtorgarEscrituras' => 'Otorgar en única escritura publica a favor del ayuntamiento los terrenos que han sido donados para lo cual tendrá un plazo máximo de 60 días a partir de la fecha de autorización',
            'p11PlanoLocalizacion' => 'Plano de localización y ubicación del contexto urbano a una escala inferior a 15000',
            'p11PlanoTopografico' => 'Plano topográfico con cuadro de datos y curva de nivel',
            'p11PlanoLotificacion' => 'Plano de lotificación vialidades y usos de suelo y densidad de población aprobados por la dirección',
            'p11PlanoTrazo' => 'Plano de trazo de calles (analítico)',
            'p11PlanoPerfiles' => 'Plano de perfiles y rasantes',
            'p11PlanoAguaPotable' => 'Plano de agua potable aprobados por Japac y salubridad (factibilidad de servicios y oficios de aprobación de Japac y salubridad para agua potable y alcantarillado)',
            'p11PlanoElectrificacion' => 'Plano de electrificación aprobado por CFE (factibilidad de servicios y oficio de aprobación de proyecto)',
            'p11PlanoAlumbrado' => 'Plano de alumbrado publico aprobado por la dirección de servicios públicos (oficio de visto bueno y autorización de proyecto)',
            'p11PlanoArborizacion' => 'Plano de arborización y de áreas verdes',
            'p11ResolucionImpactoAmbiental' => 'Resolución en materia de impacto ambiental emitida por la secretaria del medio ambiente y recursos naturales del gobierno del estado',
            'p11ProyectoVialTransporte' => 'Proyecto aprobado de integración vial y de transporte emitido por la dirección de vialidad y transporte del gobierno del estado',
            'P12MemoriaFraccionamiento' => 'Memoria descriptiva del fraccionamiento',
            'p12EstudioMecanicaEstructura' => 'Estudio de mecánica de suelos y estructuras de pavimentos',
            'p12MemoriaAguaAlcantarillado' => 'Memoria de los proyectos de las redes de servicios de infraestructuras agua potable y alcantarillado sanitario (memoria descriptiva y de calculo especificaciones y anexos aprobados por los organismos competentes)',
            'p12MemoriaElectrificacion' => 'Memoria de los proyectos de las redes de servicios de infraestructura Electrificación (memoria descriptiva y de calculo especificaciones y anexos aprobados por los organismos competentes)',
            'p12MemoriaInfraestructura' => 'Memoria de los proyectos de las redes de servicios de infraestructura Alumbrado publico (memoria descriptiva y de calculo especificaciones y anexos aprobados por los organismos competentes)',
            'p12MemoriaHidrologico' => 'Memoria descriptiva del estudio hidrológico y el diseño o solución pluvial (firma de corresponsable)',
            'p12Presupuesto' => 'Presupuesto por concepto y especificaciones de las obras de urbanización',
            'p12EstimarPlazo' => 'Estimar plazo en que deban quedar concluidas todas las obras del fraccionamiento programas de obras de urbanización y plano por etapas (en caso de ser aprobado por etapas)',
            'p12PagoSupervision' => 'Pago ante tesorería por concepto de supervisión',
            'p12GarantiaCumplimiento' => 'Constituir garantía que asegure el cumplimiento de las obligaciones relativas a la conclusión de todas las obras del fraccionamiento hasta por el 10% del presupuesto de las obras (fianza)',
            'p12OtorgarEscrituras' => 'Otorgar en única escritura publica a favor del ayuntamiento los terrenos que han sido donados para lo cual tendrá un plazo máximo de 60 días a partir de la fecha de autorización',
            'p12PlanoLocalizacion' => 'Plano de localización y ubicación del contexto urbano a una escala inferior a 15000',
            'p12PlanoTopografico' => 'Plano topográfico con cuadro de datos y curva de nivel',
            'p12PlanoLotificacion' => 'Plano de lotificación vialidades y usos de suelo y densidad de población aprobados por la dirección',
            'p12PlanoTrazo' => 'Plano de trazo de calles (analítico)',
            'p12PlanoPerfiles' => 'Plano de perfiles y rasantes',
            'p12PlanoAguaPotable' => 'Plano de agua potable aprobados por Japac y salubridad (factibilidad de servicios y oficios de aprobación de Japac y salubridad para agua potable y alcantarillado)',
            'p12PlanoElectrificacion' => 'Plano de electrificación aprobado por CFE (factibilidad de servicios y oficio de aprobación de proyecto)',
            'p12PlanoAlumbrado' => 'Plano de alumbrado publico aprobado por la dirección de servicios públicos (oficio de visto bueno y autorización de proyecto)',
            'p12PlanoArborizacion' => 'Plano de arborización y de áreas verdes',
            'p12ResolucionImpactoAmbiental' => 'Resolución en materia de impacto ambiental emitida por la secretaria del medio ambiente y recursos naturales del gobierno del estado',
            'p12ProyectoVialTransporte' => 'Proyecto aprobado de integración vial y de transporte emitido por la dirección de vialidad y transporte del gobierno del estado',
            'p9Notas' => 'Notas',
            'p9Secretaria' => 'Se envió a secretaria',
            'p9FechaEnvio' => 'Fecha de envío a Secretaria',
            'p10MandarProyecto' => 'Mandar proyecto digital autorizado al departamento de Proyectos',
            'p7SuperficieGeneral' => 'Superficie General',
            'p7Vivienda' => 'Vivienda',
            'p7Comercial' => 'Comercial',
            'p7Donacion' => 'Donación',
            'p7AreasVerdes' => 'Areas Verdes',
            'p7Vialidad' => 'Vialidad',
            'p7Reserva' => 'Reserva',
            'p7Otro' => 'Otros',
            'p7NumLotes' => 'Numero de Lotes',
            'p7DensidadVivienda' => 'Densidad de Vivienda',
            'p7DonacionRequerida' => 'Donación requerida 15% del area vendible',
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
    public function getP5AnteproyectoLotificacionVialidad()
    {
        return  $this->retriveAttr(1467,40)->valor; 
    }
    public function setP5AnteproyectoLotificacionVialidad($value)
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
    public function getP1NorOrientePredio()
    {
        return (float) $this->retriveAttr(2421,36)->valor; 
    }
    public function setP1NorOrientePredio($value)
    {   
        $atributo=$this->retriveAttr(2421,36);
        $atributo->valor = $value;
    }
    public function getP1SurOrientePredio()
    {
        return (float) $this->retriveAttr(2422,36)->valor; 
    }
    public function setP1SurOrientePredio($value)
    {   
        $atributo=$this->retriveAttr(2422,36);
        $atributo->valor = $value;
    }
    public function getP1NorPonientePredio()
    {
        return (float) $this->retriveAttr(2423,36)->valor; 
    }
    public function setP1NorPonientePredio($value)
    {   
        $atributo=$this->retriveAttr(2423,36);
        $atributo->valor = $value;
    }
    public function getP1SurPonientePredio()
    {
        return (float) $this->retriveAttr(2424,36)->valor; 
    }
    public function setP1SurPonientePredio($value)
    {   
        $atributo=$this->retriveAttr(2424,36);
        $atributo->valor = $value;
    }
    public function getP3Expediente()
    {
        return  $this->retriveAttr(2425,38)->valor; 
    }
    public function setP3Expediente($value)
    {   
        $atributo=$this->retriveAttr(2425,38);
        $atributo->valor = $value;
    }
    public function getP6Comentario()
    {
        return (string) $this->retriveAttr(2426,41)->valor; 
    }
    public function setP6Comentario($value)
    {   
        $atributo=$this->retriveAttr(2426,41);
        $atributo->valor = $value;
    }
    public function getP7PlanoLotificacionVialidad()
    {
        return  $this->retriveAttr(3428,42)->valor; 
    }
    public function setP7PlanoLotificacionVialidad($value)
    {   
        $atributo=$this->retriveAttr(3428,42);
        $atributo->valor = $value;
    }
    public function getP11MemoriaFraccionamiento()
    {
        return  $this->retriveAttr(3429,1036)->valor; 
    }
    public function setP11MemoriaFraccionamiento($value)
    {   
        $atributo=$this->retriveAttr(3429,1036);
        $atributo->valor = $value;
    }
    public function getP11EstudioMecanicaEstructura()
    {
        return  $this->retriveAttr(3430,1036)->valor; 
    }
    public function setP11EstudioMecanicaEstructura($value)
    {   
        $atributo=$this->retriveAttr(3430,1036);
        $atributo->valor = $value;
    }
    public function getP11MemoriaAguaAlcantarillado()
    {
        return  $this->retriveAttr(3431,1036)->valor; 
    }
    public function setP11MemoriaAguaAlcantarillado($value)
    {   
        $atributo=$this->retriveAttr(3431,1036);
        $atributo->valor = $value;
    }
    public function getP11MemoriaElectrificacion()
    {
        return  $this->retriveAttr(3432,1036)->valor; 
    }
    public function setP11MemoriaElectrificacion($value)
    {   
        $atributo=$this->retriveAttr(3432,1036);
        $atributo->valor = $value;
    }
    public function getP11MemoriaInfraestructura()
    {
        return  $this->retriveAttr(3433,1036)->valor; 
    }
    public function setP11MemoriaInfraestructura($value)
    {   
        $atributo=$this->retriveAttr(3433,1036);
        $atributo->valor = $value;
    }
    public function getP11MemoriaHidrologico()
    {
        return  $this->retriveAttr(3434,1036)->valor; 
    }
    public function setP11MemoriaHidrologico($value)
    {   
        $atributo=$this->retriveAttr(3434,1036);
        $atributo->valor = $value;
    }
    public function getP11Presupuesto()
    {
        return  $this->retriveAttr(3435,1036)->valor; 
    }
    public function setP11Presupuesto($value)
    {   
        $atributo=$this->retriveAttr(3435,1036);
        $atributo->valor = $value;
    }
    public function getP11EstimarPlazo()
    {
        return  $this->retriveAttr(3436,1036)->valor; 
    }
    public function setP11EstimarPlazo($value)
    {   
        $atributo=$this->retriveAttr(3436,1036);
        $atributo->valor = $value;
    }
    public function getP11PagoSupervision()
    {
        return  $this->retriveAttr(3437,1036)->valor; 
    }
    public function setP11PagoSupervision($value)
    {   
        $atributo=$this->retriveAttr(3437,1036);
        $atributo->valor = $value;
    }
    public function getP11GarantiaCumplimiento()
    {
        return  $this->retriveAttr(3438,1036)->valor; 
    }
    public function setP11GarantiaCumplimiento($value)
    {   
        $atributo=$this->retriveAttr(3438,1036);
        $atributo->valor = $value;
    }
    public function getP11OtorgarEscrituras()
    {
        return  $this->retriveAttr(3439,1036)->valor; 
    }
    public function setP11OtorgarEscrituras($value)
    {   
        $atributo=$this->retriveAttr(3439,1036);
        $atributo->valor = $value;
    }
    public function getP11PlanoLocalizacion()
    {
        return  $this->retriveAttr(3440,1036)->valor; 
    }
    public function setP11PlanoLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3440,1036);
        $atributo->valor = $value;
    }
    public function getP11PlanoTopografico()
    {
        return  $this->retriveAttr(3441,1036)->valor; 
    }
    public function setP11PlanoTopografico($value)
    {   
        $atributo=$this->retriveAttr(3441,1036);
        $atributo->valor = $value;
    }
    public function getP11PlanoLotificacion()
    {
        return  $this->retriveAttr(3442,1036)->valor; 
    }
    public function setP11PlanoLotificacion($value)
    {   
        $atributo=$this->retriveAttr(3442,1036);
        $atributo->valor = $value;
    }
    public function getP11PlanoTrazo()
    {
        return  $this->retriveAttr(3443,1036)->valor; 
    }
    public function setP11PlanoTrazo($value)
    {   
        $atributo=$this->retriveAttr(3443,1036);
        $atributo->valor = $value;
    }
    public function getP11PlanoPerfiles()
    {
        return  $this->retriveAttr(3444,1036)->valor; 
    }
    public function setP11PlanoPerfiles($value)
    {   
        $atributo=$this->retriveAttr(3444,1036);
        $atributo->valor = $value;
    }
    public function getP11PlanoAguaPotable()
    {
        return  $this->retriveAttr(3445,1036)->valor; 
    }
    public function setP11PlanoAguaPotable($value)
    {   
        $atributo=$this->retriveAttr(3445,1036);
        $atributo->valor = $value;
    }
    public function getP11PlanoElectrificacion()
    {
        return  $this->retriveAttr(3446,1036)->valor; 
    }
    public function setP11PlanoElectrificacion($value)
    {   
        $atributo=$this->retriveAttr(3446,1036);
        $atributo->valor = $value;
    }
    public function getP11PlanoAlumbrado()
    {
        return  $this->retriveAttr(3447,1036)->valor; 
    }
    public function setP11PlanoAlumbrado($value)
    {   
        $atributo=$this->retriveAttr(3447,1036);
        $atributo->valor = $value;
    }
    public function getP11PlanoArborizacion()
    {
        return  $this->retriveAttr(3448,1036)->valor; 
    }
    public function setP11PlanoArborizacion($value)
    {   
        $atributo=$this->retriveAttr(3448,1036);
        $atributo->valor = $value;
    }
    public function getP11ResolucionImpactoAmbiental()
    {
        return  $this->retriveAttr(3449,1036)->valor; 
    }
    public function setP11ResolucionImpactoAmbiental($value)
    {   
        $atributo=$this->retriveAttr(3449,1036);
        $atributo->valor = $value;
    }
    public function getP11ProyectoVialTransporte()
    {
        return  $this->retriveAttr(3450,1036)->valor; 
    }
    public function setP11ProyectoVialTransporte($value)
    {   
        $atributo=$this->retriveAttr(3450,1036);
        $atributo->valor = $value;
    }
    public function getP12MemoriaFraccionamiento()
    {
        return (int) $this->retriveAttr(3451,1037)->valor; 
    }
    public function setP12MemoriaFraccionamiento($value)
    {   
        $atributo=$this->retriveAttr(3451,1037);
        $atributo->valor = $value;
    }
    public function getP12EstudioMecanicaEstructura()
    {
        return (int) $this->retriveAttr(3452,1037)->valor; 
    }
    public function setP12EstudioMecanicaEstructura($value)
    {   
        $atributo=$this->retriveAttr(3452,1037);
        $atributo->valor = $value;
    }
    public function getP12MemoriaAguaAlcantarillado()
    {
        return (int) $this->retriveAttr(3453,1037)->valor; 
    }
    public function setP12MemoriaAguaAlcantarillado($value)
    {   
        $atributo=$this->retriveAttr(3453,1037);
        $atributo->valor = $value;
    }
    public function getP12MemoriaElectrificacion()
    {
        return (int) $this->retriveAttr(3454,1037)->valor; 
    }
    public function setP12MemoriaElectrificacion($value)
    {   
        $atributo=$this->retriveAttr(3454,1037);
        $atributo->valor = $value;
    }
    public function getP12MemoriaInfraestructura()
    {
        return (int) $this->retriveAttr(3455,1037)->valor; 
    }
    public function setP12MemoriaInfraestructura($value)
    {   
        $atributo=$this->retriveAttr(3455,1037);
        $atributo->valor = $value;
    }
    public function getP12MemoriaHidrologico()
    {
        return (int) $this->retriveAttr(3456,1037)->valor; 
    }
    public function setP12MemoriaHidrologico($value)
    {   
        $atributo=$this->retriveAttr(3456,1037);
        $atributo->valor = $value;
    }
    public function getP12Presupuesto()
    {
        return (int) $this->retriveAttr(3457,1037)->valor; 
    }
    public function setP12Presupuesto($value)
    {   
        $atributo=$this->retriveAttr(3457,1037);
        $atributo->valor = $value;
    }
    public function getP12EstimarPlazo()
    {
        return (int) $this->retriveAttr(3458,1037)->valor; 
    }
    public function setP12EstimarPlazo($value)
    {   
        $atributo=$this->retriveAttr(3458,1037);
        $atributo->valor = $value;
    }
    public function getP12PagoSupervision()
    {
        return (int) $this->retriveAttr(3459,1037)->valor; 
    }
    public function setP12PagoSupervision($value)
    {   
        $atributo=$this->retriveAttr(3459,1037);
        $atributo->valor = $value;
    }
    public function getP12GarantiaCumplimiento()
    {
        return (int) $this->retriveAttr(3460,1037)->valor; 
    }
    public function setP12GarantiaCumplimiento($value)
    {   
        $atributo=$this->retriveAttr(3460,1037);
        $atributo->valor = $value;
    }
    public function getP12OtorgarEscrituras()
    {
        return (int) $this->retriveAttr(3461,1037)->valor; 
    }
    public function setP12OtorgarEscrituras($value)
    {   
        $atributo=$this->retriveAttr(3461,1037);
        $atributo->valor = $value;
    }
    public function getP12PlanoLocalizacion()
    {
        return (int) $this->retriveAttr(3462,1037)->valor; 
    }
    public function setP12PlanoLocalizacion($value)
    {   
        $atributo=$this->retriveAttr(3462,1037);
        $atributo->valor = $value;
    }
    public function getP12PlanoTopografico()
    {
        return (int) $this->retriveAttr(3463,1037)->valor; 
    }
    public function setP12PlanoTopografico($value)
    {   
        $atributo=$this->retriveAttr(3463,1037);
        $atributo->valor = $value;
    }
    public function getP12PlanoLotificacion()
    {
        return (int) $this->retriveAttr(3464,1037)->valor; 
    }
    public function setP12PlanoLotificacion($value)
    {   
        $atributo=$this->retriveAttr(3464,1037);
        $atributo->valor = $value;
    }
    public function getP12PlanoTrazo()
    {
        return (int) $this->retriveAttr(3465,1037)->valor; 
    }
    public function setP12PlanoTrazo($value)
    {   
        $atributo=$this->retriveAttr(3465,1037);
        $atributo->valor = $value;
    }
    public function getP12PlanoPerfiles()
    {
        return (int) $this->retriveAttr(3466,1037)->valor; 
    }
    public function setP12PlanoPerfiles($value)
    {   
        $atributo=$this->retriveAttr(3466,1037);
        $atributo->valor = $value;
    }
    public function getP12PlanoAguaPotable()
    {
        return (int) $this->retriveAttr(3467,1037)->valor; 
    }
    public function setP12PlanoAguaPotable($value)
    {   
        $atributo=$this->retriveAttr(3467,1037);
        $atributo->valor = $value;
    }
    public function getP12PlanoElectrificacion()
    {
        return (int) $this->retriveAttr(3468,1037)->valor; 
    }
    public function setP12PlanoElectrificacion($value)
    {   
        $atributo=$this->retriveAttr(3468,1037);
        $atributo->valor = $value;
    }
    public function getP12PlanoAlumbrado()
    {
        return (int) $this->retriveAttr(3469,1037)->valor; 
    }
    public function setP12PlanoAlumbrado($value)
    {   
        $atributo=$this->retriveAttr(3469,1037);
        $atributo->valor = $value;
    }
    public function getP12PlanoArborizacion()
    {
        return (int) $this->retriveAttr(3470,1037)->valor; 
    }
    public function setP12PlanoArborizacion($value)
    {   
        $atributo=$this->retriveAttr(3470,1037);
        $atributo->valor = $value;
    }
    public function getP12ResolucionImpactoAmbiental()
    {
        return (int) $this->retriveAttr(3471,1037)->valor; 
    }
    public function setP12ResolucionImpactoAmbiental($value)
    {   
        $atributo=$this->retriveAttr(3471,1037);
        $atributo->valor = $value;
    }
    public function getP12ProyectoVialTransporte()
    {
        return (int) $this->retriveAttr(3472,1037)->valor; 
    }
    public function setP12ProyectoVialTransporte($value)
    {   
        $atributo=$this->retriveAttr(3472,1037);
        $atributo->valor = $value;
    }
    public function getP9Notas()
    {
        return (string) $this->retriveAttr(3473,44)->valor; 
    }
    public function setP9Notas($value)
    {   
        $atributo=$this->retriveAttr(3473,44);
        $atributo->valor = $value;
    }
    public function getP9Secretaria()
    {
        return (int) $this->retriveAttr(3474,44)->valor; 
    }
    public function setP9Secretaria($value)
    {   
        $atributo=$this->retriveAttr(3474,44);
        $atributo->valor = $value;
    }
    public function getP9FechaEnvio()
    {
        return (string) $this->retriveAttr(3475,44)->valor; 
    }
    public function setP9FechaEnvio($value)
    {   
        $atributo=$this->retriveAttr(3475,44);
        $atributo->valor = $value;
    }
    public function getP10MandarProyecto()
    {
        return (int) $this->retriveAttr(3476,46)->valor; 
    }
    public function setP10MandarProyecto($value)
    {   
        $atributo=$this->retriveAttr(3476,46);
        $atributo->valor = $value;
    }
    public function getP7SuperficieGeneral()
    {
        return (string) $this->retriveAttr(3477,42)->valor; 
    }
    public function setP7SuperficieGeneral($value)
    {   
        $atributo=$this->retriveAttr(3477,42);
        $atributo->valor = $value;
    }
    public function getP7Vivienda()
    {
        return (string) $this->retriveAttr(3478,42)->valor; 
    }
    public function setP7Vivienda($value)
    {   
        $atributo=$this->retriveAttr(3478,42);
        $atributo->valor = $value;
    }
    public function getP7Comercial()
    {
        return (string) $this->retriveAttr(3479,42)->valor; 
    }
    public function setP7Comercial($value)
    {   
        $atributo=$this->retriveAttr(3479,42);
        $atributo->valor = $value;
    }
    public function getP7Donacion()
    {
        return (string) $this->retriveAttr(3480,42)->valor; 
    }
    public function setP7Donacion($value)
    {   
        $atributo=$this->retriveAttr(3480,42);
        $atributo->valor = $value;
    }
    public function getP7AreasVerdes()
    {
        return (string) $this->retriveAttr(3481,42)->valor; 
    }
    public function setP7AreasVerdes($value)
    {   
        $atributo=$this->retriveAttr(3481,42);
        $atributo->valor = $value;
    }
    public function getP7Vialidad()
    {
        return (string) $this->retriveAttr(3482,42)->valor; 
    }
    public function setP7Vialidad($value)
    {   
        $atributo=$this->retriveAttr(3482,42);
        $atributo->valor = $value;
    }
    public function getP7Reserva()
    {
        return (string) $this->retriveAttr(3483,42)->valor; 
    }
    public function setP7Reserva($value)
    {   
        $atributo=$this->retriveAttr(3483,42);
        $atributo->valor = $value;
    }
    public function getP7Otro()
    {
        return (string) $this->retriveAttr(3484,42)->valor; 
    }
    public function setP7Otro($value)
    {   
        $atributo=$this->retriveAttr(3484,42);
        $atributo->valor = $value;
    }
    public function getP7NumLotes()
    {
        return (string) $this->retriveAttr(3485,42)->valor; 
    }
    public function setP7NumLotes($value)
    {   
        $atributo=$this->retriveAttr(3485,42);
        $atributo->valor = $value;
    }
    public function getP7DensidadVivienda()
    {
        return (string) $this->retriveAttr(3486,42)->valor; 
    }
    public function setP7DensidadVivienda($value)
    {   
        $atributo=$this->retriveAttr(3486,42);
        $atributo->valor = $value;
    }
    public function getP7DonacionRequerida()
    {
        return (string) $this->retriveAttr(3487,42)->valor; 
    }
    public function setP7DonacionRequerida($value)
    {   
        $atributo=$this->retriveAttr(3487,42);
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
