$(document).ready(function() {
        var baseUrl = 'http://' + window.location.host + '/unasse/index.php/'
        $('#pdfseleccionado').bind('click', 'iframe', function(event) {
                var url = $(this).attr('src')
                location.href = url

        })
        //agregar imagen a carrusel
        var num1 = 0
        $("#addSlider").click(function() {

                num1 = num1 + 1

                $("#Slider").append("<div class='form-group'><label for='slider'>Slider " + num1 + "</label><input type='text' class='form-control' name='slider_" + num1 + "' id='slider_" + num1 + "' placeholder='Ingrese texto de imagen " + num1 + "...'></div><div class='form-group'><label for='exampleInputFile'>Ingrese imagenes</label><input type='file' name='file[]' id='file"+num1+"' ></div>");

                $('#cantidadSliders').val(num1)
        });
        var num2 = 0
        $("#addVideo").click(function() {

                num2 = num2 + 1

                $("#Video").append("<div class='form-group'><label for='video'>Video " + num2 + "</label><input type='text' class='form-control' name='tvideo_" + num2 + "' id='tvideo_" + num2 + "' placeholder='Ingrese titulo video " + num2 + "...'></div><div class='form-group'><label for='exampleInputFile'>Ingrese Id Video</label><input type='text' class='form-control' name='video_" + num2 + "' id='video_" + num2 + "' ></div>");

                $('#cantidadVideos').val(num2)
        });
        $("#submitAddVideos").on('click', function() {
            $(".alert-primary1").show()
                        setTimeout(function() {
                                $(".alert-primary1").fadeOut();
                        }, 2000);
                //var $this = $('.btns');
                //$this.button('loading');
                var url = $('#url').val();
                console.log(num2)
                var fdata = new FormData()
                fdata.append("cantidadVideos", $("#cantidadVideos").val());
                for (var i = 1; i <= num2; i++) {
                        fdata.append("video_" + i, $("#video_" + i).val());
                        fdata.append("tvideo_" + i, $("#tvideo_" + i).val());
                        
                }
                console.log(fdata)

                $.ajax({
                        url: baseUrl + url, // url where to submit the request
                        type: "POST", // type of action POST || GET
                        data: fdata, // post data || get data
                        contentType: false,
                        processData: false,
                        success: function(result) {
                                // you can see the result from the console
                                // tab of the developer tools
                                console.log(result)
                                var result = $.parseJSON(result);
                                //console.log(obj);
                                if (result.status == 200) {
                                  console.log(result)
                                        $(".alert-success").show();
                                        $("#btnnuevo").attr('class', 'btn btn-primary collapsed');
                                        $("#btnnuevo").attr('aria-expanded', 'false');
                                        $("#collapseExample").attr('aria-expanded', 'false');
                                        $("#collapseExample").attr('class', 'collapse');
                                        //$("#collapseExample").attr('style','height: 0px; display:none; ');
                                        $("#form")[0].reset();
                                        //$this.button('reset');
                                        setTimeout('document.location.reload()', 2000)

                                }
                                if (result.status == 300) {
                                        $("#alert-danger").show();
                                        console.log(result)
                                        //$this.button('reset');

                                }
                                console.log(result)
                        },
                        error: function(xhr, resp, text) {
                                //$(".alert-warning").show();
                                //$this.button('reset');
                                console.log(xhr, resp, text);
                        }
                });
        });


        $("#submitAddSliders").on('click', function() {
            $(".alert-primary1").show()
                        setTimeout(function() {
                                $(".alert-primary1").fadeOut();
                        }, 2000);
                //var $this = $('.btns');
                //$this.button('loading');
                var url = $('#url').val();
                console.log(num1)
                var fdata = new FormData()
                fdata.append("cantidadSliders", $("#cantidadSliders").val());
                for (var i = 1; i <= num1; i++) {
                        fdata.append("slider_" + i, $("#slider_" + i).val());
                        $.each($('#file'+ i)[0].files, function(a, file) {
                        fdata.append('file-' +i, file);
                })
                }
                console.log(fdata)

                $.ajax({
                        url: baseUrl + url, // url where to submit the request
                        type: "POST", // type of action POST || GET
                        data: fdata, // post data || get data
                        contentType: false,
                        processData: false,
                        success: function(result) {
                                // you can see the result from the console
                                // tab of the developer tools
                                console.log(result)
                                var result = $.parseJSON(result);
                                //console.log(obj);
                                if (result.status == 200) {
                                  console.log(result)
                                        $(".alert-success").show();
                                        $("#btnnuevo").attr('class', 'btn btn-primary collapsed');
                                        $("#btnnuevo").attr('aria-expanded', 'false');
                                        $("#collapseExample").attr('aria-expanded', 'false');
                                        $("#collapseExample").attr('class', 'collapse');
                                        //$("#collapseExample").attr('style','height: 0px; display:none; ');
                                        $("#form")[0].reset();
                                        //$this.button('reset');
                                        setTimeout('document.location.reload()', 2000)

                                }
                                if (result.status == 300) {
                                        $("#alert-danger").show();
                                        console.log(result)
                                        //$this.button('reset');

                                }
                                console.log(result)
                        },
                        error: function(xhr, resp, text) {
                                //$(".alert-warning").show();
                                //$this.button('reset');
                                console.log(xhr, resp, text);
                        }
                });
        });

        //agregar preguntas test
        var num = 0
        $("#addQuestion").click(function() {

                num = num + 1

                $("#pregunta").append("<div class='form-group'><label for='pregunta'>Pregunta " + num + "</label><input type='text' class='form-control' name='pregunta_" + num + "' id='pregunta_" + num + "' placeholder='Ingrese pregunta " + num + "...'></div><label for='respuesta'>Respuestas</label><div class='form-group'><div class='col-md-3'><input type='text' class='form-control' name='respuesta1_" + num + "' id='respuesta1_" + num + "' placeholder='Ingrese respuesta 1...'></div><div class='col-md-3'><input type='text' class='form-control' name='respuesta2_" + num + "' id='respuesta2_" + num + "' placeholder='Ingrese respuesta 2...'></div><div class='col-md-3'><input type='text' class='form-control' name='respuesta3_" + num + "' id='respuesta3_" + num + "' placeholder='Ingrese respuesta 3...'></div><div class='col-md-3'><input type='text' class='form-control' name='respuesta4_" + num + "' id='respuesta4_" + num + "' placeholder='Ingrese respuesta 4...'></div></div>");

                $('#cantidadPreguntas').val(num)
        });


        $("#submitAddTest").on('click', function() {

                //var $this = $('.btns');
                //$this.button('loading');
                var url = $('#url').val();

                var fdata = new FormData()

                fdata.append("titulo", $("#titulo").val());
                fdata.append("descripcion", $("#descripcion").val());
                fdata.append("cantidadPreguntas", $("#cantidadPreguntas").val());
                for (var i = 1; i <= num; i++) {
                        fdata.append("pregunta_" + i, $("#pregunta_" + i).val());
                        fdata.append("respuesta1_" + i, $("#respuesta1_" + i).val());
                        fdata.append("respuesta2_", $("#respuesta2_" + i).val());
                        fdata.append("respuesta3_", $("#respuesta3_" + i).val());
                        fdata.append("respuesta4_" + i, $("#respuesta4_" + i).val());
                }
                console.log(fdata)

                $.ajax({
                        url: '<?= base_url()?>' + url, // url where to submit the request
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
                                        $(".alert-success").show();
                                        $("#btnnuevo").attr('class', 'btn btn-primary collapsed');
                                        $("#btnnuevo").attr('aria-expanded', 'false');
                                        $("#collapseExample").attr('aria-expanded', 'false');
                                        $("#collapseExample").attr('class', 'collapse');
                                        //$("#collapseExample").attr('style','height: 0px; display:none; ');
                                        $("#form")[0].reset();
                                        //$this.button('reset');
                                        setTimeout('document.location.reload()', 2000)

                                }
                                if (obj.status == 300) {
                                        $(".alert-danger").show();
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
        });

        $("#submit1").on('click', function() {

                //var $this = $('.btns');
                //$this.button('loading');


                // send ajax
                $.ajax({
                        url: baseUrl + 'Admin/iniciar_sesion', // url where to submit the request
                        type: "POST", // type of action POST || GET
                        data: {
                                correo: $('#correo').val(),
                                contrasena: $("#contrasena").val()
                        },
                        //$("#form").serialize(), // post data || get data
                        success: function(result) {
                                // you can see the result from the console
                                // tab of the developer tools
                                console.log(result);

                                window.location.reload();
                                if (result.status == true) {
                                        // $(".alert-success").show();
                                        //$this.button('reset');

                                }
                        },
                        error: function(xhr, resp, text) {
                                //$(".alert-warning").show();
                                //$this.button('reset');
                                console.log(xhr, resp, text);
                        }
                });
        });
        $("#submitVideo").on('click', function() {

                //var $this = $('.btns');
                //$this.button('loading');


                // send ajax
                $.ajax({
                        url: baseUrl + 'HomeAdmin/Cambiar_Video', // url where to submit the request
                        type: "POST", // type of action POST || GET
                        data: {
                                idVideo: $('#urlYoutube').val(),
                                titulo: $("#tituloVideo").val()
                        },
                        //$("#form").serialize(), // post data || get data
                        success: function(result) {
                                // you can see the result from the console
                                // tab of the developer tools
                                console.log(result);
                                var result = $.parseJSON(result);
                                
                                if (result.status == 200) {
                                        // $(".alert-success").show();
                                        //$this.button('reset');
                                        window.location.reload();

                                }
                        },
                        error: function(xhr, resp, text) {
                                //$(".alert-warning").show();
                                //$this.button('reset');
                                console.log(xhr, resp, text);
                        }
                });
        });
        $("#enviarDatos").on('click', function() {
                if ($('#nombre_completo').val() == '' || $('#estado').val() == '' || $('#municipio').val() == '' || $('#observaciones').val() == '') {
                        $(".alert-danger1").show()
                        setTimeout(function() {
                                $(".alert-danger1").fadeOut();
                        }, 2000);


                        return false
                }
                console.log($("#formDato").serialize())
                $.ajax({
                        url: baseUrl + 'DatosAdmin/agregar', // url where to submit the request
                        type: "POST", // type of action POST || GET
                        data: $("#formDato").serialize(), // post data || get data
                        success: function(result) {
                                // you can see the result from the console
                                // tab of the developer tools
                                var obj = $.parseJSON(result);
                                console.log(obj);
                                if (obj.status == 200) {
                                        $(".alert-success").show();
                                         console.log(obj)
                                }
                                if (obj.status == 300) {
                                        $(".alert-danger").show();
                                        console.log(obj)
                                        //$this.button('reset');

                                }
                        },
                        error: function(xhr, resp, text) {
                                $(".alert-danger").show();
                                //$this.button('reset');
                                console.log(xhr, resp, text);
                        }
                });

        });

        $("#enviarCorreo").on('click', function() {
                if ($('#nombre').val() == '' || $('#email').val() == '' || $('#mensaje').val() == '') {
                        $(".alert-danger1").show()
                        setTimeout(function() {
                                $(".alert-danger1").fadeOut();
                        }, 2000);


                        return false
                }
                console.log($("#formContacto").serialize())
                $.ajax({
                        url: baseUrl + 'Home/EnviarMail', // url where to submit the request
                        type: "POST", // type of action POST || GET
                        data: $("#formContacto").serialize(), // post data || get data
                        success: function(result) {
                                // you can see the result from the console
                                // tab of the developer tools
                                var obj = $.parseJSON(result);
                                console.log(obj);
                                if (obj.status == 200) {
                                        $(".alert-success").show();

                                }
                                if (obj.status == 300) {
                                        $(".alert-danger").show();
                                        console.log(result)
                                        //$this.button('reset');

                                }
                        },
                        error: function(xhr, resp, text) {
                                $(".alert-warning").show();
                                //$this.button('reset');
                                console.log(xhr, resp, text);
                        }
                });

        });

        
        $("#borrar_galeria").on('click', function() {

                //var $this = $('.btns');
                //$this.button('loading');
                var id = $('#id').val();

                var fdata = new FormData()

                fdata.append("id", id);
                console.log(fdata)

                $.ajax({
                        url: baseUrl + 'GaleriaAdmin/borrar', // url where to submit the request
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
        });
        $("#submitAdd").on('click', function() {

                //var $this = $('.btns');
                //$this.button('loading');
                $(".alert-primary").show();
                var url = $('#url').val();

                var fdata = new FormData()

                fdata.append("titulo", $("#titulo").val());
                fdata.append("descripcion", $("#descripcion").val());
                $.each($('#file')[0].files, function(i, file) {
                        fdata.append('file-' + i, file);
                });
                console.log(fdata)

                $.ajax({
                        url: baseUrl + url, // url where to submit the request
                        type: "POST", // type of action POST || GET
                        data: fdata, // post data || get data
                        contentType: false,
                        processData: false,
                        success: function(result) {
                                // you can see the result from the console
                                // tab of the developer tools
                                var obj = $.parseJSON(result);
                                console.log(obj);
                                $(".alert-primary").hide();
                                if (obj.status == 200) {
                                        $(".alert-success").show();
                                        $("#btnnuevo").attr('class', 'btn btn-primary collapsed');
                                        $("#btnnuevo").attr('aria-expanded', 'false');
                                        $("#collapseExample").attr('aria-expanded', 'false');
                                        $("#collapseExample").attr('class', 'collapse');
                                        //$("#collapseExample").attr('style','height: 0px; display:none; ');
                                        $("#form")[0].reset();
                                        //$this.button('reset');
                                        setTimeout('document.location.reload()', 2000)

                                }
                                if (obj.status == 300) {
                                        $(".alert-danger").show();
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
        });
});