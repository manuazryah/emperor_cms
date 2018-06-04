<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\HouseBoatPackageTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'House Boat Package Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="house-boat-package-type-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">
                    <?=
                    $this->render('_form', [
                        'model' => $model,
                    ])
                    ?>

                    <?=
                    GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
//                                                            'id',
                            'package_name',
//            'status',
//            'CB',
//            'UB',
                            // 'DOC',
                            // 'DOU',
                            ['class' => 'yii\grid\ActionColumn',
                                'template' => '{update}{delete}'],
                        ],
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


