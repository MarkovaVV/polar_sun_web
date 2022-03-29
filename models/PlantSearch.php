<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Plant;

/**
 * PlantSearch represents the model behind the search form of `app\models\Plant`.
 */
class PlantSearch extends Plant
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'latin', 'family', 'place', 'habitat', 'date', 'collector', 'determinate', 'general', 'photo'], 'safe'],
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
        $query = Plant::find();

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
            'id' => $this->id,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'latin', $this->latin])
            ->andFilterWhere(['like', 'family', $this->family])
            ->andFilterWhere(['like', 'place', $this->place])
            ->andFilterWhere(['like', 'habitat', $this->habitat])
            ->andFilterWhere(['like', 'collector', $this->collector])
            ->andFilterWhere(['like', 'determinate', $this->determinate])
            ->andFilterWhere(['like', 'general', $this->general])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
