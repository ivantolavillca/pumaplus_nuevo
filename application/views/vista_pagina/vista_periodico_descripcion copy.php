<section id="blog" class="container">
    <div class="center">
        <h2>Blogs</h2>
        <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
    </div>

    <div class="blog">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-item">
                    <img class="img-responsive img-blog" src="<?php echo base_url() ?>assets/img_periodico/<?php echo $obj[0]->periodico_imagen ?>" width="100%" alt="" />
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 text-center">
                            <div class="entry-meta">
                                <span id="publish_date"><?php echo $obj[0]->periodico_fecha ?></span>
                                <span><i class="fa fa-user"></i> <a href="#"> <?php echo $obj[0]->hora_periodico ?></a></span>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-10 blog-content">
                            <h2><?php echo $obj[0]->periodico_titulo ?></h2>
                            <p><?php echo $obj[0]->periodico_descripcion ?></p>

                            <?php $categoria = $this->Modelo_periodico->listarunacategoria($obj[0]->id_categoria) ?>

                            <div class="post-tags">
                                <strong>Tag:</strong> <a href="<?php echo base_url(Hasher::make(200, $categoria->id)) ?>"><?php echo $categoria->categoria_periodico ?></a>
                            </div>

                        </div>
                    </div>
                </div><!--/.blog-item-->



                <div class="media comment_section">
                    <div class="pull-left post_comments">
                        <a href="#"><img src="images/blog/girl.png" class="img-circle" alt="" /></a>
                    </div>
                    <div class="media-body post_reply_comments">
                        <h3>Marsh</h3>
                        <h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                        <a href="#">Reply</a>
                    </div>
                </div>

                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>URL</label>
                                <input type="url" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label>Message *</label>
                                <textarea name="message" id="message" required class="form-control" rows="8"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                            </div>
                        </div>
                    </div>
                </form>


            </div><!--/.col-md-8-->

            <aside class="col-md-4">





                <div class="widget categories">
                    <h3>Categories</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="blog_category">
                                <li><a href="#">Computers <span class="badge">04</span></a></li>
                                <li><a href="#">Smartphone <span class="badge">10</span></a></li>
                                <li><a href="#">Gedgets <span class="badge">06</span></a></li>
                                <li><a href="#">Technology <span class="badge">25</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!--/.categories-->







            </aside>

        </div><!--/.row-->

    </div><!--/.blog-->

</section><!--/#blog-->