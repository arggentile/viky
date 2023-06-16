<nav class="navbar navbar-expand-lg fixed-top navbar-white bg-white">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          INICIO
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/institucional']); ?>">Institucional</a>
          <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/autoridades']); ?>">Autoridades</a>
          <div class="dropdown-divider">Afiliados</div>
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?= yii\helpers\Url::to(['/site/beneficios']);?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Beneficios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/beneficios']); ?>">Farmacia</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
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