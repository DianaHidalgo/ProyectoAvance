<HTML>
	<HEAD>
		<TITLE> consultasUsuarios </TITLE>
	</HEAD>
	<BODY>
		<H1> C O N S U L T A S  DE USUARIO  </H1>
		<H1>U S U A R I O S </H1>
	
		<?PHP
			$servername="localhost";
			$database="qroyecto1";
			$username="root";
			$password="";
			
			$conexion=mysqli_connect($servername, $username, $password, $database);
					
			$banderaconexion = true;
			
			if ($conexion) {
				ECHO "Conexion exitosa <BR>";
			}else{
				ECHO "Conexion fallida <BR>";
				$banderaconexion = false;
			}
			

			if ($banderaconexion == true){
				ECHO "Ejecutando consulta <BR>";
				$query="SELECT * FROM usuarios";
				ECHO $query. "<BR>";
				$resultado = mysqli_query($conexion, $query);
				$banderaconsulta = true;
				if ($resultado){
					ECHO "Consulta ejecutada con exito <BR>";
				}else{
					ECHO "Consulta fallida <BR>";
					$banderaconsulta = false;
				}
				if ($banderaconsulta ==true){
					//2.4 Estableciendo el límite del arreglo delimitando por el número de filas
					$num_filas = mysqli_num_rows($resultado);
					ECHO "Imprimiendo ".$num_filas." Resultados <BR>";
					
				}else{
					ECHO "No se imprimiran resultados <BR>";
				}
			}else{
				ECHO "No se ejecutará la consulta por falla en conexión <BR>";
			}
			ECHO "<H1> Lista de registros </H1>";
			//3. Imprimiendo registros
			ECHO "<TABLE BORDER =1 frame=below>";
				ECHO "<TH> ID Usuario </TH>";
				ECHO "<TH> Nombre  </TH>";
				ECHO "<TH> Tipo </TH>";
				ECHO "<TH> Usuario </TH>";
				ECHO "<TH> Contraseña </TH>";
				ECHO "<TH> Modificar </th>";
				ECHO "<TH> Eliminar </th>";
				
			

					ECHO "<TR>";
					for($i=0; $i<=$row=mysqli_fetch_array($resultado, MYSQLI_ASSOC); $i++)
					{		$id_usuario=$row['id_usuario'];
							$nombre_usuario=$row['nombre_usuario'];
							$tipo_usuario=$row['tipo_usuario'];
							$usuario=$row['usuario'];
							$contrasenia=$row['contrasenia'];
				
						ECHO "<TD>".$id_usuario."</TD>";
						ECHO "<TD>".$nombre_usuario."</TD>";
						ECHO "<TD>".$tipo_usuario."</TD>";
						ECHO "<TD>".$usuario."</TD>";
						ECHO "<TD>".$contrasenia."</TD>";
						ECHO "<TD> <a href='Formulario_modificar.php?id_usuario=".$id_usuario."&nombre_usuario=".$nombre_usuario."&tipo_usuario=".$tipo_usuario."&usuario=".$usuario."&contrasenia=".$contrasenia."'>Modificar </a></td>";
						echo "<TD> <a href='eliminarUsuarios.php?id_usuario=".$id_usuario."'> Eliminar </a></td>";
					ECHO "</TR>";
					}
			ECHO "</TABLE>";
			header("Refresh:5 url= http://localhost/S133/qroyecto/");
		?>

	</BODY>
</HTML>