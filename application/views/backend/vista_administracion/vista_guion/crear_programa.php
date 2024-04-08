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

  <form id="crear_programa" enctype="multipart/form-data">
    <div class="row">
      

      
  

      <br>
     
      <div class="col-md-6">
        <div class="form-group1 ">
          <label>HORA DEL PROGRAMA</label>
          <input type="time" name="hora_programa" class="form-control" required placeholder="Ingresar la hora del programa">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group1 ">
          <label>NOMBRE DEL PROGRAMA</label>
          <input name="nombre_programa" class="form-control" required placeholder="Ingresar el nombre del programa">
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
 
 $("#crear_programa").submit(function(event) {
        event.preventDefault();
        var formData = new FormData($("#crear_programa")[0]);
        $("#cargar_datos").modal({
        backdrop: 'static',
        keyboard: false
        });
        $.ajax({
            url: '<?php echo base_url(Hasher::make(244))?>',
            type: 'POST',
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function() {
               
                Swal.fire("NOTA!", "EXITOSAMENTE GUARDADO LOS DATOS ", "success");
                setTimeout(function() {
                window.location = '<?php echo base_url(Hasher::make(240))?>';
                //window.location='';
                }, 1000);
            }
        });
    });
</script>
