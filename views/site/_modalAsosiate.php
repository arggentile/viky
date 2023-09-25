<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */
use yii\bootstrap4\ActiveForm;

$this->title = 'Asociate';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="container-lg mt-4" id="conatin-form-asociate">
    <div class="login-box">
        <div class="card card-asociate m-auto">
            <div class="card-body  ">

                <?php $form = ActiveForm::begin(['id' => 'asociate-form', 'enableClientValidation' => true]); ?>
                <form action="login.html" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" required placeholder="Nombre"name="FormAsociate[nombre]">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fa-regular fa-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" required placeholder="Apelllido"name="FormAsociate[apellido]">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fa-regular fa-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" required placeholder="D.N.I"name="FormAsociate[dni]">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fa-regular fa-address-card"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" required placeholder="Celular"name="FormAsociate[celular]">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" required  placeholder="Email"name="FormAsociate[email]">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" required placeholder="Domicilio"name="FormAsociate[domicilio]">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fa-solid fa-house"></i>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" required placeholder="Localidad"name="FormAsociate[localidad]">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fa-regular fa-compass"></i>
                            </div>
                        </div>
                    </div>
                
                    <div class="input-group mb-3">
                        <input type="file" name="files[]" class="form-control" required placeholder="Ficha Autorizacion"name="FormAsociate[fichaadhesion]">
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" name="files[]" class="form-control" required placeholder="Localidad"name="FormAsociate[fichaautorizacion]">
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat background-bluesite text-uppercase overpassbold formpreventsubmit">ASOCIATE</button>
                        </div>
                    </div>
                    
                    <span class="mt-3 mb-3 overpassbold text-blue-site"> Completar y adjuntar los siguientes archivos. </span> 
                    
                    <ul class="list-unstyled mt">
                        <li>  <a href="/files/fichasocio.pdf" title="" download="ficha-socio-adeherente.pdf">  <i class="fas fa-file-pdf"> </i> Ficha Adhesión </a> </li>
                        <li>  <a href="/files/autorizaciondebito.pdf" title="" download="autorizacion-cbu.pdf">  <i class="fas fa-file-pdf"> </i> Autorizaión CBU </a> </li>
                    </ul>
                    <?php ActiveForm::end(); ?>


            </div>

        </div>
    </div>  
</div>

<div class="alert alert-primary" role="alert" id="alert-exito-asociate">
  Formulario enviado con éxito! 
</div>