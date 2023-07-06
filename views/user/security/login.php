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
    <div class="login-logo">
        <p><img src="<?= Yii::getAlias('@images'); ?>/logo_choique.png" class="img-circle" alt="Choique" style="border: solid; border-color: gray; border-width: 1px"><p>
        <h1 class="h4 mb-3 font-weight-normal" style="color: #848688;">
            <b>DEFENSORIA</b>MP | <b style="color: #367fa9;"> <img style="width: 17px; height: 17px" src="<?= Yii::getAlias('@images'); ?>/location-outline.svg" > <?= strtoupper(\Yii::$app->params['host']); ?></b>
        </h1>
        <img class="mb-4" src="<?= Yii::getAlias('@images'); ?>/logo_mp.png" alt="Ministerio Fiscal" width="250" height="69">
    </div>
    <!-- /.login-logo -->
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
<!-- /.login-box -->


<?php
$js = <<<EOL
        $('body').on('change', '#loginform-login', function (event, data) {            
            $.get('/site/mis-organismo?username=' + $(this).val())
                .done(function (response) {
                    $('#loginform-organismo').empty();  
                    $.each(response, function (id, value) {
                        $('#loginform-organismo').append('<option value='+ id + '>' + value + '</option>');
                    });
                    $('#loginform-organismo').select2({ width: '100%' }).trigger('change');
                })
                .fail(function (e) {
                    console.log(e.responseText);
                }); 
        }); 
        
        
       
    EOL;
$this->registerJs($js, \yii\web\View::POS_READY);
?>