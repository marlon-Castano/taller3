<?php

function Nutural(){
   $num = $_REQUEST['nat']; 
   if($num<0)
            {
             echo "<h1> El numero ".$num." no es natural</h1> ";
            }
      for( $i=0; $i<=$num;$i++)
                              {
                              
                               if( $i%4==0){
                                             echo "</tr></tr>"; 
                                              }
                                if( $i%2 == 0){
                                             $ss = "bg-primary text-white";
                                             }else {
                                                $ss ="bg-dark text-white"; 
                                             }
                               echo "<td class='".$ss."'><h4 align='center'>".$i."</h4></td> ";   
                     
                              }



            
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
   <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
   <label for ="example"> <h5> Ingrese un número  <h5> </label>
   <input type ="number" class ="form-control" name= "nat" id="example" placeholder="Ingrese un numero natural" required> 
   <input type ="submit"  name ="btn" class="btn btn-outline-success"  value="Enviar"> 
    </form> 
   </div>

        <div class="container pt-4">
         <table class="table border-bordered">
             <tbody>
                 <tr>
                <?php
                if (isset($_POST['btn'])) {
                    Nutural();
                }
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
