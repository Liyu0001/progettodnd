<?php
   
class scontro {
    
    function combattimento(  $p1 =new Personaggio,  $p2 = new Personaggio){
        
        $scontro = true; 
        $crit = false;
     
           
        while($p1->isAlive() && $p2->isAlive()) {
            $p1->attack($p2);
            $p2->attack($p1);
        }
    }
}
        

    
    

          
           
           