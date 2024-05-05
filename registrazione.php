<?php
require_once ('login/connessioneDatabase.php');

$email = $connessione->real_escape_string($_POST['email']) ;
$utente = $connessione->real_escape_string($_POST['username']);
$password = $connessione->real_escape_string($_POST['password']);
$hashedPassword = password_hash($password,PASSWORD_DEFAULT);

$sql = "INSERT INTO autenticazione (Mail, utente,Password) VALUES('$email','$utente','$hashedPassword')";   
if ($connessione->query($sql)===true){
    echo "Registrazione effettuata con successo";
}
else {
    echo "Errore durante la registrazione dell'utente $sql.$connessione->error ";
}

?>