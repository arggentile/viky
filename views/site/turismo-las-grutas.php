<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Beneficios';
$this->params['breadcrumbs'][] = $this->title;
?>


    <div class="row row-turismo">
        <!-- Columna con desplazamiento -->
        <div class="col-lg-6 scroll-column">
            <h3 class="text-blue-site text-overpassbalck text-uppercase"> Las Grutas </h3>
            <p class="text-justify"> 
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
