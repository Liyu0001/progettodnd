<?php
    Class Barbaro extends Personaggio {
        public $rage = false;
        
         
        public function __construct (string $nome, int $hp, int $classeArmatura, Razza $razza,array $stats, int $exp = 2699, int $livello = 1){
            parent::__construct($nome, $hp, $classeArmatura, $razza,$stats, $exp, $livello);
            $this->competenze = [
             "armatureLeggere" => ["imbottita", "cuoio", "cuoio borchiato", "pelle", "giaco di maglia", "corrazza a scaglie"],
             "armiDaGuerra" => ["alabarda", "ascia bipenne", "ascia da battaglia", "falcione", "frusta", "lancia", "lancia da cavaliere", "maglio", "martello da guerra", "mazzafrusto", "morning star", "picca", "piccone da guerra", "scimitarra", "spada corta", "spada lunga", "spadone", "stocco", "tridente", "arco lungo", "balestra a mano", "balestra pesante", "cerbottana", "rete"],
             "armiSemplici" => ["ascia", "bastone ferrato", "falcetto", "giavellotto", "lancia", "martello leggero", "mazza", "pugnale", "randello", "randello pesante", "arco corto", "balestra leggera", "dardo", "fionda"]
            ];
            $this->armaEquipaggiata = new Arma("Ascia comune", "ascia bipenne", "due mani");
         
            $this->equipaggiamento = [
             "armatura"=>"armaturaLeggera",
             "arma"=>"ascia bipenne"
            ];

        }
        public function aumentaPuntiCaratteristica(){
            echo "Hai raggiunto il livello $this->livello! Puoi spendere due punti caratteristica a piacimento.";
            echo "<form action='aumenta_punti.php' method='POST'>";
            echo "<label for='strength'>strength:</label>";
            echo "<input type='number' id='strength' name='strength' min='0' max='2'><br>";
            echo "<label for='dexterity'>dexterity:</label>";
            echo "<input type='number' id='dexterity' name='dexterity' min='0' max='2'><br>";
            echo "<label for='constitution'>constitution:</label>";
            echo "<input type='number' id='constitution' name='constitution' min='0' max='2'><br>";
            echo "<label for='intelligence'>intelligence:</label>";
            echo "<input type='number' id='intelligence' name='intelligence' min='0' max='2'><br>";
            echo "<label for='wisdom'>wisdom:</label>";
            echo "<input type='number' id='wisdom' name='wisdom' min='0' max='2'><br>";
            echo "<label for='charisma'>charisma:</label>";
            echo "<input type='number' id='charisma' name='charisma' min='0' max='2'><br>";
            echo "<input type='submit' value='Conferma'>";
            echo "</form>";        
            // Gestisci i dati inviati dal form qui
        
        }
        

        public function aumentaLivello(){
            if ($this->exp>=355000){
                $this->livello=20;
            }else
            if ($this->exp>=305000){
                $this->livello=19;
                $this->aumentaPuntiCaratteristica();
            }else
            if ($this->exp>=265000){
                $this->livello=18;
            }else
            if ($this->exp>=225000){
                $this->livello=17;
            }else
            if ($this->exp>=195000){
                $this->livello=16;
                $this->aumentaPuntiCaratteristica();
            }else
            if ($this->exp>=165000){
                $this->livello=15;
            }else
            if ($this->exp>=140000){
                $this->livello=14;
            }else
            if ($this->exp>=120000){
                $this->livello=13;
            }else
            if ($this->exp>=100000){
                $this->livello=12;
            }else
            if ($this->exp>=85000){
                $this->livello=11;
            }else
            if ($this->exp>=64000){
                $this->livello=10;
            }else
            if ($this->exp>=48000){
                $this->livello=9;
            }else
            if ($this->exp>=34000){
                $this->livello=8;
                $this->aumentaPuntiCaratteristica();
            }else
            if ($this->exp>=23000){
                $this->livello=7;
            }else
            if ($this->exp>=14000){
                $this->livello=6;
            }else
            if ($this->exp>=6500){
                $this->livello=5;
            }else
            if ($this->exp>=2700){
                $this->livello=4;
                $this->aumentaPuntiCaratteristica();
            }else
            if ($this->exp>=900){
                $this->livello=3;
            }else
            if ($this->exp>=300){
                $this->livello=2;
            }            
        }
        
        public function onRage(){
            echo "wahhhhh, sono arrabbiatooooooooo!";          
            $this->rage=true;   
        }
        public function attack($target):void{
            if(!$this->isAlive()) return;            
            $crit= false;
            // gestione del calcolo del danno e  del danno critico, l'attacco andrà a buon fine quando il tiro del dado supera il valore della classe armatura. se il lancio del dado è un 20 avverrà un attacco critico e l'attaccante lancerà due dadi. 
            $hitRoll = $this->attackRoll();
            if($hitRoll == 20) $crit = true;
            if ($hitRoll > $target->classeArmatura){
            //gestione del danno in base all'arma impugnata    

                $primoDado = $this->damageDealt();
                $secondoDado = $this->damageDealt();
                $proprietàArma = $this->armaEquipaggiata->getProprietàArma();
                if (in_array("accurata",$proprietàArma)&&$this->modificatoriPersonaggio["dexterity"] > $this->modificatoriPersonaggio["strength"]){  
                    $damage = $primoDado+$this->modificatoriPersonaggio["dexterity"]+(int)$crit*$secondoDado; 
                }
                else { 
                    $damage = $primoDado+$this->modificatoriPersonaggio["strength"]+(int)$crit*$secondoDado;
                }
                $damagetaken=$target->takeDamage($damage);
                if ($crit) {
                    echo $this->nome . ' managed a critical hit attack on '. $target->nome . ' for ' . $damagetaken.'!!!';
                }else {
                    echo $this->nome . ' attacked '. $target->nome . ' for ' . $damagetaken.'!';
                }
                echo $target->nome . ' is left with '.$target->hp . 'HPs!<br>';
                if ($target->hp <= 0) { 
                   
                    echo "The combact is over $this->nome defeted $target->nome !!!";
                    $this->exp += 500;
                    $this->aumentaLivello();
                    $this->mioLivello();                                      
                    return;
                }
                } else {
                echo 'Bad luck '.$this->nome. '!'.'<br>';
              } 
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










