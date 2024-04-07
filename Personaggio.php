<?php

    class Personaggio {
        public Arma $armaEquipaggiata;
        public Arma $armaSecondaria;
        public array $equipaggiamento;
        public array $competenze;
        
        public function __construct(public string $nome,public int $hp, public int $classeArmatura,Razza $razza,public int $exp = 0,public int $livello=1) {
            $this->armaSecondaria = new Arma("Spadone della morte","spadone","due mani");
            
            $this->armaEquipaggiata= new Arma("Spada comune","spada corta","leggera");
            $bonusCaratteristiche = $razza->getBonusCaratteristiche();
            $this->aumentaLivello();
            $this->equipaggiamento = [
                "armatura"=>"nessuna",
                "arma"=>"mani",
            ];
            $this->competenze = [""];
            


         //unione dei due array che serviranno a dare le caratteristiche totali utili al calcolo del modificatore
         foreach($this->stats as $chiave=>$valore){
         $caratteristicheTotali[$chiave]= $this->stats[$chiave]+$bonusCaratteristiche[$chiave];
         }
         // la funzione array_map applica la formula di calcolo del modificatore per ottenere il bonus da sommare al dado relativo.
         $this->modificatoriPersonaggio = array_map([self::class, 'calcoloModificatore'], $caratteristicheTotali);
        }
        public function mioLivello(){
            echo " $this->nome ha raggiunto un totale di $this->exp punti esperienza ed è attualmente al livello $this->livello ";
        }
        
        //funzione che regola il livello del personaggio in base al range di exp ottenuta.
        public function aumentaLivello(){
            if ($this->exp>=355000){
                $this->livello=20;
            }else
            if ($this->exp>=305000){
                $this->livello=19;
            }else
            if ($this->exp>=265000){
                $this->livello=18;
            }else
            if ($this->exp>=225000){
                $this->livello=17;
            }else
            if ($this->exp>=195000){
                $this->livello=16;
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
            }else
            if ($this->exp>=900){
                $this->livello=3;
            }else
            if ($this->exp>=300){
                $this->livello=2;
            }            
        }
        
        public array $inventario =[

        ];
               
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


       //funzione che imposta l'arma equipaggiata dal personaggio, qualora l'abilità non sia presente nell'array competenze il personaggio non potrà equipaggiarla.

        
        public function equipArma(Arma $arma){
            $nomeArma = $arma->getNomeArma();
            $tipoArma = $arma->getTipoArma();
            if(!in_array($tipoArma,$this->competenze["armiDaGuerra"])&&(!in_array($tipoArma,$this->competenze["armiSemplici"]))){
                echo "non hai l'abilità per poterlo equipaggiare!";}
            else {
                echo "hai equipaggiato $nomeArma";
                $armaTemp=$this->armaEquipaggiata;
                $this->armaEquipaggiata=$arma;
                $this->armaSecondaria=$armaTemp;
            }
        }



       /* public function equipArma(){
            $arma= $this->inventario["arma"];
            if (array_key_exists("arma", $this->inventario)){if(!in_array($arma,$this->competenze["armiDaGuerra"])&&(!in_array($arma,$this->competenze["armiSemplici"]))){
                echo "non hai l'abilità per poterlo equipaggiare!";}else{
                    $equipaggiamento["arma"]=$arma;
                echo "prendi $arma in mano!";}
                
            } else {echo "Non è presente nella tua borsa!";}
        } */
                    
     //creazione dell'array che conterrà le statistiche del modificatore da sommare al lancio dei dadi.
    
        public array $modificatoriPersonaggio;
     //funzione di callback calcoloModificatore.Viene calcolato il bonus o il malus del tiro dei dadi.
        public function calcoloModificatore($valore):int{
        return floor(($valore-10)/2);
        }    

     //funzione di attacco, riporta il lancio di un d20 per sapere se è stata superata la classe armatura del target.
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
            $crit= false;
            // gestione del calcolo del danno e  del danno critico, l'attacco andrà a buon fine quando il tiro del dado supera il valore della classe armatura. se il lancio del dado è un 20 avverrà un attacco critico e l'attaccante lancerà due dadi. 
            $hitRoll = $this->attackRoll();
            if($hitRoll == 20) $crit = true;
            if ($hitRoll > $target->classeArmatura){
                // gestione di attacco provvisorio. calcolo del danno in base al superamento della classe armatura e somma modificatore danno. coorreggere la funzione per fare in modo che il calcolo dei danni sia relativo all'arma utilizzata.            
                $primoDado = $this->damageDealt();
                $secondoDado = $this->damageDealt();             
                $damage = $primoDado+$this->modificatoriPersonaggio["strength"]+(int)$crit*$secondoDado;
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

        /*  // viene rollato un set di dadi per il calcolo dei danni inflitti
        public function damageDealt(int $numeroDadi = 1) {
            global $armi;
            $armaAttaccante = $this->equipaggiamento["arma"];
            echo " $this->nome assesta un colpo con la sua $armaAttaccante"; 
            $valoreDado = $armi->listaArmi[$armaAttaccante];
            $nomeDado = "d$valoreDado";
            return $GLOBALS[$nomeDado]->roll($numeroDadi);
        } */
            // viene rollato un set di dadi in base all'arma equipaggiata per il calcolo dei danni inflitti al bersaglio.
        public function damageDealt(int $numeroDadi = 1){            

             $armaAttaccante = $this->armaEquipaggiata->getTipoArma();
             if ($armaAttaccante=="spadone"|| $armaAttaccante=="maglio"){$numeroDadi=2;}                           
             $valoreDado = $this->armaEquipaggiata->listaArmi[$armaAttaccante];
             $nomeDado = "d$valoreDado";
             return $GLOBALS[$nomeDado]->roll($numeroDadi);
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

