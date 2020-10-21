<?php
function maincra()
{
    $C = 0;
    for ($i = 100; $i >= 0; $i--) {
        if ($C % 10 == 0) {
            echo "</tr> <tr>";
        }
        echo "
            
                <th>Número</th> 
            
                <th>" . $i . "</th>
            
        ";
        $C++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Ejercicio 2</title>
</head>

<body>
    <div class="container">
        <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                    <label for="">iniciar</label><br>
                    <input type="submit" name="boton" value="generar tabla" class="btn btn-primary mb-2">
                    <?php if (isset($_POST['boton'])) {
                        maincra();
                    } ?>
                </form>
        </table>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>