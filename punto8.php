<!DOCTYPE html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>TALLER 3 APP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container pt-3"><h3 align="center">Tabla de los numeros del 1 al 100</h3></div>
    <div class="container pt-3">
    <table class="table table-bordered">
        <tbody>
        <tr>
    <?php
    $impa=0;
    $par=0;
        $coo=0;
        for($i=1;$i<=100;$i++){
            if($coo%5==0){
                echo "</tr><tr>";
            }
            if($i%2==0){
                $par=$par+$i;
            }
            else{
                $impa=$impa+$i;
            }
            if($i%2==0){$cla="bg-dark text-white";}
            else{$cla="bg-danger ";}
            echo "<td class='".$cla."'><h3 align='center' >".$i."</h3></td>";
            $coo++;
        }
    ?>
    </tbody>
    </table>
    <div class="container pt-3"><h3 align="center">Suma de numeros pares del 1 al 100:</h3></div>
    <table align="center"><tbody><td class="bg-dark text-white><h3><?php echo "".$par."";?></h3></td></tbody></table>
    <div class="container pt-3"><h3 align="center">Suma de numeros impares del 1 al 100:</h3></div>
    <table align="center"><tbody><td class="bg-dark text-white"><h3><?php echo "".$impa."";?></h3></td></tbody></table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>