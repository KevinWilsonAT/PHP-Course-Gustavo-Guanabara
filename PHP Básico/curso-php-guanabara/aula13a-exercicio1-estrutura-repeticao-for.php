<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Repetição For - Exercício 1</title>
</head>
<body>
<div>
    <?php
        for ($i = 1; $i <= 10; $i++){
            echo" $i";
        }
        echo "<br><br>";
        for ($i = 10; $i >= 1; $i--){
            echo" $i";
        }
        echo "<br><br>";
        for ($i = 0; $i <= 50; $i+=5){
            echo" $i";
        }
        echo "<br><br>";
        for ($i = 20; $i >= 0; $i-=2){
            echo" $i";
        }
    ?>
</div>
</body>
</html>