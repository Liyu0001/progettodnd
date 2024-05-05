<?php 
 include ('login/connessioneDatabase.php');
 $query = "SELECT * FROM caratteristichepersonaggio WHERE IDGIOCATORE = 1 ";
 $r = $connessione->query($query);
if ($r->num_rows>0){
    while($row= $r->fetch_assoc() ){
        echo " forza:".$row['strength'].
        '- destrezza:'.$row['dexterity'].
        '- constituzione:'.$row['constitution'].
        '- intelligenza:'.$row['intelligence'].
        '- saggezza:'.$row['wisdom'].
        '- carisma:'.$row['charisma'];
    }
}else {
    echo ":(";
}
 
