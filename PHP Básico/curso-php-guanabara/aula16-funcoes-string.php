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
        echo "<h2>String Functions (Part 1)</h2>";

        echo "<h4>1 - printf( ) Function</h4>";

        echo '$prod = "milk";<br>';
        echo '$price = 4.5;<br><br>';
        echo 'printf("The %s is costing R$%.2f", $prod, $price);<br><br>';

        echo 'Acceptable parameters:<br><br>';

        echo '%d = decimal value (positive or negative)<br>';
        echo '%d = decimal value without sign (only positive)<br>';
        echo '%f = real value (with decimals)<br>';
        echo '%s = string<br>';

        echo "<h4>2 - print_r( ) Function</h4>";

        echo '$x[0] = 4;<br>';
        echo '$x[1] = 3;<br>';
        echo '$x[2] = 8;<br><br>';

        echo 'print_r($x);<br>';

        echo "<h4>3 - wordwrap( ) Function</h4>";

        echo '$txt = "extremely long text ...........................";<br>';
        echo '$res = "wordwrap($txt, "<\br>\n", false); - // the boolean value defines if the line break will be by word (false) or by word letters (true)<br>';
        echo 'echo($res);<br>';

        echo "<h4>4 - strlen( ) Function</h4>";

        echo '$txt = "curso em video";<br>';
        echo '$size = strlen($txt); - // this will count the number of characters (including spaces) and will return the value to $size<br>';
        echo 'echo($res);<br>';

        echo "<h4>5 - trim( ) Function</h4>";

        echo '$name = "   José da Silva   ";<br>';
        echo 'echo(strlen($name));<br>';
        echo '$new = trim($name); - // this will remove the excessive spaces before and after the name<br>';
        echo 'echo($new);<br><br>';
        echo 'echo(strlen($new));<br><br>';

        echo "<h4>6 - ltrim( ) Function</h4>";

        echo '$name = "   José da Silva   ";<br>';
        echo 'echo(strlen($name));<br>';
        echo '$new = ltrim($name); - // this will remove the excessive spaces before after the name<br>';
        echo 'echo($new);<br><br>';
        echo 'echo(strlen($new));<br>';

        echo "<h4>7 - rtrim( ) Function</h4>";

        echo '$name = "   José da Silva   ";<br>';
        echo 'echo(strlen($name));<br>';
        echo '$new = rtrim($name); - // this will remove the excessive spaces after the name<br>';
        echo 'echo($new);<br><br>';
        echo 'echo(strlen($new));<br>';

        echo "<h4>8 - str_word_count( ) Function</h4>";

        echo '$text = "I will study PHP";<br>';
        echo '$count = str_word_count($text, 0); - // this will count the number of words in the string<br>';
        echo 'echo($count); - // the number of word in $text is 4<br>';

        echo "<h4>9 - explode( ) Function</h4>";

        echo '$text = "I will study PHP";<br>';
        echo '$vector = explode(" ", $text); - // this will count the number of words in the string until he reaches the separation character<br>';
        echo 'print_r($vector); - // the word position inside the array $vector and the word inside each of those positions<br>';

        echo "<h4>10 - str_split( ) Function</h4>";

        echo '$name = "Peter";<br>';
        echo '$vector = str_split($name);<br>';
        echo 'print_r($vector); - // the character position inside the array $vector and the character inside each of those positions<br>';

        echo "<h4>11 - implode( ) Function</h4>";

        echo '$vector[0] = "I";<br>';
        echo '$vector[1] = "will";<br>';
        echo '$vector[2] = "study";<br>';
        echo '$vector[3] = "PHP";<br>';
        echo '$text = implode(" ", $vector); - // this will join all the words using the separation character to separate them<br>';
        echo 'print($text); - // the text made using the implode function<br>';

        echo "<h4>12 - chr( ) Function</h4>";

        echo '$letter = chr(67)<br>';
        echo 'echo $letter; - // Display the character code associated to the number 67 (C)<br>';

        echo "<h4>13 - ord( ) Function</h4>";

        echo '$letter = "C";<br>';
        echo '$code = ord($letter);<br>';
        echo 'echo $cod; - // Display the code number associated to the character (67)<br>';
     ?>
</div>
</body>
</html>