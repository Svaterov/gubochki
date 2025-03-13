<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$firstVariable = 10;  
$secondVariable = 5;   


if ($secondVariable != 0) { 
    if ($firstVariable % $secondVariable == 0) {
        echo "$firstVariable кратно $secondVariable";
    } else {
        echo "$firstVariable не кратно $secondVariable";
    }
} else {
    echo "Ошибка: деление на ноль.";
}
?>
</body>
</html>