<div class="col-md-12">
<center>
        <h3>DATOS PERSONALES</h3>
    </center>


    <div class="alert alert-info"><strong>NOMBRE Y AP. :</strong> <?php echo $obj->first_name . ' ' . $obj->last_name; ?></div>


    <?php


    $longitud = 10; // Longitud de la cadena aleatoria
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

    //print_r($obj);
    $nombre = mb_strtoupper($obj->first_name, 'utf-8');
    $a = explode(" ", $nombre);




    $usuario = $a[0] . '_' . $obj->id . $cadena;
    ?>


<div class="col-lg-12">
    <div class="form-group1">
        <label class="form-label">USUARIO</label>
        <div class="input-group margin-bottom-15">

            <input type="text" class="form-control" value="<?php echo $obj->username; ?>" disabled>
            </span>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="form-group1">
        <label class="form-label">NUEVA CONTRASEÑA</label>
        <div class="input-group margin-bottom-15">

            <input type="text" class="form-control" value="<?php echo $usuario; ?>" disabled>
            </span>
        </div>
    </div>
</div>
<form id="guardar_reset_usuario" method="post">
    <div class="col-md-12">
        <input type="hidden" name="usuario" value="<?php echo $obj->username;; ?>">
        <input type="hidden" name="pass" value="<?php echo $usuario; ?>">
        <input type="hidden" name="id_usuario" value="<?php echo $obj->id ?>">



    </div>
    <br>
    <br>
    <div class="col-md-12">
        <p class="text-center">
            <button type="submit" class="btn btn-info btn-raised btn-gm"><span class="fa fa-save"></span> GUARDAR DATOS</button>
            <button type="button" class="btn btn-danger btn-raised" data-dismiss="modal"><span class="fa fa-close"></span> CANCELAR</button>
        </p>
    </div>
</form>
</div>
<script>
    $("#guardar_reset_usuario").submit(function(event) {
        event.preventDefault();
        $('#loading').modal({
            backdrop: 'static',
            keyboard: false
        });
        $.ajax({
            url: '<?php echo base_url(); ?>backend/Users/guardar_reset_usuario',
            type: 'POST',
            data: $("form").serialize(),
            success: function() {
                swal.fire("NOTA!", "EXITOSAMENTE MODIFICADOS LOS DATOS", "success");
                setTimeout(function() {
                    window.location = '';
                }, 1000);
            }
        });
    });
</script>