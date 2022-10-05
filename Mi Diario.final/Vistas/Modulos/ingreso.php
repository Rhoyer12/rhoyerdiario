

 <div class="row">
   
    <div class="col s12 m4 l4"><p></p></div>
    <div class="col s12 m4 l4"><p>
	<nav>
    <div class= "color blue nav-wrapper">
      <a href="#" class="brand-logo">MI DIARIO </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href='index.php?ruta=registraru'>REGISTARTE</a></li>
        <li><a href='index.php?ruta=recuperar'>RECUPERAR?</a></li>
      </ul>
    </div>
  </nav>


	<div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="Vistas/css/imagenes/stich.png" width="100" height="400">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Iniciar Session<i class="card-action"></i></span>
     </br>

    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Iniciar Session<i class="material-icons right">close</i></span>



	  <form class="col s12" method="post" action="">

			<div class="row">
				<div class="input-field col s10">
				<i class="material-icons prefix">person_outline</i>
				<input id="icon_prefix" type="text" class="validate" name="usuarioI" required>
				<label for="icon_prefix">Usuario</label>
				</div>
				<div class="input-field col s10">
				<i class="material-icons prefix">security</i>
				<input id="icon_telephone" type="password" class="validate" name="claveI" required>
				<label for="icon_telephone">Contraseña</label>
				</div>
			</div>
			<div class="row">
				<div class="col s3">

				</div>
				<div class="col s7">
					<button class="btn waves-effect  red accent-4" type="submit" name="action">Enviar
						<i class="material-icons right">send</i>
					</button>
				</div>

			</div>
		</form>

    </div>
  </div>

	</p></div>
    <div class="col s12 m4 l4"><p></p></div>
  </div>






<?php
$ingreso = new AdminC();
$ingreso->IngresoC();
?>