<?php


$d4=4;
$d6=6;
$d8=8; 
$d12=12;
$d20=20;
$setDadi =[$d4,$d6,$d8,$d12,$d20];
$sceltaDado = array_rand($setDadi);
$lancio = rand(1,$setDadi[$sceltaDado]);

echo "è stato preso un.$setDadi[$sceltaDado].il risultato uscito è $lancio";

?>



    
    
    
    
    
    




    