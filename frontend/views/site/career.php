<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="page-banner-area about-banner">
    <div class="container">
        <div class="title-command-wrapper">
            <h1 class="title">Career</h1>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index'], ['class' => 'breadcrumb-link']) ?></li>
                    <li class="breadcrumb-item"><a class="breadcrumb-active">Career</a></li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div id="content">
    <div class="why-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <?php
                    if(!empty($career_content)){ ?>
                        <h4 class="heading"><?= $career_content->title ?></h4>
                        <?= $career_content->content ?>
                   <?php }
                    ?>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12"></div>
            </div>
        </div>
    </div>
    <section class="apply-form">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12"></div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="sec-title text-center">
                        <img width="40" height="18" src="images/icons/ship.png" class="img-fluid" alt="">
                        <h5>Send To Apply</h5>
                    </div>
                     <?php $form = ActiveForm::begin(); ?>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                 <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'your name', 'class' => ''])->label(FALSE) ?>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'your email', 'class' => ''])->label(FALSE) ?>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'placeholder' => 'your number', 'class' => ''])->label(FALSE) ?>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <?= $form->field($model, 'position')->textInput(['maxlength' => true, 'placeholder' => 'Position apply', 'class' => ''])->label(FALSE) ?>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <?= $form->field($model, 'portfolio_url')->textInput(['maxlength' => true, 'placeholder' => 'Enter your portfolio url', 'class' => ''])->label(FALSE) ?>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <?= $form->field($model, 'cv', ['options' => ['class' => 'form-group']])->fileInput(['maxlength' => true, 'placeholder' => 'Upload your CV'])->label(FALSE) ?>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <?= $form->field($model, 'message')->textarea(['maxlength' => true, 'placeholder' => 'your Message', 'class' => 'text_message', 'cols' => '40', 'rows' => '10'])->label(FALSE) ?>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                 <?= Html::submitButton('submit', ['class' => 'submit-btn']) ?>
                            </div>
                        </div>
                   <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </section>
</div>