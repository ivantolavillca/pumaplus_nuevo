<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Proveedores</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo site_url(Hasher::make(20)) ?>">Inicio</a>&nbsp;<i class="fa fa-angle-right"></i>

            <li class="active">Administración de Proveedores</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-topline-red">
            <div class="card-head">
                <header>ADMINISTRACION PROVEEDORES</header>
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
                                NUEVO PROVEEDOR<i class="fa fa-plus"></i>
                            </button>

                        </div>
                    </div>

                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column full-width" id="stream_navi">
                    <thead class="color-thead">
                        <tr>

                            <td>#</td>
                            <td>PRODUCTO</td>

                            <td>CLIENTE</td>
                            <td>PRECIO DE VENTA</td>
                            <td>CANTIDAD</td>

                            <td>ACCIÓN</td>
                        </tr>
                    </thead>
                    <tbody>


  <tr>

                            <td>1</td>
                            <td>Producto 1</td>

                            <td>Juan Peres</td>
                            <td>5 Bs.</td>
                            <td>5</td>

                            <td>

<button class="btn btn-danger"><i class="fa fa-times-rectangle"></i></button>
<button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                            </td>
                        </tr>

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
                <h5 class="modal-title">NUEVO PROVEEDOR</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
         
                <div class="modal-body">


                    <div class="row">
                        <div class="col-12 text-center text-info h3">CREAR PROVEEDOR</div>
                        <div class="col-md-6">
                            <label class="form-label">NOMBRE:</label>
                            <input type="text" class="form-control" placeholder="Ej. Proveedora nueva" >

                        </div>
                           <div class="col-md-6">
                            <label class="form-label">CONTACTO:</label>
                            <input type="text" class="form-control"placeholder="Ej. 5435344" >

                        </div>

                        <div class="col-md-6">
                            <label class="form-label">DIRECCIÓN:</label>
                            <input type="text" class="form-control" placeholder="Ej.Z/ Mar Av. Juan Suares N° 3234">

                        </div>
  <div class="col-md-6">
                            <label class="form-label">NIT:</label>
                            <input type="text" class="form-control" placeholder="Ej. 000002112">

                        </div>
                          <div class="col-md-6">
                            <label class="form-label">TELEFONO:</label>
                            <input type="text" class="form-control" placeholder="Ej. 77558833">

                        </div>
                         <div class="col-md-6">
                            <label class="form-label">CORREO:</label>
                            <input type="email" class="form-control" placeholder="Ej. nuevo@gmail.com">

                        </div>
                           <div class="col-md-12">
                            <label class="form-label">NOTAS:</label>
                            <textarea class="form-control" placeholder="Ej. nueva nota" ></textarea>
                            

                        </div>
                      
                      
                      

                    </div>

                        

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-danger waves-effect" class="close" data-dismiss="modal" aria-label="Close">CANCELAR</button>
                  <button wire:click="GuardarMascota" type="submit" class="btn btn-primary waves-effect waves-light">GUARDAR PROVEEDOR</button>
                </div>

          



        </div>
    </div>
</div>