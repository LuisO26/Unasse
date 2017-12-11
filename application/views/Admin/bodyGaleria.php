<section class="page-section">
	<div class="container">
		<div style="display: none" class=" alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Listo!</strong> Los datos se guardaron exitosamente.
</div>
<div style="display: none"  class=" alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> Problemas al guardar los datos, intente de nuevo.
</div>
	</div>

	<div class="container">
		<a class="btn btn-primary" id="btnnuevo" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
				  Nuevo
				</a>
				<div class="collapse" id="collapseExample">
				  <div class="well">
					<form id="form" enctype="multipart/form-data">
						<input type="hidden" id="url" value="<?= $url ?>">
				  <div class="form-group">
					<label for="titulo">Titulo</label>
					<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Ingrese titulo de Galeria...">
				  </div>
				  <div class="form-group">
					<label for="descripcion">Descripción</label>
					<input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingrese una pequeña descripción...">
				  </div>
				  <div class="form-group">
					<label for="exampleInputFile">Ingrese imagenes</label>
					<input type="file" name="file[]" id="file" multiple>
				  </div>
				  <a id="submitAdd" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Cargando Datos"  class="btn btn-primary">Crear </a>
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
						  <th>Descripción</th>
						  <th>Cantidad de imagenes</th>
						  <th>Acciones</th>
						</tr>
					  </thead>
					  <tbody>
					  	<?php 
					  	$i = 0; 
							foreach ($datosg as $gale) {
								$i += 1; 
								?>
								<input type="hidden" name="id" id="id" value="<?=$gale->id?>">
							<tr>
						  <th scope="row"><?= $i?></th>
						  <td><?= $gale->titulo;?></td>
						  <td><?= $gale->descripcion;?></td>
						  <td><?= $gale->fecha;?></td>
						  <td><center><button style="color:red;" type="button" id="borrar_galeria"><i class="fa fa-trash" aria-hidden="true"></i></button></center></td>
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
	</div>
</section>