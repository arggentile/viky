<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */
use yii\bootstrap4\ActiveForm;

$this->title = 'Asociate';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container-fluid">
    <div class="row">      
        <div class="col-sm-12">
            <h3 class="text-center mt-5 mb-5"> <span class="overpassbold text-blue-site">  Una mutual. Muchos beneficios.  </h3>
        </div>      
    </div>
</div>

<div class="cabecera-asociate cabecera-asociate-principal position-relative">
    <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR ; ?>
    <img class="d-block w-100" src="<?= $directorioImagenes . 'inicioasociate.jpg'; ?>" alt="Turimso Principal"> 
    <button  class="btn btn-asociate-principal"> asociate </button>
</div>

<!-- Modal para ampliar imágenes -->
<div id="modal-asociate" class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <?= $this->render('_modalAsosiate'); ?>
            </div>
        </div>
    </div>
</div>