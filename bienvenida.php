<?php
    if (isset($_COOKIE["usuario"])) {
        echo "<h1>Bienvenido ".$_COOKIE["usuario"]."</h1>";
?>
        <form action="cerrarSesion.php" method="post">
            <input type="submit" value="cerrar" name="CERRAR SESION">
        </form>
<?php
    }else{
        echo "no funciona";
    }
?>