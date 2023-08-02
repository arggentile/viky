<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-box">
    <div class="card card-login" style="background-color: transparent">
        <div class="card-body login-card-body">

            <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => true]); ?>
            <form action="login.html" method="post">
                <div class="input-group mb-3">
                    <input  class="form-control" placeholder="Email" name="User[username]">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password"name="User[password]">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat background-bluesite text-uppercase text-overpassbold">Ingresar</button>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>


        </div>

    </div>
</div>
