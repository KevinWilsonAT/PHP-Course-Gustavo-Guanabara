<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Variáveis referenciadas PHP</title>
</head>
<body>
<div>
    <?php
        echo 'Without using Referenced Variables:<br><br>';
        $a = 3;
        $b = $a;
        $b += 5;
        echo 'The $a variable value is '.$a.'<br>';
        echo 'The $b variable value is '.$b.'<br><br>';

        echo 'Using Referenced Variables:<br><br>';
        $a = 3;
        $b = &$a;
        $b += 5;
        echo 'The $a variable value is '.$a.'<br>';
        echo 'The $b variable value is '.$b;
    ?>
</div>
</body>
</html>