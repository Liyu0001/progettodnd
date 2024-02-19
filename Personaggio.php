<?php 
     $d20 = new  Dado(20);
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
        public function isAlive():bool{
            return $this->hp > 0;
        }

        public function attack($target){
            if(!$this->isAlive()) return;
            $crit= false;
            // gestione del calcolo del danno e  del danno critico, l'attacco andrà a buon fine quando il tiro del dado supera il valore della classe armatura. se il lancio del dado è un 20 avverrà un attacco critico e l'attaccante lancerà due dadi. 
            $hitRoll = $this->attackRoll();
            if($hitRoll == 20) $crit = true;
            if ($hitRoll > $target->classeArmatura){
                global $d8;
                $primoDado= $this->damageDealt();
                $secondoDado = $d8->roll();
                $damage = $primoDado+(int)$crit*$secondoDado;
                            
                $target->takeDamage($damage);
                if ($crit){
                    echo $this->nome . ' managed a critical hit attack on '. $target->nome . ' for ' . $damage.'!!!<br>';
                }else{
                    echo $this->nome . ' attacked '. $target->nome . ' for ' . $damage.'!<br>';
                }
                echo $target->nome . ' is left with '.$target->hp . 'HPs!<br>';
                if ($target->hp <= 0) {
                    echo "The combact is over $this->nome defeted $target->nome !!!";
                    return;
                }
            } else {
                echo 'Bad luck '.$this->nome. '!'.'<br>';
            } 
        }
        // viene rollato un set di dadi per il calcolo dei danni inflitti
        public function damageDealt() {
            global $d8;
            return $risultatoDanno= $d8->roll();
        }
        // viene calcolata la variabile $damage sommando i dadi lanciati nella funzione damagedealt, questa variabile viene sottratta agli HP del personaggio attaccato.
        public function takeDamage($damage){
            $this->hp -= $damage;
        }
       
        
                 
    }
    



?>

