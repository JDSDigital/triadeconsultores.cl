<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Nuestros Clientes';
$this->params['breadcrumbs'][] = $this->title;
$this->params['title'][] = $this->title;
$this->params['subtitle'][] = 'Algunos de nuestros clientes';
?>
<div class="container pt50 pb50">
  <div class="row clients-carousel">
    <?php foreach ($clients as $client) : ?>
      <div class="col-md-3 client-item pt30 pb30">
        <?= Html::a(Html::img(Yii::getAlias('@web') . '/images/' . $client['image'], ['class' => 'img-responsive m0a']), ['']) ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>
