
<div class="pageheader pd-y-25">
  <div class="pd-t-5 pd-b-5">
    <h1 class="pd-0 mg-0 tx-20 text-overflow">Administración Periodicos</h1>
  </div>
  <div class="breadcrumb pd-0 mg-0">
    <a class="breadcrumb-item" href="<?php echo site_url(Hasher::make(20)) ?>"><i class="icon ion-ios-home-outline"></i> Home</a>

    <span class="breadcrumb-item active">Crear Periódico</span>
  </div>
</div>
<div class="container-fluid">
  <h3 align="center">Formulario para Crear un Periódico</h3>

  <form id="guardar_nuevo_periodico" enctype="multipart/form-data">
    <div class="row">
      

      
  

      <br>
     
      <div class="col-md-12 col-lg-6">
        <div class="form-group1 ">
          <label>TITULO DEL PERIODICO</label>
          <input name="per_titulo" class="form-control" required placeholder="Ingresar el titulo del periodcio" >
        </div>
      </div>
       <div class="col-md-12 col-lg-6">
        <div class="form-group1 ">
          <label>FECHA DE PUBLICACIÓN DEL PERIODICO</label>
          <input name="per_fecha" class="form-control " required placeholder="Ingresar la descripcion del periodico" type="date">
          <input name="per_hora" class="form-control " required placeholder="Ingresar la descripcion del periodico" type="time">
        </div>
      </div>
      
       <div class="col-md-12">
        <div class="form-group1 ">
          <label>DESCRIPCIÓN DEL PERIÓDICO</label>
          <textarea name="per_descripcion" class="form-control" required placeholder="Ingresar la descripcion del periodico" ></textarea>
        </div>
      </div>
       <div class="col-md-10">
                        <div class="form-group ">
                            <label>VIDEO DEL PERIODICO</label>
                              <input type="file" id="video "class="form-control nuevaFoto1" name="video" accept=".mp4" required>
                              
                          </div>
                      </div>
                     

        <div class="col-md-12 col-lg-6">
        <div class="form-group1 ">
          <label>CATEGORIA DEL PERIÓDICO</label>
           <select class="form-control " required name="cate_periodico"  >


                                         <?php foreach($categoria_per as $cat){ ?>
                                          <option  value="<?php echo $cat->id ?>"><?php echo $cat->categoria_periodico ?></option>
                                          <?php } ?>
                                       </select>
        </div>
      </div>

       
      <div class="col-md-12 col-lg-6">
        <div class="form-group1 ">
          <label></label>
           <select class="form-control " required name="per_dest"  >


                                        
                                          <option  value="destacado">Publicar en la página principal o template principal</option>
                                          <option  value="no destacado">Publicar en su respectivo sector</option>
                                        
                                       </select>
        </div>
      </div>
     
      <br>
<div class="col-md-12">
      <p class="text-center">
        <button class="btn btn-info btn-raised btn-gm" type="submit"><i class="zmdi zmdi-floppy"></i> GUARDAR DATOS</button>




        <a href="<?php echo base_url(Hasher::make(228))?>" class="btn btn-danger btn-raised">SALIR</a>
      </p>
      </div>
    </div>
  </form>
</div>

<script>
 



 


   $("#guardar_nuevo_periodico").submit(function(event) {
    event.preventDefault();
    var formData = new FormData($("#guardar_nuevo_periodico")[0]);
    $('#cargar_datos').modal({
      backdrop: 'static',
      keyboard: false
    });

    $.ajax({
      url: '<?php echo base_url(Hasher::make(232))?>',
      type: 'POST',
      data: formData,
      cache: false,
      processData: false,
      contentType: false,
      success: function() {
       
        
        Swal.fire({
  title: 'CARGANDO..........!',
  html: ' SUEDIENDO ARCHIVOS <b></b> MILISEGUNDOS.',
  timer: 2000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
setTimeout(function() {
          window.location = '<?php echo base_url(Hasher::make(228))?>';
        }, 1000);
      }
    });
  });
</script>
