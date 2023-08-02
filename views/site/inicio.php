<?php

$this->title = 'Inicio';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="w100 carousel-column">
    <div id="carouselExampleIndicators-home" class="carouselExampleIndicators carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators-home" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators-home" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators-home" data-slide-to="2"></li>
        </ol>
        <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'home' . DIRECTORY_SEPARATOR; ?>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?= $directorioImagenes . 'inicioasociate.jpg'; ?>" alt="Imagen 1" data-toggle="modal" data-target="#imageModal">
                <div class="col-md-6 col-md-12 carousel-caption   carousel-caption-home">
                    <h2 class="text-blue-site text-overpassbalck  text-justify text-uppercase">Asociación mutual personal del banco de la provincia de Río Negro</h2>
                    <p class="text-1medrem">¿Queres contar con gran cantidad <br />
                                              de beneficios y descuentos?</p>
                    <a href="<?= \yii\helpers\Url::to(['/site/asociate']); ?>" class="btn btn-asociate-home"> asociate </a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= $directorioImagenes . 'iniciobeneficios.jpg'; ?>" alt="Imagen 2" data-toggle="modal" data-target="#imageModal">
                <div class="col-md-6 col-md-12 carousel-caption   carousel-caption-home">
                    <h2 class="text-blue-site text-overpassbalck  text-justify  text-uppercase">Contamos con gran cantidad de descuentos y beneficios</h2>
                    <p class="text-blue-site text-1medrem">Descuentos en farmacias, reintegros por razones de salud, ayuda escolar y universitaria, y mucho más ...
                    </p>
                    <a href="<?= \yii\helpers\Url::to(['/site/farmacia']); ?> " class="btn btn-asociate-home"> saber más </a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= $directorioImagenes . 'inicioturismo.jpg'; ?>" alt="Imagen 3" data-toggle="modal" data-target="#imageModal">
                <div class="col-md-6 col-md-12 carousel-caption  carousel-caption-home">
                    <h2 class="text-blue-site text-overpassbalck  text-justify  text-uppercase">Sabias de nuestros descuentos en alojamientos?</h2>
                    <p class="text-blue-site">Contamos con diferentes puntos túristicos de la provincia de Río Negro, asociate y aprovecha los beneficios</p>
                    <a href="<?= \yii\helpers\Url::to(['/site/turismo-principal']); ?>" class="btn btn-asociate-home"> conocelos </a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators-home" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators-home" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>