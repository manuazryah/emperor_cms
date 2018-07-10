<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\PortPosition;
use common\models\PortPositionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PortPositionController implements the CRUD actions for PortPosition model.
 */
class PortPositionController extends Controller {

    public function beforeAction($action) {
        if (!parent::beforeAction($action)) {
            return false;
        }
        if (Yii::$app->user->isGuest) {
            $this->redirect(['/site/index']);
            return false;
        }
        return true;
    }

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
     * Lists all PortPosition models.
     * @return mixed
     */
    public function actionIndex() {

        $searchModel = new PortPositionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PortPosition model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PortPosition model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new PortPosition();
        $model->setScenario('create');

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $file1 = UploadedFile::getInstance($model, 'file');
            $model->file = $file1->extension;
            if ($model->validate() && $model->save()) {

                if (!empty($file1)) {
                    $this->upload($model, $file1);
                }
                Yii::$app->session->setFlash('success', "New position added Successfully");
                return $this->redirect(['create']);
            }
        }return $this->render('create', [
                    'model' => $model,
        ]);
    }

    public function Upload($model, $file) {
        if (!is_dir(\Yii::$app->basePath . '/../uploads/port-position/' . $model->id . '/')) {
            mkdir(\Yii::$app->basePath . '/../uploads/port-position/' . $model->id . '/');
            chmod(\Yii::$app->basePath . '/../uploads/port-position/' . $model->id . '/', 0777);
        }
        $file->saveAs(Yii::$app->basePath . '/../uploads/port-position/' . $model->id . '/' . $model->title . '.' . $file->extension);
        return TRUE;
    }

    /**
     * Updates an existing PortPosition model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $file_ = $model->file;
        $title_ = $model->title;


        if ($model->load(Yii::$app->request->post()) || Yii::$app->SetValues->Attributes($model)) {
            $file1 = UploadedFile::getInstance($model, 'file');
            if (!empty($file1))
                $model->file = $file1->extension;
            else
                $model->file = $file_;
            PortPosition::fileName($title_, $model);
            if ($model->validate() && $model->save()) {
                if (!empty($file1)) {
                    $this->upload($model, $file1);
                }
            }
            Yii::$app->session->setFlash('success', "Position Updated Successfully");
//            return $this->redirect(['index']);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PortPosition model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PortPosition model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PortPosition the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = PortPosition::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
