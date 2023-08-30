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
    
    
    /*******************************************************/
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionError()
    {
        
        return $this->render('error', [
        ]);
    }
    
    
    
    
    /*******************************************************/
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
        try{
            $modelbeneficios = \app\models\Beneficios::find()->all();
        } catch (\yii\base\Exception $e) {         
            var_dump($e->getMessage());  exit;
            \Yii::$app->getSession()->setFlash('error', 'Excepcion. ' . $e->getMessage());
            \Yii::$app->getModule('audit')->data('catchedexc', \yii\helpers\VarDumper::dumpAsString($e));
        }
        return $this->render('beneficios', ['beneficios' => $modelbeneficios]);
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
     * Displays about page.
     *
     * @return string
     */
    public function actionAsociate()
    {
        
        return $this->render('asociate');
    }
    
    
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionOtros()
    {
        try{
            $modelbeneficios = \app\models\Beneficios::find()->all();
        } catch (\yii\base\Exception $e) {         
            var_dump($e->getMessage());  exit;
            \Yii::$app->getSession()->setFlash('error', 'Excepcion. ' . $e->getMessage());
            \Yii::$app->getModule('audit')->data('catchedexc', \yii\helpers\VarDumper::dumpAsString($e));
        }
        return $this->render('beneficios', ['beneficios' => $modelbeneficios]);
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
    public function actionTurismoPrincipal()
    {
        
        return $this->render('turismo-principal');
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
    
    
     /**
     * Displays about page.
     *
     * @return string
     */
    public function actionTurismoClub()
    {
        
        return $this->render('turismo-club');
    }
    
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionTurismoHotel()
    {
        
        return $this->render('turismo-hotel');
    }
    
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionTurismoBolson()
    {
        
        return $this->render('turismo-el-bolson');
    }
    
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionTurismoBariloche()
    {
        
        return $this->render('turismo-bariloche');
    }
    
    
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionTurismoLasGrutas()
    {
        
        return $this->render('turismo-las-grutas');
    }
    
    public  function actionDownload() {
       try {   
            $idMultimedia = Yii::$app->request->get('id');
       
            $urlprev = Yii::$app->request->referrer;
            
            $multimedia = \app\models\Multimedia::findOne($idMultimedia);
            if(empty($multimedia)){
                \Yii::$app->session->setFlash('error', 'No se puede Descargar el Archivo.');
                return Yii::$app->response->redirect($urlprev);    
            }

            /* Tomar el path desde configuracion cuando este hecho */
            $file = Yii::getAlias('@files') . '/' . $multimedia->id;

            if (file_exists($file)) {
                // Iniciar descarga
            
                header("Pragma: public"); // required
                header("Expires: 0");
                header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
                header("Cache-Control: private", false); // required for certain browsers
                //header('Content-Type: application/pdf');
                header("Content-Length: " . filesize($file));
                header("Content-Transfer-Encoding: binary");
                header('Content-Disposition: attachment; filename="' . $multimedia->nombre_archivo . '"');
                @readfile($file);
                \Yii::$app->end();
            } else {
                \Yii::$app->session->setFlash('error', 'No existe el archivo fisicamente.');
                return Yii::$app->response->redirect($urlprev); 
                \Yii::$app->end();
            }
            
            
        } catch (\yii\base\Exception $e) {
            \Yii::$app->getModule('audit')->data('catchedexc-ErrorDescargarAduntos', \yii\helpers\VarDumper::dumpAsString($e));
            \Yii::$app->session->setFlash('error', 'No se puede Descargar el Archivo.');
            return Yii::$app->response->redirect($urlprev);
            
        }
    } 
}
