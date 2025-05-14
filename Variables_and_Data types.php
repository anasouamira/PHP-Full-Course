<!DOCTYPE html>
<html>
<head>
    <title>PHP Variables and Data Types</title>
</head>
<body>

<h1>PHP Variables and Data Types</h1>

<?php
// ----------------------
// PHP Variables & Types
// ----------------------

// 1. String - Text inside quotes
$name = "Alice";
echo "<h3>String:</h3>";
echo "Name: $name<br>";

// 2. Integer - Whole number
$age = 30;
echo "<h3>Integer:</h3>";
echo "Age: $age<br>";

// 3. Float/Double - Decimal number
$height = 5.7;
echo "<h3>Float:</h3>";
echo "Height: $height feet<br>";

// 4. Boolean - true or false
$isStudent = true;
echo "<h3>Boolean:</h3>";
echo "Is Student: ";
echo $isStudent ? 'true' : 'false';
echo "<br>";
?>
</body>
</html>
