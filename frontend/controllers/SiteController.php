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
use common\models\ContactForm;

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
        $about_content = \common\models\About::find()->where(['id' => 1])->one();
        $contact_info = \common\models\ContactInfo::find()->where(['id' => 1])->one();
        return $this->render('index', [
                    'about_content' => $about_content,
                    'contact_info' => $contact_info
        ]);
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
        $contact_info = \common\models\ContactInfo::find()->where(['id' => 1])->one();
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            if (isset($_POST['g-recaptcha-response']))
                $captcha = $_POST['g-recaptcha-response'];
            if ($captcha) {
                $model->date = date('Y-m-d');
                if ($model->save()) {
                    $this->sendContactMail($model);
                }
            }
            return $this->refresh();
        } return $this->render('contact', [
                    'model' => $model,
                    'contact_info' => $contact_info,
        ]);
    }

    /**
     * This function send contact message to admin.
     */
    public function sendContactMail($model) {

        $subject = "Enquiry From Equilibrium";
        $to = "manu@azryah.com";

        $message = "<html>
<head>

</head>
<body>
<p><b>Enquiry Received From Website</b></p>
<table>
<tr>
<th>Name</th>
<th>:-</th>

<td>" . $model->name . "</td>
</tr>

<tr>
<tr>
<th>Email Id</th>
<th>:-</th>

<td>" . $model->email . "</td>
</tr>

<tr>

<th>Phone</th>
<th>:-</th>
<td>" . $model->phone . "</td>
</tr>
<tr>

<th>Reason for Contact</th>
<th>:-</th>
<td>" . $model->message . "</td>
</tr>
<tr>


<tr>


</table>
</body>
</html>
";
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n" .
                "From: no-replay@equilibrium.com";
        mail($to, $subject, $message, $headers);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout() {
        $about_content = \common\models\About::find()->where(['id' => 1])->one();
        $chairmans_message = \common\models\Chairmans::find()->where(['id' => 1])->one();
        $partners = \common\models\Partners::find()->where(['status' => 1])->all();
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
        $sectors = Sectors::find()->where(['status' => 1])->all();
        return $this->render('careers', [
                    'sectors' => $sectors
        ]);
    }

}
