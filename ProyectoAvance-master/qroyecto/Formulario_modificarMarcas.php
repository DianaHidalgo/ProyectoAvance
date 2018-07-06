<?php 
	$id_marca = $_GET["id_marca"];
	$nombre_marca = $_GET["nombre_marca"];

	
?>

<HTML>
	<HEAD>
		<META charset="UFT-8">
		<TITLE> Marcas </TITLE>
	</HEAD>
	<BODY>
		<H1>F O R M U L A R I O      </H1>
		<H1>MARCAS </H1>
		<FORM ACTION= "modificarMarcas.php" METHOD="POST">
		  <LABEL> Folio </LABEL>
			<INPUT TYPE="TEXT" NAME="id_marca" value =<?php echo"".$id_marca.""?>
			readonly="readonly">
			</br>
			</br>
			<LABEL> Descripción </LABEL>
			<INPUT TYPE="TEXT" NAME="nombre_marca"  value =<?php echo"".$nombre_marca.""?>>
			</br>
			</br>
			
			<INPUT TYPE="SUBMIT" VALUE="Modificar"/>
			</br>
			
		</FORM>
	</BODY>
</HTML>