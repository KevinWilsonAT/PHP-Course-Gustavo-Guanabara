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
        $ln = $vl + 1;
        $tot = 0;

        for ($c = 1; $c <= $ln; $c++){
            if ($vl % $c == 0){
                $tot += 1;
                echo "<b><u>$c</u></b> ";
            }
            else{
                echo "$c ";
            }
        }

        echo "<br><br>The number $vl is divisible $tot times.<br><br>";

        if ($tot == 2){
            echo "Then the number <b>IS A PRIME NUMBER</b><br>";
        }
        else{
            echo "Then the number <b>IS NOT A PRIME NUMBER</b><br>";
        }

        echo"<br><a href='aula13c-exercicio3-estrutura-repeticao-for.html'>Voltar</a>"
    ?>
</div>
</body>
</html>