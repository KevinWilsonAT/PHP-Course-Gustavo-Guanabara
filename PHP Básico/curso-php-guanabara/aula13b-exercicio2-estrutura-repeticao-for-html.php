<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Repetição For - Exercício 2 (Parte HTML)</title>
</head>
<body>
<div>
    <form method="get" action="aula13b-exercicio2-estrutura-repeticao-for-php.php">
        Value to multiply: <select name="vl" id="ivl">
            <?php
                for ($i = 1; $i <= 10; $i++){
                    echo"<option value='$i'>$i</option>";
                }
            ?>
        </select><br>
        <input type="submit" value="Calculate">
    </form>
</div>
</body>
</html>