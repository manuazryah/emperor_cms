<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "career_applications".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $position
 * @property string $portfolio_url
 * @property string $cv
 * @property string $message
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class CareerApplications extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'career_applications';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name','email', 'position','phone','message','cv'], 'required'],
            [['id', 'status', 'CB', 'UB'], 'integer'],
            [['message'], 'string'],
            [['email'], 'email'],
            [['phone'], 'number'],
            [['DOC', 'DOU'], 'safe'],
            [['name', 'cv'], 'string', 'max' => 100],
            [['email', 'position', 'portfolio_url'], 'string', 'max' => 200],
            [['phone'], 'string', 'max' => 25],
            [['cv'], 'file','extensions' => 'doc, docx, pdf', 'wrongExtension'=>'{extensions} files only'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'position' => 'Position',
            'portfolio_url' => 'Portfolio Url',
            'cv' => 'Cv',
            'message' => 'Message',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
