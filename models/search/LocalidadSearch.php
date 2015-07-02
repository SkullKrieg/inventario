<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Localidad;

/**
 * LocalidadSearch represents the model behind the search form about `app\models\Localidad`.
 */
class LocalidadSearch extends Localidad
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['localidad_id', 'municipio_id'], 'integer'],
            [['localidad_nombre'], 'safe'],
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
        $query = Localidad::find();

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
            'localidad_id' => $this->localidad_id,
            'municipio_id' => $this->municipio_id,
        ]);

        $query->andFilterWhere(['like', 'localidad_nombre', $this->localidad_nombre]);

        return $dataProvider;
    }
}
