<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Las Grutas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cabecera-turismo cabecera-turismo-elcondor">
    <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'turismo' . DIRECTORY_SEPARATOR . 'grutas' . DIRECTORY_SEPARATOR; ?>
    <img class="d-block w-100" src="<?= $directorioImagenes . 'cabecera.jpg'; ?>" alt="Las Grutas"> 
</div>
<div class="container-site">
    <h3 class="text-center mt-5 mb-5"> <span class="overpassblack text-blue-site">  Las Grutas </span> </h3>
    <div class="row p-descrip-page">
        <!-- Columna con desplazamiento -->
        <div class="col-lg-6 scroll-column text-left ">
            <span class="overpassbold"> Las Grutas </span>
            <p class=""> 
                Las Grutas es una villa balnearia argentina ubicada en la provincia de Río Negro en el noreste de la 
                Patagonia argentina. Se encuentra dentro del ejido municipal de la ciudad de San Antonio Oeste.<br />
                <br />
                Es el más importante balneario marítimo de la Patagonia. La villa se destaca por poseer las aguas más cálidas en la costa de Argentina pese a 
                que por la latitud el preconcepto sugiere lo contrario. El hecho encuentra su explicación en que en el golfo de 
                San Matías provoca el resurgir y el asoleamiento de las aguas procedentes de las corrientes cálidas del norte 
                sobre las corrientes frías procedentes del sur, creando en la región de Las Grutas un microclima con una atractiva 
                fauna marina y un clima muy benigno para el turismo. El mar se caracteriza también por su intenso color azul y por la 
                transparencia y alta concentración de sales y yodo, factores que le otorgan un alto valor hipertónico, especialmente para niños 
                y ancianos. La playa, en la zona de influencia y servicios del balneario, se extiende a lo largo de unos 3 Km. y un ancho máximo de 1 Km.
                durante la bajamar.
                <br />
                <br />
                El centro turístico posee una amplia infraestructura de servicios. Conformada por diez 
                bajadas o paradores con servicios de playa, cuenta con excelentes y seguros sitios para los bañistas de 
                todas las edades. Invitan al turista a disfrutar en familia y realizar una gran variedad de actividades, deportes de playa, 
                entretenimientos y juegos programados, deportes náuticos, caminatas, sociales, pesca deportiva desde la costa y excursiones de pesca embarcada. 
                La transparencia del mar y su agradable temperatura, lo hacen un lugar muy apreciado para la práctica de buceo.
            </p>
        </div>

        <div class="col-lg-6 carousel-column">
            <div id="carousel1" class="carouselIndicators carousel slide" data-ride="carousel">
            <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'turismo' . DIRECTORY_SEPARATOR . 'grutas' . DIRECTORY_SEPARATOR; ?>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'playasgrutas01.jpg'; ?>" alt="Balneario El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'playasgrutas02.jpg'; ?>" alt="espigon" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'playasgrutas03.jpg'; ?>" alt="loberia" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'playasgrutas04.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
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
        <div class="col-lg-6 carousel-column">
            <div id="carousel2" class="carouselIndicators carousel slide" data-ride="carousel">
            <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'turismo' . DIRECTORY_SEPARATOR . 'grutas' . DIRECTORY_SEPARATOR; ?>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '1.jpg'; ?>" alt="Balneario El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '2.jpg'; ?>" alt="espigon" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '3.jpg'; ?>" alt="loberia" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '4.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '5.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '6.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '7.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
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
        <div class="col-lg-6 scroll-column text-right">
            <span class="overpassbold"> Nuestro Complejo</span>
            <p class=""> 
                Está situado en pleno centro peatonal del balneario, a metros de las mejores ofertas gastronómicas, 
                teatro, centro de compras, y a solo 100mts del mar.<br />
                <br />
                Contamos con 19 departamentos, totalmente amoblados para 6 personas, con las siguientes comodidades.
                <ul class="list-unstyled">

                    <li> <i class="fa-solid fa-circle fa-2xs"></i> 2 dormitorios </li>
                    <li> <i class="fa-solid fa-circle fa-2xs"></i> cocina/comedor </li>
                    <li> <i class="fa-solid fa-circle fa-2xs"></i> 2 baños </li>
                    <li> <i class="fa-solid fa-circle fa-2xs"></i> estacionamiento para vehículo propio  </li>
                    <li> <i class="fa-solid fa-circle fa-2xs"></i> entrada para vehículo individual con fogón y parrilla </li>
                    <li> <i class="fa-solid fa-circle fa-2xs"></i> pequeño patio cerrado individual </li>
                    <li> <i class="fa-solid fa-circle fa-2xs"></i> televisor led con señal satelital </li>
                    <li> <i class="fa-solid fa-circle fa-2xs"></i> WIFI </li>
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
                      <i class="fa-solid fa-location-dot fa-2xl pr-3"></i><span class="display-3">  ¿Cómo <br /> llego? </span></p> </li>
                    <br />
                    <li> <button type="button" class="btn overpassbold comollego">  <i class="fa-solid fa-location-dot pr-5 h1"></i><span class="h1">   complejo </span></button></li>
                    <li> <button type="button" class="btn overpassbold comollego"> <i class="fa-solid fa-location-dot pr-5  h1"></i><span class="h1">   camping </span></button> </li>
                </ul>
            </div>

            <div class='pl-4 comollego-description'>            
                <b>En avión</b>, hasta el aeropuerto de Viedma. Luego desde la capital de Río Negro por ruta en colectivo, tren, auto, etc.<br /><br />
                <b>En colectivo</b>, desde todas las terminales nacionales arribando a la terminal de Las Grutas.<br /><br />
                <b>En auto</b>, la distancia desde Buenos Aires es de 1147 km.<br /><br />
                <b>En el tren Patagónico</b>, que sale desde Viedma y Bariloche y llega a San Antonio Oeste ubicado a 17 km de Las Grutas. Luego por ruta, en auto, colectivo, etc.</div>
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