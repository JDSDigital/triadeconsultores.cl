<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ClientsLogos */

$url = Yii::getAlias('@web') . '/../images/clients/';
$url = str_replace('backend', 'frontend', $url);

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Logos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">

    <header class="panel-heading">
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <div class="row">
          <div class="col-md-6">
            <?= Html::img($url . $model->file, ['class' => 'img-responsive mt20']) ?>
          </div>
        </div>
    </header>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
              'format'    => 'raw',
              'attribute' => 'category_id',
              'value'     => function ($model) {
                return $model->category->name;
              },
            ],
            'name',
            'url:url',
            'file',
            [
  						'format'    => 'raw',
  						'attribute' => 'status',
  						'value'     => function ($model) {
  							return ($model->status) ? 'Activo' : 'Inactivo';
  						},
  					],
            [
  						'format'    => 'raw',
  						'attribute' => 'created_at',
  						'value'     => function ($model) {
  							return Yii::$app->formatter->asDate($model->created_at, 'dd/MM/YYYY');
  						},
  					],
            [
  						'format'    => 'raw',
  						'attribute' => 'updated_at',
  						'value'     => function ($model) {
  							return Yii::$app->formatter->asDate($model->updated_at, 'dd/MM/YYYY');
  						},
  					],
        ],
    ]) ?>

</div>
