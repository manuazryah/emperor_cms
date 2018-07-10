<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact_address".
 *
 * @property int $id
 * @property string $title
 * @property string $address
 * @property string $postoffice
 * @property string $mobile
 * @property string $email
 * @property int $CB
 * @property int $UB
 * @property int $DOC
 * @property int $DOU
 * @property int $status
 */
class ContactAddress extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'contact_address';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['title', 'address', 'postoffice', 'mobile', 'email'], 'required'],
            [['email'], 'email'],
            [['CB', 'UB', 'DOC', 'DOU', 'status'], 'integer'],
            [['title', 'address', 'postoffice', 'mobile', 'email'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'address' => 'Address',
            'postoffice' => 'P.O Box - Place',
            'mobile' => 'Mobile',
            'email' => 'Email',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }

}
