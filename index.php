<!DOCTYPE html>
<html>
<head>
	<title>Registro Escolar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de profesores</h1>
    	<input type="text" name="DNIprofesor" placeholder="DNI">
    	<input type="text" name="Nombre(s)" placeholder="Nombre(s)">
		<input type="text" name="Apellidos" placeholder="Apellidos">
		<input type="text" name="Telefono" placeholder="Telefono">
		<input type="text" name="Domicilio" placeholder="Domicilio">
        <input type="datetime" name="Fecha de nacimiento" placeholder="Fecha de nacimiento">
        <input type="text" name="Sexo" placeholder="Sexo">
        <input type="text" name="Materia" placeholder="Materia">
        <input type="email" name="Email" placeholder="Email">
        <input type="number" name="Grupos" placeholder="Grupos">
        <input type="number" name="Salon" placeholder="Salon">
        <input type="text" name="Turno" placeholder="Turno">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("profesor.php");
        ?>
</body>
</html>