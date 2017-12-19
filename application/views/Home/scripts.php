<!-- Scripts -->
<script type="text/javascript" src="<?= base_url()?>assets/js/jquery.min.js"></script> 

<script type="text/javascript">
    $('#pdfseleccionado').bind('click', 'iframe', function(event) { 
        var url = $(this).attr('src')
        location.href = url

     })
    $("#submit1").on('click', function(){

    //var $this = $('.btns');
    //$this.button('loading');
    
      
            // send ajax
            $.ajax({
                url: '<?= base_url()?>index.php/Admin/iniciar_sesion', // url where to submit the request
                type : "POST", // type of action POST || GET
                data : { correo: $('#correo').val(),
                contrasena: $("#contrasena").val()},
                //$("#form").serialize(), // post data || get data
                success : function(result) {
                    // you can see the result from the console
                    // tab of the developer tools
                    console.log(result);

                    window.location.reload();
                    if(result.status == true) {
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
    $(document).ready(function() {
  
});
    $("#enviarCorreo").on('click', function(){
        if ($('#nombre').val()== ''|| $('#email').val()==''|| $('#mensaje').val()== '') {
            $(".alert-danger1").show()
            setTimeout(function() {
               $(".alert-danger1").fadeOut();           
          },2000);
          

            return false
        }
        console.log($( "#formContacto" ).serialize())
         $.ajax({
                url: '<?= base_url()?>Home/EnviarMail', // url where to submit the request
                type : "POST", // type of action POST || GET
                data :  $( "#formContacto" ).serialize(), // post data || get data
                success : function(result) {
                    // you can see the result from the console
                    // tab of the developer tools
                    var obj = $.parseJSON(result);
                    console.log(obj);
                    if(obj.status == 200) {
                      $(".alert-success").show();
                       
                    }
                    if(obj.status == 300) {
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
    $("#borrar_galeria").on('click', function(){

    //var $this = $('.btns');
    //$this.button('loading');
    var id =  $('#id').val();
            
             var fdata = new FormData()
    
   fdata.append("id",id);
       console.log(fdata)

            $.ajax({
                url: '<?= base_url()?>GaleriaAdmin/borrar', // url where to submit the request
                type : "POST", // type of action POST || GET
                data :  fdata, // post data || get data
                contentType: false,
                processData: false,
                success : function(result) {
                    // you can see the result from the console
                    // tab of the developer tools
                    var obj = $.parseJSON(result);
                    console.log(obj);
                    if(obj.status == 200) {
                      $("#alert-borrado").show();
                       setTimeout('document.location.reload()',2000)
                       
                    }
                    if(obj.status == 300) {
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
    $("#submitAdd").on('click', function(){

    //var $this = $('.btns');
    //$this.button('loading');
    $(".alert-primary").show();
    var url =  $('#url').val();
            
             var fdata = new FormData()
    
   fdata.append("titulo",$("#titulo").val());
   fdata.append("descripcion",$("#descripcion").val());
   $.each($('#file')[0].files, function(i, file) {
    fdata.append('file-'+i, file);
});
       console.log(fdata)

            $.ajax({
                url: '<?= base_url()?>'+url, // url where to submit the request
                type : "POST", // type of action POST || GET
                data :  fdata, // post data || get data
                contentType: false,
                processData: false,
                success : function(result) {
                    // you can see the result from the console
                    // tab of the developer tools
                    var obj = $.parseJSON(result);
                    console.log(obj);
                    $(".alert-primary").hide();
                    if(obj.status == 200) {
                      $(".alert-success").show();
                      $("#btnnuevo").attr('class','btn btn-primary collapsed');
                      $("#btnnuevo").attr('aria-expanded','false');
                      $("#collapseExample").attr('aria-expanded','false');
                      $("#collapseExample").attr('class','collapse');
                      //$("#collapseExample").attr('style','height: 0px; display:none; ');
                       $("#form")[0].reset();
                       //$this.button('reset');
                       setTimeout('document.location.reload()',2000)
                       
                    }
                    if(obj.status == 300) {
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