<!DOCTYPE html>
<html>
<head>

	<title>Recuperar Contraseña</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
<?php 
	include '../controlador/recuperar_contra.php';
?>
	<h2><?php echo $correo; ?></h2>
	<h3><?php echo $mensajes; ?></h3>
</body>
</html>
