<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TramitesCertificadoOcupacion;

/**
 * TramitesCertificadoOcupacionSearch represents the model behind the search form about `app\models\TramitesCertificadoOcupacion`.
 */
class TramitesCertificadoOcupacionSearch extends TramitesCertificadoOcupacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId', 'estatusId'], 'integer'],
            [['fechaCreacion', 'fechaModificacion', 'observaciones', 'p1NombrePropietario', 'p1DireccionPropietario', 'p1TelefonoPropietario', 'p1CallePredio', 'p1FraccColoniaPredio', 'p1LotePredio', 'p1ManzanaPredio', 'p1ClaveCatastralPredio', 'p1UsoActual', 'p1UsoSolicitado', 'p1Cajones', 'p1Observaciones', 'p2PlanoAutorizado', 'p2Licencia', 'p2Pago', 'p2Vitacora', 'p4Resolutivo', 'p3Supervision', 'p3NombreSupervisor', 'p3Observaciones', 'p3Expediente', 'p5PlanoAutorizado', 'p5Licencia', 'p5Pago', 'p5Vitacora', 'p5Expediente', 'p6Certificado', 'p7EnvioExpediente', 'p7Observaciones'], 'safe'],
            [['p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaBajaXConstruir', 'p1PlantaAltaXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir'], 'number'],
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
        $query = TramitesCertificadoOcupacion::find();

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
                            'att_p1NombrePropietario.tramiteId=Tramites.id and att_p1NombrePropietario.atributoId=3646');
        $query -> leftJoin('valoresTramite att_p1DireccionPropietario', 
                            'att_p1DireccionPropietario.tramiteId=Tramites.id and att_p1DireccionPropietario.atributoId=3647');
        $query -> leftJoin('valoresTramite att_p1TelefonoPropietario', 
                            'att_p1TelefonoPropietario.tramiteId=Tramites.id and att_p1TelefonoPropietario.atributoId=3648');
        $query -> leftJoin('valoresTramite att_p1CallePredio', 
                            'att_p1CallePredio.tramiteId=Tramites.id and att_p1CallePredio.atributoId=3652');
        $query -> leftJoin('valoresTramite att_p1FraccColoniaPredio', 
                            'att_p1FraccColoniaPredio.tramiteId=Tramites.id and att_p1FraccColoniaPredio.atributoId=3653');
        $query -> leftJoin('valoresTramite att_p1LotePredio', 
                            'att_p1LotePredio.tramiteId=Tramites.id and att_p1LotePredio.atributoId=3654');
        $query -> leftJoin('valoresTramite att_p1ManzanaPredio', 
                            'att_p1ManzanaPredio.tramiteId=Tramites.id and att_p1ManzanaPredio.atributoId=3655');
        $query -> leftJoin('valoresTramite att_p1ClaveCatastralPredio', 
                            'att_p1ClaveCatastralPredio.tramiteId=Tramites.id and att_p1ClaveCatastralPredio.atributoId=3656');
        $query -> leftJoin('valoresTramite att_p1NortePredio', 
                            'att_p1NortePredio.tramiteId=Tramites.id and att_p1NortePredio.atributoId=3657');
        $query -> leftJoin('valoresTramite att_p1SurPredio', 
                            'att_p1SurPredio.tramiteId=Tramites.id and att_p1SurPredio.atributoId=3658');
        $query -> leftJoin('valoresTramite att_p1OrientePredio', 
                            'att_p1OrientePredio.tramiteId=Tramites.id and att_p1OrientePredio.atributoId=3659');
        $query -> leftJoin('valoresTramite att_p1PonientePredio', 
                            'att_p1PonientePredio.tramiteId=Tramites.id and att_p1PonientePredio.atributoId=3660');
        $query -> leftJoin('valoresTramite att_p1PlantaBajaConstruida', 
                            'att_p1PlantaBajaConstruida.tramiteId=Tramites.id and att_p1PlantaBajaConstruida.atributoId=3661');
        $query -> leftJoin('valoresTramite att_p1PlantaAltaConstruida', 
                            'att_p1PlantaAltaConstruida.tramiteId=Tramites.id and att_p1PlantaAltaConstruida.atributoId=3662');
        $query -> leftJoin('valoresTramite att_p1OtrosConstruida', 
                            'att_p1OtrosConstruida.tramiteId=Tramites.id and att_p1OtrosConstruida.atributoId=3663');
        $query -> leftJoin('valoresTramite att_p1TotalConstruida', 
                            'att_p1TotalConstruida.tramiteId=Tramites.id and att_p1TotalConstruida.atributoId=3664');
        $query -> leftJoin('valoresTramite att_p1PlantaBajaXConstruir', 
                            'att_p1PlantaBajaXConstruir.tramiteId=Tramites.id and att_p1PlantaBajaXConstruir.atributoId=3665');
        $query -> leftJoin('valoresTramite att_p1PlantaAltaXConstruir', 
                            'att_p1PlantaAltaXConstruir.tramiteId=Tramites.id and att_p1PlantaAltaXConstruir.atributoId=3666');
        $query -> leftJoin('valoresTramite att_p1OtrosXConstruir', 
                            'att_p1OtrosXConstruir.tramiteId=Tramites.id and att_p1OtrosXConstruir.atributoId=3667');
        $query -> leftJoin('valoresTramite att_p1TotalXConstruir', 
                            'att_p1TotalXConstruir.tramiteId=Tramites.id and att_p1TotalXConstruir.atributoId=3668');
        $query -> leftJoin('valoresTramite att_p1UsoActual', 
                            'att_p1UsoActual.tramiteId=Tramites.id and att_p1UsoActual.atributoId=3669');
        $query -> leftJoin('valoresTramite att_p1UsoSolicitado', 
                            'att_p1UsoSolicitado.tramiteId=Tramites.id and att_p1UsoSolicitado.atributoId=3670');
        $query -> leftJoin('valoresTramite att_p1Cajones', 
                            'att_p1Cajones.tramiteId=Tramites.id and att_p1Cajones.atributoId=3672');
        $query -> leftJoin('valoresTramite att_p1Observaciones', 
                            'att_p1Observaciones.tramiteId=Tramites.id and att_p1Observaciones.atributoId=3673');
        $query -> leftJoin('valoresTramite att_p2PlanoAutorizado', 
                            'att_p2PlanoAutorizado.tramiteId=Tramites.id and att_p2PlanoAutorizado.atributoId=3679');
        $query -> leftJoin('valoresTramite att_p2Licencia', 
                            'att_p2Licencia.tramiteId=Tramites.id and att_p2Licencia.atributoId=3680');
        $query -> leftJoin('valoresTramite att_p2Pago', 
                            'att_p2Pago.tramiteId=Tramites.id and att_p2Pago.atributoId=3681');
        $query -> leftJoin('valoresTramite att_p2Vitacora', 
                            'att_p2Vitacora.tramiteId=Tramites.id and att_p2Vitacora.atributoId=3682');
        $query -> leftJoin('valoresTramite att_p4Resolutivo', 
                            'att_p4Resolutivo.tramiteId=Tramites.id and att_p4Resolutivo.atributoId=3692');
        $query -> leftJoin('valoresTramite att_p3Supervision', 
                            'att_p3Supervision.tramiteId=Tramites.id and att_p3Supervision.atributoId=3693');
        $query -> leftJoin('valoresTramite att_p3NombreSupervisor', 
                            'att_p3NombreSupervisor.tramiteId=Tramites.id and att_p3NombreSupervisor.atributoId=3694');
        $query -> leftJoin('valoresTramite att_p3Observaciones', 
                            'att_p3Observaciones.tramiteId=Tramites.id and att_p3Observaciones.atributoId=3695');
        $query -> leftJoin('valoresTramite att_p3Expediente', 
                            'att_p3Expediente.tramiteId=Tramites.id and att_p3Expediente.atributoId=3696');
        $query -> leftJoin('valoresTramite att_p5PlanoAutorizado', 
                            'att_p5PlanoAutorizado.tramiteId=Tramites.id and att_p5PlanoAutorizado.atributoId=3697');
        $query -> leftJoin('valoresTramite att_p5Licencia', 
                            'att_p5Licencia.tramiteId=Tramites.id and att_p5Licencia.atributoId=3698');
        $query -> leftJoin('valoresTramite att_p5Pago', 
                            'att_p5Pago.tramiteId=Tramites.id and att_p5Pago.atributoId=3699');
        $query -> leftJoin('valoresTramite att_p5Vitacora', 
                            'att_p5Vitacora.tramiteId=Tramites.id and att_p5Vitacora.atributoId=3700');
        $query -> leftJoin('valoresTramite att_p5Expediente', 
                            'att_p5Expediente.tramiteId=Tramites.id and att_p5Expediente.atributoId=3701');
        $query -> leftJoin('valoresTramite att_p6Certificado', 
                            'att_p6Certificado.tramiteId=Tramites.id and att_p6Certificado.atributoId=3702');
        $query -> leftJoin('valoresTramite att_p7EnvioExpediente', 
                            'att_p7EnvioExpediente.tramiteId=Tramites.id and att_p7EnvioExpediente.atributoId=3703');
        $query -> leftJoin('valoresTramite att_p7Observaciones', 
                            'att_p7Observaciones.tramiteId=Tramites.id and att_p7Observaciones.atributoId=3704');
        
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
            'att_p1PlantaBajaConstruida' => $this->p1PlantaBajaConstruida,
            'att_p1PlantaAltaConstruida' => $this->p1PlantaAltaConstruida,
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
            ->andFilterWhere(['like', 'att_p1UsoActual.valor', $this->p1UsoActual])
            ->andFilterWhere(['like', 'att_p1UsoSolicitado.valor', $this->p1UsoSolicitado])
            ->andFilterWhere(['like', 'att_p1Cajones.valor', $this->p1Cajones])
            ->andFilterWhere(['like', 'att_p1Observaciones.valor', $this->p1Observaciones])
            ->andFilterWhere(['like', 'att_p2PlanoAutorizado.valor', $this->p2PlanoAutorizado])
            ->andFilterWhere(['like', 'att_p2Licencia.valor', $this->p2Licencia])
            ->andFilterWhere(['like', 'att_p2Pago.valor', $this->p2Pago])
            ->andFilterWhere(['like', 'att_p2Vitacora.valor', $this->p2Vitacora])
            ->andFilterWhere(['like', 'att_p4Resolutivo.valor', $this->p4Resolutivo])
            ->andFilterWhere(['like', 'att_p3Supervision.valor', $this->p3Supervision])
            ->andFilterWhere(['like', 'att_p3NombreSupervisor.valor', $this->p3NombreSupervisor])
            ->andFilterWhere(['like', 'att_p3Observaciones.valor', $this->p3Observaciones])
            ->andFilterWhere(['like', 'att_p3Expediente.valor', $this->p3Expediente])
            ->andFilterWhere(['like', 'att_p5PlanoAutorizado.valor', $this->p5PlanoAutorizado])
            ->andFilterWhere(['like', 'att_p5Licencia.valor', $this->p5Licencia])
            ->andFilterWhere(['like', 'att_p5Pago.valor', $this->p5Pago])
            ->andFilterWhere(['like', 'att_p5Vitacora.valor', $this->p5Vitacora])
            ->andFilterWhere(['like', 'att_p5Expediente.valor', $this->p5Expediente])
            ->andFilterWhere(['like', 'att_p6Certificado.valor', $this->p6Certificado])
            ->andFilterWhere(['like', 'att_p7EnvioExpediente.valor', $this->p7EnvioExpediente])
            ->andFilterWhere(['like', 'att_p7Observaciones.valor', $this->p7Observaciones]);

        return $dataProvider;
    }
}
