<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ClientsCategories */

$this->title = 'Actualizar Categoría: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Categorías', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="clients-categories-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
