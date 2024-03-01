<?php
interface Razza {
    public function getNomeRazza():string;
    public function getBonusCaratteristiche():array;
    } 


class Elfo implements Razza {
    private $nomeRazza = 'Elfo';
    private $bonusCaratteristiche = [
        'strength' => 0,
        "dexterity" => 2,
        "constitution" => 0,
        "intelligence" => 0,
        "wisdom" => 0,
        "charisma" =>0   
    ];
    public function getNomeRazza():string{
        return $this->nomeRazza;
    }
    public function getBonusCaratteristiche():array{
        return $this->bonusCaratteristiche;
        
    }

    
}
class ElfoDrow implements Razza {
    private $nomeRazza = 'Elfo Drow';
    private $bonusCaratteristiche = [
        'strength' => 0,
        "dexterity" => 2,
        "constitution" => 0,
        "intelligence" => 0,
        "wisdom" => 0,
        "charisma" =>1   
    ];
    public function getNomeRazza():string{
        return $this->nomeRazza;
    }
    public function getBonusCaratteristiche(): array{
        return $this->bonusCaratteristiche;
        
    }

    
}
class ElfoAlto implements Razza {
    private $nomeRazza = 'Elfo Alto';
    private $bonusCaratteristiche = [
        'strength' => 0,
        "dexterity" => 2,
        "constitution" => 0,
        "intelligence" => 1,
        "wisdom" => 0,
        "charisma" =>0   
    ];
    public function getNomeRazza():string{
        return $this->nomeRazza;
    }
    public function getBonusCaratteristiche(): array{
        return $this->bonusCaratteristiche;
        
    }

    
}
class ElfoDeiBoschi implements Razza {
    private $nomeRazza = 'Elfo dei boschi';
    private $bonusCaratteristiche = [
        'strength' => 0,
        "dexterity" => 2,
        "constitution" => 0,
        "intelligence" => 0,
        "wisdom" => 1,
        "charisma" =>0   
    ];
    public function getNomeRazza():string{
        return $this->nomeRazza;
    }
    public function getBonusCaratteristiche(): array{
        return $this->bonusCaratteristiche;
        
    }

    
}
class Halfling implements Razza {
    private $nomeRazza = 'Halfling';
    private $bonusCaratteristiche = [
        'strength' => 0,
        "dexterity" => 2,
        "constitution" => 0,
        "intelligence" => 0,
        "wisdom" => 0,
        "charisma" =>0   
    ];
    public function getNomeRazza():string{
        return $this->nomeRazza;
    }
    public function getBonusCaratteristiche(): array{
        return $this->bonusCaratteristiche;
        
    }

    
}
class HalflingPiedilesto implements Razza {
    private $nomeRazza = 'Halfling piedilesto';
    private $bonusCaratteristiche = [
        'strength' => 0,
        "dexterity" => 2,
        "constitution" => 0,
        "intelligence" => 0,
        "wisdom" => 0,
        "charisma" =>1   
    ];
    public function getNomeRazza():string{
        return $this->nomeRazza;
    }
    public function getBonusCaratteristiche(): array{
        return $this->bonusCaratteristiche;
        
    }

    
}
class HalflingTozzo implements Razza {
    private $nomeRazza = 'Halfling tozzo';
    private $bonusCaratteristiche = [
        'strength' => 0,
        "dexterity" => 2,
        "constitution" => 0,
        "intelligence" => 0,
        "wisdom" => 0,
        "charisma" =>0   
    ];
    public function getNomeRazza():string{
        return $this->nomeRazza;
    }
    public function getBonusCaratteristiche(): array{
        return $this->bonusCaratteristiche;
        
    }

    
}


class Nano implements Razza {
    private $nomeRazza = 'Nano';
    private $bonusCaratteristiche = [
        'strength' => 0,
        "dexterity" => 0,
        "constitution" => 2,
        "intelligence" => 0,
        "wisdom" => 0,
        "charisma" =>0   
    ];
    public function getNomeRazza():string{
        return $this->nomeRazza;
    }
    public function getBonusCaratteristiche(): array{
        return $this->bonusCaratteristiche;
        
    }

    
}

class NanoDelleColline implements Razza {
    private $nomeRazza = 'Nano delle colline';
    private $bonusCaratteristiche = [
        'strength' => 2,
        "dexterity" => 0,
        "constitution" => 0,
        "intelligence" => 0,
        "wisdom" => 1,
        "charisma" =>0   
    ];
    public function getNomeRazza():string{
        return $this->nomeRazza;
    }
    public function getBonusCaratteristiche(): array{
        return $this->bonusCaratteristiche;
        
    }

    
}

