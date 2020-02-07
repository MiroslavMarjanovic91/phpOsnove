<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ArryListe</title>
  </head>
  <body>
    <?php
    //array
    //object
    //resource

    $numbers = [1,2,3,4,5];
    $numbers2 = Array(6,7,8,9,10);
    $mix = ["Mikica",29,true,null,[100,200,300]];
    $lotoBrojevi = [12,22,33,35];

    $numbers[6] = 100;
    unset($numbers[2]);

    // echo $numbers;
    //pre tag
    echo "<pre>";
    var_dump($numbers);
    echo "<pre>";

    echo "<pre>";
    //var_dump($mix[0]);
    echo "<h1>$mix[0]</h1>";
    echo "<pre>";
    ?>

  </body>
</html>
