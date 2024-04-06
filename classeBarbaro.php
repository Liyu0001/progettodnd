<?php

class Barbaro extends Personaggio {
  
 

 
  

  public $rage=false;
    public function __construct(string $nome, int $hp, int $classeArmatura, Razza $razza, int $exp = 0, int $livello = 1) {
      parent::__construct($nome, $hp, $classeArmatura, $razza, $exp, $livello);
        $this->competenze = [
            "armatureLeggere" => ["imbottita", "cuoio", "cuoio borchiato", "pelle", "giaco di maglia", "corrazza a scaglie"],
            "armiDaGuerra" => ["alabarda", "ascia bipenne", "ascia da battaglia", "falcione", "frusta", "lancia", "lancia da cavaliere", "maglio", "martello da guerra", "mazzafrusto", "morning star", "picca", "piccone da guerra", "scimitarra", "spada corta", "spada lunga", "spadone", "stocco", "tridente", "arco lungo", "balestra a mano", "balestra pesante", "cerbottana", "rete"],
            "armiSemplici" => ["ascia", "bastone ferrato", "falcetto", "giavellotto", "lancia", "martello leggero", "mazza", "pugnale", "randello", "randello pesante", "arco corto", "balestra leggera", "dardo", "fionda"]
        ];
        $this->equipaggiamento = [
          "armatura"=>"armaturaLeggera",
          "arma"=>"ascia bipenne"
        ];  
    }

    public function onRage(){
    echo "wahhhhh, sono arrabbiatooooooooo!";          
    $this->rage=true;   
    }    
   
                
 /*  function takeDamage($damage):int{
    if ($this->rage==true) {
      $damage = $damage/2; 
    } 
    $this->hp -= $damage;
    if ($this->hp <=0){
      $this->hp = 0; 
    } 
    else if($this->hp<=25) {
      if (!$this->rage){
        $this->onRage(); 
      } 
    }              
  return $damage;         
  } */

}
?>