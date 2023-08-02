<?php

/** @var yii\web\View $this */
use yii\helpers\Html;

$this->title = 'Institucional';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container-site mt-1">
    <div class="row">
        <!-- Columna con desplazamiento -->
        <div class="col-lg-6 scroll-column p-descrip-page">
        <h1 class="text-blue-site text-overpassbalck 3rem text-uppercase text-mar-prin"> 
            Mutual Personal  <br />
            Banco de la Provincia <br /> de Rio Negro
        </h1>
                
                    <p class="text-justify">
                        Fundada el 23 de julio de 1966, tiene sede en calle gallardo 49 de la ciudad de Viedma, provincia de Río Negro,
                         su radio de acción abarca toda la provincia así como lugares fuera de ella.<br /> <br />
                         Los fines sociales y servicios reconocidos a sus asociados con el objeto de propender al mayor bienestar de los mismos y de sus respectivos familiares, son los siguientes:
                    </p>
                    <ul class="list-institucional text-justify  p-descrip-page list-page-roww">
                        <li>
                            Fomentar la ayuda recíproca entre miembros para satisfacer sus necesidades
                        </li>
                        <li>
                            Prestar servicios funerarios
                        </li>
                        <li>
                            Otorgar subsidios por casamiento, nacimiento, fallecimiento o cualquier otro evento que determine.
                        </li>
                        <li>
                            Proporcionar servicios de asistencia médica integral y farmacéutica.
                        </li>
                        <li>
                            Proporcionar servicios de recreación, turismo y otros compatibles con el desarrollo físico y espiritual de los asociados.
                        </li>
                    </ul> 
        </div>

        <div class="col-lg-6 carousel-column">
            <div id="carouselExampleIndicators-institucional" class="carouselExampleIndicators carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators-institucional" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators-institucional" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators-institucional" data-slide-to="2"></li>
                </ol>
                <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'institucional' . DIRECTORY_SEPARATOR; ?>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'institucional01.jpg'; ?>" alt="Institucional" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'institucional02.jpg'; ?>" alt="Institucional" data-toggle="modal" data-target="#imageModal">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators-institucional" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators-institucional" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </div>

</div>
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <img class="img-fluid" src="" alt="Ampliación de imagen">
            </div>
        </div>
    </div>
</div>