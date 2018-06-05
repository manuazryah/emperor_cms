<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
?>
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
                    <a class="contact" href="<?= Yii::$app->homeUrl . 'site/contact'; ?>">Contact Us  <span class="fa fa-angle-double-right"></span></a>
                </div>
            </div>

        </div>
    </aside>
</div>