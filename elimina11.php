<?php
	require('conexion.php');
	
	$id_cita=$_GET['id_cita'];
	
	$query="DELETE FROM cita WHERE id_cita='$id_cita'";
	
	$resultado= $mysqli->query($query);
	
	if($resultado){
		header("Location:tabla12.php");
		
	}
	else{
		echo "Insercion no exitosa";
	}
?>
	