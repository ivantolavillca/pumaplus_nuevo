<?php
defined('BASEPATH') or exit('No direct script access allowed');





$i = 1;
$user_active = array('class' => 'btn btn-success btn-sm', 'role' => 'button', 'style' => 'height: 26px; width: 80px; border-radius: 15px;');
$user_inactive = array('class' => 'btn btn-secondary btn-sm', 'role' => 'button', 'style' => 'height: 26px; width: 80px; border-radius: 15px; background: #e91e634d;');
$nbr_users = ($count_users > 0) ? ' <span class="badge badge-info" >' . $count_users . '</span>' : NULL;
?>
<?php if ($this->ion_auth->in_group('admin')) { ?>

    <div class="pageheader pd-y-25">
        <div class="pd-t-5 pd-b-5">
            <h1 class="pd-0 mg-0 tx-20 text-overflow">Administración Página Principal</h1>
        </div>
        <div class="breadcrumb pd-0 mg-0">
            <a class="breadcrumb-item" href="<?php echo site_url(Hasher::make(20)) ?>"><i class="icon ion-ios-home-outline"></i> Home</a>

            <span class="breadcrumb-item active">{lang_list} Usuarios <?php echo $nbr_users; ?> </span>
        </div>
    </div>
    <div class="row">
        <div class="col-12">

            <a href="<?php echo site_url(Hasher::make(24)) ?>" class="btn btn-success btn-primary" data-toggle="modal" data-target="#modal-basic"> {lang_add_user} </a>

            <a href="<?php echo site_url(Hasher::make(25)) ?>" class="btn btn-success btn-warning"> {lang_import_list}</a>


            <div class="card-body collapse show">


                <table class="table table-responsive-sm" id="datatable_persona">
                    <thead class="thead-colored thead-primary">
                        <tr>
                            <th>#</th>
                            <th>{lang_first_name}</th>
                            <th>{lang_last_name}</th>
                            <th>Usuario</th>
                            <th>{lang_group}</th>
                            <th>{lang_status}</th>
                            <th>{lang_actions}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <th scope="row"><?php echo $i++; ?></th>
                                <td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
                                <td style="color: green;"><?php echo htmlspecialchars($user->username, ENT_QUOTES, 'UTF-8'); ?></td>
                                <td>
                                    <?php foreach ($user->groups as $group) : ?>
                                        <span class="badge badge-default" style="border-radius: 15px;"><?php echo htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8'); ?></span>
                                    <?php endforeach; ?>
                                </td>
                                <td>
                                    <?php
                                    if ($user->id != 1) {
                                        echo ($user->active) ? anchor('backend/users/deactivate/' . $user->id, '{lang_active}', $user_active) : anchor('backend/users/activate/' . $user->id, '{lang_inactive}', $user_inactive);
                                    }
                                    ?>
                                </td>
                                <td>

                                    <button class="btn btn-bordered btn-round btn-success" onclick="editar_usuario('<?php echo $user->id; ?>')" title="RESET USUARIO"><span class="fa fa-pencil"></span></button>
                                    <button class="btn btn-bordered btn-round btn-danger" onclick="reset_usuario('<?php echo $user->id; ?>')" title="RESET USUARIO"><span class="fa fa-key"></span></button>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    </div>

    <div class="modal" id="modal_reset" data-easein="flipInX" data-easeout="flipOutX" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content ">
                <div class="modal-header" style="background: #0575E6;background: -webkit-linear-gradient(to right, #021B79, #0575E6);background: linear-gradient(to right, #021B79, #0575E6); ">

                    <h4 class="modal-title"><strong style="color:#fff;"> RESET USUARIO Y CONTRASEÑA</strong></h4>
                </div>
                <div class="modal-body">
                    <div class="row" id="ver_reset">

                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="modal" id="modal_editar" data-easein="flipInX" data-easeout="flipOutX" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content ">
                <div class="modal-header" style="background: #0575E6;background: -webkit-linear-gradient(to right, #021B79, #0575E6);background: linear-gradient(to right, #021B79, #0575E6); ">

                    <h4 class="modal-title"><strong style="color:#fff;"> EDITAR USUARIO Y CONTRASEÑA</strong></h4>
                </div>
                <div class="modal-body">
                    <div class="row" id="editar_user">

                    </div>

                </div>
            </div>
        </div>
    </div>





    <div class="modal" id="modal-basic" data-easein="flipInX" data-easeout="flipOutX" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content ">
                <div class="modal-header" style="background: #0575E6;background: -webkit-linear-gradient(to right, #021B79, #0575E6);background: linear-gradient(to right, #021B79, #0575E6); ">

                    <h4 class="modal-title"><strong style="color:#fff;">CREAR NUEVO USUARIO</strong></h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <form id="guardar_nuevo_usuario" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">CI </label>
                                        <div class="input-group margin-bottom-15">
                                            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                            <span class="twitter-typeahead">
                                                <input type="text" class="form-control" name="ci" id="ci" onkeyup="buscar(this.value)" placeholder="CI........" required>
                                            </span>
                                            <span id="error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">NOMBRE </label>
                                        <div class="input-group margin-bottom-15">

                                            <input type="text" class="form-control" id="nombre" name="nombre2" placeholder="nombre..." required>
                                            <input type="hidden" class="form-control" name="nombre" id="nombre2">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">APELLIDO PATERNO</label>
                                        <div class="input-group margin-bottom-15">

                                            <input type="text" class="form-control" id="paterno" name="paterno2" placeholder="apellido..." required>

                                            <input type="hidden" class="form-control" id="paterno2" name="paterno">

                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">APELLIDO MATERNO</label>
                                        <div class="input-group margin-bottom-15">

                                            <input type="text" class="form-control" id="materno" name="materno2" placeholder="apellido..." required>

                                            <input type="hidden" class="form-control" id="materno2" name="materno">

                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">TIPO USUARIO</label>
                                        <select name="id_tipo_usuario" class="form-control" required>

                                            <?php foreach ($this->db->get('dp_auth_groups')->result() as $value_tipo) {
                                                echo '<option value="' . $value_tipo->id . '">' . $value_tipo->name . '</option> ';
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">CARRERA</label>
                                        <select name="id_carrera" class="form-control" required>

                                            <?php foreach ($this->db->get('vista_carrera')->result() as $value_carrera) {
                                                echo '<option value="' . $value_carrera->id_carrera . '">' . $value_carrera->nombre_carrera . '</option> ';
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">NUEVO USUARIO</label>
                                        <div class="input-group margin-bottom-15">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <span class="twitter-typeahead">
                                                <input type="text" class="form-control" id="name" onkeyup="verificar_usuario(this.value)" required placeholder="Buscar usuario...">
                                                <input type="hidden" class="form-control" id="name2" onkeyup="verificar_usuario(this.value)" name="name" placeholder="Buscar usuario...">
                                            </span>
                                        </div>
                                        <span id="error_u"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">NUEVA CONTRASEÑA</label>
                                        <div class="input-group margin-bottom-15">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <span class="twitter-typeahead">
                                                <input type="text" class="form-control" id="pass" name="pass" placeholder="Buscar contraseña..." required>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="idpersona" name="idpersona">
                                <br>
                                <br>
                                <br>
                                <button type="submit" id="boton" class="btn btn-bordered btn-round btn-success"><span class="fa fa-save"></span> GUARDAR DATOS</button>

                                <button type="button" class="btn btn-bordered btn-round btn-danger" data-dismiss="modal"><span class="fa fa-close"></span> CANCELAR</button>



                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


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
    } ?>

    <script>
        function reset_usuario(id_usuario) {
            $("#modal_reset").modal('show')
            $.post('<?php echo base_url(); ?>backend/Users/reset_usuario', {
                id_usuario
            }, function(data) {
                $("#ver_reset").html(data);
            });


        }
    </script>

    <script>
       


        function buscar(ci) {
            $.post('<?php echo base_url(); ?>Controller_administracion/buscar_persona', {
                ci
            }, function(data) {
                var datos = JSON.parse(data);
                if ($("#ci").val() == '') {

                } else {
                    if (datos != 'hola') {
                        $("#error").html("");
                        $("#nombre").val('').attr('disabled', 'disabled');
                        $("#apellido").val('').attr('disabled', 'disabled');
                        $("#name").val('');
                        $("#pass").val('');
                        if (datos.nombre) {
                            $("#nombre").val(datos.nombre).attr('disabled', 'disabled');
                            $("#nombre2").val(datos.nombre);
                            $("#idpersona").val(datos.id_persona);
                            $("#paterno").val(datos.paterno).attr('disabled', 'disabled');
                            $("#paterno2").val(datos.paterno);
                            $("#materno").val(datos.materno).attr('disabled', 'disabled');
                            $("#materno2").val(datos.materno);
                            $("#name").val(datos.ci).attr('disabled', 'disabled');
                            $("#name2").val(datos.ci);
                            $("#pass").val(datos.ci + '_' + datos.paterno);
                            $("#pass2").val(datos.ci + '_' + datos.paterno);
                            document.getElementById('boton').disabled = false;
                        }

                    } else {
                        $("#error").html("<b style='color: #ff0000;'>Usuario ya existe</b>");
                        $("#nombre").val('').attr('disabled', 'disabled');
                        $("#apellido").val('').attr('disabled', 'disabled');
                        $("#name").val('');
                        $("#pass").val('');
                        document.getElementById('boton').disabled = true;
                    }
                }

            });
        }

        function editar_usuario(id_usuario) {
            $("#modal_editar").modal('show')
            $.post('<?php echo base_url(); ?>backend/Users/editar_usuario', {
                id_usuario
            }, function(data) {
                $("#editar_user").html(data);
            });
        }

        $("#guardar_nuevo_usuario").submit(function(event) {
            event.preventDefault();
            document.getElementById('boton').disabled = true;
            $('#loading').modal({
                backdrop: 'static',
                keyboard: false
            });
            $.ajax({
                url: '<?php echo base_url(); ?>backend/Users/guardar_nuevo_usuario',
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
<?php } ?>