<!DOCTYPE html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TALLER 3 APP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container pt-2"><h2 align="center"> Tabla de los números pares del 1 al 100<h2> </div>
    <div class ="container pt-2">   
    <table class="table table-bordered">
 
        <tbody>
        <tr> 
          <?php
            # Hacer un programa que imprima los números pares entre el 0 y 100
             $num = 0; 
            for ($i=0; $i<=100;$i++){
                   if($num%10==0){
                        echo "</tr><tr>"; 
                   }
                             if ($i%2==0)
                                         {
                                          if($i%4==0){
                                           $ss = "bg-primary text-white"; 
                                          }else{
                                            $ss = "bg-secondary text-white"; 
                                          } if($i==100){
                                              echo "<td colspan ='5' class='".$ss."'><h4 align='center'>".$i."</h4></td>";
                                          }
                                            if($i<100){
                                            echo "<td class='".$ss."'><h4 align='center'>".$i."</h4></td>";     
                                            }
                                          }
                                         
                                          $num++; 
                                     }
                               
            ?>
        </tbody>
    </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
</html>






