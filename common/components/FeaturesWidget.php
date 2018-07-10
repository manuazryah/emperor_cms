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
use common\models\Features;

class FeaturesWidget extends Widget {

    public $id;

    public function init() {
        parent::init();
        if ($this->id === null) {
            return '';
        }
    }

    public function run() {
        $featured1 = Features::findOne(1);
        $featured2 = Features::findOne(2);
        $featured3 = Features::findOne(3);
        $featured4 = Features::findOne(4);
        return $this->render('features', [
                    'featured1' => $featured1,
                    'featured2' => $featured2,
                    'featured3' => $featured3,
                    'featured4' => $featured4,
        ]);
        //return Html::encode($this->message);
    }

}

?>
