
        <section id="call-to-action" class="page-section no-pad bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 top-pad-20 bottom-pad-20 text-left white">
                        <h3 class="text-uppercase inline-block tb-margin-20" data-animation="fadeInUp">Contacto </h3>
                        
                    </div>
                </div>
            </div>
        </section>
        <section id="contact-us" class="page-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 contact-info">
                            <div class="row text-center">
                                <address class="col-sm-4 col-md-4">
                                    <i class="fa fa-map-marker i-9x icons-circle text-color light-bg hover-black"></i>
                                    <div class="title">Dirección</div>
                                    Calle 47 487 X 54 y 56, Centro, 97000 Mérida, Yuc.
                                </address>
                                <address class="col-sm-4 col-md-4">
                                    <i class="fa fa-microphone i-9x icons-circle text-color light-bg hover-black"></i>
                                    <div class="title">Teléfono</div>
                                    <div> 9-24-30-44</div>
                                </address>
                                <address class="col-sm-4 col-md-4">
                                    <i class="fa fa-envelope i-9x icons-circle text-color light-bg hover-black"></i>
                                    <div class="title">Correo Electrónico</div>
                                    <div>Información: <a href="mailto:contacto@unasse.org">contacto@unasse.org</a></div>
                                </address>
                            </div>
                            <hr>
                            <h4>Envíanos un mensaje y en breve nos pondrémos en contacto contigo. </h4>
                            <br />
                        </div>
                    <p class="form-message" style="display: none;"></p>
                    <div class="contact-form">
                        <!-- Form Begins -->
                        <form  id="formContacto" >
                                <div class="col-md-6">
                                    <!-- Field 1 -->
                                    <div class="input-text form-group">
                                        <input type="text" name="nombre" id="nombre" class="input-name form-control" placeholder="Nombre Completo*" />
                                    </div>
                                    <!-- Field 2 -->
                                    <div class="input-email form-group">
                                        <input type="email" name="email" id="email" class="input-email form-control" placeholder="Correo*"/>
                                    </div>
                                    <!-- Field 3 -->
                                    <div class="input-email form-group">
                                        <input type="text" name="telefono" id="telefono" class="input-phone form-control" placeholder="Teléfono"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Field 4 -->
                                    <div class="textarea-message form-group">
                                        <textarea name="mensaje" id="mensaje" class="textarea-message height-82 form-control" placeholder="Por favor escriba su mensaje" rows="2" ></textarea>
                                    </div>
                                    <!-- Button -->
                                    <button class="btn btn-default btn-block" id="enviarCorreo" type="button">Enviar<i class="icon-paper-plane"></i></button>
                                </div>
                            </div>
                        </form>
                        <!-- Form Ends -->
                    </div>

                </div>

                <div class="container">
        <div style="display: none" class=" alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Listo!</strong> Mensaje Enviado.
</div>
<div style="display: none"  class=" alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> Problemas al enviar mensaje, intente de nuevo mas tarde.
</div>
<div style="display: none"  class=" alert alert-danger alert-danger1 alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Info!</strong> Revise los campos obligatorios.
</div>
    </div>
            </section><!-- page-section -->
            <div id="get-quote" class="white bg-color get-a-quote black text-center" data-appear-animation="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 white">Están violando tus derechos 
                    <a class="black" href="<?=base_url()?>Home/DatosInternos">¡REPORTALO!</a></div>
                </div>
            </div>
        </div>
            <section id="map">
                <div class="map-section">
                    <div class="map-canvas"
                        data-zoom="18"
                        data-lat="20.975079"
                        data-lng="-89.618578"            
                        data-type="roadmap"
                        data-hue="#ffc400"
                        data-title="Unasse"
                        data-content="Unasse<br>
                        Contacto: 9-24-30-44<br>
                        <a href='mailto:contacto@unasse.org'>contacto@unasse.org</a>"                         
                        style="height: 376px;">
                    </div>
                </div>
            </section> <!-- map -->