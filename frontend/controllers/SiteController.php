<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\UploadForm;
use yii\web\UploadedFile;
use common\models\Slider;
use common\models\HomeContent;
use common\models\Ports;
use common\models\About;
use common\models\Gallery;
use common\models\Download;
use common\models\ContactForm;
use common\models\PortPosition;
use common\models\ContactAddress;
use common\models\Services;
use common\models\UsefulLinks;
use common\models\HomePageService;
use common\models\Contact;

/**
 * Site controller
 */
class SiteController extends Controller {

    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup', 'chairmans-message', 'subscribe-mail'],
                'rules' => [
                    [
                        'actions' => ['signup', 'chairmans-message', 'subscribe-mail'],
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
        $sliders = Slider::find()->where(['status' => '1'])->all();
        $about_content = HomeContent::findOne(1);
        $emirates = Ports::find()->where(['status' => 1])->all();
        $services = Services::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->all();
        $home_services = HomePageService::find()->where(['status' => 1])->all();
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            $model->date = date('Y-m-d');
            if ($model->validate() && $model->save()) {
                $this->sendContactMail($model);
                return $this->refresh();
            }
        }
        return $this->render('index', [
                    'sliders' => $sliders,
                    'about_content' => $about_content,
                    'emirates' => $emirates,
                    'model' => $model,
                    'services' => $services,
                    'home_services' => $home_services,
        ]);
    }

    public function actionAbout() {
        $about = About::findOne(1);
        return $this->render('abouts', [
                    'about' => $about
        ]);
    }

    /**
     * Displays Port position page.
     *
     * @return mixed
     */
    public function actionPortPosition() {
        $port_position = PortPosition::find()->where(['status' => 1])->all();
        return $this->render('port', [
                    'port_position' => $port_position
        ]);
    }

    /**
     * Displays gallery page.
     *
     * @return mixed
     */
    public function actionGallery() {
        $galleries = Gallery::find()->where(['status' => 1])->all();
        return $this->render('gallery', [
                    'galleries' => $galleries
        ]);
    }

    /**
     * Displays Useful links page.
     *
     * @return mixed
     */
    public function actionUsefulLinks() {
        $useful_links = UsefulLinks::find()->where(['status' => 1])->all();
        return $this->render('links', [
                    'useful_links' => $useful_links
        ]);
    }

    public function actionPortsWeServe() {
        $emirates = Ports::find()->where(['status' => 1])->all();
        return $this->render('ports-we-serve', [
                    'emirates' => $emirates,
        ]);
    }

    /**
     * Displays Download page.
     *
     * @return mixed
     */
    public function actionDownload() {
        $downloads = Download::find()->where(['status' => 1])->all();
        $useful_links = UsefulLinks::find()->where(['status' => 1])->all();
        return $this->render('download', [
                    'downloads' => $downloads,
                    'useful_links' => $useful_links
        ]);
    }

    public function actionContact() {
        $contacts = ContactAddress::find()->where(['status' => 1])->all();
        $contacts_content = Contact::findOne(1);
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            $model->date = date('Y-m-d');
            if ($model->validate() && $model->save()) {
                $this->sendContactMail($model);
                return $this->refresh();
            }
        }
        return $this->render('contacts', [
                    'contact_address' => $contacts,
                    'model' => $model,
                    'contacts_content' => $contacts_content,
        ]);
    }

    public function actionCareer() {
        $career_content = \common\models\CareerContent::findOne(1);
        $model = new \common\models\CareerApplications();
        if ($model->load(Yii::$app->request->post())) {
            $files = UploadedFile::getInstance($model, 'cv');
            if (!empty($files)) {
                $model->cv = $files->extension;
            }
            $model->DOC = date('Y-m-d');
            if ($model->validate() && $model->save()) {
                $path = Yii::$app->basePath . '/../uploads/career_cvs/' . $model->id;
                if (!is_dir($path))
                    mkdir($path);
                if (!empty($files)) {
                    $files->saveAs($path . '/cv.' . $files->extension);
                }
                $this->sendCareerMail($model);
                return $this->refresh();
            }
        }
        return $this->render('career', [
                    'career_content' => $career_content,
                    'model' => $model,
        ]);
    }

    public function actionServices($service) {
        $services = Services::find()->where(['status' => 1, 'canonical_name' => $service])->one();
        return $this->render('services', ['services' => $services]);
    }

    public function actionContactForm() {
        $model = new ContactForm();
        if ($_GET) {
            $model->name = $_GET['name'];
            $model->email = $_GET['email'];
            $model->phone = $_GET['phone'];
            $model->subject = $_GET['subject'];
            $model->message = $_GET['message'];
            $model->date = date('Y-m-d');
            if ($model->save()) {
                Yii::$app->session->setFlash('success', "Added Successfully");
                if ($this->sendContactMail($model))
                    return $this->redirect(Yii::$app->request->referrer);
//               return $this->refresh(); 
            }
        }
    }

    public function actionSubscribeMail() {
        if (Yii::$app->request->isAjax) {
            $email = $_POST['email'];
            if (!empty($email)) {
                $model = new \common\models\EmailSubscription();
                $model->email = $email;
                if ($model->save()) {
                    $subject = 'Newsletter Subscription Enquiry From emperor.ae';
                    $to = "emperor@emperorlines.com";
                    $message = $this->renderPartial('subscribe-mail', ['email' => $email,]);
                    $headers = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n" .
                            "From: no-replay@eqec.ae";
                    mail($to, $subject, $message, $headers);
                    echo json_encode(array('msg' => 'success'));
                    exit;
                } else {
                    echo json_encode(array('msg' => 'failed', 'error' => 'Email already used'));
                    exit;
                }
            }
        }
    }

    /**
     * This function send contact message to admin.
     */
    public function sendContactMail($model) {

        $subject = $model->subject;
        $to = "emperor@emperorlines.com";
        $message = $this->renderPartial('contact-mail', ['model' => $model,]);
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n" .
                "From: no-replay@eqec.ae";
        //     echo $message;exit;
        mail($to, $subject, $message, $headers);
    }

    /**
     * Response Mail function
     *
     * @return mixed
     */
    
     public function sendCareerMail($model) {

        $subject = 'Career Application from Website';
        $to = "emperor@emperorlines.com";
        $message = $this->renderPartial('career-mail', ['model' => $model,]);
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n" .
                "From: no-replay@eqec.ae";
        mail($to, $subject, $message, $headers);
    }
}
