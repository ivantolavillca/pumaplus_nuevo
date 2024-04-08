<div class="col-md-12">
    <center>
        <h3>DATOS PERSONALES</h3>
    </center>

    <div class="alert alert-info"><strong>USUARIO :</strong> <?php echo $obj->username; ?></div>
    <form id="guardar_editar_usuario" enctype="multipart/form-data">
        <div class="row">


            <br>
          

            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-label">NOMBRE </label>
                    <div class="input-group margin-bottom-15">
                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                        <span class="twitter-typeahead">
                            <input type="text" class="form-control" name="nombre1" value="<?php echo $obj->first_name; ?>" disabled placeholder="nombre...">
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-label">APELLIDO</label>
                    <div class="input-group margin-bottom-15">
                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                        <span class="twitter-typeahead">
                            <input type="text" class="form-control" name="apellido1" value="<?php echo $obj->last_name; ?>" disabled placeholder="apellido...">
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-label">TIPO USUARIO</label>
                    <select name="id_tipo_usuario1" class="form-control">
                       
                        <?php foreach ($this->db->get('dp_auth_groups')->result() as $value_tipo1) {
                            ?>
                                
                                <option value="<?php echo $value_tipo1->id; ?>"><?php echo $value_tipo1->name; ?></option>
                        <?php 
                        } ?>
                    </select>
                </div>
               
                <input type="hidden" name="id_usuario1" id="id_usuario1" value="<?php echo $obj->id ?>">
                







                <br>
                <br>
                <br>
                <div class="col-md-12">
                    <p class="text-center">
                        <br>
                        <br>
                        <br>
                        <button class="btn btn-info btn-raised btn-gm" type="submit"><i class="zmdi zmdi-floppy"></i> GUARDAR DATOS</button>
                        <button type="button" class="btn btn-danger btn-raised" data-dismiss="modal"><span class="fa fa-close"></span> CANCELAR</button>



                    </p>
                </div>
            </div>
    </form>

</div>
<script>
    $("#guardar_editar_usuario").submit(function(event) {
        event.preventDefault();
        $('#loading').modal({
            backdrop: 'static',
            keyboard: false
        });
        $.ajax({
            url: '<?php echo base_url(); ?>backend/Users/guardar_editar_usuario',
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