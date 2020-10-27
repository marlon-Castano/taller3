<?php
    function factorial(){
        $numero = $_REQUEST['num1'];
        $cos2=($numero*2)-1;
        $acumulador=1;
        $contador=0;
        $es= "text-primary"; 
        $ss = "bg-dark text-white"; 
        echo "<tbody>
                <th   class='".$ss."'colspan='".$cos2."' scope='col'><h3 align='center'>FACTORIAL</h3></th>
            </tbody>
            <tr>";
        for($i=2; $i<=$numero; $i++){
            if($contador>10){
                $contador=0;
                echo "</tr> <tr>";
            }
            echo " <td class='".$ss."'><h4>".$i."</h4></td>";
            if($i<$numero){
                echo " <td class='".$es."'><h4> *</4> </td>";
            }
            if($i==$numero){
                echo " <td class='".$es."'><h4> =</4> </td>";
            }
            $acumulador=$i * $acumulador;
            $contador++;
        }
        echo "
            <th scope='row' colspan ='5' class='".$ss."'><h4>".$acumulador."</h4></th>
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
        <table class ="table border-bordered" > 
            <tr align="center">
        <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
          <td> <h3> <b><label for="">Ingrese un numero</label></b> </h3></td>
         <td colspan="3">  <input type="number" name="num1" class="form-control" id="inputCity" > </td>
          <td>  <input type="submit"  value="Aceptar" name="boton" class="btn btn-primary mb-2">   </td>   
        </form>
            </tr>
        </table>
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