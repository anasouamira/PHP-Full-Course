<!DOCTYPE html>
<html>
<head>
    <title>PHP User-Defined Functions</title>
</head>
<body>

<h1>User-Defined Functions in PHP</h1>

<?php
// ----------------------------------------
// 1. Function without parameters
// ----------------------------------------
function greet() {
    echo "Hello! Welcome to PHP functions.<br>";
}

echo "<h2>1. Function Without Parameters</h2>";
greet(); // Call the function

// ----------------------------------------
// 2. Function with parameters
// ----------------------------------------
function add($a, $b) {
    $sum = $a + $b;
    echo "Sum of $a and $b is: $sum<br>";
}

echo "<h2>2. Function With Parameters</h2>";
add(5, 10);
add(20, 15);

// ----------------------------------------
// 3. Function with return value
// ----------------------------------------
function multiply($x, $y) {
    return $x * $y;
}

echo "<h2>3. Function With Return Value</h2>";
$result = multiply(4, 6);
echo "Multiplication result: $result<br>";

// ----------------------------------------
// 4. Function with default parameter
// ----------------------------------------
function welcome($name = "Guest") {
    echo "Welcome, $name!<br>";
}

echo "<h2>4. Function With Default Parameter</h2>";
welcome("Ali");
welcome();

// ----------------------------------------
// 5. Function using an array
// ----------------------------------------
function showColors($colors) {
    foreach ($colors as $color) {
        echo "Color: $color<br>";
    }
}

echo "<h2>5. Function Using an Array</h2>";
$myColors = ["Red", "Green", "Blue"];
showColors($myColors);
?>

</body>
</html>
