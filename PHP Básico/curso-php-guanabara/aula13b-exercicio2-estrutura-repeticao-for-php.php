<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Repetição Do While - Exercício 3 (Parte PHP)</title>
</head>
<body>
<div>
    <?php
        $vl = isset($_GET["vl"]) ? $_GET["vl"] : "Não recebeu o valor";
        $r = 0;

        echo "<h4>Multiplication chart of number $vl</h4>";
        for($i = 1; $i <= 10; $i++){
            $r = $vl * $i;
            echo "$vl x $i = $r<br>";
        }

        echo"<br><a href='aula13b-exercicio2-estrutura-repeticao-for-html.php'>Voltar</a>"
    ?>
</div>
</body>
</html>