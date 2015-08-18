<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LicUsoSuelo;

/**
 * LicUsoSueloSearch represents the model behind the search form about `app\models\LicUsoSuelo`.
 */
class LicUsoSueloSearch extends LicUsoSuelo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId'], 'integer'],
            [['nombre', 'direccion', 'telefono', 'calle', 'colonia', 'loteNo', 'manzanaNo', 'claveCatastral', 'usoActual', 'usoSolicitado', 'cajonesEstacionamiento', 'pBConstruida', 'pAConstruida', 'otrosConstruida', 'totalConstruida', 'pBPorConstruir', 'pAPorConstruir', 'otrosPorConstruir', 'totalPorConstruir', 'observaciones', 'solicitud', 'escrituras', 'requisitosTotales', 'solicitudCorrecta', 'documentosCorrectos', 'pago', 'imprimirLicencia'], 'safe'],
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
        $query = LicUsoSuelo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query -> leftJoin('valoresTramite att_nombre', 
                            'att_nombre.tramiteId=Tramites.id and att_nombre.atributoId=18');
        $query -> leftJoin('valoresTramite att_direccion', 
                            'att_direccion.tramiteId=Tramites.id and att_direccion.atributoId=19');
        $query -> leftJoin('valoresTramite att_telefono', 
                            'att_telefono.tramiteId=Tramites.id and att_telefono.atributoId=20');
        $query -> leftJoin('valoresTramite att_calle', 
                            'att_calle.tramiteId=Tramites.id and att_calle.atributoId=21');
        $query -> leftJoin('valoresTramite att_colonia', 
                            'att_colonia.tramiteId=Tramites.id and att_colonia.atributoId=22');
        $query -> leftJoin('valoresTramite att_loteNo', 
                            'att_loteNo.tramiteId=Tramites.id and att_loteNo.atributoId=23');
        $query -> leftJoin('valoresTramite att_manzanaNo', 
                            'att_manzanaNo.tramiteId=Tramites.id and att_manzanaNo.atributoId=24');
        $query -> leftJoin('valoresTramite att_claveCatastral', 
                            'att_claveCatastral.tramiteId=Tramites.id and att_claveCatastral.atributoId=25');
        $query -> leftJoin('valoresTramite att_usoActual', 
                            'att_usoActual.tramiteId=Tramites.id and att_usoActual.atributoId=26');
        $query -> leftJoin('valoresTramite att_usoSolicitado', 
                            'att_usoSolicitado.tramiteId=Tramites.id and att_usoSolicitado.atributoId=27');
        $query -> leftJoin('valoresTramite att_cajonesEstacionamiento', 
                            'att_cajonesEstacionamiento.tramiteId=Tramites.id and att_cajonesEstacionamiento.atributoId=28');
        $query -> leftJoin('valoresTramite att_pBConstruida', 
                            'att_pBConstruida.tramiteId=Tramites.id and att_pBConstruida.atributoId=29');
        $query -> leftJoin('valoresTramite att_pAConstruida', 
                            'att_pAConstruida.tramiteId=Tramites.id and att_pAConstruida.atributoId=30');
        $query -> leftJoin('valoresTramite att_otrosConstruida', 
                            'att_otrosConstruida.tramiteId=Tramites.id and att_otrosConstruida.atributoId=31');
        $query -> leftJoin('valoresTramite att_totalConstruida', 
                            'att_totalConstruida.tramiteId=Tramites.id and att_totalConstruida.atributoId=32');
        $query -> leftJoin('valoresTramite att_pBPorConstruir', 
                            'att_pBPorConstruir.tramiteId=Tramites.id and att_pBPorConstruir.atributoId=33');
        $query -> leftJoin('valoresTramite att_pAPorConstruir', 
                            'att_pAPorConstruir.tramiteId=Tramites.id and att_pAPorConstruir.atributoId=34');
        $query -> leftJoin('valoresTramite att_otrosPorConstruir', 
                            'att_otrosPorConstruir.tramiteId=Tramites.id and att_otrosPorConstruir.atributoId=35');
        $query -> leftJoin('valoresTramite att_totalPorConstruir', 
                            'att_totalPorConstruir.tramiteId=Tramites.id and att_totalPorConstruir.atributoId=36');
        $query -> leftJoin('valoresTramite att_observaciones', 
                            'att_observaciones.tramiteId=Tramites.id and att_observaciones.atributoId=37');
        $query -> leftJoin('valoresTramite att_solicitud', 
                            'att_solicitud.tramiteId=Tramites.id and att_solicitud.atributoId=38');
        $query -> leftJoin('valoresTramite att_escrituras', 
                            'att_escrituras.tramiteId=Tramites.id and att_escrituras.atributoId=39');
        $query -> leftJoin('valoresTramite att_requisitosTotales', 
                            'att_requisitosTotales.tramiteId=Tramites.id and att_requisitosTotales.atributoId=40');
        $query -> leftJoin('valoresTramite att_solicitudCorrecta', 
                            'att_solicitudCorrecta.tramiteId=Tramites.id and att_solicitudCorrecta.atributoId=41');
        $query -> leftJoin('valoresTramite att_documentosCorrectos', 
                            'att_documentosCorrectos.tramiteId=Tramites.id and att_documentosCorrectos.atributoId=42');
        $query -> leftJoin('valoresTramite att_pago', 
                            'att_pago.tramiteId=Tramites.id and att_pago.atributoId=43');
        $query -> leftJoin('valoresTramite att_imprimirLicencia', 
                            'att_imprimirLicencia.tramiteId=Tramites.id and att_imprimirLicencia.atributoId=44');
        
        $query->andFilterWhere([
            'id' => $this->id,
            'pasoActualId' => $this->pasoActualId,
            'tipoTramiteId' => $this->tipoDeTramite(),
        ]);

        $query->andFilterWhere(['like', 'att_nombre.valor', $this->nombre])
            ->andFilterWhere(['like', 'att_direccion.valor', $this->direccion])
            ->andFilterWhere(['like', 'att_telefono.valor', $this->telefono])
            ->andFilterWhere(['like', 'att_calle.valor', $this->calle])
            ->andFilterWhere(['like', 'att_colonia.valor', $this->colonia])
            ->andFilterWhere(['like', 'att_loteNo.valor', $this->loteNo])
            ->andFilterWhere(['like', 'att_manzanaNo.valor', $this->manzanaNo])
            ->andFilterWhere(['like', 'att_claveCatastral.valor', $this->claveCatastral])
            ->andFilterWhere(['like', 'att_usoActual.valor', $this->usoActual])
            ->andFilterWhere(['like', 'att_usoSolicitado.valor', $this->usoSolicitado])
            ->andFilterWhere(['like', 'att_cajonesEstacionamiento.valor', $this->cajonesEstacionamiento])
            ->andFilterWhere(['like', 'att_pBConstruida.valor', $this->pBConstruida])
            ->andFilterWhere(['like', 'att_pAConstruida.valor', $this->pAConstruida])
            ->andFilterWhere(['like', 'att_otrosConstruida.valor', $this->otrosConstruida])
            ->andFilterWhere(['like', 'att_totalConstruida.valor', $this->totalConstruida])
            ->andFilterWhere(['like', 'att_pBPorConstruir.valor', $this->pBPorConstruir])
            ->andFilterWhere(['like', 'att_pAPorConstruir.valor', $this->pAPorConstruir])
            ->andFilterWhere(['like', 'att_otrosPorConstruir.valor', $this->otrosPorConstruir])
            ->andFilterWhere(['like', 'att_totalPorConstruir.valor', $this->totalPorConstruir])
            ->andFilterWhere(['like', 'att_observaciones.valor', $this->observaciones])
            ->andFilterWhere(['like', 'att_solicitud.valor', $this->solicitud])
            ->andFilterWhere(['like', 'att_escrituras.valor', $this->escrituras])
            ->andFilterWhere(['like', 'att_requisitosTotales.valor', $this->requisitosTotales])
            ->andFilterWhere(['like', 'att_solicitudCorrecta.valor', $this->solicitudCorrecta])
            ->andFilterWhere(['like', 'att_documentosCorrectos.valor', $this->documentosCorrectos])
            ->andFilterWhere(['like', 'att_pago.valor', $this->pago])
            ->andFilterWhere(['like', 'att_imprimirLicencia.valor', $this->imprimirLicencia]);

        return $dataProvider;
    }
}
