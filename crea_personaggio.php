<?php
   include_once 'includes.php';   
   $nomePersonaggio = $_POST["nome"];
   $indiceRazza = $_POST["razza"];
   $classeSelezionata = $_POST["classe"];
   $stats = $_POST["stats"];
   // funzione per la converzione dei valori stringa $_POST in interi.
   function conversioneValoriInteri($value) {
      return intval($value);
   };
   $stats = array_map("conversioneValoriInteri",$stats);   
   if ($classeSelezionata == 'Barbaro'){
      session_start();
       $giocatore = new Barbaro($nomePersonaggio,100,10,$razze[$indiceRazza],$stats); 
       $_SESSION['giocatore'] = $giocatore;
   }
   else { 
      echo "hai selezionato un ladro.. ma ancora non esiste!";
       $giocatore = new Personaggio($nomePersonaggio,100,10,$razze[$indiceRazza],$stats);
   };
   header("Location: index.php?personaggio_creato=1");
   exit;
   

   /* 
$game= new scontro();
$p2 = new Personaggio('Asparago', 100, 10, $umano);
$game->combattimento($giocatore,new Personaggio('Asparago', 20, 10, $umano));  */
?>    