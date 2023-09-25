<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Nuestro Club';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="cabecera-turismo cabecera-turismo-elcondor">
    <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'turismo' . DIRECTORY_SEPARATOR . 'club' . DIRECTORY_SEPARATOR; ?>
    <img class="d-block w-100" src="<?= $directorioImagenes . 'viedma.jpg'; ?>" alt="Banner Viedma"> 
</div>
<div class="container-site">
    <h3 class="text-center mt-5 mb-5"> <span class="overpassblack text-blue-site">  Club Peumayen </span>  </h3>
    <div class="row p-descrip-page mt-3">
       
        <div class="col-lg-6 pr-lg-5 pr-md-5 scroll-column overpassthin text-left">       
            <span class="overpassbold"> El Club </span>
             <p> 
                En la ciudad de Viedma, sobre la Ruta Provincial N°1, a solo 8 km. 
                contamos con un predio frente al río, totalmente parquizado, con un salón para 150 personas, 
                canchas de paddle, fogones al aire libre, cancha de fútbol, duchas y vestuarios.

            </p>
            <br />
            <span class="overpassbold"> Contacto </span>
            <ul class="list-unstyled list-page-roww">
                <li> <i class="fa fa-map-marker"></i> Falta Contenido </li>
                <li> <i class="fa fa-mobile-phone"></i>   Falta Contenido </li>
                <li> <i class="fa-brands fa-mail-bulk"></i> Falta Contenido </li>               
            </ul>
            <span class="overpassbold"> Nuestras Redes </span>
            <ul class="list-unstyled list-page-roww">
                <li> <i class="fa-brands fa-facebook fa-2x"></i>
                <i class="fa-brands fa-instagram  fa-2x"></i></li>
            </ul> 
        </div>

        <div class="col-lg-6 pl-lg-5 carousel-column">
            <div id="carousel1" class="carouselIndicators carousel slide" data-ride="carousel">
                <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'turismo' . DIRECTORY_SEPARATOR . 'club' . DIRECTORY_SEPARATOR; ?>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'club.jpg'; ?>" alt="Portada Club" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'club1.jpg'; ?>" alt="Entrada Club" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'club2.jpg'; ?>" alt="Fachada Club" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'club3.jpg'; ?>" alt="Cancha Club" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'club4.jpg'; ?>" alt="Salon Club" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'club5.jpg'; ?>" alt="Salon Club" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'club6.jpg'; ?>" alt="Salon Afuera Club" data-toggle="modal" data-target="#imageModal">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </div>    
</div>

<div class="container-fluid">
    <div class="row comollego pt-4 pb-4 pr-5 pl-5">
        <div class="comollego-container">
            <div class="pl-4 pr-4">
                <ul class="list-unstyled">
                    <li> <p class="display-4 overpassbold comollego">  
                        <span class="display-3">  ¿Cómo <br /> llego? </span></p> </li>
                    <br />
                    <li> <a type="button" target="_blank" href="https://maps.app.goo.gl/tRAhByZRzidckVwp9" class="btn overpassbold comollego">  <i class="fa-solid fa-location-dot pr-5 h1"></i><span class="h1">   club </span></a></li>
                </ul>
            </div>

            <div class='pl-4 comollego-description'> 
                Ubicado en el km 10 de la ruta provincial N°1. Arribando a Viedma por los siguientes medios luego tomar dicha ruta.
                <br /><br />
                <b>En avión</b>, hasta el aeropuerto de Viedma.<br /><br />
                <b>En colectivo</b>, desde todas las terminales nacionales hasta Viedma.<br /><br />
                <b>En el Tren Patagónico</b>, que sale desde Bariloche, y atraviesa toda la provincia de Río Negro, arribando a Viedma.<br /><br />
                <b>En auto</b>, desde diferentes rutas nacionales hasta tomar la RPN°1.<br /><br />
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
