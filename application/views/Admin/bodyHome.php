<section class="page-section">
	<div class="container">
		<div style="display: none" class=" alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Listo!</strong> Los datos se guardaron exitosamente.
</div>
<div style="display: none"  class=" alert alert-danger alert-dismissible" id="alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> Problemas al guardar los datos, intente de nuevo.
</div>
<div style="display: none"  class=" alert alert-primary1 alert-primary alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Cargando datos!</strong> Enviando datos espere....
</div>
	</div>


	<div class="container">
		<form id="form" enctype="multipart/form-data">
						 
						 	<?php 
							foreach ($datosgvideo as $gale) {
								?>
								<div class="form-group">
							<label for="descripcion">Titulo a mostrar en el video</label>
					<input type="text" class="form-control" value="<?= $gale->titulo ?>" name="tituloVideo" id="tituloVideo" placeholder="Ingrese El Titulo a mostar del video de Youtube">
					</div>
								<div class="form-group">
							<label for="descripcion">Link de Video Youtube</label>
					<input type="text" class="form-control" value="<?= $gale->idVideo ?>" name="urlYoutube" id="urlYoutube" placeholder="Ingrese El link del video de Youtube">
					<small id="emailHelp" class="form-text text-muted">Ejemplo: (https://www.youtube.com/watch?v=EBt_88nxG4c) insertar EBt_88nxG4c</small>
					</div>
											
											<?php  
										} ?>
				  
				  <center><button type="button" id="submitVideo"  class="btn btn-primary">Cambiar Video Youtube </button></center>
				</form>
		<a class="btn btn-primary" id="btnnuevo" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
				  Nuevo
				</a>
				<div class="collapse" id="collapseExample">
				  <div class="well">
					<form id="form" enctype="multipart/form-data">
						<input type="hidden" id="url" value="<?= $url ?>">
						<input type="hidden" id="cantidadSliders" value="">
						 
				  <div id="Slider" >
				  	
				  	
				  </div>
				  <button type="button" id="addSlider"  class="btn btn-default">Agregar Imagen a carrusel </button>
				  
				  

				  
				  <center><button type="button" id="submitAddSliders"  class="btn btn-primary">Crear </button></center>
				</form>
				  </div>
				</div>
	</div>
            <div class="container">
	<table class="table table-striped">

					  <thead>
						<tr>
						  <th>#</th>
						  <th>Titulo</th>
						  <th>Cantidad de imagenes</th>
						</tr>
					  </thead>
					  <tbody>
					  	<?php 
					  	$i = 0; 
							foreach ($datosg as $gale) {
								$i += 1; 
								?>
							<tr>
						  <th scope="row"><?= $i?></th>
						  <td><?= $gale->titulo;?></td>
						  <td><?= $gale->url;?></td>
						</tr>
											
											<?php  
										} ?>
						
					  </tbody>
					</table>
</div>
<div style="display: none" class=" alert alert-success alert-dismissible" id="alert-borrar" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Listo!</strong> Galeria Eliminada.
</div>
<div style="display: none"  class=" alert alert-danger alert-dismissible" id="alert-borrarmal" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> Problemas al eliminar galeria, intente de nuevo.
</div>
</section>