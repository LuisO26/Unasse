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
				  <a id="submitAdd"  class="btn btn-primary">Crear </a>
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
							foreach ($datag[0] -> result() as $gale) { ?>
							<tr>
						  <th scope="row">1</th>
						  <td><?= $gale->titulo;?></td>
						  <td><?= $gale->descripcion;?></td>
						  <td><?= $gale->fecha;?></td>
						  <td><a href="#">borrar</a></td>
						</tr>
											
											<?php } ?>
						
					  </tbody>
					</table>
</div>
</section>