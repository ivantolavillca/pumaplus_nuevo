<!DOCTYPE html>
<html lang="es">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="modinatheme">
    <!-- ======== Page title ============ -->
    <title><?php echo($dat->institucion_nombre)?></title>
    <!-- ========== Favicon Icon ========== -->
   
    <link rel="icon" href="<?php echo  base_url()?>assets/institucion/logo_1683299990.jpg" type="image/png"> 
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template_pagina/temp3/assets/css/icons.css">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template_pagina/temp3/assets/css/animate.css">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template_pagina/temp3/assets/css/magnific-popup.css">
    <!--  owl carosuel css plugins -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template_pagina/temp3/assets/css/owl.carousel.min.css">
    <!-- metis menu css file -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template_pagina/temp3/assets/css/metismenu.css">
    <!--  owl theme css plugins -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template_pagina/temp3/assets/css/owl.theme.css">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template_pagina/temp3/assets/css/bootstrap.min.css">
    <!--  main style css file -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template_pagina/temp3/assets/css/style.css">
    <!-- template main style css file -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template_pagina/temp3/style.css">

</head>

<body class="body-wrapper">

    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="U" class="letters-loading">
                    U
                </span>
                <span data-text-preloader="P" class="letters-loading">
                    P
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
                <span data-text-preloader="-" class="letters-loading">
                    -
                </span>
                <span data-text-preloader="T" class="letters-loading">
                    T
                </span>
                <span data-text-preloader="V" class="letters-loading">
                    V
                </span>

            </div>
            <p class="text-center"style="color: blue; ">Identidad con Altura</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- welcome content start from here -->

    <header class="header-wrap header-2">


    
        <div class="top-header d-none d-md-block"  style="background: #780206; background: -webkit-linear-gradient(to right, #061161, #780206);background: linear-gradient(to right, #061161, #780206); ">
            <div class="container-flud">
                <div class="row" >
                    <div class="col-md-7 pr-md-0 col-12" >
                        <div class="header-cta" >
                            <ul>
                                <li>
                                    <a href="sie@upea.bo"><i class="fal fa-envelope"></i> sie@upea.bo</a>
                                </li>
                                <li>
                                    <a href="https://api.whatsapp.com/send?phone=591<?php echo ($dat->ins_telefono) ?>&text=Hola!%20mi%20consulta%20en%20la%20pagina%20de%20upea%20televisi%C3%B3n%20es%20..."><i class="fal fa-phone"></i> +591 <?php echo ($dat->ins_telefono) ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="header-right-cta d-flex justify-content-end">
                            <div class="social-profile mr-30">
                                <a href="<?php echo ($dat->ins_url_facebook) ?>"><i class="fab fa-facebook-f"></i></a>
                                <a href="<?php echo ($dat->ins_twitter) ?>"><i class="fab fa-twitter"></i></a>

                                <a href="<?php echo ($dat->ins_youtube) ?>"><i class="fab fa-youtube"></i></a>
                                <!-- <li><a href=" <?php echo ($dat->ins_url_facebook) ?>"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="<?php echo ($dat->ins_twitter) ?>"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="<?php echo ($dat->ins_instagram) ?>"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="<?php echo ($dat->ins_youtube) ?>"><i class="fa fa-youtube"></i></a></li> -->
                            </div>
                            |
                            <div class="lan-select ml-30">
                               
                                    <a href="<?php echo base_url(Hasher::make(62))?>" class="social-profile" style="color: #FAFAFA;" >LOGIN</a>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-header-wraper" style="background: #780206; background: -webkit-linear-gradient(to right, #061161, #780206);background: linear-gradient(to right, #061161, #780206); ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="header-logo">
                        <div class="logo">
                            <a href="index.html">
                                <img src="<?php echo base_url() ?>assets/backend/dashboad/assets/images/logotv2.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="header-menu d-none d-xl-block">
                        <div class="main-menu">
                            <ul>
                                <li><a href="<?php echo base_url()?>">Inicio</a> </li>
                                <li><a href="">Más sobre nosotros<i class="fas fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo base_url(Hasher::make(217)) ?>">Programación - LIVE UPEA TV</a></li>
                                        <li><a href="<?php echo base_url(Hasher::make(215)) ?>">Misión - Visión</a></li>
                                        <?php foreach ($dattipper as $value) { ?>
                                                            <li><a href="<?php echo base_url(Hasher::make(220, $value->idtipo_noticia)) ?>"><?php echo $value->tipo_noticia ?></a></li>

                                                        <?php } ?>
                                    </ul>
                                </li>
                                <li><a href="">Periodico Diario<i class="fas fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                    <?php foreach ($datcat as $cat_per) { ?>
                                                            <li><a href="<?php echo base_url(Hasher::make(200, $cat_per->id)) ?>"><?php echo $cat_per->categoria_periodico ?></a></li>
                                                        <?php } ?>
                                    </ul>
                                </li>


                                <li><a href="about.html">Reporteros En Acción</a> </li>
                                <li><a href="about.html">LIVE</a> </li>


                            </ul>
                        </div>
                    </div>
                    <div class="header-right d-flex align-items-center" >

                        <div class="mobile-nav-bar d-block ml-3 ml-sm-5 d-xl-none" >
                            <div class="mobile-nav-wrap">
                                <div id="hamburger">
                                    <i class="fal fa-bars"></i>
                                </div>
                                <!-- mobile menu - responsive menu  -->
                                <div class="mobile-nav"  style="background: #EB5757;  background: -webkit-linear-gradient(to right, #000000, #EB5757);  background: linear-gradient(to right, #000000, #EB5757); ">
                                    <button type="button" class="close-nav">
                                        <i class="fal fa-times-circle"></i>
                                    </button>
                                    <nav class="sidebar-nav">

                                        <ul class="metismenu" id="mobile-menu">
                                            <li><a href="<?php echo base_url(Hasher::make(62))?>">Acceder</a></li>
                                            <li><a class="has-arrow" href="#">Más sobre nosotros</a>
                                                <ul class="sub-menu">
                                                <li><a href="<?php echo base_url(Hasher::make(217))?>">Programación - LIVE UPEA TV</a></li>
                                                        <li><a href="<?php echo base_url(Hasher::make(215))?>">Misión - Visión</a></li>

                                                        <?php foreach ($dattipper as $value) { ?>
                                                            <li><a href="<?php echo base_url(Hasher::make(220, $value->idtipo_noticia)) ?>"><?php echo $value->tipo_noticia ?></a></li>

                                                        <?php } ?>       
                                            </ul>
                                            </li>
                                            <li><a class="has-arrow" href="#">Periódico Diario</a>
                                                <ul class="sub-menu">
                                                <?php foreach ($datcat as $cat_per) { ?>
                                                            <li><a href="<?php echo base_url(Hasher::make(200, $cat_per->id)) ?>"><?php echo $cat_per->categoria_periodico ?></a></li>
                                                        <?php } ?>
                                                </ul>
                                            </li>
                                            <li><a href="">Reporteros en Acción</a></li>
                                            <li><a href="">LIVE</a></li>
                                        </ul>
                                    </nav>

                                    <div class="action-bar">
                                        <a href="sie@upea.bo"><i class="fal fa-envelope-open-text"></i>sie@upea.bo</a>
                                        <a href="https://api.whatsapp.com/send?phone=591<?php echo ($dat->ins_telefono) ?>&text=Hola!%20mi%20consulta%20en%20la%20pagina%20de%20upea%20televisi%C3%B3n%20es%20..."><i class="fal fa-phone"></i>+591 <?php echo ($dat->ins_telefono)?></a>
                                   
                                         
                                    </div>
                                </div>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php $this->load->view($contenido);?>
    
    <footer class="footer-2 footer-wrap">
        <div class="footer-widgets">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3 col-12 pr-xl-4">
                        <div class="single-footer-wid site_footer_widget">
                            <a href="index.html">
                                <img src="assets/img/logo.png" alt="">
                            </a>
                            <p class="mt-4">Sed ut perspiciatis unde omnis natus voluptatem accusa ntiumy doloremque laudantium.omnis natus voluptatem accusa ntiumy doloremque laudantium</p>
                            <div class="social-link mt-30">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                    <div class="col-md-6 col-xl-2 col-12">
                        <div class="single-footer-wid">
                            <div class="wid-title">
                                <h4>Company</h4>
                            </div>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="about.html">Company History</a></li>
                                <li><a href="contact.html">Need a Career</a></li>
                                <li><a href="project-details.html">Working Process</a></li>
                                <li><a href="news.html">Blog Post</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                    <div class="col-md-6 col-xl-2 col-12">
                        <div class="single-footer-wid">
                            <div class="wid-title">
                                <h4>Company</h4>
                            </div>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="about.html">Company History</a></li>
                                <li><a href="contact.html">Need a Career</a></li>
                                <li><a href="project-details.html">Working Process</a></li>
                                <li><a href="news.html">Blog Post</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                    <div class="col-md-6 col-xl-3 col-12">
                        <div class="single-footer-wid recent_post_widget">
                            <div class="wid-title">
                                <h4>News News</h4>
                            </div>
                            <div class="recent-post-list">
                                <div class="single-recent-post">
                                    <div class="thumb bg-cover" style="background-image: url('assets/img/blog/b1.jpg');"></div>
                                    <div class="post-data">
                                        <span><i class="fal fa-calendar-alt"></i>24th Nov 2020</span>
                                        <h5><a href="news-details.html">User’s Perspes Using Story Structure</a></h5>
                                    </div>
                                </div>
                                <div class="single-recent-post">
                                    <div class="thumb bg-cover" style="background-image: url('assets/img/blog/b2.jpg');"></div>
                                    <div class="post-data">
                                        <span><i class="fal fa-calendar-alt"></i>15th July 2021</span>
                                        <h5><a href="news-details.html">Optimiz For Assistive Technology Users</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container text-center">
                <div class="footer-bottom-content">
               
                    &copy; 2023 <a target="_blank" href="https://sie.upea.bo/l" title="S.I.E. - U.P.E.A.">SIE - UPEA</a> Dev. Ivan T.
               
               
                </div>
            </div>
        </div>
    </footer>

    <!--  ALl JS Plugins
    ====================================== -->
    <script src="<?php echo base_url() ?>assets/template_pagina/temp3/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template_pagina/temp3/assets/js/modernizr.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template_pagina/temp3/assets/js/jquery.easing.js"></script>
    <script src="<?php echo base_url() ?>assets/template_pagina/temp3/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template_pagina/temp3/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template_pagina/temp3/assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template_pagina/temp3/assets/js/imageload.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template_pagina/temp3/assets/js/scrollUp.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template_pagina/temp3/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template_pagina/temp3/assets/js/magnific-popup.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template_pagina/temp3/assets/js/easypiechart.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template_pagina/temp3/assets/js/counterup.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template_pagina/temp3/assets/js/wow.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template_pagina/temp3/assets/js/metismenu.js"></script>
    <script src="<?php echo base_url() ?>assets/template_pagina/temp3/assets/js/timeline.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template_pagina/temp3/assets/js/ajax-mail.js"></script>
    <script src="<?php echo base_url() ?>assets/template_pagina/temp3/assets/js/active.js"></script>
</body>

</html>