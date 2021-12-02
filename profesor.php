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
	    $nombre = trim($_POST['nombre']);
	    $apellidos = trim($_POST['apellido']);
		$telefono = trim($_POST['ciudad']);
		$domicilio = trim($_POST['correo']);
		$fecha_de_nacimiento = trim($_POST['nombre']);
	    $sexo = trim($_POST['apellido']);
		$materia = trim($_POST['ciudad']);
		$email = trim($_POST['correo']);
		$grupos = trim($_POST['nombre']);
	    $salon = trim($_POST['apellido']);
		$turno = trim($_POST['turno']);

	    $consulta = "INSERT INTO profesor (dniprofesor, nombre(s), apellidos, telefono, domicilio, fecha_de_nacimiento, sexo, materia, email grupos, salon, turno) 
		VALUES ('$dniprofesor','$nombre(s)','$apellidos','$telefono','$domicilio','$fecha_de_nacimiento','$sexo','$materia','$email','$grupos','$salon','$turno)";

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