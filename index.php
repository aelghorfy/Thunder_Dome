<?php

include ("./autoloader.php");

$myElf = new elf("Elf");
echo "name : " . $myElf -> getName() . "<br>".
"Hp : " . $myElf -> gethp() . "<br>".
"Stamina : " . $myElf -> getStamina() . "<br>".
"Strenght : ". $myElf -> getStrenght() . "<br>".
"Statut : " .$myElf -> getStatut(). "<br>".
"Equiped : ". "<br><br>";

$myDwarf = new dwarf("Dwarf");
echo "name : " . $myDwarf -> getName() . "<br>".
"Hp : " . $myDwarf -> gethp() . "<br>".
"Stamina : " . $myDwarf -> getStamina() . "<br>".
"Strenght : ". $myDwarf -> getStrenght() . "<br>".
"Statut : " .$myDwarf -> getStatut(). "<br>".
"Equiped : ". "<br><br>";

$ThunderDome;
$ThunderDome = [$myElf, $myDwarf];
$firstStrike = $myDwarf->defend() - $myElf->attack();
