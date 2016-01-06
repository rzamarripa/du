<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TramitesDeslinde;

/**
 * TramitesDeslindeSearch represents the model behind the search form about `app\models\TramitesDeslinde`.
 */
class TramitesDeslindeSearch extends TramitesDeslinde
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId', 'estatusId'], 'integer'],
            [['fechaCreacion', 'fechaModificacion', 'observaciones', 'p1NombrePropietario', 'p1DireccionPropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1AlineamientoObservaciones', 'p1NoOficialObservaciones', 'p1ProMatObservaciones', 'p1ProHospObservaciones', 'p1ProAlfObservaciones', 'p1TotalObservaciones', 'p1NorteLocalizacion', 'p1SurLocalizacion', 'p1OrienteLocalizacion', 'p1PonienteLocalizacion', 'p2CopiaEscritura', 'p2Croquis', 'p2PlanoManzanero', 'p2Pago', 'p3Supervision', 'p3NombreSupervisor', 'p3Observaciones', 'p4Nombre', 'p4Observaciones', 'p4Expediente', 'p5CopiaEscritura', 'p5Croquis', 'p5Pago', 'p5PlanoManzanero', 'p5Expediente', 'p6Deslinde', 'p7EnvioExpediente', 'p7Observaciones'], 'safe'],
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
        $query = TramitesDeslinde::find();

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
                            'att_p1NombrePropietario.tramiteId=Tramites.id and att_p1NombrePropietario.atributoId=3535');
        $query -> leftJoin('valoresTramite att_p1DireccionPropietario', 
                            'att_p1DireccionPropietario.tramiteId=Tramites.id and att_p1DireccionPropietario.atributoId=3536');
        $query -> leftJoin('valoresTramite att_p1TelefonoPropietario', 
                            'att_p1TelefonoPropietario.tramiteId=Tramites.id and att_p1TelefonoPropietario.atributoId=3537');
        $query -> leftJoin('valoresTramite att_p1CallePredio', 
                            'att_p1CallePredio.tramiteId=Tramites.id and att_p1CallePredio.atributoId=3538');
        $query -> leftJoin('valoresTramite att_p1FraccColoniaPredio', 
                            'att_p1FraccColoniaPredio.tramiteId=Tramites.id and att_p1FraccColoniaPredio.atributoId=3539');
        $query -> leftJoin('valoresTramite att_p1LotePredio', 
                            'att_p1LotePredio.tramiteId=Tramites.id and att_p1LotePredio.atributoId=3540');
        $query -> leftJoin('valoresTramite att_p1ManzanaPredio', 
                            'att_p1ManzanaPredio.tramiteId=Tramites.id and att_p1ManzanaPredio.atributoId=3541');
        $query -> leftJoin('valoresTramite att_p1ClaveCatastralPredio', 
                            'att_p1ClaveCatastralPredio.tramiteId=Tramites.id and att_p1ClaveCatastralPredio.atributoId=3542');
        $query -> leftJoin('valoresTramite att_p1AlineamientoObservaciones', 
                            'att_p1AlineamientoObservaciones.tramiteId=Tramites.id and att_p1AlineamientoObservaciones.atributoId=3543');
        $query -> leftJoin('valoresTramite att_p1NoOficialObservaciones', 
                            'att_p1NoOficialObservaciones.tramiteId=Tramites.id and att_p1NoOficialObservaciones.atributoId=3544');
        $query -> leftJoin('valoresTramite att_p1ProMatObservaciones', 
                            'att_p1ProMatObservaciones.tramiteId=Tramites.id and att_p1ProMatObservaciones.atributoId=3545');
        $query -> leftJoin('valoresTramite att_p1ProHospObservaciones', 
                            'att_p1ProHospObservaciones.tramiteId=Tramites.id and att_p1ProHospObservaciones.atributoId=3546');
        $query -> leftJoin('valoresTramite att_p1ProAlfObservaciones', 
                            'att_p1ProAlfObservaciones.tramiteId=Tramites.id and att_p1ProAlfObservaciones.atributoId=3547');
        $query -> leftJoin('valoresTramite att_p1TotalObservaciones', 
                            'att_p1TotalObservaciones.tramiteId=Tramites.id and att_p1TotalObservaciones.atributoId=3548');
        $query -> leftJoin('valoresTramite att_p1NorteLocalizacion', 
                            'att_p1NorteLocalizacion.tramiteId=Tramites.id and att_p1NorteLocalizacion.atributoId=3549');
        $query -> leftJoin('valoresTramite att_p1SurLocalizacion', 
                            'att_p1SurLocalizacion.tramiteId=Tramites.id and att_p1SurLocalizacion.atributoId=3550');
        $query -> leftJoin('valoresTramite att_p1OrienteLocalizacion', 
                            'att_p1OrienteLocalizacion.tramiteId=Tramites.id and att_p1OrienteLocalizacion.atributoId=3551');
        $query -> leftJoin('valoresTramite att_p1PonienteLocalizacion', 
                            'att_p1PonienteLocalizacion.tramiteId=Tramites.id and att_p1PonienteLocalizacion.atributoId=3552');
        $query -> leftJoin('valoresTramite att_p2CopiaEscritura', 
                            'att_p2CopiaEscritura.tramiteId=Tramites.id and att_p2CopiaEscritura.atributoId=3573');
        $query -> leftJoin('valoresTramite att_p2Croquis', 
                            'att_p2Croquis.tramiteId=Tramites.id and att_p2Croquis.atributoId=3574');
        $query -> leftJoin('valoresTramite att_p2PlanoManzanero', 
                            'att_p2PlanoManzanero.tramiteId=Tramites.id and att_p2PlanoManzanero.atributoId=3577');
        $query -> leftJoin('valoresTramite att_p2Pago', 
                            'att_p2Pago.tramiteId=Tramites.id and att_p2Pago.atributoId=3578');
        $query -> leftJoin('valoresTramite att_p3Supervision', 
                            'att_p3Supervision.tramiteId=Tramites.id and att_p3Supervision.atributoId=3584');
        $query -> leftJoin('valoresTramite att_p3NombreSupervisor', 
                            'att_p3NombreSupervisor.tramiteId=Tramites.id and att_p3NombreSupervisor.atributoId=3585');
        $query -> leftJoin('valoresTramite att_p3Observaciones', 
                            'att_p3Observaciones.tramiteId=Tramites.id and att_p3Observaciones.atributoId=3586');
        $query -> leftJoin('valoresTramite att_p4Nombre', 
                            'att_p4Nombre.tramiteId=Tramites.id and att_p4Nombre.atributoId=3590');
        $query -> leftJoin('valoresTramite att_p4Observaciones', 
                            'att_p4Observaciones.tramiteId=Tramites.id and att_p4Observaciones.atributoId=3591');
        $query -> leftJoin('valoresTramite att_p4Expediente', 
                            'att_p4Expediente.tramiteId=Tramites.id and att_p4Expediente.atributoId=3592');
        $query -> leftJoin('valoresTramite att_p5CopiaEscritura', 
                            'att_p5CopiaEscritura.tramiteId=Tramites.id and att_p5CopiaEscritura.atributoId=3603');
        $query -> leftJoin('valoresTramite att_p5Croquis', 
                            'att_p5Croquis.tramiteId=Tramites.id and att_p5Croquis.atributoId=3604');
        $query -> leftJoin('valoresTramite att_p5Pago', 
                            'att_p5Pago.tramiteId=Tramites.id and att_p5Pago.atributoId=3605');
        $query -> leftJoin('valoresTramite att_p5PlanoManzanero', 
                            'att_p5PlanoManzanero.tramiteId=Tramites.id and att_p5PlanoManzanero.atributoId=3606');
        $query -> leftJoin('valoresTramite att_p5Expediente', 
                            'att_p5Expediente.tramiteId=Tramites.id and att_p5Expediente.atributoId=3607');
        $query -> leftJoin('valoresTramite att_p6Deslinde', 
                            'att_p6Deslinde.tramiteId=Tramites.id and att_p6Deslinde.atributoId=3608');
        $query -> leftJoin('valoresTramite att_p7EnvioExpediente', 
                            'att_p7EnvioExpediente.tramiteId=Tramites.id and att_p7EnvioExpediente.atributoId=3609');
        $query -> leftJoin('valoresTramite att_p7Observaciones', 
                            'att_p7Observaciones.tramiteId=Tramites.id and att_p7Observaciones.atributoId=3610');
        
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
            ->andFilterWhere(['like', 'att_p2PlanoManzanero.valor', $this->p2PlanoManzanero])
            ->andFilterWhere(['like', 'att_p2Pago.valor', $this->p2Pago])
            ->andFilterWhere(['like', 'att_p3Supervision.valor', $this->p3Supervision])
            ->andFilterWhere(['like', 'att_p3NombreSupervisor.valor', $this->p3NombreSupervisor])
            ->andFilterWhere(['like', 'att_p3Observaciones.valor', $this->p3Observaciones])
            ->andFilterWhere(['like', 'att_p4Nombre.valor', $this->p4Nombre])
            ->andFilterWhere(['like', 'att_p4Observaciones.valor', $this->p4Observaciones])
            ->andFilterWhere(['like', 'att_p4Expediente.valor', $this->p4Expediente])
            ->andFilterWhere(['like', 'att_p5CopiaEscritura.valor', $this->p5CopiaEscritura])
            ->andFilterWhere(['like', 'att_p5Croquis.valor', $this->p5Croquis])
            ->andFilterWhere(['like', 'att_p5Pago.valor', $this->p5Pago])
            ->andFilterWhere(['like', 'att_p5PlanoManzanero.valor', $this->p5PlanoManzanero])
            ->andFilterWhere(['like', 'att_p5Expediente.valor', $this->p5Expediente])
            ->andFilterWhere(['like', 'att_p6Deslinde.valor', $this->p6Deslinde])
            ->andFilterWhere(['like', 'att_p7EnvioExpediente.valor', $this->p7EnvioExpediente])
            ->andFilterWhere(['like', 'att_p7Observaciones.valor', $this->p7Observaciones]);

        return $dataProvider;
    }
}
