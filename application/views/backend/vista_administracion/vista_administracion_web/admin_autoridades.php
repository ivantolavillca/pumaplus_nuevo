<div class="page-bar">
	<div class="page-title-breadcrumb">
		<div class=" pull-left">
			<div class="page-title">Administración Autoridades</div>
		</div>
		<ol class="breadcrumb page-breadcrumb pull-right">
			<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo site_url(Hasher::make(20)) ?>">Inicio</a>&nbsp;<i class="fa fa-angle-right"></i>
			<li><i class="fa fa-share"></i>&nbsp;<a class="parent-item" href="<?php echo site_url(Hasher::make(30)) ?>">Administración Institución</a>&nbsp;<i class="fa fa-angle-right"></i>

			<li class="active">Administración Autoridades</li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card card-topline-red">
			<div class="card-head">
				<header>ADMINISTRACION AUTORIDADES</header>
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
							<a href="<?php echo site_url(Hasher::make(194)) ?>">
								<button id="addRow1" class="btn btn-info">

									NUEVA AUTORIDAD <i class="fa fa-plus"></i>

								</button>
							</a>
						</div>
					</div>

				</div>
				<table class="table table-striped table-bordered table-hover table-checkable order-column full-width" id="aut">
					<thead class="color-thead">
						<tr>

							<td>#</td>
							<td>IMAGEN DE LA AUTORIDAD</td>
							<td>NOMBRE DE LA AUTORIDAD</td>
							<td>CARGO DE LA AUTORIDAD</td>
							<td>GESTION DE LA AUTORIDAD</td>
							<td>URL FACEBOOK</td>
							<td>ESTADO</td>

							<td>ACCIÓN</td>
						</tr>
					</thead>
					<tbody>
						<?php $cont = 0;
						foreach ($aut as $value) { ?>

							<?php $cont++; ?>
							<tr class="odd gradeX">

								<td> <?php echo $cont ?></td>
								<td class="td-imagen">
									<iframe src="<?php echo base_url() ?>assets/img_autoridad/<?php echo $value->img_autoridad ?> " style=" max-width: 100%;
  max-height: 100%;
  object-fit: contain;"></iframe>
								</td>
								<td><?php echo $value->aut_nombre ?></td>
								<td><?php echo $value->aut_cargo ?></td>
								<td><?php echo $value->aut_gestion ?></td>
								<td><?php echo $value->link_face ?></td>

								<td>
									<?php if ($value->estado == 'activo') { ?>
										<span class="label label-sm label-success" onclick="cambiar_estado_autoridad('<?php echo $value->idautoridades; ?>','1')"> Activo </span>
									<?php } else { ?>
										<span class="label label-sm label-warning" onclick="cambiar_estado_autoridad('<?php echo $value->idautoridades; ?>','0')"> Inactivo </span>
									<?php } ?>

								</td>


								<td class="valigntop">
									<div class="btn-group">
										<button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Acciones
											<i class="fa fa-angle-down"></i>
										</button>
										<ul class="dropdown-menu pull-left" role="menu">
											<li>
												<a href=" <?php echo base_url(Hasher::make(190, $value->idautoridades)) ?>">
													<i class="icon-docs"></i> Editar </a>
											</li>
											<li>
												<a href="javascript:;" onclick="eliminar_autoridad('<?php echo $value->idautoridades; ?>')">
													<i class="icon-tag"></i>Eliminar</a>
											</li>



										</ul>
									</div>
								</td>
							</tr>
						<?php } ?>



					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<script>
	function cambiar_estado_autoridad(id, estado) {
		$.post('<?php echo base_url(Hasher::make(192)) ?>', {
			id,
			estado
		}, function() {
			window.location = '';
		});

	}

	function eliminar_autoridad(id) {
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
				$.post('<?php echo base_url(Hasher::make(191)) ?>', {
					id
				}, function() {
					window.location = '';
				});
			}
		});
	}

	$(document).ready(function() {


		$('#aut').DataTable({
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