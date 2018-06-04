<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\ExitingPackages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exiting-packages-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <?php $packages = \common\models\HouseBoatPackageType::find()->all(); ?>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>  
            <?php
            if (!$model->isNewRecord && $model->packages != '') {
                $model->packages = explode(',', $model->packages);
            }
            ?>
            <?= $form->field($model, 'packages')->dropDownList(ArrayHelper::map($packages, 'id', 'package_name'), ['prompt' => '--Select--', 'multiple' => 'multiple']) ?>

        </div> 
        <div class='col-md-8 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'alt_tag')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 798x466 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->image)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/exiting_boat_package/<?= $model->id ?>/small.<?= $model->image; ?>" width="125" height="100"/>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12'>
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style' => 'float:right;']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
<link rel="stylesheet" href="<?= Yii::$app->homeUrl; ?>css/select2.css">
<link rel="stylesheet" href="<?= Yii::$app->homeUrl; ?>css/select2-bootstrap.css">
<script src="<?= Yii::$app->homeUrl; ?>js/select2.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($)
    {
        $("#exitingpackages-packages").select2({
            allowClear: true
        }).on('select2-open', function ()
        {
            $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
        });

    });
</script>
