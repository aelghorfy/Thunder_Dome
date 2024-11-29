<?php
include ("autoLoader.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // take form from character 1 creation 
    $name1 = htmlspecialchars($_POST['name1']);
    $race1 = $_POST['race1'];
    $weapon1 = $_POST['weapon1'];

    // take form from character 2 creation 
    $name2 = htmlspecialchars($_POST['name2']);
    $race2 = $_POST['race2'];
    $weapon2 = $_POST['weapon2'];

    // Create Character 1
    if ($race1 === 'elf') {
        $character1 = new elf($name1);
    } elseif ($race1 === 'dwarf') {
        $character1 = new dwarf($name1);
    }

    if ($weapon1 === 'bow') {
        $character1->bow();
    } elseif ($weapon1 === 'axe') {
        $character1->axe();
    }

    // Create Character 2
    if ($race2 === 'elf') {
        $character2 = new elf($name2);
    } elseif ($race2 === 'dwarf') {
        $character2 = new dwarf($name2);
    }

    if ($weapon2 === 'bow') {
        $character2->bow();
    } elseif ($weapon2 === 'axe') {
        $character2->axe();
    }

    // Display both characters
    echo "<h2>Character 1</h2>";
    echo "Name: " . $character1->getName() . "<br>" .
        "Race: " . $race1 . "<br>" .
         "HP: " . $character1->getHp() . "+ (" . $character1->getShield() . ") Shield<br>" .
         "Stamina: " . $character1->getStamina() . "<br>" .
         "Strength: " . $character1->getStrength() . "<br>" .
         "Status: " . ($character1->getStatut() ? 'Alive' : 'Dead') . "<br>" .
         "Weapon: " . $character1->getWeaponName() . ' (+'. $character2->getWeaponStrength().')'. "<br><br>";

    echo "<h2>Character 2</h2>";
    echo "Name: " . $character2->getName() . "<br>" .
         "Race: " . $race2 . "<br>" .
         "HP: " . $character2->getHp() . "+ (" . $character2->getShield() . ") Shield<br>" .
         "Stamina: " . $character2->getStamina() . "<br>" .
         "Strength: " . $character2->getStrength() . "<br>" .
         "Status: " . ($character2->getStatut() ? 'Alive' : 'Dead') . "<br>" .
         "Weapon: " . $character2->getWeaponName() . ' (+'. $character2->getWeaponStrength().')'."<br><br>";
}
?>
