<?php
    $nom = $_POST["nombre"];
    $cont = $_POST["contraseña"];

    $bd = new mysqli('localhost','root','','usuarios');
    $bd->set_charset('utf8');

    $sent = "SELECT * FROM usuario WHERE nombre = '$nom' AND contraseña = '$cont'";
    $const = $bd->prepare($sent);
    $const->bind_result($nombre, $contraseña);
    $const->execute();

    $n_cookie = "usuario";
    $val_coockie = $nom;
    setcookie($n_cookie, $val_coockie, time() + (86400 *30));
    
    header("Location: ./bienvenida.php");
    
    
?>