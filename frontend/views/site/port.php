<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
?>
<div class="page-banner-area about-banner">
    <div class="container">
        <div class="title-command-wrapper">
            <h1 class="title">Port Position</h1>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="breadcrumb-active">Port Position</a></li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div id="content">
    <div class="port-position-page">
        <div class="container">
            <div class="row">
                <!--                <div class="col-md-12">
                                    <div class="sec-title text-center mbtm60">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    </div>
                                </div>-->
                <?php
                if ($port_position) {
                    foreach ($port_position as $position) {
                        ?>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="download-box">
                                  <h4><?= $position->title ?></h4>
                                  <div style="overflow: auto; -webkit-overflow-scrolling: touch;">
                                <iframe  style="overflow: auto; -webkit-overflow-scrolling: touch;  overflow-y: scroll " scrolling="yes" src="<?= Yii::$app->homeUrl . 'uploads/port-position/' . $position->id . '/' . $position->title . '.' . $position->file ?>" width="100%" height="580" ></iframe>
                                  </div>
                                <div class="download-txt">
                                    <a target="_blank" href="<?= Yii::$app->homeUrl . 'uploads/port-position/' . $position->id . '/' . $position->title . '.' . $position->file ?>" class="with-icon">View PDF</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
                <!--                <div class="col-xl-6">
                                    <div class="download-box">
                                            <iframe scrolling="no" src="pdf/dummy.pdf" width="100%" height="300" ></iframe>
                                            <div class="overlay">
                                                 <h4>Ship Agency Services</h4>
                                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        <div class="download-txt">
                                            <a target="_blank" href="pdf/dummy.pdf" class="with-icon">View PDF</a>
                                        </div>
                                    </div>
                                </div>-->
                <!--                <div class="col-xl-6">
                                    <div class="download-box">
                                            <iframe scrolling="no" src="pdf/dummy.pdf" width="100%" height="300" ></iframe>
                                            <div class="overlay">
                                                 <h4>Ship Agency Services</h4>
                                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        <div class="download-txt">
                                            <a target="_blank" href="pdf/dummy.pdf" class="with-icon">View PDF</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="download-box">
                                            <iframe scrolling="no" src="pdf/dummy.pdf" width="100%" height="300" ></iframe>
                                            <div class="overlay">
                                                 <h4>Ship Agency Services</h4>
                                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        <div class="download-txt">
                                            <a target="_blank" href="pdf/dummy.pdf" class="with-icon">View PDF</a>
                                        </div>
                                    </div>
                                </div>-->
            </div>
        </div>
    </div>
</div>

