<!DOCTYPE html>
<html lang="es">
<!-- BEGIN HEAD -->

<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Nov 2018 15:43:05 GMT -->

<head>
   <!-- <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1" name="viewport" />
   <meta name="description" content="Responsive Admin Template" />
   <meta name="author" content="SmartUniversity" />
   <title>ADMIN UPEA - TELEVISIÓN</title>
   
   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
 
   <link href="<?php echo base_url() ?>assets/admin/source/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url() ?>assets/admin/source/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
   
   <link href="<?php echo base_url() ?>assets/admin/source/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url() ?>assets/admin/source/assets/plugins/summernote/summernote.css" rel="stylesheet">
   
   <link href="<?php echo base_url() ?>assets/admin/source/assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
   
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/source/assets/plugins/material/material.min.css">
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/source/assets/css/material_style.css">
  
   <link href="<?php echo base_url() ?>assets/admin/source/assets/css/pages/animate_page.css" rel="stylesheet">
   
   <link href="<?php echo base_url() ?>assets/admin/source/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url() ?>assets/admin/source/assets/css/style.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url() ?>assets/admin/source/assets/css/responsive.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url() ?>assets/admin/source/assets/css/theme-color.css" rel="stylesheet" type="text/css" />
   <

   <link rel="icon" href="<?php echo base_url() ?>assets/admin/source/assets/img/navi.png" type="image/png">
   <script src="<?php echo base_url(); ?>assets/otros/js/jquery-3.1.1.min.js"></script>
  
   <link href="<?php echo base_url() ?>assets/admin/source/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/> -->


   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1" name="viewport" />
   <meta name="description" content="Responsive Admin Template" />
   <meta name="author" content="SmartUniversity" />
   <title>ADMIN PUMAPLUS</title>
   <!-- google font -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
   <!-- icons -->
   <link href="<?php echo base_url() ?>assets/admin/source/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url() ?>assets/admin/source/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
   <!-- bootstrap -->
   <link href="<?php echo base_url() ?>assets/admin/source/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <!-- data tables -->
   <link href="<?php echo base_url() ?>assets/admin/source/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
   <!-- Material Design Lite CSS -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/source/assets/plugins/material/material.min.css">
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/source/assets/css/material_style.css">
   <!-- animation -->
   <link href="<?php echo base_url() ?>assets/admin/source/assets/css/pages/animate_page.css" rel="stylesheet">
   <!-- Template Styles -->
   <link href="<?php echo base_url() ?>assets/admin/source/assets/css/style.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url() ?>assets/admin/source/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url() ?>assets/admin/source/assets/css/responsive.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url() ?>assets/admin/source/assets/css/theme-color.css" rel="stylesheet" type="text/css" />
   <!-- favicon -->


   <script src="<?php echo base_url(); ?>assets/otros/js/jquery-3.1.1.min.js"></script>
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/alert/sweetalert2/dist/sweetalert2.min.css">
   <link rel="icon" href="<?php echo base_url() ?>assets/admin/source/assets/img/navi.png" type="image/png">
   <style>
      .color-thead {
         background: #833ab4;
         background: -webkit-linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
         background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
      }
   </style>
</head>


