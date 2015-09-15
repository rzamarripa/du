<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LicZama;

/**
 * LicZamaSearch represents the model behind the search form about `app\models\LicZama`.
 */
class LicZamaSearch extends LicZama
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pasoActualId', 'tipoTramiteId'], 'integer'],
            [['Nombre', 'Apellidos', 'Cvecatastral', 'escrituras', 'imprmirLicencia'], 'safe'],
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
        $query = LicZama::find();

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
                            'att_Nombre.tramiteId=Tramites.id and att_Nombre.atributoId=8');
        $query -> leftJoin('valoresTramite att_Apellidos', 
                            'att_Apellidos.tramiteId=Tramites.id and att_Apellidos.atributoId=9');
        $query -> leftJoin('valoresTramite att_Cvecatastral', 
                            'att_Cvecatastral.tramiteId=Tramites.id and att_Cvecatastral.atributoId=10');
        $query -> leftJoin('valoresTramite att_escrituras', 
                            'att_escrituras.tramiteId=Tramites.id and att_escrituras.atributoId=11');
        $query -> leftJoin('valoresTramite att_imprmirLicencia', 
                            'att_imprmirLicencia.tramiteId=Tramites.id and att_imprmirLicencia.atributoId=12');
        
        $query->andFilterWhere([
            'id' => $this->id,
            'pasoActualId' => $this->pasoActualId,
            'tipoTramiteId' => $this->tipoDeTramite(),
        ]);

        $query->andFilterWhere(['like', 'att_Nombre.valor', $this->Nombre])
            ->andFilterWhere(['like', 'att_Apellidos.valor', $this->Apellidos])
            ->andFilterWhere(['like', 'att_Cvecatastral.valor', $this->Cvecatastral])
            ->andFilterWhere(['like', 'att_escrituras.valor', $this->escrituras])
            ->andFilterWhere(['like', 'att_imprmirLicencia.valor', $this->imprmirLicencia]);

        return $dataProvider;
    }
}
