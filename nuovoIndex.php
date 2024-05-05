
<!DOCTYPE html>
<?php require 'includes.php'; ?>    
<html lang="en">        
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="fogliDiStile/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Benvenuto Avventuriero!</title>
</head>
<body>
    <form action ="registrazione.php" method = "post">
        <h2> Registrati</h2>
        <label for ="email">Email</label>
        <input type ="email" name ="email" id = "email" required>

        <label for ="username">Username</label>
        <input type ="text" name ="username" id = "username" required>

        <label for ="password">Password</label>
        <input type ="password" name ="password" id = "password" required>
        <input type ="submit" value="invia">
        <p>Sei già registrato?<a href="login/paginaLogin.php">Accedi</a></p>        
    </form>   

<div class='banner'>
        <h1>FantasticAdventures</h1>

        <p>Entra nel mondo fantastico e scopri nuove avventure.</p>
        <button class='btn' id='crea-personaggio' onclick=''>crea il tuo personaggio</button>
        <button class='btn' id='crea-personaggio' onclick=''>chi siamo!</button>  
        <button class='btn' id='crea-personaggio' onclick=''>lorem</button>  
        <button class='btn' id='crea-personaggio' onclick=''>altra cosa a caso</button>         
        
</div>
<div class='intro'>
    <p> AAA Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Id rem nesciunt incidunt at tempore unde, ducimus excepturi asperiores! Accusantium totam blanditiis obcaecati consectetur harum atque quis aut facere 
        id Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus labore nostrum assumenda similique eaque nihil eum quasi atque ducimus, eos,
        obcaecati voluptates? Veritatis hic nemo sequi similique optio. Voluptates, velit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil repudiandae
        possimus iure incidunt minus eveniet, placeat et itaque explicabo adipisci sunt ab architecto dolores fugit eos dignissimos? Expedita, corrupti saepe. Lorem 
        ipsum dolor sit amet, consectetur adipisicing elit. Sit quia ipsum perferendis laudantium facilis eius illum, modi consequuntur? Vel quae esse officia iure odio
        unde incidunt ad assumenda quas aliquid? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque quaerat dolor repellendus id voluptate eum sint maxime,
         magni repudiandae nemo doloremque earum nisi ex ipsum, laborum animi in dolore quis! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores qui doloribus quas?
        Voluptatum harum minus beatae soluta laboriosam adipisci asperiores enim, autem a. Itaque deleniti reiciendis voluptatibus omnis at vero?</p>
    <button class='btn' id='adventure-start' onclick=''>Comincia l'avventura!</button>
    
</div>




<script>
    document.getElementById("adventure-start").onclick = () => {
        location.href = "CreazioneDelPersonaggio.php";
    };
    
</script>
<?php if(isset($_GET["personaggio_creato"]) && $_GET["personaggio_creato"] == 2) {
    echo "hai sconfitto la temibile melanzana, dimostrando di essere un vero eroe di poter vivere tante bellissime avventure!";
}?>
<button class='btn' id='crea-personaggio' onclick=""></button>



</html>



