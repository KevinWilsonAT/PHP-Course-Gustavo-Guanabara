<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Operadores Atribuição PHP</title>
</head>
<body>
<div>
    <?php
        echo "Exercise 1:<br><br>";
        echo "Apply 10% discount at a product price.<br><br>";

        $product = 100;
        echo "The Product price is R$". number_format($product,2,',','.').".<br>";
        $product = $product - ($product*10/100); // Can be reduced to $product -= $product*10/100;

        echo "The product price will be R$". number_format($product,2,',','.')
        .". Applying 10% discount.<br>";

        $product = 100;
        $product = $product + ($product*10/100); // Can be reduced to $product += $product*10/100;

        echo "The product price will be R$". number_format($product,2,',','.')
        .". Applying the 10% over the product.<br>";
    ?>
</div>
</body>
</html>