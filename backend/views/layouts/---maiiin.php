<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<html lang="en">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <link rel="shortcut icon" href="<?= yii::$app->homeUrl; ?>images/fav.png" type="image/png" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <script src="<?= Yii::$app->homeUrl; ?>js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript">
            var homeUrl = '<?= Yii::$app->homeUrl; ?>';
        </script>
        <?php $this->head() ?>
    </head>
    <body class="page-body">
        <?php $this->beginBody() ?>


        <nav class="navbar horizontal-menu navbar-fixed-top"><!-- set fixed position by adding class "navbar-fixed-top" -->

            <div class="navbar-inner">

                <!-- Navbar Brand -->
                <div class="navbar-brand">
                    <a href="" class="logo">
                        <img src="<?= Yii::$app->homeUrl ?>images/logo.png" width="200" alt="" class="hidden-xs" />
                        <img src="<?= Yii::$app->homeUrl ?>images/logo.png" width="150" alt="" class="visible-xs" />
                    </a>
                </div>

                <!-- Mobile Toggles Links -->
                <div class="nav navbar-mobile">

                    <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
                    <div class="mobile-menu-toggle">
                        <a href="#" data-toggle="mobile-menu-horizontal">
                            <i class="fa-bars"></i>
                        </a>
                    </div>

                </div>

                <div class="navbar-mobile-clear"></div>

                <ul class="navbar-nav">
                    <li>
                        <?= Html::a('<i class="fa-home"></i> <span class="title">Home</span>', ['/site/home'], ['class' => 'title']) ?>
                    </li>
                    <?php
                    if (Yii::$app->session['post']['admin'] == 1) {
                        ?>
                        <li>
                            <a href="">
                                <i class="fa fa-tachometer"></i>
                                <span class="title">Administration</span>
                            </a>
                            <ul>
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Access Powers', ['/admin/admin-posts/index'], ['class' => 'title']) ?>
                                </li>

                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Admin Users', ['/admin/admin-users/index'], ['class' => 'title']) ?>
                                </li>
                            </ul>
                        </li>
                        <?php
                    }
                    ?>
                    <li>
                        <?= Html::a('<i class="fa fa-sliders"></i> <span class="title">Sliders</span>', ['/cms/slider/index'], ['class' => 'title']) ?>
                    </li>
                    <li>
                        <?= Html::a('<i class="fa fa-sitemap"></i> <span class="title">About Venice Cabs</span>', ['/cms/about/index'], ['class' => 'title']) ?>
                    </li>
                    <li>
                        <?= Html::a('<i class="fa fa-car"></i> <span class="title">Car Packages</span>', ['/cms/tour-packages/car-packages'], ['class' => 'title']) ?>
                    </li>
                    <li>
                        <?= Html::a('<i class="fa fa-bus"></i> <span class="title">Tempo Traveler</span>', ['/cms/tour-packages/tempo-traveler'], ['class' => 'title']) ?>
                    </li>
                    <li>
                        <?= Html::a('<i class="fa fa-cubes"></i> <span class="title">Pilgrimages</span>', ['/cms/pilgrimages/index'], ['class' => 'title']) ?>
                    </li>
                    <li>
                        <?= Html::a('<i class="fa fa-image"></i> <span class="title">Gallery</span>', ['/cms/gallery/index'], ['class' => 'title']) ?>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-ship"></i>
                            <span class="title">House Boat</span>
                        </a>
                        <ul>
                            <li>
                                <?= Html::a('<i class="fa fa-angle-double-right"></i> Package Types', ['/cms/house-boat-package-type/index'], ['class' => 'title']) ?>
                            </li>
                            <li>
                                <?= Html::a('<i class="fa fa-angle-double-right"></i> Boat Package', ['/cms/boat-package/index'], ['class' => 'title']) ?>
                            </li>
                            <li>
                                <?= Html::a('<i class="fa fa-angle-double-right"></i> Exiting Packages', ['/cms/exiting-packages/index'], ['class' => 'title']) ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <?= Html::a('<i class="fa fa-map-marker"></i> <span class="title">Contact Address</span>', ['/cms/contact-address/index'], ['class' => 'title']) ?>
                    </li>
                    <li>
                        <?= Html::a('<i class="fa fa-comments-o"></i> <span class="title">Testimonials</span>', ['/cms/testimonial/index'], ['class' => 'title']) ?>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-bell-slash-o"></i>
                            <span class="title">Terms & Conditions</span>
                        </a>
                        <ul>
                            <li>
                                <?= Html::a('<i class="fa fa-angle-double-right"></i> Car Package', ['/cms/terms-conditions/car-package'], ['class' => 'title']) ?>
                            </li>
                            <li>
                                <?= Html::a('<i class="fa fa-angle-double-right"></i> Traveler Package', ['/cms/terms-conditions/traveler-package'], ['class' => 'title']) ?>
                            </li>
                            <li>
                                <?= Html::a('<i class="fa fa-angle-double-right"></i> Boat Packages', ['/cms/terms-conditions/boat-package'], ['class' => 'title']) ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <?= Html::a('<i class="fa fa-tags"></i> <span class="title">Meta Tags</span>', ['/cms/meta-tags/index'], ['class' => 'title']) ?>
                    </li>
                </ul>

                <!-- notifications and other links -->
                <ul class="nav nav-userinfo navbar-right">
                    <li>
                        <a href="<?= Yii::$app->homeUrl; ?>site/home"><i class="fa-home"></i> Home</a>
                    </li>

                    <li class="dropdown user-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?= yii::$app->homeUrl; ?>images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
                            <span>
                                <?= Yii::$app->user->identity->user_name ?>
                                <i class="fa-angle-down"></i>
                            </span>
                        </a>

                        <ul class="dropdown-menu user-profile-menu list-unstyled">
                            <li class="user-header">
                                <img src="<?= yii::$app->homeUrl; ?>images/user-4.png" alt="user-image" class="img-circle" />
                                <p>
                                    <?= Yii::$app->user->identity->user_name ?>
                                    <!--<small>Member since Nov. 2012</small>-->
                                </p>
                            </li>
                            <li class="user-footer" style="background: #eeeeee;">
                                <div class="row">
                                    <div class="pull-left">
                                        <?= Html::a('Profile', ['/admin/admin-users/update', 'id' => Yii::$app->user->identity->id], ['class' => 'btn btn-white', 'style' => 'padding: 9px 20px;border: 1px solid #a09f9f;']) ?>
                                    </div>
                                    <div class="pull-right">
                                        <?php
                                        echo ''
                                        . Html::beginForm(['/site/logout'], 'post', ['style' => 'margin-bottom: 0px;']) . '<a>'
                                        . Html::submitButton(
                                                'Sign out', ['class' => 'btn btn-white', 'style' => 'border: 1px solid #a09f9f;']
                                        ) . '</a>'
                                        . Html::endForm()
                                        . '';
                                        ?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>

        </nav>

        <div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

            <div class="sidebar-menu toggle-others fixed">

                <div class="sidebar-menu-inner">



                    <ul id="main-menu" class="main-menu">
                        <li>
                            <?= Html::a('<i class="fa-home"></i> <span class="title">Home</span>', ['/site/home'], ['class' => 'title']) ?>
                        </li>
                        <?php
                        if (Yii::$app->session['post']['admin'] == 1) {
                            ?>
                            <li>
                                <a href="">
                                    <i class="fa fa-tachometer"></i>
                                    <span class="title">Administration</span>
                                </a>
                                <ul>
                                    <li>
                                        <?= Html::a('<i class="fa fa-angle-double-right"></i> Access Powers', ['/admin/admin-posts/index'], ['class' => 'title']) ?>
                                    </li>

                                    <li>
                                        <?= Html::a('<i class="fa fa-angle-double-right"></i> Admin Users', ['/admin/admin-users/index'], ['class' => 'title']) ?>
                                    </li>
                                </ul>
                            </li>
                            <?php
                        }
                        ?>
                        <li>
                            <?= Html::a('<i class="fa fa-sliders"></i> <span class="title">Sliders</span>', ['/cms/slider/index'], ['class' => 'title']) ?>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-sitemap"></i> <span class="title">About Venice Cabs</span>', ['/cms/about/index'], ['class' => 'title']) ?>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-car"></i> <span class="title">Car Packages</span>', ['/cms/tour-packages/car-packages'], ['class' => 'title']) ?>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-bus"></i> <span class="title">Tempo Traveler</span>', ['/cms/tour-packages/tempo-traveler'], ['class' => 'title']) ?>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-cubes"></i> <span class="title">Pilgrimages</span>', ['/cms/pilgrimages/index'], ['class' => 'title']) ?>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-image"></i> <span class="title">Gallery</span>', ['/cms/gallery/index'], ['class' => 'title']) ?>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-ship"></i>
                                <span class="title">House Boat</span>
                            </a>
                            <ul>
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Package Types', ['/cms/house-boat-package-type/index'], ['class' => 'title']) ?>
                                </li>
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Boat Package', ['/cms/boat-package/index'], ['class' => 'title']) ?>
                                </li>
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Exiting Packages', ['/cms/exiting-packages/index'], ['class' => 'title']) ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-map-marker"></i> <span class="title">Contact Address</span>', ['/cms/contact-address/index'], ['class' => 'title']) ?>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-comments-o"></i> <span class="title">Testimonials</span>', ['/cms/testimonial/index'], ['class' => 'title']) ?>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-bell-slash-o"></i>
                                <span class="title">Terms & Conditions</span>
                            </a>
                            <ul>
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Car Package', ['/cms/terms-conditions/car-package'], ['class' => 'title']) ?>
                                </li>
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Traveler Package', ['/cms/terms-conditions/traveler-package'], ['class' => 'title']) ?>
                                </li>
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Boat Packages', ['/cms/terms-conditions/boat-package'], ['class' => 'title']) ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-tags"></i> <span class="title">Meta Tags</span>', ['/cms/meta-tags/index'], ['class' => 'title']) ?>
                        </li>
                    </ul>

                </div>

            </div>

            <div class="main-content">
                <?= $content; ?>

                <footer class="main-footer sticky footer-type-1">

                    <div class="footer-inner">

                        <!-- Add your copyright text here -->
                        <div class="footer-text">
                            &copy; 2014
                            <strong>Xenon</strong>
                            theme by <a href="http://laborator.co" target="_blank">Laborator</a> - <a href="http://themeforest.net/item/xenon-bootstrap-admin-theme/9059661?ref=Laborator" target="_blank">Purchase for only <strong>23$</strong></a>
                        </div>


                        <!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
                        <div class="go-up">

                            <a href="#" rel="go-top">
                                <i class="fa-angle-up"></i>
                            </a>

                        </div>

                    </div>

                </footer>
            </div>
        </div>
        <!-- Page Loading Overlay -->
        <div class="page-loading-overlay">
            <div class="loader-2"></div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>