<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="es">


<head>

	<meta charset="{charset}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Sistema de inscripciones UPEA suyay">
	<meta name="author" content="regis,santos,fernando,julian">

	<title>{pagetitle}</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="https://previews.123rf.com/images/annsunnyday/annsunnyday1205/annsunnyday120500006/13747191-casquillo-de-la-graduaci%C3%B3n-negro-birrete-y-el-diploma-de-pergamino-hecho-con-malla-de-degradado.jpg" /> 
	<!--Bootstrap Framework Version 4.0.0 Beta --> 
	<link href="{theme_url}css/bootstrap.min.css" type="text/css" rel="stylesheet">

	<!--Font Awesome Version 4.7.0 --> 
	<link href="{theme_url}css/font-awesome.min.css" type="text/css" rel="stylesheet">

	<!--EDUComp Stylesheets --> 
	<link href="{theme_url}css/vendors.min.css" type="text/css" rel="stylesheet">
	<link href="{theme_url}css/style.min.css" type="text/css" rel="stylesheet" id="style">
	<link href="{theme_url}css/components.min.css" type="text/css" rel="stylesheet" id="components">

	<link href="{theme_url}css/color-switch.css" type="text/css" rel="stylesheet" id="switch-css">

  <!--Slider Revolution Version 5.0.0 -->
    <link href="{theme_url}slider-revolution/css/settings.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{theme_url}slider-revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="{theme_url}slider-revolution/css/navigation.css">   
<!--  -->



	<style type="text/css" media="screen">
	

	div.animation {
		animation-delay: 1s;
		animation-duration: 4s;
		animation-name: pulse;
	}

	li.animation {
		animation-delay: 1s;
		animation-duration: 14s;
	}
	
	img {
		float: left;
		margin: 15px;
		-webkit-transition: margin 0.5s ease-out;
		-moz-transition: margin 0.5s ease-out;
		-ms-transition: margin 0.5s ease-out;
		transition: margin 0.5s ease-out;
	}
	.container img:hover {
		margin-top: 2px;
	}
</style>

<style type="text/css" media="screen">

.ch-grid {
	margin: 20px 0 0 0;
	padding: 0;
	list-style: none;
	display: block;
	text-align: center;
	width: 100%;
}

.ch-grid:after,
.ch-item:before {
	content: '';
	display: table;
}

.ch-grid:after {
	clear: both;
}

.ch-grid li {
	width: 220px;
	height: 220px;
	display: inline-block;
	margin: 20px;
}


</style>



<style type="text/css" media="screen">

body { 
	background: white;
}
.contenedor {
	margin: auto;
	display: table;
}

h2 { 
	position: relative; 
	float: left;
	color: #000;
}

h2 span {
	position:absolute;
	right:0;
	width:0;
	background: #fff;
	border-left: 1px solid #000;
	animation: escribir 5s steps(30) infinite alternate;
}

@keyframes escribir {
	from { width: 100% }
	to { width:0 }
}
</style>

<style type="text/css" media="screen">
.ch-item {
	width: 100%;
	height: 100%;
	border-radius: 50%;
	position: relative;
	box-shadow: 0 1px 2px rgba(0,0,0,0.1);
	cursor: default;
}

.ch-info-wrap, 
.ch-info{
	position: absolute;
	width: 180px;
	height: 180px;
	border-radius: 50%;
}

.ch-info-wrap {
	top: 20px;
	left: 20px;
	//background: #f9f9f9 url(../images/bg.jpg);
	box-shadow: 
	0 0 0 20px rgba(255,255,255,0.2), 
	inset 0 0 3px rgba(115,114, 23, 0.8);

}

.ch-info > div {
	display: block;
	position: absolute;
	width: 100%;
	height: 100%;
	border-radius: 50%;
	background-position: center center;
	
	-webkit-backface-visibility: hidden;
}
.ch-infs > div {
	display: block;
	position: absolute;
	width: 150%;
	height: 150%;
	border-radius: 50%;
	background-position: center center;
	
	-webkit-backface-visibility: hidden;
}

.ch-info .ch-info-front {
	-webkit-transition: all 0.6s ease-in-out;
	-moz-transition: all 0.6s ease-in-out;
	-o-transition: all 0.6s ease-in-out;
	-ms-transition: all 0.6s ease-in-out;
	transition: all 0.6s ease-in-out;
}

