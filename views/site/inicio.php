<?php

$this->title = 'Inicio';
$this->params['breadcrumbs'][] = $this->title;
?>

<h3 class="text-center mt-5 mb-5"> 
    <span class="overpassbold text-blue-site">   Una Mutual.</span> Muchos Beneficios  </h3>

<div class="carousel-column">
    <div id="carouselHome" class="carouselHome carousel slide" data-ride="carousel">
         <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'home' . DIRECTORY_SEPARATOR; ?>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?= $directorioImagenes . 'inicioasociate.jpg'; ?>" alt="Asociate">
                <div class="col-lg-8 col-md-12 col-xs-12 carousel-caption   carousel-caption-home">
                    <span class="text-blue-site overpassbalck  text-justify text-uppercase carousel-caption-title-home">Asociación mutual <br /> personal del banco de <br />la provincia de Río Negro</span>
                    <p class="carousel-caption-description-home text-blue-site">¿Queres contar con gran cantidad <br />
                                              de beneficios y descuentos?</p>
                   <a href="<?= \yii\helpers\Url::to(['/site/asociate']); ?>" class="btn btn-asociate-home"> asociate </a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= $directorioImagenes . 'inicioturismo.jpg'; ?>" alt="Turismo">
                <div class="col-lg-8 col-md-12 col-xs-12 carousel-caption  carousel-caption-home">
                    <span class="text-blue-site overpassbalck  text-justify  text-uppercase carousel-caption-title-home">Complejos <br /> en diferentes <br /> puntos turísticos</span>
                    <p class="text-blue-site carousel-caption-description-home">
                        Sabias que podes consultar disponibilidades de fechas y realizar el pago de tu estadía sin moverte de tu casa? <br />
                        Contactate con nostros por Whatsappmos
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= $directorioImagenes . 'iniciobeneficios.jpg'; ?>" alt="Beneficios">
                <div class="col-lg-8 col-md-12 col-xs-12 carousel-caption   carousel-caption-home">
                    <span class="text-blue-site overpassbalck  text-justify  text-uppercase carousel-caption-title-home">Descuentos <br /> en farmacia <br /> y perfumeria</span>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>
