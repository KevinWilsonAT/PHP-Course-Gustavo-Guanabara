<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas em PHP (Parte 2)</title>
</head>
<body>
<div>
    <?php
        echo "<h2>Routines (Part 2)</h2>";

        echo "<h4>Passage by value</h4>";

        echo 'function test($x){<br>';
        echo '&nbsp; &nbsp; $x = $x + 2;<br>';
        echo '&nbsp; &nbsp; echo $x;<br>';
        echo '}<br><br>';

        echo '$a = 3<br>';
        echo 'test($a); &nbsp; &nbsp; // Note that the value of $a is used to fill the request of the function test()<br>';
        echo 'echo $a; &nbsp; &nbsp; // The value displayed still the original, you only passed the value of $a<br>';

        echo "<h4>Passage by reference</h4>";

        echo 'function test(&$x){ &nbsp; &nbsp; // Note that the reference of $a is used to fill the request of the function test()<br>';
        echo '&nbsp; &nbsp; $x = $x + 2;<br>';
        echo '&nbsp; &nbsp; echo $x;<br>';
        echo '}<br><br>';

        echo '$a = 3<br>';
        echo 'test($a);<br>';
        echo 'echo $a; &nbsp; &nbsp; // The value displayed was changed, because you passed the reference of $a<br>';
    ?>
</div>
</body>
</html>