<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Repetição Do While em PHP</title>
</head>
<body>
<div>
    <?php
        echo "<h2>Do While Looping Structure</h2><br>";

        echo"<h4>Incremental Looping</h4>";

        echo '$c = 1;<br><br>';
        echo 'do{<br>';
        echo '&nbsp; &nbsp; echo $c;<br>';
        echo '&nbsp; &nbsp; $c++;<br>';
        echo '}while($c <= 10);<br><br>';

        echo"<h4>Decremental Looping</h4>";

        echo '$c = 10;<br><br>';
        echo 'do{<br>';
        echo '&nbsp; &nbsp; echo $c;<br>';
        echo '&nbsp; &nbsp; $c--;<br>';
        echo '}while($c >= 1);<br><br>';
    ?>
</div>
</body>
</html>