<style>
    .shadowed-text {
      font-size: 50px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Sombra de desplazamiento horizontal 2px, desplazamiento vertical 2px, radio de desenfoque 4px y opacidad 0.5 */
    }
  </style>
<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="item active" style="background-image: url(<?php echo base_url() ?>assets/template/images/slider1.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                            <h1 class="animation animated-item-1 shadowed-text" style="color:#F87108" ><?php echo ($dat->ins_titulo) ?></h1>
                                <h2 class="animation animated-item-2 shadowed-text" style="color:#F80808" ><?php echo ($dat->ins_subtitulo) ?></h2>
                                <a class="btn-slide animation animated-item-3" href="https://www.upea.bo/">UPEA</a>
                            </div>
                        </div>

                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="<?php echo base_url() ?>assets/template/UPEA.png" class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(<?php echo base_url() ?>assets/logos/emblematico_upea.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                            <h1 class="animation animated-item-1 shadowed-text" style="color:#F87108" ><?php echo ($dat->ins_titulo) ?></h1>
                                <h2 class="animation animated-item-2 shadowed-text" style="color:#F80808" ><?php echo ($dat->ins_subtitulo) ?></h2>

                                <a class="btn-slide animation animated-item-3" href="https://sie.upea.bo/l">SIE</a>
                            </div>
                        </div>

                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="<?php echo base_url() ?>assets/template/images/slider/rector.png" class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(<?php echo base_url() ?>assets/logos/upea_fondo.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                            <h1 class="animation animated-item-1 shadowed-text" style="color:#F87108" ><?php echo ($dat->ins_titulo) ?></h1>
                                <h2 class="animation animated-item-2 shadowed-text" style="color:#F80808" ><?php echo ($dat->ins_subtitulo) ?></h2>

                                <a class="btn-slide animation animated-item-3" href="https://www.upea.bo/">UPEA</a>
                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="<?php echo base_url() ?>assets/template/images/slider/vicerector.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->




<style>

</style>












<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2><?php echo $stream->titulo_stream ?></h2>
            <p class="lead"><?php echo $stream->descripcion_stream ?></p>
        </div>

        <div class="row">





            <video id="my-video" class="video-js vjs-default-skin" controls preload="auto" width="640" height="264" data-setup='{"fluid": true}'>
                <source src="https://tvstream.upea.bo/hls/siestream2023live.m3u8" type="application/x-mpegURL">
            </video>







        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->

<br>
<br>
<br>
<br>
<div id="rs-team" class="rs-team sec-color sec-spacer">
    <div class="container">
        <div class="sec-title mb-50 text-center">
            <h2>Nuestras Autoridades</h2>

        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
            <?php foreach ($autoridades as $value) { ?>
                <div class="team-item">
                    <div class="team-img">
                        <img src="<?php echo  base_url() ?>assets/img_autoridad/<?php echo ($value->img_autoridad) ?>" alt="team Image" />
                        <div class="normal-text">
                            <h3 class="team-name"><?php echo ($value->aut_nombre) ?></h3>
                            <span class="subtitle"><?php echo ($value->aut_cargo) ?></span>
                        </div>
                    </div>
                    <div class="team-content">
                        <div class="overly-border"></div>
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h3 class="team-name"><a href="teachers-single.html"><?php echo ($value->aut_nombre) ?></a></h3>
                                <span class="team-title"><?php echo ($value->aut_cargo) ?></span>

                                <div class="team-social">
                                    <a href="<?php echo ($value->link_face) ?>" class="social-icon"><i class="fa fa-facebook"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>
        </div>
   
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="rs-team" class="rs-team sec-color sec-spacer">
    <div class="container">
        <div class="sec-title mb-50 text-center">
            <h2>Nuestros Presentadores</h2>

        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
            <?php foreach ($presentadores as $value2) { ?>
                <div class="team-item">
                    <div class="team-img">
                        <img src="<?php echo  base_url() ?>assets/img_presentador/<?php echo ($value2->pres_img) ?>" alt="team Image" />
                        <div class="normal-text">
                            <h3 class="team-name"><?php echo ($value2->pres_nombre) ?></h3>
                            <span class="subtitle"><?php echo ($value2->pres_cargo) ?></span>
                        </div>
                    </div>
                    <div class="team-content">
                        <div class="overly-border"></div>
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h3 class="team-name"><a href="teachers-single.html"><?php echo ($value2->pres_nombre) ?></a></h3>
                                <span class="team-title"><?php echo ($value2->pres_cargo) ?></span>

                                <div class="team-social">
                                    <a href="<?php echo ($value2->link_face) ?>" class="social-icon"><i class="fa fa-facebook"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>
        </div>
   
    </div>
</div>
<!-- -------------------------- -->
<!-- <section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>NOTICIAS</h2>
           
        </div>

        <div class="row" >

            <div id="rs-products" class="rs-products sec-spacer sec-color" style="background: #fffbd5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #b20a2c, #fffbd5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #b20a2c, #fffbd5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
                <div class="container">
                    <div class="sec-title mb-50 text-center">
                       

                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="4" data-md-device-nav="true" data-md-device-dots="true">




                        <div class="product-item" style="background: #DC2424;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #4A569D, #DC2424);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #4A569D, #DC2424); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



">
                            <div class="product-img">
                                <a href="">
                                    <iframe src="https://www.youtube.com/embed/ARWOWu-9y_c" ></iframe>
                                </a>
                            </div>
                            <h4 class="product-title"><a href="">sdsfsdfs</a></h4>
                            <span class="product-price">dasdadad></span>
                            <div class="product-btn">
                                <a href="">Ver detalles</a>
                            </div>
                        </div>
                        <div class="product-item" style="background: #DC2424;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #4A569D, #DC2424);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #4A569D, #DC2424); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



">
                            <div class="product-img">
                                <a href="">
                                    <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Felmananerolpz%2Fvideos%2F1870741586623282%2F&show_text=false&width=560&t=0" ></iframe>
                                </a>
                            </div>
                            <h4 class="product-title"><a href="">sdsfsdfs</a></h4>
                            <span class="product-price">dasdadad></span>
                            <div class="product-btn">
                                <a href="">Ver detalles</a>
                            </div>
                        </div>
                        <div class="product-item" style="background: #DC2424;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #4A569D, #DC2424);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #4A569D, #DC2424); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



">
                            <div class="product-img">
                                <a href="">
                                    <iframe src="https://www.youtube.com/embed/ARWOWu-9y_c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </a>
                            </div>
                            <h4 class="product-title"><a href="">sdsfsdfs</a></h4>
                            <span class="product-price">dasdadad></span>
                            <div class="product-btn">
                                <a href="">Ver detalles</a>
                            </div>
                        </div>
                        <div class="product-item"  style="background: #232526;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #414345, #232526);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #414345, #232526); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



">
                            <div class="product-img">
                                <a href="">
                                    <iframe src="https://www.youtube.com/embed/ARWOWu-9y_c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </a>
                            </div>
                            <h4 class="product-title"><a href="">sdsfsdfs</a></h4>
                            <span class="product-price">dasdadad></span>
                            <div class="product-btn">
                                <a href="">Ver detalles</a>
                            </div>
                        </div>


                    </div>
                    
                </div>
               
            </div>













        </div>
        <div class="view-btn">
                    <center><p class="lead"></p></center>
                    </div>
    </div>
</section> -->

<!-- ----------------------------- -->

<br>
<br>
<br>
<br>
<div id="rs-events" class="rs-events sec-spacer" style="background: #fffbd5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #b20a2c, #fffbd5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #b20a2c, #fffbd5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
<style>
    .video-container {
        position: relative;
        padding-bottom: 56.25%;
        /* Proporción 16:9 */
        padding-top: 30px;
        height: 0;
        overflow: hidden;
    }

    .video-container video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
    <div class="container">
        <div class="sec-title mb-50 text-center">
            <h2>PERIÓDICO DIARIO DESTACADO</h2>

        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">

                    <?php
                    foreach ($per_destacado as $value) {
                    ?>
                        <?php $categoria = $this->Modelo_periodico->listarunacategoria($value->id_categoria) ?>
                        <div class="event-item">
                            <div class="">
                            <div class="video-container" style="
						background: #000000;  
						">
                                <video width="100%" height="auto" controls>
                                    <source src="<?php echo base_url() ?>uploads/<?php echo $value->periodico_imagen ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>

                            </div>
                            <div class="events-details sec-color">
                                <div class="event-date">
                                    <i class="fa fa-calendar"></i>
                                    <span><?= $value->periodico_fecha ?></span>
                                </div>
                                <h4 class="event-title"><a href="<?php echo base_url(Hasher::make(199, $value->id)) ?>"><?= $value->periodico_titulo ?></a></h4>
                                <div class="event-meta">
                                    <div class="event-time">

                                        <span><a href="<?php echo base_url(Hasher::make(200, $categoria->id)) ?>"> <?php echo $categoria->categoria_periodico ?></a></span>
                                    </div>

                                </div>

                            </div>
                        </div>


                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>





<br>
<br>
<br>
<br>
<div class="row">
    <div id="rs-team" class="rs-team sec-color sec-spacer">
        <div class="container">
            <div class="sec-title mb-50 text-center">
                <br>
                <br>
                <h2>NOTICIAS DESTACADAS</h2>

            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
                <?php foreach ($noticia_destacado as $notdes) { ?>
                    <div class="team-item">
                        <div class="team-img">
                        <video width="100%" height="auto" controls>
                                    <source src="<?php echo base_url() ?>videos_noticias/<?php echo $notdes->not_url ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            <div class="normal-text">
                                <h3 class="team-name"><?php echo $notdes->not_fecha ?> - <?php echo $notdes->not_hora ?> </h3>
                                <span class="subtitle"><?php echo $notdes->not_nombre ?></span>
                            </div>
                        </div>

                    </div>
                <?php } ?>




            </div>
        </div>
    </div>
</div>

<br>







<div class="row">
    <div id="rs-team" class="rs-team sec-color sec-spacer">
        <div class="container">
            <div class="sec-title mb-50 text-center">
                <br>
                <br>
                <h2>SECTOR EN LA U DESTACADO</h2>

            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
                <?php foreach ($sectorenlau_destacado as $not) { ?>
                    <div class="team-item">
                        <div class="team-img">
                        <video width="100%" height="auto" controls>
                                    <source src="<?php echo base_url() ?>videos_noticias/<?php echo $not->not_url ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            <div class="normal-text">
                                <h3 class="team-name"><?php echo $not->not_fecha ?> - <?php echo $not->not_hora ?> </h3>
                                <span class="subtitle"><?php echo $not->not_nombre ?></span>
                            </div>
                        </div>

                    </div>
                <?php } ?>




            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div id="rs-team" class="rs-team sec-color sec-spacer">
        <div class="container">
            <div class="sec-title mb-50 text-center">
                <br>
                <br>
                <h2>DESTACADO DE HOY</h2>

            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
                <?php foreach ($destacado_destacado as $notss) { ?>
                    <div class="team-item">
                        <div class="team-img">
                        <video width="100%" height="auto" controls>
                                    <source src="<?php echo base_url() ?>videos_noticias/<?php echo $notss->not_url ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            <div class="normal-text">
                                <h3 class="team-name"><?php echo $notss->not_fecha ?> - <?php echo $notss->not_hora ?> </h3>
                                <span class="subtitle"><?php echo $notss->not_nombre ?></span>
                            </div>
                        </div>

                    </div>
                <?php } ?>




            </div>
        </div>
    </div>
</div>


<section id="bottom">
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">

            <div class="sec-title mb-50 text-center">
                <br>
                <br>
                <h2>UBICACIÓN</h2>

            </div>



            <section class="information-contac-row">
                <div class="information-contac-column   col-md-12">
                    <center>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.6784514321803!2d-68.1937045!3d-16.4918116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915ede3378ea9d6d%3A0x26cac4a2caefcb29!2sUniversidad%20P%C3%BAblica%20de%20El%20Alto!5e0!3m2!1ses-419!2sbo!4v1681875923505!5m2!1ses-419!2sbo" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </center>
                </div>

            </section>
        </div>
    </div>
</section><!--/#bottom-->
