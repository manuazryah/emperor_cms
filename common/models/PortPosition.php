<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "port_position".
 *
 * @property int $id
 * @property string $title
 * @property string $file
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 * @property int $status
 */
class PortPosition extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'port_position';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['title'], 'required'],
            [['CB', 'UB', 'status'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['title'], 'string', 'max' => 200],
//            [['file'], 'string', 'max' => 20],
            [['file'], 'required', 'on' => 'create'],
            [['file'], 'file', 'extensions' => 'pdf'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'file' => 'File',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }

    public static function fileName($title_, $model) {
        if ($title_ !== $model->title) {
            $path = Yii::getAlias('@paths') . '/port-position/' . $model->id;
            rename($path . '/' . $title_ . '.' . $model->file, $path . '/' . $model->title . '.' . $model->file);
        }
    }

}
