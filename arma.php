<?php
require_once('include.php');
    Class Arma{
        public array $listaArmi=[
            'mani' => 4,
            'ascia'=>6,
            'bastone ferrato'=>6,
            'falcetto'=>4,
            'giavellotto'=>6,
            'lancia'=>6,
            'martello leggero'=>4,
            'mazza'=>6,
            'pugnale'=>4,
            'randello'=>4,
            'randello pesante'=>8,
            'arco corto'=>6,
            'balestra leggera'=>8,
            'dardo'=>4,
            'fionda'=>4,
            'alabarda'=>10,
            'ascia bipenne'=>12,
            'ascia da battaglia'=>8,
            'falcione'=>10,
            'frusta'=>4,
            'lancia da cavaliere'=>12,
            'maglio'=>6,
            'martello da guerra'=>8,
            'mazzafrusto'=>8,
            'morning star'=>8,
            'picca'=>10,
            'piccone da guerra'=>8,
            'scimitarra'=>6,
            'spada corta'=>6,
            'spada lunga'=>8,
            'spadone'=>6,
            'stocco'=>8,
            'tridente'=>6,
            'arcoLungo'=>8,
            'balestra a mano'=>6,
            'balestra pesante'=>10,
        ]; 
        public array $proprietàArmi = [
            "due mani",
            "lancio",
            "gittata",
            "leggera",
            "a munizioni",
            "pesante",
            "accurata",
            "versatile",
            "improvvisata",
            "argentata",
            "nessuna"
        ];
        public array $proprietàArray;      
        

        public function __construct (
             public string $nomeArma,
             public string $tipoArma,
             public string $proprietà1="nessuna",
             public string $proprietà2="nessuna",
             public string $proprietà3="nessuna"
             
            ){
                $this->proprietàArray = array($this->proprietà1, $this->proprietà2, $this->proprietà3);

        }     
        
         
       
    public function rollArma(){
        $valoreDado=$this->listaArmi[$this->tipoArma];
        return $valoreDado;    
    }
    public function getNomeArma(){
        return $this->nomeArma;            
    }   
    public function getTipoArma(){
        return $this->tipoArma;
    }
    public function getProprietàArma(){
        return $this->proprietàArray;
    }
    }

