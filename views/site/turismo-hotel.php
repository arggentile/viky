<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Beneficios';
$this->params['breadcrumbs'][] = $this->title;
?>


    <div class="row  p-descrip-page">
        <!-- Columna con desplazamiento -->
        <div class="col-lg-6 scroll-column">
            <h1 class="text-blue-site text-overpassbalck text-uppercase text-mar-prin"> HOTEL PEUMAYEN </h1>
            <p class="text-justify"> 
                Nuestro Hotel se encuentra en la ciudad de Viedma, en calle Buenos Aires 334, en pleno centro comercial de la ciudad.<br /><br />
                Su excelente ubicación, lo sitúa a pocos metros de los atractivos turísticos de la ciudad, como así también de la mejor oferta gastronómica.<br /><br />
                Cuenta con los siguientes servicios: habitaciones single, dobles, triples, cuadruples y quintuple, TV, desayuno buffet, WiFi, Cochera.<br /><br />
            </p>
            <ul class="list-unstyled">
                <li>  <a href="#" title="">  <i class="fas fa-file-pdf"> </i> Tarifas </a> </li>
             </ul>

            <h3 class="text-blue-site text-overpassbold text-uppercase"> Contacto: </h3>
            <ul class="list-unstyled">
                <li> <i class="fa fa-map-marker"></i> Buenos Aires 334, Viedma, Río Negro. C.P: 8500 </li>
                <li> <i class="fa fa-phone"></i>   02920 425222 </li>
                <li> <i class="fa-solid fa-envelope-open-text"></i> hotelpeumayen@rnonline.com.ar </li>
            </ul>
            <h3 class="text-blue-site text-overpassbold text-uppercase mt-3"> Nuestras Redes: </h3>           
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
                <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'site' . DIRECTORY_SEPARATOR; ?>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'complejo-el-condor-03.jpg'; ?>" alt="Imagen 1" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'complejo-el-condor-02.jpg'; ?>" alt="Imagen 2" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'complejo-el-condor-01.jpg'; ?>" alt="Imagen 3" data-toggle="modal" data-target="#imageModal">
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


<!-- Modal para ampliar imágenes -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <img class="img-fluid" src="" alt="Ampliación de imagen">
            </div>
        </div>
    </div>
</div>