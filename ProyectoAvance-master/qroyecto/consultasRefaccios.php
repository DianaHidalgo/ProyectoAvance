<HTML>
	<HEAD>
		<TITLE> consultasRefacciones </TITLE>
	</HEAD>
	<BODY>
		<H1> CONSULTAS</H1>
		<H1> R E F A C C I O N E S </H1>
	
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
			
			
			if ($banderaconexion == true){
				ECHO "Ejecutando consulta <BR>";
				
				$query="SELECT * FROM Refacciones";
				
				ECHO $query. "<BR>";
				$resultado = mysqli_query($conexion, $query);
			
				$banderaconsulta = true;
				if ($resultado){
					ECHO "Consulta ejecutada con exito <BR>";
				}else{
					ECHO "Consulta fallida<BR>";
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
			// registros
			ECHO "<TABLE BORDER =1 frame=below>";
				ECHO "<TH> folio_refaccion </TH>";
				ECHO "<TH> descripcion_refaccion </TH>";
				ECHO "<TH> existencia_refaccion </TH>";
				ECHO "<TH> catalogo_refaccion </TH>";
				ECHO "<TH> proveedor_refaccion </TH>";
				ECHO "<TH> Modificar </th>";
				ECHO "<TH> Eliminar </th>";
				
				ECHO "<TR>";
				for($i=0; $i<=$row=mysqli_fetch_array($resultado, MYSQLI_ASSOC); $i++)
					{		$folio_refaccion = $row["folio_refaccion"];
							$descripcion_refaccion = $row["descripcion_refaccion"];
							$existencia_refaccion = $row["existencia_refaccion"];
							$catalogo_refaccion = $row["catalogo_refaccion"];
							$proveedor_refaccion = $row["proveedor_refaccion"];
					
					
					// resutados
					
						ECHO "<TD>".$folio_refaccion."</TD>";
						ECHO "<TD>".$descripcion_refaccion."</TD>";
						ECHO "<TD>".$existencia_refaccion."</TD>";
						ECHO "<TD>".$catalogo_refaccion."</TD>";
						ECHO "<TD>".$proveedor_refaccion."</TD>";
						ECHO "<TD> <a href='Formulario_modificarRefa.php?folio_refaccion=".$folio_refaccion ."&descripcion_refaccion=".$descripcion_refaccion."&existencia_refaccion=".$existencia_refaccion."&catalogo_refaccion=".$catalogo_refaccion."&proveedor_refaccion=".$proveedor_refaccion."'>Modificar </a></td>";
						echo "<TD> <a href='eliminarRefacciones.php?folio_refaccion=".$folio_refaccion."'>Eliminar </a></td>";
					ECHO "</TR>";
					}
					
			ECHO "</TABLE>";
		?>

	</BODY>
</HTML>