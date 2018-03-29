<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Section3;

/**
 * Section3Search represents the model behind the search form of `common\models\Section3`.
 */
class Section3Search extends Section3
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title2', 'title3'], 'integer'],
            [['title1'], 'safe'],
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
        $query = Section3::find();

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
            'title2' => $this->title2,
            'title3' => $this->title3,
        ]);

        $query->andFilterWhere(['like', 'title1', $this->title1]);

        return $dataProvider;
    }
}
