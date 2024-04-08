asdasdad
<div class="pageheader pd-y-25">
  <div class="pd-t-5 pd-b-5">
    <h1 class="pd-0 mg-0 tx-20 text-overflow">Administración Categoria Periodico</h1>
  </div>
  <div class="breadcrumb pd-0 mg-0">
    <a class="breadcrumb-item" href="<?php echo site_url(Hasher::make(20)) ?>"><i class="icon ion-ios-home-outline"></i> Home</a>

    <span class="breadcrumb-item active">Editar Categoria</span>
  </div>
</div>
<div class="container-fluid">
  <h3 align="center">Formulario para Editar una Categoria </h3>

  <form id="guardar_editar_categoria_periodico" enctype="multipart/form-data">
    <div class="row">
      

        <input type="hidden" name="id" value="<?php echo $obj[0]->id ?>">
            <input type="hidden" name="estado" value="<?php echo $obj[0]->estado ?>">
  

      <br>
     
      <div class="col-md-12">
        <div class="form-group1 ">
          <label>NOMBRE DE LA CATEGORIA</label>
          <input name="nombre_categoria" class="form-control" required placeholder="Ingresar el nombre de la categoria" value="<?php echo $obj[0]->categoria_periodico ?>">
        </div>
      </div>
      
      
    
      
      
      
      
    

      
     
     
      
     
   
      
     
      
     
     
      <br>
<div class="col-md-12">
      <p class="text-center">
        <button class="btn btn-info btn-raised btn-gm" type="submit"><i class="zmdi zmdi-floppy"></i> GUARDAR DATOS</button>




        <a href="<?php echo base_url(Hasher::make(221))?>" class="btn btn-danger btn-raised">SALIR</a>
      </p>
      </div>
    </div>
  </form>
</div>

<script>
    $("#guardar_editar_categoria_periodico").submit(function(event) {
        event.preventDefault();
        var formData = new FormData($("#guardar_editar_categoria_periodico")[0]);
        $("#cargar_datos").modal({
            backdrop: 'static',
            keyboard: false
        });
        $.ajax({
            url: '<?php echo base_url(Hasher::make(227)) ?>',
            type: 'POST',
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function() {
               
                Swal.fire("NOTA!", "EXITOSAMENTE EDITADO LOS DATOS ", "success");
                setTimeout(function() {
                    window.location = '<?php echo base_url(Hasher::make(221)) ?>';
                    //window.location='';
                }, 1000);
            }
        });
    });
</script>
