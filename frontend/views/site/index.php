<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\components\FeaturesWidget;
use common\components\TestimonialWidget;

//use common\models\Chairmans;
//use common\models\Sectors;
//use yii\bootstrap\ActiveForm;
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!--    <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>-->
    <div class="carousel-inner" role="listbox">
        <?php
        $i = 0;
        foreach ($sliders as $slider) {
            ?>
            <div class="carousel-item <?= $i == '0' ? 'active' : '' ?>">
                <img class="d-block img-fluid" src="<?= Yii::$app->homeUrl . '/uploads/sliders/' . $slider->id . '/image.' . $slider->image; ?>" alt="<?= $slider->alt_tag ?>">
                <div class="carousel-caption">
                    <h3><?= $slider->title ?></h3>
                    <p><?= $slider->sub_title ?></p>
                </div>
            </div>
            <?php
            $i++;
        }
        ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--    <div class="container banner-container">
            <div class="row">
                <div class="banner-support">
                    <h3>24X7 support</h3>
                    <ul>
                        <li>Call : </li>
                        <li>+971558567350</li>
                        <li>+971558567360</li>
                    </ul>
                    <span class="mail">Email : emperor@emperorlines.com</span>
                    <img class="girl-img" src="images/banner-support-girl.png"/>
                </div>
            </div>
        </div>-->
