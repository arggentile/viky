<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Beneficios $model */

$this->title = 'Create Beneficios';
$this->params['breadcrumbs'][] = ['label' => 'Beneficios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="beneficios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
