<?php 
	session_start();
	error_reporting(0);
	$varsesion = $_SESSION['Username'];

 if($varsesion == null || $varsesion = ''){
	echo "No tiene autorización";
	die();
 }
?>

<!DOCTYPE html>
<html leng="en">
<head>
	<meta charset="utf-8">
	<title>Panel</title>
</head>
<body>
<h1> Bienvenido al panel</h1>
<h2> Bienvenido: <?php echo $_SESSION['Username']?> </h2>
<a href="Cerrar_sesion.php"> Cerrar sesión </a>
</body>
</html>