
        <section id="call-to-action" class="page-section no-pad bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 top-pad-20 bottom-pad-20 text-left white">
                        <h3 class="text-uppercase inline-block tb-margin-20" data-animation="fadeInUp">Almacenar Datos </h3>
                        
                    </div>
                </div>
            </div>
        </section>
        <section id="contact-us" class="page-section">
                <div class="container">
                    <div class="row">
                   <div class="contact-form">
                        <!-- Form Begins -->
                        <form  id="formDato" >
                                <div class="col-md-6">
                                  <input type="hidden" class="form-control" id="tabla" name="tabla" value="datosInternos">
                                    <!-- Field 1 -->
                                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nombre*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nombre_completo" id="nombre_completo" placeholder="Nombre completo...">
                    </div>
                  </div>
                                    <!-- Field 2 -->
                                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Edad</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="edad" name="edad" placeholder="Edad...">
                    </div>
                  </div>
                                    <!-- Field 3 -->
                                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Estado Civil</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="estado_civil" name="estado_civil" placeholder="Estado Civil">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Dependientes</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="dependinetes" id="dependinetes" placeholder="Dependientes">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Ocupación</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="ocupacion" name="ocupacion" placeholder="Ocupación">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Derecho Violentado</label>
                    <div class="col-sm-10">
                      <select name="derecho_violentado" class="form-control">
                  <option value="vida" >VIDA</option>
                  <option value="salud" >SALUD </option>
                  <option value="educacion">EDUCACION</option>
                  <option value="decidir">DECIDIR</option>
                  <option value="morales">MORALES</option>
                  <option value="trabajo">TRABAJO</option>
                  <option value="familia">FAMILIA</option>
                  <option value="sexuales">SEXUALES</option>
                  <option value="reproductivos">REPRODUCTIVOS</option>
                  <option value="conexos">CONEXOS</option>

                </select>
                    </div>
                  </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Sexo</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="sexo" name="sexo" placeholder="Sexo...">
                    </div>
                  </div>
                                    <!-- Field 4 -->
                                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Genero</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="genero" name="genero" placeholder="Genero...">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Estado*</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="estado" name="estado" placeholder="Estado...">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Municipio*</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="municipio" name="municipio" placeholder="Municipio...">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email...">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Acompañamiento</label>
                    <div class="col-sm-9">
                      <select name="acompanamiento" class="form-control">
                  <option value="civil">CIVIL</option>
                  <option value="familiar">FAMILIAR</option>
                  <option value="amparo">AMPARO</option>
                  <option value="administrativo">ADMINISTRATIVO</option>
                  <option value="penal">PENAL</option>
                  <option value="queja">QUEJA</option>
                </select>
                    </div>
                  </div>
                </div>
                                    <!-- Button -->
                                    
                                <div class="col-md-12">
                                    <div class="textarea-message form-group">
                                        <textarea name="observaciones" id="observaciones" class="textarea-message height-82 form-control" placeholder="Escriba sus observaciones*..." rows="4" ></textarea>
                                    </div>
                                    <button class="btn btn-default btn-block" id="enviarDatos" type="button">Enviar<i class="icon-paper-plane"></i></button>
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
<div style="display: none" class=" alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Enviando!</strong> Enviando mensaje...
</div>
<div style="display: none"  class=" alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> Problemas al enviar mensaje, intente de nuevo mas tarde.
</div>
<div style="display: none"  class=" alert alert-warning alert-danger1 alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Revisar!</strong> Debes de llenar los campos con *.
</div>
    </div>
            </section>