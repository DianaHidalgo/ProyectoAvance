<HTML>
	<HEAD>
		<TITLE> consultas </TITLE>
	</HEAD>
	<BODY>
		<H1> C O N S U L T A S    </H1>
		<H1>M A R C A S </H1>
	
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
				ECHO "Conexion fallida<BR>";
				$banderaconexion = false;
			}
			//2. CONSULTA
			if ($banderaconexion == true){
				ECHO "Ejecutando consulta <BR>";
				//2.1 Estableciendo la consulta a ejecutará
				$query="SELECT * FROM Marcas";
				//2.2 Ejecutar la consulta
				ECHO $query. "<BR>";
				$resultado = mysqli_query($conexion, $query);
				//2.3 VALIDAR LA EJECUCIÓN
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
					ECHO "No se imprimiran resultados :( <BR>";
				}
			}else{
				ECHO "No se ejecutará la consulta por falla en conexión <BR>";
			}
			ECHO "<H1> Lista de registros </H1>";
			//3. Imprimiendo registros
			ECHO "<TABLE BORDER =1 frame=below>";
				ECHO "<TH> id_marca</TH>";
				ECHO "<TH> nombre_marca</TH>";
				ECHO "<TH> Modificar </th>";
				ECHO "<TH> Eliminar </th>";
				
				//3.1 Implementando el ciclo for 
				
				while ($i=$row=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
					//3.2 Atrapar los indices
					$id_marca = $row['id_marca'];
					$nombre_marca = $row ['nombre_marca'];
					
					
					//3.3 Imprimir resutados
					ECHO "<TR>";
						ECHO "<TD>".$id_marca."</TD>";
						ECHO "<TD>".$nombre_marca."</TD>";
						ECHO "<TD> <a href='Formulario_modificarMarcas.php?id_marca=".$id_marca ."&nombre_marca=".$nombre_marca."'>Modificar </a></td>";
						echo "<TD> <a href='eliminarMarcas.php?id_marca=".$id_marca."'>Eliminar </a></td>";
					ECHO "</TR>";
				}
					
			ECHO "</TABLE>";
		?>

	</BODY>
</HTML>