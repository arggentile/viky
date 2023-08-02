<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Beneficios';
$this->params['breadcrumbs'][] = $this->title;
?>


    <div class="row p-descrip-page">
        <!-- Columna con desplazamiento -->
        <div class="col-lg-6 scroll-column">
            <h1 class="text-blue-site text-overpassbalck text-uppercase text-mar-prin"> EL BOLSON </h1>
            <p class=""> 
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

        <div class="col-lg-6 carousel-column">
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
    <div class="col-lg-6 carousel-column">
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
        <div class="col-lg-6 scroll-column">
            <h1 class="text-blue-site text-overpassbalck text-uppercase text-mar-prin"> Nuestro Complejo: </h1>
            <p class=""> 
                Se sitúa al pie del cerro Piltriquitrón, contamos con un predio totalmente parquizado de más de 10.000mts2, de fácil acceso, garantizando tranquilidad para tu familia.
            </p>
            <p class="text-justify"> 
                Contamos con 3 cabañas totalmente amobladas para 6 personas, con las siguientes comodidades:
                <ul>
                    <li> 2 dormitorios </li>
                    <li> cocina/comedor </li>
                    <li> 1 baño </li>
                    <li> estacionamiento para vehículo propio </li>
                    <li> fogón y parrilla </li>
                    <li> televisor led con señal satelital </li>
                    <li> WiFi </li>
                </ul>
            </p>
        </div>

        
    </div>
