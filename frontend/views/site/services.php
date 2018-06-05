<?php
/* @var $this yii\web\View */

use common\components\MenuHeaderWidget;
use common\components\ServiceSidemenuWidget;
$this->title = $services->title;
$this->params['breadcrumbs'][] = $this->title;
?>
<!--Page Title-->
<section id="banner" class="page-title services-page-banner" style="background-image:url(../uploads/services/<?= $services->id?>/banner_image/image.<?= $services->banner_image?>);">
    <div class="auto-container">
        <h1>Services</h1>
        <div class="text"></div>
        <!--<div class="text">lorem ipsum dolor sit amet</div>-->
    </div>
    <div class="header-lower">

        <div class="auto-container">
            <div class="nav-outer clearfix">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button id="mobile-menu" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                   <?= MenuHeaderWidget::widget() ?>
                </nav>
                <!-- Main Menu End-->
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->

<div class="kc_clfw"></div>
<section class="kc-elm kc-css-351650 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-593335 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <!--Sidebar Page Container-->
                    <section id="Service"></section>
                    <div class="sidebar-page-container">
                        <div class="auto-container">
                            <div class="row clearfix">
                                <!--Sidebar Side-->
                                <?= ServiceSidemenuWidget::widget() ?>


                                <!--<div id="Oil-Gas-Engineering"></div>-->

                                <!--Content Side-->
                                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                    <div class="solution-single">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="<?= Yii::$app->homeUrl ?>uploads/services/<?= $services->id; ?>/main_image/image.<?= $services->main_image; ?>" alt="" />
                                            </div>
                                            <h2><?= $services->title?></h2>
                                            <div class="text">
                                                <?= $services->content?>
                                                    </div>
                                                </div>


                                    </div> 
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="kc-elm kc-css-810793 kc_row core-values">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <div class="auto-container">
                        <div class="kc-wrap-columns">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="sec-title">
                                    <h2>BUSINESS ASSOCIATIONS</h2>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <img src="<?= yii::$app->homeUrl; ?>images/projects-lftside.jpg" alt="post_img" class="img-responsive">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <ul class="bullet-list ml25">
                                        <li>Abu Dhabi National Oil Company (ADNOC)</li>
                                        <li>ADNOC Gas Processing</li>
                                        <li>ADNOC Offshore</li>
                                        <li>ADNOC Sour Gas</li>
                                        <li>ADNOC Industrial Gases</li>
                                        <li>ADNOC Refining</li>
                                        <li>ADNOC Distribution</li>
                                        <li>TOTAL</li>
                                        <li>Shell</li>
                                        <li>Partex Gas</li>
                                        <li>British Petroleum</li>
                                        <li>DODSAL</li>
                                        <li>Bechtel Corporation</li>
                                        <li>Fluor Corporation</li>
                                        <li>Linde AG</li>
                                        <li>Bauer Group</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <ul class="bullet-list ml25">
                                        <li>Chiyoda Corpration</li>
                                        <li>Bell Energy</li>
                                        <li>TAQA</li>
                                        <li>Engineers India Limited</li>
                                        <li>ONGC</li>
                                        <li>CNPC</li>
                                        <li>Hyundai Engineering</li>
                                        <li>GS Engineering</li>
                                        <li>SK Engineering</li>
                                        <li>Daewoo</li>
                                        <li>Samsung</li>
                                        <li>Toyo</li>
                                        <li>AMEC Foster Wheeler</li>
                                        <li>Jacobs Engineering</li>
                                        <li>Technicas Reunida</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>