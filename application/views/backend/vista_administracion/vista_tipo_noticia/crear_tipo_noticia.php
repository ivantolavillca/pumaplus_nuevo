asdasdad
<div class="pageheader pd-y-25">
  <div class="pd-t-5 pd-b-5">
    <h1 class="pd-0 mg-0 tx-20 text-overflow">Administración Tipo Noticia</h1>
  </div>
  <div class="breadcrumb pd-0 mg-0">
    <a class="breadcrumb-item" href="<?php echo site_url(Hasher::make(20)) ?>"><i class="icon ion-ios-home-outline"></i> Home</a>

    <span class="breadcrumb-item active">Crear Tipo Noticia</span>
  </div>
</div>
<div class="container-fluid">
  <h3 align="center">Formulario para Crear un Tipo Noticia</h3>

  <form id="guardar_nuevo_tipo_noticia" enctype="multipart/form-data">
    <div class="row">
      

      
  

      <br>
     
      <div class="col-md-12 col-lg-12">
        <div class="form-group1 ">
          <label>NOMBRE DEL TIPO DE NOTICIA</label>
          <input name="tipo_noticia" class="form-control" required placeholder="Ingresar el titulo del periodcio">
        </div>
      </div>
      
      
     
      

       
     
      <br>
<div class="col-md-12">
      <p class="text-center">
        <button class="btn btn-info btn-raised btn-gm" type="submit"><i class="zmdi zmdi-floppy"></i> GUARDAR DATOS</button>




        <a href="<?php echo base_url(Hasher::make(250))?>" class="btn btn-danger btn-raised">SALIR</a>
      </p>
      </div>
    </div>
  </form>
</div>

<script>
 

  

 


   $("#guardar_nuevo_tipo_noticia").submit(function(event) {
    event.preventDefault();
    var formData = new FormData($("#guardar_nuevo_tipo_noticia")[0]);
    $('#cargar_datos').modal({
      backdrop: 'static',
      keyboard: false
    });

    $.ajax({
      url: '<?php echo base_url(Hasher::make(254))?>',
      type: 'POST',
      data: formData,
      cache: false,
      processData: false,
      contentType: false,
      success: function() {
       
        
        Swal.fire("NOTA!", "EXITOSAMENTE MODIFICADO EL ESTADO", "success");
        setTimeout(function() {
          window.location = '<?php echo base_url(Hasher::make(250))?>';
        }, 1000);
      }
    });
  });
</script>
