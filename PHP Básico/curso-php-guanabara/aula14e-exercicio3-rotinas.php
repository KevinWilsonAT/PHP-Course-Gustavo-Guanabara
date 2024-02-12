<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parâmetros dinâmicos - Exercício 3 Rotinas em PHP</title>
</head>
<body>
<div>
    <?php

        function sum(){
            $p = func_get_args();
            $tot = func_num_args();
            $s = 0;

            for($i = 0; $i < $tot; $i++){
                $s = $s + $p[$i];
            }
            return $s;
        }

        $res = sum(3,4,8,1,2);

        echo "The addition of the values is $res";
    ?>
</div>
</body>
</html>