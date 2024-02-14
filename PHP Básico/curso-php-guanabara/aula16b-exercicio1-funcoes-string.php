<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP (Parte 1) - Exercício 1</title>
</head>
<body>
    <div>
        <?php
            function test($x){
                $x += 2;
                echo 'The value of $x is'." $x<br>";
            }

            $a = 3;
            test($a);
            echo 'The value of $a is'." $a<br><br>";

        function test2(&$y){
            $y += 2;
            echo 'The value of $y is'." $y<br>";
        }

        $b = 3;
        test2($b);
        echo 'The value of $b is'." $b<br>";
        ?>
    </div>
</body>
</html>