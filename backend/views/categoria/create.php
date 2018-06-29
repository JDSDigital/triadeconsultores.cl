<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ClientsCategories */

$this->title = 'Crear Categoría';
$this->params['breadcrumbs'][] = ['label' => 'Categorías', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clients-categories-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
