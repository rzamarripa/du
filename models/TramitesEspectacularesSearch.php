<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TramitesEspectaculares;

/**
 * TramitesEspectacularesSearch represents the model behind the search form about `app\models\TramitesEspectaculares`.
 */
class TramitesEspectacularesSearch extends TramitesEspectaculares
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId', 'estatusId'], 'integer'],
            [['fechaCreacion', 'fechaModificacion', 'observaciones', 'p1NoOficio', 'p1Fecha', 'p1Dirigido', 'p1Relacion', 'p1Firma', 'p2Memoria', 'p2Poliza', 'p2Propiedad', 'p2PagoImpuesto', 'p2CartaAutorizacion', 'p2CartaCompromiso', 'p2LicenciaConstruccion', 'p2AutorizacionProteccionCivil', 'p3Memoria', 'p3Poliza', 'p3Propiedad', 'p3PagoImpuesto', 'p3CartaAutorizacion', 'p3CartaCompromiso', 'p3LicenciaConstruccion', 'p3AutorizacionProteccionCivil', 'p4ReciboPago', 'p5Supervisor', 'p5Observaciones', 'p6Permiso', 'p4Anuncio', 'p4Superficie', 'p4Evento', 'p4Medidas', 'p4Cantidad', 'p4Ubicacion', 'p4Propietario', 'p4Año', 'p4Observaciones'], 'safe'],
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
        $query = TramitesEspectaculares::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query -> leftJoin('valoresTramite att_p1NoOficio', 
                            'att_p1NoOficio.tramiteId=Tramites.id and att_p1NoOficio.atributoId=1363');
        $query -> leftJoin('valoresTramite att_p1Fecha', 
                            'att_p1Fecha.tramiteId=Tramites.id and att_p1Fecha.atributoId=1364');
        $query -> leftJoin('valoresTramite att_p1Dirigido', 
                            'att_p1Dirigido.tramiteId=Tramites.id and att_p1Dirigido.atributoId=1365');
        $query -> leftJoin('valoresTramite att_p1Relacion', 
                            'att_p1Relacion.tramiteId=Tramites.id and att_p1Relacion.atributoId=1366');
        $query -> leftJoin('valoresTramite att_p1Firma', 
                            'att_p1Firma.tramiteId=Tramites.id and att_p1Firma.atributoId=1367');
        $query -> leftJoin('valoresTramite att_p2Memoria', 
                            'att_p2Memoria.tramiteId=Tramites.id and att_p2Memoria.atributoId=1368');
        $query -> leftJoin('valoresTramite att_p2Poliza', 
                            'att_p2Poliza.tramiteId=Tramites.id and att_p2Poliza.atributoId=1369');
        $query -> leftJoin('valoresTramite att_p2Propiedad', 
                            'att_p2Propiedad.tramiteId=Tramites.id and att_p2Propiedad.atributoId=1370');
        $query -> leftJoin('valoresTramite att_p2PagoImpuesto', 
                            'att_p2PagoImpuesto.tramiteId=Tramites.id and att_p2PagoImpuesto.atributoId=1371');
        $query -> leftJoin('valoresTramite att_p2CartaAutorizacion', 
                            'att_p2CartaAutorizacion.tramiteId=Tramites.id and att_p2CartaAutorizacion.atributoId=1372');
        $query -> leftJoin('valoresTramite att_p2CartaCompromiso', 
                            'att_p2CartaCompromiso.tramiteId=Tramites.id and att_p2CartaCompromiso.atributoId=1373');
        $query -> leftJoin('valoresTramite att_p2LicenciaConstruccion', 
                            'att_p2LicenciaConstruccion.tramiteId=Tramites.id and att_p2LicenciaConstruccion.atributoId=1374');
        $query -> leftJoin('valoresTramite att_p2AutorizacionProteccionCivil', 
                            'att_p2AutorizacionProteccionCivil.tramiteId=Tramites.id and att_p2AutorizacionProteccionCivil.atributoId=1375');
        $query -> leftJoin('valoresTramite att_p3Memoria', 
                            'att_p3Memoria.tramiteId=Tramites.id and att_p3Memoria.atributoId=1376');
        $query -> leftJoin('valoresTramite att_p3Poliza', 
                            'att_p3Poliza.tramiteId=Tramites.id and att_p3Poliza.atributoId=1377');
        $query -> leftJoin('valoresTramite att_p3Propiedad', 
                            'att_p3Propiedad.tramiteId=Tramites.id and att_p3Propiedad.atributoId=1378');
        $query -> leftJoin('valoresTramite att_p3PagoImpuesto', 
                            'att_p3PagoImpuesto.tramiteId=Tramites.id and att_p3PagoImpuesto.atributoId=1379');
        $query -> leftJoin('valoresTramite att_p3CartaAutorizacion', 
                            'att_p3CartaAutorizacion.tramiteId=Tramites.id and att_p3CartaAutorizacion.atributoId=1380');
        $query -> leftJoin('valoresTramite att_p3CartaCompromiso', 
                            'att_p3CartaCompromiso.tramiteId=Tramites.id and att_p3CartaCompromiso.atributoId=1381');
        $query -> leftJoin('valoresTramite att_p3LicenciaConstruccion', 
                            'att_p3LicenciaConstruccion.tramiteId=Tramites.id and att_p3LicenciaConstruccion.atributoId=1382');
        $query -> leftJoin('valoresTramite att_p3AutorizacionProteccionCivil', 
                            'att_p3AutorizacionProteccionCivil.tramiteId=Tramites.id and att_p3AutorizacionProteccionCivil.atributoId=1383');
        $query -> leftJoin('valoresTramite att_p4ReciboPago', 
                            'att_p4ReciboPago.tramiteId=Tramites.id and att_p4ReciboPago.atributoId=1384');
        $query -> leftJoin('valoresTramite att_p5Supervisor', 
                            'att_p5Supervisor.tramiteId=Tramites.id and att_p5Supervisor.atributoId=1385');
        $query -> leftJoin('valoresTramite att_p5Observaciones', 
                            'att_p5Observaciones.tramiteId=Tramites.id and att_p5Observaciones.atributoId=1386');
        $query -> leftJoin('valoresTramite att_p6Permiso', 
                            'att_p6Permiso.tramiteId=Tramites.id and att_p6Permiso.atributoId=1387');
        $query -> leftJoin('valoresTramite att_p4Anuncio', 
                            'att_p4Anuncio.tramiteId=Tramites.id and att_p4Anuncio.atributoId=1408');
        $query -> leftJoin('valoresTramite att_p4Superficie', 
                            'att_p4Superficie.tramiteId=Tramites.id and att_p4Superficie.atributoId=1409');
        $query -> leftJoin('valoresTramite att_p4Evento', 
                            'att_p4Evento.tramiteId=Tramites.id and att_p4Evento.atributoId=1411');
        $query -> leftJoin('valoresTramite att_p4Medidas', 
                            'att_p4Medidas.tramiteId=Tramites.id and att_p4Medidas.atributoId=1412');
        $query -> leftJoin('valoresTramite att_p4Cantidad', 
                            'att_p4Cantidad.tramiteId=Tramites.id and att_p4Cantidad.atributoId=1413');
        $query -> leftJoin('valoresTramite att_p4Ubicacion', 
                            'att_p4Ubicacion.tramiteId=Tramites.id and att_p4Ubicacion.atributoId=1414');
        $query -> leftJoin('valoresTramite att_p4Propietario', 
                            'att_p4Propietario.tramiteId=Tramites.id and att_p4Propietario.atributoId=1415');
        $query -> leftJoin('valoresTramite att_p4Año', 
                            'att_p4Año.tramiteId=Tramites.id and att_p4Año.atributoId=1416');
        $query -> leftJoin('valoresTramite att_p4Observaciones', 
                            'att_p4Observaciones.tramiteId=Tramites.id and att_p4Observaciones.atributoId=1417');
        
        $query->andFilterWhere([
            'id' => $this->id,
            'pasoActualId' => $this->pasoActualId,
            'tipoTramiteId' => $this->tipoDeTramite(),
            'att_fechaCreacion' => $this->fechaCreacion,
            'att_fechaModificacion' => $this->fechaModificacion,
            'att_estatusId' => $this->estatusId,
            'att_p1Fecha' => $this->p1Fecha,
            'att_p4Año' => $this->p4Año,
        ]);

        $query->andFilterWhere(['like', 'att_observaciones.valor', $this->observaciones])
            ->andFilterWhere(['like', 'att_p1NoOficio.valor', $this->p1NoOficio])
            ->andFilterWhere(['like', 'att_p1Dirigido.valor', $this->p1Dirigido])
            ->andFilterWhere(['like', 'att_p1Relacion.valor', $this->p1Relacion])
            ->andFilterWhere(['like', 'att_p1Firma.valor', $this->p1Firma])
            ->andFilterWhere(['like', 'att_p2Memoria.valor', $this->p2Memoria])
            ->andFilterWhere(['like', 'att_p2Poliza.valor', $this->p2Poliza])
            ->andFilterWhere(['like', 'att_p2Propiedad.valor', $this->p2Propiedad])
            ->andFilterWhere(['like', 'att_p2PagoImpuesto.valor', $this->p2PagoImpuesto])
            ->andFilterWhere(['like', 'att_p2CartaAutorizacion.valor', $this->p2CartaAutorizacion])
            ->andFilterWhere(['like', 'att_p2CartaCompromiso.valor', $this->p2CartaCompromiso])
            ->andFilterWhere(['like', 'att_p2LicenciaConstruccion.valor', $this->p2LicenciaConstruccion])
            ->andFilterWhere(['like', 'att_p2AutorizacionProteccionCivil.valor', $this->p2AutorizacionProteccionCivil])
            ->andFilterWhere(['like', 'att_p3Memoria.valor', $this->p3Memoria])
            ->andFilterWhere(['like', 'att_p3Poliza.valor', $this->p3Poliza])
            ->andFilterWhere(['like', 'att_p3Propiedad.valor', $this->p3Propiedad])
            ->andFilterWhere(['like', 'att_p3PagoImpuesto.valor', $this->p3PagoImpuesto])
            ->andFilterWhere(['like', 'att_p3CartaAutorizacion.valor', $this->p3CartaAutorizacion])
            ->andFilterWhere(['like', 'att_p3CartaCompromiso.valor', $this->p3CartaCompromiso])
            ->andFilterWhere(['like', 'att_p3LicenciaConstruccion.valor', $this->p3LicenciaConstruccion])
            ->andFilterWhere(['like', 'att_p3AutorizacionProteccionCivil.valor', $this->p3AutorizacionProteccionCivil])
            ->andFilterWhere(['like', 'att_p4ReciboPago.valor', $this->p4ReciboPago])
            ->andFilterWhere(['like', 'att_p5Supervisor.valor', $this->p5Supervisor])
            ->andFilterWhere(['like', 'att_p5Observaciones.valor', $this->p5Observaciones])
            ->andFilterWhere(['like', 'att_p6Permiso.valor', $this->p6Permiso])
            ->andFilterWhere(['like', 'att_p4Anuncio.valor', $this->p4Anuncio])
            ->andFilterWhere(['like', 'att_p4Superficie.valor', $this->p4Superficie])
            ->andFilterWhere(['like', 'att_p4Evento.valor', $this->p4Evento])
            ->andFilterWhere(['like', 'att_p4Medidas.valor', $this->p4Medidas])
            ->andFilterWhere(['like', 'att_p4Cantidad.valor', $this->p4Cantidad])
            ->andFilterWhere(['like', 'att_p4Ubicacion.valor', $this->p4Ubicacion])
            ->andFilterWhere(['like', 'att_p4Propietario.valor', $this->p4Propietario])
            ->andFilterWhere(['like', 'att_p4Observaciones.valor', $this->p4Observaciones]);

        return $dataProvider;
    }
}
