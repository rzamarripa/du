<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TramitesAutorizacion;

/**
 * TramitesAutorizacionSearch represents the model behind the search form about `app\models\TramitesAutorizacion`.
 */
class TramitesAutorizacionSearch extends TramitesAutorizacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId', 'estatusId'], 'integer'],
            [['fechaCreacion', 'fechaModificacion', 'observaciones', 'p1NombreSolicitante', 'p1DireccionSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescripcionProceso', 'p1NoCajones', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1ClaveCatastralPredio', 'p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1Observaciones', 'p1NombreGestor', 'p1DireccionGestor', 'p1TelefonoGestor', 'p1CorreoGestor', 'p2Constancia', 'p3Supervisor', 'p3Observaciones', 'p4Constancia', 'p5TituloPropiedad', 'p5PlanoLocalizacion', 'p5PlanoTopogra', 'p5AnteproyectoLotificacionVialidad', 'p6TituloPropiedad', 'p6PlanoLocalizacion', 'p6PlanoTopogra', 'p6PlanoLotificacionVialidad', 'p7Aprobacion', 'p8Solicitud', 'p8AcrediteCaracter', 'p8ActaConstitutiva', 'p8LibertadGravamen', 'p8Minuta', 'p8PlanoNomenclatura', 'p8FactibilidadJapac', 'p8FactibilidadCFE', 'p8EstudiosHidrologico', 'p8Alumbrado', 'p8ProteccionCivil', 'p8Vialidad', 'p9Solicitud', 'p9AcrediteCaracter', 'p9ActaConstitutiva', 'p9LibertadGravamen', 'p9Minuta', 'p9PlanoNomenclatura', 'p9FactibilidadJapac', 'p9FactibilidadCFE', 'p9EstudiosHidrologico', 'p9Alumbrado', 'p9ProteccionCivil', 'p9Vialidad', 'p10Autorizacion', 'p3Expediente', 'p6Comentario', 'p7PlanoLotificacionVialidad', 'P11MemoriaFraccionamiento', 'p11EstudioMecanicaEstructura', 'p11MemoriaAguaAlcantarillado', 'p11MemoriaElectrificacion', 'p11MemoriaInfraestructura', 'p11MemoriaHidrologico', 'p11Presupuesto', 'p11EstimarPlazo', 'p11PagoSupervision', 'p11GarantiaCumplimiento', 'p11OtorgarEscrituras', 'p11PlanoLocalizacion', 'p11PlanoTopografico', 'p11PlanoLotificacion', 'p11PlanoTrazo', 'p11PlanoPerfiles', 'p11PlanoAguaPotable', 'p11PlanoElectrificacion', 'p11PlanoAlumbrado', 'p11PlanoArborizacion', 'p11ResolucionImpactoAmbiental', 'p11ProyectoVialTransporte', 'P12MemoriaFraccionamiento', 'p12EstudioMecanicaEstructura', 'p12MemoriaAguaAlcantarillado', 'p12MemoriaElectrificacion', 'p12MemoriaInfraestructura', 'p12MemoriaHidrologico', 'p12Presupuesto', 'p12EstimarPlazo', 'p12PagoSupervision', 'p12GarantiaCumplimiento', 'p12OtorgarEscrituras', 'p12PlanoLocalizacion', 'p12PlanoTopografico', 'p12PlanoLotificacion', 'p12PlanoTrazo', 'p12PlanoPerfiles', 'p12PlanoAguaPotable', 'p12PlanoElectrificacion', 'p12PlanoAlumbrado', 'p12PlanoArborizacion', 'p12ResolucionImpactoAmbiental', 'p12ProyectoVialTransporte', 'p9Notas', 'p9Secretaria', 'p9FechaEnvio', 'p10MandarProyecto', 'p7SuperficieGeneral', 'p7Vivienda', 'p7Comercial', 'p7Donacion', 'p7AreasVerdes', 'p7Vialidad', 'p7Reserva', 'p7Otro', 'p7NumLotes', 'p7DensidadVivienda', 'p7DonacionRequerida'], 'safe'],
            [['p1SuperficiePredio', 'p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1SegundoNivelConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaBajaXConstruir', 'p1PlantaAltaXConstruir', 'p1SegundoNivelXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir', 'p1NorOrientePredio', 'p1SurOrientePredio', 'p1NorPonientePredio', 'p1SurPonientePredio'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TramitesAutorizacion::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query -> leftJoin('valoresTramite att_p1NombreSolicitante', 
                            'att_p1NombreSolicitante.tramiteId=Tramites.id and att_p1NombreSolicitante.atributoId=1421');
        $query -> leftJoin('valoresTramite att_p1DireccionSolicitante', 
                            'att_p1DireccionSolicitante.tramiteId=Tramites.id and att_p1DireccionSolicitante.atributoId=1422');
        $query -> leftJoin('valoresTramite att_p1TelefonoSolicitante', 
                            'att_p1TelefonoSolicitante.tramiteId=Tramites.id and att_p1TelefonoSolicitante.atributoId=1423');
        $query -> leftJoin('valoresTramite att_p1CorreoSolicitante', 
                            'att_p1CorreoSolicitante.tramiteId=Tramites.id and att_p1CorreoSolicitante.atributoId=1424');
        $query -> leftJoin('valoresTramite att_p1UsoActual', 
                            'att_p1UsoActual.tramiteId=Tramites.id and att_p1UsoActual.atributoId=1425');
        $query -> leftJoin('valoresTramite att_p1UsoSolicitado', 
                            'att_p1UsoSolicitado.tramiteId=Tramites.id and att_p1UsoSolicitado.atributoId=1426');
        $query -> leftJoin('valoresTramite att_p1DescripcionProceso', 
                            'att_p1DescripcionProceso.tramiteId=Tramites.id and att_p1DescripcionProceso.atributoId=1427');
        $query -> leftJoin('valoresTramite att_p1NoCajones', 
                            'att_p1NoCajones.tramiteId=Tramites.id and att_p1NoCajones.atributoId=1428');
        $query -> leftJoin('valoresTramite att_p1CallePredio', 
                            'att_p1CallePredio.tramiteId=Tramites.id and att_p1CallePredio.atributoId=1429');
        $query -> leftJoin('valoresTramite att_p1ColoniaPredio', 
                            'att_p1ColoniaPredio.tramiteId=Tramites.id and att_p1ColoniaPredio.atributoId=1430');
        $query -> leftJoin('valoresTramite att_p1NumeroOficial', 
                            'att_p1NumeroOficial.tramiteId=Tramites.id and att_p1NumeroOficial.atributoId=1431');
        $query -> leftJoin('valoresTramite att_p1NumeroInterio', 
                            'att_p1NumeroInterio.tramiteId=Tramites.id and att_p1NumeroInterio.atributoId=1432');
        $query -> leftJoin('valoresTramite att_p1PobladoPredio', 
                            'att_p1PobladoPredio.tramiteId=Tramites.id and att_p1PobladoPredio.atributoId=1433');
        $query -> leftJoin('valoresTramite att_p1SindicaturaPredio', 
                            'att_p1SindicaturaPredio.tramiteId=Tramites.id and att_p1SindicaturaPredio.atributoId=1434');
        $query -> leftJoin('valoresTramite att_p1ClaveCatastralPredio', 
                            'att_p1ClaveCatastralPredio.tramiteId=Tramites.id and att_p1ClaveCatastralPredio.atributoId=1435');
        $query -> leftJoin('valoresTramite att_p1SuperficiePredio', 
                            'att_p1SuperficiePredio.tramiteId=Tramites.id and att_p1SuperficiePredio.atributoId=1436');
        $query -> leftJoin('valoresTramite att_p1NortePredio', 
                            'att_p1NortePredio.tramiteId=Tramites.id and att_p1NortePredio.atributoId=1437');
        $query -> leftJoin('valoresTramite att_p1SurPredio', 
                            'att_p1SurPredio.tramiteId=Tramites.id and att_p1SurPredio.atributoId=1438');
        $query -> leftJoin('valoresTramite att_p1OrientePredio', 
                            'att_p1OrientePredio.tramiteId=Tramites.id and att_p1OrientePredio.atributoId=1439');
        $query -> leftJoin('valoresTramite att_p1PonientePredio', 
                            'att_p1PonientePredio.tramiteId=Tramites.id and att_p1PonientePredio.atributoId=1440');
        $query -> leftJoin('valoresTramite att_p1NombrePropietarios', 
                            'att_p1NombrePropietarios.tramiteId=Tramites.id and att_p1NombrePropietarios.atributoId=1441');
        $query -> leftJoin('valoresTramite att_p1DireccionPropietarios', 
                            'att_p1DireccionPropietarios.tramiteId=Tramites.id and att_p1DireccionPropietarios.atributoId=1442');
        $query -> leftJoin('valoresTramite att_p1TelefonoPropietarios', 
                            'att_p1TelefonoPropietarios.tramiteId=Tramites.id and att_p1TelefonoPropietarios.atributoId=1443');
        $query -> leftJoin('valoresTramite att_p1CorreoPropietarios', 
                            'att_p1CorreoPropietarios.tramiteId=Tramites.id and att_p1CorreoPropietarios.atributoId=1444');
        $query -> leftJoin('valoresTramite att_p1PlantaBajaConstruida', 
                            'att_p1PlantaBajaConstruida.tramiteId=Tramites.id and att_p1PlantaBajaConstruida.atributoId=1445');
        $query -> leftJoin('valoresTramite att_p1PlantaAltaConstruida', 
                            'att_p1PlantaAltaConstruida.tramiteId=Tramites.id and att_p1PlantaAltaConstruida.atributoId=1446');
        $query -> leftJoin('valoresTramite att_p1SegundoNivelConstruida', 
                            'att_p1SegundoNivelConstruida.tramiteId=Tramites.id and att_p1SegundoNivelConstruida.atributoId=1447');
        $query -> leftJoin('valoresTramite att_p1OtrosConstruida', 
                            'att_p1OtrosConstruida.tramiteId=Tramites.id and att_p1OtrosConstruida.atributoId=1448');
        $query -> leftJoin('valoresTramite att_p1TotalConstruida', 
                            'att_p1TotalConstruida.tramiteId=Tramites.id and att_p1TotalConstruida.atributoId=1449');
        $query -> leftJoin('valoresTramite att_p1PlantaBajaXConstruir', 
                            'att_p1PlantaBajaXConstruir.tramiteId=Tramites.id and att_p1PlantaBajaXConstruir.atributoId=1450');
        $query -> leftJoin('valoresTramite att_p1PlantaAltaXConstruir', 
                            'att_p1PlantaAltaXConstruir.tramiteId=Tramites.id and att_p1PlantaAltaXConstruir.atributoId=1451');
        $query -> leftJoin('valoresTramite att_p1SegundoNivelXConstruir', 
                            'att_p1SegundoNivelXConstruir.tramiteId=Tramites.id and att_p1SegundoNivelXConstruir.atributoId=1452');
        $query -> leftJoin('valoresTramite att_p1OtrosXConstruir', 
                            'att_p1OtrosXConstruir.tramiteId=Tramites.id and att_p1OtrosXConstruir.atributoId=1453');
        $query -> leftJoin('valoresTramite att_p1TotalXConstruir', 
                            'att_p1TotalXConstruir.tramiteId=Tramites.id and att_p1TotalXConstruir.atributoId=1454');
        $query -> leftJoin('valoresTramite att_p1Observaciones', 
                            'att_p1Observaciones.tramiteId=Tramites.id and att_p1Observaciones.atributoId=1455');
        $query -> leftJoin('valoresTramite att_p1NombreGestor', 
                            'att_p1NombreGestor.tramiteId=Tramites.id and att_p1NombreGestor.atributoId=1456');
        $query -> leftJoin('valoresTramite att_p1DireccionGestor', 
                            'att_p1DireccionGestor.tramiteId=Tramites.id and att_p1DireccionGestor.atributoId=1457');
        $query -> leftJoin('valoresTramite att_p1TelefonoGestor', 
                            'att_p1TelefonoGestor.tramiteId=Tramites.id and att_p1TelefonoGestor.atributoId=1458');
        $query -> leftJoin('valoresTramite att_p1CorreoGestor', 
                            'att_p1CorreoGestor.tramiteId=Tramites.id and att_p1CorreoGestor.atributoId=1459');
        $query -> leftJoin('valoresTramite att_p2Constancia', 
                            'att_p2Constancia.tramiteId=Tramites.id and att_p2Constancia.atributoId=1460');
        $query -> leftJoin('valoresTramite att_p3Supervisor', 
                            'att_p3Supervisor.tramiteId=Tramites.id and att_p3Supervisor.atributoId=1461');
        $query -> leftJoin('valoresTramite att_p3Observaciones', 
                            'att_p3Observaciones.tramiteId=Tramites.id and att_p3Observaciones.atributoId=1462');
        $query -> leftJoin('valoresTramite att_p4Constancia', 
                            'att_p4Constancia.tramiteId=Tramites.id and att_p4Constancia.atributoId=1463');
        $query -> leftJoin('valoresTramite att_p5TituloPropiedad', 
                            'att_p5TituloPropiedad.tramiteId=Tramites.id and att_p5TituloPropiedad.atributoId=1464');
        $query -> leftJoin('valoresTramite att_p5PlanoLocalizacion', 
                            'att_p5PlanoLocalizacion.tramiteId=Tramites.id and att_p5PlanoLocalizacion.atributoId=1465');
        $query -> leftJoin('valoresTramite att_p5PlanoTopogra', 
                            'att_p5PlanoTopogra.tramiteId=Tramites.id and att_p5PlanoTopogra.atributoId=1466');
        $query -> leftJoin('valoresTramite att_p5AnteproyectoLotificacionVialidad', 
                            'att_p5AnteproyectoLotificacionVialidad.tramiteId=Tramites.id and att_p5AnteproyectoLotificacionVialidad.atributoId=1467');
        $query -> leftJoin('valoresTramite att_p6TituloPropiedad', 
                            'att_p6TituloPropiedad.tramiteId=Tramites.id and att_p6TituloPropiedad.atributoId=1468');
        $query -> leftJoin('valoresTramite att_p6PlanoLocalizacion', 
                            'att_p6PlanoLocalizacion.tramiteId=Tramites.id and att_p6PlanoLocalizacion.atributoId=1469');
        $query -> leftJoin('valoresTramite att_p6PlanoTopogra', 
                            'att_p6PlanoTopogra.tramiteId=Tramites.id and att_p6PlanoTopogra.atributoId=1470');
        $query -> leftJoin('valoresTramite att_p6PlanoLotificacionVialidad', 
                            'att_p6PlanoLotificacionVialidad.tramiteId=Tramites.id and att_p6PlanoLotificacionVialidad.atributoId=1471');
        $query -> leftJoin('valoresTramite att_p7Aprobacion', 
                            'att_p7Aprobacion.tramiteId=Tramites.id and att_p7Aprobacion.atributoId=1472');
        $query -> leftJoin('valoresTramite att_p8Solicitud', 
                            'att_p8Solicitud.tramiteId=Tramites.id and att_p8Solicitud.atributoId=1473');
        $query -> leftJoin('valoresTramite att_p8AcrediteCaracter', 
                            'att_p8AcrediteCaracter.tramiteId=Tramites.id and att_p8AcrediteCaracter.atributoId=1474');
        $query -> leftJoin('valoresTramite att_p8ActaConstitutiva', 
                            'att_p8ActaConstitutiva.tramiteId=Tramites.id and att_p8ActaConstitutiva.atributoId=1475');
        $query -> leftJoin('valoresTramite att_p8LibertadGravamen', 
                            'att_p8LibertadGravamen.tramiteId=Tramites.id and att_p8LibertadGravamen.atributoId=1476');
        $query -> leftJoin('valoresTramite att_p8Minuta', 
                            'att_p8Minuta.tramiteId=Tramites.id and att_p8Minuta.atributoId=1477');
        $query -> leftJoin('valoresTramite att_p8PlanoNomenclatura', 
                            'att_p8PlanoNomenclatura.tramiteId=Tramites.id and att_p8PlanoNomenclatura.atributoId=1478');
        $query -> leftJoin('valoresTramite att_p8FactibilidadJapac', 
                            'att_p8FactibilidadJapac.tramiteId=Tramites.id and att_p8FactibilidadJapac.atributoId=1479');
        $query -> leftJoin('valoresTramite att_p8FactibilidadCFE', 
                            'att_p8FactibilidadCFE.tramiteId=Tramites.id and att_p8FactibilidadCFE.atributoId=1480');
        $query -> leftJoin('valoresTramite att_p8EstudiosHidrologico', 
                            'att_p8EstudiosHidrologico.tramiteId=Tramites.id and att_p8EstudiosHidrologico.atributoId=1481');
        $query -> leftJoin('valoresTramite att_p8Alumbrado', 
                            'att_p8Alumbrado.tramiteId=Tramites.id and att_p8Alumbrado.atributoId=1482');
        $query -> leftJoin('valoresTramite att_p8ProteccionCivil', 
                            'att_p8ProteccionCivil.tramiteId=Tramites.id and att_p8ProteccionCivil.atributoId=1483');
        $query -> leftJoin('valoresTramite att_p8Vialidad', 
                            'att_p8Vialidad.tramiteId=Tramites.id and att_p8Vialidad.atributoId=1484');
        $query -> leftJoin('valoresTramite att_p9Solicitud', 
                            'att_p9Solicitud.tramiteId=Tramites.id and att_p9Solicitud.atributoId=1485');
        $query -> leftJoin('valoresTramite att_p9AcrediteCaracter', 
                            'att_p9AcrediteCaracter.tramiteId=Tramites.id and att_p9AcrediteCaracter.atributoId=1486');
        $query -> leftJoin('valoresTramite att_p9ActaConstitutiva', 
                            'att_p9ActaConstitutiva.tramiteId=Tramites.id and att_p9ActaConstitutiva.atributoId=1487');
        $query -> leftJoin('valoresTramite att_p9LibertadGravamen', 
                            'att_p9LibertadGravamen.tramiteId=Tramites.id and att_p9LibertadGravamen.atributoId=1488');
        $query -> leftJoin('valoresTramite att_p9Minuta', 
                            'att_p9Minuta.tramiteId=Tramites.id and att_p9Minuta.atributoId=1489');
        $query -> leftJoin('valoresTramite att_p9PlanoNomenclatura', 
                            'att_p9PlanoNomenclatura.tramiteId=Tramites.id and att_p9PlanoNomenclatura.atributoId=1490');
        $query -> leftJoin('valoresTramite att_p9FactibilidadJapac', 
                            'att_p9FactibilidadJapac.tramiteId=Tramites.id and att_p9FactibilidadJapac.atributoId=1491');
        $query -> leftJoin('valoresTramite att_p9FactibilidadCFE', 
                            'att_p9FactibilidadCFE.tramiteId=Tramites.id and att_p9FactibilidadCFE.atributoId=1492');
        $query -> leftJoin('valoresTramite att_p9EstudiosHidrologico', 
                            'att_p9EstudiosHidrologico.tramiteId=Tramites.id and att_p9EstudiosHidrologico.atributoId=1493');
        $query -> leftJoin('valoresTramite att_p9Alumbrado', 
                            'att_p9Alumbrado.tramiteId=Tramites.id and att_p9Alumbrado.atributoId=1494');
        $query -> leftJoin('valoresTramite att_p9ProteccionCivil', 
                            'att_p9ProteccionCivil.tramiteId=Tramites.id and att_p9ProteccionCivil.atributoId=1495');
        $query -> leftJoin('valoresTramite att_p9Vialidad', 
                            'att_p9Vialidad.tramiteId=Tramites.id and att_p9Vialidad.atributoId=1496');
        $query -> leftJoin('valoresTramite att_p10Autorizacion', 
                            'att_p10Autorizacion.tramiteId=Tramites.id and att_p10Autorizacion.atributoId=1497');
        $query -> leftJoin('valoresTramite att_p1NorOrientePredio', 
                            'att_p1NorOrientePredio.tramiteId=Tramites.id and att_p1NorOrientePredio.atributoId=2421');
        $query -> leftJoin('valoresTramite att_p1SurOrientePredio', 
                            'att_p1SurOrientePredio.tramiteId=Tramites.id and att_p1SurOrientePredio.atributoId=2422');
        $query -> leftJoin('valoresTramite att_p1NorPonientePredio', 
                            'att_p1NorPonientePredio.tramiteId=Tramites.id and att_p1NorPonientePredio.atributoId=2423');
        $query -> leftJoin('valoresTramite att_p1SurPonientePredio', 
                            'att_p1SurPonientePredio.tramiteId=Tramites.id and att_p1SurPonientePredio.atributoId=2424');
        $query -> leftJoin('valoresTramite att_p3Expediente', 
                            'att_p3Expediente.tramiteId=Tramites.id and att_p3Expediente.atributoId=2425');
        $query -> leftJoin('valoresTramite att_p6Comentario', 
                            'att_p6Comentario.tramiteId=Tramites.id and att_p6Comentario.atributoId=2426');
        $query -> leftJoin('valoresTramite att_p7PlanoLotificacionVialidad', 
                            'att_p7PlanoLotificacionVialidad.tramiteId=Tramites.id and att_p7PlanoLotificacionVialidad.atributoId=3428');
        $query -> leftJoin('valoresTramite att_P11MemoriaFraccionamiento', 
                            'att_P11MemoriaFraccionamiento.tramiteId=Tramites.id and att_P11MemoriaFraccionamiento.atributoId=3429');
        $query -> leftJoin('valoresTramite att_p11EstudioMecanicaEstructura', 
                            'att_p11EstudioMecanicaEstructura.tramiteId=Tramites.id and att_p11EstudioMecanicaEstructura.atributoId=3430');
        $query -> leftJoin('valoresTramite att_p11MemoriaAguaAlcantarillado', 
                            'att_p11MemoriaAguaAlcantarillado.tramiteId=Tramites.id and att_p11MemoriaAguaAlcantarillado.atributoId=3431');
        $query -> leftJoin('valoresTramite att_p11MemoriaElectrificacion', 
                            'att_p11MemoriaElectrificacion.tramiteId=Tramites.id and att_p11MemoriaElectrificacion.atributoId=3432');
        $query -> leftJoin('valoresTramite att_p11MemoriaInfraestructura', 
                            'att_p11MemoriaInfraestructura.tramiteId=Tramites.id and att_p11MemoriaInfraestructura.atributoId=3433');
        $query -> leftJoin('valoresTramite att_p11MemoriaHidrologico', 
                            'att_p11MemoriaHidrologico.tramiteId=Tramites.id and att_p11MemoriaHidrologico.atributoId=3434');
        $query -> leftJoin('valoresTramite att_p11Presupuesto', 
                            'att_p11Presupuesto.tramiteId=Tramites.id and att_p11Presupuesto.atributoId=3435');
        $query -> leftJoin('valoresTramite att_p11EstimarPlazo', 
                            'att_p11EstimarPlazo.tramiteId=Tramites.id and att_p11EstimarPlazo.atributoId=3436');
        $query -> leftJoin('valoresTramite att_p11PagoSupervision', 
                            'att_p11PagoSupervision.tramiteId=Tramites.id and att_p11PagoSupervision.atributoId=3437');
        $query -> leftJoin('valoresTramite att_p11GarantiaCumplimiento', 
                            'att_p11GarantiaCumplimiento.tramiteId=Tramites.id and att_p11GarantiaCumplimiento.atributoId=3438');
        $query -> leftJoin('valoresTramite att_p11OtorgarEscrituras', 
                            'att_p11OtorgarEscrituras.tramiteId=Tramites.id and att_p11OtorgarEscrituras.atributoId=3439');
        $query -> leftJoin('valoresTramite att_p11PlanoLocalizacion', 
                            'att_p11PlanoLocalizacion.tramiteId=Tramites.id and att_p11PlanoLocalizacion.atributoId=3440');
        $query -> leftJoin('valoresTramite att_p11PlanoTopografico', 
                            'att_p11PlanoTopografico.tramiteId=Tramites.id and att_p11PlanoTopografico.atributoId=3441');
        $query -> leftJoin('valoresTramite att_p11PlanoLotificacion', 
                            'att_p11PlanoLotificacion.tramiteId=Tramites.id and att_p11PlanoLotificacion.atributoId=3442');
        $query -> leftJoin('valoresTramite att_p11PlanoTrazo', 
                            'att_p11PlanoTrazo.tramiteId=Tramites.id and att_p11PlanoTrazo.atributoId=3443');
        $query -> leftJoin('valoresTramite att_p11PlanoPerfiles', 
                            'att_p11PlanoPerfiles.tramiteId=Tramites.id and att_p11PlanoPerfiles.atributoId=3444');
        $query -> leftJoin('valoresTramite att_p11PlanoAguaPotable', 
                            'att_p11PlanoAguaPotable.tramiteId=Tramites.id and att_p11PlanoAguaPotable.atributoId=3445');
        $query -> leftJoin('valoresTramite att_p11PlanoElectrificacion', 
                            'att_p11PlanoElectrificacion.tramiteId=Tramites.id and att_p11PlanoElectrificacion.atributoId=3446');
        $query -> leftJoin('valoresTramite att_p11PlanoAlumbrado', 
                            'att_p11PlanoAlumbrado.tramiteId=Tramites.id and att_p11PlanoAlumbrado.atributoId=3447');
        $query -> leftJoin('valoresTramite att_p11PlanoArborizacion', 
                            'att_p11PlanoArborizacion.tramiteId=Tramites.id and att_p11PlanoArborizacion.atributoId=3448');
        $query -> leftJoin('valoresTramite att_p11ResolucionImpactoAmbiental', 
                            'att_p11ResolucionImpactoAmbiental.tramiteId=Tramites.id and att_p11ResolucionImpactoAmbiental.atributoId=3449');
        $query -> leftJoin('valoresTramite att_p11ProyectoVialTransporte', 
                            'att_p11ProyectoVialTransporte.tramiteId=Tramites.id and att_p11ProyectoVialTransporte.atributoId=3450');
        $query -> leftJoin('valoresTramite att_P12MemoriaFraccionamiento', 
                            'att_P12MemoriaFraccionamiento.tramiteId=Tramites.id and att_P12MemoriaFraccionamiento.atributoId=3451');
        $query -> leftJoin('valoresTramite att_p12EstudioMecanicaEstructura', 
                            'att_p12EstudioMecanicaEstructura.tramiteId=Tramites.id and att_p12EstudioMecanicaEstructura.atributoId=3452');
        $query -> leftJoin('valoresTramite att_p12MemoriaAguaAlcantarillado', 
                            'att_p12MemoriaAguaAlcantarillado.tramiteId=Tramites.id and att_p12MemoriaAguaAlcantarillado.atributoId=3453');
        $query -> leftJoin('valoresTramite att_p12MemoriaElectrificacion', 
                            'att_p12MemoriaElectrificacion.tramiteId=Tramites.id and att_p12MemoriaElectrificacion.atributoId=3454');
        $query -> leftJoin('valoresTramite att_p12MemoriaInfraestructura', 
                            'att_p12MemoriaInfraestructura.tramiteId=Tramites.id and att_p12MemoriaInfraestructura.atributoId=3455');
        $query -> leftJoin('valoresTramite att_p12MemoriaHidrologico', 
                            'att_p12MemoriaHidrologico.tramiteId=Tramites.id and att_p12MemoriaHidrologico.atributoId=3456');
        $query -> leftJoin('valoresTramite att_p12Presupuesto', 
                            'att_p12Presupuesto.tramiteId=Tramites.id and att_p12Presupuesto.atributoId=3457');
        $query -> leftJoin('valoresTramite att_p12EstimarPlazo', 
                            'att_p12EstimarPlazo.tramiteId=Tramites.id and att_p12EstimarPlazo.atributoId=3458');
        $query -> leftJoin('valoresTramite att_p12PagoSupervision', 
                            'att_p12PagoSupervision.tramiteId=Tramites.id and att_p12PagoSupervision.atributoId=3459');
        $query -> leftJoin('valoresTramite att_p12GarantiaCumplimiento', 
                            'att_p12GarantiaCumplimiento.tramiteId=Tramites.id and att_p12GarantiaCumplimiento.atributoId=3460');
        $query -> leftJoin('valoresTramite att_p12OtorgarEscrituras', 
                            'att_p12OtorgarEscrituras.tramiteId=Tramites.id and att_p12OtorgarEscrituras.atributoId=3461');
        $query -> leftJoin('valoresTramite att_p12PlanoLocalizacion', 
                            'att_p12PlanoLocalizacion.tramiteId=Tramites.id and att_p12PlanoLocalizacion.atributoId=3462');
        $query -> leftJoin('valoresTramite att_p12PlanoTopografico', 
                            'att_p12PlanoTopografico.tramiteId=Tramites.id and att_p12PlanoTopografico.atributoId=3463');
        $query -> leftJoin('valoresTramite att_p12PlanoLotificacion', 
                            'att_p12PlanoLotificacion.tramiteId=Tramites.id and att_p12PlanoLotificacion.atributoId=3464');
        $query -> leftJoin('valoresTramite att_p12PlanoTrazo', 
                            'att_p12PlanoTrazo.tramiteId=Tramites.id and att_p12PlanoTrazo.atributoId=3465');
        $query -> leftJoin('valoresTramite att_p12PlanoPerfiles', 
                            'att_p12PlanoPerfiles.tramiteId=Tramites.id and att_p12PlanoPerfiles.atributoId=3466');
        $query -> leftJoin('valoresTramite att_p12PlanoAguaPotable', 
                            'att_p12PlanoAguaPotable.tramiteId=Tramites.id and att_p12PlanoAguaPotable.atributoId=3467');
        $query -> leftJoin('valoresTramite att_p12PlanoElectrificacion', 
                            'att_p12PlanoElectrificacion.tramiteId=Tramites.id and att_p12PlanoElectrificacion.atributoId=3468');
        $query -> leftJoin('valoresTramite att_p12PlanoAlumbrado', 
                            'att_p12PlanoAlumbrado.tramiteId=Tramites.id and att_p12PlanoAlumbrado.atributoId=3469');
        $query -> leftJoin('valoresTramite att_p12PlanoArborizacion', 
                            'att_p12PlanoArborizacion.tramiteId=Tramites.id and att_p12PlanoArborizacion.atributoId=3470');
        $query -> leftJoin('valoresTramite att_p12ResolucionImpactoAmbiental', 
                            'att_p12ResolucionImpactoAmbiental.tramiteId=Tramites.id and att_p12ResolucionImpactoAmbiental.atributoId=3471');
        $query -> leftJoin('valoresTramite att_p12ProyectoVialTransporte', 
                            'att_p12ProyectoVialTransporte.tramiteId=Tramites.id and att_p12ProyectoVialTransporte.atributoId=3472');
        $query -> leftJoin('valoresTramite att_p9Notas', 
                            'att_p9Notas.tramiteId=Tramites.id and att_p9Notas.atributoId=3473');
        $query -> leftJoin('valoresTramite att_p9Secretaria', 
                            'att_p9Secretaria.tramiteId=Tramites.id and att_p9Secretaria.atributoId=3474');
        $query -> leftJoin('valoresTramite att_p9FechaEnvio', 
                            'att_p9FechaEnvio.tramiteId=Tramites.id and att_p9FechaEnvio.atributoId=3475');
        $query -> leftJoin('valoresTramite att_p10MandarProyecto', 
                            'att_p10MandarProyecto.tramiteId=Tramites.id and att_p10MandarProyecto.atributoId=3476');
        $query -> leftJoin('valoresTramite att_p7SuperficieGeneral', 
                            'att_p7SuperficieGeneral.tramiteId=Tramites.id and att_p7SuperficieGeneral.atributoId=3477');
        $query -> leftJoin('valoresTramite att_p7Vivienda', 
                            'att_p7Vivienda.tramiteId=Tramites.id and att_p7Vivienda.atributoId=3478');
        $query -> leftJoin('valoresTramite att_p7Comercial', 
                            'att_p7Comercial.tramiteId=Tramites.id and att_p7Comercial.atributoId=3479');
        $query -> leftJoin('valoresTramite att_p7Donacion', 
                            'att_p7Donacion.tramiteId=Tramites.id and att_p7Donacion.atributoId=3480');
        $query -> leftJoin('valoresTramite att_p7AreasVerdes', 
                            'att_p7AreasVerdes.tramiteId=Tramites.id and att_p7AreasVerdes.atributoId=3481');
        $query -> leftJoin('valoresTramite att_p7Vialidad', 
                            'att_p7Vialidad.tramiteId=Tramites.id and att_p7Vialidad.atributoId=3482');
        $query -> leftJoin('valoresTramite att_p7Reserva', 
                            'att_p7Reserva.tramiteId=Tramites.id and att_p7Reserva.atributoId=3483');
        $query -> leftJoin('valoresTramite att_p7Otro', 
                            'att_p7Otro.tramiteId=Tramites.id and att_p7Otro.atributoId=3484');
        $query -> leftJoin('valoresTramite att_p7NumLotes', 
                            'att_p7NumLotes.tramiteId=Tramites.id and att_p7NumLotes.atributoId=3485');
        $query -> leftJoin('valoresTramite att_p7DensidadVivienda', 
                            'att_p7DensidadVivienda.tramiteId=Tramites.id and att_p7DensidadVivienda.atributoId=3486');
        $query -> leftJoin('valoresTramite att_p7DonacionRequerida', 
                            'att_p7DonacionRequerida.tramiteId=Tramites.id and att_p7DonacionRequerida.atributoId=3487');
        
        $query->andFilterWhere([
            'id' => $this->id,
            'pasoActualId' => $this->pasoActualId,
            'tipoTramiteId' => $this->tipoDeTramite(),
            'att_fechaCreacion' => $this->fechaCreacion,
            'att_fechaModificacion' => $this->fechaModificacion,
            'att_estatusId' => $this->estatusId,
            'att_p1SuperficiePredio' => $this->p1SuperficiePredio,
            'att_p1NortePredio' => $this->p1NortePredio,
            'att_p1SurPredio' => $this->p1SurPredio,
            'att_p1OrientePredio' => $this->p1OrientePredio,
            'att_p1PonientePredio' => $this->p1PonientePredio,
            'att_p1PlantaBajaConstruida' => $this->p1PlantaBajaConstruida,
            'att_p1PlantaAltaConstruida' => $this->p1PlantaAltaConstruida,
            'att_p1SegundoNivelConstruida' => $this->p1SegundoNivelConstruida,
            'att_p1OtrosConstruida' => $this->p1OtrosConstruida,
            'att_p1TotalConstruida' => $this->p1TotalConstruida,
            'att_p1PlantaBajaXConstruir' => $this->p1PlantaBajaXConstruir,
            'att_p1PlantaAltaXConstruir' => $this->p1PlantaAltaXConstruir,
            'att_p1SegundoNivelXConstruir' => $this->p1SegundoNivelXConstruir,
            'att_p1OtrosXConstruir' => $this->p1OtrosXConstruir,
            'att_p1TotalXConstruir' => $this->p1TotalXConstruir,
            'att_p1NorOrientePredio' => $this->p1NorOrientePredio,
            'att_p1SurOrientePredio' => $this->p1SurOrientePredio,
            'att_p1NorPonientePredio' => $this->p1NorPonientePredio,
            'att_p1SurPonientePredio' => $this->p1SurPonientePredio,
            'att_p9FechaEnvio' => $this->p9FechaEnvio,
        ]);

        $query->andFilterWhere(['like', 'att_observaciones.valor', $this->observaciones])
            ->andFilterWhere(['like', 'att_p1NombreSolicitante.valor', $this->p1NombreSolicitante])
            ->andFilterWhere(['like', 'att_p1DireccionSolicitante.valor', $this->p1DireccionSolicitante])
            ->andFilterWhere(['like', 'att_p1TelefonoSolicitante.valor', $this->p1TelefonoSolicitante])
            ->andFilterWhere(['like', 'att_p1CorreoSolicitante.valor', $this->p1CorreoSolicitante])
            ->andFilterWhere(['like', 'att_p1UsoActual.valor', $this->p1UsoActual])
            ->andFilterWhere(['like', 'att_p1UsoSolicitado.valor', $this->p1UsoSolicitado])
            ->andFilterWhere(['like', 'att_p1DescripcionProceso.valor', $this->p1DescripcionProceso])
            ->andFilterWhere(['like', 'att_p1NoCajones.valor', $this->p1NoCajones])
            ->andFilterWhere(['like', 'att_p1CallePredio.valor', $this->p1CallePredio])
            ->andFilterWhere(['like', 'att_p1ColoniaPredio.valor', $this->p1ColoniaPredio])
            ->andFilterWhere(['like', 'att_p1NumeroOficial.valor', $this->p1NumeroOficial])
            ->andFilterWhere(['like', 'att_p1NumeroInterio.valor', $this->p1NumeroInterio])
            ->andFilterWhere(['like', 'att_p1PobladoPredio.valor', $this->p1PobladoPredio])
            ->andFilterWhere(['like', 'att_p1SindicaturaPredio.valor', $this->p1SindicaturaPredio])
            ->andFilterWhere(['like', 'att_p1ClaveCatastralPredio.valor', $this->p1ClaveCatastralPredio])
            ->andFilterWhere(['like', 'att_p1NombrePropietarios.valor', $this->p1NombrePropietarios])
            ->andFilterWhere(['like', 'att_p1DireccionPropietarios.valor', $this->p1DireccionPropietarios])
            ->andFilterWhere(['like', 'att_p1TelefonoPropietarios.valor', $this->p1TelefonoPropietarios])
            ->andFilterWhere(['like', 'att_p1CorreoPropietarios.valor', $this->p1CorreoPropietarios])
            ->andFilterWhere(['like', 'att_p1Observaciones.valor', $this->p1Observaciones])
            ->andFilterWhere(['like', 'att_p1NombreGestor.valor', $this->p1NombreGestor])
            ->andFilterWhere(['like', 'att_p1DireccionGestor.valor', $this->p1DireccionGestor])
            ->andFilterWhere(['like', 'att_p1TelefonoGestor.valor', $this->p1TelefonoGestor])
            ->andFilterWhere(['like', 'att_p1CorreoGestor.valor', $this->p1CorreoGestor])
            ->andFilterWhere(['like', 'att_p2Constancia.valor', $this->p2Constancia])
            ->andFilterWhere(['like', 'att_p3Supervisor.valor', $this->p3Supervisor])
            ->andFilterWhere(['like', 'att_p3Observaciones.valor', $this->p3Observaciones])
            ->andFilterWhere(['like', 'att_p4Constancia.valor', $this->p4Constancia])
            ->andFilterWhere(['like', 'att_p5TituloPropiedad.valor', $this->p5TituloPropiedad])
            ->andFilterWhere(['like', 'att_p5PlanoLocalizacion.valor', $this->p5PlanoLocalizacion])
            ->andFilterWhere(['like', 'att_p5PlanoTopogra.valor', $this->p5PlanoTopogra])
            ->andFilterWhere(['like', 'att_p5AnteproyectoLotificacionVialidad.valor', $this->p5AnteproyectoLotificacionVialidad])
            ->andFilterWhere(['like', 'att_p6TituloPropiedad.valor', $this->p6TituloPropiedad])
            ->andFilterWhere(['like', 'att_p6PlanoLocalizacion.valor', $this->p6PlanoLocalizacion])
            ->andFilterWhere(['like', 'att_p6PlanoTopogra.valor', $this->p6PlanoTopogra])
            ->andFilterWhere(['like', 'att_p6PlanoLotificacionVialidad.valor', $this->p6PlanoLotificacionVialidad])
            ->andFilterWhere(['like', 'att_p7Aprobacion.valor', $this->p7Aprobacion])
            ->andFilterWhere(['like', 'att_p8Solicitud.valor', $this->p8Solicitud])
            ->andFilterWhere(['like', 'att_p8AcrediteCaracter.valor', $this->p8AcrediteCaracter])
            ->andFilterWhere(['like', 'att_p8ActaConstitutiva.valor', $this->p8ActaConstitutiva])
            ->andFilterWhere(['like', 'att_p8LibertadGravamen.valor', $this->p8LibertadGravamen])
            ->andFilterWhere(['like', 'att_p8Minuta.valor', $this->p8Minuta])
            ->andFilterWhere(['like', 'att_p8PlanoNomenclatura.valor', $this->p8PlanoNomenclatura])
            ->andFilterWhere(['like', 'att_p8FactibilidadJapac.valor', $this->p8FactibilidadJapac])
            ->andFilterWhere(['like', 'att_p8FactibilidadCFE.valor', $this->p8FactibilidadCFE])
            ->andFilterWhere(['like', 'att_p8EstudiosHidrologico.valor', $this->p8EstudiosHidrologico])
            ->andFilterWhere(['like', 'att_p8Alumbrado.valor', $this->p8Alumbrado])
            ->andFilterWhere(['like', 'att_p8ProteccionCivil.valor', $this->p8ProteccionCivil])
            ->andFilterWhere(['like', 'att_p8Vialidad.valor', $this->p8Vialidad])
            ->andFilterWhere(['like', 'att_p9Solicitud.valor', $this->p9Solicitud])
            ->andFilterWhere(['like', 'att_p9AcrediteCaracter.valor', $this->p9AcrediteCaracter])
            ->andFilterWhere(['like', 'att_p9ActaConstitutiva.valor', $this->p9ActaConstitutiva])
            ->andFilterWhere(['like', 'att_p9LibertadGravamen.valor', $this->p9LibertadGravamen])
            ->andFilterWhere(['like', 'att_p9Minuta.valor', $this->p9Minuta])
            ->andFilterWhere(['like', 'att_p9PlanoNomenclatura.valor', $this->p9PlanoNomenclatura])
            ->andFilterWhere(['like', 'att_p9FactibilidadJapac.valor', $this->p9FactibilidadJapac])
            ->andFilterWhere(['like', 'att_p9FactibilidadCFE.valor', $this->p9FactibilidadCFE])
            ->andFilterWhere(['like', 'att_p9EstudiosHidrologico.valor', $this->p9EstudiosHidrologico])
            ->andFilterWhere(['like', 'att_p9Alumbrado.valor', $this->p9Alumbrado])
            ->andFilterWhere(['like', 'att_p9ProteccionCivil.valor', $this->p9ProteccionCivil])
            ->andFilterWhere(['like', 'att_p9Vialidad.valor', $this->p9Vialidad])
            ->andFilterWhere(['like', 'att_p10Autorizacion.valor', $this->p10Autorizacion])
            ->andFilterWhere(['like', 'att_p3Expediente.valor', $this->p3Expediente])
            ->andFilterWhere(['like', 'att_p6Comentario.valor', $this->p6Comentario])
            ->andFilterWhere(['like', 'att_p7PlanoLotificacionVialidad.valor', $this->p7PlanoLotificacionVialidad])
            ->andFilterWhere(['like', 'att_P11MemoriaFraccionamiento.valor', $this->P11MemoriaFraccionamiento])
            ->andFilterWhere(['like', 'att_p11EstudioMecanicaEstructura.valor', $this->p11EstudioMecanicaEstructura])
            ->andFilterWhere(['like', 'att_p11MemoriaAguaAlcantarillado.valor', $this->p11MemoriaAguaAlcantarillado])
            ->andFilterWhere(['like', 'att_p11MemoriaElectrificacion.valor', $this->p11MemoriaElectrificacion])
            ->andFilterWhere(['like', 'att_p11MemoriaInfraestructura.valor', $this->p11MemoriaInfraestructura])
            ->andFilterWhere(['like', 'att_p11MemoriaHidrologico.valor', $this->p11MemoriaHidrologico])
            ->andFilterWhere(['like', 'att_p11Presupuesto.valor', $this->p11Presupuesto])
            ->andFilterWhere(['like', 'att_p11EstimarPlazo.valor', $this->p11EstimarPlazo])
            ->andFilterWhere(['like', 'att_p11PagoSupervision.valor', $this->p11PagoSupervision])
            ->andFilterWhere(['like', 'att_p11GarantiaCumplimiento.valor', $this->p11GarantiaCumplimiento])
            ->andFilterWhere(['like', 'att_p11OtorgarEscrituras.valor', $this->p11OtorgarEscrituras])
            ->andFilterWhere(['like', 'att_p11PlanoLocalizacion.valor', $this->p11PlanoLocalizacion])
            ->andFilterWhere(['like', 'att_p11PlanoTopografico.valor', $this->p11PlanoTopografico])
            ->andFilterWhere(['like', 'att_p11PlanoLotificacion.valor', $this->p11PlanoLotificacion])
            ->andFilterWhere(['like', 'att_p11PlanoTrazo.valor', $this->p11PlanoTrazo])
            ->andFilterWhere(['like', 'att_p11PlanoPerfiles.valor', $this->p11PlanoPerfiles])
            ->andFilterWhere(['like', 'att_p11PlanoAguaPotable.valor', $this->p11PlanoAguaPotable])
            ->andFilterWhere(['like', 'att_p11PlanoElectrificacion.valor', $this->p11PlanoElectrificacion])
            ->andFilterWhere(['like', 'att_p11PlanoAlumbrado.valor', $this->p11PlanoAlumbrado])
            ->andFilterWhere(['like', 'att_p11PlanoArborizacion.valor', $this->p11PlanoArborizacion])
            ->andFilterWhere(['like', 'att_p11ResolucionImpactoAmbiental.valor', $this->p11ResolucionImpactoAmbiental])
            ->andFilterWhere(['like', 'att_p11ProyectoVialTransporte.valor', $this->p11ProyectoVialTransporte])
            ->andFilterWhere(['like', 'att_P12MemoriaFraccionamiento.valor', $this->P12MemoriaFraccionamiento])
            ->andFilterWhere(['like', 'att_p12EstudioMecanicaEstructura.valor', $this->p12EstudioMecanicaEstructura])
            ->andFilterWhere(['like', 'att_p12MemoriaAguaAlcantarillado.valor', $this->p12MemoriaAguaAlcantarillado])
            ->andFilterWhere(['like', 'att_p12MemoriaElectrificacion.valor', $this->p12MemoriaElectrificacion])
            ->andFilterWhere(['like', 'att_p12MemoriaInfraestructura.valor', $this->p12MemoriaInfraestructura])
            ->andFilterWhere(['like', 'att_p12MemoriaHidrologico.valor', $this->p12MemoriaHidrologico])
            ->andFilterWhere(['like', 'att_p12Presupuesto.valor', $this->p12Presupuesto])
            ->andFilterWhere(['like', 'att_p12EstimarPlazo.valor', $this->p12EstimarPlazo])
            ->andFilterWhere(['like', 'att_p12PagoSupervision.valor', $this->p12PagoSupervision])
            ->andFilterWhere(['like', 'att_p12GarantiaCumplimiento.valor', $this->p12GarantiaCumplimiento])
            ->andFilterWhere(['like', 'att_p12OtorgarEscrituras.valor', $this->p12OtorgarEscrituras])
            ->andFilterWhere(['like', 'att_p12PlanoLocalizacion.valor', $this->p12PlanoLocalizacion])
            ->andFilterWhere(['like', 'att_p12PlanoTopografico.valor', $this->p12PlanoTopografico])
            ->andFilterWhere(['like', 'att_p12PlanoLotificacion.valor', $this->p12PlanoLotificacion])
            ->andFilterWhere(['like', 'att_p12PlanoTrazo.valor', $this->p12PlanoTrazo])
            ->andFilterWhere(['like', 'att_p12PlanoPerfiles.valor', $this->p12PlanoPerfiles])
            ->andFilterWhere(['like', 'att_p12PlanoAguaPotable.valor', $this->p12PlanoAguaPotable])
            ->andFilterWhere(['like', 'att_p12PlanoElectrificacion.valor', $this->p12PlanoElectrificacion])
            ->andFilterWhere(['like', 'att_p12PlanoAlumbrado.valor', $this->p12PlanoAlumbrado])
            ->andFilterWhere(['like', 'att_p12PlanoArborizacion.valor', $this->p12PlanoArborizacion])
            ->andFilterWhere(['like', 'att_p12ResolucionImpactoAmbiental.valor', $this->p12ResolucionImpactoAmbiental])
            ->andFilterWhere(['like', 'att_p12ProyectoVialTransporte.valor', $this->p12ProyectoVialTransporte])
            ->andFilterWhere(['like', 'att_p9Notas.valor', $this->p9Notas])
            ->andFilterWhere(['like', 'att_p9Secretaria.valor', $this->p9Secretaria])
            ->andFilterWhere(['like', 'att_p10MandarProyecto.valor', $this->p10MandarProyecto])
            ->andFilterWhere(['like', 'att_p7SuperficieGeneral.valor', $this->p7SuperficieGeneral])
            ->andFilterWhere(['like', 'att_p7Vivienda.valor', $this->p7Vivienda])
            ->andFilterWhere(['like', 'att_p7Comercial.valor', $this->p7Comercial])
            ->andFilterWhere(['like', 'att_p7Donacion.valor', $this->p7Donacion])
            ->andFilterWhere(['like', 'att_p7AreasVerdes.valor', $this->p7AreasVerdes])
            ->andFilterWhere(['like', 'att_p7Vialidad.valor', $this->p7Vialidad])
            ->andFilterWhere(['like', 'att_p7Reserva.valor', $this->p7Reserva])
            ->andFilterWhere(['like', 'att_p7Otro.valor', $this->p7Otro])
            ->andFilterWhere(['like', 'att_p7NumLotes.valor', $this->p7NumLotes])
            ->andFilterWhere(['like', 'att_p7DensidadVivienda.valor', $this->p7DensidadVivienda])
            ->andFilterWhere(['like', 'att_p7DonacionRequerida.valor', $this->p7DonacionRequerida]);

        return $dataProvider;
    }
}
