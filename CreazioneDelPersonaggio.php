<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="fogliDiStile/stili.css">    
    <title>Crea Personaggio</title>
</head>
<body>    
    <form id = "form" action= "crea_personaggio.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="razza">Razza:</label>
        <select id="razza" name="razza">             
            <?php
            include_once('Razza.php');            
            foreach ($razze as $index => $razza): ?>
                <option value="<?php echo $index; ?>"><?php echo $razza->getNomeRazza(); ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="classe">Seleziona una classe: </label>
        <select id="classe" name="classe" required>
            <option value="Barbaro">Barbaro</option>
            <option value="Ladro">Ladro</option>
            
        </select><br><br>
        
        
        <p id="punti-rimanenti">Punti rimanenti: <span id="puntiRimanenti">72</span></p>                

        <label for="strength">Forza (min 8, max 15):</label>
        <input type="number" id="strength" name="stats[strength]" min="8" max="15" required oninput="controllaPunti()"><br><br>

        <label for="dexterity">Destrezza (min 8, max 15):</label>
        <input type="number" id="dexterity" name="stats[dexterity]" min="8" max="15" required oninput="controllaPunti()"><br><br>

        <label for="constitution">Costituzione (min 8, max 15):</label>
        <input type="number" id="constitution" name="stats[constitution]" min="8" max="15" required oninput="controllaPunti()"><br><br>

        <label for="intelligence">Intelligenza (min 8, max 15):</label>
        <input type="number" id="intelligence" name="stats[intelligence]" min="8" max="15" required oninput="controllaPunti()"><br><br>

        <label for="wisdom">Saggezza (min 8, max 15):</label>
        <input type="number" id="wisdom" name="stats[wisdom]" min="8" max="15" required oninput="controllaPunti()"><br><br>

        <label for="charisma">Carisma (min 8, max 15):</label>
        <input type="number" id="charisma" name="stats[charisma]" min="8" max="15" required oninput="controllaPunti()"><br><br>

        <input type="hidden" id="totale_punti" name="totale_punti" value="72">

        <input type="submit" value="Crea Personaggio">
    </form>

    <script>
        var inputNumerici = document.querySelectorAll('input[type="number"]');
        console.log(inputNumerici);        
        inputNumerici.forEach(function(input){
            input.addEventListener('input', (e) => {
                controllaPunti();
            });
        });    
        const form = document.getElementById("form");
        form.addEventListener('submit', (e) => {
            controllaPuntiSpesi(e);
        })
        function controllaPunti() {    
            var totalePunti = 72;
            var sommaPunti = 0;
            var caratteristiche = document.querySelectorAll('input[type="number"]');
        
            caratteristiche.forEach(function(caratteristica) {
                sommaPunti += parseInt(caratteristica.value || 0);

            });

            var puntiRimanenti = totalePunti - sommaPunti;            
            document.getElementById("puntiRimanenti").innerHTML = puntiRimanenti;
            return true;
        }

        function controllaPuntiSpesi(e) {            
            var puntiRimanenti = parseInt(document.getElementById("puntiRimanenti").innerHTML);
            
            if (puntiRimanenti != 0) {
                e.preventDefault();                
                if (puntiRimanenti > 0){
                alert("Hai ancora dei punti da assegnare!");                
                } else {
                alert("Hai speso troppi punti!");                
                }
            }
        }
    </script>   
</body>
</html>

    