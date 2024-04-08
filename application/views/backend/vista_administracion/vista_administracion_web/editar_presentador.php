
<div class="pageheader pd-y-25">
  <div class="pd-t-5 pd-b-5">
    <h1 class="pd-0 mg-0 tx-20 text-overflow">Administración Autoridades</h1>
  </div>
  <div class="breadcrumb pd-0 mg-0">
    <a class="breadcrumb-item" href="<?php echo site_url(Hasher::make(20)) ?>"><i class="icon ion-ios-home-outline"></i> Home</a>
    <a class="breadcrumb-item" href="<?php echo site_url(Hasher::make(30)) ?>"><i class="icon ion-ios-home-outline"></i> Admin Institucion</a>
    <span class="breadcrumb-item active">Editar Presentador</span>
  </div>
</div>
<div class="container-fluid">
  <h3 align="center">Formulario para editar un Presentador</h3>

  <form id="guardar_editar_presentador" enctype="multipart/form-data">
    <div class="row">
      

      
  

      <br>
      <input type="hidden"name="id_presentador" class="form-control" required placeholder="Ingresar el nombre de la autoridad"  value="<?php echo $obj[0]->idpresentadores?>">
      <input type="hidden"name="estado" class="form-control" required placeholder="Ingresar el nombre de la autoridad"  value="<?php echo $obj[0]->estado?>">
      <div class="col-md-12 col-lg-6">
        <div class="form-group1 ">
          <label>NOMBRE DE LA AUTORIDAD</label>
          <input name="pres_nombre" class="form-control" required placeholder="Ingresar el nombre de la autoridad"  value="<?php echo $obj[0]->pres_nombre?>">
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="form-group1 ">
          <label>CARGO DE LA AUTORIDAD</label>
          <input name="pres_cargo" class="form-control" required placeholder="Ingresar el cargo de la autoridad" value="<?php echo $obj[0]->pres_cargo?>">
        </div>
      </div>
      
      <div class="col-md-12 col-lg-6">
        <div class="form-group1 ">
          <label>URL FACEBOOK DE LA AUTORIDAD</label>
          <input name="pres_face" class="form-control" required placeholder="Ingresar la url de facebook" value="<?php echo $obj[0]->link_face?>">
        </div>
      </div>
     
       <div class="col-md-10">
                        <div class="form-group ">
                            <label>IMAGEN DE LA AUTORIDAD</label>
                              <input type="file" class="form-control nuevaFoto1" name="imagen_pres" accept=".jpg, .jpeg, .png, .gif" required>
                              <span id="error_img1"></span>
                          </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="form-group">
                          <label for="input-1">VISUALIZAR</label>
                          <p><img width="70" height="60" class="visualizar1" src="<?php echo base_url();?>assets/img_presentador/<?php echo $obj[0]->pres_img?>"></p>
                          
                        </div>
                      </div>

        

       
     
     
      <br>
<div class="col-md-12">
      <p class="text-center">
        <button class="btn btn-info btn-raised btn-gm" type="submit"><i class="zmdi zmdi-floppy"></i> GUARDAR DATOS</button>




        <a href="<?php echo base_url(Hasher::make(188))?>" class="btn btn-danger btn-raised">SALIR</a>
      </p>
      </div>
    </div>
  </form>
</div>

<script>
 

  $(".nuevaFoto1").change(function(){
    var imagen=this.files[0];
    if (imagen["type"]!="image/jpeg" && 
      imagen["type"]!="image/png" && 
      imagen["type"]!="image/gif" && 
      imagen["type"]!="image/jpg") {
      $(".nuevaFoto1").val('');
    $("#error_img1").html('<b style="color:#ff0000;">Formato invalido...</b>');
    $(".visualizar1").attr("src",'<?php echo base_url();?>assets/institucion/error.png');
    }else{
      if(imagen['size']>5000000){
        $(".nuevaFoto1").val('');
        $("#error_img1").html('<b style="color:#ff0000;">Imagen exede de 5 mg...</b>');
      }else{
        $("#error_img1").html('');
        var datosImagen=new FileReader;
        datosImagen.readAsDataURL(imagen);
        $(datosImagen).on("load",function(event){
          var rutaImagen=event.target.result;
          $(".visualizar1").attr("src",rutaImagen);
        });
      }
    }
  });

 


   $("#guardar_editar_presentador").submit(function(event) {
    event.preventDefault();
    var formData = new FormData($("#guardar_editar_presentador")[0]);
    $('#cargar_datos').modal({
      backdrop: 'static',
      keyboard: false
    });

    $.ajax({
      url: '<?php echo base_url(Hasher::make(182))?>',
      type: 'POST',
      data: formData,
      cache: false,
      processData: false,
      contentType: false,
      success: function() {
       
        
        Swal.fire("NOTA!", "EXITOSAMENTE MODIFICADO EL ESTADO", "success");
        setTimeout(function() {
          window.location = '<?php echo base_url(Hasher::make(188))?>';
        }, 1000);
      }
    });
  });
</script>
