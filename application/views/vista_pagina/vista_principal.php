<section class="hero-slide-wrapper hero-2">
    <div class="hero-text">UPEA</div>
    <div class="hero-slider-2 owl-carousel">
        <div class="single-slide bg-cover" style="background-image: url('<?PHP echo base_url() ?>assets/template_pagina/temp3/assets/img/home2/fondo.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-10 col-xl-8">
                        <div class="hero-contents">
                            <h1>UPEA <br>TELEVISIÓN <br> </h1>
                            <p>CANAL 25</p>
                            <a href="services.html" class="theme-btn"> UPEA<i class="fas fa-arrow-right"></i></a>


                            <a href="https://www.youtube.com/embed/E1xkXZs0cAQ" class="play-video popup-video"><i class="fas fa-play"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide bg-cover" style="background-image: url('<?PHP echo base_url() ?>assets/template_pagina/temp3/assets/img/home2/emblematico_upea.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-10 col-xl-8">
                        <div class="hero-contents">
                            <h1>CANAL <br>UNIVERSITARIO</h1>
                            <p>CANAL 25</p>

                            <a href="about.html" class="theme-btn minimal-btn">LIVE <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide bg-cover" style="background-image: url('<?PHP echo base_url() ?>assets/template_pagina/temp3/assets/img/home2/emblematico.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-10 col-xl-8">
                        <div class="hero-contents">
                            <h1>UPEA <br>TELEVISIÓN <br> </h1>
                            <p>CANAL 25</p>
                            <a href="services.html" class="theme-btn">UPEA <i class="fas fa-arrow-right"></i></a>
                            <a href="about.html" class="theme-btn minimal-btn">LIVE <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our-team-wrapper section-padding">
    <div class="container">
        <div class="row align-items-center mb-40">
            <div class="col-12 col-md-7 text-center text-md-left">
                <div class="section-title">
                    <p>Universidad Pública de El Alto</p>
                    <h1>NUESTRAS AUTORIDADES</h1>
                </div>
            </div>

        </div>

        <div class="team-members-list row">

            <?php foreach ($autoridades as $value) { ?>

                <div class="col-12 col-md-6 col-xl-6">
                    <div class="single-team-member">
                        <div class="member-img bg-cover bg-center" style="background-image: url('<?php echo  base_url() ?>assets/img_autoridad/<?php echo ($value->img_autoridad) ?>')">
                        </div>
                        <div class="member-bio">
                            <h4><?php echo ($value->aut_nombre) ?></h4>
                            <p><?php echo ($value->aut_cargo) ?></p>
                        </div>
                        <div class="social-profile">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>


            <?php } ?>

        </div>
    </div>
</section>


<section class="project-case-study-wrapper techex-landing-page">
    <div class="container">
        <div class="project-case-study-wrapper__circle"></div>

        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <a class="theme-btn-sm mb-15" data-aos="fade-up">UPEA TELEVISIÓN - PRESENTADORES</a>
                    <h1 data-aos="fade-up" data-aos-delay="100">
                        ¡Bienvenidos a UPEA Televisión!
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="success-item__wrapper owl-carousel owl-theme">

        <?php foreach ($presentadores as $value2) { ?>
            <a href="<?php echo ($value2->link_face) ?>" class="success-item">
                <div class="thumb bg-cover" style="
                background-image: url('<?php echo  base_url() ?>assets/img_presentador/<?php echo ($value2->pres_img) ?>');">
                </div>
                <div class="content d-flex align-items-center justify-content-between">
                    <div class="text">
                        <h3><?php echo ($value2->pres_nombre) ?></h3>
                        <p><?php echo ($value2->pres_cargo) ?></p>
                    </div>

                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                </div>
            </a>



        <?php } ?>


    </div>
</section>



<!-- <section class="about-wrapper ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-img" data-aos="fade-right">
                    <img src="<?php echo base_url() ?>assets/images/reporteros_en_accion.PNG" class="img-fluid" alt="" />

                    <div class="video-play-btn" data-aos="fade-up" data-aos-delay="100">
                        <a href="<?php echo base_url() ?>assets/template_pagina/temp3/assets/img//home2/reporteros_logo.mp4" class="play-video popup-video"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="section-title">
                    <a class="theme-btn-sm mb-15" data-aos="fade-left">PANEL INFORMATIVO</a>
                    <h1 data-aos="fade-left" data-aos-delay="100">
                        REPORTEROS EN ACCIÓN
                    </h1>
                    <div data-aos="fade-left" data-aos-delay="150">
                        <p>
                            ¡Envíanos tus noticias! <br>Somos un equipo de reporteros comprometidos con brindar información veraz y actualizada. Si tienes alguna noticia relevante que quieras compartir con nosotros, ¡estamos aquí para escucharte!
                        </p>
                        <p>
                            Utiliza el formulario a continuación para enviarnos tus noticias, eventos o cualquier información que creas que debemos conocer. Nos pondremos en contacto contigo si necesitamos más detalles o si tu noticia es seleccionada para su publicación.
                        </p>
                    </div>



                    <a href="#" class="theme-btn black" data-aos="fade-up" data-aos-delay="200">envianos tus noticias <i class="icon-arrow-right-1"></i></a>
                </div>
            </div>
        </div>
    </div>
   

</section> -->
<section class="about-us-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 pr-lg-5 order-2 order-lg-1 mt-5 mt-lg-0">
                <div class="section-title mb-30">
                    <p>PANEL INFORMATIVO</p>
                    <h1>REPORTEROS EN ACCIÓN <br>
                        </h1>
                </div>

                <p class="pr-5">¡Envíanos tus noticias! <br>Somos un equipo de reporteros comprometidos con brindar información veraz y actualizada. Si tienes alguna noticia relevante que quieras compartir con nosotros, ¡estamos aquí para escucharte!.</p>
                <p class="pr-5">Utiliza el formulario a continuación para enviarnos tus noticias, eventos o cualquier información que creas que debemos conocer. Nos pondremos en contacto contigo si necesitamos más detalles o si tu noticia es seleccionada para su publicación.</p>

                <div class="about-icon-box">
                    <div class="icon">
                        <i class="fal fa-users"></i>
                    </div>
                    <div class="content">
                        <a href=""><h3>ENVIANOS TUS NOTICIAS </h3></a>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-6 pl-lg-5 col-12 order-1 order-lg-2">
                <span class="dot-circle"></span>
                <div class="about-us-img" style="background-image: url('<?php echo base_url() ?>assets/images/reporteros_en_accion.PNG')">
                <div class="video-play-btn" data-aos="fade-up" data-aos-delay="100">
                        <a href="<?php echo base_url() ?>assets/template_pagina/temp3/assets/img//home2/reporteros_logo.mp4" class="play-video popup-video"><i class="fas fa-play"></i></a>
                    </div>
                </div>
                <span class="triangle-bottom-right"></span>
            </div>
        </div>
    </div>
</section>

<section class="our-team-wrapper section-bg-2 section-padding bg-contain" style="background-image: url('<?php echo base_url() ?>assets/template_pagina/temp3/assets/img/cta5.png')">
    <div class="container">
        <div class="row align-items-center mb-40">
            <div class="col-12 col-md-7 text-center text-md-left">
                <div class="section-title">
                    <p>Exclusive Members</p>
                    <h1>Meet Our Experience <br> Team Members</h1>
                </div>
            </div>
            <div class="col-12 col-md-5 mt-4 mt-md-0 text-center text-md-right">
                <a href="team.html" class="theme-btn">View all Member <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 col-xl-6">
                <div class="single-member-card">
                    <div class="member-img bg-cover bg-center" style="background-image: url('<?php echo base_url() ?>assets/template_pagina/temp3/assets/img/home4/tm1.jpg')">
                    </div>
                    <div class="member-bio">
                        <h4>Wallace S. Camacho</h4>
                        <p>Business Manager</p>
                    </div>
                    <div class="social-profile">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-6">
                <div class="single-member-card active">
                    <div class="member-img bg-cover bg-center" style="background-image: url('<?php echo base_url() ?>assets/template_pagina/temp3/assets/img/home4/tm2.jpg')">
                    </div>
                    <div class="member-bio">
                        <h4>Lawrence Pacheco</h4>
                        <p>Web Developer</p>
                    </div>
                    <div class="social-profile">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<section class="features-wrapper features-2 section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-xl-6">
                <div class="row mtm-30">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="icon-box">
                            <div class="icon">
                                <i class="flaticon flaticon-monitor"></i>
                            </div>
                            <h4><a href="services-details.html">Development</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="icon-box">
                            <div class="icon">
                                <i class="flaticon flaticon-pyramid"></i>
                            </div>
                            <h4><a href="services-details.html">Engineering</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="icon-box">
                            <div class="icon">
                                <i class="flaticon flaticon-diagram"></i>
                            </div>
                            <h4><a href="services-details.html">IT Marketing</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="icon-box">
                            <div class="icon">
                                <i class="flaticon flaticon-diagram-1"></i>
                            </div>
                            <h4><a href="services-details.html">UX Strategy</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="icon-box">
                            <div class="icon">
                                <i class="flaticon flaticon-meeting"></i>
                            </div>
                            <h4><a href="services-details.html">Consultancy</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="icon-box">
                            <div class="icon">
                                <i class="flaticon flaticon-stats"></i>
                            </div>
                            <h4><a href="services-details.html">Apps Design</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-5 offset-xl-1 mt-5 mt-xl-0">
                <div class="section-title">
                    <p>How can help you</p>
                    <h1>Business Solutions To Growth Business</h1>
                </div>
                <p class="mt-20">Sed ut perspiciatis unde omnis natus error voluptatems
                    accusa ntium doloremque laudantium totam.</p>
                <a href="about.html" class="theme-btn mt-30">Learn more <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <svg class="feature-bg">
        <path fill-rule="evenodd" opacity="0.039" fill="rgb(8, 106, 215)" d="M-0.000,232.999 C-0.000,232.999 239.131,-52.566 575.000,47.000 C910.869,146.565 1087.000,55.653 1231.000,19.999 C1375.000,-15.654 1800.820,-31.520 1915.000,232.999 C1445.000,232.999 -0.000,232.999 -0.000,232.999 Z" />
    </svg>
</section>

<section class="about-us-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-12 pr-xl-5">
                <div class="section-title mb-30">
                    <p>About Company</p>
                    <h1>25 Years Of Experience <br> In IT Solutions</h1>
                </div>

                <p class="pr-md-5">Sed ut perspiciatis unde omnis natus error sit voluptatem accusa ntium doloremque laudantium totam rem aperiamea queipsa quae abillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                <div class="about-check-list d-flex">
                    <div class="banner bg-cover" style="background-image: url('assets/img/about_list.jpg')"></div>

                    <ul class="checked-list">
                        <li>Product Engineering</li>
                        <li>Digital Services</li>
                        <li>IT Consultancy</li>
                        <li>Automated Software</li>
                    </ul>
                </div>

            </div>

            <div class="col-xl-6 col-md-10 col-lg-6 pl-xl-5 col-12 mt-5 mt-xl-0">
                <div class="about-thum">
                    <div class="item top-image text-right">
                        <img src="assets/img/about-big-thumb-1.jpg" alt="rrdevs">
                    </div>
                    <div class="item bottom-image">
                        <img src="assets/img/about-big-thumb-2.jpg" alt="rrdevs">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="funfact-wrapper bottom text-white">
    <div class="container">
        <div class="funfact-content-grid bg-cover" style="background-image: url('assets/img/funfact-line.png')">
            <div class="single-funfact-item">
                <div class="icon">
                    <i class="fal fa-gem"></i>
                </div>
                <h3>368</h3>
                <p>Project Completed</p>
            </div>
            <div class="single-funfact-item">
                <div class="icon">
                    <i class="fal fa-drafting-compass"></i>
                </div>
                <h3>785</h3>
                <p>Expert Consultants</p>
            </div>
            <div class="single-funfact-item">
                <div class="icon">
                    <i class="fal fa-stars"></i>
                </div>
                <h3>896</h3>
                <p>5 Stars Rating</p>
            </div>
            <div class="single-funfact-item">
                <div class="icon">
                    <i class="fal fa-trophy-alt"></i>
                </div>
                <h3>125</h3>
                <p>Awards Winning</p>
            </div>
        </div>
    </div>
</section>

<section class="services-wrapper service-2 section-padding section-bg bg-contain" style="background-image: url('assets/img/circle-bg.png')">
    <div class="container">
        <div class="row mb-50">
            <div class="col-12 col-lg-12">
                <div class="section-title text-white text-center">
                    <p>Popular IT services</p>
                    <h1>Solutions For IT Business</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-xl-4 col-12">
                <div class="single-service-box">
                    <div class="icon bg-cover" style="background-image: url('assets/img/home2/s1.jpg')">
                    </div>
                    <div class="content-visible">
                        <h4><a href="services-details.html">Manage IT Services</a></h4>
                        <p>Sed perspicias unde omnis natus</p>
                    </div>
                    <div class="content-overlay">
                        <h4><a href="services-details.html">Manage IT Services</a></h4>
                        <p>Quis autem vel eum iure reprehenderit
                            qui in ea voluptate velit esse</p>
                        <a href="services-details.html" class="read-link">learn more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 col-12">
                <div class="single-service-box">
                    <div class="icon bg-cover" style="background-image: url('assets/img/home2/s2.jpg')">
                    </div>
                    <div class="content-visible">
                        <h4><a href="services-details.html">Product Engineering</a></h4>
                        <p>Sed perspicias unde omnis natus</p>
                    </div>
                    <div class="content-overlay">
                        <h4><a href="services-details.html">Product Engineering</a></h4>
                        <p>Quis autem vel eum iure reprehenderit
                            qui in ea voluptate velit esse</p>
                        <a href="services-details.html" class="read-link">learn more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 col-12">
                <div class="single-service-box">
                    <div class="icon bg-cover" style="background-image: url('assets/img/home2/s3.jpg')">
                    </div>
                    <div class="content-visible">
                        <h4><a href="services-details.html">Digital Marketing</a></h4>
                        <p>Sed perspicias unde omnis natus</p>
                    </div>
                    <div class="content-overlay">
                        <h4><a href="services-details.html">Product Engineering</a></h4>
                        <p>Quis autem vel eum iure reprehenderit
                            qui in ea voluptate velit esse</p>
                        <a href="services-details.html" class="read-link">learn more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-section section-padding">
    <div class="faq-bg bg-cover d-none d-lg-block" style="background-image: url('assets/img/faq_home_2.jpg')"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 offset-lg-6 offset-xl-7">
                <div class="col-12 col-lg-12 mb-40">
                    <div class="section-title">
                        <p>Why choose us</p>
                        <h1>Innovating Solutions <br> Digital Mindset</h1>
                    </div>
                </div>

                <div class="faq-content">
                    <div class="faq-accordion">
                        <div id="accordion" class="accordion">
                            <div class="card">
                                <div class="card-header" id="faq1">
                                    <p class="mb-0 text-capitalize">
                                        <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-1">
                                            Can I Get Internet In My Area?
                                        </a>
                                        </h5>
                                </div>
                                <div id="faq-1" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin
                                    </div>
                                </div>
                            </div> <!-- /card -->
                            <div class="card">
                                <div class="card-header" id="faq2">
                                    <p class="mb-0 text-capitalize">
                                        <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="true" href="#faq-2">
                                            How Helping Solve Climate Change ?
                                        </a>
                                    </p>
                                </div>
                                <div id="faq-2" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin
                                    </div>
                                </div>
                            </div> <!-- /card -->
                            <div class="card">
                                <div class="card-header" id="faq4">
                                    <p class="mb-0 text-capitalize">
                                        <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-3">
                                            How To Integrate Social Mobile Web ?
                                        </a>
                                    </p>
                                </div>
                                <div id="faq-3" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin
                                    </div>
                                </div>
                            </div> <!-- /card -->
                            <div class="card">
                                <div class="card-header" id="faq4">
                                    <p class="mb-0 text-capitalize">
                                        <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-4">
                                            Mobile Emails Increase Conversion ?
                                        </a>
                                    </p>
                                </div>
                                <div id="faq-4" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin
                                    </div>
                                </div>
                            </div> <!-- /card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-team-wrapper section-padding">
    <div class="container">
        <div class="row align-items-center mb-40">
            <div class="col-12 col-md-7 text-center text-md-left">
                <div class="section-title">
                    <p>Exclusive Members</p>
                    <h1>Meet Our Experience Team Members</h1>
                </div>
            </div>
            <div class="col-12 col-md-5 mt-4 mt-md-0 text-center text-md-right">
                <a href="team.html" class="theme-btn off-white">View all Member <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="team-members-list row">
            <div class="col-12 col-md-6 col-xl-3">
                <div class="single-team-member">
                    <div class="member-img bg-cover bg-center" style="background-image: url('assets/img/team/team1.jpg')">
                    </div>
                    <div class="member-bio">
                        <h4>Wallace S. Camacho</h4>
                        <p>Business Manager</p>
                    </div>
                    <div class="social-profile">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="single-team-member active">
                    <div class="member-img bg-cover bg-center" style="background-image: url('assets/img/team/team2.jpg')">
                    </div>
                    <div class="member-bio">
                        <h4>Lawrence Pacheco</h4>
                        <p>Web Developer</p>
                    </div>
                    <div class="social-profile">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="single-team-member">
                    <div class="member-img bg-cover bg-center" style="background-image: url('assets/img/team/team3.jpg')">
                    </div>
                    <div class="member-bio">
                        <h4>Timothy L. Figueroa</h4>
                        <p>Business Manager</p>
                    </div>
                    <div class="social-profile">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="single-team-member">
                    <div class="member-img bg-cover bg-center" style="background-image: url('assets/img/team/team4.jpg')">
                    </div>
                    <div class="member-bio">
                        <h4>Michael L. Branch</h4>
                        <p>Product Manager</p>
                    </div>
                    <div class="social-profile">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="case-study-carousel-wrapper">
    <div class="container text-center">
        <div class="case-study-items owl-carousel">
            <div class="single-case-item">
                <div class="case-thumb bg-cover" style="background-image: url('assets/img/home2/cs1.jpg')"></div>
                <div class="contents">
                    <div class="content-visible">
                        <h3>Business Knowladge</h3>
                        <span>IT Consultation</span>
                    </div>
                    <div class="overlay-content">
                        <h3><a href="project-details.html">Business Knowladge</a></h3>
                        <p>Sed ut perspiciatis unde omnis natus erroraccusa ntium doloreque</p>
                        <a href="project-details.html" class="theme-btn">read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="single-case-item">
                <div class="case-thumb bg-cover" style="background-image: url('assets/img/home2/cs2.jpg')"></div>
                <div class="contents">
                    <div class="content-visible">
                        <h3>Market Leader Idea</h3>
                        <span>IT Consultation</span>
                    </div>
                    <div class="overlay-content">
                        <h3><a href="project-details.html">Market Leader Idea</a></h3>
                        <p>Sed ut perspiciatis unde omnis natus erroraccusa ntium doloreque</p>
                        <a href="project-details.html" class="theme-btn">read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="single-case-item">
                <div class="case-thumb bg-cover" style="background-image: url('assets/img/home2/cs3.jpg')"></div>
                <div class="contents">
                    <div class="content-visible">
                        <h3>Relationship Buildup</h3>
                        <span>IT Consultation</span>
                    </div>
                    <div class="overlay-content">
                        <h3><a href="project-details.html">Relationship Buildup</a></h3>
                        <p>Sed ut perspiciatis unde omnis natus erroraccusa ntium doloreque</p>
                        <a href="project-details.html" class="theme-btn">read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="single-case-item">
                <div class="case-thumb bg-cover" style="background-image: url('assets/img/home2/cs1.jpg')"></div>
                <div class="contents">
                    <div class="content-visible">
                        <h3>Business Knowladge</h3>
                        <span>IT Consultation</span>
                    </div>
                    <div class="overlay-content">
                        <h3><a href="project-details.html">Business Knowladge</a></h3>
                        <p>Sed ut perspiciatis unde omnis natus erroraccusa ntium doloreque</p>
                        <a href="project-details.html" class="theme-btn">read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="single-case-item">
                <div class="case-thumb bg-cover" style="background-image: url('assets/img/home2/cs3.jpg')"></div>
                <div class="contents">
                    <div class="content-visible">
                        <h3>Relationship Buildup</h3>
                        <span>IT Consultation</span>
                    </div>
                    <div class="overlay-content">
                        <h3><a href="project-details.html">Relationship Buildup</a></h3>
                        <p>Sed ut perspiciatis unde omnis natus erroraccusa ntium doloreque</p>
                        <a href="project-details.html" class="theme-btn">read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="consultations-wrapper section-padding bg-contain pb-0" style="background-image: url('assets/img/circle-bg-2.png')">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-5">
                <h1>Don’t Hesited To <br> Contact With Us, We’re Very Friendly </h1>
                <p class="mt-3">Sed ut perspiciatis unde omnis natus error sit voluptatem
                    accusa ntium doloremque laudantium totam rem aperiamea
                    queipsa quae abillo inventore veritatise.</p>

                <div class="call-consultation mt-30 mb-40">
                    <div class="icon">
                        <i class="fal fa-phone-plus"></i>
                    </div>
                    <div class="content">
                        <span>Phone Number</span>
                        <h5><a href="tel:+012 (345) 789 66">+012 (345) 789 66</a></h5>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl-6 offset-xl-1">
                <div class="consultations-form text-white">
                    <p>let’s talk with us</p>
                    <h1>Free Consultations</h1>
                    <form action="#">
                        <input type="text" placeholder="Full Name Here">
                        <input type="email" placeholder="Email Address">
                        <textarea placeholder="Write Message"></textarea>
                        <button class="theme-btn" type="submit">Get Free Quote <i class="fas fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial-wrapper pt-50 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="testimonial-carousel-2 owl-carousel owl-theme">
                    <div class="single-testimonial active">
                        <div class="icon">
                            <i class="flaticon-right-quote"></i>
                        </div>
                        <h2>On the other hand denounc with
                            ghteo indignation and dislike men
                            who so beguiled and demoralized
                            the charms of pleasure the momen
                            blinded by desire cannot foresee
                            the pain and trouble.</h2>
                        <div class="client-info">
                            <div class="client-img bg-cover" style="background-image: url('assets/img/home1/testi1.jpg')"></div>
                            <div class="client-bio">
                                <h3>Salman Ahmed</h3>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div>

                    <div class="single-testimonial">
                        <div class="icon">
                            <i class="flaticon-right-quote"></i>
                        </div>
                        <h2>On the other hand denounc with
                            ghteo indignation and dislike men
                            who so beguiled and demoralized
                            the charms of pleasure the momen
                            blinded by desire cannot foresee
                            the pain and trouble.</h2>
                        <div class="client-info">
                            <div class="client-img bg-cover" style="background-image: url('assets/img/home1/testi1.jpg')"></div>
                            <div class="client-bio">
                                <h3>Rahul M. McLean</h3>
                                <p>WordPress Expert</p>
                            </div>
                        </div>
                    </div>

                    <div class="single-testimonial">
                        <div class="icon">
                            <i class="flaticon-right-quote"></i>
                        </div>
                        <h2>On the other hand denounc with
                            ghteo indignation and dislike men
                            who so beguiled and demoralized
                            the charms of pleasure the momen
                            blinded by desire cannot foresee
                            the pain and trouble.</h2>
                        <div class="client-info">
                            <div class="client-img bg-cover" style="background-image: url('assets/img/home1/testi1.jpg')"></div>
                            <div class="client-bio">
                                <h3>Salman Ahmed</h3>
                                <p>Frontend Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="client-brand-logo-wrap">
    <div class="container">
        <div class="brand-carousel-active pt-60 pb-60 d-flex justify-content-between owl-carousel">
            <div class="single-client">
                <img src="assets/img/brand/1.png" alt="">
            </div>
            <div class="single-client">
                <img src="assets/img/brand/2.png" alt="">
            </div>
            <div class="single-client">
                <img src="assets/img/brand/3.png" alt="">
            </div>
            <div class="single-client">
                <img src="assets/img/brand/4.png" alt="">
            </div>
            <div class="single-client">
                <img src="assets/img/brand/b4.png" alt="">
            </div>
        </div>
    </div>
</div>

<section class="cta-banner">
    <div class="container-fluid bg-cover section-bg" style="background-image: url('assets/img/cta_bg1.png')">
        <div class="cta-content">
            <div class="row align-items-center">
                <div class="col-xl-7 text-white col-12 text-center text-xl-left">
                    <h1>Ready To Get Free Consulations For <br> Any Kind Of It Solutions ? </h1>
                </div>
                <div class="col-xl-5 col-12 text-center text-xl-right">
                    <a href="contact.html" class="theme-btn mt-4 mt-xl-0">Get a quote <i class="fas fa-arrow-right"></i></a>
                    <a href="services-details.html" class="ml-sm-3 mt-4 mt-xl-0 theme-btn minimal-btn">read more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>