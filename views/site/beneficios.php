<?php

/** @var yii\web\View $this */
use yii\helpers\Html;

use kartik\icons\Icon;
Icon::map($this);

$this->title = 'Beneficios';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container-site">
<div class="con-augtoridades mt-3">
    <ul class="image-gallery">
        <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'autoridades' . DIRECTORY_SEPARATOR; ?>
        <li>
          <img src="<?= $directorioImagenes . 'presidente.jpg'; ?>" alt="" />
          <div class="overlay"><span>Presidente</span></div>
			<div class="overlay1">
				  <span class="text-overpassbolditalic"> Presidente: </span> 
				  <br /><span class=""> ZIEDE, Omar René </span>
			  </div>
        </li> 
		<li>
          <img src="<?= $directorioImagenes . 'tesorero.jpg'; ?>" alt="" />
          <div class="overlay"><span>Tesorero</span></div>
			    <div class="overlay1">
				  <span class="text-overpassbolditalic"> Tesorero: </span> 
				  <br /><span class=""> HAM, Juan Guillermo </span>
			  </div>
        </li>
        <li>
          <img src="<?= $directorioImagenes . 'secretaria.jpg'; ?>" alt="" />
          <div class="overlay"><span>Secretaria</span></div>
			<div class="overlay1">
				  <span class="text-overpassbolditalic"> Secretaria: </span> 
                                  <br /><span class=""> MORÓN, Marta Beatriz <a href="" title="" alt=""> <i class="fa fa-download"></i>  dsasd</a> </span>
			  </div>
        </li>


		
      </ul>
</div>
</div>