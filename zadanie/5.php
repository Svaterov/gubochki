<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$firstNumber = 9; 
$secondNumber = 3;

if ($firstNumber % 3 === 0 && $secondNumber % 3 === 0) {
    $result = $firstNumber + $secondNumber;
    echo "Сумма: $result";
} elseif ($secondNumber !== 0) {
    $result = $firstNumber / $secondNumber;
    echo "Результат деления: $result";
} else {
    echo "Некорректный ввод: второе число равно нулю.";
}
?>
</body>
</html>