<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use common\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);

// Meta tags
$this->registerMetaTag(['name' => 'author', 'content' => 'geknology.com']);
$this->registerMetaTag(['name' => 'description', 'content' => 'Asesorar a nuestros clientes en materia de RrHh, mediante la búsqueda eficiente y efectiva, que favorezca la implementación de planes de capacitación y el desarrollo de habilidades indispensables para la organización.']);
$this->registerMetaTag(['name' => 'keywords', 'content' => 'recursos humanos, rrhh, asesoria']);
$this->registerMetaTag(['rel' => 'canonical', 'href' => 'http://www.triadeconsultores.cl']);

$this->registerMetaTag([
    'property' => 'og:url',
    'content' => Url::to(['/site/index'], true)
]);

$this->registerMetaTag([
    'property' => 'og:type',
    'content' => 'website'
]);

$this->registerMetaTag([
    'property' => 'og:title',
    'content' => 'Triade Consultores'
]);

$this->registerMetaTag([
    'property' => 'og:description',
    'content' => 'Asesorar a nuestros clientes en materia de RrHh, mediante la búsqueda eficiente y efectiva, que favorezca la implementación de planes de capacitación y el desarrollo de habilidades indispensables para la organización.'
]);

$this->registerMetaTag([
    'property' => 'og:image',
    'content' => Url::to(['/images/logo/logo.png'], true)
]);

$this->registerMetaTag([
    'property' => 'og:image:alt',
    'content' => 'Triade Consultores'
]);

$this->registerMetaTag([
    'property' => 'twitter:card',
    'content' => 'summary'
]);

$this->registerMetaTag([
    'property' => 'twitter:description',
    'content' => 'Asesorar a nuestros clientes en materia de RrHh, mediante la búsqueda eficiente y efectiva, que favorezca la implementación de planes de capacitación y el desarrollo de habilidades indispensables para la organización.'
]);

$this->registerMetaTag([
    'property' => 'twitter:title',
    'content' => 'Triade Consultores'
]);

// Favicon
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '196x196', 'href' => Yii::getAlias('@web') . '/images/favicon/favicon-196x196.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '96x96', 'href' => Yii::getAlias('@web') . '/images/favicon/favicon-96x96.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '32x32', 'href' => Yii::getAlias('@web') . '/images/favicon/favicon-32x32.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '16x16', 'href' => Yii::getAlias('@web') . '/images/favicon/favicon-16x16.png']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '128x128', 'href' => Yii::getAlias('@web') . '/images/favicon/favicon-128.png']);

$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '57x57', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-57x57.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '114x114', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-114x114.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '72x72', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-72x72.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '144x144', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-144x144.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '60x60', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-60x60.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '120x120', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-120x120.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '76x76', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-76x76.png']);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '152x152', 'href' => Yii::getAlias('@web') . '/images/favicon/apple-touch-icon-152x152.png']);

$this->registerMetaTag(['name' => 'application-name', 'content' => 'Triade Consultores']);
$this->registerMetaTag(['name' => 'msapplication-TileColor', 'content' => '#FFFFFF']);
$this->registerMetaTag(['name' => 'msapplication-TileImage', 'content' => './images/favicon/mstile-144x144.png']);
$this->registerMetaTag(['name' => 'msapplication-square70x70logo', 'content' => './images/favicon/mstile-70x70.png']);
$this->registerMetaTag(['name' => 'msapplication-square150x150logo', 'content' => './images/favicon/mstile-150x150.png']);
$this->registerMetaTag(['name' => 'msapplication-wide310x150logo', 'content' => './images/favicon/mstile-310x150.png']);
$this->registerMetaTag(['name' => 'msapplication-square310x310logo', 'content' => './images/favicon/mstile-310x310.png']);


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:400,700" rel="stylesheet">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- Go To Top Link -->
<a href="#" class="back-to-top"><i class="icon-up-open-1"></i></a>

<div id="loader">
  <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
</div>

