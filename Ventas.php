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
$Titulo=$_POST['Titulo'];
$Autor =$_POST['Autor'];
$Precio=$_POST['Precio'];


 
$sql = "INSERT INTO compras(Usuario, Titulo, Autor, Precio) VALUES ('$Usuario', '$Titulo', '$Autor', '$Precio')";
$result = mysqli_query($conn, $sql);
if (!$result){
    echo  '<script> 
            alert("Error al comprar");
            window.history.go(0);</script>';
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
else{
    echo '<script> 
            alert("!La compra se ha realizado exitosamente!");
            window.location.href="index.php";</script>';
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>