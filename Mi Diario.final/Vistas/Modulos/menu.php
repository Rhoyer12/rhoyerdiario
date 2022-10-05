
	<?php if($rutasC->sesionIniciadaC()): ?>
		
	<?php else: ?>
		<div class="row">
			
		<div class="col s4 ">
		<nav>
			<div class="nav-wrapper color blue">
      			<form>
					<div class="input-field ">
						<input id="search" type="search" required>
						<label class="label-icon" for="search"><i class="material-icons">search</i></label>
						<i class="material-icons">close</i>
					</div>
				</form>
			</div>
 		</nav>
		 </div>
		 
		<nav class="nav-extended">
			<div class="row">
			<div class="col s5 ">
				<div class="nav-wrapper ">
				
				

				<ul class="right hide-on-med-and-down">
					<li><a   href="index.php?ruta=registrar"> Registrar</a></li>
					<li><a   href="index.php?ruta=empleados">Notas </a></li>
					<li><a   href="index.php?ruta=notasf">Favoritas </a></li>
					<li><a  href="index.php?ruta=notasa">Archivadas </a></li>
					<li><a class="waves-effect waves-light btn-large" href="index.php?ruta=salir">Salir</a></li>
				</ul>
				<ul class="sidenav" id="mobile-demo">
					<li><a href="sass.html">Sass</a></li>
					<li><a href="badges.html">Components</a></li>
					<li><a href="collapsible.html">JavaScript</a></li>
				</ul>
				</div>
				</div>
 		</nav>
		 
	</div>
	<?php endif; ?>
