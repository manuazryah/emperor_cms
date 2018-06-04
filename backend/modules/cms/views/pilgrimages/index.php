<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PilgrimagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pilgrimages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pilgrimages-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body table-responsive">
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= Html::a('<i class="fa-th-list"></i><span> Create Pilgrimages</span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                    <?=
                    GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],
//                                                            'id',
                            [
                                'attribute' => 'image',
                                'format' => 'raw',
                                'value' => function ($data) {
                                    if (!empty($data->image))
                                        $img = '<img width="120px" src="' . Yii::$app->homeUrl . '../uploads/pilgrimages/' . $data->id . '/small.' . $data->image . '"/>';
                                    return $img;
                                },
                            ],
                                [
                                'attribute' => 'title',
                                'format' => 'raw',
                                'value' => function ($data) {
                                    if (!empty($data->title)) {
                                        $description = wordwrap($data->title, 20, "<br />\n");
                                        return $description;
                                    } else {
                                        return '';
                                    }
                                },
                            ],
                                [
                                'attribute' => 'sub_title',
                                'format' => 'raw',
                                'value' => function ($data) {
                                    if (!empty($data->sub_title)) {
                                        $description = wordwrap($data->sub_title, 20, "<br />\n");
                                        return $description;
                                    } else {
                                        return '';
                                    }
                                },
                            ],
                                [
                                'attribute' => 'description',
                                'format' => 'raw',
                                'value' => function ($data) {
                                    if (!empty($data->description)) {
                                        $newtext = wordwrap($data->description, 50, "<br />\n");
                                        return $newtext;
                                    } else {
                                        return '';
                                    }
                                },
                            ],
//            'image',
                            // 'status',
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