<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-red red-sidebar-color logo-red">
   <div class="page-wrapper">
      <!-- start header -->
      <div class="page-header navbar navbar-fixed-top">
         <div class="page-header-inner ">
            <!-- logo start -->
            <div class="page-logo">
               <a href="<?php echo site_url(Hasher::make(20)) ?>">
                  <img alt="" src="<?php echo base_url() ?>assets/admin/source/assets/img/navi.png">
                  <span class="logo-default"> PUMAPLUS</span> </a>
            </div>
            <!-- logo end -->
            <ul class="nav navbar-nav navbar-left in">
               <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
            </ul>


            <!-- start mobile menu -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
               <span></span>
            </a>
            <!-- end mobile menu -->
            <!-- start header menu -->
            <div class="top-menu">
               <ul class="nav navbar-nav pull-right">

                  <li class="dropdown dropdown-user">
                     <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle " src="<?php echo base_url() ?>assets/admin/source/assets/img/logoupea_admin.png" />
                        <span class="username username-hide-on-mobile"> {user_fullname} </span>
                        <i class="fa fa-angle-down"></i>
                     </a>
                     <ul class="dropdown-menu dropdown-menu-default animated jello">
                        <li>
                           <a href="user_profile.html">
                              <i class="icon-user"></i> Mi Perfil </a>
                        </li>

                        <li>
                           <a href="<?php echo base_url(Hasher::make(3)) ?>">
                              <i class="icon-logout"></i> Salir</a>
                        </li>
                     </ul>
                  </li>
                  <!-- end manage user dropdown -->

               </ul>
            </div>
         </div>
      </div>
      <!-- end header -->
      <!-- start page container -->
      <div class="page-container">
         <!-- start sidebar menu -->
         <div class="sidebar-container">
            <div class="sidemenu-container navbar-collapse collapse fixed-menu">
               <div id="remove-scroll">
                  <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                     <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler">
                           <span></span>
                        </div>
                     </li>
                     <li class="sidebar-user-panel">
                        <div class="user-panel">
                           <div class="row">
                              <div class="sidebar-userpic">
                                 <img src="<?php echo base_url() ?>assets/admin/source/assets/img/logoupea_admin.png" class="img-responsive" alt="">
                              </div>
                           </div>
                           <div class="profile-usertitle">
                              <div class="sidebar-userpic-name">{user_fullname} </div>
                              <div class="profile-usertitle-job"> {comp} </div>
                           </div>
                           <div class="sidebar-userpic-btn">
                              <a class="tooltips" href="user_profile.html" data-placement="top" data-original-title="Perfil de Usuario">
                                 <i class="material-icons">person_outline</i>
                              </a>
                              <a class="tooltips" href="https://api.whatsapp.com/send?phone=59177538487&amp;text=Hola! necesito ayuda tecnica sobre la pagina de UPEA -  TELEVISION" data-placement="top" data-original-title="Ayuda Técnica">
                                 <i class="material-icons">mail_outline</i>
                              </a>

                              <a class="tooltips" href="<?php echo base_url(Hasher::make(3)) ?>" data-placement="top" data-original-title="Salir">
                                 <i class="material-icons">input</i>
                              </a>
                           </div>
                        </div>
                     </li>
                     <li class="menu-heading">
                        <span>MENUS</span>
                     </li>
                     <li class="nav-item start active">
                        <a href="<?php echo site_url(Hasher::make(20)) ?>" class="nav-link nav-toggle">
                           <i class="material-icons">dashboard</i>
                           <span class="title">INICIO</span>


                        </a>

                     </li>




                     {nav_side}










                  </ul>
               </div>
            </div>
         </div>
         <!-- end sidebar menu -->
         <!-- start page content -->
         <div class="page-content-wrapper">
            <div class="page-content">

               {content}

            </div>
         </div>
         <!-- end page content -->
         <!-- start chat sidebar -->

         <!-- end chat sidebar -->
      </div>
      <!-- end page container -->
      <!-- start footer -->
      <div class="page-footer">
         <div class="page-footer-inner"> 2023 &copy; Admin By
            <a href="" target="_top" class="makerCss"> Dev. Ivan Tola Villca</a>
         </div>
         <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
         </div>
      </div>
      <!-- end footer -->
   </div>
   <!-- start js include path -->

   <script src="<?php echo base_url() ?>assets/admin/source/assets/plugins/jquery/jquery.min.js"></script>
   <script src="<?php echo base_url() ?>assets/admin/source/assets/plugins/popper/popper.min.js"></script>
   <script src="<?php echo base_url() ?>assets/admin/source/assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
   <script src="<?php echo base_url() ?>assets/admin/source/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
   <!-- bootstrap -->
   <script src="<?php echo base_url() ?>assets/admin/source/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
   <!-- data tables -->
   <script src="<?php echo base_url() ?>assets/admin/source/assets/plugins/datatables/jquery.dataTables.min.js"></script>
   <script src="<?php echo base_url() ?>assets/admin/source/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
   <script src="<?php echo base_url() ?>assets/admin/source/assets/js/pages/table/table_data.js"></script>
   <!-- Common js-->
   <script src="<?php echo base_url() ?>assets/admin/source/assets/js/app.js"></script>
   <script src="<?php echo base_url() ?>assets/admin/source/assets/js/layout.js"></script>
   <script src="<?php echo base_url() ?>assets/admin/source/assets/js/theme-color.js"></script>
   <!-- Material -->
   <script src="<?php echo base_url() ?>assets/admin/source/assets/plugins/material/material.min.js"></script>
   <!-- animation -->
   <script src="<?php echo base_url(); ?>assets/alert/sweetalert2/dist/sweetalert2.all.min.js"></script>
   <script src="<?php echo base_url() ?>assets/admin/source/assets/js/pages/ui/animations.js"></script>
</body>

<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Nov 2018 15:44:21 GMT -->

</html>