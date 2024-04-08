
		<div class="page-bar">
			<div class="page-title-breadcrumb">
				<div class=" pull-left">
					<div class="page-title">Administración Programación</div>
				</div>
				<ol class="breadcrumb page-breadcrumb pull-right">
					<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo site_url(Hasher::make(20)) ?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>

					<li class="active">Administración Programación</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card card-topline-red">
					<div class="card-head">
						<header>ADMINISTRACION PROGRAMACIÓN</header>
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
									<a href="<?php echo site_url(Hasher::make(243)) ?>">
										<button id="addRow1" class="btn btn-info">

											NUEVA PROGRAMACION<i class="fa fa-plus"></i>

										</button>
									</a>
								</div>
							</div>

						</div>
						<table class="table table-striped table-bordered table-hover table-checkable order-column full-width" id="example4">
							<thead class="color-thead">
								<tr>

									<td>#</td>
									<td>HORA PROGRAMACIÓN</td>
									<td>NOMBRE PROGRAAMACIÓN</td>
									<td>DIA PROGRAMACIÓN</td>
									<td>ESTADO</td>
									<td>ACCION</td>
								</tr>
							</thead>
							<tbody>
								<?php $cont = 0;
								foreach ($list_pro as $list) { ?>
									<?php $cont++; ?>
									<tr class="odd gradeX">
										<td>
											<?php echo $cont ?>
										</td>
										<td> <?php echo $list->hora_guion ?></td>
										<td>
											<?php echo $list->descrfipcion_guion ?>
										</td>
										<td><?php echo $list->dia_de_semana ?></td>
										<td>
											<?php if ($list->estado_programa_guion == 'activo') { ?>
												<span class="label label-sm label-success" onclick="cambiar_estado_categoria_periodico('<?php echo $list->idprogramas_guion; ?>','1')"> Activo </span>
											<?php } else { ?>
												<span class="label label-sm label-warning" onclick="cambiar_estado_categoria_periodico('<?php echo $list->idprogramas_guion; ?>','0')"> Inactivo </span>
											<?php } ?>

										</td>


										<td class="valigntop">
											<div class="btn-group">
												<button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Acciones
													<i class="fa fa-angle-down"></i>
												</button>
												<ul class="dropdown-menu pull-left" role="menu">
													<li>
														<a href=" <?php echo base_url(Hasher::make(245, $list->idprogramas_guion)) ?>">
															<i class="icon-docs"></i> Editar </a>
													</li>
													<li>
														<a href="javascript:;" onclick="eliminar_categoria_periodico('<?php echo $list->idprogramas_guion; ?>')">
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
	function cambiar_estado_categoria_periodico(id, estado) {
		$.post('<?php echo base_url(Hasher::make(241)) ?>', {
			id,
			estado
		}, function() {
			window.location = '';
		});

	}

	function eliminar_categoria_periodico(id) {
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
				$.post('<?php echo base_url(Hasher::make(242)) ?>', {
					id
				}, function() {
					window.location = '';
				});
			}
		});
	}
</script>