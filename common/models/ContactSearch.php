<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Contact;

/**
 * ContactSearch represents the model behind the search form about `common\models\Contact`.
 */
class ContactSearch extends Contact
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'UB', 'status'], 'integer'],
            [['office1', 'email1', 'mobile1', 'office2', 'email2', 'mobile2', 'office3', 'email3', 'mobile3', 'office4', 'email4', 'mobile4', 'map', 'DOU'], 'safe'],
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
        $query = Contact::find();

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
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'office1', $this->office1])
            ->andFilterWhere(['like', 'email1', $this->email1])
            ->andFilterWhere(['like', 'mobile1', $this->mobile1])
            ->andFilterWhere(['like', 'office2', $this->office2])
            ->andFilterWhere(['like', 'email2', $this->email2])
            ->andFilterWhere(['like', 'mobile2', $this->mobile2])
            ->andFilterWhere(['like', 'office3', $this->office3])
            ->andFilterWhere(['like', 'email3', $this->email3])
            ->andFilterWhere(['like', 'mobile3', $this->mobile3])
            ->andFilterWhere(['like', 'office4', $this->office4])
            ->andFilterWhere(['like', 'email4', $this->email4])
            ->andFilterWhere(['like', 'mobile4', $this->mobile4])
            ->andFilterWhere(['like', 'map', $this->map]);

        return $dataProvider;
    }
}
