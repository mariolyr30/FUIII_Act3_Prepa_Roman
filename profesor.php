<?php 

include("con_db.php");

if (isset($_POST['profesor'])) {
    if (strlen($_POST['DNI']) >= 1 && 
	strlen($_POST['Nombre(s)']) >= 1 && 
	strlen($_POST['Apellidos']) >= 1 &&
	strlen($_POST['Telefono']) >= 1 &&
	strlen($_POST['Domicilio']) >= 1 && 
	strlen($_POST['Fecha_de_nacimiento']) >= 1 &&
	strlen($_POST['Sexo']) >= 1 &&
	strlen($_POST['Materia']) >= 1 && 
	strlen($_POST['Email']) >= 1 &&
	strlen($_POST['Grupos']) >= 1 &&
	strlen($_POST['Salon']) >= 1 && 
	strlen($_POST['Turno']) >= 1) {

	    $DNIprofesor = trim($_POST['DNI']);
	    $Nombre = trim($_POST['nombre(s)']);
	    $Apellidos = trim($_POST['apellidos']);
		$Telefono = trim($_POST['telefono']);
		$Domicilio = trim($_POST['domicilio']);
		$Fecha_de_nacimiento = trim($_POST['fecha_de_nacimiento']);
	    $Sexo = trim($_POST['sexo']);
		$Materia = trim($_POST['materia']);
		$Email = trim($_POST['email']);
		$Grupos = trim($_POST['grupos']);
	    $Salon = trim($_POST['salon']);
		$Turno = trim($_POST['turno']);

	    $consulta = "INSERT INTO profesor (dniprofesor, nombre(s), apellidos, telefono, domicilio, fecha_de_nacimiento, sexo, materia, email grupos, salon, turno) 
		VALUES ('$DNIprofesor','$Nombre','$Apellidos','$Telefono','$Domicilio','$Fecha_de_nacimiento','$Sexo','$Materia','$Email','$Grupos','$Salon','$Turno)";

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
