<?php

namespace app\models;
use yii\helpers\ArrayHelper;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone_usa
 * @property string $trn_usq
 * @property string $address1
 * @property string $country
 * @property string $state
 * @property string $other_emails
 * @property string $upload_documents
 * @property string $company_name
 * @property string $phone_uae
 * @property string $trn_uae
 * @property string $address2
 * @property string $city
 * @property string $zipcode
 * @property string $notes
 * @property string $created_at
 * @property int $status
 *
 * @property Consignee[] $consignees
 * @property CustomerTowingInfo[] $customerTowingInfos
 */
class Customers extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'customers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
                [['name', 'phone_usa', 'trn_usq', 'country', 'state'], 'required'],
                [['address1', 'other_emails', 'address2', 'notes'], 'string'],
                [['created_at'], 'safe'],
                [['upload_documents'], 'file', 'skipOnEmpty' => true, 'extensions' => 'doc, docx, pdf,txt',
                'maxFiles' => 4],
                [['status', 'phone_usa', 'phone_uae'], 'integer'],
                [['name', 'trn_usq', 'country', 'state', 'company_name', 'trn_uae', 'city', 'zipcode'], 'string', 'max' => 45],
                [['email'], 'email'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone_usa' => 'Phone Usa',
            'trn_usq' => 'Trn Usq',
            'address1' => 'Address1',
            'country' => 'Country',
            'state' => 'State',
            'other_emails' => 'Other Emails',
            'upload_documents' => 'Upload Documents',
            'company_name' => 'Company Name',
            'phone_uae' => 'Phone Uae',
            'trn_uae' => 'Trn Uae',
            'address2' => 'Address2',
            'city' => 'City',
            'zipcode' => 'Zipcode',
            'notes' => 'Notes',
            'created_at' => 'Created At',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConsignees() {
        return $this->hasMany(Consignee::className(), ['customers_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerTowingInfos() {
        return $this->hasMany(CustomerTowingInfo::className(), ['customers_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public static function getList() {
       return ArrayHelper::map(self::find()->select('id, name')->all(),'id','name');
    }
    
}