<?php 
include("attackPokemon.php");
class Pokemon{
    public function __construct(
        protected string $nom,
        protected string $url,
        protected int $hp,
        protected attackPokemon $attack,
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

    public function attack(Pokemon $p){
        if (mt_rand(1,100)<=$this->attack->probabilitySpecialAttack){
            $damage=($this->attack->specialAttack)*(mt_rand($this->attack->attackMinimal,$this->attack->attackMaximal));
        }
        else{
            $damage=mt_rand($this->attack->attackMinimal,$this->attack->attackMaximal);
        }
        $oldHp=$p->getHp();
        $p->setHp($oldHp-$damage);
    }
    
}

?>