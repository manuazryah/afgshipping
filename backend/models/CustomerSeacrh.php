<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Customers;

/**
 * CustomerSeacrh represents the model behind the search form of `app\models\Customers`.
 */
class CustomerSeacrh extends Customers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['name', 'email', 'phone_usa', 'trn_usq', 'address1', 'country', 'state', 'other_emails', 'upload_documents', 'company_name', 'phone_uae', 'trn_uae', 'address2', 'city', 'zipcode', 'notes', 'created_at'], 'safe'],
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
        $query = Customers::find();

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
            'created_at' => $this->created_at,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone_usa', $this->phone_usa])
            ->andFilterWhere(['like', 'trn_usq', $this->trn_usq])
            ->andFilterWhere(['like', 'address1', $this->address1])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'other_emails', $this->other_emails])
            ->andFilterWhere(['like', 'upload_documents', $this->upload_documents])
            ->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'phone_uae', $this->phone_uae])
            ->andFilterWhere(['like', 'trn_uae', $this->trn_uae])
            ->andFilterWhere(['like', 'address2', $this->address2])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'zipcode', $this->zipcode])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
