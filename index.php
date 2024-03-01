<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>


<body>
<?php
    require('Razza.php');
    require('Dado.php');
    require('Personaggio.php');
    require('Scontro.php');
    require('classeBarbaro.php');
    $d20 = new  Dado(20);$d12 = new Dado(12);$d8 = new Dado(8);$d6 = new Dado(6);$d4 = new Dado(4);    


   
    $game = new scontro();
    $game->combattimento((new Personaggio('Fitz il drow', 60, 10, new Elfo)), new Barbaro('Svalosh Barbaro ringhiante', 30, 10, new Umano ));
    






?>



</body>
</html>



