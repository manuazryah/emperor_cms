<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\IndexSlidersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Index Sliders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index-sliders-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= Html::a('<i class="fa-th-list"></i><span> Create Index Sliders</span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                    <?= \common\widgets\Alert::widget(); ?>
                    <?=
                    GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],
                            'title',
                                [
                                'attribute' => 'description',
                                'format' => 'raw',
                                'value' => function($model) {
                                    $newtext = wordwrap($model->description, 60, "<br />\n");
                                    return $newtext;
                                },
                            ],
                                [
                                'attribute' => 'image',
                                'format' => 'raw',
                                'value' => function ($data) {
                                    if (!empty($data->image))
                                        $img = '<img width="120px" src="' . Yii::$app->homeUrl . '../uploads/sliders/' . $data->id . '/small.' . $data->image . '"/>';
                                    return $img;
                                },
                            ],
                            //'title',
                            [
                                'attribute' => 'status',
                                'value' => function($model, $key, $index, $column) {
                                    if ($model->status == '0') {
                                        return 'Disabled';
                                    } elseif ($model->status == '1') {
                                        return 'Enabled';
                                    }
                                },
                                'filter' => [0 => 'Disabled', 1 => 'Enabled'],
                            ],
                            // 'CB',
                            // 'UB',
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


