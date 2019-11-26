<?php
	require('conexion.php');
	
	$id_em=$_GET['id_em'];
	
	$query="DELETE FROM empleado WHERE id_em='$id_em'";
	
	$resultado= $mysqli->query($query);
	
	if($resultado){
		header("Location:tabla10.php");
		
	}
	else{
		echo "Insercion no exitosa";
	}
?>
	