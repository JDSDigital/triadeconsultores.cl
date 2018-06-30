<?php

use common\models\ClientsCategories;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ClientsCategoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categorías';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="panel">
    <header class="panel-heading">
      <?= Html::a('<i class="fa fa-plus mr5"></i>Crear Categoría', ['create'], ['class' => 'btn bg-success btn-xs']) ?>
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
                $check = ($model->status == ClientsCategories::STATUS_ACTIVE) ? "checked='checked'" : null;
                return "<div class='switchery-xs m0'>
                  <input id='status-$model->id' type='checkbox' class='switchery switchStatus' $check>
                </div>";
              },
              'contentOptions' => ['style' => 'width: 30px;min-width: 30px'],
            ],
            'name',
            [
  						'format'    => 'raw',
  						'attribute' => 'created_at',
              'value' => function ($model) {
                return Yii::$app->formatter->asDate($model->created_at, 'dd/MM/YYYY');
              }
  					],
            [
  						'format'    => 'raw',
  						'attribute' => 'updated_at',
              'value' => function ($model) {
                return Yii::$app->formatter->asDate($model->updated_at, 'dd/MM/YYYY');
              }
  					],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<?php $this->registerJs('listenerChangeStatus("'.Url::to(["//categoria/status"]).'");'); ?>
