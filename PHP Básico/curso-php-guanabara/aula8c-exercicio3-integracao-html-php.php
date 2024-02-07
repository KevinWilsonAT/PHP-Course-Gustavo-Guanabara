<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $txt = isset($_GET["t"]) ? $_GET["t"] : "Lorem ipsum";
        $size = isset($_GET["size"]) ? $_GET["size"] : "12pt";
        $color = isset($_GET["color"]) ? $_GET["color"] : "#000000";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração HTML / PHP - Exercício 3 (Parte PHP)</title>
    <style>
        span.text{
            font-size: <?php echo $size; ?>;
            color: <?php echo $color; ?>;
        }
    </style>
</head>
<body>
<div>
    <?php
        echo "<span class='text'>$txt</span>";
    ?>
</div>
</body>
</html>