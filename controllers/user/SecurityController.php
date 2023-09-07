<?php

namespace app\controllers\user;

use Yii;
use yii\base\InvalidConfigException;
use yii\base\InvalidParamException;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\widgets\ActiveForm;

use Da\User\Controller\SecurityController as BaseController;

class SecurityController extends BaseController {

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'confirm', 'auth', 'blocked','change-org'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['login', 'auth', 'logout','change-org'],
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['get'],
                ],
            ],
        ];
    }


    
     /**
     * Controller action responsible for handling login page and actions.
     *
     * @throws InvalidConfigException
     * @throws InvalidParamException
     * @return array|string|Response
     */
    public function actionLogin()
    {
        
        $this->layout = '@app/views/layouts/main-login.php';
        
        if (!Yii::$app->user->getIsGuest()) {
            return $this->goHome();
        }

        /** @var LoginForm $form */
        $form = $this->make(\app\models\forms\LoginForm::class);

        /** @var FormEvent $event */
        $event = $this->make(\Da\User\Event\FormEvent::class, [$form]);

        if (Yii::$app->request->isAjax && $form->load(Yii::$app->request->post())) {
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

            return ActiveForm::validate($form);
        }

        if ($form->load(Yii::$app->request->post())) {
            if ($this->module->enableTwoFactorAuthentication && $form->validate()) {
                if ($form->getUser()->auth_tf_enabled) {
                    Yii::$app->session->set('credentials', ['login' => $form->login, 'pwd' => $form->password]);

                    return $this->redirect(['confirm']);
                }
            }

            $this->trigger(\Da\User\Event\FormEvent::EVENT_BEFORE_LOGIN, $event);
            if ($form->login()) {
                $form->getUser()->updateAttributes([
                    'last_login_at' => time(),
                    'last_login_ip' => Yii::$app->request->getUserIP(),
                ]);
                Yii::$app->session->set('orgs-user', $form->organismo);
                $this->trigger(\Da\User\Event\FormEvent::EVENT_AFTER_LOGIN, $event);

                return $this->goBack();
            }
            else
            {
                $this->trigger(\Da\User\Event\FormEvent::EVENT_FAILED_LOGIN, $event);    
            }
        }
 
        return $this->render(
            'login',
            [
                'model' => $form,
                'module' => $this->module,
            ]
        );
    }
    
}