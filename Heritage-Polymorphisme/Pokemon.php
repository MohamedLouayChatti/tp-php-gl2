<?php 
include("attackPokemon.php");
class Pokemon{
    public function __construct(
        protected string $nom,
        protected string $url,
        protected int $hp,
        protected attackPokemon $attack,
    )
    {
        
    }
    

    
}

?>