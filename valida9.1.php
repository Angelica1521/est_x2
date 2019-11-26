<?php
	require('conexion.php');
	
	$id=$_POST["id_ad"];
	$correo=$_POST["correo"];
	$contra=$_POST["contra"];
	
	$query="INSERT INTO admin(id_ad,correo,contra) VALUES ('$id','$correo','$contra')";
		
	$resultado= $mysqli->query($query);
	
	if($resultado){
		header("Location:tabla3.html");
		
	}
	else{
		echo "Insercion no exitosa";
	}






$correo=$_POST['correo'];
$contra=$_POST['contra'];

$conexion=mysqli_connect("localhost","root","socrates","estetica");
$consulta="SELECT * FROM admin WHERE correo='$correo' and contra='$contra'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){
header("location:tabla3.html");
}
else{
echo "error solamente tiene 3 intentos,sino se bloqueara el sistema";
}
mysqli_free_result($resultado);
mysqli_close($conexion);


?>