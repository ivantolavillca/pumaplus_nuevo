<div class="pageheader pd-y-25">
  <div class="pd-t-5 pd-b-5">
    <h1 class="pd-0 mg-0 tx-20 text-overflow">Administración Pagina</h1>
  </div>
  <div class="breadcrumb pd-0 mg-0">
    <a class="breadcrumb-item" href="<?php echo site_url(Hasher::make(20)) ?>"><i class="icon ion-ios-home-outline"></i> Home</a>

    <span class="breadcrumb-item active">Editar Página</span>
  </div>
</div>

<div class="container-fluid">
  <h3 align="center">FORMULARIO EDITAR PAGINA</h3>

  <form id="editar_institucion" enctype="multipart/form-data">
    <div class="row">
     
      <input type="hidden" name="idinstitucion" value="<?php echo $datos_institucion->idinstitucion; ?>">
      

      <br>
      <div class="col-md-12 col-lg-6">
        <div class="form-group">
          <label>NOMBRE DE INSTITUCION</label>
          <input type="text" class="form-control" name="nombre" value="<?php echo $datos_institucion->institucion_nombre; ?>" required>
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="form-group ">
          <label>TITULO</label>
          <input name="titulo" class="form-control"  required rows="3" value="<?php echo $datos_institucion->ins_titulo; ?>">
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="form-group ">
          <label>SUBTITULO</label>
          <input name="subtitulo" class="form-control" required rows="3" value="<?php echo $datos_institucion->ins_subtitulo; ?>">
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="form-group ">
          <label>HISTORIA</label>
          <textarea name="historia" class="form-control"   required rows="3"><?php echo $datos_institucion->ins_historia; ?></textarea>
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="form-group1 ">
          <label>MISION</label>
          <textarea name="mision" class="form-control" required ><?php echo $datos_institucion->ins_mision; ?></textarea>
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="form-group1 ">
          <label>VISION</label>
          <textarea name="vision" class="form-control" required ><?php echo $datos_institucion->ins_vision; ?></textarea>
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="form-group ">
          <label>URL INSTAGRAM</label>
          <input name="instagram" class="form-control" required rows="3" value="<?php echo $datos_institucion->ins_instagram; ?>">
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="form-group ">
          <label>URL TIKTOK</label>
          <input name="tiktok" class="form-control"  required rows="3" value="<?php echo $datos_institucion->ins_tiktok; ?>">
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="form-group ">
          <label>URL FACEBOOK</label>
          <input name="facebook" class="form-control"  required rows="3" value="<?php echo $datos_institucion->ins_url_facebook; ?>">
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="form-group ">
          <label>URL YOUTUBE</label>
          <input name="youtube" class="form-control"  required rows="3" value="<?php echo $datos_institucion->ins_youtube; ?>">
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="form-group ">
          <label>URL TWITTER</label>
          <input name="twitter" class="form-control"  required rows="3" value="<?php echo $datos_institucion->ins_twitter; ?>">
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="form-group ">
          <label>TELÉFONO</label>
          <input  type="number" name="telefono" class="form-control"  required rows="3" value="<?php echo $datos_institucion->ins_telefono; ?>">
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>

      <p class="text-center">
        <button class="btn btn-info btn-raised btn-gm" type="submit"><i class="zmdi zmdi-floppy"></i> GUARDAR DATOS</button>
        <a href="<?php echo base_url(Hasher::make(30))?>" class="btn btn-danger btn-raised">SALIR</a>
      </p>
    </div>
  </form>
</div>


<script>
  
  $("#editar_institucion").submit(function(event) {
    event.preventDefault();
    var formData = new FormData($("#editar_institucion")[0]);
    $('#cargar_datos').modal({
      backdrop: 'static',
      keyboard: false
    });

    $.ajax({
      url: '<?php echo base_url(Hasher::make(196))?>',
      type: 'POST',
      data: formData,
      cache: false,
      processData: false,
      contentType: false,
      success: function() {
       
        
        Swal.fire("NOTA!", "EXITOSAMENTE MODIFICADO EL ESTADO", "success");
        setTimeout(function() {
          window.location = '<?php echo base_url(Hasher::make(30))?>';
        }, 1000);
      }
    });
  });



</script>