<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "consignee".
 *
 * @property int $id
 * @property string $consignee_name
 * @property int $consignee_id
 * @property string $address1
 * @property string $city
 * @property string $country
 * @property string $phone
 * @property string $address2
 * @property string $state
 * @property string $zipcode
 * @property int $customers_id
 *
 * @property Customers $customers
 */
class Consignee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'consignee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
			[['consignee_name', 'address1', 'city', 'country', 'phone'], 'required'],
            [['consignee_id', 'customers_id'], 'integer'],
            [['customers_id'], 'required'],
            [['consignee_name', 'address1', 'city', 'country', 'phone', 'address2', 'state', 'zipcode'], 'string', 'max' => 45],
            [['customers_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customers::className(), 'targetAttribute' => ['customers_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'consignee_name' => 'Consignee Name',
            'consignee_id' => 'Search Consignee',
            'address1' => 'Consignee Address One',
            'city' => 'City',
            'country' => 'Country',
            'phone' => 'Phone',
            'address2' => 'Consignee Address Two',
            'state' => 'State',
            'zipcode' => 'Zipcode',
            'customers_id' => 'Customers',
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
	public function getList()
	{
		return ArrayHelper::map(self::find()->select('id, name')->all());
	}
		
}
