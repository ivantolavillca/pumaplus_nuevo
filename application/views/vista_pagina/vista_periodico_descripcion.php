<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">


                    <h2 class="page-title">Periódico Diario</h2>



                    <ul>
                        <li>
                            <a class="active" href="index.html">Inicio</a>
                        </li>
                        <li>Ultimas publicaciones</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .video-container {
        position: relative;
        padding-bottom: 56.25%;
        /* Proporción 16:9 */
        padding-top: 30px;
        height: 0;
        overflow: hidden;
    }

    .video-container video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>


<div class="rs-courses-list sec-spacer">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">


                <div class="row course-item">
                <div class="video-container" style="
						background: #000000;  
						">
                                <video width="100%" height="auto" controls>
                                    <source src="<?php echo base_url() ?>uploads/<?php echo $obj[0]->periodico_imagen ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>


                    <div class="col-md-8">
                        <div class="course-header">
                            <br>
                            <h3 class="course-title"><a href=""><?php echo $obj[0]->periodico_titulo ?></a></h3>
                            <div class="entry-meta">
                                <span id="publish_date"><?php echo $obj[0]->periodico_fecha ?></span>
                                <br>
                                <span><i></i><?php echo $obj[0]->hora_periodico ?> </span>

                            </div>
                        </div>
                        <div class="course-body">

                            <p><?php echo $obj[0]->periodico_descripcion ?></p>
                            <?php $categoria = $this->Modelo_periodico->listarunacategoria($obj[0]->id_categoria) ?>

                            <div class="post-tags">
                                <strong>Tag:</strong> <a href="<?php echo base_url(Hasher::make(200, $categoria->id)) ?>"><?php echo $categoria->categoria_periodico ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <h2>Comentarios</h2>
                <?php foreach ($comenta as $value) { ?>
                    <div class="media comment_section">
                        <div class="pull-left post_comments">
                            <a href="#"><img src="<?php echo base_url() ?>assets/template/images/blog/user.jpg" class="img-circle" alt="" /></a>
                        </div>
                        <div class="media-body post_reply_comments">
                            <h3><?php echo $value->com_nombre ?> - <?php echo $value->com_email ?></h3>
                            <h5><?php echo $value->com_fecha ?> - <?php echo $value->com_hora ?> </h5>
                            <p><?php echo $value->comentario ?></p>
                            <a>HI!</a>
                        </div>
                    </div>
                <?php } ?>


                <br>
                <br>
                <br>

                <form id="comentario" class="contact-form">
                    <div class="row">

                        <input type="hidden" name="id_periodico" value="<?php echo $obj[0]->id ?>">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>

                        </div>
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label>Comentario</label>
                                <textarea name="comenario" required class="form-control" rows="8"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg" required="required">Enviar Comentario</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

            <div class="col-lg-4 col-md-4">
                <div class="sidebar-area">

                    <div class="cate-box">
                        <h3 class="title">Categorias</h3>
                        <ul>


                            <?php foreach ($datcat as $cat_per) { ?>
                                <li>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i><a href="<?php echo base_url(Hasher::make(200, $cat_per->id)) ?>"> <?php echo $cat_per->categoria_periodico ?></a>
                                </li>

                            <?php } ?>






                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        $("#comentario").submit(function(event) {
            event.preventDefault();
            var formData = new FormData($("#comentario")[0]);
            $('#cargar_datos').modal({
                backdrop: 'static',
                keyboard: false
            });

            $.ajax({
                url: '<?php echo base_url(Hasher::make(198)) ?>',
                type: 'POST',
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function() {



                    setTimeout(function() {
                        window.location = '';
                    }, 1000);
                }
            });
        });
    </script>