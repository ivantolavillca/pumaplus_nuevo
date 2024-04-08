
<div class="pageheader pd-y-25">
  <div class="pd-t-5 pd-b-5">
    <h1 class="pd-0 mg-0 tx-20 text-overflow">Administración Stream</h1>
  </div>
  <div class="breadcrumb pd-0 mg-0">
    <a class="breadcrumb-item" href="<?php echo site_url(Hasher::make(20)) ?>"><i class="icon ion-ios-home-outline"></i> Home</a>

    <span class="breadcrumb-item active">Editar Stream</span>
  </div>
</div>

<div class="container-fluid">
    <h3 align="center">EDITAR DATOS STREAM</h3>


    <form id="guardar_stream_editado" enctype="multipart/form-data">
        <div class="row">
            <input type="hidden" name="id_stream" value="<?php echo $obj[0]->id_stream ?>">
            <input type="hidden" name="estado" value="<?php echo $obj[0]->estado ?>">



            <?php $longitud = 30; // Longitud de la cadena aleatoria
            $cadena = '';

            for ($i = 0; $i < $longitud; $i++) {
                $tipo = mt_rand(1, 3); // 1 = letra mayúscula, 2 = letra minúscula, 3 = número
                switch ($tipo) {
                    case 1:
                        $caracter = chr(mt_rand(65, 90)); // Letra mayúscula
                        break;
                    case 2:
                        $caracter = chr(mt_rand(97, 122)); // Letra minúscula
                        break;
                    case 3:
                        $caracter = chr(mt_rand(48, 57)); // Número
                        break;
                }
                $cadena .= $caracter;
            }
            ?>


            <br>

            <div class="col-md-12">
                <div class="form-group1 ">
                    <label>TITULO DE STREAM</label>
                    <input name="titulostream" class="form-control" required placeholder="Ingresar el titulo del stream" value="<?php echo $obj[0]->titulo_stream ?>">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group1 ">
                    <label>DESCRIPCIÓN DE STREAM</label>
                    <input name="desc_stream" class="form-control" required placeholder="Ingresar la descripcion del stream......" value="<?php echo $obj[0]->descripcion_stream ?>">
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="col-md-12 col-lg-6">
                <div class="form-group1 ">
                    <label>KEY DE ACCESO</label>
                    <input name="key_acceso" class="form-control" required contenteditable="false" readonly value="<?php echo $cadena ?>">
                   <br>
                    <a href="" class="btn btn-danger btn-raised">GENERAR KEY</a>
                </div>
            </div>




            <br>
            <div class="col-md-12">
                <p class="text-center">
                    <button class="btn btn-info btn-raised btn-gm" type="submit"><i class="zmdi zmdi-floppy"></i> GUARDAR DATOS</button>




                    <a href="<?php echo base_url(Hasher::make(67)) ?>" class="btn btn-danger btn-raised">SALIR</a>
                </p>
            </div>
        </div>
    </form>
</div>

<script>
    $("#guardar_stream_editado").submit(function(event) {
        event.preventDefault();
        var formData = new FormData($("#guardar_stream_editado")[0]);
        $("#cargar_datos").modal({
            backdrop: 'static',
            keyboard: false
        });
        $.ajax({
            url: '<?php echo base_url(Hasher::make(73)) ?>',
            type: 'POST',
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function() {
               
                Swal.fire("NOTA!", "EXITOSAMENTE EDITADO LOS DATOS ", "success");
                setTimeout(function() {
                    window.location = '<?php echo base_url(Hasher::make(67)) ?>';
                    //window.location='';
                }, 1000);
            }
        });
    });
</script>