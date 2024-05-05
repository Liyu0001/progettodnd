<?php
$nomeServer = '127.0.0.1';
$userName = "Riccardo_dnd";
$password = "MelanzanaVampira";
$dbName = "databaseprogettodnd";
$connessione = new mysqli($nomeServer,$userName,$password,$dbName);
if ($connessione->connect_error){
    die('Errore di connessione'.$connessione->connect_error);
}
?>
