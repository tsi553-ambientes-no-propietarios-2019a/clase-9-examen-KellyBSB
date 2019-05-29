<?php
include('comunes.php');
$products = getProducts($conn);

?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<div><a href="salir.php">Cerrar sesión</a></div>

<h1>Registro Producto</h1>

	<form action="validarregistroproductoadmi.php" method="post">
		<div>
			<label>Nombre del Producto</label> <br>
			<input type="text" name="producto" required="required">
		</div>
		<div>
			<label>Presio por unidad</label><br>
			<input type="text" name="precio" required="required">
		</div>
		<div>
			<button>Registrar</button>
		</div>
	</form>

<table>
		<thead>
			<tr>
				<th>Producto</th>
				<th>Precio</th>
			

			</tr>
		</thead>

		<tbody>
			<?php foreach ($products as $p) { ?>
				<tr>
					<td><?php echo $p['producto'] ?></td>
					<td><?php echo $p['precio'] ?></td>
			

				</tr>
			<?php } ?>
		</tbody>
	</table>


	

</body>
</html>


