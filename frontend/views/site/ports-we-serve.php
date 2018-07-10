<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
?>
<div class="page-banner-area about-banner">
    <div class="container">
        <div class="title-command-wrapper">
            <h1 class="title">Ports We Serve</h1>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="<?= Yii::$app->homeUrl ?>">Home</a></li>
                    <li class="breadcrumb-item"><a class="breadcrumb-active">Ports We Serve</a></li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div id="content">
    <div id="duel-offer" class="ports-we-serve-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if ($emirates) { ?>
                        <div class="services-tab">
                            <?php
                            $j = 1;
                            foreach ($emirates as $emirate) {
                                if ($j % 2 != "0") {
                                    ?>
                                    <div class="tab-pane right">
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="image-box">
                                                    <img class="img-fluid" src="<?= Yii::$app->homeUrl . '/uploads/ports/' . $emirate->id . '/image.' . $emirate->image; ?>"/>
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 pad-left0">
                                                <div class="service-content">
                                                    <h2 class="tab-heading"><?= $emirate->emirates ?></h2>
                                                    <ul>
                                                        <?php
                                                        $ports_emirates = $emirate->ports;
                                                        $ports_emirates = explode(',', $ports_emirates);
                                                        foreach ($ports_emirates as $port) {
                                                            ?>
                                                            <li><?= $port ?></li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="tab-pane left">
                                        <div class="row">
                                            <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 pad-left0">
                                                <div class="service-content">
                                                    <h2 class="tab-heading"><?= $emirate->emirates ?></h2>
                                                    <ul>
                                                        <?php
                                                        $ports_emirates = $emirate->ports;
                                                        $ports_emirates = explode(',', $ports_emirates);
                                                        foreach ($ports_emirates as $port) {
                                                            ?>
                                                            <li><?= $port ?></li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="image-box">
                                                    <img class="img-fluid" src="<?= Yii::$app->homeUrl . '/uploads/ports/' . $emirate->id . '/image.' . $emirate->image; ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php
                                $j++;
                            }
                            ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

