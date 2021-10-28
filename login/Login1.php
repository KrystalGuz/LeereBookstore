<?php
	session_start();
	$Usuario = $_POST['Usuario'];
	$Password = $_POST['Password'];
	

	$db = "libreria";
		$link = mysqli_connect("localhost", "Krystal", "1234", $db) or die ("<h2>No hay conexion</h2>");

		$sql = "SELECT COUNT(*) as cont FROM administrador WHERE Usuario = '$Usuario' AND Password = '$Password'";

		$resultado = mysqli_query($link, $sql);
		$array = mysqli_fetch_array($resultado);

		if ($array['cont']>0) {
			$_SESSION['User']= $Usuario;
			header("location: ../index.html");
		}else{
			echo '<script>
				alert("Usuario o Contraseña incorrectos");
				window.location="login.html";
			</script>';
		}
?>