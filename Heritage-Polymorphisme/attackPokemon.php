<?php
class attackPokemon{
    public function __construct(
        public int $attackMinimal,
        public int $attackMaximal,
        public int $specialAttack,
        public int $probabilitySpecialAttack
    )
    {}

}


?>