<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modo administrador</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
	<main class="principal">
		<header class="header ">
			<div class="menu ">
				<div class="logo ">
					<img src="./imgs/admi.jpg" width="150">
					<div class="contenido ">
						Modo administrador
					</div>
				</div>
			</div>
			<div class="opciones " align="left" id="iconos">
				<a style="color: white;" class="btn btn-dark mx-2" onclick="opc('agregar');">Agregar alumno</a>
				<a style="color: white;" class="btn btn-dark mx-2" onclick="opc('modificar');">Modificar o ver alumno </a>
				<a style="color: white;" class="btn btn-dark mx-2" onclick="opc('administrar');">Administrar profesor </a>
				<?php                  
	                if( isset($_SESSION['user']) ){
	                  	$usuario = $_SESSION['user'];
	                    echo "\n <a  href='logout.php' title='Salir'>  <i class='fa fa-sign-out fa-2x' aria-hidden='true'></i></a> ";
                    }
                ?>
			</div>
		</header>

		<form action="agregar_profesor.php" id="p_agregar" style="display: none" method="post" class="agregar">
				
				 	Nombre:
				<input type="text" name="nombre" "><br>
				 	Usuario:
				<input type="text" name="user" "><br>
				 	Correo:
				<input type="text" name="correo" "><br>
				 	Instituto:
				<input type="text" name="insti" "><br>
				 	
				<br>
				<input type="submit" name="agregarp" value="Agregar">
		</form>
		<!-- opciones si elige modificar alumno-->
		<div id="opc2" style="display: none" class="newopcs">
				<a style="color: white;" name="agregarp" class="btn btn-dark mx-2" onclick="accion()">Agregar profesor</a>
				<a style="color: white;" class="btn btn-dark mx-2" onclick="accion2('asignar');">Asignar profesor </a>
		</div>
		<form action="agregar_alumno.php" id="f_agregar" style="display: none" method="post" class="agregar">
			
			 	Matricula:
			<input type="text" name="matricula" id="matricula"><br>
			 	Nombre:
			<input type="text" name="nombre" id="nombre"><br>
  				Apellidos:
  			<input type="text" name="apellidos" id="apellidos"><br>
  			 	Correo:
			<input type="text" name="correo" id="correo"><br>
			<br>
			<input type="submit" name="agregara" value="Agregar">
			
		</form>
		
           
	</main>
<script type="text/javascript">
	function opc(opcion){
		switch(opcion){
			case 'agregar':
				document.getElementById("f_agregar").style.display="block";
				document.getElementById("opc2").style.display="none";
			break;
			case 'modificar':
				document.getElementById("f_agregar").style.display="none";
				document.getElementById("opc2").style.display="none";
			break;
			case 'administrar':
				document.getElementById("f_agregar").style.display="none";
				document.getElementById("opc2").style.display="block";
			break;
		}
	}
	function accion(accion){
		document.getElementById("f_agregar").style.display="none";
		document.getElementById("opc2").style.display="none";
		document.getElementById("p_agregar").style.display="block";
		
	}
	function accion2(){
		
	}
</script>

</body>
</html>




<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modo administrador</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
	<main class="principal">
		<header class="header ">
			<div class="menu ">
				<div class="logo ">
					<img src="./imgs/admi.jpg" width="150">
					<div class="contenido ">
						Modo administrador
					</div>
				</div>
			</div>
			<div class="opciones " align="left" id="iconos">
				<a style="color: white;" class="btn btn-dark mx-2" onclick="opc('agregar');">Agregar alumno</a>
				<a style="color: white;" class="btn btn-dark mx-2" onclick="opc('modificar');">Modificar o ver alumno </a>
				<a style="color: white;" class="btn btn-dark mx-2" onclick="opc('administrar');">Administrar profesor </a>
				<?php                  
	                if( isset($_SESSION['user']) ){
	                  	$usuario = $_SESSION['user'];
	                    echo "\n <a  href='logout.php' title='Salir'>  <i class='fa fa-sign-out fa-2x' aria-hidden='true'></i></a> ";
                    }
                ?>
			</div>
		</header>

		<form action="agregar_profesor.php" id="p_agregar" style="display: none" method="post" class="agregar">
				
				 	Nombre:
				<input type="text" name="nombre" "><br>
				 	Usuario:
				<input type="text" name="user" "><br>
				 	Correo:
				<input type="text" name="correo" "><br>
				 	Instituto:
				<input type="text" name="insti" "><br>
				 	
				<br>
				<input type="submit" name="agregarp" value="Agregar">
		</form>
		<!-- opciones si elige modificar alumno-->
		<div id="opc2" style="display: none" class="newopcs">
				<a style="color: white;" name="agregarp" class="btn btn-dark mx-2" onclick="accion()">Agregar profesor</a>
				<a style="color: white;" class="btn btn-dark mx-2" onclick="accion2('asignar');">Asignar profesor </a>
		</div>
		<form action="agregar_alumno.php" id="f_agregar" style="display: none" method="post" class="agregar">
			
			 	Matricula:
			<input type="text" name="matricula" id="matricula"><br>
			 	Nombre:
			<input type="text" name="nombre" id="nombre"><br>
  				Apellidos:
  			<input type="text" name="apellidos" id="apellidos"><br>
  			 	Correo:
			<input type="text" name="correo" id="correo"><br>
			<br>
			<input type="submit" name="agregara" value="Agregar">
			
		</form>
		
           
	</main>
<script type="text/javascript">
	function opc(opcion){
		switch(opcion){
			case 'agregar':
				document.getElementById("f_agregar").style.display="block";
				document.getElementById("opc2").style.display="none";
			break;
			case 'modificar':
				document.getElementById("f_agregar").style.display="none";
				document.getElementById("opc2").style.display="none";
			break;
			case 'administrar':
				document.getElementById("f_agregar").style.display="none";
				document.getElementById("opc2").style.display="block";
			break;
		}
	}
	function accion(accion){
		document.getElementById("f_agregar").style.display="none";
		document.getElementById("opc2").style.display="none";
		document.getElementById("p_agregar").style.display="block";
		
	}
	function accion2(){
		
	}
</script>

</body>
</html>




