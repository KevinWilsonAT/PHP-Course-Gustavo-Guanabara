<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Operadores Atribuição PHP</title>
</head>
<body>
<div>
    <?php
        echo "Exercise 2:<br><br>";
        echo "Show which year was before the current year.<br><br>";

        $year = 2024;
        $year -= 1; // Other possible solutions: $year = $year - 1; // $year--; // --$year;
        echo "The year before was $year.<br>";

        $year = 2024;
        echo "The current year is $year.<br>";

        $year = 2024;
        $year += 1; // Other possible solutions: $year = $year + 1; // $year++; // ++$year;
        echo "The next year is $year. <br>";
    ?>
</div>
</body>
</html>