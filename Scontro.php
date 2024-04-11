<?php
    require_once('include.php');
   
class scontro {
    
    function combattimento(Personaggio $p1, Personaggio $p2){   
        
        while($p1->isAlive() && $p2->isAlive()) {
            $p1->attack($p2);
            $p2->attack($p1);
        }
    }
}
        

    
    

          
           
           