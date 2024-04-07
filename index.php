<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="fogliDiStile/stili.css">
    <title>simulatore incontro</title>
</head>


<body>
    
<?php
    require('Razza.php');
    require('Dado.php');
    require('Personaggio.php');
    require('Scontro.php');
    require('classeBarbaro.php');
    require('arma.php');
    $d20 = new  Dado(20); $d12 = new Dado(12);$d8 = new Dado(8);$d6 = new Dado(6);$d4 = new Dado(4);
    $game = new scontro();
    $game->combattimento((new Personaggio('Melanzana', 100, 10,$mezzorco)), new Barbaro('Asparago', 100, 10, $umano)); 

  
    



     

?>



</body>
</html>



