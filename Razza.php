<?php
interface RazzaMetodi {
    public function getNomeRazza():string;
    public function getBonusCaratteristiche():array;
} 

class Razza implements RazzaMetodi {    
    public function __construct(public string $nomeRazza, public array $bonusCaratteristiche) {
    }

    public function getNomeRazza():string{
        return $this->nomeRazza;
    }
    public function getBonusCaratteristiche():array{
        return $this->bonusCaratteristiche;
    }
}

$elfo = new Razza("elfo", [
    'strength' => 0,
    "dexterity" => 2,
    "constitution" => 0,
    "intelligence" => 0,
    "wisdom" => 0,
    "charisma" =>0   
] );

$umano = new Razza("umano", [
    'strength' => 1,
    "dexterity" => 1,
    "constitution" => 1,
    "intelligence" => 1,
    "wisdom" => 1,
    "charisma" =>1   
]);
$elfoDrow = new Razza("elfo drow", [
    'strength' => 0,
    "dexterity" => 2,
    "constitution" => 0,
    "intelligence" => 0,
    "wisdom" => 0,
    "charisma" =>1   
]);
$elfoAlto = new Razza ("elfo alto", [
    'strength' => 0,
    "dexterity" => 2,
    "constitution" => 0,
    "intelligence" => 1,
    "wisdom" => 0,
    "charisma" =>0   
]);
$elfoDeiBoschi = new Razza ("elfo dei boschi", [
    'strength' => 0,
    "dexterity" => 2,
    "constitution" => 0,
    "intelligence" => 0,
    "wisdom" => 1,
    "charisma" =>0   
]);
$halfling = new Razza ("halfling", [
    'strength' => 0,
    "dexterity" => 2,
    "constitution" => 0,
    "intelligence" => 0,
    "wisdom" => 0,
    "charisma" =>0   
]);
$halflingPiedilesto = new Razza ("halfling piedilesto", [
    'strength' => 0,
    "dexterity" => 2,
    "constitution" => 0,
    "intelligence" => 0,
    "wisdom" => 0,
    "charisma" =>1   
]);
$halflingTozzo = new Razza ("halfling tozzo", [
    'strength' => 0,
    "dexterity" => 2,
    "constitution" => 0,
    "intelligence" => 0,
    "wisdom" => 0,
    "charisma" =>0   
]);
$nano = new Razza ("nano", [
    'strength' => 0,
    "dexterity" => 0,
    "constitution" => 2,
    "intelligence" => 0,
    "wisdom" => 0,
    "charisma" =>0   
]);
$nanoDelleColline = new Razza ("nano delle colline", [
    'strength' => 2,
    "dexterity" => 0,
    "constitution" => 0,
    "intelligence" => 0,
    "wisdom" => 1,
    "charisma" =>0   
]);
$nanoDelleMontagne = new Razza ("nano delle montagne", [
    'strength' => 0,
    "dexterity" => 2,
    "constitution" => 0,
    "intelligence" => 0,
    "wisdom" => 0,
    "charisma" =>0   
]);
$dragonide = new Razza("dragonide", [
    'strength' => 2,
    "dexterity" => 0,
    "constitution" => 0,
    "intelligence" => 0,
    "wisdom" => 0,
    "charisma" =>1   
]);
$gnomo = new Razza("gnomo", [
    'strength' => 0,
    "dexterity" => 0,
    "constitution" => 0,
    "intelligence" => 2,
    "wisdom" => 0,
    "charisma" =>0   
]);
$gnomoDelleForeste = new Razza ("gnomo delle foreste", [
    'strength' => 0,
    "dexterity" => 1,
    "constitution" => 0,
    "intelligence" => 2,
    "wisdom" => 0,
    "charisma" =>0   
]);
$gnomoDelleRocce = new Razza ("gnomo delle rocce", [
    'strength' => 0,
    "dexterity" => 0,
    "constitution" => 1,
    "intelligence" => 2,
    "wisdom" => 0,
    "charisma" =>0   
]);
$mezzelfo = new Razza ("mezzelfo", [
    'strength' => 0,
    "dexterity" => 2,
    "constitution" => 0,
    "intelligence" => 0,
    "wisdom" => 0,
    "charisma" =>0   
]);
$mezzorco = new Razza("mezzorco", [
    'strength' => 2,
    "dexterity" => 0,
    "constitution" => 1,
    "intelligence" => 0,
    "wisdom" => 0,
    "charisma" =>0   
]);
$tiefling = new Razza ("tiefling", [
    'strength' => 0,
    "dexterity" => 1,
    "constitution" => 0,
    "intelligence" => 0,
    "wisdom" => 0,
    "charisma" =>2   
]);
$razze = [
    $elfo,
    $umano,
    $elfoDrow,
    $elfoAlto,
    $elfoDeiBoschi,
    $halfling,
    $halflingPiedilesto,
    $halflingTozzo,
    $nano,
    $nanoDelleColline,
    $nanoDelleMontagne,
    $dragonide,
    $gnomo,
    $gnomoDelleForeste,
    $gnomoDelleRocce,
    $mezzelfo,
    $mezzorco,
    $tiefling
];
?>