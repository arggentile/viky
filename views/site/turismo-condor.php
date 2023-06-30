<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Beneficios';
$this->params['breadcrumbs'][] = $this->title;
?>


    <div class="row row-turismo">
        <!-- Columna con desplazamiento -->
        <div class="col-lg-6 scroll-column">
            <h3 class="text-blue-site text-overpassbalck 3rem text-uppercase"> El Condor </h3>
            <p> Esta Villa Balnearia es el principal centro de servicios del Camino de la Costa, 
                donde se accede por la Ruta Provincial N°1 (asfaltada), 
                a solo 30 minutos de la ciudad de Viedma, Río Negro.
            </p>
            <p>
                Se caracteriza por sus extensas y tranquilas playas como también por 
                sus altos acantilados y por ser el epicentro de los deportes de viento, 
                tales como Kitesurf, Windsurf, Carrovelismo, kitebuggy, entre otros.
            </p>
            <p> Esta Villa Balnearia es el principal centro de servicios del Camino de la Costa, 
                donde se accede por la Ruta Provincial N°1 (asfaltada), 
                a solo 30 minutos de la ciudad de Viedma, Río Negro.
            </p>
            <p>
                Se caracteriza por sus extensas y tranquilas playas como también por 
                sus altos acantilados y por ser el epicentro de los deportes de viento, 
                tales como Kitesurf, Windsurf, Carrovelismo, kitebuggy, entre otros.
            </p>
            <p> Esta Villa Balnearia es el principal centro de servicios del Camino de la Costa, 
                donde se accede por la Ruta Provincial N°1 (asfaltada), 
                a solo 30 minutos de la ciudad de Viedma, Río Negro.
            </p>
            <p>
                Se caracteriza por sus extensas y tranquilas playas como también por 
                sus altos acantilados y por ser el epicentro de los deportes de viento, 
                tales como Kitesurf, Windsurf, Carrovelismo, kitebuggy, entre otros.
            </p>
            <p> Esta Villa Balnearia es el principal centro de servicios del Camino de la Costa, 
                donde se accede por la Ruta Provincial N°1 (asfaltada), 
                a solo 30 minutos de la ciudad de Viedma, Río Negro.
            </p>
            <p>
                Se caracteriza por sus extensas y tranquilas playas como también por 
                sus altos acantilados y por ser el epicentro de los deportes de viento, 
                tales como Kitesurf, Windsurf, Carrovelismo, kitebuggy, entre otros.
            </p>
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
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'playas-el-condor-01.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'playas-el-condor-02.jpg'; ?>" alt="Complejo El Condor2" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'playas-el-condor-03.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'playas-el-condor-04.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'playas-el-condor-05.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
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

    <div class="row row-turismo">
        <div class="col-lg-6 carousel-column">
            <div id="carouselExampleIndicators2" class="carouselExampleIndicators carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                </ol>
                <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'pep' . DIRECTORY_SEPARATOR; ?>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '2.jpg'; ?>" alt="Imagen 1" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '3.jpg'; ?>" alt="Imagen 2" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '4.jpg'; ?>" alt="Imagen 3" data-toggle="modal" data-target="#imageModal">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
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
            <h3 class="text-blue-site text-overpassbalck 3rem text-uppercase"> Nuestro Camping: </h3>
            <p> Está situado a 100mts del mar, en Playa Central. A metros de los mejores locales gastronómicos del balneario y a 100 mts. del Casino.
            </p>
            <p>
                Contamos con 22 boxs, con las siguientes comodidades: fogón, baños, duchas, zona de lavandería, estacionamiento para vehículos.               
            </p>
        </div>

        
    </div>

<div class="divider"></div>

    <div class="row row-turismo" >
        <!-- Columna con desplazamiento -->
        <div class="col-lg-6 scroll-column">
            <h3 class="text-blue-site text-overpassbalck 3rem text-uppercase"> Nuestro Complejo: </h3>
            <p> Está situado frente al mar, en Playa Central. A metros de los mejores locales gastronómicos del balneario y a 50 mts. del Casino.

            </p>
            <p>
                Cuenta con 8 departamentos, todos con vista al mar, con las siguientes comodidades:             <br /><br />
                4 departamentos de planta baja equipados para 6 personas: con 3 dormitorios, cocina/comedor,  1 baño, estacionamiento para vehículo propio, garage con fogón y parrilla, pequeño 	patio cerrado individual, televisor led con señal satelital.

            <br /><br />
                4 departamentos en primer piso equipados para 6 personas: con 3 dormitorios, cocina/comedor, 1 baño, estacionamiento para vehículo propio, amplio balcón con vista al mar, fogón y parrilla, televisor led con señal satelital.

            </p>
        </div>

        <div class="col-lg-6 carousel-column">
            <div id="carouselExampleIndicators3" class="carouselExampleIndicators carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators3" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators3" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators3" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators3" data-slide-to="6"></li>
                    <li data-target="#carouselExampleIndicators3" data-slide-to="7"></li>
                    <li data-target="#carouselExampleIndicators3" data-slide-to="8"></li>
                    
                    <li data-target="#carouselExampleIndicators3" data-slide-to="9"></li>
                    
                </ol>
                <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'site' . DIRECTORY_SEPARATOR; ?>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'complejo-el-condor-01.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'complejo-el-condor-02.jpg'; ?>" alt="Complejo El Condor2" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'complejo-el-condor-03.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'complejo-el-condor-04.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'complejo-el-condor-05.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'complejo-el-condor-06.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'complejo-el-condor-07.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'complejo-el-condor-08.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'complejo-el-condor-09.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
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