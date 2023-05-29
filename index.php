<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
<form method="post">

    <h2>Hola</h2>
    <h2>Bienvenido a CENTRALCOM</h2>
    <p>Contactanos</p>

<div class="input-wrapper">
<input type="text" name="nombre" placeholder="nombre">
<img class="input-icon" src="images/name.svg" alt="">
</div>

<div class="input-wrapper">
<input type="apellido" name="apellido" placeholder="apellido">
<img class="input-icon" src="images/name.svg" alt="">
</div>

<div class="input-wrapper">
<input type="email" name="email" placeholder="Email">
<img class="input-icon" src="images/email.svg" alt="">
</div>

<div class="input-wrapper">
<input type="text" name="direction" placeholder="Direction">
<img class="input-icon" src="images/direction.svg" alt="">
</div>

<p>Mensaje</p>
<div class="input-wrapper">
<input type="text" name="Mensaje" placeholder="Mensaje">
</div>

<input class="btn" type="submit" name="registro" value="Enviar" >
</form>

<?php
   include("registrar.php");
?>

</body>
</html>