<?PHP
	$id_marca = $_POST["id_marca"];
	$nombre_marca = $_POST["nombre_marca"];
		
	$servername="localhost";
			$database="qroyecto1";
			$username="root";
			$password="";
			
			$conexion=mysqli_connect($servername, $username, $password, $database);
					
			$banderaconexion = true;
			
			if ($conexion) {
				ECHO "Conexion exitosa <BR>";
			}else{
				ECHO "Conexion fallida<BR>";
				$banderaconexion = false;
			}
	$banderaconsulta=true;
	if($banderaconexion==true){
		ECHO "Ejecutanco Consulta </br>";
			
		$query = "INSERT INTO Marcas (id_marca , nombre_marca) VALUES ('".$id_marca."', '".$nombre_marca."')";
		ECHO $query."</br>";
		$resultado1= mysqli_query($conexion,$query);
		if($resultado1){
			ECHO "Inserción fue exitosa </br>"; 
			header("Refresh:5 url= http://localhost/S133/qroyecto/consultMarcas.php");
		}else{
			ECHO "Insercion fallida </br>";
		}
	}else{
		ECHO "No se ejecutará la consulta";
	}
?>