<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas em PHP (Parte 2)</title>
</head>
<body>
<div>
    <?php
        echo "<h2>External Routines</h2>";

        echo '<h4>script01.php (before)</h4><br>';

        echo 'function abc(){<br>';
        echo '&nbsp; &nbsp; ...<br>';
        echo '}<br><br>';

        echo 'abc();<br>';
        echo 'cde(); &nbsp; &nbsp; &nbsp; &nbsp; // note that the function cde(); is not present inside script01.php ';
        echo '                                      but is inside functions.php, causing the script to not work<br><br>';

        echo '------------------------------------------------------------------------------------------';

        echo '<h4>functions.php</h4><br>';

        echo 'function cde(){ &nbsp; &nbsp; &nbsp; // that is the function script01.php needs<br>';
        echo '&nbsp; &nbsp; ...<br>';
        echo '}<br><br>';

        echo '------------------------------------------------------------------------------------------';

        echo '<h4>script01.php (after)</h4><br>';

        echo 'include "functions.php"; // using include command you can access functions outside the file<br><br>';

        echo 'function abc(){<br>';
        echo '&nbsp; &nbsp; ...<br>';
        echo '}<br><br>';

        echo 'abc();<br>';
        echo 'cde(); &nbsp; &nbsp; &nbsp; &nbsp; // now the function cde() works properly, because of the include command<br>';

        echo '------------------------------------------------------------------------------------------<br>';

        echo 'You can use both include and require commands.<br>';
        echo 'The main difference is that include command continue the script, regardless if the file is present or not.<br>';
        echo 'The require command stops the script if the file is not present.<br><br>';
        echo 'The include_once and require_once commands is exactly the same thing of include and require.<br>';
        echo 'The difference is that include_once and require_once includes the file only one time.<br>';
    ?>
</div>
</body>
</html>