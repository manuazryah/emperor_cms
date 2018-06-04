<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\TermsConditions */

$this->title = 'Update Terms Conditions for car package';
$this->params['breadcrumbs'][] = ['label' => 'Terms Conditions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


            </div>
            <div class="panel-body">
                <div class="panel-body"><div class="terms-conditions-create">
                        <div class="terms-conditions-form form-inline">

                            <?php $form = ActiveForm::begin(); ?>
                            <div class="row">
                                <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
                                    <?=
                                    $form->field($model, 'section1', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                                        'options' => ['rows' => 2],
                                        'preset' => 'custom',
                                    ])
                                    ?>
                                </div>
                                <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
                                    <?=
                                    $form->field($model, 'section2', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                                        'options' => ['rows' => 2],
                                        'preset' => 'custom',
                                    ])
                                    ?>
                                </div>
                                <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
                                    <?=
                                    $form->field($model, 'section3', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                                        'options' => ['rows' => 2],
                                        'preset' => 'custom',
                                    ])
                                    ?>
                                </div>
                                <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
                                    <?=
                                    $form->field($model, 'section4', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                                        'options' => ['rows' => 2],
                                        'preset' => 'custom',
                                    ])
                                    ?>
                                </div>
                                <div class='col-md-12 col-sm-12 col-xs-12'>
                                    <div class="form-group">
                                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style' => 'float:right;']) ?>
                                    </div>
                                </div>
                            </div>
                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
