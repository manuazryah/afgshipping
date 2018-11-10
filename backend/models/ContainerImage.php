<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "container_image".
 *
 * @property int $id
 * @property string $name
 * @property int $export_id
 *
 * @property Export $export
 */
class ContainerImage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'container_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['export_id'], 'required'],
            [['export_id'], 'integer'],
            [['name'], 'string', 'max' => 80],
            [['export_id'], 'exist', 'skipOnError' => true, 'targetClass' => Export::className(), 'targetAttribute' => ['export_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'export_id' => 'Export ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExport()
    {
        return $this->hasOne(Export::className(), ['id' => 'export_id']);
    }
}
