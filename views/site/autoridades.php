<?php

/** @var yii\web\View $this */
use yii\helpers\Html;

$this->title = 'Autoridades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cabecera-autoridades" style="max-height: 150px;">
    <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'autoridades' . DIRECTORY_SEPARATOR; ?>
    <img class="d-block w-100" style="max-height: 150px;" src="<?= $directorioImagenes . 'banner.jpg'; ?>" alt="banner autoridades" />
</div>
<div class="container-lg">
    <div class="con-augtoridades mt-3">
        <h3 class="mt-4 mb-4 text-center"> <span class="text-overpassbold text-blue-site"> Comisión directiva: </span> Autoridades</h3>

        <ul class="image-gallery">
            <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'autoridades' . DIRECTORY_SEPARATOR; ?>
            <li>
                <img src="<?= $directorioImagenes . 'presidente.jpg'; ?>" alt="" />
                <div class="overlay"><span>Presidente</span></div>
                <div class="overlay1">
                    <span class="text-overpassbolditalic"> Presidente </span> 
                    <br /><span class=""> ZIEDE, Omar René </span>
                </div>
            </li> 
            <li>
                <img src="<?= $directorioImagenes . 'tesorero.jpg'; ?>" alt="" />
                <div class="overlay"><span>Tesorero</span></div>
                <div class="overlay1">
                    <span class="text-overpassbolditalic"> Tesorero </span> 
                    <br /><span class=""> HAM, Juan Guillermo </span>
                </div>
            </li>
            <li>
                <img src="<?= $directorioImagenes . 'secretaria.jpg'; ?>" alt="" />
                <div class="overlay"><span>Secretaria</span></div>
                <div class="overlay1">
                    <span class="text-overpassbolditalic"> Secretaria </span> 
                    <br /><span class=""> MORÓN, Marta Beatriz </span>
                </div>
            </li>



        </ul>
    </div>
    <div class="row m-auto">
        <div class="col-lg-12 mt-3" style="text-align: center">
            <ul class="list-unstyled">
                <li>VICEPRESIDENTE: Cuya, José Luis</li>
                <li>PROSECRETARIA: ALARCÓN, Graciela</li>
                <li>PROTESORERO: GALLET, Jorge Enrique</li>
                <li>SECRETARIA DE CAPACITACIÓN MUTUAL: TRAVAGLIO, Mariángeles</li>
            </ul>

            <h3 class="text-blue-site text-overpassbold  mt-5">MIEMBROS TITULARES</h3>
            <ul class="list-unstyled m-3">
                <li>MACSARD, Roberto Tufik</li>
                <li>ARMAS, Jorge Alberto</li>              
            </ul>

            <h3 class="text-blue-site text-overpassbold mt-5">MIEMBROS SUPLENTES</h3>
            <ul class="list-unstyled">
                <li>RAMÍREZ, Carlos Alberto</li>
                <li>OLANO, Edgardo</li>
                <li>OLIVARES, Oscar Hipólito</li>
                <li>TROGNOT, Lilian Angelina</li>
                <li>VILLEGA, Leandro Nicasio</li>
            </ul>

            <h3 class="text-blue-site text-overpassbold mt-5">JUNTA FISCALIZADORA - Miembros Titulares</h3>
            <ul class="list-unstyled">
                Miembros Titulares:

                <li>TRAVAGLIO, José Armando Claudio</li>
                <li>MOREL, Rubén Alberto</li>
                <li>BASSO, Claudio Armando</li>
                <li>ONGARO, José Eugenio.</li>
            </ul>

            <h3 class="text-blue-site text-overpassbold mt-5">JUNTA FISCALIZADORA - Miembros Suplentes</h3>
            <ul class="list-unstyled">
                <li>VENTURA, Rubén Omar
                <li>ACOSTA, Julio Néstor
                <li>PIZZORNO, Ana Esther
                <li>GINESTET, Eduardo Luis
                <li>RAMÍREZ, Carlos Alberto</li>
                <li>OLANO, Edgardo</li>
                <li>OLIVARES, Oscar Hipólito</li>
                <li>TROGNOT, Lilian Angelina</li>
                <li>VILLEGA, Leandro Nicasio</li>
            </ul>
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