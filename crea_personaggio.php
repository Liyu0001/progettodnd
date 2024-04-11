<?php
   include_once 'index.php';
   
    
   if($_SERVER['REQUEST_METHOD']=='POST'){
   $indiceRazza = $_POST["razza"];
   $nomePersonaggio = $_POST["nome"];
   $stats = $_POST["stats"];
   // funzione per la converzione dei valori stringa $_POST in interi.
   function conversioneValoriInteri($value) {
      return intval($value);
   };
  $stats = array_map("conversioneValoriInteri",$stats);
   }   
   

$personaggio = new Personaggio($nomePersonaggio,100,10,$razze[$indiceRazza], $stats); 
echo "è stato creato $nomePersonaggio";
$game= new scontro();
$p1 = new Personaggio($nomePersonaggio,100,10,$razze[$indiceRazza],$_POST["stats"]);
$game->combattimento($p1,new Personaggio('Asparago', 100, 10, $umano)); 
?>    