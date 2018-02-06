<?php
  session_start();
?>
<?php
    include('util/util.php');
    $conn = conectarse();
    
	if(isset($_POST['bnota'])){
		$nota=$_POST['nota'];
		echo $nota;
		$sql="";
		header('Location: profe.php');
	}
?>
