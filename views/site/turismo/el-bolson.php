<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'El Bolsón';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cabecera-turismo cabecera-turismo-elcondor">
    <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'turismo' . DIRECTORY_SEPARATOR . 'bolson' . DIRECTORY_SEPARATOR; ?>
    <img class="d-block w-100" src="<?= $directorioImagenes . 'cabecera.jpg'; ?>" alt="El Bolson"> 
</div>
<div class="container-site">
<h3 class="text-center mt-5 mb-5"> <span class="overpassblack text-blue-site">  El Bolson </span> </h3>


    <div class="row p-descrip-page mt-3">
        <!-- Columna con desplazamiento -->
        <div class="col-lg-6 pr-lg-5 pr-md-5 scroll-column overpassthin text-left">  
            <span class="overpassbold"> El Bolson </span>
            <p> 
                El Bolsón se encuentra en el departamento Bariloche, al sudoeste de la provincia de Río Negro y a 18 Km.
                del Parque Nacional Lago Puelo en la Provincia de Chubut. Favorecido por un microclima apacible, este pueblo de
                montaña está preparado para recibir a todo tipo de visitantes. Naturaleza, aventura, historia, mitos, cultura y tranquilidad 
                son algunos ingredientes que garantizan unas gratas vacaciones. A 120 Km. hacia el sur de Bariloche, por un magnífico camino 
                de montaña, nos encontramos con el valle de El Bolsón, una región que centra su actividad en el cultivo orgánico de la tierra, 
                las artesanías, la producción de dulces y cerveza y el turismo. El Bolsón está custodiado por altos cordones montañosos entre 
                los que se encuentra el imponente Cerro Piltriquitron, que lo protege de los vientos, formando una “gran bolsa”. Estas cualidades
                derivan en un microclima ideal para actividades productivas y recreativas.
                A 4 km de la plaza pagano, en la subida 3 Cipreses. Se accede en vehículo o a pie y pueden realizarse caminatas por los alrededores
            </p>
        </div>

        <div class="col-lg-6 pl-lg-5 carousel-column">
            <div id="carousel1" class="carouselIndicators carousel slide" data-ride="carousel">
            
                <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'turismo' . DIRECTORY_SEPARATOR . 'bolson' . DIRECTORY_SEPARATOR; ?>
                 <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'bolson1.jpg'; ?>" alt="Bolson" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'bolson2.jpg'; ?>" alt="Bolson" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'bolson3.jpg'; ?>" alt="Bolson" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'bolson4.jpg'; ?>" alt="Bolson" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'bolson5.jpg'; ?>" alt="Bolson" data-toggle="modal" data-target="#imageModal">
                    </div>
                     <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'bolson6.jpg'; ?>" alt="Bolson" data-toggle="modal" data-target="#imageModal">
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

    <div class="divider"></div>



    <div class="row p-descrip-page">
        <div class="col-lg-6 pr-lr-5 pr-md-5 carousel-column">
            <div id="carousel2" class="carouselIndicators carousel slide" data-ride="carousel">
            
                <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'turismo' . DIRECTORY_SEPARATOR . 'bolson' . DIRECTORY_SEPARATOR; ?>
                 <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'comp-bolson1.jpg'; ?>" alt="Complejo El Bolson" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'comp-bolson2.jpg'; ?>" alt="Complejo El Bolson" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'comp-bolson3.jpg'; ?>" alt="Complejo El Bolson" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'comp-bolson4.jpg'; ?>" alt="Complejo El Bolson" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'comp-bolson5.jpg'; ?>" alt="Complejo El Bolson" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'comp-bolson6.jpg'; ?>" alt="Complejo El Bolson" data-toggle="modal" data-target="#imageModal">
                    </div>
                     <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'comp-bolson7.jpg'; ?>" alt="Complejo El Bolson" data-toggle="modal" data-target="#imageModal">
                    </div>
                     <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'comp-bolson8.jpg'; ?>" alt="Complejo El Bolson" data-toggle="modal" data-target="#imageModal">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
            
        
            <!-- Columna con desplazamiento -->
          <div class="col-lg-6 pl-lg-5 pl-md-5 scroll-column overpassthin text-right">
                <span class="overpassbold"> Nuestro Complejo </span>
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
</div>

<div class="container-fluid">
    <div class="row comollego pt-4 pb-4 pr-5 pl-5">
        <div class="comollego-container">
            <div class="pl-4 pr-4">
                <ul class="list-unstyled">
                    <li> <p class="display-4  overpassbold comollego">  
                      <span class="display-3">  ¿Cómo <br /> llego? </span></p> </li>
                    <br />
                    <li> <button type="button" class="btn overpassbold comollego">  <i class="fa-solid fa-location-dot pr-5 h1"></i><span class="h1">   complejo </span></button></li>
                    <li> <button type="button" class="btn overpassbold comollego"> <i class="fa-solid fa-location-dot pr-5  h1"></i><span class="h1">   camping </span></button> </li>
                </ul>
            </div>

            <div class='pl-4 comollego-description'>            
                <b>En avión</b>, hasta el aeropuerto de Bariloche. Luego en auto o colectivo.<br /><br />
                <b>En colectivo</b>, desde todas las terminales nacionales arribando a la terminal de El Bolsón.<br /><br />
                <b>En auto</b>, la distancia desde Buenos Aires es de 1700 km. Por rutas nacionales 237 y 5.<br /><br />
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