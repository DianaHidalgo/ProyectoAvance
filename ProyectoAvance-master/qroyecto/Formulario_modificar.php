<?php 
	$id_usuario= $_GET['id_usuario'];
	$nombre_usuario= $_GET['nombre_usuario'];
	$tipo_usuario= $_GET['tipo_usuario'];
	$usuario= $_GET['usuario'];
	$contrasenia= $_GET['contrasenia'];
?>

<HTML>
	<HEAD>
		<META charset="UFT-8">
		<TITLE> Usuarios </TITLE>
	</HEAD>
	<BODY>
		<H1>F O R M U L A R I O      </H1>
		<H1>U S U A R I O S </H1>
		<FORM ACTION= "modificarUsuarios.php" METHOD="POST">
		  <LABEL> id_usuario </LABEL>
			<INPUT TYPE="TEXT" NAME="id_usuario" value =<?php echo"".$id_usuario.""?>
			readonly = "readonly"/>
			</br>
			</br>
			<LABEL> nombre_usuario </LABEL>
			<INPUT TYPE="TEXT" NAME="nombre_usuario"  value =<?php echo"".$nombre_usuario.""?>>
			</br>
			</br>
			<LABEL> tipo_usuario </LABEL>
			<INPUT TYPE="TEXT" NAME="tipo_usuario"  value =<?php echo"".$tipo_usuario.""?>>
			</br>
			</br>
			<LABEL> usuario </LABEL>
			<INPUT TYPE="TEXT" NAME="usuario"  value =<?php echo"".$usuario.""?>>
			</br>
			</br>
			<LABEL> contrasenia </LABEL>
			<INPUT TYPE="TEXT" NAME="contrasenia"  value =<?php echo"".$contrasenia.""?>>
			</br>
			</br>
			<INPUT TYPE="SUBMIT" VALUE="Modificar"/>
			</br>
			
		</FORM>
	</BODY>
</HTML>