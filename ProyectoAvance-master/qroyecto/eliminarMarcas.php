<?php
	ECHO "Modulo eliminar<BR>";
	$id_marca=$_GET['id_marca'];
	ECHO "Id Marca a eliminar: ".$id_marca."</BR>";
	
	$servername="localhost";
	$database="qroyecto1";
	$username="root";
	$password="";
	
	//1.2 Función para conectarnos
	$conexion=mysqli_connect($servername, $username, $password, $database);
	
	//1.3 Bandera que monitorea la conexión
	$banderaconexion = true;
	if ($conexion){
		 ECHO "Conexión exitosa<BR>";
		
	}else{
		ECHO "Conexión fallida <BR>";
		$banderaconexion= false;
	}
	
	
	//Consulta
	if ($banderaconexion==true){
		ECHO "Ejecutando consulta <BR>";
		$query="DELETE FROM Marcas WHERE id_marca= ".$id_marca."";
		
		ECHO $query. "<BR>";
		$resultados=mysqli_query($conexion, $query);
		
		
		$banderaconsulta= true;
		if($resultados){
			ECHO"Consulta ejecutada con éxito. <BR>";
		}else {
			ECHO "Consulta fallida <BR>";
			$banderaconsulta=false;
		}
		
		if($banderaconsulta==true){
			ECHO "Refrescando página post-eliminación <BR>";
			HEADER("refresh:5  url=http://localhost/S133/qroyecto/consultMarcas.php");
		}else{
			ECHO "No se imprimirán resultados <BR>";
		}
	} else {
		ECHO "No se ejecutará la consulta por falla de la conexión <BR>";
	}
?>