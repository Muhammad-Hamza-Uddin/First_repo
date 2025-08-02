<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .marksheet{
            text-align: center;
            font-family: Arial, sans-serif;
        }
        div {
            background-color: #a79494ff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
<div (box) style="width:700px; height:400px; border:2px solid #333; border-radius:8px; padding:16px; box-shadow: 2px 2px 8px #aaa;">
<?php
echo "<div class='marksheet'>";
echo "<h1>Marksheet</h1>";
$name ="Hamza";
$subjects1 = 45;
$subjects2 = 50;
$subjects3 = 100;
$subjects4 = 77;
$subjects5 = 65;
$total = 500;
$obt = $subjects1 + $subjects2 + $subjects3 + $subjects4 + $subjects5;
$percentage = ($obt / $total) * 100;
$grade;
if ($percentage >= 80 && $percentage <= 100) {
    $grade = "A+";
} elseif ($percentage >= 70 && $percentage < 79) {
    $grade = "A";
} elseif ($percentage >= 60 && $percentage < 69) {
    $grade = "B";
} elseif ($percentage >= 50 && $percentage < 59) {
    $grade = "C";
} elseif ($percentage >= 40 && $percentage < 49) {
    $grade = "D";
} else {
    $grade = "F";
}
echo "<h2>Name: $name</h2>";
echo "<h3>Marks Obtained: $obt</h3>";
echo "<h3>Total Marks: $total</h3>";
echo "<h3>Percentage: $percentage%</h3>";
echo "<h3>Grade: $grade</h3>";
?>
</body>
</html>