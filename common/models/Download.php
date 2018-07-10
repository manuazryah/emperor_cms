<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "download".
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $file
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 * @property int $status
 */
class Download extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'download';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['CB', 'UB', 'status'], 'integer'],
            [['image_alt','DOC', 'DOU'], 'safe'],
            [['title'], 'string', 'max' => 200],
            [['image', 'file'], 'required', 'on' => 'create'],
            [['image'], 'file', 'extensions' => 'jpg, gif, png,jpeg'],
            [['file'], 'file', 'extensions' => 'pdf'],
//            [['image', 'file'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'image' => 'Image',
            'image_alt' => 'Image Alt',
            'file' => 'File',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }
}
