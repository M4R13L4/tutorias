<?php
  session_start();
  $prueba="si funciona";

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
	<main>
	<header class="header ">
			<div class="menu ">
				<div class="logo ">
					<img src="./imgs/admi.jpg" width="150">
					<div class="contenido ">
						Modo alumno
					</div>
				</div>
			</div>
	</header>
	<?php
	    include('util/util.php');
	    $conn = conectarse();
	    $idq="select MAX(alumno_id) as id from alumno";
	    $r=mysqli_query($conn, $idq);
	    $id="";
	    while($row = mysqli_fetch_array($r, MYSQLI_NUM)){
	    	$id=$row[0];
	    }
	    
		
    ?>
		<form action="agregar_materia.php" id="m_agregar" style="display: block" method="post" class="agregar">
				
				 	Materia:
				<input type="text" name="materia" id="matricula"><br>
				 	Parcial 1:
				<input type="number" name="c1" step="0.1" min="0" max="10">
						Parcial 2:
				<input type="number" name="c2" step="0.1" min="0" max="10">
					 	Parcial 3:
				<input type="number" name="c3" step="0.1" min="0" max="10">
					Final:
				<input type="number" name="f" step="0.1" min="0" max="10"><br>
					Extra 1:
				<input type="number" name="e1" step="0.1" min="0" max="10">
					Extra 2:
				<input type="number" name="e2" step="0.1" min="0" max="10">
					Especial:
				<input type="number" name="es" step="0.1" min="0" max="10">
				Semestre:
				<input type="text" name="sem">
				<input type="text" style="display: none" name="id" value="<?php echo $id ?>">
				<br>
				<input type="submit" name="agregarm" value="Agregar otra materia">
				<input type="submit" name="terminar" value="Agregar y Terminar">
				
		</form>
<?php
    
    
    //echo strcmp($_POST['matricula'], "");
    if (isset($_POST['matricula'])) {
			$matricula= $_POST['matricula'];
			$nombre = $_POST['nombre'];
			$apellidos= $_POST['apellidos'];
			$correo = $_POST['correo'];
			$sql = "insert into alumno (matricula,nombre,apellidos,foto,correo) values ('".$matricula."', '".$nombre."', '".$apellidos."', './imgs/default.png', '".$correo."')";
			//mysqli_query($conn, $sql);
			
			
		}
?>         	

	</main>
</body>
</html>
