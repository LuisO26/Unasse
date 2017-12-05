
        <section id="call-to-action" class="page-section no-pad bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 top-pad-20 bottom-pad-20 text-left white">
                        <h3 class="text-uppercase inline-block tb-margin-20" data-animation="fadeInUp">Galería</h3>
                        
                    </div>
                </div>
            </div>
        </section>
        <section id="service" class="page-section">
            <div class="container">
                <div class="section-title">
                    <!-- Heading -->
                    <h2 class="title">Conoce nuestra galería de fotos</h2>
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
                                <p class="text-center">
                                    <a href="<?= base_url()?><?=$imagenes[$i-1]['url']?>" class="opacity" data-rel="prettyPhoto[portfolio]">
                                        <img src="<?= base_url()?><?=$imagenes[$i-1]['url']?>" width="370" height="185" alt="" />
                                    </a>
                                </p>
                                <h5 class="bottom-margin-10">
                                    <a href="#" class="black"><?=$gale->titulo ?></a>
                                </h5>
                                <p><?=$gale->descripcion ?></p>
                            </div>
                                            
                                            <?php  
                                        } ?>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>