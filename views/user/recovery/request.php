<?php
/*
 * This file is part of the 2amigos/yii2-usuario project.
 *
 * (c) 2amigOS! <http://2amigos.us/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View               $this
 * @var yii\widgets\ActiveForm     $form
 * @var \Da\User\Form\RecoveryForm $model
 */
$this->title = Yii::t('usuario', 'Recover your password');
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .main-page, .register-page {
        height: 90vh;

    }
</style>
<div class="login-box">
    <div class="login-logo">
        <p><img src="<?= Yii::getAlias('@images'); ?>/logo_choique.png" class="img-circle" alt="Choique" style="border: solid; border-color: gray; border-width: 1px"><p>
        <h1 class="h4 mb-3 font-weight-normal" style="color: #848688;">
            <b>DEFENSORIA</b>MP | <b style="color: #367fa9;"><img style="width: 17px; height: 17px" src="<?= Yii::getAlias('@images'); ?>/location-outline.svg"> <?= strtoupper(\Yii::$app->params['host']); ?></b>
        </h1>
        <img class="mb-4" src="<?= Yii::getAlias('@images'); ?>/logo_mp.png" alt="Ministerio Fiscal" width="250" height="69">
    </div>
    <!-- /.login-logo -->

    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php
                $form = ActiveForm::begin(
                                [
                                    'id' => $model->formName(),
                                    'enableAjaxValidation' => true,
                                    'enableClientValidation' => false,
                                ]
                );
                ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                <?= Html::submitButton(Yii::t('usuario', 'Continue'), ['class' => 'btn btn-primary btn-block']) ?><br>
                
                <?= Html::a(Yii::t('usuario', 'Sign in'),  ['/user/login'],['tabindex' => '2']) ?>
                <br>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>