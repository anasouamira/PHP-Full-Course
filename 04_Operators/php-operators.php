<!DOCTYPE html>
<html>
<head>
    <title>PHP Operators</title>
</head>
<body>

<h1>PHP Operators Example</h1>

<?php
// Define variables
$a = 10;
$b = 5;

// -----------------------------
// 1. Arithmetic Operators
// -----------------------------
echo "<h2>1. Arithmetic Operators</h2>";
echo "$a + $b = " . ($a + $b) . "<br>"; // Addition
echo "$a - $b = " . ($a - $b) . "<br>"; // Subtraction
echo "$a * $b = " . ($a * $b) . "<br>"; // Multiplication
echo "$a / $b = " . ($a / $b) . "<br>"; // Division
echo "$a % $b = " . ($a % $b) . "<br>"; // Modulus

// -----------------------------
// 2. Assignment Operators
// -----------------------------
echo "<h2>2. Assignment Operators</h2>";
$x = 10;
echo "x = $x<br>";
$x += 5;
echo "x += 5 ➝ $x<br>";
$x -= 2;
echo "x -= 2 ➝ $x<br>";
$x *= 3;
echo "x *= 3 ➝ $x<br>";
$x /= 4;
echo "x /= 4 ➝ $x<br>";
$x %= 3;
echo "x %= 3 ➝ $x<br>";

// -----------------------------
// 3. Comparison Operators
// -----------------------------
echo "<h2>3. Comparison Operators</h2>";
echo "$a == $b ➝ " . var_export($a == $b, true) . "<br>";
echo "$a != $b ➝ " . var_export($a != $b, true) . "<br>";
echo "$a > $b ➝ " . var_export($a > $b, true) . "<br>";
echo "$a < $b ➝ " . var_export($a < $b, true) . "<br>";
echo "$a >= $b ➝ " . var_export($a >= $b, true) . "<br>";
echo "$a <= $b ➝ " . var_export($a <= $b, true) . "<br>";

// -----------------------------
// 4. Increment/Decrement Operators
// -----------------------------
echo "<h2>4. Increment / Decrement Operators</h2>";
$y = 5;
echo "y = $y<br>";
echo "y++ = " . $y++ . " (then becomes $y)<br>";
echo "++y = " . ++$y . "<br>";
echo "y-- = " . $y-- . " (then becomes $y)<br>";
echo "--y = " . --$y . "<br>";

// -----------------------------
// 5. Logical Operators
// -----------------------------
echo "<h2>5. Logical Operators</h2>";
$val1 = true;
$val2 = false;

echo "true && false ➝ " . var_export($val1 && $val2, true) . "<br>";
echo "true || false ➝ " . var_export($val1 || $val2, true) . "<br>";
echo "!true ➝ " . var_export(!$val1, true) . "<br>";

// -----------------------------
// 6. String Operators
// -----------------------------
echo "<h2>6. String Operators</h2>";
$str1 = "Hello";
$str2 = "World";

$joined = $str1 . " " . $str2; // Concatenation
echo "Concatenation: $joined<br>";

$str1 .= " PHP";
echo "After .= : $str1<br>";
?>

</body>
</html>
