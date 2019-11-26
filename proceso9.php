<!DOCTYPE html>
<html>
	<head>
		<title>Tabla</title>
	</head>
	<body background="img/s4.jpg">
</html>
<?php
	require('conexion.php');
	
	$id_user=$_POST["id_user"];
	$nombre= $_POST["nombre"];
	$correo=$_POST["correo"];
	$contra=$_POST["contra"];
	
	
	$query="UPDATE usuario SET nombre='$nombre',correo='$correo',contra='$contra' WHERE id_user='$id_user'";
		
	$resultado= $mysqli->query($query);
	
?>
	<center>
		<?php
			if($resultado>0){
		?><br><br><br>
		<h1>USUARIO MODIFICADO</h1>
			<?php  }else{?>

		<h1>Error al modificar usuario</h1>

			<?php } ?>
			
			<p></p>
			
			<a href="tabla9.php">regresar</a>
	
	</center>
			
	