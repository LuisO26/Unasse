<section id="works" class="page-section">
           <div class="mixed-grid pad">
            <div class="section-title">
                    <!-- Heading -->
                    <h2 class="title"><?=$titulo ?></h2>
                </div>
                <div class="masonry-grid grid-col-4" data-gutter="0">
                    <div class="grid-sizer"></div>
                    <!-- Item 1 -->
                    <?php 
                            foreach ($imagenes as $img) {
                                ?>
                                <div class="grid-item all web">
                        <img style="height: 300px; width: 500px" src="<?= base_url()?>assets/img/galeria/<?=$img->nombre ?>" alt="Recent Work" />
                        <div class="img-overlay"></div>
                        <div class="figcaption">
                        <!-- Image Popup-->
                        <a href="<?= base_url()?><?=$img->url ?>" data-rel="prettyPhoto[portfolio]">
                            <i class="fa fa-search"></i>
                        </a> </div>
                    </div>
                                            
                                            <?php  
                                        } ?>
                    
                </div>
            </div>
        </section>