<?php
//definisanje funkcije
 function displayMessage($name){
  //echo "Hellow $";
  echo "Hellow $name </br>";
}

// pozivanje funkcije
displayMessage("Mikica");
displayMessage("Milica");
//funkcije primaju argumente-parametre

$userName = "Milos";
// function sabiranje($num1=0,$num2=0){
//   echo $num1 + $num2;
// }
// sabiranje(10,20);

//globalna varijabla
function novaFunkcija(){
  global $userName;
  //lokalna varijabla
  echo "$userName </br>";
  return "Funkcija zavrsena ";
}
$rezultatFunkcije = novaFunkcija();
echo $rezultatFunkcije;
var_dump();
count(); //broji duzinu nekog reja
include();
require('ime fajla');
