<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CareerApplicationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Career Applications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="career-applications-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">
                    <div class="table-responsive" style="border: none">
                        <?=
                        GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],
//                                'id',
                                'name',
                                'email:email',
                                'phone',
                                'position',
                                'portfolio_url:url',
                                [
                                    'attribute' => 'cv',
                                    'label' => 'Resume',
                                    'format' => 'raw', 'value' => function ($data) {
                                        if (!empty($data->cv))
                                            $img = '<a target="_blank" href="' . Yii::$app->homeUrl . '../uploads/career_cvs/' . $data->id . '/cv.' . $data->cv . '"/>Click here to View Resume';
                                        return $img;
                                    },
                                ],
                            // 'message:ntext',
                            // 'status',
                            // 'CB',
                            // 'UB',
                            // 'DOC',
                            // 'DOU',
//                                ['class' => 'yii\grid\ActionColumn'],
                            ],
                        ]);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".filters").slideToggle();
        $("#search-option").click(function () {
            $(".filters").slideToggle();
        });
    });
</script>

