$this.button('loading');
    
      
            // send ajax
            $.ajax({
                url: '<?= base_url()?>index.php/Admin/iniciar_sesion', // url where to submit the request
                type : "POST", // type of action POST || GET
                dataType: 'json',
                contentType: 'application/json; charset=utf-8',
                $("#form").serialize(), // post data || get data
                success : function(result) {
                    // you can see the result from the console
                    // tab of the developer tools
                    console.log(result);
                    if(result.status == true) {
                     // $(".alert-success").show();
                       $this.button('reset');
                    }
                },
                error: function(xhr, resp, text) {
                    //$(".alert-warning").show();
                    $this.button('reset');
                    console.log(xhr, resp, text);
                }
            });
        });
});