<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ClientsLogos */

$this->title = 'Actualizar Logo: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Logos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="clients-logos-update">

    <?= $this->render('_form', [
        'model' => $model,
        'categories' => $categories,
    ]) ?>

</div>
