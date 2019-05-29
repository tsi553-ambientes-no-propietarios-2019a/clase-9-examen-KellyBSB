
<?php
include('comunes.php');

if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}

?>

<!DOCTYPE html>
<html>
<head>
 
</head>
<body>
    <h1>Login</h1>

    <form action="validarlogin.php" method="post">
    	<label>Usuario</label><br>
        <input type="text" name="usuario" placeholder="Usuario"><br>
        <label>Contraseña</label><br>
        <input type="password" name="pass" placeholder="Clave"><br>
        <button>Ingresar</button>
    </form>

	<a href="registration.php">Registrarse</a>

	<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
	<?php } ?>

</body>
</html>

