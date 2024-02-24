<?php
$d20 = new  Dado(20);  $d12 = new Dado(12);
$d8 = new Dado(8);
$d6 = new Dado(6);
$d4 = new Dado(4);

   
    
class Barbaro extends Personaggio{
    public $rage=false;
    public function onRage(){        
    $this->rage=true;   
    }
function damageDealt() {
  if ($this->rage==true){
    global $d8;
    return  $d8->roll()*2;
  }
  else {
   global $d8;
   return $d8->roll();
  }
 }
                
function takeDamage($damage){
  if ($this->rage==true){
    $damage = $damage / 2; 
  } 
$this->hp -= $damage;
if ($this->hp <=0){
  $this->hp = 0; 
} else if ($this->hp<=25){
  if (!$this->rage){
  $this->onRage();
  echo "WAHHHHHHH SONO ARRABBIATOOOOOOOOOOOOOOOOOO!!! I prossimi attacchi di $this->nome vengono raddoppiati! <br>";
  } 
};
                
return $damage;         
}
}

?>