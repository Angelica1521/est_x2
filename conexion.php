<?php
$mysqli=new mysqli("localhost","root","socrates","estetica");

if(mysqli_connect_error()){
	echo 'Conexion Fallida:',mysqli_connect_error();
	exit();
	
	
}

   
?>