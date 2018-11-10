<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\VehiceCheckOptions;

/**
 * VehiceCheckOptionsSeacrh represents the model behind the search form of `app\models\VehiceCheckOptions`.
 */
class VehiceCheckOptionsSeacrh extends VehiceCheckOptions
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'keys', 'cd_changer', 'gps_navigation_system', 'spare_tire_jack', 'wheel_covers', 'radio', 'cd_player', 'mirror', 'speaker', 'other', 'vehicle_id'], 'integer'],
            [['created_at'], 'safe'],
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
        $query = VehiceCheckOptions::find();

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
            'keys' => $this->keys,
            'cd_changer' => $this->cd_changer,
            'gps_navigation_system' => $this->gps_navigation_system,
            'spare_tire_jack' => $this->spare_tire_jack,
            'wheel_covers' => $this->wheel_covers,
            'radio' => $this->radio,
            'cd_player' => $this->cd_player,
            'mirror' => $this->mirror,
            'speaker' => $this->speaker,
            'other' => $this->other,
            'created_at' => $this->created_at,
            'vehicle_id' => $this->vehicle_id,
        ]);

        return $dataProvider;
    }
}
