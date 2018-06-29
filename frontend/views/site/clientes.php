<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Nuestros Clientes';
$this->params['breadcrumbs'][] = $this->title;
$this->params['title'][] = $this->title;
$this->params['subtitle'][] = 'Algunos de nuestros clientes';
?>
<div class="container pt50 pb50">
  <div class="row client-list">
    <?php foreach ($categories as $category) : ?>
      <div class="row mb10">
          <div class="col-md-12 big-title text-center">
              <h2 class=""><?= $category->name ?></h2>
          </div>
      </div>
      <div class="hr5 mt10"></div>
      <?php foreach ($category->clientsLogos as $client) : ?>
        <div class="col-md-3 mt30 mb30">
          <div class="client-item vertical-align">
            <div class="client-item-inner">
              <?= Html::a(Html::img(Yii::getAlias('@web') . '/images/clients/' . $client->file, ['class' => 'img-responsive']), Url::to($client->url, true)) ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endforeach; ?>
  </div>
</div>
