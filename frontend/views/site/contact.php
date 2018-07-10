<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\web\View;

$this->title = 'Contacto';
$this->params['breadcrumbs'][] = $this->title;
$this->params['title'][] = $this->title;
// $this->params['subtitle'][] = 'Estamos ansiosos por conocerte';
$this->params['subtitle'][] = '';
?>
<div class="container pt50 pb50">

    <div class="row">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

            <div class="row">
              <div class="col-md-4">
                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
              </div>
              <div class="col-md-4">
                <?= $form->field($model, 'email') ?>
              </div>
              <div class="col-md-4">
                <?= $form->field($model, 'phone') ?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                  'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-8">{input}</div></div>',
                  ]) ?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
              </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-lg-6 contact-map">
            <iframe src="https://maps.google.com/?ie=UTF8&amp;q=-33.445479,-70.621322&amp;output=embed"></iframe>
            <p>Santa Isabel #0739, Providencia, Santiago</p>
        </div>
    </div>
</div>
