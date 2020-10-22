<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Ejercicio 5</title>
</head>

<body>

    <div class="container ">
        <table class="table table-bordered table-dark">
            <tbody>
                <th  scope="col" class="text-center" colspan="5"><h4> Números impares</h4></th>
            </tbody>
            <tr>
                <?php
                $coo = 0;
                for ($i = 1; $i <= 100; $i++) {
                    if ($coo % 5 == 0) {
                        echo "<tr> </tr>";
                    }
                    if ($i % 2 != 0) {
                        echo "<td class='text-center'>" . $i . "</td>";
                        $coo++;
                    }
                }
                ?>
            </tr>

        </table>
        <p > <h5 align="center"> La cantidad de numeros impares son: <?php echo $coo; ?></h5></p>
    </div>
 


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>