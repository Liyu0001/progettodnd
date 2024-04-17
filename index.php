
<!DOCTYPE html>
<?php require 'includes.php'; ?>    
<html lang="en">        

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="fogliDiStile/index.css">
    <title>Discesa nel Dungeon</title>
</head>
<body>

<?php 

session_start();
if(isset($_GET["personaggio_creato"]) && $_GET["personaggio_creato"] == 1) {
    echo "Personaggio creato!";
    $giocatore = $_SESSION['giocatore'];
    $x = new scontro();
    $x->combattimento($giocatore, new Personaggio('Melanzana', 20, 10, $umano));  

} else { echo "
<div class='banner'>
        <h1>FantasticAdventures</h1>
        <p>Entra nel mondo fantastico e scopri nuove avventure.</p>
  </div>
  <div class='intro'>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Id rem nesciunt incidunt at tempore unde, ducimus excepturi asperiores! Accusantium totam blanditiis obcaecati consectetur harum atque quis aut facere 
        id Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus labore nostrum assumenda similique eaque nihil eum quasi atque ducimus, eos,
        obcaecati voluptates? Veritatis hic nemo sequi similique optio. Voluptates, velit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil repudiandae
        possimus iure incidunt minus eveniet, placeat et itaque explicabo adipisci sunt ab architecto dolores fugit eos dignissimos? Expedita, corrupti saepe. Lorem 
        ipsum dolor sit amet, consectetur adipisicing elit. Sit quia ipsum perferendis laudantium facilis eius illum, modi consequuntur? Vel quae esse officia iure odio
        unde incidunt ad assumenda quas aliquid? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque quaerat dolor repellendus id voluptate eum sint maxime,
         magni repudiandae nemo doloremque earum nisi ex ipsum, laborum animi in dolore quis! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores qui doloribus quas?
        Voluptatum harum minus beatae soluta laboriosam adipisci asperiores enim, autem a. Itaque deleniti reiciendis voluptatibus omnis at vero?</p>
    <button class='btn' id='adventure-start' onclick=''>Rispondi al tizio</button>
   </div>
";}
?>

<script>
    document.getElementById("adventure-start").onclick = () => {
        location.href = "CreazioneDelPersonaggio.php";
    };
    
</script>



</body>
</html>



