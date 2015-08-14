<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TramiteZamaJotito;

/**
 * TramiteJotitoSearch represents the model behind the search form about `app\models\TramiteZamaJotito`.
 */
class TramiteJotitoSearch extends TramiteZamaJotito
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId','a', 'b', 'c',], 'integer'],
            [[ 'd', 'e', 'f', 'g', 'h', 'i'], 'safe'],
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
        $query = TramiteZamaJotito::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query -> leftJoin('valoresTramite att_a', 
                            'att_a.tramiteId=Tramites.id and att_a.atributoId=16');
        $query -> leftJoin('valoresTramite att_b', 
                            'att_b.tramiteId=Tramites.id and att_b.atributoId=17');
        $query -> leftJoin('valoresTramite att_c', 
                            'att_c.tramiteId=Tramites.id and att_c.atributoId=18');
        $query -> leftJoin('valoresTramite att_d', 
                            'att_d.tramiteId=Tramites.id and att_d.atributoId=19');
        $query -> leftJoin('valoresTramite att_e', 
                            'att_e.tramiteId=Tramites.id and att_e.atributoId=20');
        $query -> leftJoin('valoresTramite att_f', 
                            'att_f.tramiteId=Tramites.id and att_f.atributoId=21');
        $query -> leftJoin('valoresTramite att_g', 
                            'att_g.tramiteId=Tramites.id and att_g.atributoId=22');
        $query -> leftJoin('valoresTramite att_h', 
                            'att_h.tramiteId=Tramites.id and att_h.atributoId=23');
        $query -> leftJoin('valoresTramite att_i', 
                            'att_i.tramiteId=Tramites.id and att_i.atributoId=24');
        
        $query->andFilterWhere([
            'id' => $this->id,
            'pasoActualId' => $this->pasoActualId,
            'tipoTramiteId' => $this->tipoDeTramite(),
            
        ]);

        $query
            ->andFilterWhere(['like', 'att_d.valor', $this->d])
            ->andFilterWhere(['like', 'att_e.valor', $this->e])
            ->andFilterWhere(['like', 'att_f.valor', $this->f])
            ->andFilterWhere(['like', 'att_g.valor', $this->g])
            ->andFilterWhere(['like', 'att_h.valor', $this->h])
            ->andFilterWhere(['like', 'att_i.valor', $this->i]);

        return $dataProvider;
    }
}
