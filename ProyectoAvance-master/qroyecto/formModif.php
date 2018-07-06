<?php 

$id_usuario =$_GET['id_usuario'];
$nombre_usuario =$_GET['nombre_usuario'];
$tipo_usuario =$_GET['tipo_usuario'];
$usuario =$_GET['usuario'];
$contrasenia =$_GET['contrasenia'];

?>
<HTML>
	<HEAD>
		<META charset="UFT-8">
		<TITLE> Usuarios </TITLE>
	</HEAD>
	<BODY>
		<H1>F O R M U L A R I O    U S U A R I O S </H1>
		<FORM ACTION= "modificarUsuarios.php" METHOD="POST">
			<LABEL> id_usuario </LABEL>
			<INPUT TYPE="TEXT" NAME="id_usuario"/>
			</br>
			</br>
			<LABEL> nombre_usuario </LABEL>
			<INPUT TYPE="TEXT" NAME="nombre_usuario"/>
			</br>
			</br>
			<LABEL> tipo_usuario </LABEL>
			<INPUT TYPE="TEXT" NAME="tipo_usuario"/>
			</br>
			</br>
			<LABEL> usuario </LABEL>
			<INPUT TYPE="TEXT" NAME="usuario"/>
			</br>
			</br>
			<LABEL> contrasenia </LABEL>
			<INPUT TYPE="TEXT" NAME="contrasenia"/>
			</br>
			</br>
			<INPUT TYPE="SUBMIT" VALUE="Enviar"/>
			</br>
			
		</FORM>
	</BODY>
</HTML>