<?php
$empleados = new EmpleadosC();
$pagina = $empleados->mostrarEmpleadosfC();
$empleados->borrarEmpleadoC();
?>





<div class="row">
 <div class="col s12 m5 l4">

 </div>
 
				  <?php foreach($pagina as $key => $value): ?>

					<?php 

						
						switch ($value['estado']) {
							
								
							case 1:
								$titulo="Favorito";
								$color="striped yellow lighten-3";
								break;
							case 2:
								$titulo="Normal";
								$color="striped blue lighten-5";
								break;
						}
						
						?>
					<div class="row">
					<div class="col s12 m4 l4">
						<div class="card">
        					<div class="card-image">
          						<img src="Vistas/css/imagenes/xd5.png" width="100" height="300">
         						 <span class="card-title"><?=$value['titulo']?></span>
          
        					</div>
        					<div class="card-content">
          						<p>
									<table  class="<?=$color?>">
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
												<td><?=$titulo?></td>
												</tr>
												
												<td><a class="waves-effect waves-red " href='index.php?ruta=empleados&id=<?=$value['idnota']?>'><i class="material-icons left">delete</i>Archivar</a></td>
												
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












