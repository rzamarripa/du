<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Entregable;

/**
 * EntregableSearch represents the model behind the search form about `app\models\Entregable`.
 */
class EntregableSearch extends Entregable
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId'], 'integer'],
            [['nombre', 'direccion', 'imprimirLicencia'], 'safe'],
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
        $query = Entregable::find();

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
                            'att_nombre.tramiteId=Tramites.id and att_nombre.atributoId=45');
        $query -> leftJoin('valoresTramite att_direccion', 
                            'att_direccion.tramiteId=Tramites.id and att_direccion.atributoId=46');
        $query -> leftJoin('valoresTramite att_imprimirLicencia', 
                            'att_imprimirLicencia.tramiteId=Tramites.id and att_imprimirLicencia.atributoId=47');
        
        $query->andFilterWhere([
            'id' => $this->id,
            'pasoActualId' => $this->pasoActualId,
            'tipoTramiteId' => $this->tipoDeTramite(),
        ]);

        $query->andFilterWhere(['like', 'att_nombre.valor', $this->nombre])
            ->andFilterWhere(['like', 'att_direccion.valor', $this->direccion])
            ->andFilterWhere(['like', 'att_imprimirLicencia.valor', $this->imprimirLicencia]);

        return $dataProvider;
    }
}
