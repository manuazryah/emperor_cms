<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ContentManagement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="content-management-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'> 
            <?= $form->field($model, 'page')->textInput(['maxlength' => true, 'readonly' => true]) ?>

        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>   
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>  
            <?= $form->field($model, 'image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 970x606 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->image)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/content/<?= $model->id ?>/small.<?= $model->image; ?>" width="100" height="60"/>
                    <?php
                }
            }
            ?>

        </div>
    </div>
    <div class="row">
<!--        <div class='col-md-8 col-sm-6 col-xs-12 left_padd'> 
            <? $form->field($model, 'content')->textarea(['rows' => 6]) ?>

        </div>-->
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>  
            <?= $form->field($model, 'status')->dropDownList(['1' => 'Enabled', '0' => 'Disabled']) ?>

        </div>  
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
