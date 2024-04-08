<!DOCTYPE html>
<html lang="zxx">
   <head>
      <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta charset="utf-8">
	  <meta http-equiv="x-ua-compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="description" content="UPEA - TELEVISION">
	  <meta name="keyword" content="">
	  <meta name="author"  content="Derechos de Autor Univ. Ivan Tola Villca"/>
      <!-- Page Title -->
      <title>{pagetitle}</title>
      <!-- Main CSS -->			
      <link href="<?php echo base_url()?>assets/backend/dashboad/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
      <link href="<?php echo base_url()?>assets/backend/dashboad/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
      <link href="<?php echo base_url()?>assets/backend/dashboad/assets/plugins/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
      <link href="<?php echo base_url()?>assets/backend/dashboad/assets/plugins/ionicons/css/ionicons.css" rel="stylesheet">
     
      
      
      <link href="<?php echo base_url()?>assets/backend/dashboad/assets/css/app.min.css" rel="stylesheet"/>
      <link href="<?php echo base_url()?>assets/backend/dashboad/assets/css/style.css" rel="stylesheet"/>
      <link rel="stylesheet" href="<?php echo base_url()?>assets/alert/sweetalert2/dist/sweetalert2.min.css">
<!-- include alertify.css -->

      <!-- Favicon -->	
      <link rel="icon" href="<?php echo base_url()?>assets/images/navilogo2.jpg" type="image/png">
      
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap4.min.css">


      <script src="<?php echo base_url(); ?>assets/otros/js/jquery-3.1.1.min.js"></script>
   </head>
   <body>
      <!--================================-->
      <!-- Page Container Start -->
      <!--================================-->
      <div class="page-container">
         <!--================================-->
         <!-- Page Sidebar Start -->
         <!--================================-->
         <div class="page-sidebar">
            <a class="logo-box" href="<?php echo site_url(Hasher::make(20)) ?>">
            <span><img src="<?php echo base_url()?>assets/backend/dashboad/assets/images/logotv2.png" alt=""></span>
            <i class="ion-aperture" id="fixed-sidebar-toggle-button"></i>
            <i class="ion-ios-close-empty" id="sidebar-toggle-button-close"></i>
            </a>
            <div class="page-sidebar-inner">
               <div class="page-sidebar-menu">
                  <ul class="accordion-menu">
                     <li class="open active">
                        <a href="<?php echo site_url(Hasher::make(20)) ?>"><i class="fa fa-tachometer"></i>
                        <span>Dashboard</span><i class="accordion-icon fa "></i></a>
                        
                     </li>
                   
                     
                    
                     
                     
                     {nav_side}
                    
                    
                    
                    
                    
                     
                   
                    
                     
                    
                    
                                      
                     
                     
                     
                  </ul>
               </div>
               <!--================================-->
               <!-- Sidebar Information Summary -->
               <!--================================-->		
              
            </div>
            <!--================================-->
            <!-- Sidebar Footer Start -->
            <!--================================-->
            <div class="sidebar-footer">									
               <a class="pull-left" href="page-profile.html" data-toggle="tooltip" data-placement="top" data-original-title="Profile">
               <i class="icon-user"></i></a>									
               <a class="pull-left " href="https://api.whatsapp.com/send?phone=59177538487&amp;text=Hola! necesito ayuda tecnica sobre la pagina de UPEA -  TELEVISION" data-toggle="tooltip" data-placement="top" data-original-title="Ayuda Técnica">
               <i class="icon-envelope"></i></a>
              
               <i class="icon-lock"></i></a>
               <a class="pull-left" href="<?php echo base_url(Hasher::make(3))?>" data-toggle="tooltip" data-placement="top" data-original-title="Cerrar Sesión">
               <i class="icon-power"></i></a>
            </div>
            <!--/ Sidebar Footer End -->
         </div>
         <!--/ Page Sidebar End -->
         <!--================================-->
         <!-- Page Content Start -->
         <!--================================-->
         <div class="page-content">
            <!--================================-->
            <!-- Page Header Start -->
            <!--================================-->
            <div class="page-header">
               <div class="search-form">
                  <form action="#" method="GET">
                     <div class="input-group">
                        <input class="form-control search-input" name="search" placeholder="Type something..." type="text"/>
                        <span class="input-group-btn"><span id="close-search"><i class="ion-ios-close-empty"></i></span></span>
                     </div>
                  </form>
               </div>
               <nav class="navbar navbar-default">
                  <!--================================-->
                  <!-- Brand and Logo Start -->
                  <!--================================-->
                  <div class="navbar-header">
                     <div class="navbar-brand">
                        <ul class="list-inline">
                           <!-- Mobile Toggle and Logo -->
                           <li class="list-inline-item"><a class="hidden-md hidden-lg" href="javascript:void(0)" id="sidebar-toggle-button"><i class="ion-navicon tx-20"></i></a></li>
                           <!-- PC Toggle and Logo -->
                           <li class="list-inline-item"><a class="text-muted hidden-xs hidden-sm" href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="ion-navicon tx-20"></i></a></li>
                           
                        </ul>
                     </div>
                  </div>
                  <!--/ Brand and Logo End -->
                  <!--================================-->
                  <!-- Header Right Start -->
                  <!--================================-->
                  <div class="header-right pull-right">
                     <ul class="list-inline justify-content-end">
                        <!--================================-->
                        <!-- Languages Dropdown Start -->
                        <!--================================-->
                        
                        <!--/ Languages Dropdown End -->
                        <!--================================-->
                        <!-- Notifications Dropdown Start -->
                        <!--================================-->
                       
                        <!--/ Notifications Dropdown End -->
                        <!--================================-->
                        <!-- Messages Dropdown Start -->
                        <!--================================-->
                      
                        <!--/ Messages Dropdown End -->
                        <!--================================-->
                        <!-- Profile Dropdown Start -->
                        <!--================================-->
                        <li class="list-inline-item dropdown">
                           <a class="text-muted" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span class="select-profile">{user_fullname} </span>
                           <img src="<?php echo base_url()?>assets/backend/dashboad/assets/images/avatar/avatar.png" class="mg-b-10 img-fluid wd-30" alt="">
                           </a>
                           <ul class="dropdown-menu profile-dropdown shadow-2">
                              <li>
                                 <a href="page-profile.html"><i class="icon-user"></i><span>Mi Perfil</span></a>
                              </li>
                            
                              <li>
                                 <a href="<?php echo base_url(Hasher::make(3))?>"><i class="icon-logout"></i><span>Cerrar Sesión</span></a>
                              </li>
                           </ul>
                        </li>
                        <!-- Profile Dropdown End -->
                     </ul>
                  </div>
                  <!--/ Header Right End -->
               </nav>
            </div>
            <!--/ Page Header End -->
            <!--================================-->
            <!-- Page Inner Start -->
            <!--================================-->
            <div class="page-inner">
               <!--================================-->
               <!-- Main Wrapper Start -->
               <!--================================-->
               <div id="main-wrapper" class="background: #667db6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
                
               {content}
                  <!--/ Social Activity 2 End -->
               </div>
               <!--/ Main Wrapper End -->
            </div>
            <!--/ Page Inner End -->
            <!--================================-->
            <!-- Page Footer Start -->	
            <!--================================-->
            
            <!-- Page Footer End -->	
         </div>
         <!-- / End Page Content -->
      </div>
      <!--/ Page Container -->
      <!--================================-->
      <!-- Color switcher Start -->
      <!--================================-->	
      
      <!--/ Color switcher  End -->
      <!--================================-->
      <!-- Scroll To Top Start-->
      <!--================================-->	
      <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      <!--/ Scroll To Top End --> 
      <!--================================-->
      <!-- Footer Script -->	
      <!--================================-->
     
      <script src="<?php echo base_url();?>assets/backend/dashboad/assets/plugins/jquery-ui/jquery-ui.js"></script>
      <script src="<?php echo base_url();?>assets/backend/dashboad/assets/plugins/popper/popper.js"></script>
      <script src="<?php echo base_url();?>assets/backend/dashboad/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url();?>assets/backend/dashboad/assets/plugins/pace/pace.min.js"></script>
      <script src="<?php echo base_url();?>assets/backend/dashboad/assets/plugins/toastr/toastr.min.js"></script>
      
      <script src="<?php echo base_url();?>assets/backend/dashboad/assets/plugins/morris/raphael.min.js"></script>
      <script src="<?php echo base_url();?>assets/backend/dashboad/assets/js/jquery.slimscroll.min.js"></script>
      <script src="<?php echo base_url();?>assets/backend/dashboad/assets/js/highlight.min.js"></script>
      <script src="<?php echo base_url();?>assets/backend/dashboad/assets/js/adminify.js"></script>
      <script src="<?php echo base_url();?>assets/backend/dashboad/assets/js/custom.js"></script>
      <script src="<?php echo base_url();?>assets/alertas/alertify.js"></script>
      <script src="<?php echo base_url();?>assets/alertas/alertify.min.js"></script>
     
      <script src="<?php echo base_url(); ?>assets/alert/sweetalert2/dist/sweetalert2.all.min.js"></script>
      
     
      <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap4.min.js"></script>
      <script>
         // Toster Notification
         $(document).ready(function() {
         	setTimeout(function() {
         		toastr.options = {
         			positionClass: 'toast-top-right',
         			closeButton: true,
         			progressBar: true,
         			showMethod: 'slideDown',
         			timeOut: 5000
         		};
         		toastr.info('', 'Bienvenido {user_fullname} ');
         
         	}, 300);
         
         });		 
         
         // MORRIS AREA CHART 2
         var chart = Morris.Area({
         element: 'area2',
         data: [{
         period: 'January 16',
         dl: 77,
         up: 125
         }, {
         period: 'February 16',
         dl: 227,
         up: 88
         }, {
         period: 'March 16',
         dl: 215,
         up: 60
         }, {
         period: 'April 16',
         dl: 239,
         up: 57
         }, {
         period: 'May 16',
         dl: 146,
         up: 75
         }, {
         period: 'June 16',
         dl: 197,
         up: 57
         }, {
         period: 'July 16',
         dl: 105,
         up: 70
         }, {
         period: 'August 16',
         dl: 115,
         up: 106
         }, {
         period: 'September 16',
         dl: 239,
         up: 187
         }, {
         period: 'October 16',
         dl: 97,
         up: 57
         }, {
         period: 'November 16',
         dl: 189,
         up: 70
         }, {
         period: 'December 16',
         dl: 65,
         up: 30
         }, {
         period: 'January 17',
         dl: 35,
         up: 90
         }, {
         period: 'February 17',
         dl: 127,
         up: 58
         }, {
         period: 'March 17',
         dl: 115,
         up: 46
         }, {
         period: 'April 17',
         dl: 239,
         up: 57
         }, {
         period: 'May 17',
         dl: 46,
         up: 75
         }, {
         period: 'June 17',
         dl: 97,
         up: 57
         }, {
         period: 'July 17',
         dl: 105,
         up: 70
         }, {
         period: 'August 17',
         dl: 115,
         up: 106
         }, {
         period: 'September 17',
         dl: 239,
         up: 187
         }, {
         period: 'October 17',
         dl: 97,
         up: 57
         }, {
         period: 'November 17',
         dl: 189,
         up: 70
         }, {
         period: 'January 17',
         dl: 35,
         up: 90
         }, {
         period: 'February 17',
         dl: 127,
         up: 58
         }, {
         period: 'March 17',
         dl: 115,
         up: 46
         }, {
         period: 'April 17',
         dl: 239,
         up: 57
         }, {
         period: 'May 17',
         dl: 46,
         up: 75
         }, {
         period: 'June 17',
         dl: 97,
         up: 57
         }, {
         period: 'July 17',
         dl: 105,
         up: 70
         }, {
         period: 'August 17',
         dl: 115,
         up: 106
         }, {
         period: 'September 17',
         dl: 239,
         up: 187
         }, {
         period: 'October 17',
         dl: 97,
         up: 57
         }, {
         period: 'November 17',
         dl: 189,
         up: 70
         }, {
         period: 'December 17',
         dl: 65,
         up: 30
         }, {
         period: 'January 18',
         dl: 35,
         up: 90
         }, {
         period: 'February 18',
         dl: 127,
         up: 58
         }, {
         period: 'March 18',
         dl: 115,
         up: 46
         }, {
         period: 'April 18',
         dl: 239,
         up: 57
         }, {
         period: 'May 18',
         dl: 46,
         up: 75
         }, {
         period: 'June 18',
         dl: 97,
         up: 57
         }, {
         period: 'July 18',
         dl: 105,
         up: 70
         }, {
         period: 'August 18',
         dl: 115,
         up: 106
         }, {
         period: 'September 18',
         dl: 239,
         up: 187
         }, {
         period: 'October 18',
         dl: 97,
         up: 57
         }, {
         period: 'November 18',
         dl: 189,
         up: 70
         }, {
         period: 'December 18',
         dl: 65,
         up: 30
         }, {
         period: 'January 19',
         dl: 35,
         up: 90
         }],
         gridEnabled: true,
         gridLineColor: 'rgba(0,0,0,.1)',
         gridTextColor: '#10171e',
         gridTextSize: '11px',
         behaveLikeLine: true,
         smooth: true,
         xkey: 'period',
         ykeys: ['dl', 'up'],
         labels: ['Visitor', 'Pageview'],
         lineColors: ['#bfbfcf', '#17a2b8'],
         pointSize: 0,
         pointStrokeColors: ['#17a2b8'],
         lineWidth: 0,
         resize: true,
         hideHover: 'auto',
         fillOpacity: 0.9,
         parseTime: false
         });
         
         chart.options.labels.forEach(function (label, i) {
         var legendItem = $('<div class=\'morris-legend-items\'></div>').text(label);
         $('<span></span>').css('background-color', chart.options.lineColors[i]).prependTo(legendItem);
         $('#area-legend').append(legendItem)
         })
         
      </script>
   </body>
</html>