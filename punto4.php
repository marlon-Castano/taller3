<!DOCTYPE html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>TALLER 3 APP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form  align="center" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <div class="container pt-3"><input  type="submit" name="boton" value="Mostrar suma" class="btn-success"></div>
    </form>
    <?php
    $o=0;
    if(isset($_POST['boton'])){
        for($i=0;$i<=100;$i++){
            $o=$o+$i;      
        }
        echo "<h3 align='center'>La suma de los primeros 100 numeros es de: ".$o."</h3>";
    }
    ?>

</body>
</html>