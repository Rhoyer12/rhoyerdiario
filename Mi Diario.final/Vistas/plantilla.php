<!DOCTYPE html>  <!-- Vistas/plantilla.php-->
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	

	<link rel="stylesheet" type="text/css" href="Vistas/css/estilos.css">

	

  <script>

    document.addEventListener('DOMContentLoaded', function () {
      var elems = document.querySelectorAll('.slider');
      var instances = M.Slider.init(elems, {
      });

      var elems = document.querySelectorAll('.materialboxed');
      var instances = M.Materialbox.init(elems);

      var elems = document.querySelectorAll('.sidenav');
      var instances = M.Sidenav.init(elems);
	  

    });

  </script>


	<script type="text/javascript" >
	
</script>
		


	<script type="text/javascript" >
		document.addEventListener('DOMContentLoaded', function() {
    	var elems = document.querySelectorAll('.dropdown-trigger');
    	var instances = M.Dropdown.init(elems,{
			coverTrigger: false,
			constrainWidth: false
		});
		
  });
	</script>

	
  <script >
	$(document).ready(function(){
    $('.datepicker').datepicker({

		format:'yyyy-m-dd'
	});
  });
  </script>

  
	<script >
		$(document).ready(function(){
    $('select').formSelect();
		});
	</script>
	<script >
		$(document).ready(function(){
			$('.collapsible').collapsible();
		});
	</script>
		

	<script >
		$(document).ready(function(){
		$('#btn-flotante').floatingActionButton();
		$('#btn-flotante').floatingActionButton({
    	toolbarEnabled: true
  		});
		});
	</script>

	<script >
		$(document).ready(function(){
    	$('.sidenav').sidenav();
		}
		
		

		

		$(document).ready(function(){
    		$('.collapsible').collapsible(
			
		);
  		});

		  $(document).ready(function(){
    		$('.carousel').carousel();
  		});

		  $(document).ready(function(){
    		$('#textarea1').val('New Text');
  		M.textareaAutoResize($('#textarea1'));
  		});
  		});

		  $(document).ready(function(){
    		$('.tooltipped').tooltip();
  		});

		$(document).ready(function(){
			$('.materialboxed').materialbox();
		});

		$(document).ready(function() {
    		M.updateTextFields();
 		});

		 $(document).ready(function() {
    		$('input#input_text, textarea#textarea2').characterCounter();
 		 });
		  
			function controlEspacio()
			{

			var evento_key = window.event.keyCode;
			if (evento_key == '32' ) //comparo tecla space

			alert('Error, no puede usar un espacio en este lugar')

			}

		  
	</script>
</head>
<body>

	
	<?php
		session_start();
		$rutasC = new RutasC();
		include 'modulos/menu.php';
	?>	<section>

		<?php
			$modulo = $rutasC->procesaRutasC();
			include $modulo;
		?>	</section>
</body>
</html>