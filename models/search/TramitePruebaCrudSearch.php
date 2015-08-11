<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TramitePruebaCrud;

/**
 * TramitePruebaCrudSearch represents the model behind the search form about `app\models\TramitePruebaCrud`.
 */
class TramitePruebaCrudSearch extends TramitePruebaCrud
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId'], 'integer'],
            [['Nombre', 'Apellido', 'Direccion', 'Celular', 'Empresa', 'Puesto', 'Telefono', 'Extension'], 'safe'],
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
        $query = TramitePruebaCrud::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query -> leftJoin('valoresTramite att_Nombre', 
                            'att_Nombre.tramiteId=Tramites.id and att_nombre.atributoId=7');
        $query -> leftJoin('valoresTramite att_Apellido', 
                            'att_Apellido.tramiteId=Tramites.id and att_nombre.atributoId=8');
        $query -> leftJoin('valoresTramite att_Direccion', 
                            'att_Direccion.tramiteId=Tramites.id and att_nombre.atributoId=9');
        $query -> leftJoin('valoresTramite att_Celular', 
                            'att_Celular.tramiteId=Tramites.id and att_nombre.atributoId=10');
        $query -> leftJoin('valoresTramite att_Empresa', 
                            'att_Empresa.tramiteId=Tramites.id and att_nombre.atributoId=11');
        $query -> leftJoin('valoresTramite att_Puesto', 
                            'att_Puesto.tramiteId=Tramites.id and att_nombre.atributoId=12');
        $query -> leftJoin('valoresTramite att_Telefono', 
                            'att_Telefono.tramiteId=Tramites.id and att_nombre.atributoId=13');
        $query -> leftJoin('valoresTramite att_Extension', 
                            'att_Extension.tramiteId=Tramites.id and att_nombre.atributoId=14');
        
        $query->andFilterWhere([
            'id' => $this->id,
            'pasoActualId' => $this->pasoActualId,
            'tipoTramiteId' => $this->tipoDeTramite(),
        ]);

        $query->andFilterWhere(['like', 'att_Nombre.valor', $this->Nombre])
            ->andFilterWhere(['like', 'att_Apellido.valor', $this->Apellido])
            ->andFilterWhere(['like', 'att_Direccion.valor', $this->Direccion])
            ->andFilterWhere(['like', 'att_Celular.valor', $this->Celular])
            ->andFilterWhere(['like', 'att_Empresa.valor', $this->Empresa])
            ->andFilterWhere(['like', 'att_Puesto.valor', $this->Puesto])
            ->andFilterWhere(['like', 'att_Telefono.valor', $this->Telefono])
            ->andFilterWhere(['like', 'att_Extension.valor', $this->Extension]);

        return $dataProvider;
    }
}
