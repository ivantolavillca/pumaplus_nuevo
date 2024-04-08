<div class="pageheader pd-y-25">
  <div class="pd-t-5 pd-b-5">
    <h1 class="pd-0 mg-0 tx-20 text-overflow">Administración Pagina</h1>
  </div>
  <div class="breadcrumb pd-0 mg-0">
    <a class="breadcrumb-item" href="<?php echo site_url(Hasher::make(20)) ?>"><i class="icon ion-ios-home-outline"></i> Home</a>

    <span class="breadcrumb-item active">Editar Página</span>
  </div>
</div>
<?php $obj = $this->Model_institucion->listar_institucion(); ?>
<div class="container-fluid">
  <h3 align="center">FORMULARIO EDITAR PAGINA</h3>

  <form id="guardar_institucion" enctype="multipart/form-data">
    <div class="row">
      <input type="hidden" name="idinstitucion" value="<?php echo $obj->idinstitucion; ?>">
      <input type="hidden" name="ins_logo" value="<?php echo $obj->ins_logo; ?>">
      <input type="hidden" name="ins_foto_rector" value="<?php echo $obj->ins_foto_rector; ?>">
      <input type="hidden" name="ins_foto_vicerector" value="<?php echo $obj->ins_foto_vicerector; ?>">
      <input type="hidden" name="ins_foto_jefe_unidad" value="<?php echo $obj->ins_foto_jefe_unidad; ?>">

      <div class="col-lg-6">
        <div class="form-group">

          <label>ICONO DE LA INSTITUCION</label>
          <br> <br>

          <input type="file" class="form-control nuevaFoto" name="imagen" accept=".jpg, .jpeg, .gif, .PNG">
          <span id="error_img"></span>
        </div>
      </div>
      <div class="col-lg-4"><br>
        <?php if ($obj->ins_logo) { ?>
          <img class="visualizar" width="100" src="<?php echo base_url(); ?>assets/institucion/<?php echo $obj->ins_logo; ?>" alt="not found">
        <?php } else { ?>
          <img class="visualizar" width="100" src="<?php echo base_url(); ?>assets/institucion/error.png" alt="message user image">
        <?php } ?>
      </div>

      <br>
      <div class="col-md-12 col-lg-6">
        <div class="form-group">
          <label>NOMBRE DE INSTITUCION</label>
          <input type="text" class="form-control" name="nombre" value="<?php echo $obj->institucion_nombre; ?>" required>
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="form-group ">
          <label>HISTORIA</label>
          <textarea name="historia" class="form-control" placeholder="Ingresar historia..." id="txt-content" required rows="3"><?php echo $obj->ins_historia; ?></textarea>
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="form-group1 ">
          <label>MISION</label>
          <textarea name="mision" class="form-control" required placeholder="Ingresar mision..."><?php echo $obj->ins_mision; ?></textarea>
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="form-group1 ">
          <label>VISION</label>
          <textarea name="vision" class="form-control" required placeholder="Ingresar vision..."><?php echo $obj->ins_vision; ?></textarea>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group ">
          <label>CORREO </label>
          <input type="email" class="form-control" name="correo1" value="<?php echo $obj->ins_correo; ?>" required>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group ">
          <label>CELULAR Whatsapp</label>
          <input type="number" class="form-control" maxlength="10" name="celular1" value="<?php echo $obj->ins_telefono; ?>" required>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group ">
          <label>FACEBOOK</label>
          <input type="text" class="form-control" name="facebook" value="<?php echo $obj->ins_url_facebook; ?>">
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="form-group ">
          <label>UBICACION / DIRECCION </label>
          <textarea class="form-control" name="direccion" required><?php echo $obj->ins_ubicacion; ?></textarea>
        </div>
      </div>

      <div class="col-md-12 col-lg-6">
        <div class="form-group ">
          <label>API GOOGLE MAP</label>
          <textarea class="form-control" name="api_map"><?php echo $obj->ins_api_google_map; ?></textarea>
        </div>
      </div>
      <div class="col-md-12 ">
        <div class="form-group ">
          <label>DATOS DEL RECTOR</label>
          <input type="text" class="form-control" name="datos_dir" value="<?php echo $obj->ins_nombre_rector; ?>">
        </div>
      </div>
      <div class="col-md-8">
        <div class="form-group ">
          <label>IMAGEN DE RECTOR</label><br>
          <br>
          <input type="file" class="form-control nuevaFoto2" name="imagen_rector" accept=".jpg, .jpeg, .gif">
          <span id="error_img2"></span>
        </div>
      </div>
      <div class="col-lg-4"><br>
        <?php if ($obj->ins_foto_rector) { ?>
          <img class="visualizar2" width="100" src="<?php echo base_url(); ?>assets/institucion/<?php echo $obj->ins_foto_rector; ?>">
        <?php } else { ?>
          <img class="visualizar2" width="100" src="<?php echo base_url(); ?>assets/institucion/error.png" alt="message user image">
        <?php } ?>
      </div>
      <div class="col-md-12">
        <div class="form-group ">
          <label>DATOS DEL VICERECTOR</label>
          <input type="text" class="form-control" name="datos_vice" value="<?php echo $obj->ins_nombre_vice; ?>">
        </div>
      </div>
      <div class="col-md-8">
        <div class="form-group ">
          <label>IMAGEN DE VICERECTOR</label>
          <input type="file" class="form-control nuevaFoto3" name="imagen_vice" accept=".jpg, .jpeg, .gif">
          <br><br>
          <span id="error_img3"></span>
        </div>
      </div>
      <div class="col-lg-4"><br>
        <?php if ($obj->ins_foto_vicerector) { ?>
          <img class="visualizar3" width="100" src="<?php echo base_url(); ?>assets/institucion/<?php echo $obj->ins_foto_vicerector; ?>">
        <?php } else { ?>
          <img class="visualizar3" width="100" src="<?php echo base_url(); ?>assets/institucion/error.png" alt="message user image">
        <?php } ?>
      </div>
      <div class="col-md-12">
        <div class="form-group ">
          <label>DATOS DEL JEFE UNIDAD</label>
          <input type="text" class="form-control" name="datos_jefe" value="<?php echo $obj->ins_nombre_jefe; ?>">
        </div>
      </div>
      <div class="col-md-8">
        <div class="form-group ">
          <label>IMAGEN DE JEFE UNIDAD</label>
          <input type="file" class="form-control nuevaFoto4" name="imagen_jefe" accept=".jpg, .jpeg, .gif">
          <br><br>
          <span id="error_img4"></span>
        </div>
      </div>
      <div class="col-lg-4"><br>
        <?php if ($obj->ins_foto_jefe_unidad) { ?>
          <img class="visualizar4" width="100" src="<?php echo base_url(); ?>assets/institucion/<?php echo $obj->ins_foto_jefe_unidad; ?>" alt="User profile picture">
        <?php } else { ?>
          <img class="visualizar4" width="100" src="<?php echo base_url(); ?>assets/institucion/error.png" alt="message user image">
        <?php } ?>
        <hr>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>

      <p class="text-center">
        <button class="btn btn-info btn-raised btn-gm" type="submit"><i class="zmdi zmdi-floppy"></i> GUARDAR DATOS</button>
      </p>
    </div>
  </form>
