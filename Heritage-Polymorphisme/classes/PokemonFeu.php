<?php
require_once "classes/Pokemon.php";
class PokemonFeu extends Pokemon{
    public function attack(Pokemon $p){
        $this->damage=mt_rand($this->attack->attackMinimal,$this->attack->attackMaximal);
        if (mt_rand(1,100)<=$this->attack->probabilitySpecialAttack){
            $this->damage *= ($this->attack->specialAttack);
        }
        if($p instanceof PokemonPlante){
            $this->damage *= 2;
        }
        else if($p instanceof PokemonFeu || $p instanceof PokemonEau){
            $this->damage = round(0.5 * $this->damage);
        }
        $oldHp=$p->getHp();
        $p->setHp($oldHp-$this->damage);
    }
}
?>