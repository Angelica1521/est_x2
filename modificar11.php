<!DOCTYPE html>
<html>
<head>
	<title>guardar</title>
	<link rel="stylesheet" href="css/modificar11.css">
</head>
<body>
	<center>
		<form action="proceso11.php" method="POST">
					<?php
						require("conexion.php");
						$id_cita=$_GET['id_cita'];
						$fecha=$_GET['fecha'];
						$hora=$_GET['hora'];
						$servicio=$_GET['servicio'];
						
						
						
						$query="SELECT id_cita,fecha,hora,servicio FROM cita WHERE id_cita='$id_cita'";
						
						$resultado=$mysqli->query($query);
						$row=$resultado->fetch_assoc();
							
					?>
			
				<center>
					<input type="hidden" name="id_cita" value="<?php echo $id_cita;?>"><br><br><br>		

					<h3 class="k1">Registro de Citas</h3><hr class="k2"><br><br><br>
						
						<label class="rz1">Fecha:&nbsp;</label>
						<input type="date" required class="u1" id="fecha" name="fecha"  placeholder="Ingresa la Fecha de tu Cita" value="">
						<br><br><br><br>
						
						
						<label class="rz2">Hora:&nbsp;</label>
						<input type="time" required class="u2" id="hora" name="hora" placeholder="Ingresa la hora de tu Cita" min="24:00" max="21:00">
						<br><br><br>
						
						<label class="rz3">Servicio:</label>
							<select class="u3" name="servicio"> 
								<option value="" class="u4" selected="servicio"> -- Servicios-- </option>
								<option value="Pedicure y Manicure">Pedicure y Manicure</option>
								<option value="Tinte">Tinte</option>
								<option value="Maquillaje">Maquillaje</option>
								<option value="Corte">Corte</option>
								<option value="Peinados">Peinados</option>
								
							</select><br><br><br><br><br>
						
						<input type="submit" class="z3" value="Enviar"/>
						<input type="reset" class="z4" value="Limpiar"/>
						
				</center>
			
		</form>
	</center>
</body>
</html>