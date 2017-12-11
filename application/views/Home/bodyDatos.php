
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