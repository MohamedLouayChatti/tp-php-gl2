<?php 

require_once "classes/Pokemon.php";
require_once "classes/PokemonPlante.php";
require_once "classes/PokemonFeu.php";
require_once "classes/PokemonEau.php";

$attack1 = new attackPokemon(10,100,2,20);
$attack2 = new attackPokemon(30,80,4,20);
$pika= new PokemonEau("pikachu","pictures/pikachu.png",200,$attack1);
$barbasor= new PokemonFeu("barbasor","pictures/barbasor.png",200,$attack2);

echo "<div class='alert alert-info text-center' role='alert'>Comabt entre {$pika->getNom()} et {$barbasor->getNom()}</div>";

$round=1;

echo "<div class='row text-center'>
{$pika->whoAmI()}
{$barbasor->whoAmI()}
 </div><hr>";
while (!$pika->isDead() && !$barbasor->isDead()){
    $pika->attack($barbasor);
    $barbasor->attack($pika);

    echo "<div class='alert alert-danger text-center mt-4'>Round {$round}
          <div class='row text-center'>
          <div class='col'>
              <div class='badge bg-light'>{$pika->getDamage()} Damage </div>
          </div>
          <div class='col'>
              <div class='badge bg-light'>{$barbasor->getDamage()} Damage </div>
          </div>
          </div>
      </div>
      <hr>";

    echo "<div class='row text-center'>
    {$pika->whoAmI()}
    {$barbasor->whoAmI()}
     </div><hr>";

    $round++;
}
if ($pika->isDead()){
    echo "<div class='alert alert-success text-center'>Le vainqueur est : {$barbasor->getNom()} <img src='{$barbasor->getURL()}' width='100'></div>";
}
else{
    echo "<div class='alert alert-success text-center'>Le vainqueur est : {$pika->getNom()} <img src='{$pika->getURL()}' width='100'></div>";
}

?>
