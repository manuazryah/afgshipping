<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vehicle_attachements".
 *
 * @property int $id
 * @property string $attachement
 * @property string $created_at
 * @property int $vehicle_id
 *
 * @property Vehicle $vehicle
 */
class VehicleAttachements extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vehicle_attachements';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at'], 'safe'],
            [['vehicle_id'], 'required'],
            [['vehicle_id'], 'integer'],
            [['attachement'], 'string', 'max' => 45],
            [['vehicle_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vehicle::className(), 'targetAttribute' => ['vehicle_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'attachement' => 'Attachement',
            'created_at' => 'Created At',
            'vehicle_id' => 'Vehicle ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicle()
    {
        return $this->hasOne(Vehicle::className(), ['id' => 'vehicle_id']);
    }
}
