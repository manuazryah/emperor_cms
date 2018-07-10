<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ports".
 *
 * @property int $id
 * @property string $emirates
 * @property string $ports
 * @property string $image
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 * @property int $status
 */
class Ports extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ports';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['emirates', 'ports'], 'required'],
            [['ports'], 'string'],
            [['CB', 'UB', 'status'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['emirates'], 'string', 'max' => 200],
            [['image'], 'required', 'on' => 'create'],
            [['image'], 'file', 'extensions' => 'jpg, gif, png,jpeg'],
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
            'emirates' => 'Emirates',
            'ports' => 'Ports',
            'image' => 'Image',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }
}
