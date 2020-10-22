<?php
    function factorial(){
        $numero = $_REQUEST['num1'];
        $cos2=($numero*2)-1;
        $acumulador=1;
        $contador=0;
        echo "<tbody>
                <th   class='text-center' colspan='".$cos2."' scope='col'>Factorial</th>
            </tbody>
            <tr>";
        for($i=2; $i<=$numero; $i++){
            if($contador>10){
                $contador=0;
                echo "</tr> <tr>";
            }
            echo " <td>".$i."</td>";
            if($i<$numero){
                echo " <td> * </td>";
            }
            if($i==$numero){
                echo " <td> = </td>";
            }
            $acumulador=$i * $acumulador;
            $contador++;
        }
        echo "
            <th scope='row' colspan ='6'> ".$acumulador."</th>
            </tr>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container" >
        <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <label for="">ingrese el numero</label>
            <input type="number" name="num1" class="form-control" id="inputCity" >
            <input type="submit" value="aceptar" name="boton" class="btn btn-primary mb-2">
        </form>
    </div>
    <br>
    <div class="container ">
        <table class="table table-hover">
                <?php
                if (isset($_POST['boton'])) {
                    factorial();
                }
                ?>
        </table>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>