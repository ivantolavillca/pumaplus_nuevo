<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title><?php echo ($dat->institucion_nombre) ?></title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="<?php echo  base_url() ?>assets/institucion/logo_1683299990.jpg" type="image/png">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/template_pagina/temp1/assets/images/fav.png"> -->
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template_pagina/temp1/assets/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template_pagina/temp1/assets/css/font-awesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template_pagina/temp1/assets/fonts/flaticon.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template_pagina/temp1/assets/css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template_pagina/temp1/assets/css/owl.carousel.css">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template_pagina/temp1/assets/css/off-canvas.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template_pagina/temp1/assets/css/magnific-popup.css">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template_pagina/temp1/assets/css/rsmenu-main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template_pagina/temp1/assets/inc/custom-slider/css/nivo-slider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template_pagina/temp1/assets/inc/custom-slider/css/preview.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template_pagina/temp1/assets/css/rs-spacing.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template_pagina/temp1/style.css"> <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template_pagina/temp1/assets/css/responsive.css">
    <script src="<?php echo base_url(); ?>assets/otros/js/jquery-3.1.1.min.js"></script>

    <style>
        .text_edit {
            font-size: 50px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            /* Sombra de desplazamiento horizontal 2px, desplazamiento vertical 2px, radio de desenfoque 4px y opacidad 0.5 */
        }
       
    </style>
</head>

