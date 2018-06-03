<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Galería';
$this->params['breadcrumbs'][] = $this->title;
$this->params['title'][] = $this->title;
$this->params['subtitle'][] = 'Fotos de nuestros últimos eventos';
?>
<div class="container site-gallery">
  <div class="row mt50 mb10">
      <div class="col-md-12 big-title text-center">
          <h2 class="">Capacitaciones</h2>
      </div>
  </div>

  <div class="hr5 mt10 mb50"></div>

  <div class="row">
    <?php foreach ($categories as $category) : ?>
      <?php if ($category->id > 5) {break;}?>
      <div class="col-md-4">
        <div class="gallery-thumb">
          <?= Html::a(
            Html::img(Yii::getAlias('@web') . '/images/gallery/' . $category->id . '/01.jpg', ['class' => 'img-responsive crop']) . '<span></span><h2>' . $category->name . '</h2>',
            ['//galeria/categoria', 'id' => $category->id]) ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>


  <div class="row mt50 mb10">
      <div class="col-md-12 big-title text-center">
          <h2 class="">Otros Eventos</h2>
      </div>
  </div>

  <div class="hr5 mt10 mb50"></div>

  <div class="row">
    <?php foreach ($categories as $category) : ?>
      <?php if ($category->id <= 5) {continue;}?>
      <div class="col-md-4">
        <div class="gallery-thumb">
          <?= Html::a(
            Html::img(Yii::getAlias('@web') . '/images/gallery/' . $category->id . '/01.jpg', ['class' => 'img-responsive crop']) . '<span></span><h2>' . $category->name . '</h2>',
            ['//galeria/categoria', 'id' => $category->id]) ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</div>
