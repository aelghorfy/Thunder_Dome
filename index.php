<?php

include ("./autoloader.php");

$myCharacter = new elf("test",100,100,100,true);
echo "Character name :" . $myCharacter -> getName() . "<br>".
"Hp : " . $myCharacter -> gethp() . "<br>".
"Stamina : " . $myCharacter -> getStamina() . "<br>".
"Statut : " .$myCharacter -> getStatut();
