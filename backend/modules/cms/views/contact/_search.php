<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ContactSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'office1') ?>

    <?= $form->field($model, 'email1') ?>

    <?= $form->field($model, 'mobile1') ?>

    <?= $form->field($model, 'office2') ?>

    <?php // echo $form->field($model, 'email2') ?>

    <?php // echo $form->field($model, 'mobile2') ?>

    <?php // echo $form->field($model, 'office3') ?>

    <?php // echo $form->field($model, 'email3') ?>

    <?php // echo $form->field($model, 'mobile3') ?>

    <?php // echo $form->field($model, 'office4') ?>

    <?php // echo $form->field($model, 'email4') ?>

    <?php // echo $form->field($model, 'mobile4') ?>

    <?php // echo $form->field($model, 'map') ?>

    <?php // echo $form->field($model, 'UB') ?>

    <?php // echo $form->field($model, 'DOU') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
