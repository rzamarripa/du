<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InformacionDocumentos;

/**
 * EmpleadoSearch represents the model behind the search form about `app\models\Empleado`.
 */
class InformacionDocumentosSearch extends InformacionDocumentos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'estatus_did', 'estatus_aid'], 'integer'],
            [['nombresolicitante', 'direccionsolicitante', 'telefonosolicitante', 'correosolicitante', 'callepredio', 'coloniapredio', 'numerooficialpredio', 'numerointeriorpredio', 'pobladopredio', 'sindicaturapredio', 'clavecatastralpredio', 'nombrepropietario', 'direccionpropietario', 'telefonopropietario', 'correopropietario', 'observaciones'], 'safe'],
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
        $query = InformacionDocumentos::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'estatus_did' => $this->estatus_did,
            'estatus_aid' => $this->estatus_aid,
        ]);

        $query->andFilterWhere(['like', 'nombresolicitante', $this->NombreSolicitante])
            ->andFilterWhere(['like', 'direccionsolicitante', $this->DireccionSolicitante])
            ->andFilterWhere(['like', 'telefonosolicitante', $this->TelefonoSolicitante])
            ->andFilterWhere(['like', 'correosolicitante', $this->CorreoSolicitante])
            ->andFilterWhere(['like', 'callepredio', $this->CallePredio]);
            ->andFilterWhere(['like', 'coloniapredio', $this->ColoniaPredio]);
            ->andFilterWhere(['like', 'numerooficialpredio', $this->NumeroOficialPredio]);
            ->andFilterWhere(['like', 'numerointeriorpredio', $this->NumeroInteriorPredio]);
            ->andFilterWhere(['like', 'pobladopredio', $this->PobladoPredio]);
            ->andFilterWhere(['like', 'sindicaturapredio', $this->SindicaturaPredio]);
            ->andFilterWhere(['like', 'clavecatastralpredio', $this->ClaveCatastralPredio]);
            ->andFilterWhere(['like', 'nombrepropietario', $this->NombrePropietario]);
            ->andFilterWhere(['like', 'direccionpropietario', $this->DireccionPropietario]);
            ->andFilterWhere(['like', 'telefonopropietario', $this->TelefonoPropietario]);
            ->andFilterWhere(['like', 'correopropietario', $this->CorreoPropietario]);
            ->andFilterWhere(['like', 'observaciones', $this->Observaciones]);


        return $dataProvider;
    }
}
