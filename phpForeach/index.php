<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Foreach</title>
  </head>
  <body>
    <?php

$pect = ["Cat","Dog","Fish","Mouse"];
$petNames = [
"cat"=>"Macka",
"cat2"=>"Macko",
"dog"=>"Dona",
"dog2"=>"Dor"
];
// foreach ($petNames as $key  => $value) {
//   echo $key." : ".$value."<br />";
// }
     ?>
     <?php foreach ($petNames as $type => $name): ?>
     <h2><span><?php echo $type; ?></span>  <?php echo $name;?></h2><br>
     <?php endforeach ?>

  </body>
</html>
