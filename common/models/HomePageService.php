<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "home_page_service".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $link
 * @property int $UB
 * @property string $DOU
 * @property int $status
 */
class HomePageService extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'home_page_service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['title', 'content', 'link'], 'required'],
            [['UB', 'status'], 'integer'],
            [['DOU'], 'safe'],
            [['title', 'content', 'link'], 'string', 'max' => 200],
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
            'link' => 'Link',
            'UB' => 'Ub',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }

}
