<?php

session_start();
function redirect($url) {
	header('Location: ' . $url);
	exit;
}


$conn = new mysqli('localhost', 'root', '', 'examen');
if($conn->connect_error) {
	echo 'Existió un error en la conexión ' . $conn->connect_error;
	exit;
}


function getProducts($conn) {
	
	$sql = "SELECT *
		FROM RegistroProductos";

		$res = $conn->query($sql);
		if ($conn->error) {
			redirect('../home.php?error_message=Ocurrió un error: ' . $conn->error);
		}
		$products = [];
		if($res->num_rows > 0) {
			while ($row = $res->fetch_assoc()) {
				$products[] = $row;
			}
		}
		return $products;
}
function getProductsregistro($conn) {
	
	$sql = "SELECT *
		FROM pedidocliente";

		$res = $conn->query($sql);
		if ($conn->error) {
			redirect('../home.php?error_message=Ocurrió un error: ' . $conn->error);
		}
		$products = [];
		if($res->num_rows > 0) {
			while ($row = $res->fetch_assoc()) {
				$products[] = $row;
			}
		}
		return $products;
}






$public_pages = [
	'/examen/index.php', 
	'/examen/validarlogin.php',
	'/examen/registros.php',
	'/examen/validarregistro.php'
];
if ( !isset($_SESSION['user']) && !in_array( $_SERVER['SCRIPT_NAME'], $public_pages)) {
	redirect($_SERVER["HTTP_HOST"] . '/examen/index.php');
} elseif( 
	isset($_SESSION['user']) && (
	$_SERVER['SCRIPT_NAME'] == '/examen/index.php' || 
	$_SERVER['SCRIPT_NAME'] == '/examen/registros.php')) {
	redirect($_SERVER["HTTP_HOST"] . '/examen/index.php');
}


?>