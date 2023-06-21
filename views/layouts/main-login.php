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
    <style>
        .login-page{ background-image: url("/images/login.jpg");
                height: calc(100vh);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: top center;}

        .login-page, .register-page {
            -ms-flex-align: center;
            align-items: center;
            background-color: #e9ecef;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            height: 100vh;
            -ms-flex-pack: center;
            justify-content: center;
            box-shadow: 0px 0px 21px 41px rgba(0,0,0,0.1),0px 10px 15px -3px rgba(0,0,0,0.1);
        }
        .card-login{
            box-shadow: 0px 0px 21px 41px rgba(0,0,0,0.1),0px 10px 15px -3px rgba(0,0,0,0.1);

        }
        </style>
    
    
</head>
<body class="login-page">
<?php $this->beginBody() ?>

<?= $content ?>
<?php $this->endBody() ?>
   
</body>
</html>
<?php $this->endPage() ?>
