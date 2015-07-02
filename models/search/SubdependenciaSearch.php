<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Subdependencia;

/**
 * SubdependenciaSearch represents the model behind the search form about `app\models\Subdependencia`.
 */
class SubdependenciaSearch extends Subdependencia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subdependencia_id', 'dependencia_id'], 'integer'],
            [['subdependencia_nombre'], 'safe'],
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
        $query = Subdependencia::find();

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
            'subdependencia_id' => $this->subdependencia_id,
            'dependencia_id' => $this->dependencia_id,
        ]);

        $query->andFilterWhere(['like', 'subdependencia_nombre', $this->subdependencia_nombre]);

        return $dataProvider;
    }
}
