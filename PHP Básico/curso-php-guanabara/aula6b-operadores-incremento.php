<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Incremento PHP</title>
</head>
<body>
<div>
    <?php
        echo "<br><h2>Increment / Decrement Operators List</h2><br>";

        echo 'Pre Increment:<br><br>';
        $a = null;
        $a = $a + 1;
        $a++;
        echo '$a = $a + 1;'."<br>".'$a++;<br><br>';

        echo 'Post Increment:<br><br>';
        $a = $a + 1;
        ++$a;
        echo '$a = $a + 1;'."<br>".'++$a;<br><br>';

        echo 'Pre Decrement:<br><br>';
        $a = null;
        $a = $a - 1;
        $a--;
        echo '$a = $a - 1;'."<br>".'$a--;<br><br>';

        echo 'Post Decrement:<br><br>';
        $a = $a - 1;
        --$a;
        echo '$a = $a - 1;'."<br>".'--$a;<br><br>';
    ?>
</div>
</body>
</html>