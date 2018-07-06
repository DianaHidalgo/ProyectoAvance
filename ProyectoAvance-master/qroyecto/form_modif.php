<?php 

$id_marca =$_GET['id_marca'];
$nombre_marca =$_GET['nombre_marca'];

?>
<html>
	<head>
		<title>MODIFICAR MARCAS</title>
	</head>
	<body>
		<form action = "modificarMarcas.php" METHOD="POST">
			<!--Cajas de texto !-->
				
			<label>Id Marca</label>
			<input TYPE ="TEXT" NAME = "id_marca" 
			value = <?php echo "".$id_marca."" ?> 
			/>
			</br>
				
			<label>Nombre Marca</label>
			<input TYPE ="TEXT" NAME = "nombre_marca" 
			value = <?php 
			echo "".$nombre_marca."" ?> />
			</br>
				
			<!--Boton de envio !-->
			<input type = "SUBMIT" VALUE = "Modificar" />
		</form>
	
	</body>
</html>