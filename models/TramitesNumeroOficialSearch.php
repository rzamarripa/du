<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TramitesNumeroOficial;

/**
 * TramitesNumeroOficialSearch represents the model behind the search form about `app\models\TramitesNumeroOficial`.
 */
class TramitesNumeroOficialSearch extends TramitesNumeroOficial
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId', 'estatusId'], 'integer'],
            [['fechaCreacion', 'fechaModificacion', 'observaciones', 'p1NombrePropietario', 'p1DireccionPropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1AlineamientoObservaciones', 'p1NoOficialObservaciones', 'p1ProMatObservaciones', 'p1ProHospObservaciones', 'p1ProAlfObservaciones', 'p1TotalObservaciones', 'p1NorteLocalizacion', 'p1SurLocalizacion', 'p1OrienteLocalizacion', 'p1PonienteLocalizacion', 'p2CopiaEscritura', 'p2Croquis', 'p2Pago', 'p3Nombre', 'p3NumeroAsignado', 'p3Observaciones', 'p4Resolutivo', 'p5CopiaEscritura', 'p5Croquis', 'p5Pago', 'p5Resolutivo', 'p6NumeroOficial', 'p7EnvioExpediente', 'p7Observaciones'], 'safe'],
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
        $query = TramitesNumeroOficial::find();

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
                            'att_p1NombrePropietario.tramiteId=Tramites.id and att_p1NombrePropietario.atributoId=3517');
        $query -> leftJoin('valoresTramite att_p1DireccionPropietario', 
                            'att_p1DireccionPropietario.tramiteId=Tramites.id and att_p1DireccionPropietario.atributoId=3518');
        $query -> leftJoin('valoresTramite att_p1TelefonoPropietario', 
                            'att_p1TelefonoPropietario.tramiteId=Tramites.id and att_p1TelefonoPropietario.atributoId=3519');
        $query -> leftJoin('valoresTramite att_p1CallePredio', 
                            'att_p1CallePredio.tramiteId=Tramites.id and att_p1CallePredio.atributoId=3520');
        $query -> leftJoin('valoresTramite att_p1FraccColoniaPredio', 
                            'att_p1FraccColoniaPredio.tramiteId=Tramites.id and att_p1FraccColoniaPredio.atributoId=3521');
        $query -> leftJoin('valoresTramite att_p1LotePredio', 
                            'att_p1LotePredio.tramiteId=Tramites.id and att_p1LotePredio.atributoId=3522');
        $query -> leftJoin('valoresTramite att_p1ManzanaPredio', 
                            'att_p1ManzanaPredio.tramiteId=Tramites.id and att_p1ManzanaPredio.atributoId=3523');
        $query -> leftJoin('valoresTramite att_p1ClaveCatastralPredio', 
                            'att_p1ClaveCatastralPredio.tramiteId=Tramites.id and att_p1ClaveCatastralPredio.atributoId=3524');
        $query -> leftJoin('valoresTramite att_p1AlineamientoObservaciones', 
                            'att_p1AlineamientoObservaciones.tramiteId=Tramites.id and att_p1AlineamientoObservaciones.atributoId=3525');
        $query -> leftJoin('valoresTramite att_p1NoOficialObservaciones', 
                            'att_p1NoOficialObservaciones.tramiteId=Tramites.id and att_p1NoOficialObservaciones.atributoId=3526');
        $query -> leftJoin('valoresTramite att_p1ProMatObservaciones', 
                            'att_p1ProMatObservaciones.tramiteId=Tramites.id and att_p1ProMatObservaciones.atributoId=3527');
        $query -> leftJoin('valoresTramite att_p1ProHospObservaciones', 
                            'att_p1ProHospObservaciones.tramiteId=Tramites.id and att_p1ProHospObservaciones.atributoId=3528');
        $query -> leftJoin('valoresTramite att_p1ProAlfObservaciones', 
                            'att_p1ProAlfObservaciones.tramiteId=Tramites.id and att_p1ProAlfObservaciones.atributoId=3529');
        $query -> leftJoin('valoresTramite att_p1TotalObservaciones', 
                            'att_p1TotalObservaciones.tramiteId=Tramites.id and att_p1TotalObservaciones.atributoId=3530');
        $query -> leftJoin('valoresTramite att_p1NorteLocalizacion', 
                            'att_p1NorteLocalizacion.tramiteId=Tramites.id and att_p1NorteLocalizacion.atributoId=3531');
        $query -> leftJoin('valoresTramite att_p1SurLocalizacion', 
                            'att_p1SurLocalizacion.tramiteId=Tramites.id and att_p1SurLocalizacion.atributoId=3532');
        $query -> leftJoin('valoresTramite att_p1OrienteLocalizacion', 
                            'att_p1OrienteLocalizacion.tramiteId=Tramites.id and att_p1OrienteLocalizacion.atributoId=3533');
        $query -> leftJoin('valoresTramite att_p1PonienteLocalizacion', 
                            'att_p1PonienteLocalizacion.tramiteId=Tramites.id and att_p1PonienteLocalizacion.atributoId=3534');
        $query -> leftJoin('valoresTramite att_p2CopiaEscritura', 
                            'att_p2CopiaEscritura.tramiteId=Tramites.id and att_p2CopiaEscritura.atributoId=3575');
        $query -> leftJoin('valoresTramite att_p2Croquis', 
                            'att_p2Croquis.tramiteId=Tramites.id and att_p2Croquis.atributoId=3576');
        $query -> leftJoin('valoresTramite att_p2Pago', 
                            'att_p2Pago.tramiteId=Tramites.id and att_p2Pago.atributoId=3580');
        $query -> leftJoin('valoresTramite att_p3Nombre', 
                            'att_p3Nombre.tramiteId=Tramites.id and att_p3Nombre.atributoId=3587');
        $query -> leftJoin('valoresTramite att_p3NumeroAsignado', 
                            'att_p3NumeroAsignado.tramiteId=Tramites.id and att_p3NumeroAsignado.atributoId=3588');
        $query -> leftJoin('valoresTramite att_p3Observaciones', 
                            'att_p3Observaciones.tramiteId=Tramites.id and att_p3Observaciones.atributoId=3589');
        $query -> leftJoin('valoresTramite att_p4Resolutivo', 
                            'att_p4Resolutivo.tramiteId=Tramites.id and att_p4Resolutivo.atributoId=3611');
        $query -> leftJoin('valoresTramite att_p5CopiaEscritura', 
                            'att_p5CopiaEscritura.tramiteId=Tramites.id and att_p5CopiaEscritura.atributoId=3612');
        $query -> leftJoin('valoresTramite att_p5Croquis', 
                            'att_p5Croquis.tramiteId=Tramites.id and att_p5Croquis.atributoId=3613');
        $query -> leftJoin('valoresTramite att_p5Pago', 
                            'att_p5Pago.tramiteId=Tramites.id and att_p5Pago.atributoId=3614');
        $query -> leftJoin('valoresTramite att_p5Resolutivo', 
                            'att_p5Resolutivo.tramiteId=Tramites.id and att_p5Resolutivo.atributoId=3615');
        $query -> leftJoin('valoresTramite att_p6NumeroOficial', 
                            'att_p6NumeroOficial.tramiteId=Tramites.id and att_p6NumeroOficial.atributoId=3616');
        $query -> leftJoin('valoresTramite att_p7EnvioExpediente', 
                            'att_p7EnvioExpediente.tramiteId=Tramites.id and att_p7EnvioExpediente.atributoId=3617');
        $query -> leftJoin('valoresTramite att_p7Observaciones', 
                            'att_p7Observaciones.tramiteId=Tramites.id and att_p7Observaciones.atributoId=3618');
        
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
            ->andFilterWhere(['like', 'att_p2CopiaEscritura.valor', $this->p2CopiaEscritura])
            ->andFilterWhere(['like', 'att_p2Croquis.valor', $this->p2Croquis])
            ->andFilterWhere(['like', 'att_p2Pago.valor', $this->p2Pago])
            ->andFilterWhere(['like', 'att_p3Nombre.valor', $this->p3Nombre])
            ->andFilterWhere(['like', 'att_p3NumeroAsignado.valor', $this->p3NumeroAsignado])
            ->andFilterWhere(['like', 'att_p3Observaciones.valor', $this->p3Observaciones])
            ->andFilterWhere(['like', 'att_p4Resolutivo.valor', $this->p4Resolutivo])
            ->andFilterWhere(['like', 'att_p5CopiaEscritura.valor', $this->p5CopiaEscritura])
            ->andFilterWhere(['like', 'att_p5Croquis.valor', $this->p5Croquis])
            ->andFilterWhere(['like', 'att_p5Pago.valor', $this->p5Pago])
            ->andFilterWhere(['like', 'att_p5Resolutivo.valor', $this->p5Resolutivo])
            ->andFilterWhere(['like', 'att_p6NumeroOficial.valor', $this->p6NumeroOficial])
            ->andFilterWhere(['like', 'att_p7EnvioExpediente.valor', $this->p7EnvioExpediente])
            ->andFilterWhere(['like', 'att_p7Observaciones.valor', $this->p7Observaciones]);

        return $dataProvider;
    }
}
