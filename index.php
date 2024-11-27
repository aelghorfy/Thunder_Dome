<?php

include ("./autoloader.php");

$myElf = new elf("Manuadrel");
echo " name :" . $myElf -> getName() . "<br>".
"Hp : " . $myElf -> gethp() . "<br>".
"Stamina : " . $myElf -> getStamina() . "<br>".
"Statut : " .$myElf -> getStatut();

$myDwarf = new dwarf("Vladiclasse");
echo " name :" . $myDwarf -> getName() . "<br>".
"Hp : " . $myDwarf -> gethp() . "<br>".
"Stamina : " . $myDwarf -> getStamina() . "<br>".
"Statut : " .$myDwarf -> getStatut();
