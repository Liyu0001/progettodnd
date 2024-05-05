<?php
require_once ('connessioneDatabase.php');
    $email = mysqli_real_escape_string($connessione, $_POST['email']);
    $username = mysqli_real_escape_string($connessione, $_POST['username']);
    $password = mysqli_real_escape_string($connessione,$_POST['password']);   

    if($_SERVER["REQUEST_METHOD"]==="POST"){        
        $sql_select ="SELECT * FROM autenticazione WHERE utente ='$username'";
        if($result=$connessione->query($sql_select)){
            if ($result->num_rows==1)
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if(password_verify($password, $row['Password'])){
                session_start();
                $_SESSION['loggato'] = true; 
                $_SESSION['id'] =$row['Idutente'];
                $_SESSION['username'] =$row['utente'];                
                header("Location:../CreazioneDelPersonaggio.php");
            }else{
                echo "la password non è corretta";            
            }
        }else{" account non esistente";
        }          
    }else{
        echo "errore in fase di login";
    }
    $connessione->close();
   



?>