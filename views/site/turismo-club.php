<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Beneficios - Club';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="cabecera-turismo cabecera-turismo-elcondor">
    <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'turismo' . DIRECTORY_SEPARATOR . 'condor' . DIRECTORY_SEPARATOR; ?>
    <img class="d-block w-100" src="<?= $directorioImagenes . 'cabecera.jpg'; ?>" alt="Balneario El Condor"> 
</div>
<div class="container-site">
    <h3 class="text-center mt-5 mb-5"> <span class="text-overpassbold text-blue-site">  Club Peumayen  </h3>
    <div class="row p-descrip-page mt-3">
       
        <div class="col-lg-6 pr-lg-5 pr-md-5 scroll-column text-overpassthin text-align-right">       
            <span class="text-overpassbalck"> El Club </span>
             <p> 
                En la ciudad de Viedma, sobre la Ruta Provincial N°1, a solo 8 km. 
                contamos con un predio frente al río, totalmente parquizado, con un salón para 150 personas, 
                canchas de paddle, fogones al aire libre, cancha de fútbol, duchas y vestuarios.

            </p>
            <br />
            <span class="text-overpassbalck"> Contacto </span>
            <ul class="list-unstyled list-page-roww">
                <li> <i class="fa fa-map-marker"></i> Falta Contenido </li>
                <li> <i class="fa fa-mobile-phone"></i>   Falta Contenido </li>
                <li> <i class="fa-brands fa-mail-bulk"></i> Falta Contenido </li>               
            </ul>
            <span class="text-overpassbalck"> Nuestras Redes </span>
            <ul class="list-unstyled list-page-roww">
                <li> <i class="fa-brands fa-facebook fa-2x"></i>
                <i class="fa-brands fa-instagram  fa-2x"></i></li>
            </ul> 
        </div>

        <div class="col-lg-6 pl-lg-5 carousel-column">
            <div id="carouselExampleIndicators1" class="carouselExampleIndicators carousel slide" data-ride="carousel">
                <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'turismo' . DIRECTORY_SEPARATOR . 'condor' . DIRECTORY_SEPARATOR; ?>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'elcondor1.jpg'; ?>" alt="Balneario El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'elcondor2.jpg'; ?>" alt="espigon" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'elcondor3.jpg'; ?>" alt="loberia" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'elcondor4.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </div>
    
</div>



<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <img class="img-fluid" src="" alt="Ampliación de imagen">
            </div>
        </div>
    </div>
</div>
