<?php
function calcular(){


echo "
<html>
<head>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous'>
</head>
<body>
";
$numero1 = $_REQUEST['num1'];
$numero2 = $_REQUEST['num2'];
$mayor =0;
$menor =0;
if($numero1>$numero2){
    $mayor=$numero1;
    $menor=$numero2;
}
elseif($numero2>$numero1){
    $mayor=$numero2;
    $menor=$numero1;
}
else{$mayor=$numero2;
    $menor=$numero1;}
echo "<p>";    
echo "<table class='table' border='1'>
<thead class='thead-dark'>
    <tr align='center'>
    <th scope='col' >TABLA NUMEROS NATURALES</th>
    </tr>
</thead>";
    for($i=$menor;$i<=$mayor;$i++){
            echo "<tr>
            <td align='center'>$i</td>
            </tr>";
    }
echo "</table>
<hr>";
echo "</p>";

echo "<table class='table table-striped table-dark'>
    <tr align='center'>
    <th >TABLA NUMEROS PARES</th>
    </tr>";
    for($i=$menor;$i<=$mayor;$i++){
        if($i%2==0){
            echo "<tr>
            <td align='center'>$i</td>
            </tr>";
        }
    }
echo "</table>
<hr>";
$sumimpares=0;
echo "<table class='table table-bordered table-dark'>
    <tr align='center'>
    <th>TABLA NUMEROS IMPARES</th>
    </tr>";
    for($i=$menor;$i<=$mayor;$i++){
        if($i%2!=0){
            $sumimpares += $i;
            echo "<tr>
            <td align='center'>$i</td>
            </tr>";
        }
    }
echo "
<tr>
<td class='bg-warning' align='center'>SUMA $sumimpares</td>
</tr>
</table>";
echo "
<script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx' crossorigin='anonymous'></script>
</body>
</html>
";
}
?>


<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<form class="form-inline" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<div class="shadow p-3 mb-5 bg-white rounded">

<h3>Por favor digite un numero <input type="number" name="num1" required></h3></div>
<div class="shadow p-3 mb-5 bg-white rounded">
<h3>Por favor digite otro numero <input type="number" name="num2" required></h3></div> 

<input type="submit" value = "CALCULAR" class="btn btn-outline-warning" name="btn">
</form>
<div class="container pt-6">
    <?php
     if (isset($_POST['btn'])) {
   calcular(); 
     }
     ?>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
