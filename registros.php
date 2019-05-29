<?php 

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
	<h1>Registro Usuario</h1>

	<form action="validarregistro.php" method="post">
		<div>
			<label>Nombre</label> <br>
			<input type="text" name="nombre" required="required">
		</div>
		<div>
			<label>Rol</label><br>
			<select name="rol" required="required">
				<option value="">Seleccione...</option>
				<option value="administrador">Administrador</option>
				<option value="Cliente">Cliente</option>
			</select>
		</div>

		<div>
			<label>Nombre del Usuario</label><br>
			<input type="text" name="usuario" required="required">
		</div>

		<div>
			<label>Contraseña</label><br>
			<input type="password" name="pass" required="required">
		</div>
		<div>
			<label>Confirmar Contraseña</label><br>
			<input type="password" name="pass2" required="required">
		</div>
		<div>
			<button>Registrar</button>
		</div>
	</form>

	<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
</body>
</html>