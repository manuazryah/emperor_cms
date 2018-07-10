<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Download;

/**
 * DownloadSearch represents the model behind the search form about `common\models\Download`.
 */
class DownloadSearch extends Download {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id', 'CB', 'UB', 'status'], 'integer'],
            [['title', 'image', 'image_alt', 'file', 'DOC', 'DOU'], 'safe'],
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
        $query = Download::find();

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
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
                ->andFilterWhere(['like', 'image', $this->image])
                ->andFilterWhere(['like', 'image_alt', $this->image_alt])
                ->andFilterWhere(['like', 'file', $this->file]);

        return $dataProvider;
    }

}
