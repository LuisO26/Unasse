
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
                                    49 Archdale, 2B Charleston, New York City, USA
                                </address>
                                <address class="col-sm-4 col-md-4">
                                    <i class="fa fa-microphone i-9x icons-circle text-color light-bg hover-black"></i>
                                    <div class="title">Teléfono</div>
                                    <div>Support: +123 (345) 6789</div>
                                </address>
                                <address class="col-sm-4 col-md-4">
                                    <i class="fa fa-envelope i-9x icons-circle text-color light-bg hover-black"></i>
                                    <div class="title">Correo Electronico</div>
                                    <div>Support: <a href="mailto:support@example.com">support@example.com</a></div>
                                </address>
                            </div>
                            <hr>
                            <h4>Envianos un mensaje y en breve nos pondremos en contacto contigo </h4>
                            <br />
                        </div>
                    <p class="form-message" style="display: none;"></p>
                    <div class="contact-form">
                        <!-- Form Begins -->
                        <form role="form" name="contactform" id="contactform" method="post" action="php/contact-form.php">
                                <div class="col-md-6">
                                    <!-- Field 1 -->
                                    <div class="input-text form-group">
                                        <input type="text" name="contact_name" class="input-name form-control" placeholder="Nombre Completo..." />
                                    </div>
                                    <!-- Field 2 -->
                                    <div class="input-email form-group">
                                        <input type="email" name="contact_email" class="input-email form-control" placeholder="Correo..."/>
                                    </div>
                                    <!-- Field 3 -->
                                    <div class="input-email form-group">
                                        <input type="text" name="contact_phone" class="input-phone form-control" placeholder="Teléfono..."/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Field 4 -->
                                    <div class="textarea-message form-group">
                                        <textarea name="contact_message" class="textarea-message height-82 form-control" placeholder="Escribas su mensaje..." rows="2" ></textarea>
                                    </div>
                                    <!-- Button -->
                                    <button class="btn btn-default btn-block" type="submit">Enviar<i class="icon-paper-plane"></i></button>
                                </div>
                            </div>
                        </form>
                        <!-- Form Ends -->
                    </div>
                </div>
            </section><!-- page-section -->
            <section id="map">
                <div class="map-section">
                    <div class="map-canvas"
                        data-zoom="12"
                        data-lat="-35.2835"
                        data-lng="149.128"            
                        data-type="roadmap"
                        data-hue="#ffc400"
                        data-title="Austin"
                        data-content="Company Name<br>
                        Contact: +012 (345) 6789<br>
                        <a href='mailto:info@youremail.com'>info@youremail.com</a>"                         
                        style="height: 376px;">
                    </div>
                </div>
            </section> <!-- map -->