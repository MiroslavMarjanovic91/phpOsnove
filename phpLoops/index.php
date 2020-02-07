<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Loops</title>
  </head>
  <body>
    <?php
//definišemo varijablu
    //$counter = 0;
// //testiramo varijablu
//     while($counter < 5){
//       echo "<h1> $counter : Ucimo Php</h1><br />";
//       //manipulacija varijable
//       $counter = $counter + 1;
  //  }

$names = ["Ana","Matija","Jovana","Milica"];
    for($i = 0; $i < 4; $i++){
        echo "<h1>$names[$i]</h1><br />";
    }





     ?>

  </body>
</html>
