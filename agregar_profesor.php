<?php
  session_start();
?>
		
<?php
    include('util/util.php');
    $conn = conectarse();
    //echo strcmp($_POST['matricula'], "");
    if (isset($_POST['agregarp'])) {
			$nombre= $_POST['nombre'];
			$usuario= $_POST['user'];
			$correo= $_POST['correo'];
			$instituto= $_POST['insti'];
			

			$sql = "insert into alumno (nombre,usuario,correo,instituto) values ('".$nombre."','".$usuario."','".$correo."','".$instituto."')";
			
			echo $sql;
			header('Location: admi.php');
			/*echo $nombre;
			echo $apellidos;
			echo $correo;*/
			//mysqli_query($conn, $sql);
		}
?>         	
