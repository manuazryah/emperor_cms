<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "features".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $UB
 * @property string $DOU
 * @property int $status
 */
class Features extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'features';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['UB', 'status'], 'integer'],
            [['DOU'], 'safe'],
            [['title', 'content'], 'string', 'max' => 200],
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
            'content' => 'Content',
            'UB' => 'Ub',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }
}
