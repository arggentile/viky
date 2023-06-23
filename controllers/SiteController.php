<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
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
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'main-inicio';
        return $this->render('inicio');
    }
    
    
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionInstitucional()
    {
        return $this->render('institucional');
    }
    
    
    
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionAutoridades()
    {
        return $this->render('autoridades');
    }
    
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionAfiliados()
    {
        return $this->render('afiliados');
    }
    
    

    
    
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionBeneficios()
    {
        
        return $this->render('beneficios');
    }
    
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionFarmacia()
    {
        
        return $this->render('farmacia');
    }
    
    
    
    
    
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        
        $this->layout = 'main-login';
        
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
  
    

    
    
    
    
     /**
     * Displays about page.
     *
     * @return string
     */
    public function actionTurismoCondor()
    {
        
        return $this->render('turismo-condor');
    }
}
