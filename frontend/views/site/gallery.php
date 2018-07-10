<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
?>
<div class="page-banner-area about-banner">
    <div class="container">
        <div class="title-command-wrapper">
            <h1 class="title">Our Projects</h1>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="<?= Yii::$app->homeUrl ?>">Home</a></li>
                    <li class="breadcrumb-item"><a class="breadcrumb-active">Projects</a></li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div id="content">
    <div class="projects-gallery">
        <div class="container">
            <div class="row">
                <!--                <div class="col-md-12">
                                    <div class="sec-title">
                                        <img width="40" height="18" src="images/icons/ship.png" class="img-fluid" alt="">
                                        <h5>Get In Touch</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                </div>-->
                <?php
                if ($galleries) {
                    foreach ($galleries as $gallery) {
                        ?>
                        <div class="col-md-4">
                            <div class="image-box">
                                <a href="<?= Yii::$app->homeUrl .'uploads/gallery/'.$gallery->id.'/image.'.$gallery->image?>" data-toggle="lightbox" data-gallery="gallery">
                                    <img src="<?= Yii::$app->homeUrl .'uploads/gallery/'.$gallery->id.'/image.'.$gallery->image?>" class="img-fluid rounded">
                                </a>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
                
            </div>
        </div>
    </div>
</div>

