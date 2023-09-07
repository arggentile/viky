<?php

/** @var yii\web\View $this */
use yii\helpers\Html;

$this->title = 'Beneficios';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="cabecera-turismo cabecera-turismo-elcondor">
    <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'turismo' . DIRECTORY_SEPARATOR; ?>
    <img class="d-block w-100" src="<?= $directorioImagenes . 'cabeceraviedma.jpg'; ?>" alt="Viedma"> 
</div>
<div class="container-site">
    <h3 class="text-center mt-5 mb-5"> <span class="overpassblack text-blue-site">  Hotel Peumayen </span> </h3>
    <div class="row p-descrip-page mt-3">

        <div class="col-lg-6 pr-lg-5 pr-md-5 scroll-column overpassthin text-left">       
            <span class="overpassbold"> Nuestro Hotel </span>
            <p> 
                Nuestro Hotel se encuentra en la ciudad de Viedma, en calle Buenos Aires 334, en pleno centro comercial de la ciudad.<br /><br />
                Su excelente ubicación, lo sitúa a pocos metros de los atractivos turísticos de la ciudad, como así también de la mejor oferta gastronómica.<br /><br />
                Cuenta con los siguientes servicios: habitaciones single, dobles, triples, cuadruples y quintuple, TV, desayuno buffet, WiFi, Cochera.<br /><br />
            </p>
            <br />
            <ul class="list-unstyled">
                <li>  <a href="#" title="">  <i class="fas fa-file-pdf"> </i> Tarifas </a> </li>
            </ul>
            <span class="overpassbold"> Contacto </span>
            <ul class="list-unstyled">
                <li> <a href="https://goo.gl/maps/oypfCyfgzmkkTVx59" target="_blank">  <i class="fa-solid fa-location-dot"></i> Buenos Aires 334, Viedma, Río Negro. C.P: 8500 </a>  </li>
                <li> <i class="fa fa-phone"></i>   02920 425222 </li>
                <li> <i class="fa-regular fa-envelope-open"></i> <a href="mailto:hotelpeumayen@rnonline.com.ar">hotelpeumayen@rnonline.com.ar</a> </li>
            </ul>
            <span class="overpassbold"> Nuestras Redes </span>
             <ul class="list-unstyled list-page-roww">
            <li><i class="fa-brands fa-facebook fa-2x"></i>
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