</div>
<div id="content">
    <?php if ($home_services) { ?>
        <section id="service-sec">
            <div class="container shadow">
                <div class="service-highlight">
                    <div class="row">
                        <?php
                        $h = 0;
                        $color = "";
                        $icon = "ship-agency-service.png";
                        foreach ($home_services as $homeservice) {
                            if ($h == '1') {
                                $color = 'red';
                                $icon = "2.png";
                            }
                            if ($h == '2') {
                                $color = 'sm-red';
                                $icon = "3.png";
                            }
                            if ($h == '3') {
                                $color = 'red sm-white';
                                $icon = "4.png";
                            }
                            ?>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 pad0 service-grid">
                                <div class="box <?= $color ?>">
                                    <icon><img width="63" src="images/icons/<?= $icon ?>" alt="service"/></icon>
                                    <h6><?= $homeservice->title ?></h6>
                                    <p>
                                        <?= $homeservice->content ?>
                                    </p>
                                    <a href="<?= Yii::$app->homeUrl . 'services/' . $homeservice->link ?>" class="ship"><img class="img-responsive" src="images/icons/ship.png" alt="service"/><span>Read More</span></a>
                                </div>
                            </div>
                            <?php
                            $h++;
                        }
                        ?>
                        <!--                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 pad0 service-grid">
                                                    <div class="box red">
                                                        <icon><img width="63" src="images/icons/2.png"/></icon>
                                                        <h6>Husbandry Services</h6>
                                                        <p>
                                                            Husbandry Services to Vessels at any UAE Ports And Anchorage
                                                        </p>
                                                        <a href="" class="ship"><img class="img-responsive" src="images/icons/ship.png"/><span>Read More</span></a>
                                                    </div>
                                                </div>-->
                        <!--                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 pad0 service-grid">
                                                    <div class="box sm-red">
                                                        <icon><img width="63" src="images/icons/3.png"/></icon>
                                                        <h6>Clearing and forwarding</h6>
                                                        <p>
                                                            Husbandry Services to Vessels at any UAE Ports And Anchorage
                                                        </p>
                                                        <a href="" class="ship"><img class="img-responsive" src="images/icons/ship.png"/><span>Read More</span></a>
                                                    </div>
                                                </div>-->
                        <!--                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 pad0 service-grid">
                                                    <div class="box red sm-white">
                                                        <icon><img width="63" src="images/icons/4.png"/></icon>
                                                        <h6>Ship's Supply and Ship's Chandelling  Service</h6>
                                                        <p>
                                                            Husbandry Services to Vessels at any UAE Ports And Anchorage
                                                        </p>
                                                        <a href="" class="ship"><img class="img-responsive" src="images/icons/ship.png"/><span>Read More</span></a>
                                                    </div>
                                                </div>-->
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <section id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-12 mbtm15">
                    <img class="img-responsive about-logo" src="<?= Yii::$app->homeUrl ?>/images/logo-large.png"/>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-12 ptop25 about-content">
                    <?= $about_content->about_content ?>
                </div>
                <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="about-img" style="background: url(<?= Yii::$app->homeUrl . '/uploads/home/' . $about_content->id . '/image.' . $about_content->image; ?>) no-repeat;"></div>
                </div>
            </div>
        </div>
    </section>
    <?php if ($services) { ?>
        <section id="our-service">
            <div class="container">
                <div class="bg-image">
                    <div class="sec-heading">
                        <h2>Our Service</h2>
                        <span class="sub-head">our Service</span>
                    </div>
                    <div class="row">
                        <?php foreach ($services as $service) { ?>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="service-box">
                                    <?php
                                    $image = '<img class="img-fluid" src="' . Yii::$app->homeUrl . 'uploads/services/' . $service->id . '/image.' . $service->image . '"/>
                                    <h4><i class="fas fa-plus"></i></h4>';
                                    ?>
                                    <?= Html::a($image, ['/services/' . $service->canonical_name], ['class' => 'service-img']); ?>
                                    <!--                                    <a class="service-img" href="#">
                                                                            <img class="img-fluid" src="<?= Yii::$app->homeUrl . '/uploads/services/' . $service->id . '/image.' . $service->image; ?>"/>
                                                                            <h4><i class="fas fa-plus"></i></h4>
                                                                        </a>-->
                                    <div class="content">
                                        <h5><?= $service->name ?></h5>
                                        <p><?= substr($service->short_content, 0, 133) . '..' ?></p>
                                        <?= Html::a('Read More', ['/services/' . $service->canonical_name], ['class' => 'read-more']); ?>
                                        <!--<a href="#" class="read-more">Read More</a>-->
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <!--                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <a href="#" class="view-all">View All</a>
                                            </div>-->

                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <?php if ($emirates) { ?>
        <section id="duel-offer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="services-tab">
                            <div class="sec-heading light">
                                <h2>Ports We Serve</h2>
                                <span class="sub-head">OUR SERVICES ARE AVAILABLE AT</span>
                            </div>
                            <div class="tab-list">
                                <ul class="nav nav-tabs faq-cat-tabs">
                                    <?php
                                    $j = 0;
                                    foreach ($emirates as $emirate) {
                                        ?>
                                        <li>
                                            <a class="<?= $j == '0' ? 'active' : '' ?> show" href="#faq-cat-<?= $j ?>" data-toggle="tab"><?= $emirate->emirates ?></a>
                                        </li>
                                        <?php
                                        $j++;
                                    }
                                    ?>
    <!--                                    <li><a href="#faq-cat-2" data-toggle="tab"><i class="glyphicon glyphicon-plus"></i>SHARJAH AND HAMRIYA SHARJAH</a></li>
    <li><a href="#faq-cat-3" data-toggle="tab"><i class="glyphicon glyphicon-delete"></i>FUJAIRAH</a></li>
    <li><a href="#faq-cat-4" data-toggle="tab"><i class="glyphicon glyphicon-leaf"></i>KHORFAKAN</a></li>
    <li><a href="#faq-cat-5" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>AJMAN</a></li>
    <li><a href="#faq-cat-6" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>UMM AL QUWAIN</a></li>-->
                                </ul>
                            </div>

                            <!-- Tab panes -->
                            <div class="tab-content faq-cat-content">
                                <?php
                                $k = 0;
                                foreach ($emirates as $emirate) {
                                    ?>
                                    <div class="tab-pane <?= $k == 0 ? 'active show in fade' : '' ?>" id="faq-cat-<?= $k ?>">
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                                                <div class="image-box">
                                                    <img src="<?= Yii::$app->homeUrl . '/uploads/ports/' . $emirate->id . '/image.' . $emirate->image; ?>" class="img-fluid" alt=""/>
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
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
                                    <?php
                                    $k++;
                                }
                                ?>
                            </div>
                        </div>
                        <!--</div>-->
                    </div>
                </div>
        </section>
    <?php } ?>
    <?= TestimonialWidget::widget() ?>


    <section id="get-quote">
        <div class="container">
            <div class="sec-heading light">
                <h2>Get a Quote</h2>
                <span class="sub-head">for Best price And Service</span>
            </div>
            <div class="contact-form form-inline">
                <?php
                $form = ActiveForm::begin(['id' => 'contact-form', 'options' => [
                ]]);
                ?>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Type your name', 'required' => true])->label(FALSE) ?>
                        <!--<input type="text" name="your-name" value="" class="" aria-required="true" aria-invalid="false" placeholder="Type your name">-->
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <?= $form->field($model, 'email')->input('email', ['maxlength' => true, 'placeholder' => 'Type your email', 'required' => true])->label(FALSE) ?>
                    </div>
                    <!--                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <? $form->field($model, 'phone')->input('email', ['maxlength' => true, 'placeholder' => 'Type your email', 'required' => true])->label(FALSE) ?>
                                        </div>-->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'placeholder' => 'Type your phone', 'class' => 'form-control mobile', 'required' => true])->label(FALSE) ?>
                        <!--<input type="text" name="your-departure" value="" class="" aria-required="true" aria-invalid="false" placeholder="Departure">-->
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <?= $form->field($model, 'subject')->textInput(['maxlength' => true, 'placeholder' => 'Type your Subject', 'required' => true])->label(FALSE) ?>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?= $form->field($model, 'message')->textarea(['maxlength' => true, 'placeholder' => 'Type your Message', 'class' => 'text_message', 'required' => true])->label(FALSE) ?>
                        <!--<input type="text" name="cargo-description" value="" class="" aria-required="true" aria-invalid="false" placeholder="Cargo Description">-->
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?= Html::submitButton('get a quote', ['class' => 'quote-submit-btn']) ?>
                        <!--<input type="submit" name="submit" value="get a quote" class="submit-btn">-->
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </section>

    <?= FeaturesWidget::widget() ?>



</div>

