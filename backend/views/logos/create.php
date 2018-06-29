<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ClientsLogos */

$this->title = 'Crear Logo';
$this->params['breadcrumbs'][] = ['label' => 'Logos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clients-logos-create">

    <?= $this->render('_form', [
        'model' => $model,
        'categories' => $categories,
    ]) ?>

</div>
