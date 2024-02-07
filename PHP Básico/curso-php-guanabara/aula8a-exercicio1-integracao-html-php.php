<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração HTML / PHP - Exercício 1 (Parte PHP)</title>
</head>
<body>
<div>
    <?php
        $number = $_GET["number"];
        $sqrt = sqrt($number);

        echo "The square root of $number is " . number_format($sqrt,2,',') . "<br>";
        echo "<a href='aula8a-exercicio1-integracao-html-php.html'>Voltar</a>";
    ?>
</div>
</body>
</html>