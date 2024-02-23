<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>


<body>
<?php
    //declare(strict_types=1);
    require('Dado.php');
    require('Personaggio.php');
    require('Scontro.php');
    require('classeBarbaro.php');

   
    $game = new scontro();
    $game->combattimento((new Personaggio('Fitz il drow', 60, 10)),new Barbaro('Svalosh Barbaro ringhiante', 30, 10));
?>



</body>
</html>



