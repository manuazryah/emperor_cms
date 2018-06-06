<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$action = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="home page-template page-template-tpl-king_composer page-template-tpl-king_composer-php page page-id-7 kingcomposer kc-css-system">
        <?php $this->beginBody() ?>

        <div class="page-wrapper">
            <header class="main-header">

                <!--Header Top-->
                <div class="header-top">
                    <div class="auto-container">
                        <div class="inner-container clearfix">
                            <div class="top-left">
                                <ul class="clearfix">
                                    <li><a href="javascript:;"><span class="icon fa fa-volume-control-phone"></span> Call us: +971 (2) 6737766</a></li>
                                </ul>
                            </div>

                            <div class="top-right clearfix">
                                <ul class="social-icon-one">
                                    <li><a href="Tel:+44-567-890123"><span class="icon fa fa-envelope-o"></span> info@eqec.ae</a></li>
<!--                                    <li><a href="">Solutions</a> <span>:</span></li>
                                    <li><a href="">Products</a> <span>:</span></li>
                                    <li><a href="">News & Events</a> <span>:</span></li>
                                    <li><a href="">Company</a> <span>:</span></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Header-Upper-->
                <div class="header-upper">
                    <div class="auto-container">
                        <div class="clearfix">

                            <div class="pull-left logo-outer">
                                <div class="logo">
                                    <a href="index.php"><img src="<?= Yii::$app->homeUrl; ?>images/logo.png" alt="Equilibriom Logo" title="Equilibrium"></a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!--End Header Upper-->


                <!--Sticky Header-->
                <div class="sticky-header">
                    <div class="auto-container clearfix">
                        <!--Logo-->
                        <div class="logo pull-left">
                            <a href="index.php" class="img-responsive"><img src="<?= Yii::$app->homeUrl; ?>images/logo-small.png" alt="Equilibrium Logo" title="Equilibrium Logo"></a>
                        </div>

                        <!--Right Col-->
                        <div class="right-col pull-right">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button id="navbar-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom <?= $action == 'site/index' ? 'current' : '' ?>">
                                            <?= Html::a('Home', ['/site/index'], ['class' => 'hvr-underline-from-left1']) ?>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page <?= $action == 'site/about' ? 'current' : '' ?>">
                                            <?= Html::a('About Us', ['/site/about'], ['class' => 'hvr-underline-from-left1']) ?>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page <?= $action == 'site/sectors' ? 'current' : '' ?>">
                                            <?= Html::a('Sectors', ['/site/sectors'], ['class' => 'hvr-underline-from-left1']) ?>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page <?= $action == 'site/services' ? 'current' : '' ?>">
                                            <?= Html::a('Services', ['/site/services?service=our-services'], ['class' => 'hvr-underline-from-left1']) ?>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page <?= $action == 'site/careers' ? 'current' : '' ?>">
                                            <?= Html::a('Careers', ['/site/careers'], ['class' => 'hvr-underline-from-left1']) ?>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page <?= $action == 'site/contact' ? 'current' : '' ?>">
                                            <?= Html::a('Contact Us', ['/site/contact'], ['class' => 'hvr-underline-from-left1']) ?>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                        </div>

                    </div>
                </div>
                <!--End Sticky Header-->

            </header>

            <?= $content ?>
            <?php
            if ($action == 'site/index') {
                ?>
                <div id="index-footer">
                <?php }
                ?>
                <section class="kc-elm kc-css-671882 kc_row footer-subscribe">
                    <div class="kc-row-container">
                        <div class="kc-wrap-columns">
                            <div class="kc-elm kc-css-753762 kc_col-sm-12 kc_column kc_col-sm-12">
                                <div class="kc-col-container">
                                    <!--Subscribe Section-->
                                    <section class="subscribe-section">
                                        <div class="auto-container">
                                            <div class="row clearfix">
                                                <div class="title-column col-md-6 col-sm-6 col-xs-12">
                                                    <h2>For More Company Details</h2>
                                                    <div class="text">Submit  your email address here</div>
                                                </div>
                                                <div class="column col-md-6 col-sm-6 col-xs-12">
                                                    <div class="subscribe-form">
                                                        <form method="post" action="mail/subscribe.php">
                                                            <div class="form-group">
                                                                <input type="hidden" id="" name="" value="">
                                                                <input type="email" name="email" value="" placeholder="Your email address" required="">
                                                <button type="submit" name="subscribe" class="theme-btn">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--End subscribe Section-->
                </div>
            </div>
        </div>
    </div>
