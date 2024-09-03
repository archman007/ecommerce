<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cats;

/**
 * lk1 represents the model behind the search form of `app\models\Cats`.
 */
class lk1 extends Cats
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idlk1'], 'integer'],
            [['cat', 'ddes'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Cats::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idlk1' => $this->idlk1,
        ]);

        $query->andFilterWhere(['like', 'cat', $this->cat])
            ->andFilterWhere(['like', 'ddes', $this->ddes]);

        return $dataProvider;
    }
}
