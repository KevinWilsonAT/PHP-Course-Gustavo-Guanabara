<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Condicional Switch em PHP</title>
</head>
<body>
<div>
    <?php
        echo "<h2>Switch Conditional Structure</h2><br>";

        echo 'switch($op){<br>';
        echo '&nbsp; &nbsp;case 1:<br>';
        echo '&nbsp; &nbsp; &nbsp; echo "A";<br>';
        echo '&nbsp; &nbsp; &nbsp; break;<br>';
        echo '&nbsp; &nbsp;case 2:<br>';
        echo '&nbsp; &nbsp; &nbsp; echo "B";<br>';
        echo '&nbsp; &nbsp; &nbsp; break;<br>';
        echo '&nbsp; &nbsp;default:<br>';
        echo '&nbsp; &nbsp; &nbsp; echo "Error";<br>';
        echo '}<br><br>';
    ?>
</div>
</body>
</html>