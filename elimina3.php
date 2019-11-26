<?php
	require('conexion.php');
	
	$id_user=$_GET['id_user'];
	
	$query="DELETE FROM usuario WHERE id_user='$id_user'";
	
	$resultado= $mysqli->query($query);
	
	if($resultado){
		header("Location:tabla3.php");
		
	}
	else{
		echo "Insercion no exitosa";
	}
?>
	