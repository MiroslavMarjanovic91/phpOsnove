<?php

require 'funkcije.php';
// ako postoji isset ($_POST['submit'] znaci true izvrsavaj korak po korak
if(isset($_POST['submit'])) {
$userName = $_POST['userName'];
$email = $_POST['email'];
$year = $_POST['year'];
$gender = $_POST['gender'];

//pozivamo kod da se izvrtsi
// dump($userName);
// dump($email);
// dump($year);
// dump($gender);
// dump($languages);

//ili ce biti ove varijable ako je nesto stiklirano ili nece
if(isset($_POST['languages'])){
  $languages = $_POST['languages'];
}
// ako odgovor nije true, onda vrati korisnika na pocetnu stranu
} else{
  header("Location: index.php");
}

if(isset($languages)){
  echo "<h2>Welcome User Name</h2>";
  foreach ($languages as $languages) {
    echo "<h4>We need $languages developer</h4>";
  }
  echo "<h5>We send u email at<span style= \"text-decoration:underline\">$email</span></h5>";
}else {
  //u slucaju da ne znamo ni jedan programski jezik, izbacice print
  // Sorry we need one languages
  echo "<h2>Sorry we need one languages</h2>";

}
 ?>
