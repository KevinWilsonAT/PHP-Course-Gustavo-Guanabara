<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Repetição Do While - Exercício 2 (Parte PHP)</title>
</head>
<body>
<div>
    <?php
        $i = 1;
        do{

            echo "Value $i: <input type='number' name='v'.'$i' min='0' max='100' value='$i'><br>";
            $i++;
        }while ($i <= 5);

        echo"<br><a href='aula12b-exercicio2-estrutura-repeticao-do-while.html'>Voltar</a>"
    ?>
</div>
</body>
</html>