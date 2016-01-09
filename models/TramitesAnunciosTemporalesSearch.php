<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TramitesAnunciosTemporales;

/**
 * TramitesAnunciosTemporalesSearch represents the model behind the search form about `app\models\TramitesAnunciosTemporales`.
 */
class TramitesAnunciosTemporalesSearch extends TramitesAnunciosTemporales
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId', 'estatusId'], 'integer'],
            [['fechaCreacion', 'fechaModificacion', 'observaciones', 'p1NoOficioTemporal', 'p1FechaTemporal', 'p1DirigidoTemporal', 'p1RelacionTemporal', 'p1FirmaTemporal', 'p2SolicitudTemporal', 'p3SolicitudTemporal', 'p4ReciboPagoTemporal', 'p4FolioTemporal', 'p4EventoTemporal', 'p4CantidadTemporal', 'p4UbicacionTemporal', 'p4EmpresaTemporal', 'p4FechaExpedicionTemporal', 'p4VigenciaPagoTemporal', 'p5SupervisorTemporal', 'p5ObservacionesTemporal', 'p6PermisoTemporal'], 'safe'],
            [['p4MontoPagarTemporal'], 'number'],
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
        $query = TramitesAnunciosTemporales::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query -> leftJoin('valoresTramite att_p1NoOficioTemporal', 
                            'att_p1NoOficioTemporal.tramiteId=Tramites.id and att_p1NoOficioTemporal.atributoId=1388');
        $query -> leftJoin('valoresTramite att_p1FechaTemporal', 
                            'att_p1FechaTemporal.tramiteId=Tramites.id and att_p1FechaTemporal.atributoId=1389');
        $query -> leftJoin('valoresTramite att_p1DirigidoTemporal', 
                            'att_p1DirigidoTemporal.tramiteId=Tramites.id and att_p1DirigidoTemporal.atributoId=1390');
        $query -> leftJoin('valoresTramite att_p1RelacionTemporal', 
                            'att_p1RelacionTemporal.tramiteId=Tramites.id and att_p1RelacionTemporal.atributoId=1391');
        $query -> leftJoin('valoresTramite att_p1FirmaTemporal', 
                            'att_p1FirmaTemporal.tramiteId=Tramites.id and att_p1FirmaTemporal.atributoId=1392');
        $query -> leftJoin('valoresTramite att_p2SolicitudTemporal', 
                            'att_p2SolicitudTemporal.tramiteId=Tramites.id and att_p2SolicitudTemporal.atributoId=1393');
        $query -> leftJoin('valoresTramite att_p3SolicitudTemporal', 
                            'att_p3SolicitudTemporal.tramiteId=Tramites.id and att_p3SolicitudTemporal.atributoId=1394');
        $query -> leftJoin('valoresTramite att_p4ReciboPagoTemporal', 
                            'att_p4ReciboPagoTemporal.tramiteId=Tramites.id and att_p4ReciboPagoTemporal.atributoId=1395');
        $query -> leftJoin('valoresTramite att_p4FolioTemporal', 
                            'att_p4FolioTemporal.tramiteId=Tramites.id and att_p4FolioTemporal.atributoId=1396');
        $query -> leftJoin('valoresTramite att_p4EventoTemporal', 
                            'att_p4EventoTemporal.tramiteId=Tramites.id and att_p4EventoTemporal.atributoId=1397');
        $query -> leftJoin('valoresTramite att_p4CantidadTemporal', 
                            'att_p4CantidadTemporal.tramiteId=Tramites.id and att_p4CantidadTemporal.atributoId=1399');
        $query -> leftJoin('valoresTramite att_p4UbicacionTemporal', 
                            'att_p4UbicacionTemporal.tramiteId=Tramites.id and att_p4UbicacionTemporal.atributoId=1400');
        $query -> leftJoin('valoresTramite att_p4EmpresaTemporal', 
                            'att_p4EmpresaTemporal.tramiteId=Tramites.id and att_p4EmpresaTemporal.atributoId=1401');
        $query -> leftJoin('valoresTramite att_p4FechaExpedicionTemporal', 
                            'att_p4FechaExpedicionTemporal.tramiteId=Tramites.id and att_p4FechaExpedicionTemporal.atributoId=1402');
        $query -> leftJoin('valoresTramite att_p4MontoPagarTemporal', 
                            'att_p4MontoPagarTemporal.tramiteId=Tramites.id and att_p4MontoPagarTemporal.atributoId=1403');
        $query -> leftJoin('valoresTramite att_p4VigenciaPagoTemporal', 
                            'att_p4VigenciaPagoTemporal.tramiteId=Tramites.id and att_p4VigenciaPagoTemporal.atributoId=1404');
        $query -> leftJoin('valoresTramite att_p5SupervisorTemporal', 
                            'att_p5SupervisorTemporal.tramiteId=Tramites.id and att_p5SupervisorTemporal.atributoId=1405');
        $query -> leftJoin('valoresTramite att_p5ObservacionesTemporal', 
                            'att_p5ObservacionesTemporal.tramiteId=Tramites.id and att_p5ObservacionesTemporal.atributoId=1406');
        $query -> leftJoin('valoresTramite att_p6PermisoTemporal', 
                            'att_p6PermisoTemporal.tramiteId=Tramites.id and att_p6PermisoTemporal.atributoId=1407');
        
        $query->andFilterWhere([
            'id' => $this->id,
            'pasoActualId' => $this->pasoActualId,
            'tipoTramiteId' => $this->tipoDeTramite(),
            'att_fechaCreacion' => $this->fechaCreacion,
            'att_fechaModificacion' => $this->fechaModificacion,
            'att_estatusId' => $this->estatusId,
            'att_p1FechaTemporal' => $this->p1FechaTemporal,
            'att_p4FechaExpedicionTemporal' => $this->p4FechaExpedicionTemporal,
            'att_p4MontoPagarTemporal' => $this->p4MontoPagarTemporal,
            'att_p4VigenciaPagoTemporal' => $this->p4VigenciaPagoTemporal,
        ]);

        $query->andFilterWhere(['like', 'att_observaciones.valor', $this->observaciones])
            ->andFilterWhere(['like', 'att_p1NoOficioTemporal.valor', $this->p1NoOficioTemporal])
            ->andFilterWhere(['like', 'att_p1DirigidoTemporal.valor', $this->p1DirigidoTemporal])
            ->andFilterWhere(['like', 'att_p1RelacionTemporal.valor', $this->p1RelacionTemporal])
            ->andFilterWhere(['like', 'att_p1FirmaTemporal.valor', $this->p1FirmaTemporal])
            ->andFilterWhere(['like', 'att_p2SolicitudTemporal.valor', $this->p2SolicitudTemporal])
            ->andFilterWhere(['like', 'att_p3SolicitudTemporal.valor', $this->p3SolicitudTemporal])
            ->andFilterWhere(['like', 'att_p4ReciboPagoTemporal.valor', $this->p4ReciboPagoTemporal])
            ->andFilterWhere(['like', 'att_p4FolioTemporal.valor', $this->p4FolioTemporal])
            ->andFilterWhere(['like', 'att_p4EventoTemporal.valor', $this->p4EventoTemporal])
            ->andFilterWhere(['like', 'att_p4CantidadTemporal.valor', $this->p4CantidadTemporal])
            ->andFilterWhere(['like', 'att_p4UbicacionTemporal.valor', $this->p4UbicacionTemporal])
            ->andFilterWhere(['like', 'att_p4EmpresaTemporal.valor', $this->p4EmpresaTemporal])
            ->andFilterWhere(['like', 'att_p5SupervisorTemporal.valor', $this->p5SupervisorTemporal])
            ->andFilterWhere(['like', 'att_p5ObservacionesTemporal.valor', $this->p5ObservacionesTemporal])
            ->andFilterWhere(['like', 'att_p6PermisoTemporal.valor', $this->p6PermisoTemporal]);

        return $dataProvider;
    }
}
