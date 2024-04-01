<?php
class Barbaro extends Personaggio{

  public $rage=false;
  public array $competenze =[
    "armatureLeggere" => ["imbottita", "cuoio", "cuoio borchiato", "pelle", "giaco di maglia", "corrazza a scaglie"],
    "armiDaGuerra" => ["alabarda", "ascia bipenne", "ascia da battaglia", "falcione", "frusta", "lancia", "lancia da cavaliere", "maglio", "martello da guerra", "mazzafrusto", "morning star", "picca", "piccone da guerra", "scimitarra", "spada corta", "spada lunga", "spadone", "stocco", "tridente", "arco lungo", "balestra a mano", "balestra pesante", "cerbottana", "rete"],
    "armiSemplici" => ["ascia", "bastone ferrato", "falcetto", "giavellotto", "lancia", "martello leggero", "mazza", "pugnale", "randello", "randello pesante", "arco corto", "balestra leggera", "dardo", "fionda"]
  ];
                    
  public array $equipaggiamento=[
    "armatura"=>"armaturaLeggera",
    "arma"=>"spada",
  ];  
 

    public function onRage(){
    echo "wahhhhh, sono arrabbiatooooooooo!";          
    $this->rage=true;   
    }
    public function damageDealt() {
     if ($this->rage==true){
     global $d8;
     return  $d8->roll()+2;
    }
    else {
    global $d8;
    return $d8->roll();
    }
    }
                
  function takeDamage($damage):int{
  if ($this->rage==true){
    $damage = $damage/2; 
  } 
  $this->hp -= $damage;
  if ($this->hp <=0){
  $this->hp = 0; 
  } 
  else if(
  $this->hp<=25
  ){
  if (!$this->rage){
  $this->onRage(); 
  } 
  }              
  return $damage;         
  }
}

?>