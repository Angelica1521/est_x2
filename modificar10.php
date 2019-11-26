<!DOCTYPE html>
<html>
<head>
	<title>guardar</title>
	<link rel="stylesheet" href="css/modificar10.css">
</head>
<body>
	<center>
		<form action="proceso10.php" method="POST">
					<?php
						require("conexion.php");
						$id_em=$_GET['id_em'];
						$nombre=$_GET['nombre'];
						$hora_entrada=$_GET['hora_entrada'];
						$hora_salida=$_GET['hora_salida'];
						
						
						
						$query="SELECT id_em,nombre,hora_entrada,hora_salida FROM empleado WHERE id_em='$id_em'";
						
						$resultado=$mysqli->query($query);
						$row=$resultado->fetch_assoc();
							
					?>
			
				<center>
					<input type="hidden" name="id_em" value="<?php echo $id_em;?>"><br><br><br>		

					<h3 class="ws">Modifica Empleado</h3><hr class="ami"><br><br><br><br>


						 <label class="q1">Nombre:</label>
						<input type="text" required class="z1" id="nombre" name="nombre" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Ingresa Nombre Completo del Empleado" VALUE="">
						<br><br><br>
						
						<label class="q2">Hora Entrada:&nbsp;</label>
						<input type="time" required class="z2" id="hora_entrada" name="hora_entrada" min="24:00" max="21:00">
						<br><br><br>
						
						<label class="q3">Hora Salida:&nbsp;</label>
						<input type="time" required class="o"  id="hora_salida" name="hora_salida" min="24:00" max="21:00">
						<br><br><br><br>
						
						<input type="submit" class="z3" name="enviar" value="Enviar">
					
						<input type="reset"  class="z4" name="limpiar" value="Limpiar">
						
						
						
				</center>
			
		</form>
	</center>
</body>
</html>