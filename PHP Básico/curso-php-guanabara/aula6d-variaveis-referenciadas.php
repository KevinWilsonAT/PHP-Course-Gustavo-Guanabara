<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis Referenciadas PHP</title>
</head>
<body>
<div>
    <?php
        echo "<br><h2>Referenced Variables</h2><br>";

        echo "Not using referenced variables:<br><br>";
        // $a = 3;
        // $b = $a;
        // $b += 5;
        // echo "$a";
        // echo "$b";

        echo '$a = 3; => $a is equal to 3.<br>';
        echo '$b = $a; => $b receives $a value.<br>';
        echo '$b += 5; => $b is summed by itself plus 5.<br>';
        echo 'echo "$a"; => echo displays $a value (3).<br>';
        echo 'echo "$b"; => echo displays $b value (8, 3 received from $a plus 5).<br>';

        echo "Using referenced variables:<br><br>";
        // $a = 3;
        // $b = &$a;
        // $b += 5;
        // echo "$a";
        // echo "$b";

        echo '$a = 3; => $a is equal to 3.<br>';
        echo '$b = &$a; => $b receives $a value, but it is referenced (linked) to $a.<br><br>';
        echo '$b += 5; => $b is summed by itself plus 5.<br>But since $b is linked to $a,
              $a is summed too by itself plus 5, like $b<br><br>';
        echo 'echo "$a"; => echo displays $a value (8, because $a and $b are linked).<br>';
        echo 'echo "$b"; => echo displays $b value (8, 3 received from $a plus 5).<br>';
    ?>
</div>
</body>
</html>