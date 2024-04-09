<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Precios</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo site_url(Hasher::make(20)) ?>">Inicio</a>&nbsp;<i class="fa fa-angle-right"></i>

            <li class="active">Administración de Precios</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-topline-red">
            <div class="card-head">
                <header>ADMINISTRACION DE PRECIOS</header>
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
                            <label for="" class="form-label">Sucursal: </label>
                            <select name="" id="" class="form-control">
                                <option value="">ELEGIR UNA OPCIÓN</option>
                                <option value="">SUCURSAL 1</option>
                                <option value="">SUCURSAL 2</option>
                                <option value="">SUCURSAL 3</option>
                                <option value="">SUCURSAL 4</option>
                            </select>
                       

                        </div>
                    </div>

                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column full-width" id="stream_navi">
                    <thead class="color-thead">
                        <tr>

                            <td>#</td>
                            <td>NOMBRE DE PRODUCTO</td>

                            <td>PRECIO</td>
                            <td>COSTO</td>
                         
                            <td>ACCIÓN</td>
                        </tr>
                    </thead>
                    <tbody>


  <tr>

                            <td>1</td>
                            <td>Producto 1</td>

                            <td><input type="text" class="form-control" placeholder="Ej. 12.5"></td>
                            <td> <input type="text" class="form-control" placeholder="Ej. 12.2"></td>

                            <td>

<button class="btn btn-danger"><i class="fa fa-times-rectangle"></i></button>
<button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                            </td>
                        </tr>
                        

  <tr>

                            <td>1</td>
                            <td>Producto 1</td>

                            <td><input type="text" class="form-control" placeholder="Ej. 12.5"></td>
                            <td> <input type="text" class="form-control" placeholder="Ej. 12.2"></td>

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
                <h5 class="modal-title">NUEVA VENTA</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
         
                <div class="modal-body">


                    <div class="row">
                        <div class="col-12 text-center text-info h3">REALIZAR VENTA</div>
                        <div class="col-md-6">
                            <label class="form-label">FECHA VENTA:</label>
                            <input type="date" class="form-control" >

                        </div>

                        <div class="col-md-6">
                            <label class="form-label"># CONTRATO:</label>
                            <input type="number" class="form-control" placeholder="Ej. contrato 1">

                        </div>

                        <div class="col-md-6">
                            <label class="form-label">CLIENTE:</label>
                            <select name="" id="" class="form-control">
                                <option value="">ELEGIR UNA OPCIÓN</option>
                                 <option value="">CLIENTE 1</option>
                                  <option value="">CLIENTE 2</option>
                                   <option value="">CLIENTE 3</option>
                                    <option value="">CLIENTE 4</option>
                            </select>
                           
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">PLAZO:</label>
                            <input type="text" class="form-control" placeholder="Ej. Plazo">

                        </div>
                        <div class="col-md-8">
                            <label class="form-label">ARTICULO:</label>
                             <select name="" id="" class="form-control">
                                <option value="">ELEGIR UNA OPCIÓN</option>
                                 <option value="">ARTICULO 1</option>
                                  <option value="">ARTIULO 2</option>
                                   <option value="">ARTICULO 3</option>
                                    <option value="">ARTICULO 4</option>
                            </select>
                           

                        </div>
                         <div class="col-md-2 mt-4">
                            <input type="number" class="form-control" placeholder="Ej. 1">
                          
                        </div>
                        <div class="col-md-2 mt-4">
                            <button class="btn btn-info"><i class="fa fa-plus-square"></i></button>
                            
                          
                        </div>
                      
                      

                    </div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-topline-red">
            <div class="card-head">
                <header>VENTAS A REALIZAR</header>
               
            </div>

            <div class="card-body ">
            
                <table class="table table-striped table-bordered table-hover table-checkable order-column full-width" id="stream_navi">
                    <thead class="color-thead">
                        <tr>

                           

                            <td>NOMBRE PRODUCTO</td>
                            <td>CANTIDAD</td>
                            <td>PRECIO</td>

                            <td>SUB TAL</td>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Producto 1</td>
                            <td> 4</td>
                            <td>20 bs.</td>
                            <td>300</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
                        

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-danger waves-effect" class="close" data-dismiss="modal" aria-label="Close">CANCELAR</button>
                  <button wire:click="GuardarMascota" type="submit" class="btn btn-primary waves-effect waves-light">REALIZAR VENTA</button>
                </div>

          



        </div>
    </div>
</div>