<?php

/** @var yii\web\View $this */
use yii\helpers\Html;

use kartik\icons\Icon;
Icon::map($this);

$this->title = 'Beneficios';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Contenido principal -->
<div class="">
    <div class="row">
        <!-- Columna del carrusel -->


        <!-- Columna con desplazamiento -->
        <div class="col-lg-6 scroll-column">
            <h3 class="text-blue-site text-overpassbold"> DESCUENTOS EN FARMACIA </h3>
            <p> Beneficios en tarifas por ser parte de nuestra mutual, como socio adherente voluntario.<br /><br />

                Contamos con toda la línea de medicamentos recetados y de venta libre, como así también una amplia gama en perfumería y estética personal.<br /><br />
                Atendemos todas las obras sociales, tarjetas de débito y crédito visa y master card<br /><br />
            </p>

            <p>
            <h6 class="text-blue-site text-overpassbold"> Horario de atención: </h6> 
            <span clas=""> Lunes a Viernes: 08.30 A 13HS / 16.30 a 20.30 </span>
            <span clas=""> Sábados: de 9 a 13hs. </span>
            </p>

            <h6 class="text-blue-site text-overpassbold"> Contactos: </h6> 
            <span clas=""> 
                <i class="fas fa-map-marker"></i>
                GALLARDO 49, VIEDMA, RÍO NEGRO. C.P: 8500. 
            </span><br />
            <span clas=""> <i class="fas fa-phone"></i> 2920-307577 </span><br />
            <span clas=""> <i class="fas fa-envelope"></i>farmaciapeumayen@gmail.com </span><br />
            </p>

           

        </div>


        <div class="col-lg-6 carousel-column">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'pep' . DIRECTORY_SEPARATOR; ?>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '4.jpg'; ?>" alt="Imagen 1" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '2.jpeg'; ?>" alt="Imagen 2" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . '3.jpeg'; ?>" alt="Imagen 3" data-toggle="modal" data-target="#imageModal">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
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