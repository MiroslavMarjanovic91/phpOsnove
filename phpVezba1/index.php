<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vezba1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand navbar-light bug-light">
    <a href="#" class="navbar-brand">Php vezba1</a>
    <ul class = "navbar-nav">
      <?php
        $links = ["Home","About","Galery","Contact","Pets"];
        // for($i=0;$i<count($links);$i++){
        //   echo '<li class="nav-item"><a href="" class="nav-link">'. $links[$i].'</a></li>';
        // }
        ?>
        <?php for ($i=0; $i <count($links) ; $i++): ?>
        <li class="nav-item"><a href="" class="nav-link"><?php echo $links[$i]; ?></a></li>
        <?php endfor ?>
    </ul>
  </nav>
  </body>
</html>
