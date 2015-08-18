<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Area;

/**
 * AreaSearch represents the model behind the search form about `app\models\Area`.
 */
class AreaSearch extends Area
{
    public $direccionName;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['area_id', 'direccion_id'], 'integer'],
            [['area_nombre'], 'safe'],
            [['direccionName'], 'safe'],
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
        $query = Area::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->setSort([
                'attributes'=>[
                    'area_nombre',
                    'direccionName'=>[
                        'asc'=>['direccion.direccin_nombre'=>SORT_ASC],
                        'desc'=>['direccion.direccion_nombre'=>SORT_DESC],
                        'label'=>'Direccion'

                    ],
                ]
            ]);

        $this->load($params);

        if (!$this->validate()) {
            $query->joinWith('direccion');

            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'area_id' => $this->area_id,
            'direccion_id' => $this->direccion_id,
        ]);

        $query->andFilterWhere(['like', 'area_nombre', $this->area_nombre]);
        $query->andFilterWhere(['like', 'direccion_id', $this->direccion_id]);


        $query->joinWith(['direccion'=>function ($q) 
        {
            if(!empty($this->subdependenciaName))
            $q->where('direccion.direccion_nombre LIKE "%' . 
            $this->direccionName . '%"');
        }]);

        return $dataProvider;
    }
}
