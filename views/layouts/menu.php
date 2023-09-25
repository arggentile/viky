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
                </div>
            </li>

            <?php
            $activemenu = ($this->context->route == 'site/farmacia') ? 'active' : '';
            ?>
            <li class="nav-item <?= $activemenu; ?>">
                <a class="nav-link <?= $activemenu; ?>" href="<?= yii\helpers\Url::to(['/site/farmacia']); ?>">Farmacia</a>
            </li>
            

           
            <li class="nav-item dropdown">
                  <?php
            $activemenu = ($this->context->route == 'site/turismo') ? 'active' : '';
            ?>
                
                <a href="<?= yii\helpers\Url::to(['/site/turismo','page'=>'prin']);?>" class="btn <?= $activemenu; ?>">Turismo</a>
                <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/turismo','page'=>'club']); ?>">Club</a>
                    <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/turismo','page'=>'hotel']); ?>">Hotel</a>
                    <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/turismo','page'=>'condor']); ?>">El Condor</a>
                    <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/turismo' ,'page'=>'grutas']); ?>">Las Grutas</a>
                    <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/turismo' ,'page'=>'bolson']); ?>">El Bolsón</a>
                    <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/site/turismo' ,'page'=>'bariloche']); ?>">Bariloche</a>
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
                <a class="nav-link <?= $activemenu; ?>" href="<?= yii\helpers\Url::to(['/site/otros']); ?>">Beneficios</a>
            </li>
            <?php } ?>
            
            <?php
            $activemenu = ($this->context->route == 'beneficios/index' ||
                    $this->context->route == 'user/adin/index') ? 'active' : '';
            
            if(!Yii::$app->user->getIsGuest() && Yii::$app->user->can('admin')){
            ?>
            
            <li class="nav-item dropdown">
                <a href="<?= yii\helpers\Url::to(['/site/turismo-principal']);?>" class="btn <?= $activemenu; ?>">admin</a>
                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/beneficios/index']); ?>">Beneficios</a>
                    <a class="dropdown-item" href="<?= yii\helpers\Url::to(['/user/admin/index']); ?>">Usuarios</a>
                </div>
            </li>
            <?php } ?>
            
        </ul>
        <div class="dropdown-divider"></div>
        <?php
        if(Yii::$app->user->getIsGuest()){?>
                <a href="<?= yii\helpers\Url::to(['/user/security/login']); ?>" class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btn-inicio-session">Iniciar Sesion</a>
        <?php }else   {?>
                <a href="<?= yii\helpers\Url::to(['/user/security/logout']); ?>" class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btn-inicio-session">Cerrar Sesion ( <?= Yii::$app->user->identity->username ;?>)</a>
        <?php } ?>
           
          
    </div>
</nav>