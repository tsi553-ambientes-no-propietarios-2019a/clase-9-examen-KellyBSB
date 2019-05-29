<?php
include('comunes.php');

if($_POST) {
	if (isset($_POST['productoseleccionado']) && isset($_POST['cantidad']) && !empty($_POST['productoseleccionado']) && !empty($_POST['cantidad'])) {


			$nombre = $_POST['productoseleccionado'];
			$cantidad = $_POST['cantidad'];
			$usuario= $_SESSION['user']['username'];

			$sql_insert = "INSERT INTO pedidocliente
					(cliente, producto, cantidad)
					VALUES ('$usuario','$nombre','$cantidad')";
					$conn->query($sql_insert);
					if ($conn->error) {
						echo 'Ocurrió un error ' . $conn->error;
					} else {
						redirect('cliente.php');
					}




	}else {
		redirect('cliente.php?error_message=Seleccione un producto!');
	}
}	
?>