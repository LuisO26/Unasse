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
<div style="display: none"  class=" alert alert-primary alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Cargando datos!</strong> Enviando datos espere....
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
					<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Ingrese titulo de descarga...">
				  </div>
				  <div class="form-group">
					<label for="descripcion">Descripción</label>
					<input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingrese una pequeña descripción...">
				  </div>
				  <div class="form-group">
					<label for="exampleInputFile">Ingrese PDF</label>
					<input type="file" name="file[]" id="file" >
				  </div>
				  <button type="button" id="submitAdd" data-loading-text="Loading..." class="btn btn-primary">Crear </button>
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
							<tr>
						  <th scope="row"><?= $i?></th>
						  <td><?= $gale->titulo;?></td>
						  <td><?= $gale->descripcion;?></td>
						  <td><iframe style="width:150px" src="<?=base_url()?><?= $gale->url;?>"></iframe></td>
						  <td><center><button style="color:red;" type="button" onClick="borrar(<?=$gale->id?>, 'DescargasAdmin')" id="borrar_descarga"><i class="fa fa-trash" aria-hidden="true"></i></button></center></td>
						</tr>
											
											<?php  
										} ?>
						
					  </tbody>
					</table>
</div>
</section>