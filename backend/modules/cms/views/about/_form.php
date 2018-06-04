<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\About */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    .img-box{
        margin: 10px 0px;
    }
    .news-img{
        border: 1px solid #e4dede;
    }
    .gal-img-remove{
        position: absolute;
        top: 6px;
        right: 16px;
        font-size: 16px;
        color: red;
    }
</style>
<div class="about-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'> 
            <?=
            $form->field($model, 'content', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>

        </div> 
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'image[]', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 1400x933 ) ]</label>{input}{error}'])->fileInput(['multiple' => true])->label(FALSE) ?>

        </div>
    </div>
    <div class="row">
        <?php
        $path = Yii::getAlias('@paths') . '/about_slider';
        if (count(glob("{$path}/*")) > 0) {
            $k = 0;
            foreach (glob("{$path}/*") as $file) {
                $k++;
                $arry = explode('/', $file);
                $img_nmee = end($arry);

                $img_nmees = explode('.', $img_nmee);
                if ($img_nmees['1'] != '') {
                    ?>

                    <div class = "col-md-3 img-box" id="<?= $k; ?>">
                        <div class="news-img">
                            <img class="img-responsive" src="<?= Yii::$app->homeUrl . '../uploads/about_slider/' . end($arry) ?>">
                            <?= Html::a('<i class="fa fa-remove"></i>', ['/cms/about/remove', 'path' => Yii::$app->basePath . '/../uploads/about_slider/' . end($arry)], ['class' => 'gal-img-remove']) ?>
                        </div> 
                    </div>


                    <?php
                }
                if ($k % 4 == 0) {
                    ?>
                    <div class="clearfix"></div>
                <?php
                }
            }
        }
        ?>
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
