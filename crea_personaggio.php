<?php
   include_once 'includes.php';
       
   if($_SERVER['REQUEST_METHOD']=='POST'){

   
   $nomePersonaggio = $_POST["nome"];
   $indiceRazza = $_POST["razza"];
   $classeSelezionata = $_POST["classe"];
   $stats = $_POST["stats"];
   // funzione per la converzione dei valori stringa $_POST in interi.
   function conversioneValoriInteri($value) {
      return intval($value);
   };
  $stats = array_map("conversioneValoriInteri",$stats);
   }
   
   if ($classeSelezionata == 'Barbaro'){
      $giocatore = new Barbaro($nomePersonaggio,100,10,$razze[$indiceRazza],$stats); 
   }
   else { 
      echo "hai selezionato un ladro.. ma ancora non esiste!";
      $giocatore = new Personaggio($nomePersonaggio,100,10,$razze[$indiceRazza],$stats);

   }



$game= new scontro();
$p2 = new Personaggio('Asparago', 100, 10, $umano);
$game->combattimento($giocatore,new Personaggio('Asparago', 20, 10, $umano)); 
?>    