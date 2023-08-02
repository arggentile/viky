<?php
/*
 * This file is part of the 2amigos/yii2-usuario project.
 *
 * (c) 2amigOS! <http://2amigos.us/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use Da\User\Widget\ConnectWidget;

use yii\helpers\Html;
use kartik\select2\Select2;
use yii\bootstrap4\ActiveForm;

/**
 * @var yii\web\View            $this
 * @var \Da\User\Form\LoginForm $model
 * @var \Da\User\Module         $module
 */
?>
<?= $this->render('/shared/_alert', ['module' => Yii::$app->getModule('user')]) ?>
<style>
    .main-page, .register-page {
        height: 100vh;

    }
    
    .panel {
        margin-bottom: 0px;
    }
</style>
<div class="login-box">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-body">

                    <?php
                    $form = ActiveForm::begin(
                                    [
                                        'id' => $model->formName(),
                                        'enableAjaxValidation' => true,
                                        'enableClientValidation' => false,
                                        'validateOnBlur' => false,
                                        'validateOnType' => false,
                                        'validateOnChange' => false,
                                    ]
                            )
                    ?>

                    <?= $form->field($model, 'login', ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control', 'tabindex' => '1']]) ?>
                    
                    
                    <?=
                    $form->field($model, 'organismo')->widget(Select2::classname(), [
                        'data' => [],
                        'bsVersion' => '4.x',
                        'theme' => Select2::THEME_KRAJEE,
                        'options' => [  'placeholder' => 'Organismo..', 
                                        'class' => 'select2 form-control'],
                        'pluginOptions' => [
                            'allowClear' => true,
                            'class' => 'form-control'
                        ],
                    ]);
                    ?> 
                    
                    <?= $form->field($model, 'password', ['inputOptions' => ['class' => 'form-control', 'tabindex' => '3']])->passwordInput()->label(Yii::t('usuario', 'Password')) ?>

                    <?= $form->field($model, 'rememberMe')->checkbox(['tabindex' => '5', 'label' => 'Recordarme']) ?>    

                    <?= ($module->allowPasswordRecovery ? Html::a(Yii::t('usuario', 'Forgot password?'), ['/user/recovery/request'], ['tabindex' => '6']) : '') ?>
                    <br><br>
                    <?= Html::submitButton('Ingresar', ['class' => 'btn btn-primary btn-block', 'id'=> 'btn-confirm-loguin','tabindex' => '4']) ?>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <?php if ($module->enableEmailConfirmation): ?>
                <p class="text-center">
                    <?=
                    Html::a(
                            Yii::t('usuario', 'Didn\'t receive confirmation message?'),
                            ['/user/registration/resend']
                    )
                    ?>
                </p>
            <?php endif ?>
            <?=
            ConnectWidget::widget(
                    [
                        'baseAuthUrl' => ['/user/security/auth'],
                    ]
            )
            ?>
                
            <p class="text-center"><b>Versión</b> <?= \Yii::$app->version; ?></p> 
        </div>
    </div>
</div>