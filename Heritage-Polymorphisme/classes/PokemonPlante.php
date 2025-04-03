<?php
require_once "classes/Pokemon.php";
class PokemonPlante extends Pokemon{
    public function attack(Pokemon $p){
        $damage=mt_rand($this->attack->attackMinimal,$this->attack->attackMaximal);
        if (mt_rand(1,100)<=$this->attack->probabilitySpecialAttack){
            $damage *= ($this->attack->specialAttack);
        }
        if($p instanceof PokemonEau){
            $damage *= 2;
        }
        else if($p instanceof PokemonFeu || $p instanceof PokemonPlante){
            $damage = round(0.5 * $damage);
        }
        $oldHp=$p->getHp();
        $p->setHp($oldHp-$damage);
    }
}
?>