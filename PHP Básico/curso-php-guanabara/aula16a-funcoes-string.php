<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP (Parte 1)</title>
</head>
<body>
<div>
    <?php
        $prod = "milk";
        $price = 4.5;

        //echo "The $prod is costing R$$price".number_format($price, 2); - Using echo to format the price
        printf("The %s is costing R$%.2f", $prod, $price); // - Using printf to format the price

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $v[0] = 4;
        $v[1] = 8;
        $v[2] = 3;

        print_r($v);

        echo "<br><br>";

        $v2 = array(3,7,6,2,1,9);

        print_r($v2);

        echo "<br><br>";

        $v3[0] = 4;
        $v3[1] = 8;
        $v3[2] = 3;

        var_dump($v3);

        echo "<br><br>";

        $v4 = array(3,7,6,2,1,9);

        var_export($v4);

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $txt = "extremely long text ...........................";
        $res = wordwrap($txt, 20, "<br>");
        echo($res);

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $txt2 = "curso em video";
        $size = strlen($txt2);
        echo($size);

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $name = "   José da Silva   ";
        echo(strlen($name)).'<br>';
        $new = trim($name);
        echo($new);
        echo(strlen($new));

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $name = "   José da Silva   ";
        echo(strlen($name)).'<br>';
        $new = ltrim($name);
        echo($new).'<br>';
        echo(strlen($new));

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $name = "   José da Silva   ";
        echo(strlen($name)).'<br>';
        $new = rtrim($name);
        echo($new).'<br>';
        echo(strlen($new));

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $text = "I will study PHP";
        $count = str_word_count($text, 0);
        echo($count);

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $text = "I will study PHP";
        $vector = explode(" ", $text);
        print_r($vector);

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $name = "Peter";
        $vector = str_split($name);
        print_r($vector);

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $vector2[0] = "I";
        $vector2[1] = "will";
        $vector2[2] = "study";
        $vector2[3] = "PHP";
        $text = implode(" ", $vector2);
        print($text);

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $letter = chr(67);
        echo $letter;

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $letter = "C";
        $code = ord($letter);
        echo $code;
     ?>
</div>
</body>
</html>