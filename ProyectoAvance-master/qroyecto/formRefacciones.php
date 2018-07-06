<?php 

$folio_refaccion =$_GET['folio_refaccion'];
$descripcion_refaccion =$_GET['descripcion_refaccion'];
$existencia_refaccion =$_GET['existencia_refaccion'];
$catalogo_refaccion =$_GET['catalogo_refaccion'];
$proveedor_refaccion =$_GET['proveedor_refaccion'];

?>
<HTML>
	<HEAD>
		<META charset="UFT-8">
		<TITLE> Refacciones </TITLE>
	</HEAD>
	<BODY>
		<H1>F O R M U L A R I O    R E F A C C I O N E S </H1>
		<FORM ACTION= "insertarRefa.php" METHOD="POST">
			<LABEL> folio_refaccion </LABEL>
			<INPUT TYPE="TEXT" NAME="folio_refaccion"/>
			</br>
			</br>
			<LABEL> descripcion_refaccion </LABEL>
			<INPUT TYPE="TEXT" NAME="descripcion_refaccion"/>
			</br>
			</br>
			<LABEL> existencia_refaccion </LABEL>
			<INPUT TYPE="TEXT" NAME="existencia_refaccion"/>
			</br>
			</br>
			<LABEL> catalogo_refaccion </LABEL>
			<INPUT TYPE="TEXT" NAME="catalogo_refaccion"/>
			</br>
			</br>
			<LABEL> proveedor_refaccion </LABEL>
			<INPUT TYPE="TEXT" NAME="proveedor_refaccion"/>
			</br>
			</br>
			<INPUT TYPE="SUBMIT" VALUE="Enviar"/>
			</br>
			
		</FORM>
	</BODY>
</HTML>