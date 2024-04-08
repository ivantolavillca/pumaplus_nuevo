<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Clientes</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo site_url(Hasher::make(20)) ?>">Inicio</a>&nbsp;<i class="fa fa-angle-right"></i>

            <li class="active">Administración de Clientes</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-topline-red">
            <div class="card-head">
                <header>ADMINISTRACION CLIENTES</header>
                <div class="tools">
                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                </div>
            </div>

            <div class="card-body ">
                <div class="row p-b-20">
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="btn-group">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal">
                                NUEVO CLIENTE<i class="fa fa-plus"></i>
                            </button>
                            <!-- <a href="<?php echo site_url(Hasher::make(69)) ?>">
                                <button class="btn btn-info">

                                    NUEVO CLIENTE<i class="fa fa-plus"></i>

                                </button>
                            </a> -->
                        </div>
                    </div>

                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column full-width" id="stream_navi">
                    <thead class="color-thead">
                        <tr>

                            <td>#</td>
                            <td>TITULO DE STREAM</td>

                            <td>DESCRIPCION STREAM</td>
                            <td>KEY STREAM</td>
                            <td>ESTADO</td>

                            <td>ACCION</td>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <?php $cont = 0;
                        foreach ($this->Modelo_stream->listartodoStream() as $stream) { ?>

                            <?php $cont++; ?>
                            <tr class="odd gradeX">
                                <td><?php echo $cont ?></td>

                                <td><?php echo $stream->titulo_stream; ?></td>

                                <td><?php echo $stream->descripcion_stream; ?></td>
                                <td><?php echo $stream->key_stream; ?></td>



                                <td>
                                    <?php if ($stream->estado == 'activo') { ?>
                                        <span class="label label-sm label-success" onclick="cambiar_estado_stream('<?php echo $stream->id_stream; ?>','1')"> Activo </span>
                                    <?php } else { ?>
                                        <span class="label label-sm label-warning" onclick="cambiar_estado_stream('<?php echo $stream->id_stream; ?>','0')"> Inactivo </span>
                                    <?php } ?>

                                </td>


                                <td class="valigntop">
                                    <div class="btn-group">
                                        <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Acciones
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">
                                            <li>
                                                <a href=" <?php echo base_url(Hasher::make(70, $stream->id_stream)) ?>">
                                                    <i class="icon-docs"></i> Editar </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" onclick="eliminar_stream('<?php echo $stream->id_stream; ?>')">
                                                    <i class="icon-tag"></i>Eliminar</a>
                                            </li>



                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?> -->



                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
   


    $(document).ready(function() {


        $('#stream_navi').DataTable({
            "scrollX": true,
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",


                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",


                "sSearch": "Buscar:",


                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",


                "oPaginate": {


                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",


                    "sPrevious": "Anterior"
                },


                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    });
</script>