<!-- Scripts -->
<script type="text/javascript" src="<?= base_url()?>assets/js/jquery.min.js"></script> 

<script type="text/javascript">
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
                    if(result.status == true) {
                     // $(".alert-success").show();
                       //$this.button('reset');
                       window.location.href("<?= base_url()?>index.php/Admin/logeado");
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
    <!-- Custom Js Code -->
     
    <script type="text/javascript" src="<?= base_url()?>assets/js/custom.js"></script> 
    <!-- Scripts --></body>
</html>