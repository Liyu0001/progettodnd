
<?php
include_once 'includes.php';
session_start();
function conversioneValoriInteri($value) {
    return intval($value);
};
$giocatore = $_SESSION['giocatore'];
$caratteristicheTotali = $giocatore->caratteristicheTotali;
$statsAdd = array_map("conversioneValoriInteri",$_POST["stats"]);
foreach($caratteristicheTotali as $chiave=>$valore){
    if (array_key_exists($chiave,$statsAdd)){
        $caratteristicheTotaliAggiornate[$chiave]= $caratteristicheTotali[$chiave]+$statsAdd[$chiave];
    }
}
$giocatore->caratteristicheTotali = $caratteristicheTotaliAggiornate;
?>    


