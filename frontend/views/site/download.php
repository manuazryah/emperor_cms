<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
?>
<div class="page-banner-area about-banner">
    <div class="container">
        <div class="title-command-wrapper">
            <h1 class="title">Useful Datas</h1>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="breadcrumb-active">Useful Datas</a></li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div id="content">
    <div class="download-page sitemap">
        <div class="container">
            <div class="row">
                <!--                <div class="col-md-12">
                                    <div class="sec-title text-center mbtm60">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    </div>
                                </div>-->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="sec-heading">
                        <h2>Useful files</h2>
                        <span class="sub-head">Useful data</span>
                    </div>
                </div>
                <div class="pdf-download-sec">
                    <div class="row">
                        <?php
                        if ($downloads) {
                            foreach ($downloads as $download) {
                                ?>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="download-box">
                                        <a download="" href="<?= Yii::$app->homeUrl . 'uploads/download/' . $download->id . '/download.' . $download->file ?>">
                                            <div class="img-box">
                                                <img src="<?= Yii::$app->homeUrl . 'uploads/download/' . $download->id . '/image.' . $download->image ?>" class="img-fluid" alt="<?= $download->image_alt ?>"/>
                                                <h4><?= $download->title ?></h4>
                                                <div class="overlay"></div>
                                            </div>
                                            <div class="download-txt">
                                                <button class="with-icon">Download PDF</button>
                                            </div>
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
        <div class="useful-links-sec">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="sec-heading">
                            <h2>Useful Links</h2>
                            <span class="sub-head">Useful data</span>
                        </div>
                    </div>
                    <?php if ($useful_links) { ?>
                        <div class="col-xl-12 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="sitemap-info">
                                <ul>
                                    <?php foreach ($useful_links as $links) { ?>
                                        <li><p><?= $links->title ?></p><a href="<?= $links->links ?>" target="_blank"><?= $links->links ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>

