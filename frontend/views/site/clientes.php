<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Nuestros Clientes';
$this->params['breadcrumbs'][] = $this->title;
$this->params['title'][] = $this->title;
$this->params['subtitle'][] = 'Algunos de nuestros clientes';
?>
<div class="container pt50 pb50">
  <div class="row">
    <?php foreach ($clients as $client) : ?>
      <div class="col-md-3 mt30 mb30">
        <div class="client-item vertical-align">
          <div class="client-item-inner">
            <?= Html::a(Html::img(Yii::getAlias('@web') . '/images/clients/' . $client['image'], ['class' => 'img-responsive']), ['']) ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
