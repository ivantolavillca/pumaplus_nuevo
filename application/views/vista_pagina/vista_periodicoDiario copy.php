<section id="blog" class="container">
        <div class="center">
            <h2><?php echo $obj[0]->categoria_periodico ?></h2>
            <p class="lead">Nuestras noticias al alcance de tus manos</p>
        </div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
                    
 <?php  foreach ($listper as $lis){?>


<div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                    <span id="publish_date"><?php echo $lis->periodico_fecha?></span>
                                   
                                    <span ><i ></i><?php echo $lis->hora_periodico?> </span>
                                   
                                </div>
                            </div>
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <a href="#"><img class="img-responsive img-blog" src="<?php echo base_url()?>assets/img_periodico/<?php echo $lis->periodico_imagen?>" width="100%" alt="" /></a>
                                <h2><a href="blog-item.html"></a><?php echo $lis->periodico_titulo?></h2>
                                <h3><?php echo $lis->periodico_descripcion?></h3>
                                <a class="btn btn-primary readmore" href="<?php echo base_url(Hasher::make(199,$lis->id))?>">MAS INFORMACIÓN  <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->

<?php }?>





<br>
<br>
<br>
<br>
                   
                    
                   
                    
                </div><!--/.col-md-8-->

                <aside class="col-md-4">
                    
    				
    				 
                                
                             
                     

                    <div class="widget categories">
                        <h3>CATEGORIAS</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="blog_category">
                                    <?php foreach( $datcat as $cat_per){ ?>
                                    <li><a href="<?php echo base_url(Hasher::make(200,$cat_per->id))?>"><?php echo $cat_per->categoria_periodico ?><span class="badge">-</span></a></li>
                                   <?php } ?>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.categories-->
    				
    				
    				
                  
    				
    			</aside>  
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->