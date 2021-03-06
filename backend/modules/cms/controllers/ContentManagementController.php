<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\ContentManagement;
use common\models\ContentManagementSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ContentManagementController implements the CRUD actions for ContentManagement model.
 */
class ContentManagementController extends Controller {

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
     * Lists all ContentManagement models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ContentManagementSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ContentManagement model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ContentManagement model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new ContentManagement();

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $image = UploadedFile::getInstance($model, 'image');
            $model->image = $image->extension;
            if ($model->validate() && $model->save()) {
                if (!empty($image)) {
                    $path = Yii::$app->basePath . '/../uploads/content/' . $model->id . '/';
                    $size = [
                        ['width' => 100, 'height' => 60, 'name' => 'small'],
                        ['width' => 970, 'height' => 606, 'name' => 'image'],
                    ];
                    Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                }
                Yii::$app->session->setFlash('success', "New Content added Successfully");
                $model = new ContentManagement();
            }
        }return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing ContentManagement model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $image_ = $model->image;

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $image = UploadedFile::getInstance($model, 'image');
            if (!empty($image))
                $model->image = $image->extension;
            else
                $model->image = $image_;
            if ($model->validate() && $model->save()) {
                if (!empty($image)) {
                    $path = Yii::$app->basePath . '/../uploads/content/' . $model->id . '/';
                    $size = [
                        ['width' => 100, 'height' => 60, 'name' => 'small'],
                        ['width' => 970, 'height' => 606, 'name' => 'image'],
                    ];
                    Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                }
            }
            Yii::$app->session->setFlash('success', "Content Updated Successfully");
            return $this->redirect(['update', 'id' => $model->id]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ContentManagement model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ContentManagement model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ContentManagement the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = ContentManagement::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
