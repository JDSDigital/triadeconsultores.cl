<?php

use yii\helpers\Html;
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
            'name',
            'status',
            'created_at',
            'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
