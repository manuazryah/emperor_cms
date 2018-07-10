<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HomeContentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-content-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'about_content') ?>

    <?= $form->field($model, 'image') ?>

    <?= $form->field($model, 'service_content') ?>

    <?= $form->field($model, 'feature_title1') ?>

    <?php // echo $form->field($model, 'feature_1') ?>

    <?php // echo $form->field($model, 'feature_title2') ?>

    <?php // echo $form->field($model, 'feature_2') ?>

    <?php // echo $form->field($model, 'feature_title3') ?>

    <?php // echo $form->field($model, 'feature_3') ?>

    <?php // echo $form->field($model, 'feature_title4') ?>

    <?php // echo $form->field($model, 'feature_4') ?>

    <?php // echo $form->field($model, 'UB') ?>

    <?php // echo $form->field($model, 'DOU') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
