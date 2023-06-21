<?php
/** @var yii\web\View $this */

/** @var string $content */
use app\assets\AppAsset;
use yii\bootstrap4\Html;
use kartik\icons\Icon;

Icon::map($this);

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>

    <body class="d-flex flex-column h-100 bodyinicio">
<?php $this->beginBody() ?>

        <header id="header" class="header header headerinicio">
            <?= $this->render('menu'); ?>
        </header>

        <!-- Contenido principal -->
        <div class="content">
            <?= $content; ?>
        </div>

        <!-- Pie fijo -->
        <footer class="footersite" style="padding: 25px 50px;">
            <div class="row">
                <div class="col-md-6 text-left">
                    <p>
                        <?= Icon::show('facebook', ['class' => 'fa-2x fa-circle', 'framework' => Icon::FAB]); ?> 
                        <?= Icon::show('instagram', ['class' => 'fa-2x fa-circle', 'framework' => Icon::FAB]); ?>
                    </p>
                    Horarios de Atención <br />
                    Lunes a Viernes de 08 a 16 Hs
                </div>
                <div class="col-md-6 text-right">
                    <?= Icon::show('facebook', ['framework' => Icon::FAB]); ?>CONTACTO <br />
                    <?= Icon::show('facebook', ['framework' => Icon::FAB]); ?>Gallardo 49, Viedma, Río Negro, C.P 8500 <br />
                    <?= Icon::show('facebook', ['framework' => Icon::FAB]); ?>2920-429000/421170 <br />
                    <?= Icon::show('facebook', ['framework' => Icon::FAB]); ?>comisiondirectivamutualbanco@gmail.com <br />
                </div>
            </div>
        </footer>

<?php $this->endBody() ?>

    </body>
</html>
<?php $this->endPage() ?>