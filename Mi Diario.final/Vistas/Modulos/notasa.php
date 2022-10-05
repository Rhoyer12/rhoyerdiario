<?php
$empleados = new EmpleadosC();
$pagina = $empleados->mostrarEmpleadosaC();
$empleados->descarchivarEmpleadoC();
?>

<div class="row">
 <div class="col s12 m5 l4">

 </div>
 
				  <?php foreach($pagina as $key => $value): ?>

					
					<div class="row">
					<div class="col s12 m4 l4">
						<div class="card">
        					<div class="card-image">
          						<img src="Vistas/css/imagenes/xd6.png" width="100" height="300">
         						 <span class="card-title"><?=$value['titulo']?></span>
          
        					</div>
        					<div class="card-content">
          						<p>
									<table  class="striped red lighten-3">
									<tbody>
												
												<tr>
												<th></th>
												<td></td>
												</tr>
												<tr>
												<th>Contenido</th>
												<td><?=$value['contenido']?></td>
												</tr>
												<tr>
												<th>Fecha</th>
												<td><?=$value['fecha']?></td>
												</tr>
												<tr>
												<th>Relevancia</th>
												<td>Archivados</td>
												</tr>
												<th>Opciones</th>
												<td><a class="waves-effect waves-red " href='index.php?ruta=notasa&id=<?=$value['idnota']?>'><i class="material-icons left">recovery</i>Desarchivar</a></td>
												
												</tr>
												<div class="col s12 ">
												</div>
												</tbody>
										</table>
								</p>
							</div>
	 					</div>

		 			</div>
				
					 </div>
					<div class="col s12 m4 l4">

					</div>
				
				
			<?php endforeach; ?>

								
			
      
	
		
	


<div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->


</div>

</div>












