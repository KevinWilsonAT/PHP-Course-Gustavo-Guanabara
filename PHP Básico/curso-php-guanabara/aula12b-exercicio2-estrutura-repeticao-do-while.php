<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Repetição While - Exercício 2 (Parte PHP)</title>
</head>
<body>
<div>
    <?php
        $i = 1;
        while ($i <= 5) {

            echo "Value $i: <input type='number' name='v'.'$i' min='0' max='100' value='$i'><br>";
            $i++;
        }

        echo"<br><a href='aula11b-exercicio2-estrutura-repeticao-while.html'>Voltar</a>"
    ?>
</div>
</body>
</html>