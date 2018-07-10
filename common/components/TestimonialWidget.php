<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AppointmentWidget
 *
 * @author
 * JIthin Wails
 */

namespace common\components;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\web\NotFoundHttpException;
use common\models\Testimonial;

class TestimonialWidget extends Widget {

    public $id;

    public function init() {
        parent::init();
        if ($this->id === null) {
            return '';
        }
    }

    public function run() {
        $testimonials = Testimonial::find()->where(['status' => 1])->orderBy(['id' => SORT_DESC])->all();
        return $this->render('testimonial', [
                    'testimonials' => $testimonials,
        ]);
        //return Html::encode($this->message);
    }

}

?>