</section>
                <div class="clearfix"></div>
                <!--Main Footer-->
                <footer class="site-footer">
                    <div class="footer-middle-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="footer-middle-sidebar">
                                        <section id="text-2" class="widget widget_text foot-logo">
                                            <div class="textwidget">
                                                <p><img src="<?= Yii::$app->homeUrl; ?>images/footlogo.png" alt="logo" >
                                                    <br> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage.</p>
                                            </div>
                                        </section>
                <!--                        <section id="zozo_social_widget-2" class="widget zozo_social_widget">
                                            <ul class="nav social-icons social-widget widget-content social-rounded social-white social-h-white social-bg-black social-hbg-own">
                                                <li><a href="#" target="_blank" class="social-fb"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" target="_blank" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" target="_blank" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#" target="_blank" class="social-pinterest"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#" target="_blank" class="social-linkedin"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </section>-->
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="footer-middle-sidebar">
                                        <section id="nav_menu-5" class="widget widget_nav_menu">
                                            <h3 class="widget-title">Sectors & Services</h3>
                                            <div class="menu-services-menu-container">
                                                <ul id="menu-services-menu" class="menu">
                                                    <li id="menu-item-1973" class="menu-item menu-item-type-post_type menu-item-object-mf-service menu-item-1973"><a href="#">Oil & Gas Engineering</a></li>
                                                    <li id="menu-item-1974" class="menu-item menu-item-type-post_type menu-item-object-mf-service menu-item-1974"><a href="#">Petroleum & Chemicals Engineering</a></li>
                                                    <li id="menu-item-1975" class="menu-item menu-item-type-post_type menu-item-object-mf-service menu-item-1975"><a href="#">Nuclear Energy</a></li>
                                                    <li id="menu-item-1976" class="menu-item menu-item-type-post_type menu-item-object-mf-service menu-item-1976"><a href="#">Construction & Project Management</a></li>
                                                    <li id="menu-item-1977" class="menu-item menu-item-type-post_type menu-item-object-mf-service menu-item-1977"><a href="#">Renewable Power Solutions (RPS)</a></li>
                                                    <li id="menu-item-1978" class="menu-item menu-item-type-post_type menu-item-object-mf-service menu-item-1978"><a href="#">Corporate Governce,Sustainibility and Strategic Management.</a></li>
                                                </ul>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="footer-middle-sidebar">
                                        <section id="nav_menu-5" class="widget widget_nav_menu">
                                            <h3 class="widget-title">Social media</h3>
                                            <div class="menu-services-menu-container">
                                                <ul id="menu-services-menu" class="menu social-menu">
                                                    <li><a href="#" target="_blank" class="social-fb"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                    <li><a href="#" target="_blank" class="social-twitter"><i class="fa fa-twitter"></i>Twiter</a></li>
                                                    <li><a href="#" target="_blank" class="social-instagram"><i class="fa fa-instagram"></i>Instagram</a></li>
                                                    <li><a href="#" target="_blank" class="social-pinterest"><i class="fa fa-pinterest"></i>Pintrest</a></li>
                                                    <li><a href="#" target="_blank" class="social-linkedin"><i class="fa fa-linkedin"></i>Linkedin</a></li>
                                                </ul>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="footer-middle-sidebar">
                                        <div id="equlibrium_mailchimp_widget-2" class="widget equlibrium_mailchimp_widget">
                                            <h3 class="widget-title">For More Details</h3>
                                            <form class="newsletter" id="" method="post">
                                                <p class="zozo-mc-subtitle">Submit your email address here.</p>
                                                <p class="mc-aknowlegement" id="zozo-mc-err2"></p>
                                                <input type="hidden" name="" value="">
                                                <input type="hidden" name="" value="">
                                                <input type="hidden" name="" value="Success.">
                                                <input type="hidden" name="" value="Failure.">
                                                <div class="form-group" data-toggle="tooltip" data-placement="top" data-original-title="" title="">
                                                    <input type="text" class="form-control zozo-mc-email" id="zozo-mc-email-2" placeholder="Email Address" name="">
                                                </div>
                                                <input class="zozo-mc btn btn-default btn-block" data-id="2" type="button" name="Sign up" value="Submit">
                                            </form>
                                        </div>
                                        <div id="text-3" class="widget widget_text">
                                            <div class="textwidget">
                                                <p>We don’t do mail to spam &amp; your mail
                                                    <br> id is confidential.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="footer-bottom-inner container">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="footer-bottom-items nav pull-left">
                                        <li class="nav-item">
                                            <div class="nav-item-inner"> © Copyright 2018. All Rights Reserved.</div>
                                        </li>
                                    </ul>
                                    <!--                    <ul class="footer-bottom-items nav pull-right">
                                                            <li class="nav-item">
                                                                <div class="nav-item-inner">
                                                                    <div class="menu-footer-menu-container">
                                                                        <ul id="menu-footer-menu" class="footer-menu">
                                                                            <li id="menu-item-1153" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1153"><a href="#">Home</a></li>
                                                                            <li id="menu-item-1154" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1154"><a href="#">Services</a></li>
                                                                            <li id="menu-item-1155" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1155"><a href="#">Privacy Policy</a></li>
                                                                            <li id="menu-item-1156" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1156"><a href="#">Terms &amp; Condition</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>-->
                                </div>
                            </div>
                        </div>
                    </div> 
                </footer>
                <?php if ($action == 'site/index') { ?>
                        </div>
            <?php }
            ?>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<div class="modal fade offshore-modal-form in" id="modal-1354" tabindex="-1" role="dialog" aria-labelledby="modal-1354-label" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="modal-1354-label">Apply for this Job</h4>
            </div>
            <div class="modal-body">
                <div role="form" class="wpcf7" id="wpcf7-f1332-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="" method="post" class="wpcf7-form" enctype="multipart/form-data" novalidate="novalidate">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="1332">
                            <input type="hidden" name="_wpcf7_version" value="4.8.1">
                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1332-o1">
                            <input type="hidden" name="_wpcf7_container_post" value="0">
                            <input type="hidden" name="_wpcf7_nonce" value="1a47d9a418">
                        </div>
                        <div class="form-group"><span class="wpcf7-form-control-wrap name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Full Name"></span></div>
                        <div class="form-group"><span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Email Address"></span></div>
                        <div class="form-group"><span class="wpcf7-form-control-wrap phone"><input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Phone number"></span></div>
                        <div class="form-group"><span class="wpcf7-form-control-wrap phone"><input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Job Ref"></span></div>
