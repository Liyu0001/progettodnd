<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="fogliDiStile/stili.css">
    
    <title>Crea Personaggio</title>
</head>
<body>
    
    <form action= "crea_personaggio.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        
        <label for="razza">Razza:</label>
        <select id="razza" name="razza">
            
            <?php foreach ($razze as $index => $razza): ?>
                <option value="<?php echo $index; ?>"><?php echo $razza->getNomeRazza(); ?></option>
            <?php endforeach; ?>
        </select><br><br>        
        

<label for="strength">Forza (min 8, max 15):</label>
<input type="number" id="strength" name="stats[strength]" min="8" max="15" required><br><br>

<label for="dexterity">Destrezza (min 8, max 15):</label>
<input type="number" id="dexterity" name="stats[dexterity]" min="8" max="15" required><br><br>

<label for="constitution">Costituzione (min 8, max 15):</label>
<input type="number" id="constitution" name="stats[constitution]" min="8" max="15" required><br><br>

<label for="intelligence">Intelligenza (min 8, max 15):</label>
<input type="number" id="intelligence" name="stats[intelligence]" min="8" max="15" required><br><br>

<label for="wisdom">Saggezza (min 8, max 15):</label>
<input type="number" id="wisdom" name="stats[wisdom]" min="8" max="15" required><br><br>

<label for="charisma">Carisma (min 8, max 15):</label>
<input type="number" id="charisma" name="stats[charisma]" min="8" max="15" required><br><br>

<input type="hidden" id="totale_punti" name="totale_punti" value="72">

<input type="submit" value="Crea Personaggio" onclick="return controllaPunti();">
</form>


<script>
function controllaPunti() {
    var totalePunti = 72;
    var sommaPunti = 0;
    var caratteristiche = document.querySelectorAll('input[type="number"]');
    
    caratteristiche.forEach(function(caratteristica) {
        sommaPunti += parseInt(caratteristica.value);
    });
    
    if (sommaPunti !== totalePunti) {
        alert("Devi distribuire esattamente 25 punti tra le caratteristiche!");
        return false;
    }

    return true;
}
</script>       
    
</body>
</html>
