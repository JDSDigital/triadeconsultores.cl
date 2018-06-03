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
    <div class="col-md-4">
      <div class="gallery-thumb">
        <?= Html::a(
          Html::img(Yii::getAlias('@web') . '/images/gallery/capacitaciones/ancud/01.jpg', ['class' => 'img-responsive crop']) . '<span></span><h2>Ancud</h2>',
          ['//galeria/categoria', 'id' => 1]) ?>
      </div>
    </div>
    <div class="col-md-4">
      <div class="gallery-thumb">
        <?= Html::a(Html::img(Yii::getAlias('@web') . '/images/gallery/capacitaciones/curacavi/01.jpg', ['class' => 'img-responsive crop']). '<span></span><h2>Curacaví</h2>', ['//galeria/categoria', 'id' => 2]) ?>

      </div>
    </div>
    <div class="col-md-4">
      <div class="gallery-thumb">
        <?= Html::a(Html::img(Yii::getAlias('@web') . '/images/gallery/capacitaciones/puertomontt/01.jpg', ['class' => 'img-responsive crop']). '<span></span><h2>San Felipe</h2>', ['//galeria/categoria', 'id' => 3]) ?>

      </div>
    </div>
    <div class="col-md-4">
      <div class="gallery-thumb">
        <?= Html::a(Html::img(Yii::getAlias('@web') . '/images/gallery/capacitaciones/sanfelipe/01.jpg', ['class' => 'img-responsive crop']). '<span></span><h2>Puerto Montt</h2>', ['//galeria/categoria', 'id' => 4]) ?>

      </div>
    </div>
    <div class="col-md-4">
      <div class="gallery-thumb">
        <?= Html::a(Html::img(Yii::getAlias('@web') . '/images/gallery/capacitaciones/uchile/01.jpg', ['class' => 'img-responsive crop']). '<span></span><h2>Universidad de Chile</h2>', ['//galeria/categoria', 'id' => 5]) ?>

      </div>
    </div>
  </div>

  <div class="row mt50 mb10">
      <div class="col-md-12 big-title text-center">
          <h2 class="">Otros Eventos</h2>
      </div>
  </div>

  <div class="hr5 mt10 mb50"></div>

  <div class="row">
    <div class="col-md-4">
      <div class="gallery-thumb">
        <?= Html::a(Html::img(Yii::getAlias('@web') . '/images/gallery/feria/01.jpg', ['class' => 'img-responsive crop']). '<span></span><h2>Feria Laboral</h2>', ['//galeria/categoria', 'id' => 6]) ?>

      </div>
    </div>
    <div class="col-md-4">
      <div class="gallery-thumb">
        <?= Html::a(Html::img(Yii::getAlias('@web') . '/images/gallery/reclutamiento/01.jpg', ['class' => 'img-responsive crop']). '<span></span><h2>Reclutamiento y Selección</h2>', ['//galeria/categoria', 'id' => 7]) ?>

      </div>
    </div>
  </div>

</div>