.ch-info .ch-info-back {
	opacity: 0;

	background: #ff9c00;
	pointer-events: none;
	
	-webkit-transform: scale(1.5);
	-moz-transform: scale(1.5);
	-o-transform: scale(1.5);
	-ms-transform: scale(1.5);
	transform: scale(1.5);
	
	-webkit-transition: all 0.4s ease-in-out 0.2s;
	-moz-transition: all 0.4s ease-in-out 0.2s;
	-o-transition: all 0.4s ease-in-out 0.2s;
	-ms-transition: all 0.4s ease-in-out 0.2s;
	transition: all 0.4s ease-in-out 0.2s;
}

.ch-img-1 { 
	background-image: url({theme_url}images/persona1.png);
}

.ch-img-2 { 
	background-image: url({theme_url}images/persona2.png);
}

.ch-img-3 { 
	background-image: url({theme_url}images/persona3.png);
}

.ch-img-4 { 
	background-image: url({theme_url}images/rgs.png);
}

/*.ch-img-5 { 
	background-image: url({theme_url}images/www.jpg);
	background-image: url({theme_url}images/rgs.png);
}*/

.ch-info h3 {
	color: #fff;
	text-transform: uppercase;
	letter-spacing: 2px;
	font-size: 18px;
	margin: 0 15px;
	padding: 40px 0 0 0;
	height: 80px;
	font-family: 'Open Sans', Arial, sans-serif;
	text-shadow: 
	0 0 1px #fff, 
	0 1px 2px rgba(0,0,0,0.3);
}

.ch-info p {
	color: #fff;
	padding: 10px 5px 0;
	font-style: italic;
	margin: 0 30px;
	font-size: 12px;
	border-top: 1px solid rgba(255,255,255,0.5);
}

.ch-info p a {
	display: block;
	color: #e7615e;
	font-style: normal;
	font-weight: 700;
	text-transform: uppercase;
	font-size: 9px;
	letter-spacing: 1px;
	padding-top: 4px;
	font-family: 'Open Sans', Arial, sans-serif;
}

.ch-info p a:hover {
	color: #fff;
}

.ch-item:hover .ch-info-front {
	-webkit-transform: scale(0);
	-moz-transform: scale(0);
	-o-transform: scale(0);
	-ms-transform: scale(0);
	transform: scale(0);
	
	opacity: 0;
} 

.ch-item:hover .ch-info-back {
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-o-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
	
	opacity: 1;
	pointer-events: auto;
}

</style>




</head>

