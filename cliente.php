<?php
include('comunes.php');



if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}

$products = getProducts($conn);
$pedido = getProductsregistro($conn);

?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<div><a href="salir.php">Cerrar sesión</a></div>
<h1>Selecion Productos a Comprar</h1>

				<select name="productoseleccionado" required="required">
						<option value="">Seleccione:</option>

						<?php foreach ($products as $p) { 
							
							 echo '<option value="'.$p['producto'].'">'.$p['producto'].'</option>';
							
						} ?>
				</select>

					<div>
						<label>Cantidad</label><br>
						<input type="text" name="cantidad" required="required">
					</div>

						<button>Registrar</button>




	<table>
			<thead>
				<tr>
					<th>Cliente</th>

					<th>Producto</th>
					<th>cantidad</th>

					
				

				</tr>
			</thead>

			<tbody>
					
					
							<?php foreach ($pedido as $p) { ?>
							<tr>
								<td><?php echo $p['cliente'] ?></td>
								<td><?php echo $p['producto'] ?></td>
								<td><?php echo $p['cantidad'] ?></td>
						

							</tr>

						<?php } ?>
				
			</tbody>
		</table>


		<?php if(isset($error_message)) { ?>
		<div><strong><?php echo $error_message; ?></strong></div>
	<?php } ?>

</body>
</html>