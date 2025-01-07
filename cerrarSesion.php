<?php

    $n_cookie = "usuario";

    setcookie($n_cookie, '', time() - (86400 *30));

    header("Location: ./inicioSesion.php");

?>