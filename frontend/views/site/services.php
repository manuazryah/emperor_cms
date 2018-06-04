<?php
/* @var $this yii\web\View */

use common\components\MenuHeaderWidget;
?>
<!--Page Title-->
<section id="banner" class="page-title services-page-banner" style="background-image:url(<?= yii::$app->homeUrl; ?>images/602.jpg);">
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
                                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                    <aside class="sidebar default-sidebar">
                                        <div id="bunch_servies-2" class="widget sidebar-widget widget_bunch_servies">
                                            <div class="sidebar-blog-category">
                                                <?php $page_name = basename($_SERVER['PHP_SELF']); ?>
                                                <h5 class="title">Services</h5>
                                                <ul class="blog-cat">
                                                    <!-- Title -->
                                                    <li class="<?= $page_name == 'services.php' ? 'active' : '' ?>"><a href="services.php#Service">Major Services</a></li>


                                                </ul>
                                            </div>
                                            <!--Blog Category Widget-->
                                            


                                        </div>
                                        <div id="bunch_contact_us-2" class="widget sidebar-widget widget_bunch_contact_us">
                                            <!--Help Box-->
                                            <div class="help-box" style="background-image:url('<?= yii::$app->homeUrl; ?>images/image-2-1.jpg')">
                                                <div class="inner">
                                                    <h2>How can we help you?</h2>
                                                    <div class="text">Contact us at the Industrial office nearest to you or Subscribe a business inquiry online.</div>
                                                    <a class="contact" href="contact.php">Contact Us  <span class="fa fa-angle-double-right"></span></a>
                                                </div>
                                            </div>

                                        </div>
                                    </aside>
                                </div>

                                <!--<div id="Oil-Gas-Engineering"></div>-->

                                <!--Content Side-->
                                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                    <div class="solution-single">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="<?= yii::$app->homeUrl; ?>images/background/services1.jpg" alt="" />
                                            </div>
                                            <h2>Our Services</h2>
                                            <div class="text">
                                                <p>We will provide consultancy services for meeting the clients’ specific requirements on Conceptualization, Design, Engineering and Construction of Projects, and Implementation of Programs.</p>
                                                <h4>The range of services we provide includes the following:</h4>
                                                <div class="two-column row clearfix">
                                                    <div class="column col-md-12 col-sm-12 col-xs-12">
                                                        <ul class="list-style-one">
                                                            <li>Feasibility studies</li>
                                                            <li>Pre-FEED studies</li>
                                                            <li>Front End Engineering </li>
                                                            <li>Selection of optimal technology and process </li>
                                                            <li>Process design</li>
                                                            <li>Basic and detailed engineering</li>
                                                            <li>EPC contractors – evaluation and selection</li>
                                                            <li>Corporate Governance advisory services</li>
                                                            <li>Enterprise Risk Assessment</li>
                                                            <li>HSE impact assessment</li>
                                                            <li>Plant performance and optimization studies</li>
                                                            <li>Capacity studies, De-Bottlenecking and expansion programs</li>
                                                            <li>Yield and Energy Optimization Studies</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4>Our distinctive capabilities are built on:</h4>
                                                <div class="two-column row clearfix">
                                                    <div class="column col-md-12 col-sm-12 col-xs-12">
                                                        <ul class="list-style-one">
                                                            <li>Decades of experience in managing projects and programs in the field of ‘Energy’ in general, and in the fields of Oil & Gas, Power Sector, and Nuclear Energy in particular.</li>
                                                            <li>The knowledge, expertise and experience of a diverse team of competent and dedicated professionals with long experience, skills and knowledge in projects and programs implementation through state-of-the-art technologies and approaches.</li>
                                                            <li>Long experience and association with internationally recognized leading IOCs, NOCs, EPC Contracting Organizations, and OEMs.</li>
                                                            <li>Experience of executing various programs to meet exacting National and international Standards on Sustainability, Quality, Reliability, Safety and Environment.</li>

                                                        </ul>
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