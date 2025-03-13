<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$firstNumber = 8;   
$secondNumber = 5; 


if ($firstNumber > $secondNumber) {
    $greaterNumber = $firstNumber;
} else {
    $greaterNumber = $secondNumber;
}


$square = $greaterNumber * $greaterNumber;


echo "Квадрат большего числа ($greaterNumber) равен $square.";
?>
</body>
</html>