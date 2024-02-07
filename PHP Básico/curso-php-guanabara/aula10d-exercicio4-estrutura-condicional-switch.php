<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Condicional Switch - Exercício 4 (Parte PHP)</title>
</head>
<body>
<div>
    <?php
        $state = isset($_GET["state"]) ? $_GET["state"] : "Acre";

        switch ($state){
            case 1:
            case 3:
            case 4:
            case 14:
            case 22:
            case 23:
            case 27:
                echo "You live in region North.";
                break;
            case 2:
            case 5:
            case 6:
            case 10:
            case 15:
            case 17:
            case 18:
            case 20:
            case 26:
                echo "You live in region Northeast.";
                break;
            case 7:
            case 9:
            case 11:
            case 12:
                echo "You live in region Center-west.";
                break;
            case 8:
            case 13:
            case 19:
            case 25:
                echo "You live in region Southeast.";
                break;
            case 16:
            case 21:
            case 24:
                echo "You live in region South.";
                break;
        }

        echo"<br><a href='aula10d-exercicio4-estrutura-condicional-switch.html'>Voltar</a>"
    ?>
</div>
</body>
</html>