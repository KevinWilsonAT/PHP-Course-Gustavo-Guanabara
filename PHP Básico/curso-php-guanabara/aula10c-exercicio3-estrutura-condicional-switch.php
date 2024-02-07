<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Condicional Switch - Exercício 3 (Parte PHP)</title>
</head>
<body>
<div>
    <?php
        $d = isset($_GET["wd"]) ? $_GET["wd"] : 0;

        switch ($d){
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "It's study time.";
                break;
            case 7:
            case 8:
                echo "Take a rest, lad.";
                break;
            default:
                echo "Invalid day number";
        }

        echo"<br><a href='aula10c-exercicio3-estrutura-condicional-switch.html'>Voltar</a>"
    ?>
</div>
</body>
</html>