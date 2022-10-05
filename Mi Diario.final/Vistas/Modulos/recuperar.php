<?php
$registrar = new AdminC();
$registrar->recuperarUsuarioC();

?>
		<div class="row">
		
		<div class="col s12 m4 l4"><p>s12 m4</p></div>
		<div class="col s12 m4 l4"><p>

		<div class="col s12 m12">
			<h4 class="header">Recuperar Usuario</h4>
			<div class="card horizontal">
			
			
			<div class="card-stacked">
				<div class="card-content">
				<form class="col s12" method="post" action="">
					<div class="row">
						<div class="input-field col s10">
							<input id="last_name" type="text" class="validate" name="nombre" onkeypress="controlEspacio(this)"/>
						<label for="last_name">Nombre De Usuario</label>
						</div>
					</div>
				</div>
				<div class="card-action">
				<button class="btn waves-effect waves-light " type="submit" name="action">Registrar
					<i class="material-icons right">send</i>
				</button>
				</div>
				</form> 
				<a href='index.php?ruta=ingreso'>
					<button class="btn waves-effect waves-light ">Volver</button>
			</div>
			</div>
		</div>


		</p></div>
			<div class="col s12 m4 l4"><p> ATRAS  </p></div>
		</div>


