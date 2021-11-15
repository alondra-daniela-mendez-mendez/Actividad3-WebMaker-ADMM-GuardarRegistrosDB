<?php 

include("con_db.php");

if (isset($_POST['empleado'])) {
    if (strlen($_POST['nombre']) >= 1 
	&& strlen($_POST['ape']) >= 1 
	&& strlen($_POST['correo']) >= 1 
	&& strlen($_POST['fecha_nac']) >= 1 
	&& strlen($_POST['esp']) >= 1) {
	    $nombre = trim($_POST['nombre']);
		$ape = trim($_POST['ape']);
		$correo = trim($_POST['correo']);
	    $fecha = trim($_POST['fecha_nac']);
	    $esp = trim($_POST['esp']);
	    $consulta = "INSERT INTO empleados(nombre, apellidos, email, fecha_nac, especializacion) VALUES ('$nombre','$ape','$correo','$fecha','$esp')";
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
