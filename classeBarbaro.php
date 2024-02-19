<?php
  $d20 = new  Dado(20);
  $d12 = new Dado(12);
  $d8 = new Dado(8);
  $d6 = new Dado(6);
  $d4 = new Dado(4);

   
    
    class Barbaro extends Personaggio{
        public $rage=false;
        public function onRage(){
        if ($this->hp<=25){
            $this->rage=true;
            echo "WAHHHHHHH SONO ARRABBIATOOOOOOOOOOOOOOOOOO<br>";
             
        }
        
    }
        
        
         function damageDealt() {
            $this->onRage();                       
            if ($this->rage==false){
                
            global $d8;
            return  $d8->roll();
            
            }
            else {
            echo "danno moltiplicato per tre";
            global $d8;
            return $d8->roll()*3;
            
            }
            }
                
         function takeDamage($damage){
            $riduzioneDanno = $damage/2; 
            $this->hp -= $riduzioneDanno;
            
        }
               
    }




    


?>