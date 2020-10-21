<!DOCTYPE html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TALLER 3 APP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container pt-5"><h2 align="center"> Tabla de los números pares del 1 al 100<h2> </div>
    

    <?php
 # Hacer un programa que imprima los números pares entre el 0 y 100

 $num= 100; 

 for ($i=0; $i<=$num; $i++){
       if ($i%2==0)
                  {
                   echo "<table> <tr> <td> El número ".$i." es par </td> </tr> </table>"; 

                  }

 }







?> 
</body>
</html>






