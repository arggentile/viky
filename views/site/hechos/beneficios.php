<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Beneficios';
$this->params['breadcrumbs'][] = $this->title;
?>
  <!-- Contenido principal -->
  <div class="">
    <div class="row">
      <!-- Columna del carrusel -->
     

      <!-- Columna con desplazamiento -->
      <div class="col-lg-6 scroll-column">
        <div>
          <h3>Contenido con desplazamiento</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultricies massa quis fermentum blandit. Sed nec dolor id leo iaculis lacinia. Duis venenatis metus quis purus malesuada feugiat. Mauris dignissim tempus orci, a auctor lacus dignissim sit amet. Curabitur pellentesque ligula at scelerisque varius.</p>
          <p>Nunc quis semper nunc. Integer sodales purus vitae bibendum pulvinar. Praesent interdum libero sed lacus aliquet ullamcorper. Curabitur efficitur risus non orci aliquam, eget eleifend odio hendrerit. Ut feugiat faucibus lorem, sit amet malesuada nibh porta ut. Sed vel felis ac lorem vestibulum pretium et ac nibh.</p>
          <p>Vestibulum sit amet turpis et justo lacinia feugiat. Curabitur sit amet mi ultrices, volutpat sem vel, hendrerit enim. Morbi feugiat lorem eget justo pulvinar, et sagittis turpis tincidunt. Proin commodo neque sed interdum fermentum. Nullam hendrerit lacinia metus vitae eleifend.</p>
          <p>Phasellus porttitor nisi vitae consectetur porttitor. Ut dignissim libero vel diam placerat fringilla. Integer sed aliquet tortor, eget euismod sem. Sed in odio quis urna suscipit fringilla id nec arcu. Etiam quis odio id ligula luctus bibendum id ac justo. Suspendisse nec sem quis risus ullamcorper pellentesque.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultricies massa quis fermentum blandit. Sed nec dolor id leo iaculis lacinia. Duis venenatis metus quis purus malesuada feugiat. Mauris dignissim tempus orci, a auctor lacus dignissim sit amet. Curabitur pellentesque ligula at scelerisque varius.</p>
          <p>Nunc quis semper nunc. Integer sodales purus vitae bibendum pulvinar. Praesent interdum libero sed lacus aliquet ullamcorper. Curabitur efficitur risus non orci aliquam, eget eleifend odio hendrerit. Ut feugiat faucibus lorem, sit amet malesuada nibh porta ut. Sed vel felis ac lorem vestibulum pretium et ac nibh.</p>
          <p>Vestibulum sit amet turpis et justo lacinia feugiat. Curabitur sit amet mi ultrices, volutpat sem vel, hendrerit enim. Morbi feugiat lorem eget justo pulvinar, et sagittis turpis tincidunt. Proin commodo neque sed interdum fermentum. Nullam hendrerit lacinia metus vitae eleifend.</p>
          <p>Phasellus porttitor nisi vitae consectetur porttitor. Ut dignissim libero vel diam placerat fringilla. Integer sed aliquet tortor, eget euismod sem. Sed in odio quis urna suscipit fringilla id nec arcu. Etiam quis odio id ligula luctus bibendum id ac justo. Suspendisse nec sem quis risus ullamcorper pellentesque.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultricies massa quis fermentum blandit. Sed nec dolor id leo iaculis lacinia. Duis venenatis metus quis purus malesuada feugiat. Mauris dignissim tempus orci, a auctor lacus dignissim sit amet. Curabitur pellentesque ligula at scelerisque varius.</p>
          <p>Nunc quis semper nunc. Integer sodales purus vitae bibendum pulvinar. Praesent interdum libero sed lacus aliquet ullamcorper. Curabitur efficitur risus non orci aliquam, eget eleifend odio hendrerit. Ut feugiat faucibus lorem, sit amet malesuada nibh porta ut. Sed vel felis ac lorem vestibulum pretium et ac nibh.</p>
          <p>Vestibulum sit amet turpis et justo lacinia feugiat. Curabitur sit amet mi ultrices, volutpat sem vel, hendrerit enim. Morbi feugiat lorem eget justo pulvinar, et sagittis turpis tincidunt. Proin commodo neque sed interdum fermentum. Nullam hendrerit lacinia metus vitae eleifend.</p>
          <p>Phasellus porttitor nisi vitae consectetur porttitor. Ut dignissim libero vel diam placerat fringilla. Integer sed aliquet tortor, eget euismod sem. Sed in odio quis urna suscipit fringilla id nec arcu. Etiam quis odio id ligula luctus bibendum id ac justo. Suspendisse nec sem quis risus ullamcorper pellentesque.</p>
  
        </div>
      </div>
      
      
       <div class="col-lg-6 carousel-column">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
            <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR  . 'pep' .DIRECTORY_SEPARATOR; ?>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?= $directorioImagenes .'4.jpg';?>" alt="Imagen 1" data-toggle="modal" data-target="#imageModal">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?= $directorioImagenes .'2.jpeg';?>" alt="Imagen 2" data-toggle="modal" data-target="#imageModal">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?= $directorioImagenes .'3.jpeg';?>" alt="Imagen 3" data-toggle="modal" data-target="#imageModal">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>
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