<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\TermsConditions;
use common\models\TermsConditionsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TermsConditionsController implements the CRUD actions for TermsConditions model.
 */
class TermsConditionsController extends Controller {

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
     * Lists all TermsConditions models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new TermsConditionsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCarPackage() {
        $id = 1;
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model) && $model->save()) {
            Yii::$app->session->setFlash('success', "Terms and Conditions Updated Successfully");
            return $this->redirect(['car-package']);
        }

        return $this->render('car-package', [
                    'model' => $model,
        ]);
    }

    public function actionTravelerPackage() {
        $id = 2;
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model) && $model->save()) {
            Yii::$app->session->setFlash('success', "Terms and Conditions Updated Successfully");
            return $this->redirect(['traveler-package']);
        }

        return $this->render('traveler-package', [
                    'model' => $model,
        ]);
    }

    public function actionBoatPackage() {
        $id = 3;
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model) && $model->save()) {
            Yii::$app->session->setFlash('success', "Terms and Conditions Updated Successfully");
            return $this->redirect(['boat-package']);
        }

        return $this->render('boat-package', [
                    'model' => $model,
        ]);
    }

    /**
     * Displays a single TermsConditions model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TermsConditions model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new TermsConditions();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TermsConditions model.
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
     * Deletes an existing TermsConditions model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TermsConditions model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TermsConditions the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = TermsConditions::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
