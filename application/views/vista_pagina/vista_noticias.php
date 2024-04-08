


<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
  <div class="breadcrumbs-inner">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          

              <h2 class="page-title"><?php echo $catego[0]->tipo_noticia?></h2>

         

          <ul>
            <li>
              <a class="active" href="<?php echo base_url()?>">Inicio</a>
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
      <div class="col-lg-12 col-md-12">

        <?php
        foreach ($notic as $value) {
        ?>
          <div class="row course-item">
            <div class="col-md-6">
              <div >
              <div class="video-container" style="
						background: #000000;  
						">
                                <video width="100%" height="auto" controls>
                                    <source src="<?php echo base_url() ?>videos_noticias/<?php echo $value->not_url ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                

              </div>
            </div>

            <div class="col-md-6">
              <div class="course-header">

                <h3 class="course-title"><a ><?php echo $value->not_nombre ?></a></h3>

              </div>
              <div class="course-body">

              <p><?php echo $value->not_descripcion ?></p>
                <div class="course-button">
                  <a ><?php echo $value->not_fecha ?> - <?php echo $value->not_hora ?> </a>
                </div>
              </div>
            </div>
          </div>



        <?php
        }
        ?>


      </div>


      
    </div>
  </div>
</div>
