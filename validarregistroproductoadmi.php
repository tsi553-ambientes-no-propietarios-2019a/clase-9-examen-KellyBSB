<?php

include('comunes.php');

if($_POST) {
	if (isset($_POST['producto']) && isset($_POST['precio']) && !empty($_POST['producto']) && !empty($_POST['precio'])) {

		$producto = $_POST['producto'];
		$precio = $_POST['precio'];
	
	
					$sql_insert = "INSERT INTO RegistroProductos
					(producto, precio)
					VALUES ('$producto','$precio')";
					$conn->query($sql_insert);
					if ($conn->error) {
						echo 'Ocurrió un error ' . $conn->error;
					}else{
						redirect('admi.php');
					}


	}else {
		redirect('registros.php?error_message=Ingrese todos los datos!');
	}




} else {
	redirect('admi.php');
}


?>