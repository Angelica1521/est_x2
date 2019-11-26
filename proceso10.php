<!DOCTYPE html>
<html>
	<head>
		<title>Tabla</title>
	</head>
	<body background="img/s5.jpg">
</html>

<?php
	require('conexion.php');
	
	$id_em=$_POST["id_em"];
	$nombre= $_POST["nombre"];
	$hora_entrada=$_POST["hora_entrada"];
	$hora_salida=$_POST["hora_salida"];
	
	
	$query="UPDATE empleado SET nombre='$nombre',hora_entrada='$hora_entrada',hora_salida='$hora_salida' WHERE id_em='$id_em'";
		
	$resultado= $mysqli->query($query);
	
?>
	<center>
		<?php
			if($resultado>0){
		?>
		<h1>EMPLEADO MODIFICADO</h1>
			<?php  }else{?>

		<h1>Error al modificar usuario</h1>

			<?php } ?>
			
			<p></p>
			
			<a href="tabla10.php">regresar</a>
	
	</center>
			
	