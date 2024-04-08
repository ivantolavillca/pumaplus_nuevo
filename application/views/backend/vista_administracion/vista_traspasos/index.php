<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Traspasos</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo site_url(Hasher::make(20)) ?>">Inicio</a>&nbsp;<i class="fa fa-angle-right"></i>

            <li class="active">Administración de Traspasos</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-topline-red">
            <div class="card-head">
                <header>ADMINISTRACION TRASPASOS</header>
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
                                NUEVO TRASPASO<i class="fa fa-plus"></i>
                            </button>

                        </div>
                    </div>

                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column full-width" id="stream_navi">
                    <thead class="color-thead">
                        <tr>

                            <td>#</td>
                            <td>FECHA</td>
 <td>SUCURSAL ORIGEN</td>
                            <td>SUCURSAL DESTINO</td>
                           
                            <td>ARTICULO</td>
 <td>CANTIDAD</td>
                            <td>ACCIÓN</td>
                        </tr>
                    </thead>
                    <tbody>


  <tr>

                            <td>1</td>
                            <td>17-08-2024</td>

                            <td>Sucursal 1</td>
                            <td>Sucursal 2</td>
                            <td>Producto 1</td>
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
                <h5 class="modal-title">NUEVO TRASPASO</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
         
                <div class="modal-body">


                    <div class="row">
                        <div class="col-12 text-center text-info h3">REALIZAR TRASPASO</div>
                        <div class="col-md-12">
                            <label class="form-label">FECHA:</label>
                            <input type="date" class="form-control" >

                        </div>

                    

                        <div class="col-md-6">
                            <label class="form-label">SUCURSAL ORIGEN:</label>
                            <select name="" id="" class="form-control">
                                <option value="">ELEGIR UNA OPCIÓN</option>
                                 <option value="">Sucursal 1</option>
                                  <option value="">Sucursal 2</option>
                                   <option value="">Sucursal 3</option>
                                    <option value="">Sucursal 4</option>
                            </select>
                           
                        </div>
                          <div class="col-md-6">
                            <label class="form-label">SUCURSAL DESTINO:</label>
                            <select name="" id="" class="form-control">
                                <option value="">ELEGIR UNA OPCIÓN</option>
                                 <option value="">Sucursal 1</option>
                                  <option value="">Sucursal 2</option>
                                   <option value="">Sucursal 3</option>
                                    <option value="">Sucursal 4</option>
                            </select>
                           
                        </div>
  <div class="col-md-6">
                            <label class="form-label">ARTICULO:</label>
                            <select name="" id="" class="form-control">
                                <option value="">ELEGIR UNA OPCIÓN</option>
                                 <option value="">Articulo 1</option>
                                  <option value="">Articulo 2</option>
                                   <option value="">Articulo 3</option>
                                    <option value="">Articulo 4</option>
                            </select>
                           
                        </div>
                       <div class="col-md-3 mt-4">
                            <input type="text" class="form-control" >
                          
                        </div>
                        <div class="col-md-3 mt-4">
                            <button class="btn btn-info"><i class="fa fa-plus-square"></i></button>
                            
                          
                        </div>
                      
                      

                    </div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-topline-red">
            <div class="card-head">
                <header>TRASPASOS</header>
               
            </div>

            <div class="card-body ">
            
                <table class="table table-striped table-bordered table-hover table-checkable order-column full-width" id="stream_navi">
                    <thead class="color-thead">
                        <tr>

                           

                            <td>NOMBRE ARTICULO</td>
                            <td>CANTIDAD</td>
                           
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Producto 1</td>
                            <td> 4</td>
                          
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
                 <button wire:click="GuardarMascota" type="submit" class="btn btn-primary waves-effect waves-light">REALIZAR TRASPASO</button>
                </div>

          



        </div>
    </div>
</div>