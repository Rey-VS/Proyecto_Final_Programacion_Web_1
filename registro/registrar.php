<?php

include("conexion.php");

if (isset($_POST['register'])) {
    if(
        strlen($_POST['name']) >= 1 && 
        strlen($_POST['email']) >= 1 && 
        strlen($_POST['adress']) >= 1 && 
        strlen($_POST['phone']) >= 1 && 
        strlen($_POST['password']) >= 1
       ) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $adress = trim($_POST['adress']);
            $phone = trim($_POST['phone']);
            $password = trim($_POST['password']);
            $fecha = date('d/m/y');
            $consulta = "INSERT INTO datos(nombre, email, direccion, telefono, contraseña, fecha)
                VALUES('$name', '$email', '$adress', '$phone', '$password', '$fecha')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado){
                ?>
                    <h3 class="success">Tu registro ha sido completado</h3>
                <?php
            } else {
                ?>
                    <h3 class="error">Ha ocurrido un error</h3>
                <?php
            }
        } else {
            ?>
                <h3 class="error">Llena correctamente los campos</h3>
            <?php
        }

}

?>