<?php

use yii\helpers\Html;

$action = Yii::$app->controller->action->id;
?>
<section id="features">
    <div class="container">
        <?php if ($action === 'index') { ?>
            <div class="sec-heading">
                <h2>Features</h2>
                <span class="sub-head">Our features and skills</span>
            </div>
        <?php } ?>
        <div class="features-boxes">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="icon-box">
                        <div class="icon-cell">
                            <div class="wrapper-icon-image"> <img src="<?= Yii::$app->homeUrl ?>/images/icons/house263.png" alt="" class="slz-icon-img">
                                <div class="icon-circle"></div>
                            </div>
                        </div>
                        <div class="content-cell">
                            <div class="wrapper-info">
                                <div class="title icon_box_title-1"><?= $featured1->title ?></div>
                                <div class="description icon_box_description-1"><?= $featured1->content ?></div>
                                <!--<a href="" class="slz-btn icon-box-button-1"> <span class="text">To Read</span> <span class="icons fa fa-angle-double-right"></span> </a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="icon-box">
                        <div class="icon-cell">
                            <div class="wrapper-icon-image"> <img src="images/icons/home-feature2.png" alt="" class="slz-icon-img">
                                <div class="icon-circle"></div>
                            </div>
                        </div>
                        <div class="content-cell">
                            <div class="wrapper-info">
                                <div class="title icon_box_title-1"><?= $featured2->title ?></div>
                                <div class="description icon_box_description-1"><?= $featured2->content ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="icon-box">
                        <div class="icon-cell">
                            <div class="wrapper-icon-image"> <img src="images/icons/home-feature3.png" alt="" class="slz-icon-img">
                                <div class="icon-circle"></div>
                            </div>
                        </div>
                        <div class="content-cell">
                            <div class="wrapper-info">
                                <div class="title icon_box_title-1"><?= $featured3->title ?></div>
                                <div class="description icon_box_description-1"><?= $featured3->content ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="icon-box">
                        <div class="icon-cell">
                            <div class="wrapper-icon-image"> <img src="images/icons/home-feature4.png" alt="" class="slz-icon-img">
                                <div class="icon-circle"></div>
                            </div>
                        </div>
                        <div class="content-cell">
                            <div class="wrapper-info">
                                <div class="title icon_box_title-1"><?= $featured4->title ?></div>
                                <div class="description icon_box_description-1"><?= $featured4->content ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

