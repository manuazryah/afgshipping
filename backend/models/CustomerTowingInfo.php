<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer_towing_info".
 *
 * @property int $id
 * @property string $customer_address
 * @property string $condition
 * @property string $damaged
 * @property string $pictures
 * @property string $towed
 * @property string $keys
 * @property string $created_at
 * @property int $customers_id
 * @property int $vehicle_id
 *
 * @property Customers $customers
 * @property Vehicle $vehicle
 */
class CustomerTowingInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer_towing_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['condition', 'damaged', 'pictures', 'towed', 'keys'], 'string'],
            [['created_at'], 'safe'],
            [['customers_id', 'vehicle_id'], 'required'],
            [['customers_id', 'vehicle_id'], 'integer'],
            [['customer_address'], 'string', 'max' => 45],
            [['customers_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customers::className(), 'targetAttribute' => ['customers_id' => 'id']],
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
            'customer_address' => 'Customer Address',
            'condition' => 'Condition',
            'damaged' => 'Damaged',
            'pictures' => 'Pictures',
            'towed' => 'Towed',
            'keys' => 'Keys',
            'created_at' => 'Created At',
            'customers_id' => 'Customers ID',
            'vehicle_id' => 'Vehicle ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasOne(Customers::className(), ['id' => 'customers_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicle()
    {
        return $this->hasOne(Vehicle::className(), ['id' => 'vehicle_id']);
    }
}
