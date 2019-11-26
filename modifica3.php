<!DOCTYPE html>
<html>
<head>
	<title>guardar</title>
	<link rel="stylesheet" href="css/modifica_user.css">
</head>
	<body>
	<center>
		<form action="proceso9.php" method="POST">
					<?php
						require("conexion.php");
						$id_user=$_GET['id_user'];
						$nombre=$_GET['nombre'];
						$correo=$_GET['correo'];
						$contra=$_GET['contra'];
						
						
						
						$query="SELECT id_user,nombre,correo,contra FROM usuario WHERE id_user='$id_user'";
						
						$resultado=$mysqli->query($query);
						$row=$resultado->fetch_assoc();
							
					?>
			
				<center>
						<input type="hidden" name="id_user" value="<?php echo $id_user;?>"><br><br><br>		
						 <h1>MODIFICA USUARIO</h1><br><br><br>
						 <label class="a">Nombre:</label>
						<INPUT TYPE="TEXT" REQUIRED class="c" name="nombre" id="nombre" PLACEHOLDER="&nbsp;&nbsp;&nbsp;&nbsp;Nombre" VALUE="">
						<br>
						<br><br>
						<label class="a">Correo:&nbsp;</label>
						<input type="email" REQUIRED class="c" name="correo" id="correo"  placeholder="&nbsp;&nbsp;&nbsp;Correo" value="">
						<br><br>
						
						
						<label class="a">Contraseña:&nbsp;</label>
						<input type="password" REQUIRED class="c" name="contra" id="contra" placeholder="&nbsp;&nbsp;&nbsp;Contraseña" value="">
						<br><br>
						
						<input type="submit" class="w1" value="Guardar"/><br><br>
						
				</center>
			
		</form>
	</center>
</body>
</html>