
        <section id="call-to-action" class="page-section no-pad bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 top-pad-20 bottom-pad-20 text-center white">
                        <h3 class="text-uppercase inline-block tb-margin-20" data-animation="fadeInUp">Galería de Videos</h3>
                        
                    </div>
                </div>
            </div>
        </section>
        <section id="service" class="page-section">
            <div class="container">
                <div class="section-title">
                    <!-- Heading -->
                    <h2 class="title">Conoce nuestra galería de Videos</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row text-center">
                            <?php 
                        $i = 0; 
                            foreach ($datosg as $gale) {
                                $i += 1; 
                                ?>
                                <div class="col-sm-4">
                               <iframe class="youtube-player" type="text/html" width="380" height="185" src="https://www.youtube.com/embed/<?=$gale->idVideo?>" frameborder="0"></iframe>
                                <h5 class="bottom-margin-10">
                                    <?=$gale->titulo ?>
                                </h5>
                            </div>
                                            
                                            <?php  
                                        } ?>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>