<body>

	<div class="loader-backdrop">           <!-- Loader -->
		<div class="loader">
			<div class="ball-1"></div>
			<div class="ball-2"></div>
		</div>
	</div>





	<header class="header-1">           
		<div class="topbar-wrapper">
			<div class="container"> 
				
				<div class="topbar">
					<div>
						Interno: 1107           
					</div>
					<div>
						<ul class="topbar-widgets">         
							<li>
								<span data-toggle="modal" data-target="#cart-modal">
									<!-- <i class="fa fa-shopping-cart"></i> -->
								</span>
							</li>
							<li>
								<span data-toggle="modal" data-target="#lang-modal">
									<i class="fa fa-user"></i>
								</span>
							</li>
							<li>
								<span data-toggle="modal" data-target="#subscribeModal">
									Login
								</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>


    <!-- Slider Revolution -->
    <div class="rev_slider_wrapper fullwidthbanner-container">
        <div id="slider" class="rev_slider fullwidthbanner" data-version="5.0.7">    
            <ul>	
                <!-- Slide 1 -->
                <li data-index="rs-129" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default"    data-masterspeed="default" data-thumb="" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500"    data-fsslotamount="7" data-saveperformance="off" data-title="A STUDY ON HAPPINESS" data-description="Nurturing the most awesome minds.">

                    <!-- MAIN IMAGE -->
                    <img src="{theme_url}images/4.png" data-lazyload="{theme_url}images/4.png" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                    <!-- Small Text -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-primary" id="slide-1-small-text" data-x="['right','right','right','right']" data-hoffset="['50','50','50','30']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-70']" data-width="none" data-fontsize="['26', '26', '22', '16']" data-height="28" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap; text-shadow: 1px 1px 1px #000; font-weight:bold; font-family: 'Noto Serif', serif;">
                        U.P.E.A. 
                    </div>                            

                    <!-- Main Text -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-0" id="slide-1-main-text" data-x="['right','right','right','right']" data-hoffset="['50','50','50','30']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['46','46','46','32']" data-lineheight="['55','55','55','35']" data-color="['#fff']" data-width="['600','600','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; min-width: 600px; max-width: 600px; white-space: normal; text-shadow:0px 2px 2px #000; text-transform:capitalize; font-weight:600; text-align:right; font-family: 'PT Sans Narrow', sans-serif; font-size: 12PX;">
                       UNIVERSIDAD PÚBLICA DE EL ALTO 
                    </div>

                  
                </li>

                <!-- Slide 2 -->
                <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="A STUDY ON HAPPINESS" data-description="Nurturing the most awesome minds.">

                    <!-- MAIN IMAGE -->
                    <img src="{theme_url}images/4.jpg" data-lazyload="{theme_url}images/4.jpg" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                    <!-- Small Text -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-primary" id="layer-2-small-text" data-x="['right','right','right','right']" data-hoffset="['50','50','50','30']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-70']" data-width="['600','600','600','420']" data-fontsize="['22', '22', '22', '16']" data-height="28" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 10; white-space: nowrap; text-shadow: 1px 1px 1px #000; font-weight:bold; font-family: 'Noto Serif', serif;">
                        CARRERA 
                    </div>                            

                    <!-- Main Text -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-0" id="slide-2-main-text" data-x="['right','right','right','right']" data-hoffset="['50','50','50','30']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['46','46','46','32']" data-lineheight="['55','55','55','35']" data-color="['#fff']" data-width="['600','600','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 11; min-width: 600px; max-width: 600px; white-space: normal; text-shadow:0px 2px 2px #000; text-transform:capitalize; font-weight:600; text-align:left; font-family: 'PT Sans Narrow', sans-serif;">
                        {carrera}
                    </div>

                </li>
            </ul>
        </div>
    </div>
    <!-- Revolution Slider Ends -->

   

	<div class="bg-primary pt-60 pb-60">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<h2> {content} </h2>	
				</div>
			</div>
		</div>
	</div>


	<!-- Subscribe Modal -->
	<div class="modal fade animated flipInY" id="subscribeModal" data-open-onload="true" data-open-delay="2500" tabindex="-1" role="dialog" style="opacity: 1 !important;">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<button type="button" class="close"  data-dismiss="modal">×</button>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<!--div class="col-lg-6 " >
								<img src="{theme_url}images/ccd.png" class="img-fluid" alt="">
							</div-->
							<div class="col-lg-12 pt-40 pb-40">
								<h4 class="heading">Ingresar al sistema</h4>

								<form id="login-form" action="<?= site_url(Hasher::make(1)); ?>" method="post">
									<div class="form-group">
										<label>Usuario</label>
										<input id="login-id" type="text" class="form-control" name="identity" required>
									</div>
									<div class="form-group">
										<label>Contraseña</label>
										<input id="login-pass" type="password" class="form-control" name="password" required>
									</div>
									<!-- <button type="button" data-dismiss="modal" class="btn btn-primary" style="border-radius: 15px;">Cancelar</button> -->
									<button type="submit" name="submit" class="btn btn-primary" style="border-radius: 15px;"><i class="fa fa-user"></i> Acceder</button>
									<div class="block block-error"><?=$this->session->flashdata('message');?></div>
								</form>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<script>
		var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

		var interval = setInterval(function(){ 
			$(".img-animated").addClass('animated bounce').one(animationEnd, function() {
				$(this).removeClass ('animated bounce');
			});
		}, 1000);

	</script>
	


<!-- jQuery Version 3.2.1 (Required) -->
<script src="{theme_url}js/jquery.min.js" type="text/javascript"></script>

<!-- Popper JS (Required) -->
<script src="{theme_url}js/popper.min.js" type="text/javascript"></script>

<!--Bootstrap Framework Version 4.0.0 (Required) -->
<script src="{theme_url}js/bootstrap.min.js" type="text/javascript"></script>

<!-- Countdown Timer Version 2.1.0-->
<!-- <script src="{theme_url}js/jquery.countdown.min.js" type="text/javascript"></script> -->

<!-- Owl Carousel Version 2.0.0 -->
<script src="{theme_url}js/owl.carousel.min.js" type="text/javascript"></script>

<!-- CountTo -->
<script src="{theme_url}js/jquery.countTo.js" type="text/javascript"></script>

<!-- Appear -->
<script src="{theme_url}js/jquery.appear.js" type="text/javascript"></script>

<!--Educomp Custom Script-->
<script src="{theme_url}js/main.js" type=text/javascript></script>

<script src="{theme_url}js/color-switch.js" type="text/javascript" id="switch-js"></script>


    <!--Slider Revolution version 5.0-->
    <script type="text/javascript" src="{theme_url}slider-revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="{theme_url}slider-revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Include only when working on Local system. Not required on server -->
    <script type="text/javascript" src="{theme_url}slider-revolution/js/extensions/revolution.extension.parallax.min.js"></script>    
    <script type="text/javascript" src="{theme_url}slider-revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="{theme_url}slider-revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="{theme_url}slider-revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="{theme_url}slider-revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>


</body>


</html>

