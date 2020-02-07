<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Validacija forme</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/
    bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/
    j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="jumbotron text-center">
      <h2>From Validacija</h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-6 offset-3">
          <form action="validacija.php" method="post">
            <!-- required je opcija koja pokazuje da je nesto obavezno, kako bi popunili formu -->
          <input type="userName" name="userName" placeholder="userName" class="fom-control" required><br>
          <input type="email" name="email" placeholder="email" class="from-control" required><br>
          <select name="year">
          <?php for($i = 1965;$i<2005;$i++): ?>
          <option value="<?php echo $i; ?>">Year of birth <?php echo $i;  ?></option>
          <?php endfor; ?>
          </select><br>
          <!-- isto i kod radio button required -->
          <input type="radio" name="gender" value="male" required>Male
          <input type="radio" name="gender" value="femal">Female
          <p>Poznavanje programa</p>
          <!-- ovde moramo da stavimo listu languages[], da bi program prihvatio svaku opciju,
          u slucaju da nema liste [] program ce prihvatati samo poslednji kod  -->
          <input type="checkbox" name="languages[]" value="php">Php
          <input type="checkbox" name="languages[]" value="java">Java
          <input type="checkbox" name="languages[]" value="C#">C#
          <input type="checkbox" name="languages[]" value="C++">C++<br>
          <button type="submit" name="submit" class="btn btn-info from-control">save</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
