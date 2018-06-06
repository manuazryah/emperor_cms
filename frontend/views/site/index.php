<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use common\components\MenuHeaderWidget;
use common\models\Slider;
use common\models\Chairmans;
use common\models\Sectors;
?>
<div class="kc_clfw"></div>
<section class="kc-elm kc-css-217831 kc_row">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-846361 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <!--Main Slider-->
                    <div id="banner">
                        <section class="main-slider">
                            <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >

                                <!-- Indicators -->
                                <!--                                <ol class="carousel-indicators">
                                                                    <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                                                                    <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                                                                    <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
                                                                </ol>-->

                                <!-- Wrapper For Slides -->
                                <div class="carousel-inner" role="listbox">
                                    <!-- Third Slide -->
                                    <?php
                                    $sliders = Slider::find()->where(['status' => '1'])->all();
                                    foreach ($sliders as $slide) {
                                        ?>

                                        <div class="item <?= $slide->active_status == '1' ? 'active' : '' ?>">

                                            <!-- Slide Background -->
                                            <img src="<?= Yii::$app->homeUrl . 'uploads/sliders/' . $slide->id . '/image.' . $slide->image; ?>" alt="Bootstrap Touch Slider"  class="slide-image"/>
                                            <div class="bs-slider-overlay"></div>

                                            <div class="container">
                                                <div class="row">
                                                    <!-- Slide Text Layer -->
                                                    <?php if (!empty($slide->title)) { ?>
                                                        <div class="slide-text slide_style_right">
                                                            <h1 data-animation="animated zoomInLeft"><?= $slide->title ?></h1>
                                                            <!--<p data-animation="animated fadeInLeft">Shape your business with the help </p>-->
                                                            <!--<a href="" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a>-->
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>


                                    <!-- End of Slide -->


                                </div><!-- End of Wrapper For Slides -->

                                <!-- Left Control -->
                                <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>

                                <!-- Right Control -->
                                <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>

                            </div>
                        </section>
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
                                    <!--                            <div class="outer-box">
                                    
                                                                    Search Box
                                                                    <div class="dropdown dropdown-outer">
                                                                        <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                                                        <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                                                            <li class="panel-outer">
                                                                                <div class="form-container">
                                                                                    <form action="" method="get">
                                                                                        <div class="form-group">
                                                                                            <input type="search" name="s" value="" placeholder="Search Here" required="">
                                                                                            <button type="Subscribe" class="search-btn"><span class="fa fa-search"></span></button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                    
                                                                </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Main Slider-->

                </div>
            </div>
        </div>
    </div>
</section>
<section class="kc-elm kc-css-919334 kc_row index-chairmansmsg">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-102672 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <!--Call To Action-->
                    <section class="call-to-action" style="background-image: url('images/1.jpg')">
                        <div class="auto-container">
                            <div class="row clearfix">
                                <!--Column-->
                                <?php $chairmans = Chairmans::findOne(1); ?>
                                <div class="column col-md-8 col-sm-12 col-xs-12 pr100">
                                    <h2 class="text-left"><?= $chairmans->title ?></h2>
                                    <div class="text text-justify">
                                        <p><?= $chairmans->short_content ?> </p>
                                    </div>
                                </div>
                                <div class="column col-md-4 col-sm-12 col-xs-12 pr100 mt25">
                                    <a style="float: left;" href="<?= yii::$app->homeUrl . 'site/chairmans-message' ?>" class="theme-btn btn-style-three">Chairman's Message</a>
                                </div>
                                <!--Btn Column-->
                            </div>
                        </div>
                    </section>
                    <!--End Call To Action-->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="kc-elm kc-css-92621 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-104665 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">

                    <!--Services Section-->
                    <section class="services-section">
                        <div class="auto-container">
                            <!--Sec Title-->
                            <div class="sec-title">
                                <h2>Sectors We Serve</h2>
                            </div>
                            <div class="row clearfix">
                                <!--Services Block-->
                                <?php
                                $sectors = Sectors::find()->where(['status' => 1])->all();
                                foreach ($sectors as $sector) {
                                    ?>
                                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                                        <div class="inner-box hvr-float">
                                            <div class="image">
                                                <img src="<?= Yii::$app->homeUrl . 'uploads/sectors/' . $sector->id . '/small/image.' . $sector->small_image; ?>" class="attachment-equlibrium_370x218 size-equlibrium_370x218 wp-post-image" alt="" srcset="<?= Yii::$app->homeUrl . 'uploads/sectors/' . $sector->id . '/small/image.' . $sector->small_image; ?>" />
                                                <div class="icon-box">
                                                    <span class="icon flaticon-spray-gas-bottle"></span>
                                                </div>
                                                <div class="overlay-box clearfix">
                                                    <div class="text"><?= substr($sector->main_content, 0, 80) ?>..</div>
                                                    <a href="<?= Yii::$app->homeUrl . 'site/sectors?sector=' . $sector->canonical_name . '#' . $sector->canonical_name; ?>" class="read-more">Read More</a>
                                                </div>
                                            </div>
                                            <div class="lower-box">
                                                <h3><a href="<?= Yii::$app->homeUrl . 'site/sectors?sector=' . $sector->canonical_name . '#' . $sector->canonical_name; ?>"><?= $sector->name ?> </a></h3>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <!--Services Block-->

                            </div>
                        </div>
                    </section>
                    <!--End Services Section-->

                </div>
            </div>
        </div>
    </div>
</section>

<section class="kc-elm kc-css-784631 kc_row">
    <div class="company-profile">
        <div class="kc-col-container">
            <!--Call To Action-->
            <section class="call-to-action">
                <div class="auto-container">
                    <div class="row clearfix">
                        <!--Column-->
                        <div class="column col-md-12 col-sm-12 col-xs-12">
                            <div class="sec-title">
                                <h2>EQUILIBRIUM</h2>
                            </div>
                            <p>
                                " EEC aspires to be recognized as a distinct, distinguished and globally competitive provider of Engineering Consultancy, Program Management, Project Management services, and Advisory Support for engineering organizations in the Oil & Gas, and Energy sector. "
                            </p>
                            <a target="_blank" download="" href="pdf/EqecProfile.pdf" class="theme-btn btn-style-three">Download Electronic Profile</a>
                        </div>
                        <!--Btn Column-->
                    </div>
                </div>
            </section>
            <!--End Call To Action-->
        </div>
    </div>
</section>

<section class="kc-elm kc-css-784631 kc_row">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-809007 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <!--About Section-->
                    <section class="about-section grey-bg">
                        <div class="auto-container">
                            <!--Sec Title-->
                            <div class="sec-title">
                                <h2>Who we are</h2>
                            </div>
                            <div class="row clearfix">
                                <!--Content Column-->
                                <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="text">
                                        When you give to Our Industry, know your donation is making a difference whether you are supporting our signature Programs or our carefully curated list of gifts that professional. Over 24 years experience and knowledge international standards, technologicaly changes and industrial systems... <?= Html::a('Read more', ['/site/about'], ['class' => '']) ?></div>
                                    <div class="image">
                                        <img src="<?= Yii::$app->homeUrl; ?>uploads/about/who_we_are_image.<?= $about_content->who_we_are_image ?>" alt="who_we_are" />
                                    </div>
                                </div>
                                <!--Blocks Column-->
                                <div class="blocks-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="row clearfix">
                                        <!--About Block-->
                                        <div class="about-block col-md-6 col-sm-6 col-xs-6">
                                            <div class="inner-box">
                                                <div class="image">
                                                    <a href=""> <img src="<?= Yii::$app->homeUrl; ?>uploads/about/our_mission_image.<?= $about_content->our_mission_image ?>" alt="our_mission"/></a>
                                                </div>
                                                <div class="lower-box">
                                                    <h3><a href="#">Our Mission</a></h3>
                                                    <div class="text">
                                                        <?= strlen($about_content->our_mission) > 133 ? substr($about_content->our_mission, 0, 130) . '...' : $about_content->our_mission ?>
                                                        <?= Html::a('Read more', ['/site/about'], ['class' => '']) ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--About Block-->
                                        <div class="about-block col-md-6 col-sm-6 col-xs-6">
                                            <div class="inner-box">
                                                <div class="image">
                                                    <a href=""><img src="<?= Yii::$app->homeUrl; ?>uploads/about/our_vision_image.<?= $about_content->our_vision_image ?>" alt="our_vision"/></a>
                                                </div>
                                                <div class="lower-box">
                                                    <h3><a href="#">Our Vision</a></h3>
                                                    <div class="text">
                                                        <?= strlen($about_content->our_vision) > 133 ? substr($about_content->our_vision, 0, 130) . '...' : $about_content->our_vision ?>
                                                        <?= Html::a('Read more', ['/site/about'], ['class' => '']) ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--End About Section-->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="kc-elm kc-css-989604 kc_row">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-396994 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">

                    <!--Work Section-->
                    <section class="work-section">
                        <div class="auto-container">
                            <!--Sec Title-->
                            <div class="sec-title">
                                <h2>Work Process</h2>
                            </div>
                            <div class="row clearfix">
                                <!--Process Block-->
                                <div class="process-block col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="upper-box">
                                            <div class="icon-box">
                                                <span class="icon flaticon-loupe"></span>
                                                <div class="block-number wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms">1</div>
                                            </div>
                                        </div>
                                        <div class="lower-box">
                                            <h3><a href="#">DISCOVER</a></h3>
                                            <div class="text">People with ideas and experience to develop a vision for the future</div>
                                        </div>
                                    </div>
                                </div>
                                <!--Process Block-->
                                <div class="process-block col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="upper-box">
                                            <div class="icon-box">
                                                <span class="icon flaticon-settings-2"></span>
                                                <div class="block-number wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms">2</div>
                                            </div>
                                        </div>
                                        <div class="lower-box">
                                            <h3><a href="#">BUILD</a></h3>
                                            <div class="text">The right tools at the right time enhances the shard economy</div>
                                        </div>
                                    </div>
                                </div>
                                <!--Process Block-->
                                <div class="process-block col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="upper-box">
                                            <div class="icon-box">
                                                <span class="icon flaticon-new-message-envelope"></span>
                                                <div class="block-number wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms">3</div>
                                            </div>
                                        </div>
                                        <div class="lower-box">
                                            <h3><a href="#">CONNECT</a></h3>
                                            <div class="text">Intgrating clients with partners is the focus of everyday business</div>
                                        </div>
                                    </div>
                                </div>
                                <!--Process Block-->
                                <div class="process-block col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="upper-box">
                                            <div class="icon-box">
                                                <span class="icon flaticon-telemarketer"></span>
                                                <div class="block-number wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms">4</div>
                                            </div>
                                        </div>
                                        <div class="lower-box">
                                            <h3><a href="#">LAUNCH</a></h3>
                                            <div class="text">People with ideas and experience to develop a vision for the future</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--End Work Section-->

                </div>
            </div>
        </div>
    </div>
</section>
<!--<section class="kc-elm kc-css-558266 kc_row">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-934626 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    Project Section
                    <section class="project-section" style="background-image:url('images/2-1.jpg')">
                        <div class="auto-container">

                            Porfolio Tabs
                            <div class="project-tab">
                                Sec Title
                                <div class="sec-title light clearfix">
                                    <div class="pull-left">
                                        <h2>Our Projects</h2>
                                    </div>
                                </div>
                                Tabs Content
                                <div class="p-tabs-content">
                                    Portfolio Tab / Active Tab
                                    <div class="p-tab active-tab" id="p-tab-1">
                                        <div class="project-carousel owl-theme owl-carousel" autoplay="true">
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/100.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Oil & Gas Engineering</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/101.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Petroleum & Chemicals Engineering</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/102.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Nuclear Energy</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/103.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Construction & Project Management</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/104.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">RPS</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/105.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Corporate Management</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/1-1.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Nuclear Energy</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/2.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Construction & Project Management</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/3.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Oil & Gas Engineering</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    Portfolio Tab / Active Tab
                                    <div class="p-tab " id="p-tab-2">
                                        <div class="project-carousel owl-theme owl-carousel">
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/1-1.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Petroleum & Chemicals Engineering</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/2.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Nuclear Energy</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/3.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Construction & Project Management</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item

                                        </div>
                                    </div>
                                    Portfolio Tab / Active Tab
                                    <div class="p-tab " id="p-tab-4">
                                        <div class="project-carousel owl-theme owl-carousel">
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/1-1.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Pre Construction</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/2.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Pre Construction</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/3.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Pre Construction</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/4.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Pre Construction</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/4.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Pre Construction</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/3.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Pre Construction</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    Portfolio Tab / Active Tab
                                    <div class="p-tab " id="p-tab-5">
                                        <div class="project-carousel owl-theme owl-carousel">
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/1-1.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Pre Construction</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/2.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Pre Construction</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/3.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Pre Construction</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/4.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Pre Construction</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/2.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Pre Construction</a></h3>
                                                                    <div class="category">Our Projects</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                            Gallery Item
                                            <div class="gallery-item">
                                                <div class="inner-box">
                                                    <figure class="image-box">
                                                        <img src="images/1-1.jpg" class="attachment-equlibrium_270x200 size-equlibrium_270x200 wp-post-image" alt="" />
                                                        Overlay Box
                                                        <div class="overlay-box">
                                                            <div class="overlay-inner">
                                                                <a href="projects.php#project" class="image-link"><span class="icon fa fa-link"></span></a>
                                                                <div class="content">
                                                                    <h3><a href="projects.php#project">Pre Construction</a></h3>
                                                                    <div class="category">Our Projects </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </section>
                    End Project Section
                </div>
            </div>
        </div>
    </div>
</section>-->
<section class="kc-elm kc-css-671882 kc_row">
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
                                                <input type="email" name="email" value="" placeholder="Your email address" required>
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
<section class="kc-elm kc-css-564083 kc_row">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-95614 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <!--Contact Info Section-->
                    <section class="contact-info-section">
                        <div class="auto-container">
                            <div class="row clearfix">
                                <!--Info Block-->
                                <div class="info-block col-md-4 col-sm-4 col-xs-12">
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon fa fa-map-marker"></span>
                                        </div>
                                        <div class="text">Equilibrium Engineering Consultancy
                                            Office No.506, 5th Floor, Al Reem Plaza
                                            Zayed The First Street (Electra Street)
                                            P.O Box: 53338, Abu Dhabi, United Arab Emirates</div>
                                    </div>
                                </div>
                                <!--Info Block-->
                                <div class="info-block col-md-4 col-sm-4 col-xs-12">
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon fa fa-volume-control-phone"></span>
                                        </div>
                                        <div class="text"><span>+971 (2) 6737766</span>Mon-Fri, 9am until 6pm</div>
                                    </div>
                                </div>
                                <!--Info Block-->
                                <div class="info-block col-md-4 col-sm-4 col-xs-12">
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon fa fa-envelope-o"></span>
                                        </div>
                                        <div class="text"><span>info@eqec.ae</span>We reply within 24 hours</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--End Contact Info Section-->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="kc-elm kc-css-690201 kc_row">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-981488 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <!--Contact Map Section-->
                    <section class="contact-map-section">

                        <!--Map Outer-->
                        <div class="map-outer">
                            <!--Map Canvas-->
                            <div class="map-canvas"
                                 data-zoom="16"
                                 data-lat="24.4916943"
                                 data-lng="54.3694248"
                                 data-type="roadmap"
                                 data-hue="#ffc400"
                                 data-title="EQUILIBRIUM ENGINEERING CONSULTANCY"
                                 data-icon-path="<?= Yii::$app->homeUrl ?>images/map-marker.png"
                                 data-content="7 5 A St , Equilibrium Engineering Consultancy, Abu Dhabi, United Arab Emirates<br><a href='mailto:info@eqec.ae'>info@eqec.ae</a>">
                            </div>
                        </div>

                        <div class="auto-container clearfix">
                            <div class="form-outer">
                                <div class="inner-box">
                                    <h2>Get in Touch</h2>
                                    <br>

                                    <!-- Default Form -->
                                    <div class="default-form">
                                        <div role="form" class="wpcf7" id="wpcf7-f284-p285-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form action="mail/contact-mail.php" method="post" class="wpcf7-form" novalidate="novalidate">
                                                <div class="row clearfix">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                        <span class="wpcf7-form-control-wrap text-165"><input type="text" name="Name" value="" size="40" class="wpcf7-form-control wpcf7-text " required="" aria-required="true" aria-invalid="false" placeholder="Name" /></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                        <span class="wpcf7-form-control-wrap email-857"><input type="email" name="Email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required="" aria-required="true" aria-invalid="false" placeholder="Email" /></span>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                                        <span class="wpcf7-form-control-wrap text-166"><input type="text" name="Subject" value="" size="40" class="wpcf7-form-control wpcf7-text" required="" aria-invalid="false" placeholder="Subject" /></span>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                        <span class="wpcf7-form-control-wrap textarea-59"><textarea name="Message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Massage"></textarea></span>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group text-right">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pad0">
                                                            <div id="recaptcha" class="g-recaptcha" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;" data-sitekey="6LfASkMUAAAAAKb0YThDF1KSdEFtkltDfiBI9_iI"></div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pad0">
                                                            <input type="submit" name="Submit" value="Send Now" class="wpcf7-form-control wpcf7-Subscribe theme-btn btn-style-one" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--End Default Form -->
                                </div>
                            </div>
                        </div>

                    </section>
                    <!--End Contact Map Section-->
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
