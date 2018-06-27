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

          <div class="row vertical-align mb50">
            <div class="col-md-4">
              <?= Html::img(Yii::getAlias('@web') . '/images/bg/03.jpg', ['class' => 'img-responsive wow fadeInLeft', 'data-wow-delay' => '1s']); ?>
            </div>
            <div class="col-md-8 text-justify">
              <p>Somos un equipo altamente especializados, expertos en servicios de Asesoría en el ámbito del Recurso Humano, Educación, Cultura, Salud, Ciencias Sociales y en las Áreas Legales. Nuestro foco es la realización de un trabajo óptimo, ciñéndonos a los parámetros de nuestros clientes, sin perder nuestro rol como asesores, nos interesa establecer vínculos de confianza,  que puedan apoyar de manera integral el quehacer organizacional.</p>
              <p>Contamos con un equipo multidisciplinario con un ámbito de acción diverso: Ingenieros, Psicólogos, Educadores, Prevencionistas, Trabajadores Sociales entre otros, no solo en la zona centro de nuestro país, sino también a nivel nacional, que apoyan nuestros proyectos en el ámbito Privado y Público.</p>
            </div>
          </div>

      </div>

      <!-- Start Full Width Section 6 -->
    	<div class="section bg-parallax light-section" style="padding-top:80px; padding-bottom:80px; border-top:0; border-bottom:0; background: url(http://placehold.it/1280x400/333/444);">
      	<div class="container">

          	<!-- Start Testimonials Carousel -->
              <div class="testimonials-carousel-not">
                  <!-- Testimonial 1 -->
                  <div class="testimonials item">
                  	<div class="testimonial-content">
                    	<p>Creemos fielmente en las capacidades técnicas y por sobre todo en las distintas habilidades que pueda traer  y desarrollar una persona.</p>
                    </div>
                  </div>
              </div>
              <!-- End Testimonials Carousel -->

          </div>
      </div>
      <!-- End Full Width Section 5 -->

      <div class="container">
          <div class="row mt50 mb10">
              <div class="col-md-12 big-title text-center">
                  <h2 class="">Nuestros Valores</h2>
              </div>
          </div>

          <div class="hr5 mt10 mb50"></div>

          <div class="row vertical-align mb50">
            <div class="col-md-7 service-box-values">
              <div class="col-md-12 service-box service-icon-left-more">
                  <div class="service-icon">
                      <i class="icon-star-4 icon-medium"></i>
                  </div>
                  <div class="service-content">
                      <p>Ética en nuestro quehacer diario.</p>
                  </div>
              </div>
              <div class="col-md-12 service-box service-icon-left-more">
                  <div class="service-icon">
                      <i class="icon-star-4 icon-medium"></i>
                  </div>
                  <div class="service-content">
                      <p>Compromiso ante todo.</p>
                  </div>
              </div>
            <div class="col-md-12 service-box service-icon-left-more">
                <div class="service-icon">
                    <i class="icon-star-4 icon-medium"></i>
                </div>
                <div class="service-content">
                    <p>Entendemos a cada uno de nuestros clientes.</p>
                </div>
            </div>
            <div class="col-md-12 service-box service-icon-left-more">
                <div class="service-icon">
                    <i class="icon-star-4 icon-medium"></i>
                </div>
                <div class="service-content">
                    <p>Retroalimentación constante en los procesos mediante diferentes herramientas que fortalecen la calidad del trabajo.</p>
                </div>
            </div>
            <div class="col-md-12 service-box service-icon-left-more">
                <div class="service-icon">
                    <i class="icon-star-4 icon-medium"></i>
                </div>
                <div class="service-content">
                    <p>Innovación y creatividad a la hora de mostrar alternativas de acción a los clientes, diseñando programas teóricos y prácticos ajustados a la realidad mediante el trabajo en conjunto con la organización</p>
                </div>
            </div>
          </div>
          <div class="col-md-5">
            <?= Html::img(Yii::getAlias('@web') . '/images/bg/06.jpg', ['class' => 'img-responsive wow fadeInRight', 'data-wow-delay' => '1s']); ?>
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

            <p class="wite-text">Asesorar a nuestros clientes en las materias respectivas de acuerdo al foco de interés que posean, con la finalidad de entregar productos contextualizados a su realidad, además de ser efectivos a la hora de su aplicación y puesta en marcha.</p>

            <p class="wite-text">Como Organización nos interesa promover la importancia de la atención al cliente, como elemento fundamental, manteniendo una asesoría efectiva, de manera que podamos convertirnos en socios estratégicos de nuestro cliente para así poder apoyar y/o intervenir de manera profesional en cada disciplina que se necesite fortalecer.</p>
          </div>
        </div>
      </div>

      <div class="container">
          <div class="row mt50 mb10">
              <div class="col-md-12 big-title text-center">
                  <h2 class="">Nuestros Eventos Recientes</h2>
              </div>
          </div>

          <div class="hr5 mt10 mb50"></div>
      </div>
      <!-- Start Recent Projects Carousel -->
      <div class="full-width-recent-projects">
          <div class="projects-carousel touch-carousel navigation-1">

            <?php foreach ($images as $image) : ?>
              <!-- Start Project Item -->
              <div class="portfolio-item item">
                  <div class="portfolio-border">
                      <!-- Start Project Thumb -->
                      <div class="portfolio-thumb">
                          <a class="lightbox" title="<?= $image->category->name ?>" href="<?= Yii::getAlias('@web') . '/images/gallery/' . $image->category_id . '/' . $image->file ?>">
                              <div class="thumb-overlay"><i class="icon-resize-full"></i></div>
                              <?= Html::img(Yii::getAlias('@web') . '/images/gallery/' . $image->category_id . '/' . $image->file, ['class' => 'img-responsive']) ?>
                          </a>
                      </div>
                      <!-- End Project Thumb -->
                      <!-- Start Project Details -->
                      <div class="portfolio-details">
                          <h4><?= $image->category->name ?></h4>
                      </div>
                      <!-- End Project Details -->
                  </div>
              </div>
              <!-- End Project Item -->

            <?php endforeach; ?>

          </div>
      </div>
      <!-- End Recent Projects Carousel -->

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
