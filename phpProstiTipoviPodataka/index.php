<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prosti tipovi podataka</title>
  </head>
  <body>
    <?php

//numbers
// boolean
// null

$num = 12;
$num2 = 25.33;
$sum = $num + $num2;
echo $sum;
?>
<br>
<?php
//takođe umesto echo možemo koristiti
var_dump($sum);
?>
<br>
<?php
//modulooprator

echo 3 % 2;
//ostatak je 1
// dok recimo 4 % 2, ostatk je 0
?>
<br>
<?php
$istina = true;
$laz = false;

//browser za true štampa 1, dok za false ne štampa ništa, ali kad upotrebimo var_dump u browsers on će štampati boolean(true), kao i boolean(false)


?>


  </body>
</html>