<div class="wrap">
  <div class="hidden-header"></div>
  <header class="clearfix">
  <!-- Start Top Bar -->
			<div class="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
              <!-- Start Contact Info -->
							<ul class="contact-details">
              	<li><a href="#"><i class="icon-mobile-2"></i> +56 9 5218 7941</a></li>
                  <li><a href="#"><i class="icon-mail-2"></i> consultas@triadeconsultores.cl</a></li>
              </ul>
              <!-- End Contact Info -->
						</div>
						<div class="col-md-6">
              <!-- Start Social Links -->
							<ul class="social-list">
								<li>
									<a class="facebook sh-tooltip" data-placement="bottom" title="Facebook" target="_blank" href="https://www.facebook.com/triadeconsultores/"><i class="icon-facebook-2"></i></a>
								</li>
								<li>
									<a class="twitter sh-tooltip" data-placement="bottom" title="Twitter" target="_blank" href="#"><i class="icon-twitter-2"></i></a>
								</li>
                <li>
									<a class="linkdin sh-tooltip" data-placement="bottom" title="Linkedin" target="_blank" href="https://www.linkedin.com/company/triade-consultores/"><i class="icon-linkedin"></i></a>
								</li>
                <li>
									<a class="instgram sh-tooltip" data-placement="bottom" title="Instagram" target="_blank" href="#"><i class="icon-instagramm"></i></a>
								</li>
								<li>
									<a class="skype sh-tooltip" data-placement="bottom" title="Skype" target="_blank" href="#"><i class="icon-skype-2"></i></a>
								</li>
							</ul>
              <!-- End Social Links -->
						</div>
					</div>
				</div>
			</div>
    <!-- End Top Bar -->
    <?php
    NavBar::begin([
        'brandLabel' => Html::img(Yii::getAlias('@web') . '/images/logo/logo.png', ['class' => 'img-responsive']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default',
        ],
    ]);
    $menuItems = [
        ['label' => 'Inicio', 'url' => ['//site/index']],
        ['label' => 'Servicios', 'url' => ['//site/servicios']],
        ['label' => 'Galería', 'url' => ['//galeria/index']],
        ['label' => 'Clientes', 'url' => ['//site/clientes']],
        ['label' => 'Contacto', 'url' => ['//site/contacto']],
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
    </header>

    <div class="">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            'title' => isset($this->params['title']) ? $this->params['title'] : [],
            'subtitle' => isset($this->params['subtitle']) ? $this->params['subtitle'] : [],
            'options' => [
              'class' => 'breadcrumbs',
            ],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>


<!-- Start Footer -->
<footer class="pt15">
  <div class="container">
    <!-- <div class="row footer-widgets"> -->

      <!-- Start Contact Widget -->
      <!-- <div class="col-md-3">
        <div class="footer-widget contact-widget">
          <h4>Contact info<span class="head-line"></span></h4>
          <ul>
            <li><span>Address:</span> 1234 Street Name, City Name, Egypt</li>
            <li><span>Phone Number:</span> +01 234 567 890</li>
                            <li><span>Fax Number:</span> +01 234 567 890</li>
            <li><span>Email:</span> company@company.com</li>
                            <li><span>Website:</span> www.yourdomain.com</li>
          </ul>
        </div>
      </div> -->
      <!-- End Contact Widget -->
    <!-- </div> -->

    <!-- Start Copyright -->
    <div class="copyright-section">
      <div class="row">
        <div class="col-md-6">
          <p>Copyright © <?= date('Y') ?> <?= Html::a('triadeconsultores.cl',['//site/index']) ?> / Diseño y desarrollo por <?= Html::a('Geknology', Url::to('http://www.geknology.com/')) ?></p>
        </div>
        <div class="col-md-6">
          <ul class="footer-nav">
            <li><?= Html::a('Inicio', ['//site/index']) ?></li>
            <li><?= Html::a('Servicios', ['//site/servicios']) ?></li>
            <li><?= Html::a('Galería', ['//galeria/index']) ?></li>
            <li><?= Html::a('Clientes', ['//site/clientes']) ?></li>
            <li><?= Html::a('Contacto', ['//site/contacto']) ?></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Copyright -->

  </div>
</footer>
<!-- End Footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
