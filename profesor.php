<?php 

include("con_db.php");

if (isset($_POST['profesor'])) {
    if (strlen($_POST['dniprofesor']) >= 1 && 
	strlen($_POST['nombre(s)']) >= 1 && 
	strlen($_POST['apellidos']) >= 1 &&
	strlen($_POST['telefono']) >= 1 &&
	strlen($_POST['domicilio']) >= 1 && 
	strlen($_POST['fecha_de_nacimiento']) >= 1 &&
	strlen($_POST['sexo']) >= 1 &&
	strlen($_POST['materia']) >= 1 && 
	strlen($_POST['email']) >= 1 &&
	strlen($_POST['grupos']) >= 1 &&
	strlen($_POST['salon']) >= 1 && 
	strlen($_POST['turno']) >= 1) {

	    $dniprofesor = trim($_POST['dniprofesor']);
	    $nombre = trim($_POST['nombre(s)']);
	    $apellidos = trim($_POST['apellidos']);
		$telefono = trim($_POST['telefono']);
		$domicilio = trim($_POST['domicilio']);
		$fecha_de_nacimiento = trim($_POST['fecha_de_nacimiento']);
	    $sexo = trim($_POST['sexo']);
		$materia = trim($_POST['materia']);
		$email = trim($_POST['email']);
		$grupos = trim($_POST['grupos']);
	    $salon = trim($_POST['salon']);
		$turno = trim($_POST['turno']);

	    $consulta = "INSERT INTO profesor (dniprofesor, nombre(s), apellidos, telefono, domicilio, fecha_de_nacimiento, sexo, materia, email grupos, salon, turno) 
		VALUES ('$dniprofesor','$nombre','$apellidos','$telefono','$domicilio','$fecha_de_nacimiento','$sexo','$materia','$email','$grupos','$salon','$turno)";

	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>