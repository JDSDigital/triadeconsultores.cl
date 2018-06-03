<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "xgallery_images".
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $file
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Categories $category
 */
class Images extends \yii\db\ActiveRecord
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 1;
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'xgallery_images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'name', 'file', 'created_at', 'updated_at'], 'required'],
            [['category_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['name', 'file'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Categoría',
            'name' => 'Nombre',
            'file' => 'Archivo',
            'status' => 'Estado',
            'created_at' => 'Creado En',
            'updated_at' => 'Actualizado En',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }
}
