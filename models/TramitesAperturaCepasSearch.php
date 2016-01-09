<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TramitesAperturaCepas;

/**
 * TramitesAperturaCepasSearch represents the model behind the search form about `app\models\TramitesAperturaCepas`.
 */
class TramitesAperturaCepasSearch extends TramitesAperturaCepas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId', 'estatusId'], 'integer'],
            [['fechaCreacion', 'fechaModificacion', 'observaciones', 'p1Solicitud', 'p1DirectorResponsable', 'p1PlanoTrayectoria', 'p1ProgramaObra', 'p1PresupuestoObra', 'p1AnuenciaVecinos', 'p1Fianza', 'p1Pago', 'p2Supervision', 'p2NombreSupervisor', 'p2Observaciones', 'p2Expediente', 'p3Resolutivo', 'p3Pago', 'p4Solicitud', 'p4DirectorResponsable', 'p4PlanoTrayectoria', 'p4ProgramaObra', 'p4PresupuestoObra', 'p4AnuenciaVecinos', 'p4Fianza', 'p4PagoDerechos', 'p4Expediente', 'p4Pago', 'p4Resolutivo', 'p5AperturasCepas', 'p6EnvioExpediente', 'p6Observaciones'], 'safe'],
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
        $query = TramitesAperturaCepas::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query -> leftJoin('valoresTramite att_p1Solicitud', 
                            'att_p1Solicitud.tramiteId=Tramites.id and att_p1Solicitud.atributoId=3705');
        $query -> leftJoin('valoresTramite att_p1DirectorResponsable', 
                            'att_p1DirectorResponsable.tramiteId=Tramites.id and att_p1DirectorResponsable.atributoId=3706');
        $query -> leftJoin('valoresTramite att_p1PlanoTrayectoria', 
                            'att_p1PlanoTrayectoria.tramiteId=Tramites.id and att_p1PlanoTrayectoria.atributoId=3707');
        $query -> leftJoin('valoresTramite att_p1ProgramaObra', 
                            'att_p1ProgramaObra.tramiteId=Tramites.id and att_p1ProgramaObra.atributoId=3708');
        $query -> leftJoin('valoresTramite att_p1PresupuestoObra', 
                            'att_p1PresupuestoObra.tramiteId=Tramites.id and att_p1PresupuestoObra.atributoId=3709');
        $query -> leftJoin('valoresTramite att_p1AnuenciaVecinos', 
                            'att_p1AnuenciaVecinos.tramiteId=Tramites.id and att_p1AnuenciaVecinos.atributoId=3710');
        $query -> leftJoin('valoresTramite att_p1Fianza', 
                            'att_p1Fianza.tramiteId=Tramites.id and att_p1Fianza.atributoId=3711');
        $query -> leftJoin('valoresTramite att_p1Pago', 
                            'att_p1Pago.tramiteId=Tramites.id and att_p1Pago.atributoId=3712');
        $query -> leftJoin('valoresTramite att_p2Supervision', 
                            'att_p2Supervision.tramiteId=Tramites.id and att_p2Supervision.atributoId=3713');
        $query -> leftJoin('valoresTramite att_p2NombreSupervisor', 
                            'att_p2NombreSupervisor.tramiteId=Tramites.id and att_p2NombreSupervisor.atributoId=3714');
        $query -> leftJoin('valoresTramite att_p2Observaciones', 
                            'att_p2Observaciones.tramiteId=Tramites.id and att_p2Observaciones.atributoId=3715');
        $query -> leftJoin('valoresTramite att_p2Expediente', 
                            'att_p2Expediente.tramiteId=Tramites.id and att_p2Expediente.atributoId=3716');
        $query -> leftJoin('valoresTramite att_p3Resolutivo', 
                            'att_p3Resolutivo.tramiteId=Tramites.id and att_p3Resolutivo.atributoId=3717');
        $query -> leftJoin('valoresTramite att_p3Pago', 
                            'att_p3Pago.tramiteId=Tramites.id and att_p3Pago.atributoId=3718');
        $query -> leftJoin('valoresTramite att_p4Solicitud', 
                            'att_p4Solicitud.tramiteId=Tramites.id and att_p4Solicitud.atributoId=3719');
        $query -> leftJoin('valoresTramite att_p4DirectorResponsable', 
                            'att_p4DirectorResponsable.tramiteId=Tramites.id and att_p4DirectorResponsable.atributoId=3720');
        $query -> leftJoin('valoresTramite att_p4PlanoTrayectoria', 
                            'att_p4PlanoTrayectoria.tramiteId=Tramites.id and att_p4PlanoTrayectoria.atributoId=3721');
        $query -> leftJoin('valoresTramite att_p4ProgramaObra', 
                            'att_p4ProgramaObra.tramiteId=Tramites.id and att_p4ProgramaObra.atributoId=3722');
        $query -> leftJoin('valoresTramite att_p4PresupuestoObra', 
                            'att_p4PresupuestoObra.tramiteId=Tramites.id and att_p4PresupuestoObra.atributoId=3723');
        $query -> leftJoin('valoresTramite att_p4AnuenciaVecinos', 
                            'att_p4AnuenciaVecinos.tramiteId=Tramites.id and att_p4AnuenciaVecinos.atributoId=3724');
        $query -> leftJoin('valoresTramite att_p4Fianza', 
                            'att_p4Fianza.tramiteId=Tramites.id and att_p4Fianza.atributoId=3725');
        $query -> leftJoin('valoresTramite att_p4PagoDerechos', 
                            'att_p4PagoDerechos.tramiteId=Tramites.id and att_p4PagoDerechos.atributoId=3726');
        $query -> leftJoin('valoresTramite att_p4Expediente', 
                            'att_p4Expediente.tramiteId=Tramites.id and att_p4Expediente.atributoId=3727');
        $query -> leftJoin('valoresTramite att_p4Pago', 
                            'att_p4Pago.tramiteId=Tramites.id and att_p4Pago.atributoId=3728');
        $query -> leftJoin('valoresTramite att_p4Resolutivo', 
                            'att_p4Resolutivo.tramiteId=Tramites.id and att_p4Resolutivo.atributoId=3729');
        $query -> leftJoin('valoresTramite att_p5AperturasCepas', 
                            'att_p5AperturasCepas.tramiteId=Tramites.id and att_p5AperturasCepas.atributoId=3730');
        $query -> leftJoin('valoresTramite att_p6EnvioExpediente', 
                            'att_p6EnvioExpediente.tramiteId=Tramites.id and att_p6EnvioExpediente.atributoId=3731');
        $query -> leftJoin('valoresTramite att_p6Observaciones', 
                            'att_p6Observaciones.tramiteId=Tramites.id and att_p6Observaciones.atributoId=3732');
        
        $query->andFilterWhere([
            'id' => $this->id,
            'pasoActualId' => $this->pasoActualId,
            'tipoTramiteId' => $this->tipoDeTramite(),
            'att_fechaCreacion' => $this->fechaCreacion,
            'att_fechaModificacion' => $this->fechaModificacion,
            'att_estatusId' => $this->estatusId,
        ]);

        $query->andFilterWhere(['like', 'att_observaciones.valor', $this->observaciones])
            ->andFilterWhere(['like', 'att_p1Solicitud.valor', $this->p1Solicitud])
            ->andFilterWhere(['like', 'att_p1DirectorResponsable.valor', $this->p1DirectorResponsable])
            ->andFilterWhere(['like', 'att_p1PlanoTrayectoria.valor', $this->p1PlanoTrayectoria])
            ->andFilterWhere(['like', 'att_p1ProgramaObra.valor', $this->p1ProgramaObra])
            ->andFilterWhere(['like', 'att_p1PresupuestoObra.valor', $this->p1PresupuestoObra])
            ->andFilterWhere(['like', 'att_p1AnuenciaVecinos.valor', $this->p1AnuenciaVecinos])
            ->andFilterWhere(['like', 'att_p1Fianza.valor', $this->p1Fianza])
            ->andFilterWhere(['like', 'att_p1Pago.valor', $this->p1Pago])
            ->andFilterWhere(['like', 'att_p2Supervision.valor', $this->p2Supervision])
            ->andFilterWhere(['like', 'att_p2NombreSupervisor.valor', $this->p2NombreSupervisor])
            ->andFilterWhere(['like', 'att_p2Observaciones.valor', $this->p2Observaciones])
            ->andFilterWhere(['like', 'att_p2Expediente.valor', $this->p2Expediente])
            ->andFilterWhere(['like', 'att_p3Resolutivo.valor', $this->p3Resolutivo])
            ->andFilterWhere(['like', 'att_p3Pago.valor', $this->p3Pago])
            ->andFilterWhere(['like', 'att_p4Solicitud.valor', $this->p4Solicitud])
            ->andFilterWhere(['like', 'att_p4DirectorResponsable.valor', $this->p4DirectorResponsable])
            ->andFilterWhere(['like', 'att_p4PlanoTrayectoria.valor', $this->p4PlanoTrayectoria])
            ->andFilterWhere(['like', 'att_p4ProgramaObra.valor', $this->p4ProgramaObra])
            ->andFilterWhere(['like', 'att_p4PresupuestoObra.valor', $this->p4PresupuestoObra])
            ->andFilterWhere(['like', 'att_p4AnuenciaVecinos.valor', $this->p4AnuenciaVecinos])
            ->andFilterWhere(['like', 'att_p4Fianza.valor', $this->p4Fianza])
            ->andFilterWhere(['like', 'att_p4PagoDerechos.valor', $this->p4PagoDerechos])
            ->andFilterWhere(['like', 'att_p4Expediente.valor', $this->p4Expediente])
            ->andFilterWhere(['like', 'att_p4Pago.valor', $this->p4Pago])
            ->andFilterWhere(['like', 'att_p4Resolutivo.valor', $this->p4Resolutivo])
            ->andFilterWhere(['like', 'att_p5AperturasCepas.valor', $this->p5AperturasCepas])
            ->andFilterWhere(['like', 'att_p6EnvioExpediente.valor', $this->p6EnvioExpediente])
            ->andFilterWhere(['like', 'att_p6Observaciones.valor', $this->p6Observaciones]);

        return $dataProvider;
    }
}
