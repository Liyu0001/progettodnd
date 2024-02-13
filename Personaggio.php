<?php 
$d20 = new Dado(20);
$d12 = new Dado(12);
$d8 = new Dado(8);
$d6 = new Dado(6);
$d4 = new Dado(4);

    class Personaggio {
         
      public array $stats = [
            'strength' => 10,
            "dexterity" => 10,
            "constitution" => 10,
            "intelligence" => 10,
            "wisdom" => 10,
            "charisma" => 10,
            "proficiency" => 0,
            "initiative" => 0
        ];    
       public array $savingStats = [
            "strength" => 1,
            "dexterity" => 0,
            "constitution" => 0,
            "intelligence" => 0,
            "wisdom" => 0,
            "charisma" => 0,
        ];
               
        public function __construct(public string $nome,public int $hp, public int $classeArmatura)
            {
           
               
            }   
          
            
        public function attackRoll() {
            global $d20;
            $risultato = $d20->roll();
            echo "Hai rollato un $risultato!";
            return  $risultato;
            
        }

        public function damageDealt() {
            global $d8;
            return $risultato = $d8->roll();
        }

        public function takeDamage($damage){
            $this->hp -= $damage;
        }
       
        
                 
    }
    



?>

