<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="page-banner-area about-banner">
    <div class="container">
        <div class="title-command-wrapper">
            <h1 class="title">Contact</h1>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="breadcrumb-active">Contact</a></li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div id="content">
    <section id="contact-icon-box">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="icon-box">
                        <div class="content">
                            <div class="contact-info">
                                <h6 class="title"><?= $contacts_content->office1 ?></h6>
                                <ul>
                                    <li><?= $contacts_content->email1 ?></li>
                                    <li><?= $contacts_content->mobile1 ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="icon-box">
                        <div class="content">
                            <div class="contact-info">
                                <h6 class="title"><?= $contacts_content->office2 ?></h6>
                                <ul>
                                    <li><?= $contacts_content->email2 ?></li>
                                    <li><?= $contacts_content->mobile2 ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="icon-box">
                        <div class="content">
                            <div class="contact-info">
                                <h6 class="title"><?= $contacts_content->office3 ?></h6>
                                <ul>
                                    <li><?= $contacts_content->email3 ?></li>
                                    <li><?= $contacts_content->mobile3 ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="icon-box">
                        <div class="content">
                            <div class="contact-info">
                                <h6 class="title"><?= $contacts_content->office4 ?></h6>
                                <ul>
                                    <li><?= $contacts_content->email4 ?></li>
                                    <li><?= $contacts_content->mobile4 ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div id="contact-map">
                    <div class="contact-info">
                        <?php
                        if ($contact_address) {
                            foreach ($contact_address as $contacts) {
                                ?>
                                <div class="box">
                                    <h5><?= $contacts->title ?></h5>
                                    <ul>
                                        <li><i class="fas fa-map-marker-alt"></i><?= $contacts->address ?></li>
                                        <li><i class=""></i><?= $contacts->postoffice ?></li>
                                        <li><i class="fas fa-phone"></i><?= $contacts->mobile ?></li>
                                        <li><i class="fas fa-envelope"></i><?= $contacts->email ?></li>
                                    </ul>
                                    <!--                                    <ul>
                                                                            <li><i class="fas fa-map-marker-alt"></i><?= $contacts->address ?></li>
                                                                            <li><i class="fas fa-"></i><?= $contacts->mobile ?></li>
                                                                            <li><i class="fas fa-phone"></i><?= $contacts->mobile ?></li>
                                                                            <li><i class="fas fa-envelope"></i><?= $contacts->email ?></li>
                                                                        </ul>-->
                                </div>
                                <?php
                            }
                        }
                        ?>
                        <!--                        <div class="box">
                                                    <h5>Head Office</h5>
                                                    <ul>
                                                        <li><i class="fas fa-map-marker-alt"></i>Thomas Nolan Kaszas 5322 Otter Ln Middleberge</li>
                                                        <li><i class="fas fa-phone"></i>(+1) 910-740-6026 / (+1) 910-742-2717</li>
                                                        <li><i class="fas fa-envelope"></i>info@emperor.ae</li>
                                                    </ul>
                                                </div>
                                                <div class="box">
                                                    <h5>Head Office</h5>
                                                    <ul>
                                                        <li><i class="fas fa-map-marker-alt"></i>Thomas Nolan Kaszas 5322 Otter Ln Middleberge</li>
                                                        <li><i class="fas fa-phone"></i>(+1) 910-740-6026 / (+1) 910-742-2717</li>
                                                        <li><i class="fas fa-envelope"></i>info@emperor.ae</li>
                                                    </ul>
                                                </div>-->
                    </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="title">
                        <img width="40" height="18" src="<?= Yii::$app->homeUrl ?>images/icons/ship.png" class="img-fluid" alt="">
                        <h5>Get In Touch</h5>
                    </div>
                    <?php $form = ActiveForm::begin(); ?>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Type your name', 'class' => '', 'required' => true])->label(FALSE) ?>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <?= $form->field($model, 'email')->input('email', ['placeholder' => 'Type your email', 'class' => '', 'required' => true])->label(FALSE) ?>
                            <!--<input type="email" name="your-email" value="" class="" required="" aria-required="true" aria-invalid="false" placeholder="Type your email">-->
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                            <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'placeholder' => 'Type your phone', 'class' => 'mobile', 'required' => true])->label(FALSE) ?>
                            <!--<input type="text" name="subject" value="" class="" required="" aria-required="true" aria-invalid="false" placeholder="Subject">-->
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                            <?= $form->field($model, 'subject')->textInput(['maxlength' => true, 'placeholder' => 'Type your Subject', 'class' => '', 'required' => true])->label(FALSE) ?>
                            <!--<input type="text" name="subject" value="" class="" required="" aria-required="true" aria-invalid="false" placeholder="Subject">-->
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <?= $form->field($model, 'message')->textarea(['maxlength' => true, 'placeholder' => 'Type your Message', 'class' => 'text_message', 'required' => true, 'cols' => '40', 'rows' => '10'])->label(FALSE) ?>
                            <!--<textarea name="message" cols="40" rows="10" class="" required="" aria-required="true" aria-invalid="false" placeholder="Your Message"></textarea>-->
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <?= Html::submitButton('submit message', ['class' => 'submit-btn']) ?>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-map">
        <iframe src="<?= $contacts_content->map ?>" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

</div>

