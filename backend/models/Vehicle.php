<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vehicle".
 *
 * @property int $id
 * @property string $model
 * @property string $make
 * @property string $hat
 * @property string $weight
 * @property string $value
 * @property string $buyer_no
 * @property string $towed_from
 * @property string $lot_no
 * @property string $towed_amount
 * @property string $storage_amount
 * @property int $cheque_no
 * @property int $add_chgs
 * @property string $vin
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 * @property int $status_id
 * @property string $year
 *
 * @property CustomerTowingInfo[] $customerTowingInfos
 * @property TitleInfo[] $titleInfos
 * @property VechicleCondition[] $vechicleConditions
 * @property VehiceCheckOptions[] $vehiceCheckOptions
 * @property Status $status
 * @property VehicleAttachements[] $vehicleAttachements
 */
class Vehicle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vehicle';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['model', 'make', 'hat', 'weight', 'value', 'status_id', 'year'], 'required'],
            [['cheque_no', 'add_chgs', 'status_id'], 'integer'],
            [['created_at', 'updated_at', 'year'], 'safe'],
            [['model', 'make', 'hat', 'weight', 'value', 'buyer_no', 'towed_from', 'lot_no', 'towed_amount', 'storage_amount', 'vin', 'created_by'], 'string', 'max' => 45],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model' => 'Model',
            'make' => 'Maker',
            'hat' => 'Hat',
            'weight' => 'Weight',
            'value' => 'Value',
            'buyer_no' => 'Buyer No',
            'towed_from' => 'Towed From',
            'lot_no' => 'Lot No',
            'towed_amount' => 'Towed Amount',
            'storage_amount' => 'Storage Amount',
            'cheque_no' => 'Cheque No',
            'add_chgs' => 'Add Chgs',
            'vin' => 'Vin',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'status_id' => 'Status ID',
            'year' => 'Year',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerTowingInfos()
    {
        return $this->hasMany(CustomerTowingInfo::className(), ['vehicle_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTitleInfos()
    {
        return $this->hasMany(TitleInfo::className(), ['vehicle_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVechicleConditions()
    {
        return $this->hasMany(VechicleCondition::className(), ['vehicle_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehiceCheckOptions()
    {
        return $this->hasMany(VehiceCheckOptions::className(), ['vehicle_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicleAttachements()
    {
        return $this->hasMany(VehicleAttachements::className(), ['vehicle_id' => 'id']);
    }
}
