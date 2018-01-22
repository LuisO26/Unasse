<!-- Scripts -->
<script type="text/javascript" src="<?= base_url()?>assets/js/jquery.min.js"></script> 
<script type="text/javascript" src="<?= base_url()?>assets/js/functions.js"></script>
    <script>
        function borrar(vid, controller) {
                var idborrar = vid

                var fdata = new FormData()

                fdata.append("id", idborrar);
                console.log(fdata)

                $.ajax({
                        url: '<?=base_url()?>' + controller + '/borrar', // url where to submit the request
                        type: "POST", // type of action POST || GET
                        data: fdata, // post data || get data
                        contentType: false,
                        processData: false,
                        success: function(result) {
                                // you can see the result from the console
                                // tab of the developer tools
                                var obj = $.parseJSON(result);
                                console.log(obj);
                                if (obj.status == 200) {
                                        $("#alert-borrado").show();
                                        setTimeout('document.location.reload()', 2000)

                                }
                                if (obj.status == 300) {
                                        $("#alert-borradomal").show();
                                        console.log(result)
                                        //$this.button('reset');

                                }
                        },
                        error: function(xhr, resp, text) {
                                //$(".alert-warning").show();
                                //$this.button('reset');
                                console.log(xhr, resp, text);
                        }
                });

        }
         function abrir(id) {
                var idConsulta = id

                var fdata = new FormData()

                fdata.append("id_prueba", idConsulta);
                console.log(fdata)
                $(".mostrar").remove()
                                        $(".esconder").remove()

                $.ajax({
                        url: '<?=base_url()?>Home/Preguntas', // url where to submit the request
                        type: "POST", // type of action POST || GET
                        data: fdata, // post data || get data
                        contentType: false,
                        processData: false,
                        success: function(obj) {
                                // you can see the result from the console
                                // tab of the developer tools
                                var obj = $.parseJSON(obj);
                                console.log(obj);
                                if (obj.cantidad_preguntas) {
    
                                    console.log('200')
                                    console.log(obj.cantidad_preguntas)
                                    var ver = "mostrar";
                                    $(".mostrar").remove()
                                        $(".esconder").remove()
                                    for (var i = 0; i < obj.cantidad_preguntas; i++) {
                                        var a = i+1
                                        if (i>0) {ver = "esconder"}
                                        var a = i+1
                                        if (i===0) {
                                            $("#preguntas-modal").append("<div class='col-md-12 ' id='pregunta"+i+"'><h3>"+obj.preguntas[i]+"</h3><hr><div class='radio '><label><input type='radio' name='optionsRadios' id='respuest1-"+i+"' value='"+obj.respuestas[3]+"' >"+obj.respuestas[0]+"</label></div><div class='radio '><label><input type='radio' name='optionsRadios' id='respuest2-"+i+"' value='"+obj.respuestas[3]+"' >"+obj.respuestas[1]+"</label></div><div class='radio '><label><input type='radio' name='optionsRadios' id='respuest3-"+i+"' value='"+obj.respuestas[3]+"' >"+obj.respuestas[2]+"</label></div><div class='radio '><label><input type='radio' name='optionsRadios' id='respuest4-"+i+"' value='"+obj.respuestas[3]+"' >"+obj.respuestas[3]+"</label></div> ");
                                        }
                                        if (i!==0) {
                                            $("#preguntas-modal").append("<div class='col-md-12 esconder' id='pregunta"+i+"'><h3>"+obj.preguntas[i]+"</h3><hr><div class='radio '><label><input type='radio' name='optionsRadios' id='respuest1-"+i+"' value='"+obj.respuestas[3]+"' >"+obj.respuestas[0]+"</label></div><div class='radio '><label><input type='radio' name='optionsRadios' id='respuest2-"+i+"' value='"+obj.respuestas[3]+"' >"+obj.respuestas[1]+"</label></div><div class='radio '><label><input type='radio' name='optionsRadios' id='respuest3-"+i+"' value='"+obj.respuestas[3]+"' >"+obj.respuestas[2]+"</label></div><div class='radio '><label><input type='radio' name='optionsRadios' id='respuest4-"+i+"' value='"+obj.respuestas[3]+"' >"+obj.respuestas[3]+"</label></div> ");
                                        }
                                        $("#cantidadP").val(obj.cantidad_preguntas)

                                    }
                                    


                                }
                                if (obj.status == 300) {
                                        console.log(obj)
                                        console.log('300')

                                }
                        },
                        error: function(xhr, resp, text) {
                                //$(".alert-warning").show();
                                //$this.button('reset');
                                console.log(xhr, resp, text);
                        }
                });

        }
        

        $("#bSiguiente").click(function(event) {

            var nume 
            if (!$("#numeroPregunta").val()) {
                nume=0
            }else{
              nume = $("#numeroPregunta").val()  
            }
            var cantidadP = $("#cantidadP").val()
            $("#pregunta"+nume).addClass("esconder")
            nume= parseInt(nume)+1
            if (nume < cantidadP) {
                $("#pregunta"+nume).removeClass("esconder")

            }
            $("#numeroPregunta").val(nume)
            if (parseInt(nume)+1 == cantidadP) {
                $("#bSiguiente").text("ver resultado")
                
            }
            if (nume == cantidadP) {
                $("#bSiguiente").prop('disabled', true)
                resultadoTest()
            }
            
            console.log(nume)
        });
         function resultadoTest() {
            $("#preguntas-modal").addClass("text-center fact-counter")
                $("#preguntas-modal").append('<div class="post-title col-sm-6 col-md-6"><div class="section-title"><h2 class="title">Bar Chart</h2></div><div id="barChart"><canvas id="barChartmist" height="450" width="600"></canvas></div></div> ');

        }
    </script>
    
    <script type="text/javascript" src="<?= base_url()?>assets/js/bootstrap.min.js"></script> 
    <!-- Menu jQuery plugin -->
     
    <script type="text/javascript" src="<?= base_url()?>assets/js/hover-dropdown-menu.js"></script> 
    <!-- Menu jQuery Bootstrap Addon --> 
    <script type="text/javascript" src="<?= base_url()?>assets/js/jquery.hover-dropdown-menu-addon.js"></script> 
    <!-- Scroll Top Menu -->
     
    <script type="text/javascript" src="<?= base_url()?>assets/js/jquery.easing.1.3.js"></script> 
    <!-- Sticky Menu --> 
    <script type="text/javascript" src="<?= base_url()?>assets/js/jquery.sticky.js"></script> 
    <!-- Bootstrap Validation -->
     
    <script type="text/javascript" src="<?= base_url()?>assets/js/bootstrapValidator.min.js"></script> 
    <!-- Revolution Slider -->
     
    <script type="text/javascript" src="<?= base_url()?>assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
    <script type="text/javascript" src="<?= base_url()?>assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
    <script type="text/javascript" src="<?= base_url()?>assets/js/revolution-custom.js"></script> 
    <!-- Portfolio Filter -->
     
    <script type="text/javascript" src="<?= base_url()?>assets/js/jquery.mixitup.min.js"></script> 
    <!-- Animations -->
     
    <script type="text/javascript" src="<?= base_url()?>assets/js/jquery.appear.js"></script> 
    <script type="text/javascript" src="<?= base_url()?>assets/js/effect.js"></script> 
    <!-- Owl Carousel Slider -->
     
    <script type="text/javascript" src="<?= base_url()?>assets/js/owl.carousel.min.js"></script> 
    <!-- Pretty Photo Popup -->
     
    <script type="text/javascript" src="<?= base_url()?>assets/js/jquery.prettyPhoto.js"></script> 
    <!-- Parallax BG -->
     
    <script type="text/javascript" src="<?= base_url()?>assets/js/jquery.parallax-1.1.3.js"></script> 
    <!-- Fun Factor / Counter -->
     
    <script type="text/javascript" src="<?= base_url()?>assets/js/jquery.countTo.js"></script> 
    <script type="text/javascript" src="<?= base_url()?>assets/js/jquery.easypiechart.min.js"></script> 
    <!-- Twitter Feed -->
    <!-- Background Video -->
     
    <script type="text/javascript" src="<?= base_url()?>assets/js/jquery.mb.YTPlayer.js"></script> 
    <script type="text/javascript" src="<?= base_url()?>assets/js/isotope.min.js"></script>
    <!-- Custom Js Code -->
     
    <script type="text/javascript" src="<?= base_url()?>assets/js/custom.js"></script> 
    <!-- Scripts --></body>
</html>