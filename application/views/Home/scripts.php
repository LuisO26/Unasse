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