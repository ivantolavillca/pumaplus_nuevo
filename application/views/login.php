<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login UPEA -TELEVISIÓN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/login/css/main.css">
</head>
<body class="cover" style="background-image: url(<?php echo base_url()?>assets/images/login.jpg);">
	<form id="login-form" action="<?= site_url(Hasher::make(1)); ?>" method="post"  class=" logInForm">
		<p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
		<p class="text-center text-muted text-uppercase">Inicia sesión con tu cuenta</p>
		<div class="form-group label-floating">
		  <label class="control-label" for="UserEmail">Usuario:</label>
		  <input class="form-control" id="login-id" type="text" name="identity" required>
		  <p class="help-block">Ingresa tú Usuario</p>
		</div>
		<div class="form-group label-floating">
		  <label class="control-label" for="UserPass">Contraseña:</label>
		  <input class="form-control"  id="login-pass" type="password" name="password" required>
		  <p class="help-block">Ingresa tú contraseña</p>
		</div>
		<div class="form-group text-center">
			<input type="submit"  name="submit"  class="btn btn-raised btn-danger">
		</div>
		<div class="block block-error"><?=$this->session->flashdata('message');?></div>
	</form>
	<!--====== Scripts -->
	<script src="<?php echo base_url()?>assets/login/js/jquery-3.1.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/login/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/login/js/material.min.js"></script>
	<script src="<?php echo base_url()?>assets/login/js/ripples.min.js"></script>
	<script src="<?php echo base_url()?>assets/login/js/sweetalert2.min.js"></script>
	<script src="<?php echo base_url()?>assets/login/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?php echo base_url()?>assets/login/js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>