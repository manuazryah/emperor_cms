<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PortPosition */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="port-position-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>  
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'file', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Pdf File </label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>

            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->file)) {
                    ?>
                    <iframe scrolling="no" src="<?= Yii::$app->homeUrl ?>../uploads/port-position/<?= $model->id ?>/<?= $model->title ?>.<?= $model->file; ?>" width="100%" height="100" ></iframe>
                    <?php
                }
            }
            ?>

        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>  
            <?= $form->field($model, 'status')->dropDownList(['1' => 'Enabled', '0' => 'Disabled']) ?>

        </div> 
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12'>
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success', 'style' => 'float:right;']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
