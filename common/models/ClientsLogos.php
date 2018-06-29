<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\web\UploadedFile;

/**
 * This is the model class for table "xclients_logos".
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $url
 * @property string $file
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property ClientsCategories $category
 */
class ClientsLogos extends \yii\db\ActiveRecord
{

    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 1;

    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'xclients_logos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'name'], 'required'],
            [['category_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['name', 'url', 'file'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => ClientsCategories::className(), 'targetAttribute' => ['category_id' => 'id']],

            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // if you're using datetime instead of UNIX timestamp:
                // 'value' => new Expression('NOW()'),
            ],
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
            'url' => 'Url',
            'file' => 'Imágen',
            'imageFile' => 'Imágen',
            'status' => 'Status',
            'created_at' => 'Creado En',
            'updated_at' => 'Actualizado En',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $url = Yii::getAlias('@frontend') . '/web/images/clients/';

            $name = str_replace(' ', '-', $this->name);
            $name = strtolower($name);
            $name = $name . '.' . $this->imageFile->extension;

            $this->imageFile->saveAs($url . $name);
            $this->file = $name;

            return true;
        } else {
            return false;
        }
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(ClientsCategories::className(), ['id' => 'category_id']);
    }
}
