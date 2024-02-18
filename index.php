<?php
    //declare(strict_types=1);
    require('Dado.php');
    require('Personaggio.php');
    require('Scontro.php');
   
    $game = new scontro();
    $game->combattimento((new Personaggio('Fitz il drow', 62, 15)),new Personaggio('Jarosh Paladino oscuro', 70, 16));
    
    
    
    

?>


