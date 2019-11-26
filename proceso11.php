<!DOCTYPE html>
<html>
	<head>
		<title>Tabla</title>
	</head>
	<body background="img/s7.jpg">
</html>

<?php
	require('conexion.php');
	
	$id_cita=$_POST["id_cita"];
	$fecha= $_POST["fecha"];
	$hora=$_POST["hora"];
	$servicio=$_POST["servicio"];
	
	
	$query="UPDATE cita SET fecha='$fecha',hora='$hora',servicio='$servicio' WHERE id_cita='$id_cita'";
		
	$resultado= $mysqli->query($query);
	
?>
	<center>
		<?php
			if($resultado>0){
		?>
		<h1>CITA MODIFICADA</h1>
			<?php  }else{?>

		<h1>Error al modificar usuario</h1>

			<?php } ?>
			
			<p></p>
			
			<a href="tabla12.php">regresar</a>
	
	</center>
			
	