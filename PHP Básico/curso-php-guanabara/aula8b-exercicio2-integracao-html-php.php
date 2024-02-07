<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração HTML / PHP - Exercício 2 (Parte PHP)</title>
</head>
<body>
<div>
    <?php
        $name = $_GET["name"];
        $year = $_GET["born_year"];
        $gender = $_GET["gender"];
        $age = date("Y") - $year;

        echo "Your Name is $name<br>";
        echo "Your Birth Year is $year<br>";
        echo "You are a $gender<br>";

        echo "<a href='aula8b-exercicio2-integracao-html-php.html'>Voltar</a>";
    ?>
</div>
</body>
</html>