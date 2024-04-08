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

            <div class="col-md-12 col-lg-12">
                <div class="form-group1 ">
                    <label>NOMBRE DE LA NOTICIA</label>
                    <input name="not_nombre" class="form-control" required placeholder="Ingresar el nombre de la noticia">
                </div>
            </div>
            <div class="col-md-10">
                <div class="form-group ">
                    <label>IMAGEN DE LA NOTICIA</label>
                    <input type="file" class="form-control nuevaFoto1" name="imagen_noticia" accept=".jpg, .jpeg, .png, .gif" required>
                    <span id="error_img1"></span>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label for="input-1">VISUALIZAR</label>
                    <p><img width="70" height="60" class="visualizar1" src="<?php echo base_url(); ?>assets/institucion/error.png"></p>

                </div>
            </div>


            <div class="col-md-12 col-lg-6">
                <div class="form-group1 ">
                    <label>HORA DE PUBLICACIÓN DE LA NOTICIA</label>

                    <input name="not_hora" class="form-control " required type="time">
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="form-group1 ">
                    <label>FECHA DE PUBLICACIÓN DE LA NOTICIA</label>
                    <input name="not_fecha" class="form-control " required type="date">

                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group1 ">
                    <label>DESCRIPCIÓN DE LA NOTICIA</label>
                    <textarea name="not_descripcion" class="form-control" required placeholder="Ingresar la descripcion de la noticia"></textarea>
                </div>
            </div>



            <div class="col-md-12 col-lg-6">
                <div class="form-group1 ">
                    <label>CATEGORIA DEL NOTICIA</label>
                    <select class="form-control " required name="tipo_not">


                        <?php foreach ($list_tip as $tip) { ?>
                            <option value="<?php echo $tip->idtipo_noticia ?>"><?php echo $tip->tipo_noticia ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="col-md-12 col-lg-6">
                <div class="form-group1 ">
                    <label></label>
                    <select class="form-control " required name="not_dest">



                        <option value="destacado">Publicar en la página principal o template principal</option>
                        <option value="no destacado">Publicar en su respectivo sector</option>

                    </select>
                </div>
            </div>

            <br>
            <div class="col-md-12">
                <p class="text-center">
                    <button class="btn btn-info btn-raised btn-gm" type="submit"><i class="zmdi zmdi-floppy"></i> GUARDAR DATOS</button>




                    <a href="<?php echo base_url(Hasher::make(260)) ?>" class="btn btn-danger btn-raised">SALIR</a>
                </p>
            </div>
        </div>
    </form>
</div>


<script>
    $(".nuevaFoto1").change(function() {
        var imagen = this.files[0];
        if (imagen["type"] != "image/jpeg" &&
            imagen["type"] != "image/png" &&
            imagen["type"] != "image/gif" &&
            imagen["type"] != "image/jpg") {
            $(".nuevaFoto1").val('');
            $("#error_img1").html('<b style="color:#ff0000;">Formato invalido...</b>');
            $(".visualizar1").attr("src", '<?php echo base_url(); ?>assets/institucion/error.png');
        } else {
            if (imagen['size'] > 5000000) {
                $(".nuevaFoto1").val('');
                $("#error_img1").html('<b style="color:#ff0000;">Imagen exede de 5 mg...</b>');
            } else {
                $("#error_img1").html('');
                var datosImagen = new FileReader;
                datosImagen.readAsDataURL(imagen);
                $(datosImagen).on("load", function(event) {
                    var rutaImagen = event.target.result;
                    $(".visualizar1").attr("src", rutaImagen);
                });
            }
        }
    });

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
            url: '<?php echo base_url(Hasher::make(274)) ?>',
            type: 'POST',
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function() {



                Swal.fire("NOTA!", "EXITOSAMENTE GUARDADO LOS DATOS ", "success");
                setTimeout(function() {
                    window.location = '<?php echo base_url(Hasher::make(270)) ?>';
                    //window.location='';
                }, 1000);
            }
        });
    });
</script>