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
	    $Nombre = trim($_POST['Nombre(s)']);
	    $Apellidos = trim($_POST['Apellidos']);
		$Telefono = trim($_POST['Telefono']);
		$Domicilio = trim($_POST['Domicilio']);
		$Fecha_de_nacimiento = trim($_POST['Fecha de nacimiento']);
	    $Sexo = trim($_POST['Sexo']);
		$Materia = trim($_POST['Materia']);
		$Email = trim($_POST['Email']);
		$Grupos = trim($_POST['Grupos']);
	    $Salon = trim($_POST['Salon']);
		$Turno = trim($_POST['Turno']);

	    $consulta = "INSERT INTO profesor (DNI, Nombre(s), Apellidos, Telefono, Domicilio, Fecha de nacimiento, Sexo, Materia, Email, Grupos, Salon, Turno) 
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
