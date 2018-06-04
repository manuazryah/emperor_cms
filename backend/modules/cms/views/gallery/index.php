<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SliderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gallery Images';
$this->params['breadcrumbs'][] = $this->title;
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
<div class="slider-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
                </div>
                <div class="panel-body">
                    <div><a class="gal-frm">Add New Images</a></div>
                    <div class="gallery-form form-inline hidediv1">
                        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
                        <div class="row">
                            <div class='col-md-4 col-sm-6col-xs-12 left_padd'>    
                                <?= $form->field($model, 'package_type')->dropDownList(['1' => 'Car Packages', '2' => 'Tempo Traveler', '3' => 'Pilgrimage', '4' => 'House Boats'], ['prompt' => 'Select Package']) ?>

                            </div>
                            <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>  
                                <?= $form->field($model, 'image[]', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 798x466 ) ]</label>{input}{error}'])->fileInput(['multiple' => true])->label(FALSE) ?>
                            </div>
                            <div class='col-md-4 col-sm-6 col-xs-12'>
                                <div class="form-group">
                                    <?= Html::submitButton('Create', ['class' => 'btn btn-success', 'style' => 'margin-top: 30px;']) ?>
                                </div>
                            </div>
                        </div>
                        <?php ActiveForm::end(); ?>

                    </div>
                    <div class="row gallery-images">
                        <div class="col-md-12">

                            <div class="tabs-vertical-env">

                                <ul class="nav tabs-vertical">
                                    <li class="active"><a href="#v-all" data-toggle="tab" aria-expanded="false">Show All</a></li>
                                    <li class=""><a href="#v-car" data-toggle="tab" aria-expanded="false">Car Packages</a></li>
                                    <li class=""><a href="#v-traveler" data-toggle="tab" aria-expanded="false">Tempo Traveler</a></li>
                                    <li class=""><a href="#v-pilgrimage" data-toggle="tab" aria-expanded="true">Pilgrimage</a></li>
                                    <li class=""><a href="#v-houseboat" data-toggle="tab" aria-expanded="true">House Boats</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="v-all">
                                        <div class="row">
                                            <?php
                                            $path = Yii::getAlias('@paths') . '/gallery/car_package';
                                            if (count(glob("{$path}/*")) > 0) {
                                                $k = 0;
                                                foreach (glob("{$path}/*") as $file) {
                                                    $k++;
                                                    $arry = explode('/', $file);
                                                    $img_nmee = end($arry);

                                                    $img_nmees = explode('.', $img_nmee);
                                                    if ($img_nmees['1'] != '') {
                                                        ?>

                                                        <div class = "col-md-4 img-box" id="<?= $k; ?>">
                                                            <div class="news-img">
                                                                <img class="img-responsive" src="<?= Yii::$app->homeUrl . '../uploads/gallery/car_package/' . end($arry) ?>">
                                                                <?= Html::a('<i class="fa fa-remove"></i>', ['/cms/gallery/remove', 'path' => Yii::$app->basePath . '/../uploads/gallery/car_package/' . end($arry)], ['class' => 'gal-img-remove']) ?>
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
                                            <?php
                                            $path = Yii::getAlias('@paths') . '/gallery/tempo_traveler';
                                            if (count(glob("{$path}/*")) > 0) {
                                                $k = 0;
                                                foreach (glob("{$path}/*") as $file) {
                                                    $k++;
                                                    $arry = explode('/', $file);
                                                    $img_nmee = end($arry);

                                                    $img_nmees = explode('.', $img_nmee);
                                                    if ($img_nmees['1'] != '') {
                                                        ?>

                                                        <div class = "col-md-4 img-box" id="<?= $k; ?>">
                                                            <div class="news-img">
                                                                <img class="img-responsive" src="<?= Yii::$app->homeUrl . '../uploads/gallery/tempo_traveler/' . end($arry) ?>">
            <?= Html::a('<i class="fa fa-remove"></i>', ['/cms/gallery/remove', 'path' => Yii::$app->basePath . '/../uploads/gallery/tempo_traveler/' . end($arry)], ['class' => 'gal-img-remove']) ?>
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
                                            <?php
                                            $path = Yii::getAlias('@paths') . '/gallery/pilgrimage';
                                            if (count(glob("{$path}/*")) > 0) {
                                                $k = 0;
                                                foreach (glob("{$path}/*") as $file) {
                                                    $k++;
                                                    $arry = explode('/', $file);
                                                    $img_nmee = end($arry);

                                                    $img_nmees = explode('.', $img_nmee);
                                                    if ($img_nmees['1'] != '') {
                                                        ?>

                                                        <div class = "col-md-4 img-box" id="<?= $k; ?>">
                                                            <div class="news-img">
                                                                <img class="img-responsive" src="<?= Yii::$app->homeUrl . '../uploads/gallery/pilgrimage/' . end($arry) ?>">
                                                        <?= Html::a('<i class="fa fa-remove"></i>', ['/cms/gallery/remove', 'path' => Yii::$app->basePath . '/../uploads/gallery/pilgrimage/' . end($arry)], ['class' => 'gal-img-remove']) ?>
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
                                            <?php
                                            $path = Yii::getAlias('@paths') . '/gallery/house_boats';
                                            if (count(glob("{$path}/*")) > 0) {
                                                $k = 0;
                                                foreach (glob("{$path}/*") as $file) {
                                                    $k++;
                                                    $arry = explode('/', $file);
                                                    $img_nmee = end($arry);

                                                    $img_nmees = explode('.', $img_nmee);
                                                    if ($img_nmees['1'] != '') {
                                                        ?>

                                                        <div class = "col-md-4 img-box" id="<?= $k; ?>">
                                                            <div class="news-img">
                                                                <img class="img-responsive" src="<?= Yii::$app->homeUrl . '../uploads/gallery/house_boats/' . end($arry) ?>">
                                                        <?= Html::a('<i class="fa fa-remove"></i>', ['/cms/gallery/remove', 'path' => Yii::$app->basePath . '/../uploads/gallery/house_boats/' . end($arry)], ['class' => 'gal-img-remove']) ?>
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
                                    </div>
                                    <div class="tab-pane" id="v-car">
                                        <?php
                                        $path = Yii::getAlias('@paths') . '/gallery/car_package';
                                        if (count(glob("{$path}/*")) > 0) {
                                            $k = 0;
                                            foreach (glob("{$path}/*") as $file) {
                                                $k++;
                                                $arry = explode('/', $file);
                                                $img_nmee = end($arry);

                                                $img_nmees = explode('.', $img_nmee);
                                                if ($img_nmees['1'] != '') {
                                                    ?>

                                                    <div class = "col-md-4 img-box" id="<?= $k; ?>">
                                                        <div class="news-img">
                                                            <img class="img-responsive" src="<?= Yii::$app->homeUrl . '../uploads/gallery/car_package/' . end($arry) ?>">
                                                    <?= Html::a('<i class="fa fa-remove"></i>', ['/cms/gallery/remove', 'path' => Yii::$app->basePath . '/../uploads/gallery/car_package/' . end($arry)], ['class' => 'gal-img-remove']) ?>
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
                                    <div class="tab-pane" id="v-traveler">
                                        <?php
                                        $path = Yii::getAlias('@paths') . '/gallery/tempo_traveler';
                                        if (count(glob("{$path}/*")) > 0) {
                                            $k = 0;
                                            foreach (glob("{$path}/*") as $file) {
                                                $k++;
                                                $arry = explode('/', $file);
                                                $img_nmee = end($arry);

                                                $img_nmees = explode('.', $img_nmee);
                                                if ($img_nmees['1'] != '') {
                                                    ?>

                                                    <div class = "col-md-4 img-box" id="<?= $k; ?>">
                                                        <div class="news-img">
                                                            <img class="img-responsive" src="<?= Yii::$app->homeUrl . '../uploads/gallery/tempo_traveler/' . end($arry) ?>">
                                                    <?= Html::a('<i class="fa fa-remove"></i>', ['/cms/gallery/remove', 'path' => Yii::$app->basePath . '/../uploads/gallery/tempo_traveler/' . end($arry)], ['class' => 'gal-img-remove']) ?>
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
                                    <div class="tab-pane" id="v-pilgrimage">
<?php
$path = Yii::getAlias('@paths') . '/gallery/pilgrimage';
if (count(glob("{$path}/*")) > 0) {
    $k = 0;
    foreach (glob("{$path}/*") as $file) {
        $k++;
        $arry = explode('/', $file);
        $img_nmee = end($arry);

        $img_nmees = explode('.', $img_nmee);
        if ($img_nmees['1'] != '') {
            ?>

                                                    <div class = "col-md-4 img-box" id="<?= $k; ?>">
                                                        <div class="news-img">
                                                            <img class="img-responsive" src="<?= Yii::$app->homeUrl . '../uploads/gallery/pilgrimage/' . end($arry) ?>">
                                                    <?= Html::a('<i class="fa fa-remove"></i>', ['/cms/gallery/remove', 'path' => Yii::$app->basePath . '/../uploads/gallery/pilgrimage/' . end($arry)], ['class' => 'gal-img-remove']) ?>
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
                                    <div class="tab-pane" id="v-houseboat">
<?php
$path = Yii::getAlias('@paths') . '/gallery/house_boats';
if (count(glob("{$path}/*")) > 0) {
    $k = 0;
    foreach (glob("{$path}/*") as $file) {
        $k++;
        $arry = explode('/', $file);
        $img_nmee = end($arry);

        $img_nmees = explode('.', $img_nmee);
        if ($img_nmees['1'] != '') {
            ?>

                                                    <div class = "col-md-4 img-box" id="<?= $k; ?>">
                                                        <div class="news-img">
                                                            <img class="img-responsive" src="<?= Yii::$app->homeUrl . '../uploads/gallery/house_boats/' . end($arry) ?>">
            <?= Html::a('<i class="fa fa-remove"></i>', ['/cms/gallery/remove', 'path' => Yii::$app->basePath . '/../uploads/gallery/house_boats/' . end($arry)], ['class' => 'gal-img-remove']) ?>
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
                                </div>

                            </div>	

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .hidediv1{
        display:none;
    }
    .gal-frm{
        color: #009688;
        font-size: 15px;
        font-weight: 600;
        text-decoration: underline;
        cursor: pointer;
    }
    .gal-frm:hover{
        color: #009688;
        font-size: 15px;
        font-weight: 600;
        text-decoration: underline;
        cursor: pointer;
    }
    .gallery-form{
        margin-top: 20px;
        border-bottom: 2px solid #e8e4e4;
    }
    .gallery-images{
        background: #f5f3f3;
        padding: 22px 0px;
        margin-top: 25px;
    }
</style>
<script>
    $(document).ready(function () {
        $('.gal-frm').click(function () {
            $('.hidediv1').slideToggle();
        });
    });
</script>


