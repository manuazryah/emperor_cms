<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FooterContent;

/**
 * FooterContentSearch represents the model behind the search form about `common\models\FooterContent`.
 */
class FooterContentSearch extends FooterContent {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id', 'UB'], 'integer'],
            [['content', 'DOU'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
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
    public function search($params) {
        $query = FooterContent::find();

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
            'UB' => $this->UB,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'content', $this->content])
                ->andFilterWhere(['like', 'week_days', $this->week_days])
                ->andFilterWhere(['like', 'work_time1', $this->work_time1])
                ->andFilterWhere(['like', 'off_days', $this->off_days])
                ->andFilterWhere(['like', 'work_time2', $this->work_time2]);

        return $dataProvider;
    }

}
