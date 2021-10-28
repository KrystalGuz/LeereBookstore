<?php
$servername = "";
$database = "libreria";
$username = "Krystal";
$password = "1234";
// Create connection
$conn = mysqli_connect($servername,$username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";

$Usuario=$_POST['Usuario'];
$Correo=$_POST['Correo'];
$Password =$_POST['Password'];



$verificar_name = mysqli_query($conn, "SELECT * FROM usuarios WHERE Usuario = '$Usuario'");
      if(mysqli_num_rows($verificar_name) > 0){
            echo  '<script> 
                        alert("Ya hay un usuario registrado con este Nombre");
                        window.history.go(-1);</script>';
            exit;
      }
      $verificar_correo = mysqli_query($conn, "SELECT * FROM usuarios WHERE Correo = '$Correo'");
      if(mysqli_num_rows($verificar_correo) > 0){
            echo  '<script> 
                        alert("Ya hay un usuario registrado con este Correo");
                        window.history.go(-1);</script>';
            exit;
      }
 
$sql = "INSERT INTO usuarios VALUES (NULL,'$Usuario', '$Correo', '$Password')";
if (mysqli_query($conn, $sql)) {
      echo '<script> 
                        alert("!El usuario se ha registrado exitosamente!");
                        window.location.href="../index.php";</script>';
} else {
      echo  '<script> 
                        alert("Error al registrarse");
                        window.location.href="login.html";</script>';
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>