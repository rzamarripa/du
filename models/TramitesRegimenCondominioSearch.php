<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TramitesRegimenCondominio;

/**
 * TramitesRegimenCondominioSearch represents the model behind the search form about `app\models\TramitesRegimenCondominio`.
 */
class TramitesRegimenCondominioSearch extends TramitesRegimenCondominio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId', 'estatusId'], 'integer'],
            [['fechaCreacion', 'fechaModificacion', 'observaciones', 'p1NombrePropietario', 'p1DireccionPropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1Observaciones', 'p1UsoActual', 'p1UsoSolicitado', 'p1Cajones', 'p2Escrituras', 'p2Predial', 'p2Planos', 'p2TablaAreas', 'p2Pago', 'p3Resolutivo', 'p4Escrituras', 'p4Predial', 'p4Planos', 'p4TablaAreas', 'p4Pago', 'p5RegimenCondominio', 'p6EnvioExpediente', 'p6Observaciones'], 'safe'],
            [['p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1PlantaAltaConstruida', 'p1PlantaBajaConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaBajaXConstruir', 'p1PlantaAltaXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir'], 'number'],
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
        $query = TramitesRegimenCondominio::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query -> leftJoin('valoresTramite att_p1NombrePropietario', 
                            'att_p1NombrePropietario.tramiteId=Tramites.id and att_p1NombrePropietario.atributoId=3626');
        $query -> leftJoin('valoresTramite att_p1DireccionPropietario', 
                            'att_p1DireccionPropietario.tramiteId=Tramites.id and att_p1DireccionPropietario.atributoId=3627');
        $query -> leftJoin('valoresTramite att_p1TelefonoPropietario', 
                            'att_p1TelefonoPropietario.tramiteId=Tramites.id and att_p1TelefonoPropietario.atributoId=3628');
        $query -> leftJoin('valoresTramite att_p1CallePredio', 
                            'att_p1CallePredio.tramiteId=Tramites.id and att_p1CallePredio.atributoId=3629');
        $query -> leftJoin('valoresTramite att_p1FraccColoniaPredio', 
                            'att_p1FraccColoniaPredio.tramiteId=Tramites.id and att_p1FraccColoniaPredio.atributoId=3630');
        $query -> leftJoin('valoresTramite att_p1LotePredio', 
                            'att_p1LotePredio.tramiteId=Tramites.id and att_p1LotePredio.atributoId=3631');
        $query -> leftJoin('valoresTramite att_p1ManzanaPredio', 
                            'att_p1ManzanaPredio.tramiteId=Tramites.id and att_p1ManzanaPredio.atributoId=3632');
        $query -> leftJoin('valoresTramite att_p1ClaveCatastralPredio', 
                            'att_p1ClaveCatastralPredio.tramiteId=Tramites.id and att_p1ClaveCatastralPredio.atributoId=3633');
        $query -> leftJoin('valoresTramite att_p1NortePredio', 
                            'att_p1NortePredio.tramiteId=Tramites.id and att_p1NortePredio.atributoId=3634');
        $query -> leftJoin('valoresTramite att_p1SurPredio', 
                            'att_p1SurPredio.tramiteId=Tramites.id and att_p1SurPredio.atributoId=3635');
        $query -> leftJoin('valoresTramite att_p1OrientePredio', 
                            'att_p1OrientePredio.tramiteId=Tramites.id and att_p1OrientePredio.atributoId=3636');
        $query -> leftJoin('valoresTramite att_p1PonientePredio', 
                            'att_p1PonientePredio.tramiteId=Tramites.id and att_p1PonientePredio.atributoId=3637');
        $query -> leftJoin('valoresTramite att_p1PlantaAltaConstruida', 
                            'att_p1PlantaAltaConstruida.tramiteId=Tramites.id and att_p1PlantaAltaConstruida.atributoId=3638');
        $query -> leftJoin('valoresTramite att_p1PlantaBajaConstruida', 
                            'att_p1PlantaBajaConstruida.tramiteId=Tramites.id and att_p1PlantaBajaConstruida.atributoId=3639');
        $query -> leftJoin('valoresTramite att_p1OtrosConstruida', 
                            'att_p1OtrosConstruida.tramiteId=Tramites.id and att_p1OtrosConstruida.atributoId=3640');
        $query -> leftJoin('valoresTramite att_p1TotalConstruida', 
                            'att_p1TotalConstruida.tramiteId=Tramites.id and att_p1TotalConstruida.atributoId=3641');
        $query -> leftJoin('valoresTramite att_p1PlantaBajaXConstruir', 
                            'att_p1PlantaBajaXConstruir.tramiteId=Tramites.id and att_p1PlantaBajaXConstruir.atributoId=3642');
        $query -> leftJoin('valoresTramite att_p1PlantaAltaXConstruir', 
                            'att_p1PlantaAltaXConstruir.tramiteId=Tramites.id and att_p1PlantaAltaXConstruir.atributoId=3643');
        $query -> leftJoin('valoresTramite att_p1OtrosXConstruir', 
                            'att_p1OtrosXConstruir.tramiteId=Tramites.id and att_p1OtrosXConstruir.atributoId=3644');
        $query -> leftJoin('valoresTramite att_p1Observaciones', 
                            'att_p1Observaciones.tramiteId=Tramites.id and att_p1Observaciones.atributoId=3645');
        $query -> leftJoin('valoresTramite att_p1UsoActual', 
                            'att_p1UsoActual.tramiteId=Tramites.id and att_p1UsoActual.atributoId=3649');
        $query -> leftJoin('valoresTramite att_p1UsoSolicitado', 
                            'att_p1UsoSolicitado.tramiteId=Tramites.id and att_p1UsoSolicitado.atributoId=3650');
        $query -> leftJoin('valoresTramite att_p1Cajones', 
                            'att_p1Cajones.tramiteId=Tramites.id and att_p1Cajones.atributoId=3651');
        $query -> leftJoin('valoresTramite att_p1TotalXConstruir', 
                            'att_p1TotalXConstruir.tramiteId=Tramites.id and att_p1TotalXConstruir.atributoId=3671');
        $query -> leftJoin('valoresTramite att_p2Escrituras', 
                            'att_p2Escrituras.tramiteId=Tramites.id and att_p2Escrituras.atributoId=3674');
        $query -> leftJoin('valoresTramite att_p2Predial', 
                            'att_p2Predial.tramiteId=Tramites.id and att_p2Predial.atributoId=3675');
        $query -> leftJoin('valoresTramite att_p2Planos', 
                            'att_p2Planos.tramiteId=Tramites.id and att_p2Planos.atributoId=3676');
        $query -> leftJoin('valoresTramite att_p2TablaAreas', 
                            'att_p2TablaAreas.tramiteId=Tramites.id and att_p2TablaAreas.atributoId=3677');
        $query -> leftJoin('valoresTramite att_p2Pago', 
                            'att_p2Pago.tramiteId=Tramites.id and att_p2Pago.atributoId=3678');
        $query -> leftJoin('valoresTramite att_p3Resolutivo', 
                            'att_p3Resolutivo.tramiteId=Tramites.id and att_p3Resolutivo.atributoId=3683');
        $query -> leftJoin('valoresTramite att_p4Escrituras', 
                            'att_p4Escrituras.tramiteId=Tramites.id and att_p4Escrituras.atributoId=3684');
        $query -> leftJoin('valoresTramite att_p4Predial', 
                            'att_p4Predial.tramiteId=Tramites.id and att_p4Predial.atributoId=3685');
        $query -> leftJoin('valoresTramite att_p4Planos', 
                            'att_p4Planos.tramiteId=Tramites.id and att_p4Planos.atributoId=3686');
        $query -> leftJoin('valoresTramite att_p4TablaAreas', 
                            'att_p4TablaAreas.tramiteId=Tramites.id and att_p4TablaAreas.atributoId=3687');
        $query -> leftJoin('valoresTramite att_p4Pago', 
                            'att_p4Pago.tramiteId=Tramites.id and att_p4Pago.atributoId=3688');
        $query -> leftJoin('valoresTramite att_p5RegimenCondominio', 
                            'att_p5RegimenCondominio.tramiteId=Tramites.id and att_p5RegimenCondominio.atributoId=3689');
        $query -> leftJoin('valoresTramite att_p6EnvioExpediente', 
                            'att_p6EnvioExpediente.tramiteId=Tramites.id and att_p6EnvioExpediente.atributoId=3690');
        $query -> leftJoin('valoresTramite att_p6Observaciones', 
                            'att_p6Observaciones.tramiteId=Tramites.id and att_p6Observaciones.atributoId=3691');
        
        $query->andFilterWhere([
            'id' => $this->id,
            'pasoActualId' => $this->pasoActualId,
            'tipoTramiteId' => $this->tipoDeTramite(),
            'att_fechaCreacion' => $this->fechaCreacion,
            'att_fechaModificacion' => $this->fechaModificacion,
            'att_estatusId' => $this->estatusId,
            'att_p1NortePredio' => $this->p1NortePredio,
            'att_p1SurPredio' => $this->p1SurPredio,
            'att_p1OrientePredio' => $this->p1OrientePredio,
            'att_p1PonientePredio' => $this->p1PonientePredio,
            'att_p1PlantaAltaConstruida' => $this->p1PlantaAltaConstruida,
            'att_p1PlantaBajaConstruida' => $this->p1PlantaBajaConstruida,
            'att_p1OtrosConstruida' => $this->p1OtrosConstruida,
            'att_p1TotalConstruida' => $this->p1TotalConstruida,
            'att_p1PlantaBajaXConstruir' => $this->p1PlantaBajaXConstruir,
            'att_p1PlantaAltaXConstruir' => $this->p1PlantaAltaXConstruir,
            'att_p1OtrosXConstruir' => $this->p1OtrosXConstruir,
            'att_p1TotalXConstruir' => $this->p1TotalXConstruir,
        ]);

        $query->andFilterWhere(['like', 'att_observaciones.valor', $this->observaciones])
            ->andFilterWhere(['like', 'att_p1NombrePropietario.valor', $this->p1NombrePropietario])
            ->andFilterWhere(['like', 'att_p1DireccionPropietario.valor', $this->p1DireccionPropietario])
            ->andFilterWhere(['like', 'att_p1TelefonoPropietario.valor', $this->p1TelefonoPropietario])
            ->andFilterWhere(['like', 'att_p1CallePredio.valor', $this->p1CallePredio])
            ->andFilterWhere(['like', 'att_p1FraccColoniaPredio.valor', $this->p1FraccColoniaPredio])
            ->andFilterWhere(['like', 'att_p1LotePredio.valor', $this->p1LotePredio])
            ->andFilterWhere(['like', 'att_p1ManzanaPredio.valor', $this->p1ManzanaPredio])
            ->andFilterWhere(['like', 'att_p1ClaveCatastralPredio.valor', $this->p1ClaveCatastralPredio])
            ->andFilterWhere(['like', 'att_p1Observaciones.valor', $this->p1Observaciones])
            ->andFilterWhere(['like', 'att_p1UsoActual.valor', $this->p1UsoActual])
            ->andFilterWhere(['like', 'att_p1UsoSolicitado.valor', $this->p1UsoSolicitado])
            ->andFilterWhere(['like', 'att_p1Cajones.valor', $this->p1Cajones])
            ->andFilterWhere(['like', 'att_p2Escrituras.valor', $this->p2Escrituras])
            ->andFilterWhere(['like', 'att_p2Predial.valor', $this->p2Predial])
            ->andFilterWhere(['like', 'att_p2Planos.valor', $this->p2Planos])
            ->andFilterWhere(['like', 'att_p2TablaAreas.valor', $this->p2TablaAreas])
            ->andFilterWhere(['like', 'att_p2Pago.valor', $this->p2Pago])
            ->andFilterWhere(['like', 'att_p3Resolutivo.valor', $this->p3Resolutivo])
            ->andFilterWhere(['like', 'att_p4Escrituras.valor', $this->p4Escrituras])
            ->andFilterWhere(['like', 'att_p4Predial.valor', $this->p4Predial])
            ->andFilterWhere(['like', 'att_p4Planos.valor', $this->p4Planos])
            ->andFilterWhere(['like', 'att_p4TablaAreas.valor', $this->p4TablaAreas])
            ->andFilterWhere(['like', 'att_p4Pago.valor', $this->p4Pago])
            ->andFilterWhere(['like', 'att_p5RegimenCondominio.valor', $this->p5RegimenCondominio])
            ->andFilterWhere(['like', 'att_p6EnvioExpediente.valor', $this->p6EnvioExpediente])
            ->andFilterWhere(['like', 'att_p6Observaciones.valor', $this->p6Observaciones]);

        return $dataProvider;
    }
}
