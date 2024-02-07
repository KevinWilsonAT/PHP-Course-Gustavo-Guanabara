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
        $vl = isset($_GET["vl"]) ? $_GET["vl"] : "Não recebeu o valor";
        $i = 1;
        $r = 0;

        echo "<h4>Multiplication chart of number $vl</h4>";
        do{
            $r = $vl * $i;
            echo "$vl x $i = $r<br>";
            $i++;
        }while ($i <= 10);

        echo"<br><a href='aula12c-exercicio3-estrutura-repeticao-do-while.html'>Voltar</a>"
    ?>
</div>
</body>
</html>