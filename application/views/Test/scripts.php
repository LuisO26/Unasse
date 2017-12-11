<!-- Scripts -->
<script type="text/javascript" src="<?= base_url()?>assets/js/jquery.min.js"></script> 

<script type="text/javascript">
var num= 0
    $("#addQuestion").click(function(){
        
        num = num+1

  $("#pregunta").append("<div class='form-group'><label for='pregunta'>Pregunta "+num+"</label><input type='text' class='form-control' name='pregunta_"+num+"' id='pregunta_"+num+"' placeholder='Ingrese pregunta "+num+"...'></div><label for='respuesta'>Respuestas</label><div class='form-group'><div class='col-md-3'><input type='text' class='form-control' name='respuesta1_"+num+"' id='respuesta1_"+num+"' placeholder='Ingrese respuesta 1...'></div><div class='col-md-3'><input type='text' class='form-control' name='respuesta2_"+num+"' id='respuesta2_"+num+"' placeholder='Ingrese respuesta 2...'></div><div class='col-md-3'><input type='text' class='form-control' name='respuesta3_"+num+"' id='respuesta3_"+num+"' placeholder='Ingrese respuesta 3...'></div><div class='col-md-3'><input type='text' class='form-control' name='respuesta4_"+num+"' id='respuesta4_"+num+"' placeholder='Ingrese respuesta 4...'></div></div>");

  $('#cantidadPreguntas').val(num)
});
    

    $("#submitAdd").on('click', function(){

    //var $this = $('.btns');
    //$this.button('loading');
    var url =  $('#url').val();
            
             var fdata = new FormData()
    
   fdata.append("titulo",$("#titulo").val());
   fdata.append("descripcion",$("#descripcion").val());
   fdata.append("cantidadPreguntas",$("#cantidadPreguntas").val());
   for (var i=1 ; i <= num; i++) {
    fdata.append("pregunta_"+i,$("#pregunta_"+i).val());
       fdata.append("respuesta1_"+i,$("#respuesta1_"+i).val());
       fdata.append("respuesta2_",$("#respuesta2_"+i).val());
       fdata.append("respuesta3_",$("#respuesta3_"+i).val());
       fdata.append("respuesta4_"+i,$("#respuesta4_"+i).val());
   }
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