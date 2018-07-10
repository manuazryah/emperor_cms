<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "content_management".
 *
 * @property int $id
 * @property string $page
 * @property string $title
 * @property string $image
 * @property string $content
 * @property int $CB
 * @property int $UB
 * @property string $DOU
 * @property int $status
 */
class ContentManagement extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'content_management';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page'], 'required'],
            [['content'], 'string'],
            [['UB', 'status'], 'integer'],
            [['DOU'], 'safe'],
            [['page', 'title'], 'string', 'max' => 200],
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
            'page' => 'Page',
            'title' => 'Title',
            'image' => 'Image',
            'content' => 'Content',
            'CB' => 'CB',
            'DOC' => 'DOC',
            'UB' => 'Ub',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }
}
