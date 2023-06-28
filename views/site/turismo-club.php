<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Beneficios';
$this->params['breadcrumbs'][] = $this->title;
?>


    <div class="row row-turismo">
        <!-- Columna con desplazamiento -->
        <div class="col-lg-6 scroll-column">
            <h3 class="text-blue-site text-overpassbalck text-uppercase"> CLUB PEUMAYEN </h3>
            <p class="text-justify"> 
                En la ciudad de Viedma, sobre la Ruta Provincial N°1, a solo 8 km. 
                contamos con un predio frente al río, totalmente parquizado, con un salón para 150 personas, 
                canchas de paddle, fogones al aire libre, cancha de fútbol, duchas y vestuarios.

            </p>
            <h6 class="text-blue-site text-overpassbold text-uppercase"> Contacto: </h6>
            <ul class="list-unstyled">
                <li> <i class="fa fa-map-marker"></i> Falta Contenido </li>
                <li> <i class="fa fa-mobile-phone"></i>   Falta Contenido </li>
                <li> <i class="fa-brands fa-mail-bulk"></i> Falta Contenido </li>               
            </ul>
            <h6 class="text-blue-site text-overpassbold text-uppercase"> Nuestras Redes: </h6>           
                    <i class="fa-brands fa-facebook fa-2x"></i>
                    <i class="fa-brands fa-instagram  fa-2x"></i>
                
        </div>

        <div class="col-lg-6 carousel-column">
            <div id="carouselExampleIndicators1" class="carouselExampleIndicators carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                </ol>
                <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'pep' . DIRECTORY_SEPARATOR; ?>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '3.jpg'; ?>" alt="Imagen 1" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '3.jpg'; ?>" alt="Imagen 2" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '3.jpg'; ?>" alt="Imagen 3" data-toggle="modal" data-target="#imageModal">
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
