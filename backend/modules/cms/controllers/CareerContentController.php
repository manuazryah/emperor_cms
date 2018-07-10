<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\CareerContent;
use common\models\CareerContentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * CareerContentController implements the CRUD actions for CareerContent model.
 */
class CareerContentController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all CareerContent models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new CareerContentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CareerContent model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new CareerContent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new CareerContent();
//        $model->setScenario('create');

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $image = UploadedFile::getInstance($model, 'image');
            $model->image = $image->extension;
            if ($model->validate() && $model->save()) {
//                if (!empty($image)) {
//                    $path = Yii::$app->basePath . '/../uploads/career_contents/' . $model->id . '/';
//                    $size = [
//                        ['width' => 100, 'height' => 100, 'name' => 'small'],
//                        ['width' => 1920, 'height' => 602, 'name' => 'image'],
//                    ];
//                    Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
//                }
                Yii::$app->session->setFlash('success', "Career Content added Successfully");
                $model = new CareerContent();
            }
        }return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing CareerContent model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model) && $model->save()) {
            return $this->redirect(['update', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CareerContent model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CareerContent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CareerContent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = CareerContent::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
