<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Repetição Do While - Exercício 2a (Parte PHP)</title>
</head>
<body>
<div>
    <?php
        $vl = isset($_GET["vl"]) ? $_GET["vl"] : 1;
        $count = $vl;
        $fact = 1;

        echo "<h4>Calculating factorial of $vl</h4>";

        do{
            $fact = $fact * $count;
            $count--;
        }while ($count >= 1);

        echo "$vl! = $fact<br>";
        echo"<br><a href='aula12ba-exercicio2a-estrutura-repeticao-do-while.html'>Voltar</a>"
    ?>
</div>
</body>
</html>