<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ClientsCategories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
  <div class="col-md-12">

    <?php $form = ActiveForm::begin(); ?>

    <div class="panel panel-flat">
			<div class="panel-body">

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
          <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
        </div>

      </div>
    </div>

    <?php ActiveForm::end(); ?>

  </div>
</div>
