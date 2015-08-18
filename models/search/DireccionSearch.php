<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Direccion;

/**
 * DireccionSearch represents the model behind the search form about `app\models\Direccion`.
 */
class DireccionSearch extends Direccion
{
    public $subdependenciaName;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['direccion_id', 'subdependencia_id'], 'integer'],
            [['direccion_nombre'], 'safe'],
            [['subdependenciaName'], 'safe'],
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
        $query = Direccion::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->setSort([
                'attributes'=>[
                    'direccion_nombre',
                    'subdependenciaName'=>[
                        'asc'=>['subdependencia.subdependencia_nombre'=>SORT_ASC],
                        'desc'=>['subdependencia.subdependencia_nombre'=>SORT_DESC],
                        'label'=>'Subdependencia'

                    ],
                ]
            ]);

        $this->load($params);

        if (!$this->validate()) {
            $query->joinWith('subdependencia');
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'direccion_id' => $this->direccion_id,
            'subdependencia_id' => $this->subdependencia_id,
        ]);

        $query->andFilterWhere(['like', 'direccion_nombre', $this->direccion_nombre]);
        $query->andFilterWhere(['like', 'subdependencia_id', $this->subdependencia_id]);

        $query->joinWith(['subdependencia'=>function ($q) 
        {
            if(!empty($this->subdependenciaName))
            $q->where('subdependencia.subdependencia_nombre LIKE "%' . 
            $this->subdependenciaName . '%"');
        }]);

        return $dataProvider;
    }
}
