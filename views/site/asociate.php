<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */
use yii\bootstrap4\ActiveForm;

$this->title = 'Asociate';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-site mt-4">
    <div class="login-box container-site">
        <div class="card card-asociate m-auto">
            <div class="card-body  ">

                <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => true]); ?>
                <form action="login.html" method="post">
                    <div class="input-group mb-3">
                        <input  class="form-control" placeholder="Nombre" name="User[username]">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input  class="form-control" placeholder="Apelllido" name="User[username]">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input  class="form-control" placeholder="Dni" name="User[username]">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input  class="form-control" placeholder="Celular" name="User[username]">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input  class="form-control" placeholder="Email" name="User[username]">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Domicilio"name="User[password]">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Localidad"name="User[password]">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" placeholder="Localidad"name="User[password]">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" placeholder="Localidad"name="User[password]">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat background-bluesite text-uppercase text-overpassbold">ASOCIATE</button>
                        </div>
                    </div>
                    Completar y adjuntar los siguientes archivos
                    <ul class="list-unstyled mt">
                        <li>  <a href="/files/fichasocio.pdf" title="" download="ficha-socio-adeherente.pdf">  <i class="fas fa-file-pdf"> </i> Ficha Adhesión </a> </li>
                        <li>  <a href="/files/autorizaciondebito.pdf" title="" download="autorizacion-cbu.pdf">  <i class="fas fa-file-pdf"> </i> Autorizaión CBU </a> </li>
                    </ul>
                    <?php ActiveForm::end(); ?>


            </div>

        </div>
    </div>  
</div>