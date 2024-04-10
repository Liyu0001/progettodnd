<?php
   require ('Personaggio.php');
   require('Razza.php');
   require('Scontro.php');
   require('classeBarbaro.php');
   require('Dado.php');
   $d20 = new  Dado(20); $d12 = new Dado(12);$d8 = new Dado(8);$d6 = new Dado(6);$d4 = new Dado(4);   
   $indiceRazza = $_POST["razza"];
   $nomePersonaggio = $_POST["nome"];
   $stats = $_POST["stats"];
   // funzione per la converzione dei valori stringa $_POST in interi.
   function conversioneValoriInteri($value) {
      return intval($value);
   };
  $stats = array_map("conversioneValoriInteri",$stats);   
   

 $personaggio = new Personaggio($nomePersonaggio,100,10,$razze[$indiceRazza], $stats); 
echo "è stato creato $nomePersonaggio";
$game= new scontro();
$p1 = new Personaggio($nomePersonaggio,100,10,$razze[$indiceRazza],$_POST["stats"]);
$game->combattimento($p1,new Personaggio('Asparago', 100, 10, $umano,$_POST["stats"])); 
var_dump($p1);    
    
      
     


?>    