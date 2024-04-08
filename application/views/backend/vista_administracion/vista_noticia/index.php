<div class="page-bar">
	<div class="page-title-breadcrumb">
		<div class=" pull-left">
			<div class="page-title">Administración Noticias</div>
		</div>
		<ol class="breadcrumb page-breadcrumb pull-right">
			<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo site_url(Hasher::make(20)) ?>">Inicio</a>&nbsp;<i class="fa fa-angle-right"></i>

			<li class="active">Administración Noticias</li>
		</ol>
	</div>
</div>








<div class="row">
	<div class="col-md-12">
		<div class="card card-topline-red">
			<div class="card-head">
				<header>NOTICIAS DE TIPO VIDEO 
				<br>
					<br>(Nota: Formato requerido del video .mp4)</header>
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
							<a href="<?php echo site_url(Hasher::make(263)) ?>">
								<button id="addRow1" class="btn btn-info">

									NUEVA NOTICIA<i class="fa fa-plus"></i>

								</button>
							</a>
						</div>
					</div>

				</div>
				<table class="table table-striped table-bordered table-hover table-checkable order-column full-width" id="noticias">
					<thead class="color-thead">
						<tr>

							<td>#</td>
							<td>NOTICIA NOMBRE</td>
							<td>NOTICIA VIDEO</td>
							<td>NOTICIA HORA</td>
							<td>NOTICIA FECHA</td>
							<td>NOTICIA DESCRIPCION</td>

							<td>TIPO DE NOTICIA</td>
							<td>ESTADO</td>
							<td>ESTADO DESTACADO</td>
							<td>ACCIÓN</td>
						</tr>
					</thead>
					<tbody>
						<?php $cont = 0;
						foreach ($list_no as $list) { ?>
							<?php $cont++; ?>
							<tr class="odd gradeX">
								<td>
									<?php echo $cont ?>
								</td>
								<td> <?php echo $list->not_nombre ?></td>
								<td>
									<video width="200" height="200" controls>
										<source src="<?php echo base_url() ?>assets/archivos_noticias/<?php echo $list->not_url ?>" type="video/mp4">
										Your browser does not support the video tag.
									</video>

								</td>
								<td>
									<?php echo $list->not_hora ?>
								</td>
								<td><?php echo $list->not_fecha ?></td>
								<td>
									<?php echo $list->not_descripcion ?>
								</td>
								<td><?php echo $list->tipo_noticia ?> </td>
								<td>
									<?php if ($list->estado == 'activo') { ?>
										<span class="label label-sm label-success" onclick="cambiar_estado_noticia('<?php echo $list->idnoticia; ?>','1')"> Activo </span>
									<?php } else { ?>
										<span class="label label-sm label-warning" onclick="cambiar_estado_noticia('<?php echo $list->idnoticia; ?>','0')"> Inactivo </span>
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
												<a href=" <?php echo base_url(Hasher::make(265, $list->idnoticia)) ?>">
													<i class="icon-docs"></i> Editar </a>
											</li>
											<li>
												<a href="javascript:;" onclick="eliminar_noticia('<?php echo $list->idnoticia; ?>')">
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
	function cambiar_estado_noticia(id, estado) {
		$.post('<?php echo base_url(Hasher::make(261)) ?>', {
			id,
			estado
		}, function() {
			window.location = '';
		});

	}

	function eliminar_noticia(id) {
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
				$.post('<?php echo base_url(Hasher::make(262)) ?>', {
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
	
  $('#noticias').DataTable({
	
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