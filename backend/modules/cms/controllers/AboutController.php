<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\About;
use common\models\AboutSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * AboutController implements the CRUD actions for About model.
 */
class AboutController extends Controller {

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
     * Lists all About models.
     * @return mixed
     */
    public function actionIndex() {
        $id = 1;
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $files = UploadedFile::getInstances($model, 'image');
            if ($model->validate() && $model->save()) {
                if (!empty($files)) {
                    $this->Upload($files);
                }
            }
            Yii::$app->session->setFlash('success', "About Content Updated Successfully");
            return $this->redirect(['index']);
        }

        return $this->render('index', [
                    'model' => $model,
        ]);
    }
    
    public function Upload($files) {
        if ($files != '') {
            $paths = Yii::$app->basePath . '/../uploads/about_slider/';
            $path = $this->CheckPath($paths);
            foreach ($files as $file) {
                $name = $this->fileExists($path, $file->baseName . '.' . $file->extension, $file, 1);
                $file->saveAs($path . '/' . $name);
            }
            return true;
        } else {
            return false;
        }
    }

    public function CheckPath($paths) {
        if (!is_dir($paths)) {
            mkdir($paths);
        }
        return $paths;
    }

    public function fileExists($path, $name, $file, $sufix) {
        if (file_exists($path . '/' . $name)) {

            $name = basename($path . '/' . $file->baseName, '.' . $file->extension) . '_' . $sufix . '.' . $file->extension;
            return $this->fileExists($path, $name, $file, $sufix + 1);
        } else {
            return $name;
        }
    }

    public function actionRemove($path) {
        if (file_exists($path)) {
            unlink($path);
        }
        return $this->redirect(Yii::$app->request->referrer);
    }


    /**
     * Displays a single About model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new About model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new About();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing About model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing About model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the About model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return About the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = About::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
