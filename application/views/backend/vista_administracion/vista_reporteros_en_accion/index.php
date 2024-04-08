<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

<div class="container-fluid">
	<div class="page-header">
	  <h1 class="text-titles">ADMINISTRACION <small>.</small></h1>
	</div>
</div>
<div class="container-fluid">
	<h3 align="center">ADMINISTRACION REPORTEROS EN ACCION</h3>

	<a href="<?php echo base_url(Hasher::make(91))?>" class="btn btn-success btn-raised"> NUEVA PUBLICACION</a>
	
	
	
	
	<div class="table-responsive">
		<table class="table table-hover" id="table_id">
			<thead>
				<tr>
					<td>#</td>
					<td>DESCRIPCION</td>
				ads
					<td>URL REPORTAJE</td>
					
					<td>ESTADO</td>
					
					<td>ACCION</td>
				</tr>
			</thead>
			<tbody>
			<?php foreach( $this->Modelo_reporteros_en_accion->listartodolosReporteros() as $rep){?>
				<tr>

					<td><?php echo $rep->id; ?></td>
					
					<td><?php echo $rep->descripcion; ?></td>
					
					<td><?php echo $rep->url_reportaje; ?></td>
					
					<td>
						
					<?php if($rep->estado=='activo'){ ?>
							<button type="buton" class="btn btn-success btn-raised" onclick="cambiar_estado_stream('<?php echo $rep->id; ?>','1')">ACTIVO</button>
						<?php }else{ ?>
							<button type="buton" class="btn btn-danger btn-raised" onclick="cambiar_estado_stream('<?php echo $rep->id; ?>','0')">INACTIVO</button>
						<?php } ?>
					
							
					
					</td>
					
					<td>
						<a href="" class="btn btn-info btn-raised"> Editar</a>
						<a href="javascript:;" class="btn btn-danger btn-raised"  onclick="eliminar_stream('<?php echo $rep->id; ?>')"> Eliminar</a>
					</td>

				</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</div>
<script>


$(document).ready( function () {
    $('#table_id').DataTable();
} );

function cambiar_estado_stream(id_stream,estado){
 $.post('<?php echo base_url(Hasher::make(71))?>', {id_stream,estado}, function() {
		window.location='';
	});
	
}
function eliminar_stream(idstream){
	swal({
	  	title: 'ESTA SEGURO QUE DESEA ELIMINAR ?',
	  	text: "----------------------------------------",
	  	type: 'warning',
	  	showCancelButton: true,
	  	confirmButtonColor: '#03A9F4',
	  	cancelButtonColor: '#F44336',
	  	confirmButtonText: '<i class="zmdi zmdi-run"></i> ACEPTAR',
	  	cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> CANCELAR'
	}).then(function () {
		$.post('<?php echo base_url(Hasher::make(74))?>', {id}, function() {
			window.location='';
		});
	});
}





</script>