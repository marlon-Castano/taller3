
<?php
function Multiplo1(){
    $cont= 0; 
 for ($i=0; $i<=100; $i++){
    
                            if($i%10==0){
                             echo "</tr><tr>"; 
                            
                             }
                        if ($i%2==0)
                           {
                                    $ss = "bg-dark text-white";
                                
                                 if($i==100){
                                 echo "<td colspan ='5' class='".$ss."'><h4 align='center'>".$i."</h4></td>";
                                 }
                                 if($i<100){
                                 echo "<td class='".$ss."'><h4 align='center'>".$i."</h4></td>";     
                                 }
                                 $cont++; 
                                
                             }
                             
                         
                        
                     }
                     echo "<tr> <td colspan= '5' class='".$ss."'><h4 align='center'> El total de multiplos del 2 es: ".$cont."</h4></td><tr>"; 
                          }

                

function Multiplo2(){

    $cont= 0; 
    for ($i=0; $i<=100; $i++){
       
                               if($i%9==0){
                                echo "</tr><tr>"; 
                                }
                           if ($i%3==0)
                                {
                                    
                                     $ss = "bg-dark text-white"; 
                            
                                     if($i==99){
                                    echo "<td colspan ='5' class='".$ss."'><h4 align='center'>".$i."</h4></td>";
                                    }
                                    if($i<99){
                                    echo "<td class='".$ss."'><h4 align='center'>".$i."</h4></td>";     
                                    }
                                    $cont++; 
                                   
                                }
                                
                            
                           
                        }
                        echo "<tr> <td colspan= '5' class='".$ss."'><h4 align='center'> El total de multiplos del 3 es: ".$cont."</h4></td><tr>"; 
                             }

?>
<!DOCTYPE html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TALLER 3 APP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
   <div class="container pt-4" >
    <table class="table border-bordered" > 
    <tr>
   <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <td align="center"><label for ="example"> <h5> Escoja un botón de acuerdo a los multiplos que quiere calcular: <h5> </label></td>
    <td align="center"> <input type ="submit" name ="btn" class="btn btn-danger"  value="Multiplos de 2"> 
         <input type ="submit" name ="btn1" class="btn btn-success"  value="Multiplos de 3"> 
    </td>
    </form> 
    </tr>
    </table>
   </div>

        <div class="container pt-4">
         <table class="table border-bordered">
             <tbody>
                 <tr>
                <?php
                if (isset($_POST['btn'])) {
                    Multiplo1();
                 }else if(isset($_POST['btn1'])) 
                 Multiplo2(); 
                ?>
            </tbody>
            </table>
            </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>