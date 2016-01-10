<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TramitesRelotificacionFracc;

/**
 * TramitesRelotificacionFraccSearch represents the model behind the search form about `app\models\TramitesRelotificacionFracc`.
 */
class TramitesRelotificacionFraccSearch extends TramitesRelotificacionFracc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId', 'estatusId'], 'integer'],
            [['fechaCreacion', 'fechaModificacion', 'observaciones', 'p1NombreSolicitante', 'p1DireccionSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescripcionProceso', 'p1NoCajones', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1ClaveCatastralPredio', 'p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1Observaciones', 'p1NombreGestor', 'p1DireccionGestor', 'p1TelefonoGestor', 'p1CorreoGestor', 'p2CertificacionCabildo', 'p2PlanoAprobado', 'p2PlanoPropuesta', 'p2Pago', 'p3CertificacionCabildo', 'p3PlanoAprobado', 'p3PlanoPropuesta', 'p3Pago', 'p4Supervision', 'p4Observaciones', 'p5Constancia'], 'safe'],
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
        $query = TramitesRelotificacionFracc::find();

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
                            'att_p1NombreSolicitante.tramiteId=Tramites.id and att_p1NombreSolicitante.atributoId=1590');
        $query -> leftJoin('valoresTramite att_p1DireccionSolicitante', 
                            'att_p1DireccionSolicitante.tramiteId=Tramites.id and att_p1DireccionSolicitante.atributoId=1591');
        $query -> leftJoin('valoresTramite att_p1TelefonoSolicitante', 
                            'att_p1TelefonoSolicitante.tramiteId=Tramites.id and att_p1TelefonoSolicitante.atributoId=1592');
        $query -> leftJoin('valoresTramite att_p1CorreoSolicitante', 
                            'att_p1CorreoSolicitante.tramiteId=Tramites.id and att_p1CorreoSolicitante.atributoId=1593');
        $query -> leftJoin('valoresTramite att_p1UsoActual', 
                            'att_p1UsoActual.tramiteId=Tramites.id and att_p1UsoActual.atributoId=1594');
        $query -> leftJoin('valoresTramite att_p1UsoSolicitado', 
                            'att_p1UsoSolicitado.tramiteId=Tramites.id and att_p1UsoSolicitado.atributoId=1595');
        $query -> leftJoin('valoresTramite att_p1DescripcionProceso', 
                            'att_p1DescripcionProceso.tramiteId=Tramites.id and att_p1DescripcionProceso.atributoId=1596');
        $query -> leftJoin('valoresTramite att_p1NoCajones', 
                            'att_p1NoCajones.tramiteId=Tramites.id and att_p1NoCajones.atributoId=1597');
        $query -> leftJoin('valoresTramite att_p1CallePredio', 
                            'att_p1CallePredio.tramiteId=Tramites.id and att_p1CallePredio.atributoId=1598');
        $query -> leftJoin('valoresTramite att_p1ColoniaPredio', 
                            'att_p1ColoniaPredio.tramiteId=Tramites.id and att_p1ColoniaPredio.atributoId=1599');
        $query -> leftJoin('valoresTramite att_p1NumeroOficial', 
                            'att_p1NumeroOficial.tramiteId=Tramites.id and att_p1NumeroOficial.atributoId=1600');
        $query -> leftJoin('valoresTramite att_p1NumeroInterio', 
                            'att_p1NumeroInterio.tramiteId=Tramites.id and att_p1NumeroInterio.atributoId=1601');
        $query -> leftJoin('valoresTramite att_p1PobladoPredio', 
                            'att_p1PobladoPredio.tramiteId=Tramites.id and att_p1PobladoPredio.atributoId=1602');
        $query -> leftJoin('valoresTramite att_p1SindicaturaPredio', 
                            'att_p1SindicaturaPredio.tramiteId=Tramites.id and att_p1SindicaturaPredio.atributoId=1603');
        $query -> leftJoin('valoresTramite att_p1ClaveCatastralPredio', 
                            'att_p1ClaveCatastralPredio.tramiteId=Tramites.id and att_p1ClaveCatastralPredio.atributoId=1604');
        $query -> leftJoin('valoresTramite att_p1SuperficiePredio', 
                            'att_p1SuperficiePredio.tramiteId=Tramites.id and att_p1SuperficiePredio.atributoId=1605');
        $query -> leftJoin('valoresTramite att_p1NortePredio', 
                            'att_p1NortePredio.tramiteId=Tramites.id and att_p1NortePredio.atributoId=1606');
        $query -> leftJoin('valoresTramite att_p1SurPredio', 
                            'att_p1SurPredio.tramiteId=Tramites.id and att_p1SurPredio.atributoId=1607');
        $query -> leftJoin('valoresTramite att_p1OrientePredio', 
                            'att_p1OrientePredio.tramiteId=Tramites.id and att_p1OrientePredio.atributoId=1608');
        $query -> leftJoin('valoresTramite att_p1PonientePredio', 
                            'att_p1PonientePredio.tramiteId=Tramites.id and att_p1PonientePredio.atributoId=1609');
        $query -> leftJoin('valoresTramite att_p1NombrePropietarios', 
                            'att_p1NombrePropietarios.tramiteId=Tramites.id and att_p1NombrePropietarios.atributoId=1610');
        $query -> leftJoin('valoresTramite att_p1DireccionPropietarios', 
                            'att_p1DireccionPropietarios.tramiteId=Tramites.id and att_p1DireccionPropietarios.atributoId=1611');
        $query -> leftJoin('valoresTramite att_p1TelefonoPropietarios', 
                            'att_p1TelefonoPropietarios.tramiteId=Tramites.id and att_p1TelefonoPropietarios.atributoId=1612');
        $query -> leftJoin('valoresTramite att_p1CorreoPropietarios', 
                            'att_p1CorreoPropietarios.tramiteId=Tramites.id and att_p1CorreoPropietarios.atributoId=1613');
        $query -> leftJoin('valoresTramite att_p1PlantaBajaConstruida', 
                            'att_p1PlantaBajaConstruida.tramiteId=Tramites.id and att_p1PlantaBajaConstruida.atributoId=1614');
        $query -> leftJoin('valoresTramite att_p1PlantaAltaConstruida', 
                            'att_p1PlantaAltaConstruida.tramiteId=Tramites.id and att_p1PlantaAltaConstruida.atributoId=1615');
        $query -> leftJoin('valoresTramite att_p1SegundoNivelConstruida', 
                            'att_p1SegundoNivelConstruida.tramiteId=Tramites.id and att_p1SegundoNivelConstruida.atributoId=1616');
        $query -> leftJoin('valoresTramite att_p1OtrosConstruida', 
                            'att_p1OtrosConstruida.tramiteId=Tramites.id and att_p1OtrosConstruida.atributoId=1617');
        $query -> leftJoin('valoresTramite att_p1TotalConstruida', 
                            'att_p1TotalConstruida.tramiteId=Tramites.id and att_p1TotalConstruida.atributoId=1618');
        $query -> leftJoin('valoresTramite att_p1PlantaBajaXConstruir', 
                            'att_p1PlantaBajaXConstruir.tramiteId=Tramites.id and att_p1PlantaBajaXConstruir.atributoId=1619');
        $query -> leftJoin('valoresTramite att_p1PlantaAltaXConstruir', 
                            'att_p1PlantaAltaXConstruir.tramiteId=Tramites.id and att_p1PlantaAltaXConstruir.atributoId=1620');
        $query -> leftJoin('valoresTramite att_p1SegundoNivelXConstruir', 
                            'att_p1SegundoNivelXConstruir.tramiteId=Tramites.id and att_p1SegundoNivelXConstruir.atributoId=1621');
        $query -> leftJoin('valoresTramite att_p1OtrosXConstruir', 
                            'att_p1OtrosXConstruir.tramiteId=Tramites.id and att_p1OtrosXConstruir.atributoId=1622');
        $query -> leftJoin('valoresTramite att_p1TotalXConstruir', 
                            'att_p1TotalXConstruir.tramiteId=Tramites.id and att_p1TotalXConstruir.atributoId=1623');
        $query -> leftJoin('valoresTramite att_p1Observaciones', 
                            'att_p1Observaciones.tramiteId=Tramites.id and att_p1Observaciones.atributoId=1624');
        $query -> leftJoin('valoresTramite att_p1NombreGestor', 
                            'att_p1NombreGestor.tramiteId=Tramites.id and att_p1NombreGestor.atributoId=1625');
        $query -> leftJoin('valoresTramite att_p1DireccionGestor', 
                            'att_p1DireccionGestor.tramiteId=Tramites.id and att_p1DireccionGestor.atributoId=1626');
        $query -> leftJoin('valoresTramite att_p1TelefonoGestor', 
                            'att_p1TelefonoGestor.tramiteId=Tramites.id and att_p1TelefonoGestor.atributoId=1627');
        $query -> leftJoin('valoresTramite att_p1CorreoGestor', 
                            'att_p1CorreoGestor.tramiteId=Tramites.id and att_p1CorreoGestor.atributoId=1628');
        $query -> leftJoin('valoresTramite att_p2CertificacionCabildo', 
                            'att_p2CertificacionCabildo.tramiteId=Tramites.id and att_p2CertificacionCabildo.atributoId=1629');
        $query -> leftJoin('valoresTramite att_p2PlanoAprobado', 
                            'att_p2PlanoAprobado.tramiteId=Tramites.id and att_p2PlanoAprobado.atributoId=1630');
        $query -> leftJoin('valoresTramite att_p2PlanoPropuesta', 
                            'att_p2PlanoPropuesta.tramiteId=Tramites.id and att_p2PlanoPropuesta.atributoId=1631');
        $query -> leftJoin('valoresTramite att_p2Pago', 
                            'att_p2Pago.tramiteId=Tramites.id and att_p2Pago.atributoId=1632');
        $query -> leftJoin('valoresTramite att_p3CertificacionCabildo', 
                            'att_p3CertificacionCabildo.tramiteId=Tramites.id and att_p3CertificacionCabildo.atributoId=1633');
        $query -> leftJoin('valoresTramite att_p3PlanoAprobado', 
                            'att_p3PlanoAprobado.tramiteId=Tramites.id and att_p3PlanoAprobado.atributoId=1634');
        $query -> leftJoin('valoresTramite att_p3PlanoPropuesta', 
                            'att_p3PlanoPropuesta.tramiteId=Tramites.id and att_p3PlanoPropuesta.atributoId=1635');
        $query -> leftJoin('valoresTramite att_p3Pago', 
                            'att_p3Pago.tramiteId=Tramites.id and att_p3Pago.atributoId=1636');
        $query -> leftJoin('valoresTramite att_p4Supervision', 
                            'att_p4Supervision.tramiteId=Tramites.id and att_p4Supervision.atributoId=1637');
        $query -> leftJoin('valoresTramite att_p4Observaciones', 
                            'att_p4Observaciones.tramiteId=Tramites.id and att_p4Observaciones.atributoId=1638');
        $query -> leftJoin('valoresTramite att_p5Constancia', 
                            'att_p5Constancia.tramiteId=Tramites.id and att_p5Constancia.atributoId=1639');
        $query -> leftJoin('valoresTramite att_p1NorOrientePredio', 
                            'att_p1NorOrientePredio.tramiteId=Tramites.id and att_p1NorOrientePredio.atributoId=3492');
        $query -> leftJoin('valoresTramite att_p1SurOrientePredio', 
                            'att_p1SurOrientePredio.tramiteId=Tramites.id and att_p1SurOrientePredio.atributoId=3493');
        $query -> leftJoin('valoresTramite att_p1NorPonientePredio', 
                            'att_p1NorPonientePredio.tramiteId=Tramites.id and att_p1NorPonientePredio.atributoId=3494');
        $query -> leftJoin('valoresTramite att_p1SurPonientePredio', 
                            'att_p1SurPonientePredio.tramiteId=Tramites.id and att_p1SurPonientePredio.atributoId=3495');
        
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
            ->andFilterWhere(['like', 'att_p2CertificacionCabildo.valor', $this->p2CertificacionCabildo])
            ->andFilterWhere(['like', 'att_p2PlanoAprobado.valor', $this->p2PlanoAprobado])
            ->andFilterWhere(['like', 'att_p2PlanoPropuesta.valor', $this->p2PlanoPropuesta])
            ->andFilterWhere(['like', 'att_p2Pago.valor', $this->p2Pago])
            ->andFilterWhere(['like', 'att_p3CertificacionCabildo.valor', $this->p3CertificacionCabildo])
            ->andFilterWhere(['like', 'att_p3PlanoAprobado.valor', $this->p3PlanoAprobado])
            ->andFilterWhere(['like', 'att_p3PlanoPropuesta.valor', $this->p3PlanoPropuesta])
            ->andFilterWhere(['like', 'att_p3Pago.valor', $this->p3Pago])
            ->andFilterWhere(['like', 'att_p4Supervision.valor', $this->p4Supervision])
            ->andFilterWhere(['like', 'att_p4Observaciones.valor', $this->p4Observaciones])
            ->andFilterWhere(['like', 'att_p5Constancia.valor', $this->p5Constancia]);

        return $dataProvider;
    }
}
