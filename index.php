<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>THUNDER DOME</title>
</head>
<body>
    <h1>Create Your Characters</h1>
    <form method="POST" action="./index2.php">
        <fieldset>
            <legend>Character 1</legend>
            <label for="name1">Name:</label>
            <input type="text" id="name1" name="name1" required><br>
            <!-- dropdown for race (character1)-->
            <label for="race1">Choose a Race:</label>
            <select id="race1" name="race1">
                <option value="elf">Elf</option>
                <option value="dwarf">Dwarf</option>
            </select><br>
             <!-- dropdown for weapon (character1)-->
            <label for="weapon1">Choose a Weapon:</label>
            <select id="weapon1" name="weapon1">
                <option value="bow">Bow</option>
                <option value="axe">Axe</option>
            </select><br>
              <!-- dropdown for class (character1)-->
            <label for="class2">Choose a Class:</label>
            <select id="class2" name="class2">
                <option value="ranger">Ranger</option>
                <option value="warrior">Warrior</option>
                <option value="mage">Mage</option>
                <option value="necromancer">Necromancer</option>
                <option value="rogue">Rogue</option>
                <option value="priest">Priest</option>
            </select><br>
        </fieldset>

        <fieldset>
            <legend>Character 2</legend>
            <label for="name2">Name:</label>
            <input type="text" id="name2" name="name2" required><br>
            <!-- dropdown for race (character2)-->
            <label for="race2">Choose a Race:</label>
            <select id="race2" name="race2">
                <option value="dwarf">Dwarf</option>
                <option value="elf">Elf</option>
            </select><br>
            <!-- dropdown for weapon (character2)-->
            <label for="weapon2">Choose a Weapon:</label>
            <select id="weapon2" name="weapon2">
                <option value="axe">Axe</option>
                <option value="bow">Bow</option>
            </select><br>
            <!-- dropdown for class (character2)-->
            <label for="class2">Choose a Class:</label>
            <select id="class2" name="class2">
                <option value="warrior">Warrior</option>
                <option value="ranger">Ranger</option>
                <option value="mage">Mage</option>
                <option value="necromancer">Necromancer</option>
                <option value="rogue">Rogue</option>
                <option value="priest">Priest</option>
            </select><br>
        </fieldset>

        <button type="submit">Create Characters</button>
    </form>
</body>
</html>




