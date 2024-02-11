<?php
require('Dado.php');
require('Personaggio.php');
//require __DIR__ .'/Dado.php';
//require __DIR__ .'/Personaggio.php';    

    
           function combattimento(){
            $p1 = new Personaggio('Riky Maledetto', 30, 13);
            $p2 = new Personaggio('PuzzAir', 30, 13);
            $scontro = true; 
           
            while($scontro) {
            $p1ToHit = $p1->attackRoll();
            if ($p1ToHit > $p2->classeArmatura) {  
                $p1Damage = $p1->damageDealt();      
                $p2->takeDamage($p1Damage);
                echo $p1->nome . ' attacked '. $p2->nome . ' for ' . $p1Damage.'!<br>';
                echo $p2->nome . ' is left with '.$p2->hp . 'HPs!<br>';
                if ($p2->hp <= 0) {
                    $scontro = false;
                }
            } else {
                echo 'Bad luck! '.$p1->nome.'<br>';
            }
            $p2ToHit = $p2->attackRoll();
            if ($p2ToHit > $p1->classeArmatura) {  
                $p2Damage = $p2->damageDealt();      
                $p1->takeDamage($p2Damage);
                echo $p2->nome . ' attacked '. $p1->nome . ' for ' . $p2Damage.'!<br>';
                echo $p1->nome . ' is left with '.$p1->hp . 'HPs!<br>';
                if ($p1->hp <= 0) {
                    $scontro = false;
                }
            } else {
                echo 'Bad luck! '.$p2->nome.'<br>';
            }
            }
        }
     echo combattimento();
      
     


?>


