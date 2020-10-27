<?php
function calcular(){
echo "
<html>
<head>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous'>
</head>
<body>
";
$cantidad = $_REQUEST['cantidad'];
echo "<table class='table table-striped table-dark'>
    <tr align='center'>
    <th>Numeros Multiplo de 3</th>
    </tr>";
for($i=0;$i<=$cantidad;$i++){
    if($i%3==0){
        echo "<tr align='center'>
        <td>$i</td>
        </tr>";
    }
}
echo "</table>";
echo "
<script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx' crossorigin='anonymous'></script>
</body>
</html>
";
}
?>
<!DOCTYPE html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
    <head>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous'>
    </head>
    <body>
    <div class="shadow p-3 mb-5 bg-white rounded">
    <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <h1>DETERMINE MULIPLOS DE 3 HASTA UN RANGO ESPECIFICO</h1>
    <h3>Por favor digite la cantidad de numeros a calcular : <input type="number" name="cantidad"></h3>
    <input type="submit" class="btn btn-success" value="CALCULAR" name="btn">
    <hr> 
    </form>
    </div>
    <div class="container pt-4">
    <?php
     if (isset($_POST['btn'])) {
   calcular(); 
     }
     ?>
    </div>
        <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx' crossorigin='anonymous'></script>
     </body>
</html>