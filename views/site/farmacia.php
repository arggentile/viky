<?php

/** @var yii\web\View $this */

$this->title = 'Farmacia';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-site mt-4">
    <div class="row">      
        <div class="col-sm-12">
            <h3 class="text-center mt-1 mt-2 mb-2"> <span class="text-overpassbold text-blue-site">  Farmacia Mutual Peumayen.  </span> Descuentos </h3>
        </div>      
    </div>
    <div class="row">
        <div class="offset-lg-1  col-lg-10 col-sm-12 margin-auto">
            <div class="carousel-column">
                <div id="carouselExampleIndicators-carouselExampleIndicators-farmacia" class="carouselExampleIndicators carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators-carouselExampleIndicators-farmacia" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators-carouselExampleIndicators-farmacia" data-slide-to="1"></li>
                    </ol>
                    <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'farmacia' . DIRECTORY_SEPARATOR; ?>
                    <div class="carousel-inner carousel-inner-farmacia">
                        <div class="carousel-item active">                       
                            <img class="d-block w-100" src="<?= $directorioImagenes . 'farmacia1.jpg'; ?>" alt="Farmacia" data-toggle="modal" data-target="#imageModal">
                        </div>
                        <div class="carousel-item">                      
                            <img class="d-block w-100" src="<?= $directorioImagenes . 'farmacia2.jpg'; ?>" alt="Farmacia" data-toggle="modal" data-target="#imageModal">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators-carouselExampleIndicators-farmacia" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators-carouselExampleIndicators-farmacia" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-12 text-center ">
            Beneficios en tarifas por ser parte de nuestra mutual, como socio adherente voluntario<br /><br />
            Contamos con toda la línea de medicamentos recetados y de venta libre,
            como así también una amplia gama en perfumería y estética personal.<br />
            Atendemos todas las obras sociales, tarjetas de débito y crédito visa y mastercard <br /><br />
            
            <h3 class="text-blue-site text-overpassbold text-uppercase mt-5"> Horario de atención: </h3> 
            <p>
                <span clas=""> Lunes a Viernes: 08.30 A 13HS / 16.30 a 20.30 </span>
                <br /><span clas=""> Sábados: de 9 a 13hs. </span>
            </p>

            <h3 class="text-blue-site text-overpassbold text-uppercase mt-5"> Contactos: </h3> 
            <p>
                <span clas=""><i class="fas fa-map-marker"></i> GALLARDO 49, VIEDMA, RÍO NEGRO. C.P: 8500</span><br />
                <span clas=""> <i class="fas fa-phone"></i> 2920-307577 </span><br />
                <span clas=""> <i class="fas fa-envelope"></i> farmaciapeumayen@gmail.com </span><br />
            </p>
            
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