</div>


<script>
  $(".nuevaFoto").change(function() {
    var imagen = this.files[0];
    if (imagen["type"] != "image/jpeg" &&
      imagen["type"] != "image/png" &&
      imagen["type"] != "image/gif" &&
      imagen["type"] != "image/jpg") {
      $(".nuevaFoto").val('');
      $("#error_img").html('<b style="color:#ff0000;">Formato invalido...</b>');
      $(".visualizar").attr("src", '<?php echo base_url(); ?>assets/logos/image_no.jpg');
    } else {
      if (imagen['size'] > 5000000) {
        $(".nuevaFoto").val('');
        $("#error_img").html('<b style="color:#ff0000;">Imagen exede de 5 mg...</b>');
      } else {
        $("#error_img").html('');
        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);
        $(datosImagen).on("load", function(event) {
          var rutaImagen = event.target.result;
          $(".visualizar").attr("src", rutaImagen);
        });
      }
    }
  });

  $(".nuevaFoto2").change(function() {
    var imagen = this.files[0];
    if (imagen["type"] != "image/jpeg" &&
      imagen["type"] != "image/png" &&
      imagen["type"] != "image/gif" &&
      imagen["type"] != "image/jpg") {
      $(".nuevaFoto2").val('');
      $("#error_img2").html('<b style="color:#ff0000;">Formato invalido...</b>');
      $(".visualizar2").attr("src", '<?php echo base_url(); ?>assets/logos/image_no.jpg');
    } else {
      if (imagen['size'] > 5000000) {
        $(".nuevaFoto2").val('');
        $("#error_img2").html('<b style="color:#ff0000;">Imagen exede de 5 mg...</b>');
      } else {
        $("#error_img2").html('');
        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);
        $(datosImagen).on("load", function(event) {
          var rutaImagen = event.target.result;
          $(".visualizar2").attr("src", rutaImagen);
        });
      }
    }
  });

  $(".nuevaFoto3").change(function() {
    var imagen = this.files[0];
    if (imagen["type"] != "image/jpeg" &&
      imagen["type"] != "image/png" &&
      imagen["type"] != "image/gif" &&
      imagen["type"] != "image/jpg") {
      $(".nuevaFoto3").val('');
      $("#error_img3").html('<b style="color:#ff0000;">Formato invalido...</b>');
      $(".visualizar3").attr("src", '<?php echo base_url(); ?>assets/logos/image_no.jpg');
    } else {
      if (imagen['size'] > 5000000) {
        $(".nuevaFoto3").val('');
        $("#error_img3").html('<b style="color:#ff0000;">Imagen exede de 5 mg...</b>');
      } else {
        $("#error_img3").html('');
        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);
        $(datosImagen).on("load", function(event) {
          var rutaImagen = event.target.result;
          $(".visualizar3").attr("src", rutaImagen);
        });
      }
    }
  });

  $(".nuevaFoto4").change(function() {
    var imagen = this.files[0];
    if (imagen["type"] != "image/jpeg" &&
      imagen["type"] != "image/png" &&
      imagen["type"] != "image/gif" &&
      imagen["type"] != "image/jpg") {
      $(".nuevaFoto3").val('');
      $("#error_img4").html('<b style="color:#ff0000;">Formato invalido...</b>');
      $(".visualizar4").attr("src", '<?php echo base_url(); ?>assets/logos/image_no.jpg');
    } else {
      if (imagen['size'] > 5000000) {
        $(".nuevaFoto4").val('');
        $("#error_img4").html('<b style="color:#ff0000;">Imagen exede de 5 mg...</b>');
      } else {
        $("#error_img4").html('');
        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);
        $(datosImagen).on("load", function(event) {
          var rutaImagen = event.target.result;
          $(".visualizar4").attr("src", rutaImagen);
        });
      }
    }
  });
  $("#guardar_institucion").submit(function(event) {
    event.preventDefault();
    var formData = new FormData($("#guardar_institucion")[0]);
    $('#cargar_datos').modal({
      backdrop: 'static',
      keyboard: false
    });

    $.ajax({
      url: '<?php echo base_url(); ?>Controller_institucion/guardar_institucion',
      type: 'POST',
      data: formData,
      cache: false,
      processData: false,
      contentType: false,
      success: function() {
       
        
        Swal.fire("NOTA!", "EXITOSAMENTE MODIFICADO EL ESTADO", "success");
        setTimeout(function() {
          window.location = '';
        }, 1000);
      }
    });
  });
</script>