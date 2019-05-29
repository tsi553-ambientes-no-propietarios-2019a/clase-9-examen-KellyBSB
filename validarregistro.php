<?php 
include('comunes.php');
if($_POST) {
	if (isset($_POST['nombre']) && isset($_POST['rol']) && isset($_POST['usuario']) && isset($_POST['pass']) && isset($_POST['pass2'])&& !empty($_POST['nombre']) && !empty($_POST['rol']) && !empty($_POST['usuario'])  && !empty($_POST['pass']) && !empty($_POST['pass2'])) {

		$nombre = $_POST['nombre'];
		$rol = $_POST['rol'];
		$usuario = $_POST['usuario'];
		$pass = $_POST['pass'];
		$pass2 = $_POST['pass2'];

			if($pass == $pass2){
				
					$sql_insert = "INSERT INTO Registro
					(nombre, rol, usuario,pass)
					VALUES ('$nombre','$rol','$usuario', MD5('$pass'))";
					$conn->query($sql_insert);
					if ($conn->error) {
						echo 'Ocurrió un error ' . $conn->error;
					} else {
						redirect('index.php');
					}



			}else{
				redirect('registros.php?error_message=Las contraseñas no coinciden!');
			}




	}else {
		redirect('registros.php?error_message=Ingrese todos los datos!');
	}




} else {
	redirect('registros.php');
}


		



?>