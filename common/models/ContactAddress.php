<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact_address".
 *
 * @property int $id
 * @property string $city
 * @property string $landmark
 * @property string $phone1
 * @property string $phone2
 * @property string $phone_uae
 * @property string $email
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
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
                [['phone1', 'phone2', 'phone_uae', 'city', 'landmark', 'email'], 'required'],
                [['status', 'CB', 'UB'], 'integer'],
                [['DOC', 'DOU'], 'safe'],
                [['email'], 'email'],
                [['city', 'landmark', 'email'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'city' => 'City',
            'landmark' => 'Landmark',
            'phone1' => 'Phone1',
            'phone2' => 'Phone2',
            'phone_uae' => 'Phone Uae',
            'email' => 'Email',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }

}
