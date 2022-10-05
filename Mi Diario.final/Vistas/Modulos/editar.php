<?php
$empleados = new EmpleadosC();
$resultado = $empleados->editarEmpleadoC();
$empleados->actualizarEmpleadoC();
$id=$_GET['id'];


?>

<div class="row">
 <div class="col s12 m4 l4">

 </div>

<div class="col s12 m4 l3">
	<div class="card">
        <div class="card-image">
          <img src="Vistas/css/imagenes/xd5.png" width="100" height="300">
          <span class="card-title">editar Nota <?=$resultado['titulo']?></span>
          
        </div>
        <div class="card-content">
          <p>

		  	<form method="post" action="">
			  <div class="row">
			  <input id="id" name="id" type="hidden" value="<?=$id?>">
				<div class="input-field col s6">
					<i class="material-icons prefix">title</i>
					<input disabled  id="icon_prefix"  id="disabled" type="text"    value="<?=$resultado['titulo']?>" required>
					<label for="icon_prefix">Titulo De La Nota</label>
				</div>
			   </div>
			   <div class="row">
        			<div class="input-field col s12">
         			 <i class="material-icons prefix">edit_note</i>
          				<textarea id="icon_prefix2" class="materialize-textarea" name="contenido" value="<?=$resultado['contenido']?>" required></textarea>
         				 <label for="icon_prefix2"><?=$resultado['contenido']?></label>
       				 </div>
     			</div>
				 
				 <div class="input-field col s12">
				 
					<select class="browser-default" name="estado" value="<?=$resultado['estado']?>">
						
						<option value="1">♥Favorito</option>
						<option value="2">-Normal</option>
						<option value="3">Archivar</option>
						
					</select>
				</div>
				<div class="row">
				<div class="input-field col s12">
					<button class="btn waves-effect waves-light" type="submit" name="action">ENVIAR 
						<i class="material-icons right">send</i>
					</button>
					
				</div>
				</div>
						
				
			</form>

		  </p>
        </div>
      </div>
	
		
	</div>

</div>

<div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->


</div>

</div>


