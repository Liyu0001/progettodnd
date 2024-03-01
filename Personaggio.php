<?php 

    class Personaggio {
        public function __construct(public string $nome,public int $hp, public int $classeArmatura,Razza $razza){ 
             $bonusCaratteristiche = $razza->getBonusCaratteristiche();

         //unione dei due array che serviranno a dare le caratteristiche totali utili al calcolo del modificatore
         foreach($this->stats as $chiave=>$valore){
         $caratteristicheTotali[$chiave]= $this->stats[$chiave]+$bonusCaratteristiche[$chiave];    
         }
         // la funzione array_map applica la formula di calcolo del modificatore per ottenere il bonus da sommare al dado relativo.
         $this->modificatoriPersonaggio = array_map([self::class, 'calcoloModificatore'], $caratteristicheTotali);
        }    
    
    
            
        public array $stats = [
            "strength" => 15,
            "dexterity" => 10,
            "constitution" => 10,
            "intelligence" => 10,
            "wisdom" => 10,
            "charisma" => 10,
           
        ];    
        public array $savingStats = [
            "strength" => 1,
            "dexterity" => 0,
            "constitution" => 0,
            "intelligence" => 0,
            "wisdom" => 0,
            "charisma" => 0,
        ];
        
     //creazione dell'array che conterrà le statistiche del modificatore da sommare al lancio dei dadi.
    
        public array $modificatoriPersonaggio;
     //funzione di callback calcoloModificatore.Viene calcolato il bonus o il malus del tiro dei dadi.
        public static function calcoloModificatore($valore):int{
        return floor(($valore-10)/2);
        }
    

  
            


             
     //funzione di attacco, riporta il lancio di un d20 per sapere se è stata superata la classe armatura del target.Nel caso in cui il valore del dado supera il valore della classe armatura l'attacco andrà a buon fine.               
        public function attackRoll():int{
            global $d20;
            $risultato = $d20->roll();
            echo "Hai rollato un $risultato!";
            return  $risultato;
        }
        public function isAlive():bool{
            return $this->hp > 0;
        }

        public function attack($target):void{
            if(!$this->isAlive()) return;
            global $d8;
            $crit= false;
    // gestione del calcolo del danno e  del danno critico, l'attacco andrà a buon fine quando il tiro del dado supera il valore della classe armatura. se il lancio del dado è un 20 avverrà un attacco critico e l'attaccante lancerà due dadi. 
            $hitRoll = $this->attackRoll();
            if($hitRoll == 20) $crit = true;
            if ($hitRoll > $target->classeArmatura){
                
                $primoDado= $this->damageDealt();
                $secondoDado = $d8->roll();
                $damage = $primoDado+(int)$crit*$secondoDado+$this->modificatoriPersonaggio["strength"];
                $damagetaken=$target->takeDamage($damage);
                if ($crit){
                    echo $this->nome . ' managed a critical hit attack on '. $target->nome . ' for ' . $damagetaken.'!!!<br>';
                }else{
                    echo $this->nome . ' attacked '. $target->nome . ' for ' . $damagetaken.'!<br>';
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
            return $d8->roll();
        }
        // viene calcolata la variabile $damage sommando i dadi lanciati nella funzione damagedealt, questa variabile viene sottratta agli HP del personaggio attaccato.
        public function takeDamage($damage){
            $this->hp -= $damage;
            if ($this->hp <=0){
                $this->hp = 0;
            }
            return $damage;

        }
       
        
    }
    
                 
    
    



?>

