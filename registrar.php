<?php

include("conexion.php");

if(isset($_POST["registrar"])) {
    if(
        
        strlen($_POST["nombre"]) >=1 &&
        strlen($_POST["apellido"]) >=1 &&
        strlen($_POST["email"]) >=1 &&
        strlen($_POST["direction"]) >=1 &&
        strlen($_POST["Mensaje"]) >=1 
        ) {
        $nombre = trim ($_POST["nombre"]);
        $apellido = trim ($_POST["apellido"]);
        $email = trim ($_POST["email"]);
        $direction = trim ($_POST["direction"]);
        $Mensaje = trim ($_POST["Mensaje"]);
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO datos (nombre , email, direction, fecha, Mensaje) 
        values('$nombre','$apellido','$email','$direction','$fecha','$Mensaje')";
        $resultado = mysqli_query($conex,$consulta);
        if($resultado){
            ?>
            <h3 class="success">Tu resgistro se ha completado</h3>
            <?php

        } else {
            ?>
            <h3 class="error">ocurrio un error</h3>
            <?php
            } 
}else { 
    ?>
    <h3 class="error">llena todos los campos</h3>
    <?php
    
}

}



?>