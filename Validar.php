<?php
	session_start();

$Usuario=$_POST['Username'];
$Clave=$_POST['Pass'];

$_SESSION['Username']= $Username;
header("Location:panel.php") 


//Conectar base de datos
$conexion=mysqli_connect("localhost","root","","bd_webink");
$Consulta="SELECT * FROM usuarios WHERE User ='$Usuario' and Pass ='$Clave'";
$Resultado=mysqli_query($conexion, $Consulta);

$filas=mysqli_num_rows($Resultado);
if ($filas>0) {
	header("location:index.html");
} 

else {
		echo "No mano, te equivocaste po :c";
}

mysqli_free_result($Resultado);
mysqli_close($conexion); 
?>