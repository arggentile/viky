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
<h3 class="text-center mt-5 mb-5"> <span class="text-overpassbold text-blue-site">  El Bolson </h3>


    <div class="row p-descrip-page mt-3">
        <!-- Columna con desplazamiento -->
        <div class="col-lg-6 pr-lg-5 pr-md-5 scroll-column text-overpassthin text-align-right">  
            <span class="text-overpassbalck"> El Bolson </span>
            <p> 
                El Bolsón se encuentra en el departamento Bariloche, al sudoeste de la provincia de Río Negro y a 18 Km.
                del Parque Nacional Lago Puelo en la Provincia de Chubut. Favorecido por un microclima apacible, este pueblo de
                montaña está preparado para recibir a todo tipo de visitantes. Naturaleza, aventura, historia, mitos, cultura y tranquilidad 
                son algunos ingredientes que garantizan unas gratas vacaciones. A 120 Km. hacia el sur de Bariloche, por un magnífico camino 
                de montaña, nos encontramos con el valle de El Bolsón, una región que centra su actividad en el cultivo orgánico de la tierra, 
                las artesanías, la producción de dulces y cerveza y el turismo. El Bolsón está custodiado por altos cordones montañosos entre 
                los que se encuentra el imponente Cerro Piltriquitron, que lo protege de los vientos, formando una “gran bolsa”. Estas cualidades
                derivan en un microclima ideal para actividades productivas y recreativas.
            </p>
        </div>

        <div class="col-lg-6 pl-lg-5 carousel-column">
            <div id="carouselExampleIndicators1" class="carouselExampleIndicators carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                </ol>
                <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'turismo' . DIRECTORY_SEPARATOR . 'bolson' . DIRECTORY_SEPARATOR; ?>
                 <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'bols1.jpg'; ?>" alt="Imagen 1" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'bols2.jpg'; ?>" alt="Imagen 2" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'bols3.jpg'; ?>" alt="Imagen 3" data-toggle="modal" data-target="#imageModal">
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
    <div class="col-lg-6 pr-lr-5 pr-md-5 carousel-column">
            <div id="carouselExampleIndicators2" class="carouselExampleIndicators carousel slide" data-ride="carousel">
                
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'bols1.jpg'; ?>" alt="Imagen 1" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'bols2.jpg'; ?>" alt="Imagen 2" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'bols3.jpg'; ?>" alt="Imagen 3" data-toggle="modal" data-target="#imageModal">
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
        <div class="col-lg-6 pl-lg-5 pl-md-5 scroll-column text-overpassthin text-align-left">
            <span class="text-overpassbalck"> Nuestro Complejo </span>
            <p > 
                Se sitúa al pie del cerro Piltriquitrón, contamos con un predio totalmente parquizado de más de 10.000mts2, de fácil acceso, garantizando tranquilidad para tu familia.
            </p>
            <p> 
                Contamos con 3 cabañas totalmente amobladas para 6 personas, con las siguientes comodidades:
                <ul class="list-unstyled">
                    <li> <i class="fa-solid fa-circle fa-2xs"></i> 2 dormitorios </li>
                    <li> <i class="fa-solid fa-circle fa-2xs"></i> cocina/comedor </li>
                    <li> <i class="fa-solid fa-circle fa-2xs"></i> 1 baño </li>
                    <li> <i class="fa-solid fa-circle fa-2xs"></i> estacionamiento para vehículo propio </li>
                    <li> <i class="fa-solid fa-circle fa-2xs"></i> fogón y parrilla </li>
                    <li> <i class="fa-solid fa-circle fa-2xs"></i> televisor led con señal satelital </li>
                    <li> <i class="fa-solid fa-circle fa-2xs"></i> WiFi </li>
                </ul>
            </p>
        </div>

        
    </div>