<!--                        <div class="form-group">  <select class="job-ref  form-control" style="height: 48px;" data-style="btn-primary">
                                <option>Job Ref:</option>
                                <option>Oil & Gas</option>
                                <option>Petrolium</option>
                                <option>Relish</option>
                            </select>
                        </div>-->
                        <div id="upload_button">
                            <label>
                                <input type="file" ngf-select ng-model="new_files" ng-change="fs.uploadFiles(new_files)" multiple>
                                <span class="btn btn-primary">Browse CV</span>
                            </label>
                        </div>
                        <!--                        /*******/
                                                <div class="form-group">
                                                    <span class="wpcf7-form-control-wrap resume">
                                                        <input type="file" name="resume" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                                    </span>
                                                </div>
                        /**************************/-->
                        <div id="recaptcha" class="g-recaptcha" style="transform:scale(0.63);-webkit-transform:scale(0.63);transform-origin:0 0;-webkit-transform-origin:0 0;position: absolute;right: -70px;bottom: 65px; margin-bottom: 15px;" data-sitekey="6LcjtVcUAAAAAMe_XLQ118yIBxc6VDUN9NB5xccl"></div>
                        <p><input type="submit" value="Apply" class="wpcf7-form-control wpcf7-submit btn btn-block btn-warning btn-style-three"><span class="ajax-loader"></span></p>
                        <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
            </div>
        </div>
    </div>
</div>
<?php $this->endPage() ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
