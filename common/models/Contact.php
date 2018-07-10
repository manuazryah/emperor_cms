<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $office1
 * @property string $email1
 * @property string $mobile1
 * @property string $office2
 * @property string $email2
 * @property string $mobile2
 * @property string $office3
 * @property string $email3
 * @property string $mobile3
 * @property string $office4
 * @property string $email4
 * @property string $mobile4
 * @property string $map
 * @property int $UB
 * @property string $DOU
 * @property int $status
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['office1', 'email1', 'mobile1', 'office2', 'email2', 'mobile2', 'office3', 'email3', 'mobile3', 'office4', 'email4', 'mobile4', 'map'], 'required'],
            [['UB', 'status'], 'integer'],
            [['DOU'], 'safe'],
            [['office1', 'email1', 'office2', 'email2', 'office3', 'email3', 'office4', 'email4'], 'string', 'max' => 200],
            [[ 'map'], 'string', 'max' => 400],
            [['mobile1', 'mobile2', 'mobile3', 'mobile4'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'office1' => 'Office1',
            'email1' => 'Email1',
            'mobile1' => 'Mobile1',
            'office2' => 'Office2',
            'email2' => 'Email2',
            'mobile2' => 'Mobile2',
            'office3' => 'Office3',
            'email3' => 'Email3',
            'mobile3' => 'Mobile3',
            'office4' => 'Office4',
            'email4' => 'Email4',
            'mobile4' => 'Mobile4',
            'map' => 'Map',
            'UB' => 'Ub',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }
}
