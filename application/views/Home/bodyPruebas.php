
        <section id="call-to-action" class="page-section no-pad bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 top-pad-20 bottom-pad-20 text-center white">
                        <h3 class="text-uppercase inline-block tb-margin-20" data-animation="fadeInUp">Pruebas</h3>
                        
                    </div>
                </div>
            </div>
        </section>
        <section id="events" class="page-section">
            <div class="container">
                <div class="section-title" data-animation="fadeInUp">
                    <h2 class="title">¡Realiza las diferentes pruebas que tenemos para ti!</h2>
                </div>
                <div class="row bottom-pad-30">
                    <?php 
                        $i = 0; 
                            foreach ($datosg as $gale) {
                                $i += 1; 
                                ?>
                                <input type="hidden" id="<?= $gale->id ?>">
                            <div class="col-sm-4" data-animation="fadeInLeft">
                        <p class="text-center opacity">
                           <a  data-toggle="modal" data-target="#myModal" onClick="abrir(<?=$gale->id?>)" href="#"> <img src="<?=base_url()?><?=$gale->url?>" width="370" height="185" alt="" /></a>
                        </p>
                        <h4 class="bottom-margin-10 text-center">
                            <a  data-toggle="modal" data-target="#myModal" onClick="abrir(<?=$gale->id?>)" class="black"><?=$gale->titulo?></a>
                        </h4>
                        <p><?=$gale->descripcion?></p>
                        <div class="meta top-pad-10">
                         
                        <span class="time">
                        <i class="fa fa-calendar"></i> <?=$gale->fecha?></span> 
                        </div>
                    </div>
                                            
                                            <?php  
                                        } ?>
                    
                    
                </div>
                <input type='hidden' name='numeroPregunta' id='numeroPregunta'  >
                <input type='hidden' name='cantidadP' id='cantidadP'  >
                
                <div class="clearfix"></div>

            </div>
        </section> 


        <div class="modal fade top-pad-70" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body " >
        <div class='row ' id="preguntas-modal">
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="bSiguiente">Siguiente</button>
      </div>
    </div>
  </div>
</div>