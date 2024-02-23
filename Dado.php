<?php
    class Dado {        
        //costruttore
         public function __construct($tipoDado){
            $this->tipoDado = $tipoDado;  
            $this->nomeDado = 'd'.$tipoDado;    
        } 
        //metodi        
        public function roll($numeroDadi = 1) {
            $this->numeroDadi = $numeroDadi;
            $risultati =  array();
            $totale = 0;
            if ($numeroDadi > 0) {                
                for ($x = 0; $x < $numeroDadi; $x++) {                    
                    $risultati[] += rand(1,$this->tipoDado);
                                                       
                }                 
            } else {
                echo 'non puoi rollare 0 dadi';
            }
            
            foreach ($risultati as $i) {
                $totale += $i;
            }
            return $totale;
        }
    }
  
?> 




