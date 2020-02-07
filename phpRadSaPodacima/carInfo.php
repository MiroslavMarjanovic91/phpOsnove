<!-- preuzimamo id kada korisnik klikne na zeljeni link za carInfo -->
<?php
//importujemo db
require 'db.php';
if(isset($_GET['id'])){
  $id = $_GET['id'];
  //filtriramo info trazeci zeljeni id, ugradjena metoda
  $cars = array_filter($db,function ($el)
  {
    global $id;
return $el['id'] == $id;
});
  //var_dump($carS);
} elseif($_GET['search']) {
  $search = $_GET['search'];
  $cars = array_filter($db,function($el)
{
  global $search;
  return $el['brend'] == $search || $el['name'] == $search || $el['price'] == $search;
});
//ako upisemo nesto sto se ne nalazi na sajtu u search, kako nas ne bi vodio na praznu stranu
//mi dodeljujemo lokaciju pocetne strane index.php
if(count($cars)==0){
  header("Location: index.php?error=1");
  }
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Car info</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
   integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   </head>
   <body>
     <nav class="navbar navbar-expand navbar-light bg-light">
       <a href="index.php" class="navbar-brand">Cars</a>
     </nav>
     <div class="jumbotron text-center">
       <h2>
         <?php foreach($cars as $car): ?>
         <span><?php echo $car['brend']; ?></span>
       <?php endforeach; ?>
     </h2>
     </div>
     <div class="container-fluid" >
       <div class="row" margin: 5px;
    border: 1px solid silver;
    padding: 10px;
    font-size: 9pt;
    height: 300px;>
         <div class="col-8 offset-2">
           <div class="row">
            <?php foreach ($cars as $car):  ?>
              <div class="col-6" style="outline:1px solid #ddd">
                <h3 class="display=4"><?php echo $car['name']; ?></h3>
                <hr>
                <p style="display: inline-block;
                text-align: justify;"><?php echo $car['info'];  ?></p>
              </div>
               <?php endforeach; ?>
             </div>
         </div>
       </div>
     </div>
   </body>
   </html>
