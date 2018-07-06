<?php
	ECHO "Modulo eliminar<BR>";
	$folio_refaccion=$_GET['folio_refaccion'];
	//ECHO "IdBeca a eliminar: ".$IdBeca."</BR>";
	//Paso 1. onectarnos a la BD
	//1.1 Datos de la conexión
	$servername="localhost";
	$database="qroyecto1";
	$username="root";
	$password="";
	
	//1.2 Función para conectarnos
	$conexion=mysqli_connect($servername, $username, $password, $database);
	
	//1.3 Bandera que monitorea la conexión
	$banderaconexion = true;
	if ($conexion){
		 ECHO "Conexión exitosa. <BR>";
		
	}else{
		ECHO "Conexión fallida. <BR>";
		$banderaconexion= false;
	}
	
	
	//Consulta
	if ($banderaconexion==true){
		ECHO "Ejecutando consulta <BR>";
		$query="DELETE FROM Refacciones WHERE folio_refaccion= ".$folio_refaccion."";
		//2.2 Ejecutar la consulta
		ECHO $query. "<BR>";
		$resultados=mysqli_query($conexion, $query);
		
		//2.3 Validar la ejecución
		$banderaconsulta= true;
		if($resultados){
			ECHO"Consulta ejecutada con éxito. <BR>";
		}else {
			ECHO "Consulta fallida :c <BR>";
			$banderaconsulta=false;
		}
		
		if($banderaconsulta==true){
			ECHO "Refrescando página post-eliminación <BR>";
			//HEADER("refresh:5  url=http://localhost/proyecto/Beca/Proyecto.php");
		}else{
			ECHO "No se imprimirán resultados <BR>";
		}
	} else {
		ECHO "No se ejecutará la consulta por falla de la conexión <BR>";
	}
?>