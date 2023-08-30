<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class AdminController extends Controller
{
    
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
    public function actionBeneficios()
    {
        try {
            $searchModel = new \app\models\search\BeneficiosSearch();            
            $searchModel->load(Yii::$app->request->get());            
          
            $dataProvider = new ActiveDataProvider([
                'query' => $query,
                'sort' => [
                    'defaultOrder' => [
                        'id' => SORT_DESC,
                    ]
                ],                
            ]);  
        } catch (Exception $e) {   
            \Yii::$app->getSession()->setFlash('error', 'Excepcion. ' . $e->getMessage());
            \Yii::$app->getModule('audit')->data('catchedexc', \yii\helpers\VarDumper::dumpAsString($e));
        }
        
        return $this->render('gestionbeneficios', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel
        ]);
    }
    

}
