<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis de varáveis PHP</title>
</head>
<body>
<div>
    <?php
        echo "<br><h2>Variables of Variables</h2><br>";

        echo '$site = "cursoemvideo"; => $site receives the string "cursoemvideo".<br>';
        echo '$$site = "cursoPHP"; => is created a variable named with the content of $site and receives
              the string "cursoPHP".<br>';
        echo 'echo "$site"; => echo displays $site value (cursoemvideo).<br>';
        echo 'echo "$$site"; => echo displays the value (cursoPHP) of the variable named with the content of $site
              (cursoemvideo).<br><br>';

        $site = "cursoemvideo";
        $$site = "cursoPHP";
        echo $site.'<br>';
        echo $$site;
    ?>
</div>
</body>
</html>