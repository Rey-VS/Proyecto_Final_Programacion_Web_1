<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería</title>
    <link rel="icon" type="image/png" href="images/estante.png">
    <style>
        body{
            background-color: floralwhite;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form method="post">
        <h2>Bienvenido</h2>
        <p>Inicie su registro</p>

        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre">
            <img class="input-icon" src="images/usuario.png" width="26" height="26" alt="">
        </div>

        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Email">
            <img class="input-icon" src="images/mail.png" width="28" height="28" alt="">
        </div>

        <div class="input-wrapper">
            <input type="text" name="adress" placeholder="Direccion">
            <img class="input-icon" src="images/adress.png" width="28" height="28" alt="">
        </div>

        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Telefono">
            <img class="input-icon" src="images/telefono.png" width="26" height="26" alt="">
        </div>

        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña">
            <img class="input-icon" src="images/llave.png" width="25" height="25" alt="">
        </div>
        <input class="btn" type="submit" name="register" value="Enviar">
    </form>

    <?php
        include("registrar.php");
    ?>

</body>
</html>