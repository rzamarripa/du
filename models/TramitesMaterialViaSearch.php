<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TramitesMaterialVia;

/**
 * TramitesMaterialViaSearch represents the model behind the search form about `app\models\TramitesMaterialVia`.
 */
class TramitesMaterialViaSearch extends TramitesMaterialVia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId', 'estatusId'], 'integer'],
            [['fechaCreacion', 'fechaModificacion', 'observaciones', 'p1NombrePropietario', 'p1DireccionPropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1AlineamientoObservaciones', 'p1NoOficialObservaciones', 'p1ProMatObservaciones', 'p1ProHospObservaciones', 'p1ProAlfObservaciones', 'p1TotalObservaciones', 'p1NorteLocalizacion', 'p1SurLocalizacion', 'p1OrienteLocalizacion', 'p1PonienteLocalizacion', 'p6EnvioExpediente', 'p6Observaciones', 'p5MaterialVialPublica', 'p3Resolutivo', 'p2Pago', 'p4Pago', 'p4Resolutivo'], 'safe'],
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
        $query = TramitesMaterialVia::find();

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
                            'att_p1NombrePropietario.tramiteId=Tramites.id and att_p1NombrePropietario.atributoId=3553');
        $query -> leftJoin('valoresTramite att_p1DireccionPropietario', 
                            'att_p1DireccionPropietario.tramiteId=Tramites.id and att_p1DireccionPropietario.atributoId=3554');
        $query -> leftJoin('valoresTramite att_p1TelefonoPropietario', 
                            'att_p1TelefonoPropietario.tramiteId=Tramites.id and att_p1TelefonoPropietario.atributoId=3555');
        $query -> leftJoin('valoresTramite att_p1CallePredio', 
                            'att_p1CallePredio.tramiteId=Tramites.id and att_p1CallePredio.atributoId=3556');
        $query -> leftJoin('valoresTramite att_p1FraccColoniaPredio', 
                            'att_p1FraccColoniaPredio.tramiteId=Tramites.id and att_p1FraccColoniaPredio.atributoId=3557');
        $query -> leftJoin('valoresTramite att_p1LotePredio', 
                            'att_p1LotePredio.tramiteId=Tramites.id and att_p1LotePredio.atributoId=3558');
        $query -> leftJoin('valoresTramite att_p1ManzanaPredio', 
                            'att_p1ManzanaPredio.tramiteId=Tramites.id and att_p1ManzanaPredio.atributoId=3559');
        $query -> leftJoin('valoresTramite att_p1ClaveCatastralPredio', 
                            'att_p1ClaveCatastralPredio.tramiteId=Tramites.id and att_p1ClaveCatastralPredio.atributoId=3560');
        $query -> leftJoin('valoresTramite att_p1AlineamientoObservaciones', 
                            'att_p1AlineamientoObservaciones.tramiteId=Tramites.id and att_p1AlineamientoObservaciones.atributoId=3561');
        $query -> leftJoin('valoresTramite att_p1NoOficialObservaciones', 
                            'att_p1NoOficialObservaciones.tramiteId=Tramites.id and att_p1NoOficialObservaciones.atributoId=3562');
        $query -> leftJoin('valoresTramite att_p1ProMatObservaciones', 
                            'att_p1ProMatObservaciones.tramiteId=Tramites.id and att_p1ProMatObservaciones.atributoId=3563');
        $query -> leftJoin('valoresTramite att_p1ProHospObservaciones', 
                            'att_p1ProHospObservaciones.tramiteId=Tramites.id and att_p1ProHospObservaciones.atributoId=3564');
        $query -> leftJoin('valoresTramite att_p1ProAlfObservaciones', 
                            'att_p1ProAlfObservaciones.tramiteId=Tramites.id and att_p1ProAlfObservaciones.atributoId=3565');
        $query -> leftJoin('valoresTramite att_p1TotalObservaciones', 
                            'att_p1TotalObservaciones.tramiteId=Tramites.id and att_p1TotalObservaciones.atributoId=3566');
        $query -> leftJoin('valoresTramite att_p1NorteLocalizacion', 
                            'att_p1NorteLocalizacion.tramiteId=Tramites.id and att_p1NorteLocalizacion.atributoId=3567');
        $query -> leftJoin('valoresTramite att_p1SurLocalizacion', 
                            'att_p1SurLocalizacion.tramiteId=Tramites.id and att_p1SurLocalizacion.atributoId=3568');
        $query -> leftJoin('valoresTramite att_p1OrienteLocalizacion', 
                            'att_p1OrienteLocalizacion.tramiteId=Tramites.id and att_p1OrienteLocalizacion.atributoId=3569');
        $query -> leftJoin('valoresTramite att_p1PonienteLocalizacion', 
                            'att_p1PonienteLocalizacion.tramiteId=Tramites.id and att_p1PonienteLocalizacion.atributoId=3570');
        $query -> leftJoin('valoresTramite att_p6EnvioExpediente', 
                            'att_p6EnvioExpediente.tramiteId=Tramites.id and att_p6EnvioExpediente.atributoId=3619');
        $query -> leftJoin('valoresTramite att_p6Observaciones', 
                            'att_p6Observaciones.tramiteId=Tramites.id and att_p6Observaciones.atributoId=3620');
        $query -> leftJoin('valoresTramite att_p5MaterialVialPublica', 
                            'att_p5MaterialVialPublica.tramiteId=Tramites.id and att_p5MaterialVialPublica.atributoId=3621');
        $query -> leftJoin('valoresTramite att_p3Resolutivo', 
                            'att_p3Resolutivo.tramiteId=Tramites.id and att_p3Resolutivo.atributoId=3622');
        $query -> leftJoin('valoresTramite att_p2Pago', 
                            'att_p2Pago.tramiteId=Tramites.id and att_p2Pago.atributoId=3623');
        $query -> leftJoin('valoresTramite att_p4Pago', 
                            'att_p4Pago.tramiteId=Tramites.id and att_p4Pago.atributoId=3624');
        $query -> leftJoin('valoresTramite att_p4Resolutivo', 
                            'att_p4Resolutivo.tramiteId=Tramites.id and att_p4Resolutivo.atributoId=3625');
        
        $query->andFilterWhere([
            'id' => $this->id,
            'pasoActualId' => $this->pasoActualId,
            'tipoTramiteId' => $this->tipoDeTramite(),
            'att_fechaCreacion' => $this->fechaCreacion,
            'att_fechaModificacion' => $this->fechaModificacion,
            'att_estatusId' => $this->estatusId,
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
            ->andFilterWhere(['like', 'att_p1AlineamientoObservaciones.valor', $this->p1AlineamientoObservaciones])
            ->andFilterWhere(['like', 'att_p1NoOficialObservaciones.valor', $this->p1NoOficialObservaciones])
            ->andFilterWhere(['like', 'att_p1ProMatObservaciones.valor', $this->p1ProMatObservaciones])
            ->andFilterWhere(['like', 'att_p1ProHospObservaciones.valor', $this->p1ProHospObservaciones])
            ->andFilterWhere(['like', 'att_p1ProAlfObservaciones.valor', $this->p1ProAlfObservaciones])
            ->andFilterWhere(['like', 'att_p1TotalObservaciones.valor', $this->p1TotalObservaciones])
            ->andFilterWhere(['like', 'att_p1NorteLocalizacion.valor', $this->p1NorteLocalizacion])
            ->andFilterWhere(['like', 'att_p1SurLocalizacion.valor', $this->p1SurLocalizacion])
            ->andFilterWhere(['like', 'att_p1OrienteLocalizacion.valor', $this->p1OrienteLocalizacion])
            ->andFilterWhere(['like', 'att_p1PonienteLocalizacion.valor', $this->p1PonienteLocalizacion])
            ->andFilterWhere(['like', 'att_p6EnvioExpediente.valor', $this->p6EnvioExpediente])
            ->andFilterWhere(['like', 'att_p6Observaciones.valor', $this->p6Observaciones])
            ->andFilterWhere(['like', 'att_p5MaterialVialPublica.valor', $this->p5MaterialVialPublica])
            ->andFilterWhere(['like', 'att_p3Resolutivo.valor', $this->p3Resolutivo])
            ->andFilterWhere(['like', 'att_p2Pago.valor', $this->p2Pago])
            ->andFilterWhere(['like', 'att_p4Pago.valor', $this->p4Pago])
            ->andFilterWhere(['like', 'att_p4Resolutivo.valor', $this->p4Resolutivo]);

        return $dataProvider;
    }
}
