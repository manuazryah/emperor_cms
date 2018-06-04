<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\widgets\Alert;

/* @var $this yii\web\View */
/* @var $model common\models\IndexSliders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="index-sliders-form form-inline">
    <?= Alert::widget(); ?>
    <?php $form = ActiveForm::begin(); ?>

    <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    </div>
    <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
        <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    </div>
    
    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
                <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

        </div>
    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
        <?= $form->field($model, 'status')->dropDownList(['1' => 'Enabled', '0' => 'Disabled']) ?>

    </div>
    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
        <?= $form->field($model, 'image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>(1349x900)</label>{input}{error}'])->fileInput(['maxlength' => true]) ?>
        <?php
        if ($model->isNewRecord)
            echo "";
        else {
            if (!empty($model->image)) {
                ?>

                <img src="<?= Yii::$app->homeUrl ?>../uploads/sliders/<?= $model->id ?>/small.<?= $model->image; ?>" width="125" height="100"/>
                <?php
            }
        }
        ?>
    </div>

    <div class='col-md-12 col-sm-12 col-xs-12'>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style' => 'margin-top: 18px; height: 36px; width:100px;float: right;']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
