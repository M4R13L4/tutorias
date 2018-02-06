<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modo Staff</title>
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
					<img src="./imgs/profe.png" width="150">
					<div class="contenido ">
						Modo staff
					</div>
				</div>
			</div>
			<div id="opcs" style="display: block;" class="newopcs">
				<a style="color: white;" class="btn btn-dark mx-2" onclick="opc('buscar');">Buscar alumno</a>
				<a style="color: white;" class="btn btn-dark mx-2" onclick="opc('ep');">Asignaciones E->P </a>
			</div>
			
			<div class="field" id="searchform_alumno" style="display: none">
			  <input type="text" id="searchterma" placeholder="Nombre alumno" />
			  <button type="button" id="searcha" onclick="busqueda()">Buscar!</button>
			</div>

			<div class="field" id="searchform_profesor" style="display: none">
			  <input type="text" id="searchtermp" placeholder="Nombre profesor" />
			  <button type="button" id="searchp" onclick="busqueda2()">Buscar!</button>
			</div>

			<div class="opciones " align="left" id="iconos">
				
				<?php                  
	                if( isset($_SESSION['user']) ){
	                  	$usuario = $_SESSION['user'];
	                    echo "\n <a  href='logout.php' title='Salir'>  <i class='fa fa-sign-out fa-2x' aria-hidden='true'></i></a> ";
                    }
                ?>
			</div>
		</header>
		<div id="datos_est" style="display: none" style='overflow-x:auto'>
				
	            <?php
	                    include('util/util.php');
	                    $conn = conectarse();
	                    
	         			$sql="select alumno.nombre, alumno.apellidos, materia.nombre,materia.calif1, materia.calif2, materia.calif3, materia.final,materia.extra1, materia.extra2, materia.especial, materia.semestre, ingles.nivel, ingles.estado, alumno.profesor_id, alumno.alumno_id, alumno.matricula, profesor.nombre, profesor.usuario,profesor.instituto from alumno inner join materia on alumno.alumno_id=materia.alumno_id inner join ingles on ingles.alumno_id=alumno.alumno_id inner join profesor on alumno.profesor_id=profesor.profesor_id";
	         			$result=mysqli_query($conn, $sql);
	         			$result2=mysqli_query($conn, $sql);
	         			if(! $result) {
	                      echo "No hay resultados";
	                    }else{    
	                    	echo "<table style='width:100%' id='datos' >";
								echo "<tr>";
									echo "<th>Materia</th>";
									echo "<th>Calif 1</th>";
									echo "<th>Calif 2</th> ";
									echo "<th>Calif 3</th>";
									echo "<th>Final</th> ";
									echo "<th>Extra 1</th>";
									echo "<th>Extra 2</th> ";           
									echo "<th>Especial</th>";
									echo "<th>Semestre</th> ";
									echo "<th>Nivel inglés</th>";
									echo "<th>Status</th> ";
								echo "</tr>";
							$aux=0;
	                      while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
	                      	$aux++;
	                      	echo "<tr>";
	                      			echo "<td style='display: none' id=".$aux.">".$row[0]." ".$row[1]."</td>";
	                      			echo "<td style='display: none'>".$row[15]."</td>";
									echo "<td id=".$aux.">".$row[2]."</td>";
									echo "<td id=".$aux.">".$row[3]."</td>";
									echo "<td id=".$aux.">".$row[4]."</td> ";
									echo "<td id=".$aux.">".$row[5]."</td>";
									echo "<td id=".$aux.">".$row[6]."</td> ";
									echo "<td id=".$aux.">".$row[7]."</td>";
									echo "<td id=".$aux.">".$row[8]."</td> ";           
									echo "<td id=".$aux.">".$row[9]."</td>";
									echo "<td id=".$aux.">".$row[10]."</td> ";
									echo "<td id=".$aux.">".$row[11]."</td>";
									echo "<td id=".$aux.">".$row[12]."</td> ";
								echo "</tr>";
	                      }
	                    echo "</table>"; 

	                    echo "<table style='width:100%' id='datos_profes'>";
								echo "<tr>";
									echo "<th>Nombre</th>";
									echo "<th>Apellidos</th>";
									echo "<th>Matricula</th>";
									echo "<th>Materia</th>";
									echo "<th>Calif 1</th>";
									echo "<th>Calif 2</th> ";
									echo "<th>Calif 3</th>";
									echo "<th>Final</th> ";
									echo "<th>Extra 1</th>";
									echo "<th>Extra 2</th> ";           
									echo "<th>Especial</th>";
									echo "<th>Semestre</th> ";
									echo "<th>Nivel inglés</th>";
									echo "<th>Status</th> ";
								echo "</tr>";
							$aux=0;
	                      while($row = mysqli_fetch_array($result2, MYSQLI_NUM)){
	                      	$aux++;
	                      	echo "<tr>";
	                      			echo "<td style='display: none'>".$row[16]."</td>";
	                      			echo "<td id=".$aux.">".$row[0]."</td>";
	                      			echo "<td id=".$aux.">".$row[1]."</td>";
	                      			echo "<td id=".$aux.">".$row[15]."</td>";
									echo "<td id=".$aux.">".$row[2]."</td>";
									echo "<td id=".$aux.">".$row[3]."</td>";
									echo "<td id=".$aux.">".$row[4]."</td> ";
									echo "<td id=".$aux.">".$row[5]."</td>";
									echo "<td id=".$aux.">".$row[6]."</td> ";
									echo "<td id=".$aux.">".$row[7]."</td>";
									echo "<td id=".$aux.">".$row[8]."</td> ";           
									echo "<td id=".$aux.">".$row[9]."</td>";
									echo "<td id=".$aux.">".$row[10]."</td> ";
									echo "<td id=".$aux.">".$row[11]."</td>";
									echo "<td id=".$aux.">".$row[12]."</td> ";

								echo "</tr>";
	                      }
	                    echo "</table>"; 
	                 }

	            ?>
	    </div>
	</main>
