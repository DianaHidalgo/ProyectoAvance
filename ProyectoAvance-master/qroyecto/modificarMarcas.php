<?PHP
	ECHO "<H1> Actualizando datos </BR></H1>";
	
	$id_marca= $_POST["id_marca"];
	$nombre_marca= $_POST["nombre_marca"];
	
	ECHO "El Id de la marca es: ".$id_marca."</BR>";
	ECHO "El nombre de la marca es: ".$nombre_marca."</BR>";
	
	//ECHO "Hemos enviado un mensaje a tu correo ".$correo."</BR>";
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
	if ($banderaconexion == true){
		ECHO "Ejecutando consulta </br>";
		$query = "UPDATE Marcas SET nombre_marca='".$nombre_marca."' WHERE id_marca=".$id_marca."";
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