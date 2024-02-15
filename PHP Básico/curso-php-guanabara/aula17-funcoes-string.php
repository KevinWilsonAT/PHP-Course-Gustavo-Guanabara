<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String em PHP (Parte 2)</title>
</head>
<body>
<div>
    <?php
        echo "<h2>String Functions (Part 2)</h2>";

        echo "<h4>14 - strtolower( ) Function</h4>";

        echo '$name = "Kevin Wilson";<br>';
        echo 'print("Your name is ".strtolower($name));   - // This will display the name in lower case only (kevin wilson)<br><br>';

        echo "<h4>15 - strtoupper( ) Function</h4>";

        echo '$name = "Kevin Wilson";<br>';
        echo 'print("Your name is ".strtoupper($name));    - // This will display the name in upper case only (KEVIN WILSON)<br><br>';

        echo "<h4>16 - ucfirst( ) Function</h4>";

        echo '$name = "kevin wilson";<br>';
        echo 'print("Your name is ".ucfirst($name));     - // This will display the name with upper case only in the first character (Kevin wilson)<br><br>';

        echo "<h4>17 - ucwords( ) Function</h4>";

        echo '$name = "kevin wilson";<br>';
        echo 'print("Your name is ".ucwords($name));     - // This will display the name with upper case only in the first character of each word (Kevin Wilson)<br><br>';

        echo "<h4>18 - strrev( ) Function</h4>";

        echo '$name = "Kevin Wilson";<br>';
        echo 'print(strrev($name));     - // This will display the name backwards (nosliW niveK)<br><br>';

        echo "<h4>19 - strpos( ) Function</h4>";

        echo '$text  = "I am learning PHP";<br>';
        echo '$pos = strpos($text, "PHP"); - // This will locate the position of the string you want (Case sensitive)<br>';
        echo 'echo "The String has been found at position $pos";  - // Will display the position located (14)<br><br>';

        echo "<h4>20 - stripos( ) Function</h4>";

        echo '$text  = "I am learning PHP";<br>';
        echo '$pos = stripos($text, "php"); - // This will locate the position of the string you want and ignore case sensitivity<br>';
        echo 'echo "The String has been found at position $pos";  - // Will display the position located (14)<br><br>';

        echo "<h4>21 - substr_count( ) Function</h4>";

        echo '$text = "I am learning PHP in Curso em Video of PHP";<br>';
        echo '$count = substr_count($text, "PHP"); - // this will count the number of times the string has been found<br>';
        echo 'print("PHP has been found $count times); - // Wills display the number of times the string "PHP" appears in $text (2)<br>';

        echo "<h4>22 - substr( ) Function</h4>";

        echo '$text = "Curso em Video";<br>';
        echo '$sub = substr($text, 0, 5); - // This will select the characters from the position 0 (C) to the position 5 (o), forming "Curso" <br>';
        echo 'echo "$sub "; - // this will show the selected characters<br><br>';

        echo '$text = "Curso em Video";<br>';
        echo '$sub = substr($text, 7); - // This will select the characters after the position 7 (e) until the end of the string, forming "m Video" <br>';
        echo 'echo "$sub "; - // this will show the selected characters<br><br>';

        echo '$text = "Curso em Video";<br>';
        echo '$sub = substr($text, -5); - // This will select the last 5 characters from the end of the string, forming "Video" <br>';
        echo 'echo "$sub "; - // this will show the selected characters<br><br>';

        echo '$text = "Curso em Video";<br>';
        echo '$sub = substr($text, -5, 2); - // This will take the last characters from the end of the string and select the first two of them, forming "Vi" <br>';
        echo 'echo "$sub "; - // this will show the selected characters<br>';

        echo "<h4>23 - str_pad( ) Function</h4>";

        echo '$name = "Wilson";<br>';
        echo '$new = str_pad($name, 30, ".", STR_PAD_RIGHT); - // This will make the $name characters (Wilson) allocate inside 30 character, completing with points (.), forming "Wilson" and 24 more points (.) <br>';
        echo 'print("My teacher $new is handsome"); - // this will show $new with the points to the right<br><br>';
        echo '$name = "Wilson";<br>';
        echo '$new = str_pad($name, 30, ".", STR_PAD_BOTH); - // This will make the $name characters (Wilson) allocate inside 30 character, centering them and completing the corners with points (.), forming 12 points (.), "Wilson" and 12 more points (.) <br>';
        echo 'print("My teacher $new is handsome"); - // this will show $new in the center with the points on the corners<br><br>';
        echo '$name = "Wilson";<br>';
        echo '$new = str_pad($name, 30, ".", STR_PAD_LEFT); - // This will make the $name characters (Wilson) allocate inside 30 character, starting with points (.), forming 24 points (.) and "Wilson"<br>';
        echo 'print("My teacher $new is handsome"); - // this will show the points to the left with $name after them<br><br>';

        echo "<h4>24 - str_repeat( ) Function</h4>";

        echo '$text = str_repeat("Php", 5); - // this will make the word "Php" repeat 5 times<br>';
        echo 'print($text); - // the text made using the str_repeat function (PhpPhpPhpPhpPhp)<br>';

        echo "<h4>25 - str_replace( ) Function</h4>";

        echo '$text = "I like to study Math"<br>';
        echo '$newText = str_replace("Math", "PHP", $text); - // This will replace "Math" for "PHP" inside $text (case sensitive)<br>';
        echo 'print($newText); - // This will display "I like PHP"<br><br>';

        echo '$text = "I like to study math"<br>';
        echo '$newText = str_ireplace("Math", "PHP", $text); - // This will replace "Math" for "PHP" inside $text, ignoring case sensitivity<br>';
        echo 'print($newText); - // This will display "I like PHP"<br>';
     ?>
</div>
</body>
</html>