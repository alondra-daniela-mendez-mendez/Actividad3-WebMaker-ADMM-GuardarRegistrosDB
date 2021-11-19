<!DOCTYPE html>
<html>
<head>
	<title>Registrar Empleado</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de Empleados</h1>
		<label for="nombre">Nombre:</label><br>
    	<input type="text" name="nombre" placeholder="Nombre" id="nombre"><br>
		<label for="ape">Apellidos:</label><br>
    	<input type="text" name="ape" placeholder="Apellidos" id="ape"><br>
		<label for="correo">Correo:</label><br>
		<input type="email" name="correo" placeholder="micorreo@gmail.com" id="correo"><br>
		<label for="fecha_nac">Fecha de Nacimiento:</label><br>
		<input type="date" name="fecha_nac" id="fecha_nac"><br>
		<label for="esp">Especializad Web:</label><br>
		<input type="text" name="esp" placeholder="Especialización" id="esp"><br>
    	<input type="submit" name="empleado">
    </form>
        <?php 
        include("empleados.php");
        ?>
	<footer>
		<div class="wrapp">
            <p> SUBMÓDULO 2
                Desarrolla aplicaciones Web con conexión a bases de datos</p>
            <h2>Méndez Méndez Alondra Daniela 5J • No. Lista: 27  </h2>
            <a href="https://github.com/alondra-daniela-mendez-mendez">https://github.com/alondra-daniela-mendez-mendez </a>
		</div>
	</footer>
</body>
</html>
