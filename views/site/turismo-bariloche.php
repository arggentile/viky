<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Beneficios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cabecera-turismo cabecera-turismo-elcondor">
    <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'turismo' . DIRECTORY_SEPARATOR . 'condor' . DIRECTORY_SEPARATOR; ?>
    <img class="d-block w-100" src="<?= $directorioImagenes . 'cabecera.jpg'; ?>" alt="Balneario El Condor"> 
</div>
<div class="container-site">
<h3 class="text-center mt-5 mb-5"> <span class="text-overpassbold text-blue-site">  Bariloche </h3>
    <div class="row p-descrip-page">
        <!-- Columna con desplazamiento -->
        <div class="col-lg-6 scroll-column text-align-right">
            <span class="text-overpassbalck"> Bariloche </span>
            <p> 
                Bariloche es una ciudad ubicada entre bosques milenarios, montañas cubiertas de nieve 
                y lagos cristalinos, en la provincia de Río Negro, Argentina. Se trata de una postal de nuestra Patagonia.
                Una ciudad anfitriona por excelencia, enmarcada por algunas de las bellezas naturales más importantes del país.
            </p>
        </div>


        <div class="col-lg-6 carousel-column">
            <div id="carouselExampleIndicators1" class="carouselExampleIndicators carousel slide" data-ride="carousel">
                <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'turismo' . DIRECTORY_SEPARATOR . 'bariloche' . DIRECTORY_SEPARATOR; ?>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'bari1.jpg'; ?>" alt="Balneario El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'bari2.jpg'; ?>" alt="espigon" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'bari3.jpg'; ?>" alt="loberia" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'bari4.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
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

    <div class="divider"></div>



    <div class="row p-descrip-page">
    <div class="col-lg-6 carousel-column">
            <div id="carouselExampleIndicators2" class="carouselExampleIndicators carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                </ol>
                <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'turismo' . DIRECTORY_SEPARATOR . 'bariloche' . DIRECTORY_SEPARATOR; ?>
                <div class="carousel-inner">
                <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '1.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '2.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                 
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '4.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '5.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '6.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '7.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    
        <!-- Columna con desplazamiento -->
        <div class="col-lg-6 scroll-column text-align-left">
            <span class="text-overpassbalck"> Nuestro Complejo </span>
            <p> 
                Está ubicado en Calle Foyel 5243, a la altura del kilómetro 5 de la Avenida E. Bustillo, a 200mts
                del lago Nahuel Huapi y de las mejores ofertas gastronómicas de la ciudad. A su vez, se encuentra 
                a sólo 700mts del Teleférico del Cerro Otto.

            </p>
            <p class=""> 
                Contamos con 3 cabañas totalmente amobladas para 6 personas, con las siguientes comodidades: 
                <ul class="list-unstyled">
                    <li> <i class="fa-solid fa-circle fa-2xs"></i> 2 dormitorios </li>
                    <li> <i class="fa-solid fa-circle fa-2xs"></i> 1 baño </li>
                    <li> <i class="fa-solid fa-circle fa-2xs"></i> estacionamiento para vehículo propio </li>
                    <li> <i class="fa-solid fa-circle fa-2xs"></i> fogón y parrilla </li>
                    <li> <i class="fa-solid fa-circle fa-2xs"></i> televisor led con señal satelital </li>
                    <li> <i class="fa-solid fa-circle fa-2xs"></i> WiFi </li>
                </ul> 
            </p>
        </div>

        
    </div>
</div>
