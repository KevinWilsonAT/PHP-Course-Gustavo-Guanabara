<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Repetição While - Exercício 3 (Parte PHP)</title>
</head>
<body>
<div>
    <?php

    $sv = isset($_GET["sv"]) ? $_GET["sv"] : 1;
    $fv = isset($_GET["fv"]) ? $_GET["fv"] : 1;
    $iv = isset($_GET["iv"]) ? $_GET["iv"] : 1;

    if ($sv > $fv){
        while ($sv >= $fv){
            echo "$sv ";
            $sv -= $iv;
        }
    }
    else{
        while ($sv <= $fv){
            echo "$sv ";
            $sv += $iv;
        }
    }

        echo"<br><a href='aula11c-exercicio3-estrutura-repeticao-while.html'>Voltar</a>"
    ?>
</div>
</body>
</html>