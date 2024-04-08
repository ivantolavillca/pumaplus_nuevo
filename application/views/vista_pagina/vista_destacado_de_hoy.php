


<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
  <div class="breadcrumbs-inner">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          

              <h2 class="page-title">DESTACADO DE HOY</h2>

         

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



<div class="rs-courses-list sec-spacer">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12">

        <?php
        foreach ($not_de as $value) {
        ?>
          <div class="row course-item">
            <div class="col-md-6">
              <div >
              <iframe src="<?php echo $value->not_url ?>" width="370" height="400"></iframe>
                

              </div>
            </div>

            <div class="col-md-6">
              <div class="course-header">

                <h3 class="course-title"><a href=""><?php echo $value->not_nombre ?></a></h3>

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

<nav aria-label="Page navigation " class="mt-50">
					<ul class="pagination justify-content-center">
						
						<li class="page-item disabled"><a class="page-link fa fa-angle-left" href="#" tabindex="-1"></a></li>
						<li class="page-item"><a class="page-link active" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link dotted" href="#">...</a></li>
						<li class="page-item"><a class="page-link" href="#">5</a></li>
						<li class="page-item"><a class="page-link" href="#">6</a></li>
						<li class="page-item"><a class="page-link fa fa-angle-right" href="#"></a></li>


						


					</ul>
				</nav>
      </div>


      
    </div>
  </div>
</div>
