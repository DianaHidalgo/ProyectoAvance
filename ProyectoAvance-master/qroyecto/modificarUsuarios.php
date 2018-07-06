<?PHP
	ECHO "<H1> Actualizando datos </BR></H1>";
	
	$id_usuario= $_POST['id_usuario'];
	$nombre_usuario= $_POST['nombre_usuario'];
	$tipo_usuario= $_POST['tipo_usuario'];
	$usuario= $_POST['usuario'];
	$contrasenia= $_POST['contrasenia'];
	
	echo "id_usuario".$id_usuario."</br>";
	echo "nombre_usuario".$nombre_usuario."</br>";
	echo "tipo_usuario".$tipo_usuario."</br>";
	echo "usuario".$usuario."</br>";	
	echo "contraseña".$contrasenia."</br>";
	
	$servername="localhost";
	$database="qroyecto1";
	$username="root";
	$password="";
	
	//1.2 Función para conectarnos
	$conexion=mysqli_connect($servername, $username, $password, $database);
	
	//1.3 Bandera que monitorea la conexión
	$banderaconexion = true;
	if ($conexion){//si hubo conexión
		 ECHO "Conexión exitosa. </BR> ";
		
	}else{
		ECHO "Conexión fallida. <BR>";
		$banderaconexion= false;
	}
	
	$banderaconsulta=true;
	if ($banderaconexion == true){
		ECHO "Ejecutando consulta </br>";
		$query = "UPDATE usuarios SET nombre_usuario='".$nombre_usuario."', tipo_usuario='".$tipo_usuario."', usuario='".$usuario."', contrasenia='".$contrasenia."' WHERE id_usuario=".$id_usuario."";
		ECHO $query."</br>";
		$resultado=mysqli_query($conexion,$query);

		
		if($resultado){
			ECHO "La modificación fue exitosa </br>";
			//redireccion a la pagina de consulta
			header("Refresh:5 url= http://localhost/S133/qroyecto/");
		}else{
			ECHO "La modificación fue fallida ";
		}
		}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>