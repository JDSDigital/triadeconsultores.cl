<?php

use common\models\ClientsLogos;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ClientsLogosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$url = Yii::getAlias('@web') . '/images/clients/';
$url = str_replace('backend', 'frontend', $url);

$this->title = 'Logos';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="panel">
    <header class="panel-heading">
      <?= Html::a('<i class="fa fa-plus mr5"></i>Crear Logo', ['create'], ['class' => 'btn bg-success btn-xs']) ?>
    </header>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options'        => [
  				'class' => 'grid-view table-responsive',
  			],
  			'tableOptions'   => [
  				'class' => 'table table-striped table-hover',
  			],
  			'pager'          => [
  				'options' => ['class' => 'pagination ml20 mt10'],
  			],
  			'summaryOptions' => [
  				'class' => 'summary ml20 mt25',
  			],
  			'layout'         => '{items}{pager}{summary}',
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            [
              'attribute' => 'status',
              'format'    => 'raw',
              'value'     => function ($model) {
                $check = ($model->status == ClientsLogos::STATUS_ACTIVE) ? "checked='checked'" : null;
                return "<div class='switchery-xs m0'>
                  <input id='status-$model->id' type='checkbox' class='switchery switchStatus' $check>
                </div>";
              },
              'contentOptions' => ['style' => 'width: 30px;min-width: 30px'],
            ],
            [
  						'format'    => 'raw',
  						'attribute' => 'file',
              'value' => function ($model) use ($url) {
                return Html::img($url . $model->file, ['class' => 'img-responsive logo-thumb']);
              }
  					],
            [
  						'format'    => 'raw',
  						'attribute' => 'category_id',
              'filter' => $categories,
              'value' => function ($model) {
                return $model->category->name;
              }
  					],
            'name',
            'url:url',
            //'status',
            //'created_at',
            //'updated_at',

            [
              'class' => 'yii\grid\ActionColumn',
            ],
        ],
    ]); ?>
</div>

<?php $this->registerJs('listenerChangeStatus("'.Url::to(["//logos/status"]).'");'); ?>
