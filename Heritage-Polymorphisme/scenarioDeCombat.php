<?php 
require_once "classes/Pokemon.php";
require_once "classes/PokemonPlante.php";
require_once "classes/PokemonFeu.php";
require_once "classes/PokemonEau.php";

$attack1 = new attackPokemon(10,100,2,20);
$attack2 = new attackPokemon(30,80,4,20);
$pika= new PokemonEau("pikachu","mezel",200,$attack1);
$barbasor= new PokemonFeu("barbasor","mezel",200,$attack2);

$pika->whoAmI();
echo ".<br> <br>";
$barbasor->whoAmI();
echo ".<br> <br>";

while (!$pika->isDead() && !$barbasor->isDead()){
    $pika->attack($barbasor);
    $barbasor->attack($pika);
    $pika->whoAmI();
    echo ".<br> <br>";
    $barbasor->whoAmI();
    echo ".<br> <br>";
}
if ($pika->isDead()){
    echo(" barbasor est le vainceur");
}
else{
    echo(" pika est le vainceur");
}

?>