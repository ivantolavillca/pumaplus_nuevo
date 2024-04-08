asdasdad
<div class="pageheader pd-y-25">
  <div class="pd-t-5 pd-b-5">
    <h1 class="pd-0 mg-0 tx-20 text-overflow">Administración Programación</h1>
  </div>
  <div class="breadcrumb pd-0 mg-0">
    <a class="breadcrumb-item" href="<?php echo site_url(Hasher::make(20)) ?>"><i class="icon ion-ios-home-outline"></i> Home</a>

    <span class="breadcrumb-item active">Crear Categoria</span>
  </div>
</div>
<div class="container-fluid">
  <h3 align="center">Formulario para Crear un Programa </h3>

  <form id="editar_programa" enctype="multipart/form-data">
    <div class="row">
      

    <input type="hidden" name="id" value="<?php echo $obj[0]->idprogramas_guion ?>">
  

      <br>
     
      <div class="col-md-6">
        <div class="form-group1 ">
          <label>HORA DEL PROGRAMA</label>
          <input type="time" name="hora_programa" class="form-control" required placeholder="Ingresar el nombre de la categoria" value="<?php echo $obj[0]->hora_guion ?>">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group1 ">
          <label>NOMBRE DEL PROGRAMA</label>
          <input name="nombre_programa" class="form-control" required placeholder="Ingresar el nombre de la categoria" value="<?php echo $obj[0]->	descrfipcion_guion ?>">
        </div>
      </div>
      
    
      
      <div class="col-md-12">
        <div class="form-group1 ">
          <label>DIA DEL PROGRAMA</label>
          <br>
          <select name="dia_programa" >

          <option value="1">LUNES A VIERNES</option>
          <option value="2"> SABADOS</option>
          <option value="3">DOMINGOS</option>
          <
          </select>
        </div>
      </div>
      
      
    

      
     
     
      
     
   
      
     
      
     
     
      <br>
<div class="col-md-12">
      <p class="text-center">
        <button class="btn btn-info btn-raised btn-gm" type="submit"><i class="zmdi zmdi-floppy"></i> GUARDAR DATOS</button>




        <a href="<?php echo base_url(Hasher::make(240))?>" class="btn btn-danger btn-raised">SALIR</a>
      </p>
      </div>
    </div>
  </form>
</div>

<script>
 
 $("#editar_programa").submit(function(event) {
    event.preventDefault();
    var formData = new FormData($("#editar_programa")[0]);
    $('#cargar_datos').modal({
      backdrop: 'static',
      keyboard: false
    });

    $.ajax({
      url: '<?php echo base_url(Hasher::make(246))?>',
      type: 'POST',
      data: formData,
      cache: false,
      processData: false,
      contentType: false,
      success: function() {
       
        
        Swal.fire("NOTA!", "EXITOSAMENTE MODIFICADO EL ESTADO", "success");
        setTimeout(function() {
          window.location = '<?php echo base_url(Hasher::make(240))?>';
        }, 1000);
      }
    });
  });
</script>
