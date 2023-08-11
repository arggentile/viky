<?php

/** @var yii\web\View $this */
use yii\helpers\Html;

$this->title = 'Beneficios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cabecera-beneficios">
    <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR; ?>
    <img class="d-block w-100" src="<?= $directorioImagenes . 'cabecerabeneficios.jpeg'; ?>" alt="banner autoridades" />
</div>
<div class="container-lg mt-1">
    <div class="con-augtoridades mt-3">
        <h3 class="mt-5 mb-5 text-center"> <span class="text-overpassbold text-blue-site"> Más beneficios: </span> Hacé click en las imágenes y descubrelos </h3>
        <ul class="image-gallery image-gallery-beneficios">
            <?php   
            foreach ($beneficios as $key => $unbeneficio) { ?>
            <li class="mt-3">
                  <img src="<?= $directorioImagenes . 'beneficios.jpeg'; ?>" alt="" />
                  <div class="overlay">
                      <a href="<?= yii\helpers\Url::to(['/site/download','id'=>$unbeneficio->id_multimedia]); ?>" target="_blank" title="" accesskey=""> <span>   <i class="fa-solid fa-file-pdf fa-xl"></i></span> </a> </div>
                  <div class="overlay1">
                    <span class="">  <?= $unbeneficio->descripcion; ?> </span>
                </div>
            </li> 
            <?php } ?>
        </ul>
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