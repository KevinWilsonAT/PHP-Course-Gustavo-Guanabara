<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Condicional Switch - Exercício 1 (Parte PHP)</title>
</head>
<body>
<div>
    <?php
        $n = isset($_GET["num"]) ? $_GET["num"] : 0;
        $o = isset($_GET["op"]) ? $_GET["op"] : 1;

        switch ($o){
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = ($n*$n)*$n;
                break;
            case 3:
                $r = sqrt($n);
        }

        echo "The result of the called operation is $r.<br>";
        echo"<a href='aula10a-exercicio1-estrutura-condicional-switch.html'>Voltar</a>"
    ?>
</div>
</body>
</html>