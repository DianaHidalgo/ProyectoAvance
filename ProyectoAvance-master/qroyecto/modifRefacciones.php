<?PHP
	ECHO "<H1> Actualizando datos </BR></H1>";
	
	$folio_refaccion = $_POST["folio_refaccion"];
	$descripcion_refaccion = $_POST["descripcion_refaccion"];
	$existencia_refaccion = $_POST["existencia_refaccion"];
	$catalogo_refaccion = $_POST["catalogo_refaccion"];
	$proveedor_refaccion = $_POST["proveedor_refaccion"];
	
	
	//ECHO "Hemos enviado un mensaje a tu correo ".$correo."</BR>";
	
	$servername="localhost";
	$database="qroyecto1";
	$username="root";
	$password="";
	
	
	$conexion=mysqli_connect($servername, $username, $password, $database);
	
	
	$banderaconexion = true;
	if ($conexion){
		 ECHO "Conexión exitosa. </BR> ";
		
	}else{
		ECHO "Conexión fallida :c <BR>";
		$banderaconexion= false;
	}
	
	$banderaconsulta=true;
	if ($banderaconexion == true){
		ECHO "Ejecutando consulta </br>";
		$query = "UPDATE Refacciones SET descripcion_refaccion='".$descripcion_refaccion."', existencia_refaccion='".$existencia_refaccion."', catalogo_refaccion='".$catalogo_refaccion."', proveedor_refaccion='".$proveedor_refaccion."' WHERE folio_refaccion=".$folio_refaccion."";
		ECHO $query."</br>";
		$resultado=mysqli_query($conexion,$query);

		
		if($resultado){
			ECHO "La modificación fue exitosa </br>";
			
			header("Refresh:5 url= http://localhost/S133/qroyecto");
		}else{
			ECHO "La modificación fue fallida ";
		}
		}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>