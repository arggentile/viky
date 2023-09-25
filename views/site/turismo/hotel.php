<?php

/** @var yii\web\View $this */
use yii\helpers\Html;

$this->title = 'Nuestro Hotel - Viedma';
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
            <span class="overpassbold"> Viedma </span>
            <p> 
                Viedma es la ciudad capital de la provincia de Río Negro, ubicada en el nordeste de la Patagonia Argentina, frente a la ciudad bonaerense Carmen de Patagones.
                <br /><br /> 
                En la Capital historia de la Patagonia se pueden conocer museos, la catedral, la manzana histórica, pasear en catamarán por la rivera,
                realizar excursiones en remo recreativo, hacer caminatas y paseos en bicicleta por la zona de las chacras.
                <br /><br />
                A 30 km por ruta provincial n.º 1 se encuentra la desembocadura del Río Negro, donde se funde el rio con el mar de El Condor. Allí comienza el camino de 
                la costa conformado por las playas El Condor, Picoto, El Espigon, Playa Bonita, 
                La Loberia, Punta Bermeja, Bahía Rosas, Bahía Creek, Poso Salado, entre otras.  
                <br /><br />
                El clima es templado semiárido. En verano se caracteriza por ser caluroso en horas de la tarde y
                fresco por la noche. La temperatura oscila entre los 15° y 30° C. En invierno el clima es frio y 
                por las noches bajan aún más las temperaturas con un promedio de 2° a 7° C. En otoño y primavera 
                las temperaturas son variables y de transición.  
            </p>
        </div>

        
        
        <div class="col-lg-6 pl-lg-5 carousel-column">
            <div id="carousel1" class="carouselIndicators carousel slide" data-ride="carousel">
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
    <div class="row p-descrip-page mt-3">

        <div class="col-lg-6 pl-lg-5 carousel-column">
            <div id="carousel2" class="carouselIndicators carousel slide" data-ride="carousel">
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
        
        <div class="col-lg-6 pr-lg-5 pr-md-5 scroll-column overpassthin text-right">       
            <span class="overpassbold"> Nuestro Hotel </span>
            <p> 
                El hotel se encuentra ubicado en pleno centro de la ciudad, frente a plaza Alsina, a solo 200 metros de la costanera de Río Negro.
                <br /><br /> 
                Cuenta con habitaciones singles, dobles, triples, cuádruples y quíntuples, con TV Led, escritorio, placard, ventilador y baño completo.<br />
                Posee un departamento amueblado para 6 personas, ubicado en el piso más alto, para mayor comodidad e independencia.
                <br /><br />
                El servicio incluye desayuno y estacionamiento.
            </p>
            <br />
            <ul class="list-unstyled">
                <li>  <a href="#" title="">  <i class="fas fa-file-pdf"> </i> Tarifas </a> </li>
            </ul>
            <span class="overpassbold"> Contacto </span>
            <ul class="list-unstyled">
                <li> <i class="fa fa-phone"></i>   02920 425222</li>
                <li> <i class="fa-regular fa-envelope-open"></i> <a href="mailto:hotelpeumayen@rnonline.com.ar">hotelpeumayen@rnonline.com.ar</a> </li>
            </ul>
        </div>

        
    </div>

</div>
<div class="container-fluid">
    <div class="row comollego pt-4 pb-4 pr-5 pl-5">
        <div class="comollego-container">
            <div class="pl-4 pr-4">
                <ul class="list-unstyled">
                    <li> <p class="display-4 overpassbold comollego">  
                           <span class="display-3">  ¿Cómo <br /> llego? </span> </p> </li>
                    <br />
                    <li> <a type="button" href="https://maps.app.goo.gl/LRAfRQpZhQ1cgu3s9" target="_blank" class="btn overpassbold comollego">  <i class="fa-solid fa-location-dot pr-5 h1"></i><span class="h1"> Hotel </span></a></li>
                </ul>
            </div>

            <div class='pl-4 comollego-description'>            
                <b>En avión</b>, hasta el aeropuerto de Viedma.<br /><br />
                <b>En colectivo</b>, desde todas las terminales nacionales.<br /><br />
                <b>En el Tren Patagónico</b>, que sale desde Bariloche, y atraviesa toda la provincia de Río Negro, arribando a Viedma.<br /><br />
                <b>En auto</b>, la distancia desde Buenos Aires es de 943 km.</div>
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