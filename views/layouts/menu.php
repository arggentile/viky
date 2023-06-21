<nav class="navbar navbar-expand-lg fixed-top bg-white">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
       <?php $activemenu = ($this->context->route == 'site/institucional' || 
        $this->context->route == 'site/autoridades' || 
               $this->context->route == 'site/afiliados' ||
        $this->context->route == 'site/autoridades')?'active':'';
            ?>
        <li class="nav-item dropdown">
         
        <a class="nav-link dropdown-toggle <?= $activemenu;?>" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          INICIO
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="<?= yii\helpers\Url::to(['/site/institucional']); ?>">Institucional</a>
          <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/autoridades']); ?>">Autoridades</a>
          <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/afiliados']); ?>">Afiliados</a>
        </div>
      </li>
      
       <?php $activemenu = ($this->context->route == 'site/farmacia' || 
        $this->context->route == 'site/beneficios' )?'active':'';
            ?>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Beneficios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/farmacia']); ?>">Farmacia</a>
          <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/beneficios']); ?>">Otros</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Turismo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Asociate</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Ayuda Economica</a>
      </li>
      
    </ul>
    
      <a href="<?= yii\helpers\Url::to(['/site/login']); ?>" class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btn-inicio-session">Iniciar Session</a>
    
  </div>
</nav>