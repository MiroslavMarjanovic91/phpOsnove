<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Assoc Array</title>
  </head>
  <body>
<?php
$student = ["js"=>8,"php"=>10,"html"=>9];
$student["java"] = 6;
unset($student["js"]);
echo "<pre>";
var_dump($student);
//echo "<p> JavaSript :" . $student[js] . "</p>" ;
echo "<pre>";
?>
  </body>
</html>