class NanoDelleMontagne implements Razza {
    private $nomeRazza = 'Nano delle montagne';
    private $bonusCaratteristiche = [
        'strength' => 0,
        "dexterity" => 2,
        "constitution" => 0,
        "intelligence" => 0,
        "wisdom" => 0,
        "charisma" =>0   
    ];
    public function getNomeRazza():string{
        return $this->nomeRazza;
    }
    public function getBonusCaratteristiche(): array{
        return $this->bonusCaratteristiche;
        
    }

    
}

class Umano implements Razza {
    private $nomeRazza = 'Umano';
    private $bonusCaratteristiche = [
        'strength' => 1,
        "dexterity" => 1,
        "constitution" => 1,
        "intelligence" => 1,
        "wisdom" => 1,
        "charisma" =>1   
    ];
    public function getNomeRazza():string{
        return $this->nomeRazza;
    }
    public function getBonusCaratteristiche(): array{
        return $this->bonusCaratteristiche;
        
    }

    
}

class Dragonide implements Razza {
    private $nomeRazza = 'Dragonide';
    private $bonusCaratteristiche = [
        'strength' => 2,
        "dexterity" => 0,
        "constitution" => 0,
        "intelligence" => 0,
        "wisdom" => 0,
        "charisma" =>1   
    ];
    public function getNomeRazza():string{
        return $this->nomeRazza;
    }
    public function getBonusCaratteristiche(): array{
        return $this->bonusCaratteristiche;
        
    }

    
}

class Gnomo implements Razza {
    private $nomeRazza = 'Gnomo';
    private $bonusCaratteristiche = [
        'strength' => 0,
        "dexterity" => 0,
        "constitution" => 0,
        "intelligence" => 2,
        "wisdom" => 0,
        "charisma" =>0   
    ];
    public function getNomeRazza():string{
        return $this->nomeRazza;
    }
    public function getBonusCaratteristiche(): array{
        return $this->bonusCaratteristiche;
        
    }

    
}

class GnomoDelleForeste implements Razza {
    private $nomeRazza = 'Gnomo Delle Foreste';
    private $bonusCaratteristiche = [
        'strength' => 0,
        "dexterity" => 1,
        "constitution" => 0,
        "intelligence" => 2,
        "wisdom" => 0,
        "charisma" =>0   
    ];
    public function getNomeRazza():string{
        return $this->nomeRazza;
    }
    public function getBonusCaratteristiche(): array{
        return $this->bonusCaratteristiche;
        
    }

    
}

class GnomoDelleRocce implements Razza {
    private $nomeRazza = 'Gnomo delle rocce';
    private $bonusCaratteristiche = [
        'strength' => 0,
        "dexterity" => 0,
        "constitution" => 1,
        "intelligence" => 2,
        "wisdom" => 0,
        "charisma" =>0   
    ];
    public function getNomeRazza():string{
        return $this->nomeRazza;
    }
    public function getBonusCaratteristiche(): array{
        return $this->bonusCaratteristiche;
        
    }

    
}

class Mezzelfo implements Razza {
    private $nomeRazza = 'Mezzelfo';
    private $bonusCaratteristiche = [
        'strength' => 0,
        "dexterity" => 2,
        "constitution" => 0,
        "intelligence" => 0,
        "wisdom" => 0,
        "charisma" =>0   
    ];
    public function getNomeRazza():string{
        return $this->nomeRazza;
    }
    public function getBonusCaratteristiche(): array{
        return $this->bonusCaratteristiche;
        
    }

    
}

class Mezzorco implements Razza {
    private $nomeRazza = 'Mezzorco';
    private $bonusCaratteristiche = [
        'strength' => 2,
        "dexterity" => 0,
        "constitution" => 1,
        "intelligence" => 0,
        "wisdom" => 0,
        "charisma" =>0   
    ];
    public function getNomeRazza():string{
        return $this->nomeRazza;
    }
    public function getBonusCaratteristiche(): array{
        return $this->bonusCaratteristiche;
        
    }

    
}

class Tiefling implements Razza {
    private $nomeRazza = 'Tiefling';
    private $bonusCaratteristiche = [
        'strength' => 0,
        "dexterity" => 1,
        "constitution" => 0,
        "intelligence" => 0,
        "wisdom" => 0,
        "charisma" =>2   
    ];
    public function getNomeRazza():string{
        return $this->nomeRazza;
    }
    public function getBonusCaratteristiche(): array{
        return $this->bonusCaratteristiche;
        
    }

    
}
?>