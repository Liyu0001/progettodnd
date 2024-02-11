<?php
require __DIR__ .'/Dado.php';
$hptotali = 25;

$setDadi = array(
$d20 = new Dado(20),
$d12 = new Dado(12),
$d8 = new Dado(8),
$d6 = new Dado(6),
$d4 = new Dado(4),
);
    
for ($i=0;$i<=100;$i++){
    $superaCa= $d20->roll();
    $classeArmatura = 10;
    
    if ($superaCa > $classeArmatura){
     echo"tenti un attacco..riesci a colpire l'avversario!<br>";
     $sceltaDadoIndex = array_rand($setDadi);    
     $nomeD = $setDadi[$sceltaDadoIndex]->nomeDado;    
     $risultato = $setDadi[$sceltaDadoIndex]->roll();    
     $hptotali -= $risultato;    
     echo "è stato lanciato un $nomeD, il risultato uscito è di $risultato<br>";    
     if($hptotali <= $risultato){
        echo " il tuo nemico è morto!!<br>";
        break;        
     }
     echo " al tuo nemico rimangono ancora $hptotali hp!<br>"; 
     }
     else {
     echo "tenti un attacco.. l'avversario riesce a schivare..<br>";
     continue;
    };
}
 


?>