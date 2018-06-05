<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Sectors;
use common\models\Services;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup', 'chairmans-message'],
                'rules' => [
                    [
                        'actions' => ['signup', 'chairmans-message'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout', 'chairmans-message'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex() {
        return $this->render('index');
    }

    public function actionChairmansMessage() {
        return $this->render('chairmans');
    }

    /**
     * Displays Sectors page.
     *
     * @return mixed
     */
    public function actionSectors($sector) {
        $sectors = Sectors::find()->where(['status' => 1, 'canonical_name' => $sector])->one();
        return $this->render('sector', ['sectors' => $sectors]);
    }
    /**
     * Displays Services Page.
     *
     * @return mixed
     */
    public function actionServices($service) {
        $services = Services::find()->where(['status' => 1, 'canonical_name' => $service])->one();
        return $this->render('services', ['services' => $services]);
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout() {
        $about_content = \common\models\About::find()->where(['id' => 1])->one();
        $chairmans_message = \common\models\Chairmans::find()->where(['id' => 1])->one();
        $partners = \common\models\Partners::find()->where(['status'=>1])->all();
        return $this->render('about', [
                    'about_content' => $about_content,
                    'chairmans_message' => $chairmans_message,
                    'partners' => $partners,
        ]);
    }



    /**
     * Displays careers Page.
     *
     * @return mixed
     */
    public function actionCareers() {
        return $this->render('careers');
    }

}
