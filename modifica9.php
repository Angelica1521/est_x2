<!DOCTYPE html>
<html>
<head>
	<title>guardar</title>
	<link rel="stylesheet" href="css/modificar3.css">
</head>
<body>
	<center>
		<form action="proceso.php" method="POST">
					<?php
						require("conexion.php");
						$id=$_GET['id_user'];
						$nombre=$_GET['nombre'];
						$correo=$_GET['correo'];
						$contra=$_GET['contra'];
						
						
						
						$query="SELECT id_user,nombre,correo,contra FROM usuario WHERE id_user='$id'";
						
						$resultado=$mysqli->query($query);
						$row=$resultado->fetch_assoc();
							
					?>
			
				<center>
						<input type="hidden" name="id_user" value="<?php echo $id;?>"><br><br><br>		

						 <label class="a">Nombre:</label>
						<INPUT TYPE="TEXT" REQUIRED class="c" name="nombre" PLACEHOLDER="&nbsp;&nbsp;&nbsp;&nbsp;Nombre" VALUE="">
						<br>
						
						
						<br><br><br><br>
						<label class="a">Correo:&nbsp;</label>
						<input type="email" REQUIRED class="c" name="correo"  placeholder="&nbsp;&nbsp;&nbsp;Correo" value="">
						<br><br>
						
						
						<label class="a">Contraseña:&nbsp;</label>
						<input type="password" REQUIRED class="c" name="contra"  placeholder="&nbsp;&nbsp;&nbsp;Contraseña" value="">
						<br><br>
						
						<input type="submit" class="w1" value="Guardar"/><br><br>
						
				</center>
			
		</form>
	</center>
</body>
</html>