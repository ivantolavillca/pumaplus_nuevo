<?php foreach ($stream as $st) { ?>

    <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2><?php echo $st->titulo_stream ?></h2>
                <br>


                <p class="lead"><?php echo $st->descripcion_stream ?> </p>

            </div>

            <div class="partners">
                <div class="col-lg-12">

                    
                    </div> 

                    <video id="my-video" class="video-js vjs-default-skin" controls preload="auto" width="640" height="264"
    data-setup='{"fluid": true}'>
    <source src="https://tvstream.upea.bo/hls/<?php echo $st->key_stream ?>.m3u8" type="application/x-mpegURL">
</video>

                    
                </div>

            </div>

        </div><!--/.container-->
    </section><!--/#partner-->





<?php } ?>
