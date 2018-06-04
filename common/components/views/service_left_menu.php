<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
?>
<div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
    <aside class="sidebar default-sidebar">
        <div id="bunch_servies-2" class="widget sidebar-widget widget_bunch_servies">
            <!--Blog Category Widget-->
            <div class="sidebar-blog-category">
                <h5 class="title">Sectors</h5>
                <ul class="blog-cat">
                    <!-- Title -->
                    <?php $page_name = basename($_SERVER['PHP_SELF']); ?>
<!--<li class="<?= $page_name == 'services.php' ? 'active' : '' ?>"><a href="services.php#Service">Major Services</a></li>-->
                    <li class="<?= $page_name == 'Oil-Gas-Engineering.php' ? 'active' : '' ?>"><a href="Oil-Gas-Engineering.php#Oil-Gas-Engineering">Oil & Gas</a></li>
                    <li class="<?= $page_name == 'Petroleum-Engineering.php' ? 'active' : '' ?>"><a href="Petroleum-Engineering.php#Petroleum-Engineering">Petrochemical</a></li>
                    <li class="<?= $page_name == 'Nuclear-Energy.php' ? 'active' : '' ?>"><a href="Nuclear-Energy.php#Nuclear-Energy">Power & Energy</a></li>
                    <li class="<?= $page_name == 'Infrastructure-products.php' ? 'active' : '' ?>"><a href="Infrastructure-products.php#Infrastructure-products">Infrastructure & products</a></li>
                    <li class="<?= $page_name == 'RPS.php' ? 'active' : '' ?>"><a href="RPS.php#RPS">RPS</a></li>
                    <li class="<?= $page_name == 'Corporate.php' ? 'active' : '' ?>"><a href="Corporate.php#Corporate">Corporate Governce,Sustainibility and Strategic Management</a></li>

                </ul>
            </div>
            <div class="sidebar-blog-category mt40">
    <?php $page_name = basename($_SERVER['PHP_SELF']); ?>
<!--    <h5 class="title">Services</h5>
    <ul class="blog-cat">
         Title 
        <li class="<?= $page_name == 'services.php' ? 'active' : '' ?>"><a href="services.php#Service">Major Services</a></li>
        

    </ul>-->
</div>
            

        </div>
        <!--                                        <div id="bunch_brochures-2" class="widget sidebar-widget widget_bunch_brochures">
                                                    Brochure
                                                    <div class="brochure-widget">
        
                                                        <div class="brochure-box">
                                                            <div class="inner">
                                                                <span class="icon fa fa-file-pdf-o"></span>
                                                                <div class="text">Download Brochures</div>
                                                            </div>
                                                            <a href="#" class="overlay-link"></a>
                                                        </div>
        
                                                        <div class="brochure-box">
                                                            <div class="inner">
                                                                <span class="icon fa fa-file-powerpoint-o"></span>
                                                                <div class="text">Company Presentation</div>
                                                            </div>
                                                            <a href="#" class="overlay-link"></a>
                                                        </div>
        
                                                    </div>
        
                                                </div>-->
        <div id="bunch_contact_us-2" class="widget sidebar-widget widget_bunch_contact_us">
            <!--Help Box-->
            <div class="help-box" style="background-image:url('images/image-2-1.jpg')">
                <div class="inner">
                    <h2>How can we help you?</h2>
                    <div class="text">Contact us at the Industrial office nearest to you or Subscribe a business inquiry online.</div>
                    <a class="contact" href="contact.php">Contact Us  <span class="fa fa-angle-double-right"></span></a>
                </div>
            </div>

        </div>
    </aside>
</div>