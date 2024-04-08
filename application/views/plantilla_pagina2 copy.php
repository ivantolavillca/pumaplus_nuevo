<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo($dat->institucion_nombre)?></title>
	<link rel="icon" href="<?php echo  base_url()?>assets/template/logotvupea.png" type="image/png">
	<!-- core CSS -->
    <link href="<?php echo base_url()?>assets/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/template/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/template/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/template/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/template/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/template/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>assets/template/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>assets/template/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>assets/template/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>assets/template/images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/owl.carousel.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/slick.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/magnific-popup.css">
    <!-- Offcanvas CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/off-canvas.css">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/fonts/flaticon.css">
    <!-- flaticon2 css  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/fonts/fonts2/flaticon.css">
    <!-- rsmenu CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/rsmenu-main.css">
    <!-- rsmenu transitions CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/rsmenu-transitions.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/responsive.css">
    <link href="https://vjs.zencdn.net/7.5.4/video-js.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/7.5.4/video.js"></script>
    <link href="<?php echo base_url()?>assets/style.css" rel="stylesheet">
</head><!--/head-->

<body class="homepage" 

">

    <header id="header" >
        <div class="top-bar" style="background: #780206;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #061161, #780206);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #061161, #780206); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
            <div class="container" >
                <div class="row">
                    <div class="col-sm-5 col-xs-3">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  <?php echo($dat->ins_telefono)?></p></div>
                    </div>
                    <div class="col-sm-5 col-xs-7">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                               

                            </ul>
                           
                       </div>
                      
                    </div>
                    <div class="col-sm-2 col-xs-2">
                       <li class="active btn btn-sm"><a href="<?php echo base_url(Hasher::make(62))?>" >LOGIN</a></li>

                       </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner" style="background: #780206;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #061161, #780206);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #061161, #780206); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
            <div class="container" >
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/backend/dashboad/assets/images/logotv2.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url()?>">Home</a></li>
                        
                        
                       
                       
                       
                        <li><a href="<?php echo base_url(Hasher::make(68))?>">LIVE</a></li> 
                        <li><a href="<?php echo base_url(Hasher::make(217))?>">Programación</a></li>   
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Más sobre nosotros  <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                               
                                <li><a href="<?php echo base_url(Hasher::make(215))?>">Misión - Vision</a></li>
                               
                                
                                <li><a href="<?php echo base_url(Hasher::make(220))?>">Noticias</a></li>
                                <li><a href="<?php echo base_url(Hasher::make(219))?>">Sector en la U.</a></li>
                                <li><a href="<?php echo base_url(Hasher::make(218))?>">Destacado De Hoy</a></li>
                                
                                
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Periódico Diario <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <?php foreach( $datcat as $cat_per){ ?>
                                <li><a href="<?php echo base_url(Hasher::make(200,$cat_per->id))?>"><?php echo $cat_per->categoria_periodico ?></a></li>
                               <?php } ?>
                                
                                
                            </ul>
                        </li>
                        <li><a href="">dasdad</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

    

    

    

   <?php $this->load->view($contenido);?>

   

   

   

  

  

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2023 <a target="_blank" href="" title="S.I.E. - U.P.E.A.">SIE - UPEA</a> Dev Navi
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="<?php echo base_url()?>">Home</a></li>
                        <li><a href="https://sie.upea.bo/l">SIE</a></li>
                        <li><a href=""></a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo base_url()?>assets/template/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/template/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/template/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url()?>assets/template/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url()?>assets/template/js/main.js"></script>
    <script src="<?php echo base_url()?>assets/template/js/wow.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
    <!-- slick.min js -->
    <script src="<?php echo base_url() ?>assets/js/slick.min.js"></script>
    <!-- isotope.pkgd.min js -->
    <script src="<?php echo base_url() ?>assets/js/isotope.pkgd.min.js"></script>
    <!-- imagesloaded.pkgd.min js -->
    <script src="<?php echo base_url() ?>assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- wow js -->
    <script src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
    <!-- counter top js -->
    <script src="<?php echo base_url() ?>assets/js/waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.counterup.min.js"></script>
    <!-- magnific popup -->
    <script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
    <!-- rsmenu js -->
    <script src="<?php echo base_url() ?>assets/js/rsmenu-main.js"></script>
    <!-- plugins js -->
    <script src="<?php echo base_url() ?>assets/js/plugins.js"></script>
    <!-- main js -->
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
    <script>
  var player = videojs('#player1'); 
  </script>
    <script>
        $(document).ready(function() {
            $('.image-link').magnificPopup({
                type: 'image'
            });
        });
    </script>
</body>
</html>