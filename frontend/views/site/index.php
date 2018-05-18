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
                      <img src="./images/bg/04-2.jpg" data-fullwidthcentering="on" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

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
                          data-easing="Power1.easeOut"><img src="images/slide-02-image-01.png" alt="" />
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
          <div class="row">
            <div class="col-md-5">
              <?= Html::img(Yii::getAlias('@web') . '/images/bg/06.jpg', ['class' => 'img-responsive wow fadeInLeft', 'data-wow-delay' => '1s']); ?>
            </div>
            <div class="col-md-7 text-justify">
              <p>Somos un equipo de profesionales de las Cs. Humanas, expertos en la búsqueda de personal ajustado a las necesidades de cada uno de nuestros clientes.</p>
              <p>Además de contar con una red de profesionales a nivel nacional que apoyan nuestra gestión, en el ámbito de la evaluación y en el entrenamiento de las habilidades requeridas para que el personal se desempeñe efectivamente en todas sus funciones.</p>
              <p>Como consultores, consideramos relevante la entrega de servicios personalizados y adecuados al contexto, focalizados en la calidad.</p>
              <p>Finalmente, el trato que tenemos con cada uno de nuestros clientes es directo, nos interesa la retroalimentación constante, de tal manera que cada proceso que se lleve a cabo sea efectivo y contextualizado al tipo de organización.</p>
            </div>
          </div>
      </div>

      <!-- Divider -->
      <div class="container">
        <div class="hr5 mt50 mb50"></div>
      </div>

      <div class="mision bg-parallax" style="background: url('./images/bg/07.jpg'); background-size: cover; background-position: center;">
        <div class="filter pt50 pb30">
          <div class="container text-justify">
            <div class="row mb10">
                <div class="col-md-12 big-title text-center">
                    <h2 class="wite-text">Nuestra Misión y Visión</h2>
                </div>
            </div>
            <p class="wite-text">Asesorar a nuestros clientes en materia de RrHh, mediante la búsqueda eficiente y efectiva, que favorezca la implementación de planes de capacitación y el desarrollo de habilidades indispensables para la organización.</p>

            <p class="wite-text">Potenciar lazos de confianza con cada uno de nuestros clientes, asesorándolos en las diversas temáticas organizacionales, lo que nos convierte en una empresa con una clara orientación al capital humano.</p>
          </div>
        </div>
      </div>

      <div class="container">

          <!-- Divider -->
          <div class="hr5 mt50 mb50"></div>

          <div class="section" style="padding-top:35px; padding-bottom:20px; border-top:0; border-bottom:0; background:#fff;">
              <div class="container">

                  <!-- Start Clients Carousel -->
                    <div class="our-clients">
                        <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5" data-navigation="false">

                            <!-- Client 1 -->
                            <div class="client-item item">
                              <a href="#"><img src="images/c1.png" alt="" /></a>
                            </div>

                            <!-- Client 2 -->
                            <div class="client-item item">
                              <a href="#"><img src="images/c2.png" alt="" /></a>
                            </div>

                            <!-- Client 3 -->
                            <div class="client-item item">
                              <a href="#"><img src="images/c3.png" alt="" /></a>
                            </div>

                            <!-- Client 4 -->
                            <div class="client-item item">
                              <a href="#"><img src="images/c4.png" alt="" /></a>
                            </div>

                            <!-- Client 5 -->
                            <div class="client-item item">
                              <a href="#"><img src="images/c5.png" alt="" /></a>
                            </div>

                            <!-- Client 6 -->
                            <div class="client-item item">
                              <a href="#"><img src="images/c6.png" alt="" /></a>
                            </div>

                            <!-- Client 7 -->
                            <div class="client-item item">
                              <a href="#"><img src="images/c7.png" alt="" /></a>
                            </div>

                            <!-- Client 8 -->
                            <div class="client-item item">
                              <a href="#"><img src="images/c8.png" alt="" /></a>
                            </div>

                        </div>
                    </div>
                    <!-- End Clients Carousel -->

                </div>
            </div>
        </div>
  <!-- End Content -->

</div>
<!-- End Container -->
