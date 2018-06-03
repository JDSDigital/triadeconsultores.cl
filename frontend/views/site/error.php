<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div id="content">
	<div class="container">
		<div class="page-content">
        <div class="error-page">
            <h1>404</h1>
            <h3>Página no encontrada</h3>
            <p>Lo sentimos, pero la página que buscas no existe.</p>
            <div class="text-center">
              <?= Html::a('Volver al inicio', ['//site/index'], ['class' => 'btn-system btn-small']) ?>
            </div>
        </div>
		</div>
	</div>
</div>
