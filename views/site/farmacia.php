<?php

/** @var yii\web\View $this */

$this->title = 'Farmacia';
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="container-fluid">
    <div class="row">      
        <div class="col-sm-12">
            <h3 class="text-center mt-5 mb-5"> <span class="overpassbold text-blue-site">  Farmacia Mutual Peumayen.  </span> Descuentos </h3>
        </div>      
    </div>
</div>


    <div class="mt-3">
        <div class="margin-auto">
            <div class="carousel-column">
                <div id="carouselFarmacia" class="carouselFarmacia carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselFarmacia" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselFarmacia" data-slide-to="1"></li>
                    </ol>
                    <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'farmacia' . DIRECTORY_SEPARATOR; ?>
                    <div class="carousel-inner carousel-inner-farmacia">
                        <div class="carousel-item active">                       
                            <img class="d-block w-100" src="<?= $directorioImagenes . 'bannerfarmacia1.jpg'; ?>" alt="Descuentos en Medicamentos" data-toggle="modal" data-target="#imageModal">
                        </div>
                        <div class="carousel-item">                      
                            <img class="d-block w-100" src="<?= $directorioImagenes . 'bannerfarmacia2.jpg'; ?>" alt="Descuentos en Perfumeria" data-toggle="modal" data-target="#imageModal">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselFarmacia" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselFarmacia" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class=" row mt-4">
        <div class="offset-lg-2  col-lg-8 col-sm-12 text-center  margin-auto texto-farmacia">
            Beneficios en tarifas por ser parte de nuestra mutual, como socio adherente voluntario<br /><br />
            Contamos con toda la línea de medicamentos recetados y de venta libre,
            como así también una amplia gama en perfumería y estética personal.<br />
            Atendemos todas las obras sociales, tarjetas de débito y crédito visa y mastercard <br /><br />
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