<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Repetição While - Exercício 1</title>
</head>
<body>
<div>
    <?php
        echo "<h4>Incremental Looping</h4>";
        $num = 1;

        do{
            echo "$num ";
            $num++;
        } while($num <= 10);
        echo"<br>";

        echo "<h4>Decremental Looping</h4>";
        $num = 10;

        do{
            echo "$num ";
            $num--;
        } while($num >= 1);
    ?>
</div>
</body>
</html>