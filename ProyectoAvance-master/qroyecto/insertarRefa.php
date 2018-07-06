<?PHP
	$folio_refaccion = $_POST["folio_refaccion"];
	$descripcion_refaccion = $_POST["descripcion_refaccion"];
	$existencia_refaccion = $_POST["existencia_refaccion"];
	$catalogo_refaccion = $_POST["catalogo_refaccion"];
	$proveedor_refaccion = $_POST["proveedor_refaccion"];
		
		$servername="localhost";
		$database="qroyecto1";
		$username="root";
		$password="";
			
		$conexion=mysqli_connect($servername, $username, $password, $database);
					

	$banderaconexion = true;
				
	if ($conexion) {//si hubo conexion
		ECHO "Conexion exitosa. <BR>";
	}else{
		ECHO "Conexion fallida. <BR>";
		$banderaconexion = false;
	}
	$banderaconsulta=true;
	if($banderaconexion==true){
		ECHO "Ejecutanco Consulta </br>";
			
		$query = "INSERT INTO Refacciones (folio_refaccion , descripcion_refaccion, existencia_refaccion, catalogo_refaccion, proveedor_refaccion) VALUES ('".$folio_refaccion."', '".$descripcion_refaccion."', '".$existencia_refaccion."', '".$catalogo_refaccion."','".$proveedor_refaccion."')";
		ECHO $query."</br>";
		$resultado1= mysqli_query($conexion,$query);
		if($resultado1){
			ECHO "Inserción fue exitosa </br>"; 
			//redireccion a la pagina de consulta
			header("Refresh:5 url= http://localhost/S133/qroyecto/consultasRefaccios.php");
		}else{
			ECHO "Insercion Fallida </br>";
		}
	}else{
		ECHO "No se ejecutará la consulta";
	}
?>