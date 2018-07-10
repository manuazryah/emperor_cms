<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\Download;
use common\models\DownloadSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * DownloadController implements the CRUD actions for Download model.
 */
class DownloadController extends Controller {

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
     * Lists all Download models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new DownloadSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Download model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Download model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Download();
        $model->setScenario('create');

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
          
            $image = UploadedFile::getInstance($model, 'image');
            $file1 = UploadedFile::getInstance($model, 'file');
            $model->image = $image->extension;
            $model->file = $file1->extension;
            if ($model->validate() && $model->save()) {
                if (!empty($image)) {
                    $path = Yii::$app->basePath . '/../uploads/download/' . $model->id . '/';
                    $size = [
                        ['width' => 100, 'height' => 55, 'name' => 'small'],
                        ['width' => 768, 'height' => 410, 'name' => 'image'],
                    ];
                    Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                }
                if (!empty($file1)) {
                    $this->upload($model, $file1);
                }
                Yii::$app->session->setFlash('success', "New Download added Successfully");
                return $this->redirect(['create']);
            }
        }
    
            
            return $this->render('create', [
                    'model' => $model,
        ]);
    }

    public function Upload($model, $file) {
        if (!is_dir(\Yii::$app->basePath . '/../uploads/download/' . $model->id . '/')) {
            mkdir(\Yii::$app->basePath . '/../uploads/download/' . $model->id . '/');
            chmod(\Yii::$app->basePath . '/../uploads/download/' . $model->id . '/', 0777);
        }
        $file->saveAs(Yii::$app->basePath . '/../uploads/download/' . $model->id . '/download.' . $file->extension);
        return TRUE;
    }

    /**
     * Updates an existing Download model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $image_ = $model->image;
        $file_ = $model->file;
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
              
            $image = UploadedFile::getInstance($model, 'image');
            $file1 = UploadedFile::getInstance($model, 'file');
            if (!empty($image))
                $model->image = $image->extension;
            else
                $model->image = $image_;
            if (!empty($file1))
                $model->file = $file1->extension;
            else
                $model->file = $file_;
            if ($model->validate() && $model->save()) {
                if (!empty($image)) {
                    $path = Yii::$app->basePath . '/../uploads/download/' . $model->id . '/';
                    $size = [
                        ['width' => 100, 'height' => 55, 'name' => 'small'],
                        ['width' => 768, 'height' => 410, 'name' => 'image'],
                    ];
                    Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                }
                if (!empty($file1)) {
                    $this->upload($model, $file1);
                }
            }
            Yii::$app->session->setFlash('success', "Download Updated Successfully");
            return $this->redirect(['index']);
        }
       

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Download model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Download model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Download the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Download::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
