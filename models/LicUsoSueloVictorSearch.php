<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LicUsoSueloVictor;

/**
 * LicUsoSueloVictorSearch represents the model behind the search form about `app\models\LicUsoSueloVictor`.
 */
class LicUsoSueloVictorSearch extends LicUsoSueloVictor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId', 'estatusId'], 'integer'],
            [['fechaCreacion', 'fechaModificacion', 'observaciones', 'nombre', 'direccion', 'p2DictamenImpactoAmbiental'], 'safe'],
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
        $query = LicUsoSueloVictor::find();

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
                            'att_nombre.tramiteId=Tramites.id and att_nombre.atributoId=1129');
        $query -> leftJoin('valoresTramite att_direccion', 
                            'att_direccion.tramiteId=Tramites.id and att_direccion.atributoId=1130');
        $query -> leftJoin('valoresTramite att_p2DictamenImpactoAmbiental', 
                            'att_p2DictamenImpactoAmbiental.tramiteId=Tramites.id and att_p2DictamenImpactoAmbiental.atributoId=1131');
        
        $query->andFilterWhere([
            'id' => $this->id,
            'pasoActualId' => $this->pasoActualId,
            'tipoTramiteId' => $this->tipoDeTramite(),
            'att_fechaCreacion' => $this->fechaCreacion,
            'att_fechaModificacion' => $this->fechaModificacion,
            'att_estatusId' => $this->estatusId,
        ]);

        $query->andFilterWhere(['like', 'att_observaciones.valor', $this->observaciones])
            ->andFilterWhere(['like', 'att_nombre.valor', $this->nombre])
            ->andFilterWhere(['like', 'att_direccion.valor', $this->direccion])
            ->andFilterWhere(['like', 'att_p2DictamenImpactoAmbiental.valor', $this->p2DictamenImpactoAmbiental]);

        return $dataProvider;
    }
}
