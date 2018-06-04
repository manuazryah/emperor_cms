<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HouseBoatPackageType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="house-boat-package-type-form form-inline">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'package_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12'>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style' => 'margin-top: 35px;']) ?>
            <?= Html::a('Reset', ['index'], ['class' => 'btn btn-success mrg-top-btn']) ?>
        </div>
    </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
