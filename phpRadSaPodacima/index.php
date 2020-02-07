<?php require 'db.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rad sa podacima Data</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand navbar-light bg-light">
      <a href="index.php" class="navbar-brand">Cars</a>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <!-- centriraj sa offset -->
        <div class="col-8 offset-2">
          <h3 class="display-4">Serch cars</h3>

          <form action="carInfo.php" method="get">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="<?php
              if(isset($_GET['erorr'])){
                echo "No match found. Try again!";
              } else {
                  echo "Search";
                } ?>">
              <div class="input-group-append">
                <button type="submit" name="subBtn" class="btn btn-info">Search</button>
              </div>
            </div>
          </form>
        </div>
      </div>
        <br><br>
        <div class="row">
          <div class="col-8 offset-2">
            <div class="row">
              <?php foreach ($db as $car): ?>
                <div class="col-3">
                  <!-- ovde ceo tag stavljamo da bude link -->
                  <a href="carInfo.php?id=<?php echo $car['id']; ?>">
                    <div class="card text-center">
                      <div class="card-header"><?php echo $car['brend']; ?></div>
                      <div class="card-body"><?php echo $car['name']; ?>  </div>
                        <div class="card-footer">
                          <button class="btn btn-primary btn-sm"><?php echo $car['price']. "$"; ?> </button>
                          <!-- btn-sm - je da tekst u polju bude small(smanjen)-->
                          <button class="btn btn-<?php if($car['used']){
                            echo "warning";
                          }else {
                            echo "success";
                          }  ?> btn-sm"><?php if($car['used']){
                            echo "Used";
                          }else{
                            echo "New";
                          } ?></button>
                        </div>
                    </div></a>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
