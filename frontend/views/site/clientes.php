<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Nuestros Clientes';
$this->params['breadcrumbs'][] = $this->title;
$this->params['title'][] = $this->title;
// $this->params['subtitle'][] = 'Algunos de nuestros clientes';
$this->params['subtitle'][] = '';
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
  <div class="row">
    <div class="col-md-4">
      <p>Estamos habilitados en:</p>
      <?= Html::img(Yii::getAlias('@web') . '/images/misc/convenio-marco-2.png', ['class' => 'img-responsive mb30']) ?>
      <!-- <p>Reclutamiento y Selección ID 2239-4-LR16</p> -->
    </div>
    <div class="col-md-8">
      <p>Y en proceso de:</p>
      <div class="row">
        <div class="col-md-6">
          <?= Html::img(Yii::getAlias('@web') . '/images/misc/registro-ate.jpg', ['class' => 'img-responsive mb30']) ?>
        </div>
        <div class="col-md-6">
          <div class="otec accent-color mb30">Creación de Otec</div>
        </div>
      </div>
    </div>
  </div>
</div>
