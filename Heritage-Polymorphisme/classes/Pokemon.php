<?php 
include("attackPokemon.php");
class Pokemon{
    public function __construct(
        protected string $nom,
        protected string $url,
        protected int $hp,
        protected attackPokemon $attack,
        protected int $damage=0
    )
    {}
    public function getNom(){return $this->nom;}
    public function getURL(){return $this->url;}
    public function getHp(){return $this->hp;}
    public function getAttack(){return $this->attack;}
    public function setNom(string $n){$this->nom=$n;}
    public function setURL(string $n){$this->url=$n;}
    public function setAttack(attackPokemon $n){$this->attack=$n;}
    public function setHp(int $n){$this->hp=$n;}
    public function getDamage(){
        return $this->damage;
    }

    public function attack(Pokemon $p){
        if (mt_rand(1,100)<=($this->attack->probabilitySpecialAttack)){
            $this->damage=($this->attack->specialAttack)*(mt_rand($this->attack->attackMinimal,$this->attack->attackMaximal));
        }
        else{
            $this->damage=mt_rand($this->attack->attackMinimal,$this->attack->attackMaximal);
        }
        $oldHp=$p->getHp();
        $p->setHp($oldHp-$this->damage);
    }

    public function isDead(){
        return ($this->hp<=0 );
    }
    public function whoAmI(){
        return "<div class='col'>
                <h5 class='card-title'>{$this->getNom()}</h5>
                <img src='{$this->getURL()}' width='100'>

            <ul class='list-group list-group-flush text-start mt-3'>
                <li class='list-group-item'>Points: {$this->getHP()} HP</li>
                <li class='list-group-item'>Min Attack Points: {$this->getAttack()->attackMinimal}</li>
                <li class='list-group-item'>Max Attack Points: {$this->getAttack()->attackMaximal}</li>
                <li class='list-group-item'>Special Attack: {$this->getAttack()->specialAttack}</li>
                <li class='list-group-item'>Probability Special Attack: {$this->getAttack()->probabilitySpecialAttack}%</li>
            </ul>

            </div>";
    }
    
}

?>