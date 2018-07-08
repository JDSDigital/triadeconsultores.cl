<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = $category->name;
$this->params['breadcrumbs'][] = ['label' => 'Galería', 'url' => ['//galeria/index']];
$this->params['breadcrumbs'][] = ['label' => $this->title];

$this->params['title'][] = $this->title;
$this->params['subtitle'][] = 'Fotos del evento';
?>

<div class="container site-gallery mt50">
  <div class="row">
    <?php foreach ($images as $image) : ?>
      <div class="portfolio-item logo animation col-md-3">
          <!-- Start Portfolio Item Thumb -->
          <div class="portfolio-thumb crop">
              <a class="lightbox" title="<?= $category->name ?>" href="<?= Yii::getAlias('@web') . '/images/gallery/' . $category->id . '/' . $image->file ?>">
                  <div class="thumb-overlay"><i class="icon-resize-full"></i></div>
                  <?= Html::img(Yii::getAlias('@web') . '/images/gallery/' . $category->id . '/' . $image->file, ['class' => 'img-responsive']) ?>
              </a>
          </div>
          <!-- End Portfolio Item Thumb -->
    	</div>
    <?php endforeach; ?>
  </div>
</div>
