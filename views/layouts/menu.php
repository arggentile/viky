<nav class="navbar navbar-expand-lg fixed-top bg-white">
    <a class="navbar-brand" id="enl-home-page" href="<?= \yii\helpers\Url::to(['/']); ?>">
        <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR; ?>
        <img class="d-block w-100" src="<?= $directorioImagenes . 'logo.png'; ?>" alt="Institucional"">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fas fa-navicon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php
            $activemenu = ($this->context->route == 'site/institucional' ||
                    $this->context->route == 'site/autoridades' || $this->context->route == 'site/index' ||
                    $this->context->route == 'site/afiliados' ||
                    $this->context->route == 'site/autoridades') ? 'active' : '';
            ?>
            <li class="nav-item dropdown">

                <a href="<?= yii\helpers\Url::to(['/']);?>" class="btn <?= $activemenu; ?>">Inicio</a>
                <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item " href="<?= yii\helpers\Url::to(['/site/institucional']); ?>">Institucional</a>
                    <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/autoridades']); ?>">Autoridades</a>
                    <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/afiliados']); ?>">Afiliados</a>
                </div>
            </li>

            <?php
            $activemenu = ($this->context->route == 'site/farmacia' ||
                    $this->context->route == 'site/beneficios' ) ? 'active' : '';
            ?>

            <li class="nav-item dropdown">
                <a href="<?= yii\helpers\Url::to(['/site/beneficios']);?>" class="btn <?= $activemenu; ?>">beneficios</a>
                <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/farmacia']); ?>">Farmacia</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                  <?php
            $activemenu = ($this->context->route == 'site/turismo-principal' ||
                    $this->context->route == 'site/turismo-club' ||
                    $this->context->route == 'site/turismo-hotel' || 
                    $this->context->route == 'site/turismo-condor' || 
                    $this->context->route == 'site/turismo-las-grutas' || 
                    $this->context->route == 'site/turismo-bolson' || 
                    $this->context->route == 'site/turismo-bariloche' ) ? 'active' : '';
            ?>
                
                <a href="<?= yii\helpers\Url::to(['/site/turismo-principal']);?>" class="btn <?= $activemenu; ?>">Turismo</a>
                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/turismo-club']); ?>">Club</a>
                    <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/turismo-hotel']); ?>">Hotel</a>
                    <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/turismo-condor']); ?>">El Condor</a>
                    <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/turismo-las-grutas']); ?>">Las Grutas</a>
                    <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/turismo-bolson']); ?>">El Bolsón</a>
                    <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/turismo-bariloche']); ?>">Bariloche</a>
                </div>
            </li>

            <?php
            $activemenu = ($this->context->route == 'site/asociate' ) ? 'active' : '';
            ?>
            <li class="nav-item <?= $activemenu; ?>">
                <a class="nav-link <?= $activemenu; ?>" href="<?= yii\helpers\Url::to(['/site/asociate']); ?>">Asociate</a>
            </li>

            <?php
            $activemenu = ($this->context->route == 'site/otros' ) ? 'active' : '';
            if(!Yii::$app->user->getIsGuest()){?>
            <li class="nav-item <?= $activemenu; ?>">
                <a class="nav-link <?= $activemenu; ?>" href="<?= yii\helpers\Url::to(['/site/otros']); ?>">Otros</a>
            </li>
            <?php } ?>
        </ul>
        <?php
        if(Yii::$app->user->getIsGuest()){?>
                <a href="<?= yii\helpers\Url::to(['/user/security/login']); ?>" class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btn-inicio-session">Iniciar Sesion</a>
        <?php }else   {?>
                <a href="<?= yii\helpers\Url::to(['/user/security/logout']); ?>" class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btn-inicio-session">Cerrar Sesion ( <?= Yii::$app->user->identity->username ;?>)</a>
        <?php } ?>
           
          
    </div>
</nav>