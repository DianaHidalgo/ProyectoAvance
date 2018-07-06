<?php 
	$folio_refaccion = $_GET["folio_refaccion"];
	$descripcion_refaccion = $_GET["descripcion_refaccion"];
	$existencia_refaccion = $_GET["existencia_refaccion"];
	$catalogo_refaccion = $_GET["catalogo_refaccion"];
	$proveedor_refaccion = $_GET["proveedor_refaccion"];
	
?>

<HTML>
	<HEAD>
		<META charset="UFT-8">
		<TITLE> Refacciones </TITLE>
	</HEAD>
	<BODY>
		<H1>F O R M U L A R I O      </H1>
		<H1>REFACCIONES </H1>
		<FORM ACTION= "modifRefacciones.php" METHOD="POST">
		  <LABEL> Folio </LABEL>
			<INPUT TYPE="TEXT" NAME="folio_refaccion" value =<?php echo"".$folio_refaccion.""?>>
			</br>
			</br>
			<LABEL> Descripción </LABEL>
			<INPUT TYPE="TEXT" NAME="descripcion_refaccion"  value =<?php echo"".$descripcion_refaccion.""?>>
			</br>
			</br>
			<LABEL> Existencia </LABEL>
			<INPUT TYPE="TEXT" NAME="existencia_refaccion"  value =<?php echo"".$existencia_refaccion.""?>>
			</br>
			</br>
			<LABEL> Catálogo </LABEL>
			<INPUT TYPE="TEXT" NAME="catalogo_refaccion"  value =<?php echo"".$catalogo_refaccion.""?>>
			</br>
			</br>
			<LABEL> Proveedor </LABEL>
			<INPUT TYPE="TEXT" NAME="proveedor_refaccion"  value =<?php echo"".$proveedor_refaccion.""?>>
			</br>
			</br>
			<INPUT TYPE="SUBMIT" VALUE="Modificar"/>
			</br>
			
		</FORM>
	</BODY>
</HTML>