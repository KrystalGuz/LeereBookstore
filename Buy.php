<?php 
$db = "libreria";
		$link = mysqli_connect("localhost", "Krystal", "1234", $db) or die ("<h2>No hay conexion</h2>");
		session_start();
		if(!isset($_SESSION['User'])){
				header("Location: login/login.html");
		}
	$id_user = $_SESSION['User'];
	$consulta = "SELECT Usuario FROM usuarios WHERE Usuario = '$id_user'";
	$result = $link->query($consulta);?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="assets/css/stylesBuy.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="assets/js/Buy.js"></script>
        <title>Leere Bookstore</title>
        <link rel="icon" type="image/png" href="assets/img/Logo1.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>
    <body>
    
    <?php
                        if(isset($_SESSION['User'])) {
                            echo $id_user; 
                        } 
                        ?>
        <div class="modal clearfix">
            <div class="modal-product">
              <div class="product">
          
                <!-- Slideshow container -->
                <div class="product-slideshow">
                  <br>
                </div>
                <form action="Ventas.php" method="GET">
                <input type="hidden" name="Usuario" value="<?php echo $id_user; ?>">
                <h1 class="product-name">
                    <input class="product-name" type="text" id="Ti" name="Titulo">
                    <script type="text/javascript">
                    var url_string = window.location.href; //
                    var url = new URL(url_string);
                    var c = url.searchParams.get("Titulo");
                    document.getElementById("Ti").value = c;
                    </script>
                </h1>
                <p class="product-code-name">
                    <input class="product-code-name" type="text" id="Au" name="Autor">
                    <script type="text/javascript">
                    var url_string = window.location.href; //
                    var url = new URL(url_string);
                    var c = url.searchParams.get("Autor");
                    document.getElementById("Au").value = c;
                    </script>
                </p>
                <p class="product-price">
                    <input class="product-price" type="text" id="Co" name="Precio">
                    <script type="text/javascript">
                    var url_string = window.location.href; //
                    var url = new URL(url_string);
                    var c = url.searchParams.get("Precio");
                    document.getElementById("Co").value = c;
                    </script>
                </p>
          
              </div>
          
              <div class="round-shape"></div>
            </div>
            <div class="modal-info">
              <div class="info">
                <h2>Información de Pago</h2>
                <form action="#">
                  <ul class="form-list">
                    <li class="form-list-row">
                      <div class="user">
                        <label for="#">Nombre Completo</label><br>
                        <i class="fas fa-user"></i></i><input type="text" required>
                      </div>
                    </li>
                    <li class="form-list-row">
                      <div class="number">
                        <label for="#">Numero de tarjeta</label><br>
                        <i class="far fa-credit-card"></i><input type="text" required>
                      </div>
                    </li>
                    <li class="form-list-row clearfix">
                      <div class="date">
                        <label for="#">Fecha de Expiración</label><br>
                        <input class="month" type="text" required placeholder="MM">
                        <input class="year" type="text" required placeholder="AA">
                      </div>
                      <div class="cvc">
                        <label for="#">CVC</label><i class="fas fa-question-circle"></i><br>
                        <input type="text" required placeholder="123">
                      </div>
                    </li>
                  </ul>
                  <button>Pagar ahora</button>
                  </form>
                </form>
              </div>
            </div>
          </div>
    </body>
</html>