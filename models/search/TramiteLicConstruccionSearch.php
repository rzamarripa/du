<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TramiteLicConstruccion;

/**
 * TramiteLicConstruccionSearch represents the model behind the search form about `app\models\TramiteLicConstruccion`.
 */
class TramiteLicConstruccionSearch extends TramiteLicConstruccion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId'], 'integer'],
            [['nombre', 'direccion', 'edad', 'telefono', 'correo'], 'safe'],
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
        $query = TramiteLicConstruccion::find();

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
            'pasoActualId' => $this->pasoActualId,
            'tipoTramiteId' => $this->tipoTramiteId,
        ]);

        $query -> leftJoin('valoresTramite att_nombre', 'att_nombre.tramiteId=Tramites.id and att_nombre.atributoId=1');
        $query -> leftJoin('valoresTramite att_direccion', 'att_direccion.tramiteId=Tramites.id and att_direccion.atributoId=2');
        $query -> leftJoin('valoresTramite att_edad', 'att_edad.tramiteId=Tramites.id and att_edad.atributoId=3');
        $query->andFilterWhere(['like', 'att_nombre.valor', $this->nombre])
            ->andFilterWhere(['like', 'att_direccion.valor', $this->direccion])
            ->andFilterWhere(['like', 'att_edad.valor', $this->edad]);
            //->andFilterWhere(['like', 'telefono', $this->telefono])
            //->andFilterWhere(['like', 'correo', $this->correo]);

        return $dataProvider;
    }
}
