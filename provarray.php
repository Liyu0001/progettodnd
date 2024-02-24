<?php
    
$stats = [
    'strength' => 15,
    "dexterity" => 0,
    "constitution" => 10,
    "intelligence" => 10,
    "wisdom" => 10,
    "charisma" => 16   
];    

$bonusRazza = [
    'strength' => 0,
    "dexterity" => 0,
    "constitution" => 0,
    "intelligence" => 0,
    "wisdom" => 0,
    "charisma" => 0   
];
$caratteristicheTotali=[];
$caratteristicheModificatore = array_map('calcoloModificatore',$stats);
//unisco i due array
foreach($stats as $chiave=>$valore){
    $caratteristicheTotali[$chiave]= $stats[$chiave]+$bonusRazza[$chiave];
}
var_dump($caratteristicheModificatore);




//tramite array_reduce faccio in modo che tutti gli elementi con la stessa chiave si sommino tra loro
    

//funzione di callback calcoloModificatore.Viene calcolato il bonus o il malus del tiro dei dadi. la funzione array_map crea un nuovo array che contiene tali valori.
    function calcoloModificatore($valore){
    return floor(($valore-10)/2);
    }
    

?>
