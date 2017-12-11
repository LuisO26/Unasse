
        <section id="call-to-action" class="page-section no-pad bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 top-pad-20 bottom-pad-20 text-center white">
                        <h3 class="text-uppercase inline-block tb-margin-20" data-animation="fadeInUp">Descargas</h3>
                        
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="row">
                    
                        <?php 
                        $i = 0; 
                            foreach ($descargas as $gale) {
                                $i += 1; 
                                ?>
                                <div class="col-sm-12 col-md-6 post-list">
                                <div class="post-item">
                            <div class="post-image pull-left"><a href="<?= base_url()?>/<?=$gale->url?>">
                                <img src="<?= base_url()?>/assets/img/pdf.png" width="150" height="282" alt="" title="" /></a>
                            </div>
                            <h2 class="post-title">
                                <a href="<?= base_url()?>/<?=$gale->url?>"><?=$gale->titulo?></a>
                            </h2>
                            <div class="post-content"><?=$gale->descripcion?></div>
                            <div class="post-meta">
                            <!-- Author  
                            <span class="author">
                            <i class="fa fa-user"></i> John Deo</span> 
                            Meta Date -->
                             
                            <span class="time">
                            <i class="fa fa-calendar"></i> <?=$gale->fecha?></span> 
                            </div>
                        </div>
                        </div>
                        
                                            
                                            <?php  
                                        } ?>
                        
                        <!-- post -->
                        
                    
                </div>
            </div>
        </section>