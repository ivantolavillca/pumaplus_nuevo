



<div class="page-bar">
	<div class="page-title-breadcrumb">
		<div class=" pull-left">
			<div class="page-title">Administración Periódicos</div>
		</div>
		<ol class="breadcrumb page-breadcrumb pull-right">
			<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo site_url(Hasher::make(20)) ?>">Inicio</a>&nbsp;<i class="fa fa-angle-right"></i>

			<li class="active">Administración Periódicos</li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card card-topline-red">
			<div class="card-head">
				<header>ADMINISTRACION PERIODICOS DIARIOS</header>
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
							<a href="<?php echo site_url(Hasher::make(231)) ?>">
								<button id="addRow1" class="btn btn-info">

									CREAR NUEVO PERIÓDICO <i class="fa fa-plus"></i>

								</button>
							</a>
						</div>
					</div>

				</div>
				<table class="table table-striped table-bordered table-hover table-checkable order-column full-width" id="perio">
					<thead class="color-thead">
						<tr>

							<td>#</td>
							<td>TITULO PERIODICO</td>
							<td>PERIODICO DESCRIPCION</td>
							<td>PERIODICO IMAGEN</td>
							<td>PERIODICO FECHA Y HORA</td>
							

							<td>CATEGORIA</td>
							<td>ESTADO</td>
							<td>ESTADO PERIODICO DESTACADO</td>
							<td>ACCION</td>



						</tr>
					</thead>
					<tbody>
						<?php $cont = 0;
						foreach ($listar_perio as $list) { ?>
							<?php $categoria = $this->Modelo_periodico->categoria_nombre($list->id_categoria); ?>
							<?php $cont++; ?>
							<tr class="odd gradeX">
								<td>
									<?php echo $cont ?>
								</td>

								<td><?php echo $list->periodico_titulo ?></td>
								<td>
									<?php echo $list->periodico_descripcion ?>

								</td>

								<td>
									<video width="200" height="200" controls>
										<source src="<?php echo base_url() ?>uploads/<?php echo $list->periodico_imagen ?>" type="video/mp4">
										Your browser does not support the video tag.
									</video>
								</td>

								
								<td><?php echo $list->hora_periodico ?> <?php echo $list->periodico_fecha ?>  </td>
								<td> <?php echo $categoria->categoria_periodico ?> </td>
								<td>
									<?php if ($list->estado == 'activo') { ?>
										<span class="label label-sm label-success" onclick="cambiar_estado_periodico('<?php echo $list->id; ?>','1')"> Activo </span>
									<?php } else { ?>
										<span class="label label-sm label-warning" onclick="cambiar_estado_periodico('<?php echo $list->id; ?>','0')"> Inactivo </span>
									<?php } ?>

								</td>

<td><?php echo $list->estado_destacado ?></td>
								<td class="valigntop">
									<div class="btn-group">
										<button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Acciones
											<i class="fa fa-angle-down"></i>
										</button>
										<ul class="dropdown-menu pull-left" role="menu">
											<li>
												<a href=" <?php echo base_url(Hasher::make(233, $list->id)) ?>">
													<i class="icon-docs"></i> Editar </a>
											</li>
											<li>
												<a href="javascript:;" onclick="eliminar_periodico('<?php echo $list->id; ?>')">
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
	function cambiar_estado_tipo_noticia(id, estado) {
		$.post('<?php echo base_url(Hasher::make(251)) ?>', {
			id,
			estado
		}, function() {
			window.location = '';
		});

	}

	function eliminar_tipo_noticia(id) {
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
				$.post('<?php echo base_url(Hasher::make(252)) ?>', {
					id
				}, function() {
					window.location = '';
				});
			}
		});
	}
</script>


<script>
	function cambiar_estado_periodico(id, estado) {
		$.post('<?php echo base_url(Hasher::make(229)) ?>', {
			id,
			estado
		}, function() {
			window.location = '';
		});

	}

	function cambiar_estado_periodico_destacado(id, estado) {
		$.post('<?php echo base_url(Hasher::make(229)) ?>', {
			id,
			estado
		}, function() {
			window.location = '';
		});

	}

	function eliminar_periodico(id) {
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
				$.post('<?php echo base_url(Hasher::make(230)) ?>', {
					id
				}, function() {
					window.location = '';
				});
			}
		});
	}
</script>
<script>
	$(document).ready(function() {
		$('#hola').DataTable({
			responsive: true,
			autoWidth: false
		});
	});
	$(document).ready(function() {


$('#perio').DataTable({
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