<?php
  session_start();
?>
<?php
    include('util/util.php');
    $conn = conectarse();
    if (isset($_POST['agregarm'])) {
			$materia= $_POST['materia'];
			$c1= $_POST['c1'];
			$c2= $_POST['c2'];
			$c3= $_POST['c3'];
			$f= $_POST['f'];
			$e1= $_POST['e1'];
			$e2= $_POST['e2'];
			$es= $_POST['es'];
			$sem= $_POST['sem'];
			$id= $_POST['id'];
			
			$sql = "insert materia alumno (alumno_id,nombre,calif1,calif2,calif3,final,extra1,extra2,especial,semestre) values (".$id."'".$materia."',".$c1.",".$c2.",".$c3.",".$f.",".$e1.",".$e2.",".$es.",'".$sem."')";
			header('Location: agregar_alumno.php');
			
			//mysqli_query($conn, $sql);
		}else if(isset($_POST['terminar'])){
			$materia= $_POST['materia'];
			$c1= $_POST['c1'];
			$c2= $_POST['c2'];
			$c3= $_POST['c3'];
			$f= $_POST['f'];
			$e1= $_POST['e1'];
			$e2= $_POST['e2'];
			$es= $_POST['es'];
			$sem= $_POST['sem'];
			$id= $_POST['id'];
			
			$sql = "insert materia alumno (alumno_id,nombre,calif1,calif2,calif3,final,extra1,extra2,especial,semestre) values (".$id."'".$materia."',".$c1.",".$c2.",".$c3.",".$f.",".$e1.",".$e2.",".$es.",'".$sem."')";
			//mysqli_query($conn, $sql);
			header('Location: admi.php');
		}
?>         	
