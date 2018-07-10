<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "footer_content".
 *
 * @property int $id
 * @property string $content
 * @property string $week_days
 * @property string $work_time1
 * @property string $off_days
 * @property string $work_time2
 * @property int $UB
 * @property string $DOU
 */
class FooterContent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'footer_content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'required'],
            [['content'], 'string'],
            [['UB'], 'integer'],
            [['DOU'], 'safe'],
//            [['week_days', 'work_time1', 'off_days', 'work_time2'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'week_days' => 'Week Days',
            'work_time1' => 'Work Time1',
            'off_days' => 'Off Days',
            'work_time2' => 'Work Time2',
            'UB' => 'Ub',
            'DOU' => 'Dou',
        ];
    }
}
