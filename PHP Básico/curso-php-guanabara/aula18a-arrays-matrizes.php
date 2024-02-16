<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays e matrizes em PHP (Parte 1)</title>
</head>
<body>
<div>
    <pre>

    <?php
        $n1[0] = 3;
        $n1[1] = 5;
        $n1[2] = 8;
        $n1[3] = 2;
        $n1[4] = 7;

        print_r($n1);

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $n2 = array(3, 5, 8, 2);

        print_r($n2);

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $n2[] = 7;

        print_r($n2);

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $n3 = range(5,20,5);
        print_r($n3);

        echo "<br>----------------------------------------------------------------------------------------<br>";

        # $n3 = range(5,20,5);
        foreach ($n3 as $v){
            echo "$v ";
        }

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $c = array(3 => 5, 1 => 9, 0 => 8, 7 => 7);
        print_r($c);
        echo '<br>';
        $c[] = 8;
        print_r($c);
        echo '<br>';
        unset($c[8]);
        print_r($c);

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $reg = array("name" => "Ana", "age" => 23, "weight" => 78.5);
        print_r($reg);
        echo '<br><br>';
        foreach ($reg as $f => $c2) {
            echo "The field $f has the content $c2. <br>";
        }

        echo "<br>----------------------------------------------------------------------------------------<br>";

        $mx = array(array(2,3), array(3,4), array(9,5));
        print_r($mx);
        $mx[2][0] = $mx[1][1];
        print_r($mx);
     ?>
    </pre>
</div>
</body>
</html>
