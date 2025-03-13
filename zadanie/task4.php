<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$month = 2;  
$year = 2023; 

$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);


echo "Количество дней в месяце $month/$year: $daysInMonth";
?>
</body>
</html>