<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Turismo';
$this->params['breadcrumbs'][] = $this->title;
?>    


<div class="container-fluid">
    <div class="row">      
        <div class="col-sm-12">
            <h3 class="text-center mt-5 mb-5"> <span class="overpassbold text-blue-site">  Elegí donde querés disfrutar.  </span> </h3>
        </div>      
    </div>
</div>

<div class="cabecera-turismo cabecera-turismo-elcondor">
    <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'turismo' . DIRECTORY_SEPARATOR; ?>
    <img class="d-block w-100" src="<?= $directorioImagenes . 'turismoprincipal.jpg'; ?>" alt="Turimso Principal"> 
</div>