<script type="text/javascript">
	function opc(opcion){
		switch(opcion){
			case 'buscar':
				document.getElementById("searchform_alumno").style.display="block";
				document.getElementById("searchform_profesor").style.display="none";
				document.getElementById("searchterma").value="";
				document.getElementById("searchterma").placeholder="Nombre/matricula";
				document.getElementById("iconos").innerHTML="";
				document.getElementById("datos").style.display="none";
				document.getElementById("datos_profes").style.display="none";
				document.getElementById('datos_est').style.display="none";
				
			break;
			case 'ep':
				document.getElementById("searchform_alumno").style.display="none";
				document.getElementById("searchform_profesor").style.display="block";
				document.getElementById("searchtermp").value="";
				document.getElementById("searchtermp").placeholder="Nombre profesor";
				document.getElementById("iconos").innerHTML="";
				document.getElementById("datos").style.display="none";
				document.getElementById("datos_profes").style.display="none";
				document.getElementById('datos_est').style.display="block";
				

				
			break;
		}
	}
	function busqueda(){
		var entrada=document.getElementById('searchterma').value;
		document.getElementById('searchterma').value="";
		document.getElementById("datos").style.display="block";
		document.getElementById("datos_profes").style.display="none";
		document.getElementById('datos_est').style.display="block";
		document.getElementById('searchterma').placeholder="Nombre alumno/matricula";
		console.log(entrada);
		if(entrada != ""){
			var tableReg = document.getElementById('datos');
			var searchText = entrada.toLowerCase();
			//console.log(searchText);
			var cellsOfRow="";
			var compareWith="";
 			//document.getElementById('datos_est').style.display="block";
			// Recorremos todas las filas con contenido de la tabla
			for (var i = 1; i < tableReg.rows.length; i++){
				cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
				// Recorremos todas las celdas
				for (var j = 0; j < cellsOfRow.length; j++){
					compareWith = cellsOfRow[j].innerHTML.toLowerCase();
					//console.log(compareWith);
					// Buscamos el texto en el contenido de la celda
					console.log(compareWith.indexOf(searchText));
					if (compareWith.indexOf(searchText) != -1){
						
						if(cellsOfRow[j].style.display !="none"){
							cellsOfRow[j].style.display = 'block';	
						}
						//console.log(tableReg.rows[i]);
						break;
					}else if(compareWith.indexOf(searchText) == -1){
						tableReg.rows[i].style.display = 'none';
						
						break;
					}
				}
			}
		}
		
	}
	function busqueda2(){
		//document.getElementById('iconos').innerHTML=entrada;
		var entrada=document.getElementById('searchtermp').value;
		document.getElementById('searchtermp').value="";
		document.getElementById('searchtermp').placeholder="Nombre profesor";
		document.getElementById("datos").style.display="none";
		document.getElementById("datos_profes").style.display="block";
		document.getElementById('datos_est').style.display="block";
		if(entrada != ""){
			var tableReg = document.getElementById('datos_profes');
			var searchText = entrada.toLowerCase();
			//console.log(searchText);
			var cellsOfRow="";
			var compareWith="";
 			//console.log(tableReg.rows.length);
			// Recorremos todas las filas con contenido de la tabla
			for (var i = 1; i < tableReg.rows.length; i++){
				console.log(tableReg.rows.length);
				cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
				// Recorremos todas las celdas
				for (var j = 0; j < cellsOfRow.length; j++){
					compareWith = cellsOfRow[j].innerHTML.toLowerCase();
					console.log(compareWith);
					// Buscamos el texto en el contenido de la celda
					if (compareWith.indexOf(searchText) != -1){
						if(cellsOfRow[j].style.display !="none")
							cellsOfRow[j].style.display = 'block';	
						//console.log("mostrar");
						break;
					}else if(compareWith.indexOf(searchText) == -1){
						tableReg.rows[i].style.display = 'none';
						console.log(tableReg.rows[i]);
						break;
					}
				}
			}
		}
	}
</script>

</body>
</html>




