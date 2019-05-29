<?php 
include('comunes.php');
if($_POST) {
	if (isset($_POST['usuario']) && isset($_POST['pass']) && !empty($_POST['usuario']) && !empty($_POST['pass'])) {
		$user = $_POST['usuario'];
		$pass = $_POST['pass'];

		$sql = "SELECT *
		FROM Registro
		WHERE usuario='$user'
		AND pass=MD5('$pass')";
		$res = $conn->query($sql);
		if ($conn->error) {
			redirect('index.php?error_message=Ocurrió un error: ' . $conn->error);
		}

		$sql1 = "SELECT rol
		FROM Registro
		WHERE usuario='$user'
		AND pass=MD5('$pass')";
		$res1 = $conn->query($sql1);


		if($res1->num_rows > 0) {
				$rol = $res1->fetch_assoc() ;
				echo $rol['rol'];
					
				if($rol['rol']=='administrador'){

						while ($row = $res->fetch_assoc()) {
						$_SESSION['user'] = [
							'username' => $row['usuario'],
							'id' => $row['id']
						];
						redirect('admi.php');
						}

				}elseif($rol['rol']=='Cliente'){
						while ($row = $res->fetch_assoc()) {
						$_SESSION['user'] = [
							'username' => $row['usuario'],
							'id' => $row['id']
						];
						redirect('cliente.php');
						}
				}else{
					redirect('index.php?error_message=No hay rol');
				}
				
		} else {
			redirect('index.php?error_message=Usuario o clave incorrectos!');
		}

	} else {
		redirect('index.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('index.php');
}