<body class="defult-home">

    <div class="offwrap"></div>

    <!--Preloader start here-->
    <div id="pre-load">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'><img src="<?php echo base_url() ?>assets/template_pagina/temp1/assets/images/fav.png" alt="Bizup Consulting Business"></div>
            </div>
        </div>
    </div>
    <!--Preloader area end here-->

    <!-- Main content Start -->
    <div class="main-content">

        <!--Full width header Start-->
        <div class="full-width-header">
            <!--Header Start-->
            <header id="rs-header" class="rs-header header-transparent">
                <!-- Topbar Area Start -->
                <div class="topbar-area style1" style="background: #780206; background: -webkit-linear-gradient(to right, #061161, #780206);background: linear-gradient(to right, #061161, #780206); ">
                    <div class="container custom">
                        <div class="row y-middle">
                            <div class="col-lg-7">
                                <div class="topbar-contact">
                                    <ul>
                                        <li>
                                            <i class="flaticon-email"></i>
                                            <a href="sie@upea.bo">sie@upea.bo</a>
                                        </li>
                                        <li>
                                            <i class="flaticon-call"></i>
                                            <a href="https://api.whatsapp.com/send?phone=591<?php echo ($dat->ins_telefono) ?>&text=Hola!%20mi%20consulta%20en%20la%20pagina%20de%20upea%20televisi%C3%B3n%20es%20..."> (+591) <?php echo ($dat->ins_telefono) ?></a>
                                        </li>
                                        <li>
                                            <i class="flaticon-location"></i>
                                            Sede Villa Esperanza - El Alto
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 text-right">
                                <div class="toolbar-sl-share">
                                    <ul>
                                        <li class="opening"> <em id="hora_actual"><i class="flaticon-clock"></i> </em> / <?php echo date('Y-m-d') ?> </li>
                                        <li><a href=" <?php echo ($dat->ins_url_facebook) ?>"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="<?php echo ($dat->ins_twitter) ?>"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="<?php echo ($dat->ins_instagram) ?>"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="<?php echo ($dat->ins_youtube) ?>"><i class="fa fa-youtube"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Topbar Area End -->

                <!-- Menu Start -->
                <div class="menu-area menu-sticky" style="background: #780206; background: -webkit-linear-gradient(to right, #061161, #780206);background: linear-gradient(to right, #061161, #780206); ">
                    <div class="container custom">
                        <div class="row-table">
                            <div class="col-cell header-logo">
                                <div class="logo-area">
                                    <a href="index.html">
                                        <img class="normal-logo" src="<?php echo base_url() ?>assets/backend/dashboad/assets/images/logotv2.png" alt="logo">
                                        <img class="sticky-logo" src="<?php echo base_url() ?>assets/template_pagina/temp1/assets/images/logo-dark.png" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-cell">
                                <div class="rs-menu-area">
                                    <div class="main-menu">
                                        <nav class="rs-menu hidden-md">
                                            <ul class="nav-menu">
                                                <li class="rs-mega-menu menu-item-has-children current-menu-item">
                                                    <a href="<?php echo base_url()?>">Inicio</a>


                                                </li>
                                                
                                                
                                                <li class="menu-item-has-children">
                                                    <a href="#">Mas sobre nosotros</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="<?php echo base_url(Hasher::make(217))?>">Programación - LIVE UPEA TV</a></li>
                                                        <li><a href="<?php echo base_url(Hasher::make(215))?>">Misión - Visión</a></li>

                                                        <?php foreach ($dattipper as $value) { ?>
                                                            <li><a href="<?php echo base_url(Hasher::make(220, $value->idtipo_noticia)) ?>"><?php echo $value->tipo_noticia ?></a></li>

                                                        <?php } ?>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Periódico Diario</a>
                                                    <ul class="sub-menu">


                                                        <?php foreach ($datcat as $cat_per) { ?>
                                                            <li><a href="<?php echo base_url(Hasher::make(200, $cat_per->id)) ?>"><?php echo $cat_per->categoria_periodico ?></a></li>
                                                        <?php } ?>
                                                    </ul>
                                                </li>
                                                
                                                <li class="menu-item-has-children">
                                                    <a href="#">Reporteros en Acción</a>
                                                    
                                                </li>
                                                
                                            </ul> <!-- //.nav-menu -->
                                        </nav>
                                    </div> <!-- //.main-menu -->
                                </div>
                            </div>
                            <div class="col-cell">
                                <div class="expand-btn-inner">
                                    <ul>
                                       
                                        <li class="humburger">
                                            <a id="nav-expander" class="nav-expander bar" href="#">
                                                <div class="bar">
                                                    <span class="dot1"></span>
                                                    <span class="dot2"></span>
                                                    <span class="dot3"></span>
                                                    <span class="dot4"></span>
                                                    <span class="dot5"></span>
                                                    <span class="dot6"></span>
                                                    <span class="dot7"></span>
                                                    <span class="dot8"></span>
                                                    <span class="dot9"></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->

                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <a id="nav-close" class="nav-close">
                            <div class="line">
                                <span class="line1"></span>
                                <span class="line2"></span>
                            </div>
                        </a>
                    </div>
                    <div class="canvas-logo">
                        <a href="index.html"><img src="<?php echo base_url() ?>assets/backend/dashboad/assets/images/logotv2.png" alt="logo"></a>
                    </div>
                    <div class="offcanvas-text">
                        <p>We denounce with righteous indig nation in and dislike men who are so beguiled and to demo realized, that they data forest see best business consulting wordpress theme 2021.</p>
                    </div>
                    <div class="media-img">
                        <img src="<?php echo base_url() ?>assets/template_pagina/temp1/assets/images/off2.jpg" alt="Images">
                    </div>
                    <div class="canvas-contact">
                        <div class="address-area">
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Address</h4>
                                    <em>05 kandi BR. New York</em>
                                </div>
                            </div>
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Email</h4>
                                    <em><a href="mailto:support@reacthemes.com">support@reacthemes.com</a></em>
                                </div>
                            </div>
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Phone</h4>
                                    <em>+019988772</em>
                                </div>
                            </div>
                        </div>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->

                <!-- Canvas Mobile Menu start -->
                <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
                    <div class="close-btn">
                        <a id="nav-close2" class="nav-close">
                            <div class="line">
                                <span class="line1"></span>
                                <span class="line2"></span>
                            </div>
                        </a>
                    </div>
                    <ul class="nav-menu">
                        <li class="menu-item-has-children current-menu-item">
                            <a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children current-menu-item">
                                    <a href="#">Multipages</a>
                                    <ul class="sub-menu">
                                        <li class="active"><a href="index.html">Home One</a></li>
                                        <li><a href="index2.html">Home Two</a></li>
                                        <li><a href="index3.html">Home Three</a></li>
                                        <li><a href="index4.html">Home Four</a></li>
                                        <li><a href="index5.html">Home Five</a></li>
                                        <li><a href="index6.html">Home Six</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Onepages</a>
                                    <ul class="sub-menu">
                                        <li><a href="onepage1.html">Onepage One</a></li>
                                        <li><a href="onepage2.html">Onepage Two</a></li>
                                        <li><a href="onepage3.html">Onepage Three</a></li>
                                        <li><a href="onepage4.html">Onepage Four</a></li>
                                        <li><a href="onepage5.html">Onepage Five</a></li>
                                        <li><a href="onepage6.html">Onepage Six</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About</a></li>
                                <li class="last-item menu-item-has-children">
                                    <a href="#">Contact</a>
                                    <ul class="sub-menu">
                                        <li><a href="contact.html">Contact 1</a></li>
                                        <li><a href="contact2.html">Contact 2</a></li>
                                        <li><a href="contact3.html">Contact 3</a></li>
                                    </ul>
                                </li>
                                <li class="last-item menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">Shop</a> </li>
                                        <li><a href="shop-single.html">Shop Single</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                    </ul>
                                </li>
                                <li><a href="pricing-table.html">Pricing Table</a></li>
                                <li class="last-item menu-item-has-children">
                                    <a href="#">Team</a>
                                    <ul class="sub-menu">
                                        <li><a href="team-style1.html">Team Style 1</a> </li>
                                        <li><a href="team-style2.html">Team Style 2</a></li>
                                        <li><a href="team-style3.html">Team Style 3</a></li>
                                        <li><a href="team-single.html">Team Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="appointment.html">Appointment</a></li>
                                <li><a href="careers.html">Careers</a></li>
                                <li><a href="faqs.html">Faqs</a></li>
                                <li><a href="partners.html">Partners</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Portfolios</a>
                            <ul class="sub-menu">
                                <li><a href="portfolio.html">Portfolio One</a></li>
                                <li><a href="portfolio2.html">Portfolio Two</a></li>
                                <li><a href="portfolio3.html">Portfolio Three</a></li>
                                <li><a href="portfolio4.html">Portfolio Four</a></li>
                                <li><a href="portfolio5.html">Portfolio Five</a></li>
                                <li><a href="portfolio6.html">Portfolio Six</a></li>
                                <li><a href="portfolio7.html">Portfolio Seven</a></li>
                                <li><a href="portfolios-filter.html">Portfolios Filter</a></li>
                                <li><a href="project-single.html">Portfolio Single</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Services</a>
                            <ul class="sub-menu">
                                <li><a href="services-style1.html">Services Style 1</a></li>
                                <li><a href="services-style2.html">Services Style 2</a></li>
                                <li><a href="business-planning.html">Business Planning</a></li>
                                <li><a href="tax-strategy.html">Tax strategy</a></li>
                                <li><a href="financial-advices.html">Financial Advices</a></li>
                                <li><a href="insurance-strategy.html">Insurance Strategy</a></li>
                                <li><a href="start-ups.html">Start Ups</a></li>
                                <li><a href="manage-investment.html">Manage Investment</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Elements</a>
                            <ul class="sub-menu">
                                <li><a href="accordion.html">Accordion</a></li>
                                <li><a href="address.html">Address Box</a></li>
                                <li><a href="banner.html">Banner</a></li>
                                <li><a href="blog-grid-element.html">Blog Grid</a></li>
                                <li><a href="blog-slider-element.html">Blog Slider</a></li>
                                <li><a href="button.html">Button</a></li>
                                <li><a href="heading.html">Heading</a></li>
                                <li><a href="counter.html">Counter Up</a></li>
                                <li><a href="contact-form.html">Contact Form</a></li>
                                <li><a href="flip-box.html">Flip Box</a></li>
                                <li><a href="pricing.html">Pricing Table</a></li>
                                <li><a href="progressbar.html">Progress Bar</a></li>
                                <li><a href="portfolios.html">Portfolios</a></li>
                                <li><a href="portfolios-filter.html">Portfolios Filter</a></li>
                                <li><a href="partner.html">Partners</a></li>
                                <li><a href="services-grid.html">Services Grid</a></li>
                                <li><a href="services-slider.html">Services Slider</a></li>
                                <li><a href="testimonial.html">Testimonial</a></li>
                                <li><a href="team-grid.html">Team Grid</a></li>
                                <li><a href="team-slider.html">Team Slider</a></li>
                                <li><a href="work-process.html">Working Process</a></li>
                            </ul>
                        </li>
                    </ul> <!-- //.nav-menu -->
                    <div class="canvas-contact">
                        <div class="address-area">
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Address</h4>
                                    <em>05 kandi BR. New York</em>
                                </div>
                            </div>
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Email</h4>
                                    <em><a href="mailto:support@reacthemes.com">support@reacthemes.com</a></em>
                                </div>
                            </div>
                            <div class="address-list">
                                <div class="info-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="info-content">
                                    <h4 class="title">Phone</h4>
                                    <em>+019988772</em>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->
        <br>

        <!-- Banner Section Start -->
        <div id="rs-slider" class="rs-slider slider3 rs-slider-style4 relative">
            <div class="bend niceties">
                <div id="nivoSlider" class="slides">
                    <!-- <img src="<?php echo base_url() ?>assets/template_pagina/temp1/assets/images/slider/h4-sl1.jpg" alt="" title="#slide-1" /> -->
                    <img src="<?php echo base_url() ?>assets/logos/emblematico_upea.jpg" alt="" title="#slide-1" />
                    <img src="<?php echo base_url() ?>assets/template_pagina/temp1/assets/images/slider/fondo.jpg" alt="" title="#slide-2" />
                </div>
                <!-- Slide 1 -->
                <div id="slide-1" class="slider-direction">
                    <div class="content-part text-center">
                        <div class="container">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                       
                            <div class="slider-des">
                             <!-- <div class="sl-subtitle shadowed-text" style="color:#F80808"> <?php echo ($dat->ins_titulo) ?> br(<?php echo ($dat->ins_titulo2) ?>)</div>
                               
                                <h1 class="sl-title shadowed-text" style="color:#F87108"> <?php echo ($dat->ins_subtitulo) ?></h1>  -->
                           
                        <h3 class="sub-title text_edit" style="color:#F80808"><?php echo ($dat->ins_titulo) ?> <br> <br>(<?php echo ($dat->ins_titulo2) ?>)</h3> 
                        <h3 class="sub-title text_edit" style="color:#F87108"><?php echo ($dat->ins_subtitulo) ?></h3> 
                            </div>
                            
                            <ul class="slider-bottom">
                                <li><a class="readon consultant orange-slide" href="contact.html">UPEA TV - EN VIVO</a></li>
                                <li>
                                    <div class="rs-videos">
                                        <div class="animate-border orange-color-style">
                                            <a class="popup-border" href="">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div id="slide-2" class="slider-direction">
                    <div class="content-part text-center">
                        <div class="container">
                            <div class="slider-des">
                                <h1 class="sl-title shadowed-text miTexto" style="color:#F80808"><?php echo ($dat->ins_titulo) ?><br><?php echo ($dat->ins_titulo2) ?></h1>
                                <h1 class="sl-title shadowed-text" style="color:#F87108"> <?php echo ($dat->ins_subtitulo) ?></h1>
                            </div>
                            <ul class="slider-bottom">
                                <li><a class="readon consultant orange-slide" href="contact.html">UPEA</a></li>
                                <li>
                                    <div class="rs-videos">
                                        <div class="animate-border orange-color-style">
                                            <a class="popup-border" href="https://www.youtube.com/watch?v=FMvA5fyZ338">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->

        <!-- About Section Start -->
        <div class="rs-about main-home bg1 pt-110 pb-110 md-pt-70 md-pb-65">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-6 md-mb-50">
                        <div class="images-part">
                            <img src="assets/images/about/about.png" alt="Images">
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="sec-title">
                            <h2 class="title pb-30">
                                We take your business to next level
                            </h2>
                            <span class="sub-text">30+ years experience in business and finance consulting, IT solutions, and working with 5k+ clients over the world. </span>

                            <p class="margin-0">Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally circumstances occur in which toil and pain can procure him some great pleasure. Creation timelines for the digital consulting business theme 2021 bstandard lorem ipsum passage vary, with some citing the 15th century and others the 20th.</p>
                            <div class="btn-part mt-45">
                                <a class="readon consultant discover" href="about.html">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Services Section Start -->
        <div class="rs-services main-home bg2 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-7">
                        <div class="sec-title mb-70 md-mb-30">
                            <h2 class="title white-color">
                                What services we provide to our customers business
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right md-left">
                        <div class="btn-part mb-90 md-mb-50">
                            <a class="readon consultant discover" href="services-style1.html">View Services</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-55 col-md-6">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="assets/images/services/main-home/1.png" alt="Services">
                            </div>
                            <div class="services-text">
                                <h2 class="title"><a href="business-planning.html">Business Planning</a></h2>
                                <p class="services-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus consulting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-55 col-md-6">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="assets/images/services/main-home/2.png" alt="Services">
                            </div>
                            <div class="services-text">
                                <h2 class="title"><a href="tax-strategy.html">Tax Strategy</a></h2>
                                <p class="services-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus consulting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-55 col-md-6">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="assets/images/services/main-home/3.png" alt="Services">
                            </div>
                            <div class="services-text">
                                <h2 class="title"><a href="financial-advices.html">Financial Advices</a></h2>
                                <p class="services-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus consulting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 md-mb-55 col-md-6">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="assets/images/services/main-home/4.png" alt="Services">
                            </div>
                            <div class="services-text">
                                <h2 class="title"><a href="insurance-strategy.html">Insurance Strategy</a></h2>
                                <p class="services-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus consulting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 sm-mb-55 col-md-6">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="assets/images/services/main-home/5.png" alt="Services">
                            </div>
                            <div class="services-text">
                                <h2 class="title"><a href="start-ups.html">Start Ups</a></h2>
                                <p class="services-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus consulting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src="assets/images/services/main-home/6.png" alt="Services">
                            </div>
                            <div class="services-text">
                                <h2 class="title"><a href="manage-investment.html">Manage Investment</a></h2>
                                <p class="services-txt"> Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus consulting.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->

        <!-- Project Section Start -->
        <div class="rs-project style1 bg3 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="sec-title text-center mb-60 md-mb-40">
                    <h2 class="title title2">
                        Completed business cases
                    </h2>
                </div>
                <div class="gridFilter mb-50 md-mb-30 text-center">
                    <button class="active" data-filter="*">All</button>
                    <button data-filter=".filter1">Business Strategy</button>
                    <button data-filter=".filter2">Financial</button>
                    <button data-filter=".filter3">Investment</button>
                    <button data-filter=".filter4">Tax Consulting</button>
                </div>
                <div class="row grid">
                    <div class="col-lg-4 col-md-6 mb-30 grid-item filter1">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="assets/images/project/style1/1.jpg" alt="images">
                            </div>
                            <div class="project-content">
                                <div class="project-inner">
                                    <span class="category"><a href="project-single.html">Investment</a></span>
                                    <h3 class="title"><a href="project-single.html">Business planning</a></h3>
                                    <a class="p-icon" href="project-single.html"><i class="custom-icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 grid-item filter3 filter1">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="assets/images/project/style1/2.jpg" alt="images">
                            </div>
                            <div class="project-content">
                                <div class="project-inner">
                                    <span class="category"><a href="project-single.html">Investment</a></span>
                                    <h3 class="title"><a href="project-single.html">Strength solutions</a></h3>
                                    <a class="p-icon" href="project-single.html"><i class="custom-icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 grid-item filter2 filter4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="assets/images/project/style1/3.jpg" alt="images">
                            </div>
                            <div class="project-content">
                                <div class="project-inner">
                                    <span class="category"><a href="project-single.html">Business Strategy</a></span>
                                    <h3 class="title"><a href="project-single.html">Business analytics</a></h3>
                                    <a class="p-icon" href="project-single.html"><i class="custom-icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 md-mb-30 grid-item filter2 filter3">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="assets/images/project/style1/4.jpg" alt="images">
                            </div>
                            <div class="project-content">
                                <div class="project-inner">
                                    <span class="category"><a href="project-single.html">Business Strategy</a></span>
                                    <h3 class="title"><a href="project-single.html">Stock market analysis</a></h3>
                                    <a class="p-icon" href="project-single.html"><i class="custom-icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-mb-30 grid-item filter3 filter4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="assets/images/project/style1/5.jpg" alt="images">
                            </div>
                            <div class="project-content">
                                <div class="project-inner">
                                    <span class="category"><a href="project-single.html">Financial</a></span>
                                    <h3 class="title"><a href="project-single.html">Sales analysis</a></h3>
                                    <a class="p-icon" href="project-single.html"><i class="custom-icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item filter2 filter4">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="assets/images/project/style1/6.jpg" alt="images">
                            </div>
                            <div class="project-content">
                                <div class="project-inner">
                                    <span class="category"><a href="project-single.html">Tax Consulting</a></span>
                                    <h3 class="title"><a href="project-single.html">Stock investments</a></h3>
                                    <a class="p-icon" href="project-single.html"><i class="custom-icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Section End -->

        <!-- Team Section Start -->
        <div class="rs-team style1 bg4 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-5">
                        <div class="sec-title mb-50 md-mb-35">
                            <h2 class="title white-color">
                                We’re experienced professionals
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-7 text-right md-left">
                        <div class="btn-part mb-90 md-mb-50">
                            <a class="readon consultant discover" href="about.html">View Peoples</a>
                        </div>
                    </div>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true" data-center-mode="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true">
                    <div class="team-wrap">
                        <div class="image-wrap">
                            <a href="team-single.html"><img src="assets/images/team/1.jpg" alt="Team"></a>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name"><a href="team-single.html">Dakota Johnson</a></h3>
                            <span class="team-title">Business Advisor</span>
                        </div>
                    </div>
                    <div class="team-wrap">
                        <div class="image-wrap">
                            <a href="team-single.html"><img src="assets/images/team/2.jpg" alt="Team"></a>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name"><a href="team-single.html">Morgan Freeman</a></h3>
                            <span class="team-title">Senior Consultant</span>
                        </div>
                    </div>
                    <div class="team-wrap">
                        <div class="image-wrap">
                            <a href="team-single.html"><img src="assets/images/team/3.jpg" alt="Team"></a>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name"><a href="team-single.html">Natalie Martinez</a></h3>
                            <span class="team-title">Business Advisor</span>
                        </div>
                    </div>
                    <div class="team-wrap">
                        <div class="image-wrap">
                            <a href="team-single.html"><img src="assets/images/team/4.jpg" alt="Team"></a>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name"><a href="team-single.html">Al Pacino</a></h3>
                            <span class="team-title">Finance Consultant</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Section Start -->

        <!-- Why Choose Section Start -->
        <div class="rs-choose bg5 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                        <div class="sec-title mb-35">
                            <h2 class="title pb-30">
                                Why choose us
                            </h2>
                            <p class="margin-0">We donec pulvinar magna id leoersi pellentesque impered dignissim rhoncus euismod euismod eros vitae. we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                        </div>
                        <!-- Skillbar Section Start -->
                        <div class="rs-skillbar style1">
                            <div class="cl-skill-bar">
                                <!-- Start Skill Bar -->
                                <span class="skillbar-title">Business Planning</span>
                                <div class="skillbar" data-percent="90">
                                    <p class="skillbar-bar"></p>
                                    <span class="skill-bar-percent"></span>
                                </div>
                                <!-- Start Skill Bar -->
                                <span class="skillbar-title">Financial Advices</span>
                                <div class="skillbar" data-percent="85">
                                    <p class="skillbar-bar"></p>
                                    <span class="skill-bar-percent"></span>
                                </div>
                                <!-- Start Skill Bar -->
                                <span class="skillbar-title">Investment Strategy</span>
                                <div class="skillbar" data-percent="75">
                                    <p class="skillbar-bar"></p>
                                    <span class="skill-bar-percent"></span>
                                </div>
                                <!-- Start Skill Bar -->
                                <span class="skillbar-title">Business Security</span>
                                <div class="skillbar margin-no" data-percent="65">
                                    <p class="skillbar-bar"></p>
                                    <span class="skill-bar-percent"></span>
                                </div>
                            </div>
                        </div>
                        <!-- Skillbar Section End -->
                    </div>
                    <div class="col-lg-6">
                        <div class="rs-videos choose-video">
                            <div class="images-video">
                                <img src="assets/images/choose/chosse-video.jpg" alt="images">
                            </div>
                            <div class="animate-border">
                                <a class="popup-border" href="https://www.youtube.com/watch?v=FMvA5fyZ338">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section Start -->
            <div id="rs-services" class="rs-services chooseus-style pt-100 md-pt-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 md-mb-30">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="assets/images/choose/icons/1.png" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a href="services-style1.html">Expert peoples</a></h3>
                                    <p class="services-txt">At vero eos et accusamus etiusto odio praesentium.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-30">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="assets/images/choose/icons/2.png" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a href="services-style1.html">Big experience</a></h3>
                                    <p class="services-txt">At vero eos et accusamus etiusto odio praesentium.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="assets/images/choose/icons/3.png" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a href="services-style1.html">Committed to quality</a></h3>
                                    <p class="services-txt">At vero eos et accusamus etiusto odio praesentium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->
        </div>
        <!-- Why Choose Section Start -->

        <!-- Testimonial Section Start -->
        <div class="rs-testimonial main-home bg6 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-6 md-mb-40">
                        <div class="testi-image">
                            <img src="assets/images/testimonial/testi.png" alt="Testimonial">
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 md-pl-15">
                        <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="30" data-autoplay="false" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-md-device="1" data-md-device-nav="false" data-md-device-dots="true" data-center-mode="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="true" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true">
                            <div class="testi-item">
                                <div class="item-content">
                                    <span class="icon-img">
                                        <img src="assets/images/testimonial/quote.png" alt="">
                                    </span>
                                    <p class="desc">
                                        Customer support is excellent and documentation good – novice can easily understand. Although I had a problem with the performance, thanks to the customer support, we have solved this problem as well..
                                    </p>
                                </div>
                                <div class="testi-content">
                                    <div class="image-wrap">
                                        <img src="assets/images/testimonial/avatar/1.jpg" alt="Testimonial">
                                    </div>
                                    <div class="testi-information">
                                        <div class="testi-name">Ben Stokes</div>
                                        <span class="testi-title">Envato User</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-item">
                                <div class="item-content">
                                    <span class="icon-img">
                                        <img src="assets/images/testimonial/quote.png" alt="">
                                    </span>
                                    <p class="desc">
                                        These guys are awesome! Each time I needed their help, their response was quick and very helpful. Also, the theme is very flexible. Five stars from me for everything! I truly recommend this theme!!!
                                    </p>
                                </div>
                                <div class="testi-content">
                                    <div class="image-wrap">
                                        <img src="assets/images/testimonial/avatar/2.jpg" alt="Testimonial">
                                    </div>
                                    <div class="testi-information">
                                        <div class="testi-name">Angelina Jolie</div>
                                        <span class="testi-title">Envato Advisor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-item">
                                <div class="item-content">
                                    <span class="icon-img">
                                        <img src="assets/images/testimonial/quote.png" alt="">
                                    </span>
                                    <p class="desc">
                                        The theme is fine. It is customizable and its demos are great. The education plugin also works fine. But, although I like it so much, I want to point out a few shortcomings. Theme is appropriate, I agree.
                                    </p>
                                </div>
                                <div class="testi-content">
                                    <div class="image-wrap">
                                        <img src="assets/images/testimonial/avatar/3.jpg" alt="Testimonial">
                                    </div>
                                    <div class="testi-information">
                                        <div class="testi-name">Megan Fox</div>
                                        <span class="testi-title">Senior CEO</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-item">
                                <div class="item-content">
                                    <span class="icon-img">
                                        <img src="assets/images/testimonial/quote.png" alt="">
                                    </span>
                                    <p class="desc">
                                        These guys are awesome! Each time I needed their help, their response was quick and very helpful. Also, the theme is very flexible. Five stars from me for everything! I truly recommend this theme!!!
                                    </p>
                                </div>
                                <div class="testi-content">
                                    <div class="image-wrap">
                                        <img src="assets/images/testimonial/avatar/4.jpg" alt="Testimonial">
                                    </div>
                                    <div class="testi-information">
                                        <div class="testi-name">Nicole Kidman</div>
                                        <span class="testi-title">Envato Author</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Section End -->

        <!-- Blog Section Start -->
        <div id="rs-blog" class="rs-blog blog-main-home bg7 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="sec-title text-center mb-60 md-mb-40">
                    <h2 class="title title2">
                        Latest blog posts
                    </h2>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                    <div class="blog-item">
                        <div class="image-wrap">
                            <a href="blog-details.html"><img src="assets/images/blog/1.jpg" alt="Blog"></a>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li class="date">25 Jan 2021</li>
                                <li class="admin"><a href="blog-details.html">Digital Marketing</a></li>
                            </ul>
                            <h3 class="blog-title"><a href="blog-details.html">7 Productivity tips to avoid burnout when working</a></h3>
                            <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            <div class="blog-btn">
                                <a class="readon consultant blog" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="image-wrap">
                            <a href="blog-details.html"><img src="assets/images/blog/2.jpg" alt="Blog"></a>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li class="date">25 Jan 2021</li>
                                <li class="admin"><a href="blog-details.html">Digital Marketing</a></li>
                            </ul>
                            <h3 class="blog-title"><a href="blog-details.html">7 Productivity tips to avoid burnout when working</a></h3>
                            <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            <div class="blog-btn">
                                <a class="readon consultant blog" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="image-wrap">
                            <a href="blog-details.html"><img src="assets/images/blog/3.jpg" alt="Blog"></a>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li class="date">25 Jan 2021</li>
                                <li class="admin"><a href="blog-details.html">Digital Marketing</a></li>
                            </ul>
                            <h3 class="blog-title"><a href="blog-details.html">7 Productivity tips to avoid burnout when working</a></h3>
                            <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            <div class="blog-btn">
                                <a class="readon consultant blog" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="image-wrap">
                            <a href="blog-details.html"><img src="assets/images/blog/4.jpg" alt="Blog"></a>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li class="date">25 Jan 2021</li>
                                <li class="admin"><a href="blog-details.html">Digital Marketing</a></li>
                            </ul>
                            <h3 class="blog-title"><a href="blog-details.html">7 Productivity tips to avoid burnout when working</a></h3>
                            <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            <div class="blog-btn">
                                <a class="readon consultant blog" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="image-wrap">
                            <a href="blog-details.html"><img src="assets/images/blog/5.jpg" alt="Blog"></a>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li class="date">25 Jan 2021</li>
                                <li class="admin"><a href="blog-details.html">Digital Marketing</a></li>
                            </ul>
                            <h3 class="blog-title"><a href="blog-details.html">7 Productivity tips to avoid burnout when working</a></h3>
                            <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            <div class="blog-btn">
                                <a class="readon consultant blog" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="image-wrap">
                            <a href="blog-details.html"><img src="assets/images/blog/6.jpg" alt="Blog"></a>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li class="date">25 Jan 2021</li>
                                <li class="admin"><a href="blog-details.html">Digital Marketing</a></li>
                            </ul>
                            <h3 class="blog-title"><a href="blog-details.html">7 Productivity tips to avoid burnout when working</a></h3>
                            <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            <div class="blog-btn">
                                <a class="readon consultant blog" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="image-wrap">
                            <a href="blog-details.html"><img src="assets/images/blog/1.jpg" alt="Blog"></a>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li class="date">25 Jan 2021</li>
                                <li class="admin"><a href="blog-details.html">Digital Marketing</a></li>
                            </ul>
                            <h3 class="blog-title"><a href="blog-details.html">7 Productivity tips to avoid burnout when working</a></h3>
                            <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo...</p>
                            <div class="blog-btn">
                                <a class="readon consultant blog" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section End -->

        <!-- Contact Section Start -->
        <div class="rs-contact main-home bg8 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="sec-title text-center mb-60">
                    <h2 class="title title2 contact">
                        Let us help your business to move forward.
                    </h2>
                </div>
                <div class="row y-middle">
                    <div class="col-lg-6">
                        <div class="contact-map">
                            <iframe src="https://maps.google.com/maps?q=rstheme&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 md-mt-55 pl-40 md-pl-15">
                        <div class="contact-wrap">
                            <div id="form-messages"></div>
                            <form id="contact-form" method="post" action="mailer.php">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                            <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                            <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                            <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                            <input class="from-control" type="text" id="Website" name="subject" placeholder="Your Website" required="">
                                        </div>

                                        <div class="col-lg-12 mb-35">
                                            <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="btn-part">
                                        <div class="form-group mb-0">
                                            <input class="readon submit" type="submit" value="Submit Now">
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Icon Section Start -->
            <div class="rs-contact contact-icons-style pt-100 md-pt-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <img src="assets/images/contact/icons/1.png" alt="images">
                                </div>
                                <div class="content-text">
                                    <h2 class="title"><a href="#">USA office</a></h2>
                                    <p class="services-txt">55 Gerad Lane,<br>
                                        NY 11201, USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <img src="assets/images/contact/icons/2.png" alt="images">
                                </div>
                                <div class="content-text">
                                    <h2 class="title"><a href="#">BD office</a></h2>
                                    <p class="services-txt">1010 Avenue<br>
                                        New York, US.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <img src="assets/images/contact/icons/3.png" alt="images">
                                </div>
                                <div class="content-text">
                                    <h2 class="title"><a href="#">Email us</a></h2>
                                    <a href="#">test@gamil.com</a><br>
                                    <a href="#">test2@gamil.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <img src="assets/images/contact/icons/4.png" alt="images">
                                </div>
                                <div class="content-text">
                                    <h2 class="title"><a href="#">Call us</a></h2>
                                    <a href="tel:(+088)589-8745">(+088) 589-8745</a>
                                    <a href="tel:(+088)222-9999">(+088) 222-9999</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Icon Section End -->
        </div>
        <!-- Contact Section End -->


    </div>
    <!-- Main content End -->

    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer style1">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10">
                        <div class="footer-logo mb-40">
                            <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                        </div>
                        <div class="textwidget white-color pb-40">
                            <p>We denounce with righteous indig nation in and dislike men who are so beguiled and to demo realized by the, so blinded by desire, that they cannot foresee.</p>
                        </div>
                        <ul class="footer-social md-mb-30">
                            <li>
                                <a href="#" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                            </li>
                            <li>
                                <a href="# " target="_blank"><span><i class="fa fa-twitter"></i></span></a>
                            </li>

                            <li>
                                <a href="# " target="_blank"><span><i class="fa fa-pinterest-p"></i></span></a>
                            </li>
                            <li>
                                <a href="# " target="_blank"><span><i class="fa fa-instagram"></i></span></a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10 pl-55 md-pl-15">
                        <h3 class="footer-title">Our Services</h3>
                        <ul class="site-map">
                            <li><a href="business-planning.html">Business planning</a></li>
                            <li><a href="tax-strategy.html">Tax strategy</a></li>
                            <li><a href="financial-advices.html">Financial advices</a></li>
                            <li><a href="insurance-strategy.html">Insurance strategy</a></li>
                            <li><a href="manage-investment.html">Manage investment</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 md-mb-10">
                        <h3 class="footer-title">Contact Info</h3>
                        <ul class="address-widget">
                            <li>
                                <i class="flaticon-location"></i>
                                <div class="desc">1010 Avenue of the Moon <br>
                                    New York, NY 10018 US.</div>
                            </li>
                            <li>
                                <i class="flaticon-call"></i>
                                <div class="desc">
                                    <a href="#">(+880)155 69569 365</a>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-email"></i>
                                <div class="desc">
                                    <a href="mailto:support@reacthemes.com">support@reacthemes.com</a>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-clock-1"></i>
                                <div class="desc">
                                    Office Hours: 8AM - 11PM
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <h3 class="footer-title">Newsletter</h3>
                        <p class="widget-desc white-color">Stay up to update with our latest news and products.</p>
                        <p>
                            <input type="email" name="EMAIL" placeholder="Your email address" required="">
                            <input type="submit" value="Subscribe Now">
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-6 md-mb-10 text-lg-end text-center order-last">
                        <ul class="copy-right-menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="faqs.html">Faqs</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="copyright text-lg-start text-center ">
                            <p>© 2021 Bizup - Consulting Company Inc. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp" class="orange-color">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->


    <!-- Search Modal Start -->
    <div class="modal fade search-modal" id="searchModal" tabindex="-1">
        <button type="button" class="close" data-bs-dismiss="modal">
            <span class="flaticon-cross"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="Search Here..." type="text">
                            <button type="submit" value="Search"><i class="flaticon-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!-- modernizr js -->
    <script src="<?php echo base_url() ?>assets/template_pagina/temp1/assets/js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="<?php echo base_url() ?>assets/template_pagina/temp1/assets/js/jquery.min.js"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="<?php echo base_url() ?>assets/template_pagina/temp1/assets/js/bootstrap.min.js"></script>
    <!-- op nav js -->
    <script src="<?php echo base_url() ?>assets/template_pagina/temp1/assets/js/jquery.nav.js"></script>
    <!-- isotope.pkgd.min js -->
    <script src="<?php echo base_url() ?>assets/template_pagina/temp1/assets/js/isotope.pkgd.min.js"></script>
    <!-- owl.carousel js -->
    <script src="<?php echo base_url() ?>assets/template_pagina/temp1/assets/js/owl.carousel.min.js"></script>
    <!-- wow js -->
    <script src="<?php echo base_url() ?>assets/template_pagina/temp1/assets/js/wow.min.js"></script>
    <!-- Skill bar js -->
    <script src="<?php echo base_url() ?>assets/template_pagina/temp1/assets/js/skill.bars.jquery.js"></script>
    <!-- imagesloaded js -->
    <script src="<?php echo base_url() ?>assets/template_pagina/temp1/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- waypoints.min js -->
    <script src="<?php echo base_url() ?>assets/template_pagina/temp1/assets/js/waypoints.min.js"></script>
    <!-- counterup.min js -->
    <script src="<?php echo base_url() ?>assets/template_pagina/temp1/assets/js/jquery.counterup.min.js"></script>
    <!-- magnific popup js -->
    <script src="<?php echo base_url() ?>assets/template_pagina/temp1/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template_pagina/temp1/assets/inc/custom-slider/js/jquery.nivo.slider.js"></script>
    <!-- contact form js -->
    <script src="<?php echo base_url() ?>assets/template_pagina/temp1/assets/js/contact.form.js"></script>
    <!-- main js -->
    <script src="<?php echo base_url() ?>assets/template_pagina/temp1/assets/js/main.js"></script>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                $.ajax({
                    url: '<?php echo base_url(Hasher::make(400)) ?>',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        $('#hora_actual').text(response.hora);
                    },
                    error: function() {
                        console.log('Error al obtener la hora.');
                    }
                });
            }, 1000); // Actualiza cada segundo (1000 milisegundos)
        });
    </script>
</body>

</html>