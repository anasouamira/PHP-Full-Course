<!DOCTYPE html>
<html>
<head>
    <title>PHP Built-in Functions</title>
</head>
<body>

<h1>PHP Internal (Built-in) Functions Examples</h1>

<?php
// -------------------------------------------
// 1. String Functions
// -------------------------------------------
echo "<h2>1. String Functions</h2>";
$text = "  Hello PHP World  ";
echo "Original text: '$text'<br>";
echo "Trimmed: '" . trim($text) . "'<br>";         // Remove whitespace
echo "Length: " . strlen($text) . "<br>";           // Get string length
echo "Uppercase: " . strtoupper($text) . "<br>";    // Convert to uppercase
echo "Replace: " . str_replace("World", "Universe", $text) . "<br>"; // Replace text

// -------------------------------------------
// 2. Number Functions
// -------------------------------------------
echo "<h2>2. Number Functions</h2>";
$num = -42.7;
echo "Number: $num<br>";
echo "Absolute: " . abs($num) . "<br>";             // Absolute value
echo "Round: " . round($num) . "<br>";              // Round to nearest integer
echo "Ceil: " . ceil($num) . "<br>";                // Round up
echo "Floor: " . floor($num) . "<br>";              // Round down

// -------------------------------------------
// 3. Array Functions
// -------------------------------------------
echo "<h2>3. Array Functions</h2>";
$arr = [5, 3, 9, 1];
echo "Original Array: ";
print_r($arr);
echo "<br>";
sort($arr); // Sort ascending
echo "Sorted Array: ";
print_r($arr);
echo "<br>";
echo "Array Length: " . count($arr) . "<br>";       // Count elements
echo "Is Array? " . (is_array($arr) ? "Yes" : "No") . "<br>"; // Check type

// -------------------------------------------
// 4. Date and Time Functions
// -------------------------------------------
echo "<h2>4. Date and Time Functions</h2>";
echo "Current Date: " . date("Y-m-d") . "<br>";     // Format: 2025-05-19
echo "Current Time: " . date("H:i:s") . "<br>";     // Format: 14:30:00

// -------------------------------------------
// 5. Miscellaneous Functions
// -------------------------------------------
echo "<h2>5. Miscellaneous Functions</h2>";
echo "Random number (1–100): " . rand(1, 100) . "<br>"; // Random number
echo "PHP Version: " . phpversion() . "<br>";           // Current PHP version
?>

</body>
</html>
