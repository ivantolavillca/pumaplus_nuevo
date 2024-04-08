<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">


                    <h2 class="page-title"><?php echo $obj[0]->categoria_periodico ?></h2>



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

                <?php
                foreach ($listper as $value) {
                ?>
                    <div class="row course-item">

                        <div class="col-md-7">
                          

                            <div class="video-container" style="
						background: #000000;  
						">
                                <video width="100%" height="auto" controls>
                                    <source src="<?php echo base_url() ?>uploads/<?php echo $value->periodico_imagen ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                        <br>

                        <div class="col-md-3">
                            <div class="course-header">

                                <h3 class="course-title"><a href=""><?php echo $value->periodico_titulo ?></a></h3>
                                <div class="entry-meta">
                                    <span id="publish_date"><?php echo $value->periodico_fecha ?></span>
                                    <br>
                                    <span><i></i><?php echo $value->hora_periodico ?> </span>

                                </div>
                            </div>
                            <div class="course-body">

                                <p><?php echo $value->periodico_descripcion ?></p>
                                <div class="course-button">
                                    <a href="<?php echo base_url(Hasher::make(199, $value->id)) ?>">Más detalles </a>
                                </div>
                            </div>
                        </div>
                    </div>



                <?php
                }
                ?>


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