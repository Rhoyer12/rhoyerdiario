<?php

$empleados = new AdminC();
$pagina = $empleados->RecuperarVerC();
$empleados->recuperarfinUsuarioC();



?>


		<div class="row">
		
		<div class="col s12 m4 l4"><p>s12 m4</p></div>
		<div class="col s12 m4 l4"><p>

		<div class="col s12 m12">
			<h4 class="header">Recuperar Usuario</h4>
			<div class="card horizontal">
			
			
			<div class="card-stacked">
				<div class="card-content">
				<?php foreach($pagina as $key => $value): ?>
				<form class="col s12" method="post" action="">
				<input name="id" type="hidden" value="<?=$value['id']?>">
				<div class="row">
						<div class="input-field col s10">
							<input id="last_name" type="email" class="validate" name="correo" >
						<label for="last_name">Email de cuenta asocciada</label>
						</div>
					</div>
					
					<div class="row">
						<div class="input-field col s10">
							<input dISABLED id="last_name" type="text" class="validate" name="pregunta" Value="<?=$value['pregunta']?>">
						<label for="last_name">Pregunta De Seguridad</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s10">
							<input  id="last_name" type="text" class="validate" name="respuesta" >
						<label for="last_name">Respuesta De Seguridad</label>
						</div>
					</div>

					

					<div class="row">
						<div class="input-field col s10">
							<input  id="last_name" type="password" class="validate" name="contraseña" >
						<label for="last_name">Nueva contraseña</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s10">
							<input  id="last_name" type="password" class="validate" name="contraseña1" >
						<label for="last_name">repita nueva contraseña</label>
						</div>
					</div>
				
				<div class="card-action">
				<button class="btn waves-effect waves-light " type="submit" name="action">Recuperarcuenta
					<i class="material-icons right">autorenew</i>
				</button>
				</div>
				</form> 
				<?php endforeach; ?>
				<a href='index.php?ruta=ingreso'>
					<button class="btn waves-effect waves-light ">Volver</button>
			</div>
			</div>
		</div>


		</p></div>
			<div class="col s12 m4 l4"><p>atras</p></div>
		</div>


