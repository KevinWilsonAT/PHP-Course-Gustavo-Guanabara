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
        $name = "Kevin Wilson";
        print("Your name is ".strtolower($name));

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $name = "Kevin Wilson";
        print("Your name is ".strtoupper($name));

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $name = "kevin wilson";
        print("Your name is ".ucfirst($name));

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $name = "kevin wilson";
        print("Your name is ".ucwords($name));

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $name = "Kevin Wilson";
        print("Your name backwards is ".strrev($name));

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $text  = "I am learning PHP";
        $pos = strpos($text, "PHP");
        echo "The String has been found at position  $pos";

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $text  = "I am learning PHP";
        $pos = stripos($text, "php");
        echo "The String has been found at position  $pos";

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $text = "I am learning PHP in Curso em Video of PHP";
        $count = substr_count($text, "PHP");
        print "PHP has been found $count times";

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $text = "Curso em Video";
        $sub = substr($text, 0, 5);
        echo "$sub ";

        echo '<br>';

        $text = "Curso em Video";
        $sub = substr($text, 7);
        echo "$sub ";

        echo '<br>';

        $text = "Curso em Video";
        $sub = substr($text, -5);
        echo "$sub ";

        echo '<br>';

        $text = "Curso em Video";
        $sub = substr($text, -5, 2);
        echo "$sub ";

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $name = "Wilson";
        $new = str_pad($name, 30, ".", STR_PAD_RIGHT);
        print("My teacher $new is handsome");

        echo '<br>';

        $name = "Wilson";
        $new = str_pad($name, 30, ".", STR_PAD_BOTH);
        print("My teacher $new is handsome");

        echo '<br>';

        $name = "Wilson";
        $new = str_pad($name, 30, ".", STR_PAD_LEFT);
        print("My teacher $new is handsome");

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $text = str_repeat("Php", 5);
        print($text);

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $text = "I like to study Math";
        $newText = str_replace("Math", "PHP", $text);
        print($text."<br>");
        print($newText);

        echo '<br><br>';

        $text = "I like to study Math";
        $newText = str_ireplace("math", "PHP", $text);
        print($text."<br>");
        print($newText);

        echo "<br>----------------------------------------------------------------------------------------<br>";
     ?>
</div>
</body>
</html>