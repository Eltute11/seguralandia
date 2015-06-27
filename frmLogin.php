<?php 
	if (isset($_GET['error'])) {
		switch ($_GET['error']) {
			case 'campos_vacios': echo "Los dos campos tienen que estar llenos, no puede haber campos vacíos";
				break;
			case 'datos_incorrectos': echo "El usuario y/o contraseña son incorrecto";
				break;
			case 'loguearse' : echo "No debes acceder sin iniciar sesion";
				break;											   	
		}
	}	
	unset($_GET['error']); //Borramos de memoria para optimizar PHP
?>
	<br>
<form action="php/login.php" method="POST">
	
	<label for="user">Usuario: </label> <input type="text" name="user">
	
	<label for="pass">Contraseña: </label><input type="password" name="pass"><br>
	
	<label>Deseo recordar mis datos <input type="checkbox" name="sesion" value="1"></label>
	
	<input type="submit" value="Login">
</form>