<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TramitesRecepcion;

/**
 * TramitesRecepcionSearch represents the model behind the search form about `app\models\TramitesRecepcion`.
 */
class TramitesRecepcionSearch extends TramitesRecepcion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId', 'estatusId'], 'integer'],
            [['fechaCreacion', 'fechaModificacion', 'observaciones', 'p1NombreSolicitante', 'p1DireccionSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescripcionProceso', 'p1NoCajones', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1ClaveCatastralPredio', 'p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1Observaciones', 'p1NombreGestor', 'p1DireccionGestor', 'p1TelefonoGestor', 'p1CorreoGestor', 'p2Supervisor', 'p2Observaciones', 'p5SolicitudPresidenteMuni', 'p3CertificadoCabildo', 'p5PlanoLotificacion', 'p5RecepcionJapac', 'p3ActaRecepcion', 'p3MemoriaTecno', 'p3PlanoAgua', 'p3PlanoAlcantarillado', 'p5RecepcionCfe', 'p3ActaRecepcionCfe', 'p3CartaCompromiso', 'p3MemoriaTecnoCfe', 'p3PlanoCfe', 'p5RecepcionAlumbrado', 'p3OficioRecepcion', 'p3MemoriaTecnoAlumbrado', 'p3PlanoAlumbrado', 'p5RecepcionCivil', 'p3ActaTecnica', 'p3MemoriaTecnoCivil', 'p5PlanoObras', 'p3Donaciones', 'p3EscriturasPublica', 'p5PlanoPoligono', 'p6SolicitudPresidenteMuni', 'p6CertificadoCabildo', 'p6PlanoLotificacion', 'p6RecepcionJapac', 'p6ActaTecnica', 'p6MemoriaTecno', 'p6PlanoAgua', 'p6PlanoAlcantarillado', 'p6RecepcionCfe', 'p6ActaRecepcion', 'p6CartaCompromiso', 'p6MemoriaTecnoCfe', 'p6PlanoCfe', 'p6RecepcionAlumbrado', 'p6OficioRecepcion', 'p6MemoriaTecnoAlumbrado', 'p6PlanoAlumbrado', 'p6RecepcionCivil', 'p6ActaTecnicaObras', 'p6MemoriaTecnoCivil', 'p6PlanoObras', 'p6Donaciones', 'p6EscriturasPublica', 'p6PlanoPoligono', 'p7Recepcion', 'p2Expediente', 'p6Expediente'], 'safe'],
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
        $query = TramitesRecepcion::find();

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
                            'att_p1NombreSolicitante.tramiteId=Tramites.id and att_p1NombreSolicitante.atributoId=1498');
        $query -> leftJoin('valoresTramite att_p1DireccionSolicitante', 
                            'att_p1DireccionSolicitante.tramiteId=Tramites.id and att_p1DireccionSolicitante.atributoId=1499');
        $query -> leftJoin('valoresTramite att_p1TelefonoSolicitante', 
                            'att_p1TelefonoSolicitante.tramiteId=Tramites.id and att_p1TelefonoSolicitante.atributoId=1500');
        $query -> leftJoin('valoresTramite att_p1CorreoSolicitante', 
                            'att_p1CorreoSolicitante.tramiteId=Tramites.id and att_p1CorreoSolicitante.atributoId=1501');
        $query -> leftJoin('valoresTramite att_p1UsoActual', 
                            'att_p1UsoActual.tramiteId=Tramites.id and att_p1UsoActual.atributoId=1502');
        $query -> leftJoin('valoresTramite att_p1UsoSolicitado', 
                            'att_p1UsoSolicitado.tramiteId=Tramites.id and att_p1UsoSolicitado.atributoId=1503');
        $query -> leftJoin('valoresTramite att_p1DescripcionProceso', 
                            'att_p1DescripcionProceso.tramiteId=Tramites.id and att_p1DescripcionProceso.atributoId=1504');
        $query -> leftJoin('valoresTramite att_p1NoCajones', 
                            'att_p1NoCajones.tramiteId=Tramites.id and att_p1NoCajones.atributoId=1505');
        $query -> leftJoin('valoresTramite att_p1CallePredio', 
                            'att_p1CallePredio.tramiteId=Tramites.id and att_p1CallePredio.atributoId=1506');
        $query -> leftJoin('valoresTramite att_p1ColoniaPredio', 
                            'att_p1ColoniaPredio.tramiteId=Tramites.id and att_p1ColoniaPredio.atributoId=1507');
        $query -> leftJoin('valoresTramite att_p1NumeroOficial', 
                            'att_p1NumeroOficial.tramiteId=Tramites.id and att_p1NumeroOficial.atributoId=1508');
        $query -> leftJoin('valoresTramite att_p1NumeroInterio', 
                            'att_p1NumeroInterio.tramiteId=Tramites.id and att_p1NumeroInterio.atributoId=1509');
        $query -> leftJoin('valoresTramite att_p1PobladoPredio', 
                            'att_p1PobladoPredio.tramiteId=Tramites.id and att_p1PobladoPredio.atributoId=1510');
        $query -> leftJoin('valoresTramite att_p1SindicaturaPredio', 
                            'att_p1SindicaturaPredio.tramiteId=Tramites.id and att_p1SindicaturaPredio.atributoId=1511');
        $query -> leftJoin('valoresTramite att_p1ClaveCatastralPredio', 
                            'att_p1ClaveCatastralPredio.tramiteId=Tramites.id and att_p1ClaveCatastralPredio.atributoId=1512');
        $query -> leftJoin('valoresTramite att_p1SuperficiePredio', 
                            'att_p1SuperficiePredio.tramiteId=Tramites.id and att_p1SuperficiePredio.atributoId=1513');
        $query -> leftJoin('valoresTramite att_p1NortePredio', 
                            'att_p1NortePredio.tramiteId=Tramites.id and att_p1NortePredio.atributoId=1514');
        $query -> leftJoin('valoresTramite att_p1SurPredio', 
                            'att_p1SurPredio.tramiteId=Tramites.id and att_p1SurPredio.atributoId=1515');
        $query -> leftJoin('valoresTramite att_p1OrientePredio', 
                            'att_p1OrientePredio.tramiteId=Tramites.id and att_p1OrientePredio.atributoId=1516');
        $query -> leftJoin('valoresTramite att_p1PonientePredio', 
                            'att_p1PonientePredio.tramiteId=Tramites.id and att_p1PonientePredio.atributoId=1517');
        $query -> leftJoin('valoresTramite att_p1NombrePropietarios', 
                            'att_p1NombrePropietarios.tramiteId=Tramites.id and att_p1NombrePropietarios.atributoId=1518');
        $query -> leftJoin('valoresTramite att_p1DireccionPropietarios', 
                            'att_p1DireccionPropietarios.tramiteId=Tramites.id and att_p1DireccionPropietarios.atributoId=1519');
        $query -> leftJoin('valoresTramite att_p1TelefonoPropietarios', 
                            'att_p1TelefonoPropietarios.tramiteId=Tramites.id and att_p1TelefonoPropietarios.atributoId=1520');
        $query -> leftJoin('valoresTramite att_p1CorreoPropietarios', 
                            'att_p1CorreoPropietarios.tramiteId=Tramites.id and att_p1CorreoPropietarios.atributoId=1521');
        $query -> leftJoin('valoresTramite att_p1PlantaBajaConstruida', 
                            'att_p1PlantaBajaConstruida.tramiteId=Tramites.id and att_p1PlantaBajaConstruida.atributoId=1522');
        $query -> leftJoin('valoresTramite att_p1PlantaAltaConstruida', 
                            'att_p1PlantaAltaConstruida.tramiteId=Tramites.id and att_p1PlantaAltaConstruida.atributoId=1523');
        $query -> leftJoin('valoresTramite att_p1SegundoNivelConstruida', 
                            'att_p1SegundoNivelConstruida.tramiteId=Tramites.id and att_p1SegundoNivelConstruida.atributoId=1524');
        $query -> leftJoin('valoresTramite att_p1OtrosConstruida', 
                            'att_p1OtrosConstruida.tramiteId=Tramites.id and att_p1OtrosConstruida.atributoId=1525');
        $query -> leftJoin('valoresTramite att_p1TotalConstruida', 
                            'att_p1TotalConstruida.tramiteId=Tramites.id and att_p1TotalConstruida.atributoId=1526');
        $query -> leftJoin('valoresTramite att_p1PlantaBajaXConstruir', 
                            'att_p1PlantaBajaXConstruir.tramiteId=Tramites.id and att_p1PlantaBajaXConstruir.atributoId=1527');
        $query -> leftJoin('valoresTramite att_p1PlantaAltaXConstruir', 
                            'att_p1PlantaAltaXConstruir.tramiteId=Tramites.id and att_p1PlantaAltaXConstruir.atributoId=1528');
        $query -> leftJoin('valoresTramite att_p1SegundoNivelXConstruir', 
                            'att_p1SegundoNivelXConstruir.tramiteId=Tramites.id and att_p1SegundoNivelXConstruir.atributoId=1529');
        $query -> leftJoin('valoresTramite att_p1OtrosXConstruir', 
                            'att_p1OtrosXConstruir.tramiteId=Tramites.id and att_p1OtrosXConstruir.atributoId=1530');
        $query -> leftJoin('valoresTramite att_p1TotalXConstruir', 
                            'att_p1TotalXConstruir.tramiteId=Tramites.id and att_p1TotalXConstruir.atributoId=1531');
        $query -> leftJoin('valoresTramite att_p1Observaciones', 
                            'att_p1Observaciones.tramiteId=Tramites.id and att_p1Observaciones.atributoId=1532');
        $query -> leftJoin('valoresTramite att_p1NombreGestor', 
                            'att_p1NombreGestor.tramiteId=Tramites.id and att_p1NombreGestor.atributoId=1533');
        $query -> leftJoin('valoresTramite att_p1DireccionGestor', 
                            'att_p1DireccionGestor.tramiteId=Tramites.id and att_p1DireccionGestor.atributoId=1534');
        $query -> leftJoin('valoresTramite att_p1TelefonoGestor', 
                            'att_p1TelefonoGestor.tramiteId=Tramites.id and att_p1TelefonoGestor.atributoId=1535');
        $query -> leftJoin('valoresTramite att_p1CorreoGestor', 
                            'att_p1CorreoGestor.tramiteId=Tramites.id and att_p1CorreoGestor.atributoId=1536');
        $query -> leftJoin('valoresTramite att_p2Supervisor', 
                            'att_p2Supervisor.tramiteId=Tramites.id and att_p2Supervisor.atributoId=1538');
        $query -> leftJoin('valoresTramite att_p2Observaciones', 
                            'att_p2Observaciones.tramiteId=Tramites.id and att_p2Observaciones.atributoId=1539');
        $query -> leftJoin('valoresTramite att_p5SolicitudPresidenteMuni', 
                            'att_p5SolicitudPresidenteMuni.tramiteId=Tramites.id and att_p5SolicitudPresidenteMuni.atributoId=1541');
        $query -> leftJoin('valoresTramite att_p3CertificadoCabildo', 
                            'att_p3CertificadoCabildo.tramiteId=Tramites.id and att_p3CertificadoCabildo.atributoId=1542');
        $query -> leftJoin('valoresTramite att_p5PlanoLotificacion', 
                            'att_p5PlanoLotificacion.tramiteId=Tramites.id and att_p5PlanoLotificacion.atributoId=1543');
        $query -> leftJoin('valoresTramite att_p5RecepcionJapac', 
                            'att_p5RecepcionJapac.tramiteId=Tramites.id and att_p5RecepcionJapac.atributoId=1544');
        $query -> leftJoin('valoresTramite att_p3ActaRecepcion', 
                            'att_p3ActaRecepcion.tramiteId=Tramites.id and att_p3ActaRecepcion.atributoId=1545');
        $query -> leftJoin('valoresTramite att_p3MemoriaTecno', 
                            'att_p3MemoriaTecno.tramiteId=Tramites.id and att_p3MemoriaTecno.atributoId=1546');
        $query -> leftJoin('valoresTramite att_p3PlanoAgua', 
                            'att_p3PlanoAgua.tramiteId=Tramites.id and att_p3PlanoAgua.atributoId=1547');
        $query -> leftJoin('valoresTramite att_p3PlanoAlcantarillado', 
                            'att_p3PlanoAlcantarillado.tramiteId=Tramites.id and att_p3PlanoAlcantarillado.atributoId=1548');
        $query -> leftJoin('valoresTramite att_p5RecepcionCfe', 
                            'att_p5RecepcionCfe.tramiteId=Tramites.id and att_p5RecepcionCfe.atributoId=1549');
        $query -> leftJoin('valoresTramite att_p3ActaRecepcionCfe', 
                            'att_p3ActaRecepcionCfe.tramiteId=Tramites.id and att_p3ActaRecepcionCfe.atributoId=1550');
        $query -> leftJoin('valoresTramite att_p3CartaCompromiso', 
                            'att_p3CartaCompromiso.tramiteId=Tramites.id and att_p3CartaCompromiso.atributoId=1551');
        $query -> leftJoin('valoresTramite att_p3MemoriaTecnoCfe', 
                            'att_p3MemoriaTecnoCfe.tramiteId=Tramites.id and att_p3MemoriaTecnoCfe.atributoId=1552');
        $query -> leftJoin('valoresTramite att_p3PlanoCfe', 
                            'att_p3PlanoCfe.tramiteId=Tramites.id and att_p3PlanoCfe.atributoId=1553');
        $query -> leftJoin('valoresTramite att_p5RecepcionAlumbrado', 
                            'att_p5RecepcionAlumbrado.tramiteId=Tramites.id and att_p5RecepcionAlumbrado.atributoId=1554');
        $query -> leftJoin('valoresTramite att_p3OficioRecepcion', 
                            'att_p3OficioRecepcion.tramiteId=Tramites.id and att_p3OficioRecepcion.atributoId=1555');
        $query -> leftJoin('valoresTramite att_p3MemoriaTecnoAlumbrado', 
                            'att_p3MemoriaTecnoAlumbrado.tramiteId=Tramites.id and att_p3MemoriaTecnoAlumbrado.atributoId=1556');
        $query -> leftJoin('valoresTramite att_p3PlanoAlumbrado', 
                            'att_p3PlanoAlumbrado.tramiteId=Tramites.id and att_p3PlanoAlumbrado.atributoId=1557');
        $query -> leftJoin('valoresTramite att_p5RecepcionCivil', 
                            'att_p5RecepcionCivil.tramiteId=Tramites.id and att_p5RecepcionCivil.atributoId=1558');
        $query -> leftJoin('valoresTramite att_p3ActaTecnica', 
                            'att_p3ActaTecnica.tramiteId=Tramites.id and att_p3ActaTecnica.atributoId=1559');
        $query -> leftJoin('valoresTramite att_p3MemoriaTecnoCivil', 
                            'att_p3MemoriaTecnoCivil.tramiteId=Tramites.id and att_p3MemoriaTecnoCivil.atributoId=1560');
        $query -> leftJoin('valoresTramite att_p5PlanoObras', 
                            'att_p5PlanoObras.tramiteId=Tramites.id and att_p5PlanoObras.atributoId=1561');
        $query -> leftJoin('valoresTramite att_p3Donaciones', 
                            'att_p3Donaciones.tramiteId=Tramites.id and att_p3Donaciones.atributoId=1562');
        $query -> leftJoin('valoresTramite att_p3EscriturasPublica', 
                            'att_p3EscriturasPublica.tramiteId=Tramites.id and att_p3EscriturasPublica.atributoId=1563');
        $query -> leftJoin('valoresTramite att_p5PlanoPoligono', 
                            'att_p5PlanoPoligono.tramiteId=Tramites.id and att_p5PlanoPoligono.atributoId=1564');
        $query -> leftJoin('valoresTramite att_p6SolicitudPresidenteMuni', 
                            'att_p6SolicitudPresidenteMuni.tramiteId=Tramites.id and att_p6SolicitudPresidenteMuni.atributoId=1565');
        $query -> leftJoin('valoresTramite att_p6CertificadoCabildo', 
                            'att_p6CertificadoCabildo.tramiteId=Tramites.id and att_p6CertificadoCabildo.atributoId=1566');
        $query -> leftJoin('valoresTramite att_p6PlanoLotificacion', 
                            'att_p6PlanoLotificacion.tramiteId=Tramites.id and att_p6PlanoLotificacion.atributoId=1567');
        $query -> leftJoin('valoresTramite att_p6RecepcionJapac', 
                            'att_p6RecepcionJapac.tramiteId=Tramites.id and att_p6RecepcionJapac.atributoId=1568');
        $query -> leftJoin('valoresTramite att_p6ActaTecnica', 
                            'att_p6ActaTecnica.tramiteId=Tramites.id and att_p6ActaTecnica.atributoId=1569');
        $query -> leftJoin('valoresTramite att_p6MemoriaTecno', 
                            'att_p6MemoriaTecno.tramiteId=Tramites.id and att_p6MemoriaTecno.atributoId=1570');
        $query -> leftJoin('valoresTramite att_p6PlanoAgua', 
                            'att_p6PlanoAgua.tramiteId=Tramites.id and att_p6PlanoAgua.atributoId=1571');
        $query -> leftJoin('valoresTramite att_p6PlanoAlcantarillado', 
                            'att_p6PlanoAlcantarillado.tramiteId=Tramites.id and att_p6PlanoAlcantarillado.atributoId=1572');
        $query -> leftJoin('valoresTramite att_p6RecepcionCfe', 
                            'att_p6RecepcionCfe.tramiteId=Tramites.id and att_p6RecepcionCfe.atributoId=1573');
        $query -> leftJoin('valoresTramite att_p6ActaRecepcion', 
                            'att_p6ActaRecepcion.tramiteId=Tramites.id and att_p6ActaRecepcion.atributoId=1574');
        $query -> leftJoin('valoresTramite att_p6CartaCompromiso', 
                            'att_p6CartaCompromiso.tramiteId=Tramites.id and att_p6CartaCompromiso.atributoId=1575');
        $query -> leftJoin('valoresTramite att_p6MemoriaTecnoCfe', 
                            'att_p6MemoriaTecnoCfe.tramiteId=Tramites.id and att_p6MemoriaTecnoCfe.atributoId=1576');
        $query -> leftJoin('valoresTramite att_p6PlanoCfe', 
                            'att_p6PlanoCfe.tramiteId=Tramites.id and att_p6PlanoCfe.atributoId=1577');
        $query -> leftJoin('valoresTramite att_p6RecepcionAlumbrado', 
                            'att_p6RecepcionAlumbrado.tramiteId=Tramites.id and att_p6RecepcionAlumbrado.atributoId=1578');
        $query -> leftJoin('valoresTramite att_p6OficioRecepcion', 
                            'att_p6OficioRecepcion.tramiteId=Tramites.id and att_p6OficioRecepcion.atributoId=1579');
        $query -> leftJoin('valoresTramite att_p6MemoriaTecnoAlumbrado', 
                            'att_p6MemoriaTecnoAlumbrado.tramiteId=Tramites.id and att_p6MemoriaTecnoAlumbrado.atributoId=1580');
        $query -> leftJoin('valoresTramite att_p6PlanoAlumbrado', 
                            'att_p6PlanoAlumbrado.tramiteId=Tramites.id and att_p6PlanoAlumbrado.atributoId=1581');
        $query -> leftJoin('valoresTramite att_p6RecepcionCivil', 
                            'att_p6RecepcionCivil.tramiteId=Tramites.id and att_p6RecepcionCivil.atributoId=1582');
        $query -> leftJoin('valoresTramite att_p6ActaTecnicaObras', 
                            'att_p6ActaTecnicaObras.tramiteId=Tramites.id and att_p6ActaTecnicaObras.atributoId=1583');
        $query -> leftJoin('valoresTramite att_p6MemoriaTecnoCivil', 
                            'att_p6MemoriaTecnoCivil.tramiteId=Tramites.id and att_p6MemoriaTecnoCivil.atributoId=1584');
        $query -> leftJoin('valoresTramite att_p6PlanoObras', 
                            'att_p6PlanoObras.tramiteId=Tramites.id and att_p6PlanoObras.atributoId=1585');
        $query -> leftJoin('valoresTramite att_p6Donaciones', 
                            'att_p6Donaciones.tramiteId=Tramites.id and att_p6Donaciones.atributoId=1586');
        $query -> leftJoin('valoresTramite att_p6EscriturasPublica', 
                            'att_p6EscriturasPublica.tramiteId=Tramites.id and att_p6EscriturasPublica.atributoId=1587');
        $query -> leftJoin('valoresTramite att_p6PlanoPoligono', 
                            'att_p6PlanoPoligono.tramiteId=Tramites.id and att_p6PlanoPoligono.atributoId=1588');
        $query -> leftJoin('valoresTramite att_p7Recepcion', 
                            'att_p7Recepcion.tramiteId=Tramites.id and att_p7Recepcion.atributoId=1589');
        $query -> leftJoin('valoresTramite att_p1NorOrientePredio', 
                            'att_p1NorOrientePredio.tramiteId=Tramites.id and att_p1NorOrientePredio.atributoId=3488');
        $query -> leftJoin('valoresTramite att_p1SurOrientePredio', 
                            'att_p1SurOrientePredio.tramiteId=Tramites.id and att_p1SurOrientePredio.atributoId=3489');
        $query -> leftJoin('valoresTramite att_p1NorPonientePredio', 
                            'att_p1NorPonientePredio.tramiteId=Tramites.id and att_p1NorPonientePredio.atributoId=3490');
        $query -> leftJoin('valoresTramite att_p1SurPonientePredio', 
                            'att_p1SurPonientePredio.tramiteId=Tramites.id and att_p1SurPonientePredio.atributoId=3491');
        $query -> leftJoin('valoresTramite att_p2Expediente', 
                            'att_p2Expediente.tramiteId=Tramites.id and att_p2Expediente.atributoId=3496');
        $query -> leftJoin('valoresTramite att_p6Expediente', 
                            'att_p6Expediente.tramiteId=Tramites.id and att_p6Expediente.atributoId=3498');
        
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
            ->andFilterWhere(['like', 'att_p2Supervisor.valor', $this->p2Supervisor])
            ->andFilterWhere(['like', 'att_p2Observaciones.valor', $this->p2Observaciones])
            ->andFilterWhere(['like', 'att_p5SolicitudPresidenteMuni.valor', $this->p5SolicitudPresidenteMuni])
            ->andFilterWhere(['like', 'att_p3CertificadoCabildo.valor', $this->p3CertificadoCabildo])
            ->andFilterWhere(['like', 'att_p5PlanoLotificacion.valor', $this->p5PlanoLotificacion])
            ->andFilterWhere(['like', 'att_p5RecepcionJapac.valor', $this->p5RecepcionJapac])
            ->andFilterWhere(['like', 'att_p3ActaRecepcion.valor', $this->p3ActaRecepcion])
            ->andFilterWhere(['like', 'att_p3MemoriaTecno.valor', $this->p3MemoriaTecno])
            ->andFilterWhere(['like', 'att_p3PlanoAgua.valor', $this->p3PlanoAgua])
            ->andFilterWhere(['like', 'att_p3PlanoAlcantarillado.valor', $this->p3PlanoAlcantarillado])
            ->andFilterWhere(['like', 'att_p5RecepcionCfe.valor', $this->p5RecepcionCfe])
            ->andFilterWhere(['like', 'att_p3ActaRecepcionCfe.valor', $this->p3ActaRecepcionCfe])
            ->andFilterWhere(['like', 'att_p3CartaCompromiso.valor', $this->p3CartaCompromiso])
            ->andFilterWhere(['like', 'att_p3MemoriaTecnoCfe.valor', $this->p3MemoriaTecnoCfe])
            ->andFilterWhere(['like', 'att_p3PlanoCfe.valor', $this->p3PlanoCfe])
            ->andFilterWhere(['like', 'att_p5RecepcionAlumbrado.valor', $this->p5RecepcionAlumbrado])
            ->andFilterWhere(['like', 'att_p3OficioRecepcion.valor', $this->p3OficioRecepcion])
            ->andFilterWhere(['like', 'att_p3MemoriaTecnoAlumbrado.valor', $this->p3MemoriaTecnoAlumbrado])
            ->andFilterWhere(['like', 'att_p3PlanoAlumbrado.valor', $this->p3PlanoAlumbrado])
            ->andFilterWhere(['like', 'att_p5RecepcionCivil.valor', $this->p5RecepcionCivil])
            ->andFilterWhere(['like', 'att_p3ActaTecnica.valor', $this->p3ActaTecnica])
            ->andFilterWhere(['like', 'att_p3MemoriaTecnoCivil.valor', $this->p3MemoriaTecnoCivil])
            ->andFilterWhere(['like', 'att_p5PlanoObras.valor', $this->p5PlanoObras])
            ->andFilterWhere(['like', 'att_p3Donaciones.valor', $this->p3Donaciones])
            ->andFilterWhere(['like', 'att_p3EscriturasPublica.valor', $this->p3EscriturasPublica])
            ->andFilterWhere(['like', 'att_p5PlanoPoligono.valor', $this->p5PlanoPoligono])
            ->andFilterWhere(['like', 'att_p6SolicitudPresidenteMuni.valor', $this->p6SolicitudPresidenteMuni])
            ->andFilterWhere(['like', 'att_p6CertificadoCabildo.valor', $this->p6CertificadoCabildo])
            ->andFilterWhere(['like', 'att_p6PlanoLotificacion.valor', $this->p6PlanoLotificacion])
            ->andFilterWhere(['like', 'att_p6RecepcionJapac.valor', $this->p6RecepcionJapac])
            ->andFilterWhere(['like', 'att_p6ActaTecnica.valor', $this->p6ActaTecnica])
            ->andFilterWhere(['like', 'att_p6MemoriaTecno.valor', $this->p6MemoriaTecno])
            ->andFilterWhere(['like', 'att_p6PlanoAgua.valor', $this->p6PlanoAgua])
            ->andFilterWhere(['like', 'att_p6PlanoAlcantarillado.valor', $this->p6PlanoAlcantarillado])
            ->andFilterWhere(['like', 'att_p6RecepcionCfe.valor', $this->p6RecepcionCfe])
            ->andFilterWhere(['like', 'att_p6ActaRecepcion.valor', $this->p6ActaRecepcion])
            ->andFilterWhere(['like', 'att_p6CartaCompromiso.valor', $this->p6CartaCompromiso])
            ->andFilterWhere(['like', 'att_p6MemoriaTecnoCfe.valor', $this->p6MemoriaTecnoCfe])
            ->andFilterWhere(['like', 'att_p6PlanoCfe.valor', $this->p6PlanoCfe])
            ->andFilterWhere(['like', 'att_p6RecepcionAlumbrado.valor', $this->p6RecepcionAlumbrado])
            ->andFilterWhere(['like', 'att_p6OficioRecepcion.valor', $this->p6OficioRecepcion])
            ->andFilterWhere(['like', 'att_p6MemoriaTecnoAlumbrado.valor', $this->p6MemoriaTecnoAlumbrado])
            ->andFilterWhere(['like', 'att_p6PlanoAlumbrado.valor', $this->p6PlanoAlumbrado])
            ->andFilterWhere(['like', 'att_p6RecepcionCivil.valor', $this->p6RecepcionCivil])
            ->andFilterWhere(['like', 'att_p6ActaTecnicaObras.valor', $this->p6ActaTecnicaObras])
            ->andFilterWhere(['like', 'att_p6MemoriaTecnoCivil.valor', $this->p6MemoriaTecnoCivil])
            ->andFilterWhere(['like', 'att_p6PlanoObras.valor', $this->p6PlanoObras])
            ->andFilterWhere(['like', 'att_p6Donaciones.valor', $this->p6Donaciones])
            ->andFilterWhere(['like', 'att_p6EscriturasPublica.valor', $this->p6EscriturasPublica])
            ->andFilterWhere(['like', 'att_p6PlanoPoligono.valor', $this->p6PlanoPoligono])
            ->andFilterWhere(['like', 'att_p7Recepcion.valor', $this->p7Recepcion])
            ->andFilterWhere(['like', 'att_p2Expediente.valor', $this->p2Expediente])
            ->andFilterWhere(['like', 'att_p6Expediente.valor', $this->p6Expediente]);

        return $dataProvider;
    }
}
