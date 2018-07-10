<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "home_content".
 *
 * @property int $id
 * @property string $about_content
 * @property string $image
 * @property string $service_content
 * @property int $UB
 * @property int $DOU
 * @property int $status
 */
class HomeContent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'home_content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['about_content',  'service_content'], 'required'],
            [['about_content', 'service_content'], 'string'],
            [['UB', 'status'], 'integer'],
//            [['image'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'about_content' => 'About Content',
            'image' => 'Image',
            'service_content' => 'Service Content',
            'UB' => 'Ub',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }
}
