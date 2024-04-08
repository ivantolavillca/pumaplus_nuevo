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
                            <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                NUEVO CLIENTE<i class="fa fa-plus"></i>
                            </button>

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




                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog   modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title">NUEVO CLIENTE</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="">
                <div class="modal-body">


                    <div class="row">
                        <div class="col-12 text-center text-info h3">DATOS PERSONALES</div>
                        <div class="col-md-4">
                            <label class="form-label">PATERNO:</label>
                            <input type="text" class="form-control" placeholder="Ej. Quispe">

                        </div>

                        <div class="col-md-4">
                            <label class="form-label">MATERNO:</label>
                            <input type="text" class="form-control" placeholder="Ej. Quispe">

                        </div>

                        <div class="col-md-4">
                            <label class="form-label">NOMBRE 1:</label>
                            <input type="text" class="form-control" placeholder="Ej. Juan">

                        </div>

                        <div class="col-md-4">
                            <label class="form-label">NOMBRE 2:</label>
                            <input type="text" class="form-control" placeholder="Ej. Perez">

                        </div>
                        <div class="col-md-4">
                            <label class="form-label">C.I.:</label>
                            <input type="number" class="form-control" placeholder="Ej. Perez">

                        </div>
                        <div class="col-md-4">
                            <label class="form-label">FECHA NACIMIENTO:</label>
                            <input type="date" class="form-control">

                        </div>
                        <div class="col-md-4">
                            <label class="form-label">ESTADO CIVIL:</label>
                            <select name="" id="" class="form-control">
                                <option value="">SELECCIONE UNA OPCIÓN</option>
                                <option value="">CASAD@</option>
                                <option value="">DIVORCIAD@</option>
                                <option value="">CASADO</option>
                            </select>



                        </div>
                        <div class="col-md-4">
                            <label class="form-label">DISTRITO:</label>
                            <input type="text" class="form-control" placeholder="Ej. 1">

                        </div>
                        <div class="col-md-4">
                            <label class="form-label">ZONA:</label>
                            <input type="text" class="form-control" placeholder="Ej. Juan Pablo">

                        </div>
                        <div class="col-md-8">
                            <label class="form-label">DOMICILIO:</label>
                            <input type="text" class="form-control" placeholder="Ej. Av. Mercurio N° 2435">

                        </div>
                        <div class="col-md-4">
                            <label class="form-label">CELULAR:</label>
                            <input type="number" class="form-control" placeholder="Ej. Fresita">

                        </div>
                        <div class="col-12 text-center text-info h3">DATOS LABORALES</div>
                        <div class="col-md-4">
                            <label class="form-label">PROFESIÓN:</label>
                            <input type="text" class="form-control" placeholder="Ej. Profesor">

                        </div>
                        <div class="col-md-4">
                            <label class="form-label">MATERIA:</label>
                            <input type="text" class="form-control" placeholder="Ej. Ingles">

                        </div>
                        <div class="col-md-8">
                            <label class="form-label">U. EDUCATIVA :</label>
                            <input type="text" class="form-control" placeholder="Ej. Adrian Castillo">

                        </div>
                        <div class="col-md-4">
                            <label class="form-label">ITEM:</label>
                            <input type="text" class="form-control" placeholder="Ej. 000021">

                        </div>
                        <div class="col-md-4">
                            <label class="form-label">LOCALIDAD U.E. :</label>
                            <input type="text" class="form-control" placeholder="Ej. XXXXXXXXX">

                        </div>
                        <div class="col-md-4">
                            <label class="form-label">PROVINCIA U.E. :</label>
                            <input type="text" class="form-control" placeholder="Ej. XXXXXXXXX">

                        </div>
                        <div class="col-md-4">
                            <label class="form-label">DEPARTAMENTO :</label>
                            <select name="" id="" class="form-control">
                                <option value="">SELECCIONE UNA OPCIÓN</option>
                                <option value="">dasdad</option>
                                <option value="">dsada</option>
                                <option value="">dsada</option>
                            </select>


                        </div>
                        <div class="col-md-8">

                            <label class="form-label">RURAL - URBANO :</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio1">RURAL</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio2">URBANO</label>
                            </div>


                        </div>
                        <div class="col-12 text-center text-info h3">GARANTE</div>
                        <div class="col-md-8">
                            <label class="form-label">NOMBRE:</label>
                            <input type="text" class="form-control" placeholder="Ingrese el nombre completo...">

                        </div>
                        <div class="col-md-4">
                            <label class="form-label">PARENTESCO:</label>
                            <input type="text" class="form-control" placeholder="Que parentesco tiene?">

                        </div>
                        <div class="col-md-4">
                            <label class="form-label">CELULAR :</label>
                            <input type="number" class="form-control" placeholder="Ingrese el celular..">

                        </div>
                        <div class="col-md-8">
                            <label class="form-label">DOMICILIO:</label>
                            <input type="text" class="form-control" placeholder="Ej. Av. Mercurio N° 2435">

                        </div>

                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-danger waves-effect" class="close" data-dismiss="modal" aria-label="Close">CANCELAR</button>
                    <button wire:click="GuardarMascota" type="submit" class="btn btn-primary waves-effect waves-light">GUARDAR DATOS</button>
                </div>

            </form>



        </div>
    </div>
</div>