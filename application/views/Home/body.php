
        <section class="slider" id="home">
            <div class="tp-banner">
                <ul>
                    <?php 
                            foreach ($datosg as $gale) {
                                ?>
                                <li data-delay="7000" data-transition="fade" data-slotamount="7" data-masterspeed="2000">
                        <div class="elements">
                            <h1 class="tp-caption tp-resizeme center skewtotop title bold " style="color: white; background-color: #54a1a5; padding: 25px ; padding-top: 20px" data-x="400" data-y="250"
                            data-speed="1000" data-start="1700" data-easing="Power4.easeOut" data-endspeed="500"
                            data-endeasing="Power1.easeIn">
                                <strong><?=$gale->titulo ?></strong>
                            </h1>
                            
                        </div>
                        <img src="<?= base_url()?><?=$gale->url ?>" alt="" data-bgfit="cover" data-bgposition="center top"
                        data-bgrepeat="no-repeat" />
                    </li>
                                <
                                            
                                            <?php  
                                        } ?>
                    
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </section>
        <!-- slider -->
        <section style="margin:0px">
            <div class="row" style="background-color: #55a2a6; padding-top: 25px; padding-bottom: 25px;">
                <h4 class="text-center white" style="margin:0px;">Unidad de Atención Psicológica y Educativa para el Crecimiento Personal.</h4>
            </div>
        </section>
         <section id="about-us" class="page-section">
            <div class="container">
            <div class="row">
                        <div class="col-md-12">
                            <div class="row text-center">
                                <!-- Bakery block -->
                                <div class="col-sm-3 col-md-3 bakery-block" data-animation="fadeInLeft">
                                    <!-- icon -->
                                    <i  class="icon-heart2   medium fill-icon fa-3x icons-circle border-color"></i>
                                    <h5>Acerca de nosotros</h5>
                                </div>
                                <!-- Bakery block -->
                                <div class="col-sm-3 col-md-3 bakery-block" data-animation="fadeInUp">
                                    <!-- icon -->
                                    <!-- icon -->
                                    <i class="icon-download9 medium fill-icon fa-3x icons-circle border-color"></i>
                                    <h5> Descarga de información</h5>
                                    
                                </div>
                                <!-- Bakery block -->
                                <div class="col-sm-3 col-md-3 bakery-block" data-animation="fadeInUp">
                                    <!-- icon -->
                                    <i class="icon-compose medium fill-icon fa-3x icons-circle border-color"></i>
                                    <h5>Responde nuestro test</h5>
                                </div>
                                <div class="col-sm-3 col-md-3 bakery-block" data-animation="fadeInRight">
                                    <!-- icon -->
                                    <i class="icon-camera medium fill-icon fa-3x icons-circle border-color"></i>
                                    <h5>Galería de fotos</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section id="about-us" class="page-section">
            <div class="container">
                <div class="row text-center ">
                    <div class="col-md-12" data-animation="fadeInLeft">
                        <div class="section-title text-center">
                            <h1 class="title">¿QUÉ ES LO QUE HACEMOS?</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-md-4" data-animation="fadeInLeft">
                        <h4 class="text-left bottom-margin-10">Psicología</h4>
                        <p class="text-left margin-lr justificado">Brindar asesoría psicológica a bajos costos a la población en general, incluyendo a niños, niñas y adolescentes con problemas emocionales y conductuales así como atención especializada a personas víctimas de abuso sexual y/o violencia intrafamiliar.</p>
                    </div>
                    <div class="col-sm-4 col-md-4" data-animation="fadeInUp">
                        <h4 class="text-left bottom-margin-10">Asesoría Legal</h4>
                        <p class="text-left margin-lr justificado">Brindamos asesoría jurídica derivado del Derecho Civil Familiar a personas que no cuentan con los recursos para el pago de servicios particulares. Con el apoyo de un equipo profesional y especializado, prevenimos y atendemos la violencia física, psicológica, sexual y económica.</p>
                    </div>
                    <div class="col-sm-4 col-md-4" data-animation="fadeInRight">
                        <h4 class="text-left bottom-margin-10">Conferencias y Talleres</h4>
                        <p class="text-left margin-lr justificado">Sensibilizar al menor sobre los riesgos psicosociales, así como fomentar el cuidado en la salud, promover cambios de actitud y una adecuada utilización del tiempo libre enfocada al beneficio de su comunidad. Dirigido a niños y niñas de 6 a 12 años.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-us-->
        <section id="who-we-are" class="page-section no-pad light-bg border-tb">
            <div align="center"  class="container-fluid who-we-are">
                <div class="row">
                    <div class="col-md-12 pad-60">
                        <?php 
                            foreach ($datosg1 as $gale) {
                                ?>
                            <div class="section-title text-center" data-animation="fadeInUp">
                            <!-- Title -->
                            <h2 class="title text-uppercase"><?=$gale->titulo?></h2>
                        </div>
                        <iframe class="youtube-player" type="text/html" width="900" height="485" src="https://www.youtube.com/embed/<?=$gale->idVideo?>" frameborder="0"></iframe>
                                            
                                            <?php  
                                        } ?>
                        
                        
                        
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonials" class="page-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 testimonails" data-animation="fadeInRight">
                            <div class="owl-carousel pagination-1 dark-switch" data-pagination="true" data-autoplay="true" data-navigation="false" data-items="1" data-desktop="1">
                                <div class="item pad-10">
                                    <div class="desc-border bottom-arrow margin-lr-15p">
                                        <blockquote class="small-text text-center ">
                                            "Cualquier forma de violencia hacia mi persona afecta el disfrute plenno de mi sexualidad." 
"Tengo derecho a la libertad, a la seguridad jurídica y a la ingegridad física y psicológica." 
                                        </blockquote>
                                    </div>
                                    <div class="client-details text-center">
                                        <div class="client-details">
                                            <!-- Name -->
                                            <strong class="text-color">6.- DERECHO A VIVIR LIBRE DE VIOLENCIA SEXUAL</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="item pad-10">
                                    <div class="desc-border bottom-arrow margin-lr-15p">
                                        <blockquote class="small-text text-center ">
                                           "Existen varios tipos de familias, uniones y convivencia social." 
"Tengo derecho a decidir libremente con quién compartir mi vida, mi sexualidad, mis emociones y afectos." 
                                        </blockquote>
                                    </div>
                                    <div class="client-details text-center">
                                        <div class="client-details">
                                            <!-- Name -->
                                            <strong class="text-color">4.- DERECHO A DECIDIR CON QUIÉN COMPARTIR MI VIDA Y MI SEXUALIDAD.
</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="item pad-10">
                                    <div class="desc-border bottom-arrow margin-lr-15p">
                                        <blockquote class="small-text text-center ">
                                            "Existen diversas formas de vivir la sexualidad." 
"Tengo derecho a que se respeten las desiciones que tomo sobre mi cuerpo y mi sexualidad."
                                        </blockquote>
                                    </div>
                                    <div class="client-details text-center">
                                        <div class="client-details">
                                            <!-- Name -->
                                            <strong class="text-color">1.- DERECHO A DECIDIR DE FORMA LIBRE SOBRE MI CUERPO.</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                  
                    </div>
                </div>
            </section>
        
        