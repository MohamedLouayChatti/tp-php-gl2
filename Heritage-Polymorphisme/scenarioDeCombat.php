<?php 
include("Pokemon.php");

$attack1 = new attackPokemon(5,10,2,30);
$attack2 = new attackPokemon(3,7,3,60);
$pika= new Pokemon("pikachu","mezel",200,$attack1);
$barbasor= new Pokemon("barbasor","mezel",200,$attack2);

$pika->whoAmI();echo(".\n");
while (!$pika->isDead() && !$barbasor->isDead()){
    $pika->attack($barbasor);
    $barbasor->attack($pika);
    $pika->whoAmI();echo(".<br>");
    $barbasor->whoAmI();echo(".<br>");
}
if ($pika->isDead()){
    echo(" barbasor est le vainceur");
}
else{
    echo(" pika est le vainceur");
}

?>