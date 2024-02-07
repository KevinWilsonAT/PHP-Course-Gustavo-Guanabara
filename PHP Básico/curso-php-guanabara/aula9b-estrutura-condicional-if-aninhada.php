<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Condicional If Aninhada em PHP</title>
</head>
<body>
<div>
    <?php
        echo "<h2>If-else Conditional Structure</h2><br>";

        echo 'if($age < 16){<br>';
        echo '&nbsp; &nbsp; &nbsp;$vote = "Can'."'".'t vote";<br>';
        echo '}<br>';
        echo 'else {<br>';
        echo '&nbsp; &nbsp; &nbsp;if($age >= 16 && $age < 18){<br>';
        echo '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $vote = "Optional vote";<br>';
        echo '&nbsp; &nbsp; &nbsp;}<br>';
        echo '&nbsp; &nbsp; &nbsp;else {<br>';
        echo '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $vote = "Obligatory vote"<br>';
        echo '&nbsp; &nbsp; &nbsp;}<br>';
        echo '}<br><br>';
    ?>
</div>
</body>
</html>