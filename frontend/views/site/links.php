<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
?>
<div class="page-banner-area about-banner">
    <div class="container">
        <div class="title-command-wrapper">
            <h1 class="title">Useful Links</h1>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="breadcrumb-active">Site Map</a></li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div id="content">
    <div class="sitemap">
        <div class="container">
            <div class="row">
                <!--                <div class="col-md-12">
                                    <div class="sec-title text-center mbtm60">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    </div>
                                </div>-->
                <?php if ($useful_links) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="sitemap-info">
                            <div class="title">
                                <h5>Useful Links</h5>
                            </div>
                            <ul>
                                <?php foreach ($useful_links as $links) { ?>
                                    <li><p><?= $links->title ?></p><a href="<?= $links->links ?>" target="_blank"><?= $links->links ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
                <!--                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="sitemap-info">
                                        <div class="title">
                                            <h5>Useful Links</h5>
                                        </div>
                                        <ul>
                                            <li><a href="">Home</a></li>
                                            <li><a href="">About Us</a></li>
                                            <li><a href="">Services</a></li>
                                            <li><a href="">Port Position</a></li>
                                            <li><a href="">projects</a></li>
                                            <li><a href="">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="sitemap-info">
                                        <div class="title">
                                            <h5>Useful Links</h5>
                                        </div>
                                        <ul>
                                            <li><a href="">Home</a></li>
                                            <li><a href="">About Us</a></li>
                                            <li><a href="">Services</a></li>
                                            <li><a href="">Port Position</a></li>
                                            <li><a href="">projects</a></li>
                                            <li><a href="">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>-->
            </div>
        </div>
    </div>
</div>

