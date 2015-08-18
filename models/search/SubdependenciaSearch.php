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
    public $dependenciaName;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subdependencia_id', 'dependencia_id'], 'integer'],
            [['subdependencia_nombre'], 'safe'],
            [['dependenciaName'], 'safe'],
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

        $dataProvider->setSort([
                'attributes' => [
                    'subdependencia_nombre',
                    'dependenciaName' => [
                        'asc'=>['dependencia.dependencia_nombre'=>SORT_ASC],
                        'desc'=>['dependencia.dependencia_nombre'=>SORT_DESC],
                        'label' => 'dependencia',
                    ],
                ]

            ]);

        $this->load($params);

        if (!$this->validate()) {
            $query->joinWith('dependencia');
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'subdependencia_id' => $this->subdependencia_id,
            'dependencia_id' => $this->dependencia_id,
        ]);

        $query->andFilterWhere(['like', 'subdependencia_nombre', $this->subdependencia_nombre]);
        $query->andFilterWhere(['like', 'dependencia_id', $this->dependencia_id]);

        $query->joinWith(['dependencia'=> function ($q)
            {
                if(empty($this->dependenciaName))
                $q->where('dependencia.dependencia_nombre LIKE "%' .
                    $this->dependenciaName . '%"');
            }
        ]);


        return $dataProvider;
    }
}
