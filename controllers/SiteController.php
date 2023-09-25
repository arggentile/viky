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
        try{
            if ( Yii::$app->request->isPost ) {

                $params = Yii::$app->params;
                $data = Yii::$app->request->post();

                $files = \yii\web\UploadedFile::getInstancesByName('files');

                $envio =  $this->crearEmail('arg.gentile@gmail.com', 'Formulario Asociate', 'asociate', $data, $files,  $params);

                \Yii::$app->response->format = 'json';

                if($envio){
                    $response = array(
                        'code' => 200,
                        'success' => true,
                        'message' => 'ok',
                    );
                    return $response;                
                }else{
                    $response = array(
                        'code' => 200,
                        'success' => false,
                        'message' => 'error',
                    );
                    return $response;
                }
            }
        }catch (Exception $e) {
            var_dump(\yii\helpers\VarDumper::dumpAsString($e)); exit;
            // \Yii::error('Error grave de exception');
            //return false;
        }     
        
        return $this->render('asociate');
    }
    
    
    private function crearEmail($address, $subject, $view, $data, $files = [], $params, $cc = [], $ccd = [] , $adjuntos = []){
        try{
        $mailer = \Yii::$app->mailer->compose($view, array_merge($params, $data))             
                        ->setFrom('info@planarg.website')
                        ->setTo($address)
                        ->setSubject($subject);
        
        if(!empty($files) || count($files)>0){
            foreach($files as $_adjunto){
                $mailer->attach($_adjunto->tempName, ['fileName' => $_adjunto->name]);
            }
        }
       
        if(!$mailer->send()){        
            throw new Exception('Error enviando el archivo');
        }
            
        return true;
        }catch (Exception $e) {
//            var_dump(\yii\helpers\VarDumper::dumpAsString($e)); exit;
//            // \Yii::error('Error grave de exception');
            return false;
        }        
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
     * Displays about page.
     *
     * @return string
     */
    public function actionTurismo()
    {
        $get = Yii::$app->request->get();
        $page = $get["page"];
        
        switch($page){      
            case 'prin':      
                $view = 'principal';
                break;
            case 'grutas':      
                $view = 'las-grutas';
                break;
            case 'hotel':      
                $view = 'hotel';
                break;
            case 'bolson':      
                $view = 'el-bolson';
                break;
            case 'condor':      
                $view = 'condor';
                break;
            case 'club':      
                $view = 'club';
                break;
            case 'bariloche':      
                $view = 'bariloche';
                break;
            default:  
                 $view = 'principal';
                break;
        }  
        return $this->render('turismo/'.$view);
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
