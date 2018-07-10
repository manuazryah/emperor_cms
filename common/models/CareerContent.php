<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "career_content".
 *
 * @property int $id
 * @property string $title
 * @property int $content
 * @property string $image
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class CareerContent extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'career_content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['content','title'], 'required'],
            [['id', 'status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU', 'content'], 'safe'],
            [['title', 'image'], 'string', 'max' => 100],
//            [['image'], 'required', 'on' => 'create'],
            [['image'], 'file', 'extensions' => 'jpg, png,jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'image' => 'Image',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }

}
