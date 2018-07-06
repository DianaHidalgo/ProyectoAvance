<?PHP
	$id_usuario= $_POST["id_usuario"];
	$nombre_usuario= $_POST["nombre_usuario"];
	$tipo_usuario= $_POST["tipo_usuario"];
	$usuario= $_POST["usuario"];
	$contrasenia= $_POST["contrasenia"];
	
		
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
			
		$query = "INSERT INTO usuarios (id_usuario, nombre_usuario, tipo_usuario, usuario, contrasenia) VALUES (NULL, '".$nombre_usuario."', '".$tipo_usuario."', '".$usuario."', '".$contrasenia."')";
		ECHO $query."</br>";
		$resultado1= mysqli_query($conexion,$query);
		if($resultado1){
			ECHO "Inserción fue exitosa </br>"; 
			//redireccion a la pagina de consulta
			header("Refresh:5 url= http://localhost/S133/qroyecto/");
		}else{
			ECHO "Insercion Fallida </br>";
		}
	}else{
		ECHO "No se ejecutará la consulta";
	}
?>