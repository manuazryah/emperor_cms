<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use common\components\FeaturesWidget;
use common\components\TestimonialWidget;
?>
<div class="page-banner-area about-banner">
    <div class="container">
        <div class="title-command-wrapper">
            <h1 class="title">About Us</h1>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="<?= Yii::$app->homeUrl ?>">Home</a></li>
                    <li class="breadcrumb-item"><a class="breadcrumb-active">About</a></li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div id="content" class="ptop50 about-page">
    <div class="welcome">
        <div class="sec-1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 mbtm25">
                        <div class="sec-heading">
                            <h2 style="font-family: 'Philosopher', sans-serif;"><?= $about->title ?></h2>
                            <span class="sub-head"><?= $about->sub_title ?></span>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <img width="540" height="303" src="<?= Yii::$app->homeUrl . 'uploads/about/' . $about->id . '/image.' . $about->image ?>" class="img-fluid about-rit-img" alt=""/>
                        <?= $about->content ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 blue">
                        <h6 class="heading">OUR VISION</h6>
                        <p><?= $about->vision ?></p>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 red" style="z-index: 1;">
                        <h6 class="heading">OUR MISSION</h6>
                        <p><?= $about->mission ?></p>
                        <!--                    <ul class="list">
                                                <li><i class="slz-icon fa fa-angle-right"></i><span class="text">Duis aute irure dolor in reprehenderit dolore in.</span></li>
                                                <li><i class="slz-icon fa fa-angle-right"></i><span class="text">Ut enim ad minim veniam, quis nostrud exercitation.</span></li>
                                                <li><i class="slz-icon fa fa-angle-right"></i><span class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse.</span></li>
                                            </ul>-->                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!--    <? FeaturesWidget::widget() ?>
    <? TestimonialWidget::widget() ?>-->




</div>

