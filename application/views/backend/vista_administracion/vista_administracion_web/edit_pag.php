<div class="page-bar">
	<div class="page-title-breadcrumb">
		<div class=" pull-left">
			<div class="page-title">Administración Sección Principal de Página Principal</div>
		</div>
		<ol class="breadcrumb page-breadcrumb pull-right">
			<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo site_url(Hasher::make(20)) ?>">Inicio</a>&nbsp;<i class="fa fa-angle-right"></i>

			<li class="active">Administración Página Principal</li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card card-topline-red">
			<div class="card-head">
				<header>ADMINISTRACION DATOS DE LA PÁGINA</header>
				<div class="tools">
					<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
					<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
					<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
				</div>
			</div>
			<div class="card-body ">
				<div class="row p-b-20">
					<div class="col-md-6 col-sm-6 col-6">
						<div class="btn-group">
							<a href="<?php echo base_url(Hasher::make(197)) ?>" class="btn btn-info btn-raised">EDITAR INFORMACION PÁGINA</a>

							<a href="" class="btn btn-success btn-raised"> EDITAR IMAGENES SLIDER</a>

						</div>
						<div class="btn-group">

							<a href="<?php echo site_url(Hasher::make(195)) ?>" class="btn btn-success btn-danger"> SECCIÓN AUTORIDADES </a>
							<a href="<?php echo site_url(Hasher::make(188)) ?>" class="btn btn-success btn-warning"> SECCIÓN PRESENTADORES</a>
						</div>
					</div>

				</div>
				<table class="table table-striped table-bordered table-hover table-checkable order-column full-width" id="adm_web">
					<thead class="color-thead">
						<tr>

							<td>#</td>
							<td>NOMBRE DE LA INSTITUCION</td>
							<td>TITULO Y SUBTITULO SLIDER 1</td>
							<td>MISIÓN</td>
							<td>VISIÓN</td>
							<td>HISTORIA</td>
							<td>URL INSTAGRAM</td>
							<td>URL TIKTOK</td>
							<td>URL FACEBOOK</td>

							<td>URL YOUTUBE</td>
							<td>URL TWITTER</td>
							<td>TELEFONO</td>

						</tr>
					</thead>
					<tbody>



						<tr>
							<td>1</td>
							<td><?php echo $datos_institucion->institucion_nombre ?></td>
							<td>

								<?php echo $datos_institucion->ins_titulo ?> <br> <?php echo $datos_institucion->ins_subtitulo ?>
							</td>
							<td>
								<?php echo $datos_institucion->ins_mision ?>


							</td>

							<td> <?php echo $datos_institucion->ins_vision ?></td>
							<td><?php echo $datos_institucion->ins_historia ?></td>
							<td> <?php echo $datos_institucion->ins_instagram ?> </td>
							<td> <?php echo $datos_institucion->ins_tiktok ?> </td>
							<td> <?php echo $datos_institucion->ins_url_facebook ?> </td>
							<td> <?php echo $datos_institucion->ins_youtube ?> </td>
							<td> <?php echo $datos_institucion->ins_twitter ?> </td>
							<td> <?php echo $datos_institucion->ins_telefono ?> </td>



						</tr>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script>
	function cambiar_estado_stream(id_stream, estado) {
		$.post('<?php echo base_url(Hasher::make(71)) ?>', {
			id_stream,
			estado
		}, function() {
			window.location = '';
		});

	}

	function eliminar_stream(idstream) {
		Swal.fire({
			title: '¿Está seguro de eliminar?',
			text: 'Esta acción no se puede deshacer',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Sí, eliminarlo'
		}).then((result) => {
			if (result.isConfirmed) {
				$.post('<?php echo base_url(Hasher::make(74)) ?>', {
					idstream
				}, function() {
					window.location = '';
				});
			}
		});
	}
	$(document).ready(function() {


		$('#adm_web').DataTable({
			"scrollX": true,
			"language": {
				"sProcessing": "Procesando...",
				"sLengthMenu": "Mostrar _MENU_ registros",
				"sZeroRecords": "No se encontraron resultados",
				"sEmptyTable": "Ningún dato disponible en esta tabla",


				"sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				"sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
				"sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
				"sInfoPostFix": "",


				"sSearch": "Buscar:",


				"sUrl": "",
				"sInfoThousands": ",",
				"sLoadingRecords": "Cargando...",


				"oPaginate": {


					"sFirst": "Primero",
					"sLast": "Último",
					"sNext": "Siguiente",


					"sPrevious": "Anterior"
				},


				"oAria": {
					"sSortAscending": ": Activar para ordenar la columna de manera ascendente",
					"sSortDescending": ": Activar para ordenar la columna de manera descendente"
				}
			}
		});
	});
</script>