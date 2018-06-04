<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Triade Consultores';
?>
<!-- Container -->
<div id="container">

  <!-- Start Home Slider -->
  <div id="slider">
      <!-- START REVOLUTION SLIDER 3.1 rev5 fullwidth mode -->
      <div class="fullwidthbanner-container">
          <div class="fullwidthbanner" >
              <ul>
                  <!-- SLIDE 1 -->
                  <li data-transition="fade" data-slotamount="7" data-masterspeed="300" >

                      <!-- MAIN IMAGE -->
                      <img src="<?= Yii::getAlias('@web') . '/images/bg/04-2.jpg' ?>" data-fullwidthcentering="on" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                      <!-- LAYER NR. 1 -->
                      <div class="tp-caption uppercase biggest_font_size boldest_font_weight wite_font_color sft start"
                          data-x="540"
                          data-y="150"

                          data-speed="300"
                          data-start="1600"
                          data-easing="easeOutExpo">Asistencia
                      </div>

                      <!-- LAYER NR. 2 -->
                      <div class="tp-caption uppercase biggest_font_size boldest_font_weight wite_font_color sfl start"
                          data-x="540"
                          data-y="220"

                          data-speed="300"
                          data-start="1900"
                          data-easing="easeOutExpo">y Gestión
                      </div>

                      <!-- LAYER NR. 3 -->
                      <div class="tp-caption uppercase biggest_font_size boldest_font_weight wite_font_color sfr start"
                          data-x="540"
                          data-y="290"

                          data-speed="300"
                          data-start="2200"
                          data-easing="easeOutExpo">Efectiva
                      </div>

                      <!-- LAYER NR. 5 -->
                      <div class="tp-caption sfl start"
                          data-x="180"
                          data-y="bottom"

                          data-speed="1000"
                          data-start="1000"
                          data-easing="Power1.easeOut"><img src="<?= Yii::getAlias('@web') . '/images/slide-02-image-01.png' ?>" alt="" />
                      </div>

                  </li>

                </ul>
              <div class="tp-bannertimer" style="visibility:hidden;"></div>
          </div>
      </div>
  </div>
  <!-- End Home Slider -->

  <!-- Start Content -->
      <div class="container">
          <div class="row mt50 mb10">
              <div class="col-md-12 big-title text-center">
                  <h2 class="">Quienes Somos</h2>
              </div>
          </div>

          <div class="hr5 mt10 mb50"></div>

          <div class="row vertical-align">
            <div class="col-md-4">
              <?= Html::img(Yii::getAlias('@web') . '/images/bg/06.jpg', ['class' => 'img-responsive wow fadeInLeft', 'data-wow-delay' => '1s']); ?>
            </div>
            <div class="col-md-8 text-justify">
              <p>Somos un equipo de profesionales de las Cs. Humanas, expertos en la búsqueda de personal ajustado a las necesidades de cada uno de nuestros clientes.</p>
              <p>Además de contar con una red de profesionales a nivel nacional que apoyan nuestra gestión, en el ámbito de la evaluación y en el entrenamiento de las habilidades requeridas para que el personal se desempeñe efectivamente en todas sus funciones.</p>
            </div>
          </div>

          <div class="row vertical-align mt30 mb50">
            <div class="col-md-8 text-justify">
              <p>Como consultores, consideramos relevante la entrega de servicios personalizados y adecuados al contexto, focalizados en la calidad.</p>
              <p>Finalmente, el trato que tenemos con cada uno de nuestros clientes es directo, nos interesa la retroalimentación constante, de tal manera que cada proceso que se lleve a cabo sea efectivo y contextualizado al tipo de organización.</p>
            </div>
            <div class="col-md-4">
              <?= Html::img(Yii::getAlias('@web') . '/images/bg/03.jpg', ['class' => 'img-responsive wow fadeInRight', 'data-wow-delay' => '1s']); ?>
            </div>
          </div>
      </div>

      <div class="mision bg-parallax" style="background: url('<?= Yii::getAlias("@web") . "/images/bg/07.jpg" ?>'); background-size: cover; background-position: center;">
        <div class="filter pt50 pb30">
          <div class="container text-justify">
            <div class="row mb10">
                <div class="col-md-12 big-title text-center">
                    <h2 class="wite-text">Nuestra Misión y Visión</h2>
                </div>
            </div>

            <!-- Divider -->
            <div class="hr5-white mt10 mb50"></div>

            <p class="wite-text">Asesorar a nuestros clientes en materia de RrHh, mediante la búsqueda eficiente y efectiva, que favorezca la implementación de planes de capacitación y el desarrollo de habilidades indispensables para la organización.</p>

            <p class="wite-text">Potenciar lazos de confianza con cada uno de nuestros clientes, asesorándolos en las diversas temáticas organizacionales, lo que nos convierte en una empresa con una clara orientación al capital humano.</p>
          </div>
        </div>
      </div>

      <div class="container">

          <div class="row mt50 mb10">
              <div class="col-md-12 big-title text-center">
                  <h2 class="">Algunos de Nuestros Clientes</h2>
              </div>
          </div>

          <!-- Divider -->
          <div class="hr5 mt10 mb50"></div>

          <div class="section" style="padding-top:10px; padding-bottom:50px; border-top:0; border-bottom:0; background:#fff;">
              <div class="container">

                  <!-- Start Clients Carousel -->
                    <div class="our-clients">
                        <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5" data-navigation="false">

                            <?php foreach ($clients as $client) : ?>
                              <div class="client-item item vertical-align">
                                <div class="client-item-inner">
                                  <?= Html::a(Html::img(Yii::getAlias('@web') . '/images/clients/' . $client['image'], ['class' => 'img-responsive']), ['']) ?>
                                </div>
                              </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                    <!-- End Clients Carousel -->

                </div>
            </div>
        </div>
  <!-- End Content -->

</div>
<!-- End Container -->
