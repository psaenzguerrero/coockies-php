<?php
    $n_cookie = "usuario";
    $val_coockie = "Erica";
    setcookie($n_cookie, $val_coockie, time() - (86400 *30));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_COOKIE[$n_cookie])) {
        echo "La coockie se ha generado y el valor es ".$_COOKIE[$n_cookie];
    }else{
        echo "La coockie no se ha generdao";
    }
       
    ?>
</body>
</html>