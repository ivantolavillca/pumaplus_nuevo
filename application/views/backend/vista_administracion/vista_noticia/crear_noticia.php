
<div class="pageheader pd-y-25">
  <div class="pd-t-5 pd-b-5">
    <h1 class="pd-0 mg-0 tx-20 text-overflow">Administración Noticias</h1>
  </div>
  <div class="breadcrumb pd-0 mg-0">
    <a class="breadcrumb-item" href="<?php echo site_url(Hasher::make(20)) ?>"><i class="icon ion-ios-home-outline"></i> Home</a>

    <span class="breadcrumb-item active">Crear Notica</span>
  </div>
</div>
<div class="container-fluid">
  <h3 align="center">Formulario para Crear una Noticia</h3>

  <form id="guardar_nuevo_noticia" enctype="multipart/form-data">
    <div class="row">
      

      
  

      <br>
     
      <div class="col-md-12 col-lg-6">
        <div class="form-group1 ">
          <label>NOMBRE DE LA NOTICIA</label>
          <input name="not_nombre" class="form-control" required placeholder="Ingresar el nombre de la noticia">
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
                        <div class="form-group ">
                            <label>VIDEO DE LA NOTICIA</label>
                              <input type="file" id="video "class="form-control nuevaFoto1" name="video" accept=".mp4" required>
                              
                          </div>
                      </div>
                     


       <div class="col-md-12 col-lg-6">
        <div class="form-group1 ">
          <label>HORA DE PUBLICACIÓN DE LA NOTICIA</label>
         
          <input name="not_hora" class="form-control " required   type="time">
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="form-group1 ">
          <label>FECHA DE PUBLICACIÓN DE LA NOTICIA</label>
          <input name="not_fecha" class="form-control " required  type="date">
         
        </div>
      </div>
      
       <div class="col-md-12">
        <div class="form-group1 ">
          <label>DESCRIPCIÓN DE LA NOTICIA</label>
          <textarea name="not_descripcion" class="form-control" required placeholder="Ingresar la descripcion de la noticia" ></textarea>
        </div>
      </div>
     


        <div class="col-md-12 col-lg-6">
        <div class="form-group1 ">
          <label>CATEGORIA DEL NOTICIA</label>
           <select class="form-control " required name="tipo_not"  >


                                         <?php foreach($list_tip as $tip){ ?>
                                          <option  value="<?php echo $tip->idtipo_noticia ?>"><?php echo $tip->tipo_noticia ?></option>
                                          <?php } ?>
                                       </select>
        </div>
      </div>

      <div class="col-md-12 col-lg-6">
        <div class="form-group1 ">
          <label></label>
           <select class="form-control " required name="not_dest"  >


                                        
                                          <option  value="destacado">Publicar en la página principal o template principal</option>
                                          <option  value="no destacado">Publicar en su respectivo sector</option>
                                        
                                       </select>
        </div>
      </div>
     
      <br>
<div class="col-md-12">
      <p class="text-center">
        <button class="btn btn-info btn-raised btn-gm" type="submit"><i class="zmdi zmdi-floppy"></i> GUARDAR DATOS</button>




        <a href="<?php echo base_url(Hasher::make(260))?>" class="btn btn-danger btn-raised">SALIR</a>
      </p>
      </div>
    </div>
  </form>
</div>


<script>
 

 

 


   $("#guardar_nuevo_noticia").submit(function(event) {
    event.preventDefault();
    var formData = new FormData($("#guardar_nuevo_noticia")[0]);
    let timerInterval
    Swal.fire({
    title: 'Sus datos se estan guardando<br> espere por favor...',
    allowOutsideClick: false,
    showConfirmButton: false,
    html: '<i class="fa fa-spinner fa-spin"></i>',
    customClass: {
    loading: 'swal2-loading'
  },
    onBeforeOpen: () => {
      Swal.showLoading()
    }
  });

    $.ajax({
      url: '<?php echo base_url(Hasher::make(264))?>',
      type: 'POST',
      data: formData,
      cache: false,
      processData: false,
      contentType: false,
      success: function() {
       
        
        
        Swal.fire("NOTA!", "EXITOSAMENTE GUARDADO LOS DATOS ", "success");
               setTimeout(function() {
               window.location = '<?php echo base_url(Hasher::make(260))?>';
               //window.location='';
               }, 1000);
      }
    });
  });
</script>
