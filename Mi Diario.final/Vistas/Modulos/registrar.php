<?php
$registrar = new EmpleadosC();
$registrar->registrarEmpleadosC();
?>
 <div class="row">
 <div class="col s12 m4 l4">

 </div>

<div class="col s12 m4 l3">
	<div class="card">
        <div class="card-image">
          <img src="Vistas/css/imagenes/xd.png" width="100" height="300">
          <span class="card-title">Registrar Nota</span>
          
        </div>
        <div class="card-content">
          <p>

		  	<form method="post" action="">
			  <div class="row">
				<div class="input-field col s6">
					<i class="material-icons prefix">title</i>
					<input id="icon_prefix" type="text" class="validate" name="titulo" required>
					<label for="icon_prefix">Titulo</label>
				</div>
			   </div>
			   <div class="row">
        			<div class="input-field col s12">
         			 <i class="material-icons prefix">edit_note</i>
          				<textarea id="icon_prefix2" class="materialize-textarea" name="contenido" required></textarea>
         				 <label for="icon_prefix2">Contenido De La Nota</label>
       				 </div>
     			</div>
				 <div class="row">
        			<div class="input-field col s5">
         			 <i class="material-icons prefix">event</i>
					  	<input type="date" name="fecha">

     			</div>
				 <div class="input-field col s12">
				 
					<select class="browser-default" name="estado">
						<option value="1" disabled selected>VALORACION </option>
						<option value="1">Favorito</option>
						<option value="2">Importante</option>
						<option value="3">Normal</option>
						
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



