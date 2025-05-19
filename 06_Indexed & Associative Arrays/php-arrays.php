<!DOCTYPE html>
<html>
<head>
    <title>PHP Arrays - Indexed & Associative</title>
</head>
<body>

<h1>PHP Arrays: Indexed and Associative</h1>

<?php
// -----------------------------
// 1. Indexed Array
// -----------------------------
echo "<h2>1. Indexed Array</h2>";

// Creating an indexed array
$fruits = ["Apple", "Banana", "Cherry"];

// Accessing elements by index
echo "First fruit: " . $fruits[0] . "<br>";
echo "Second fruit: " . $fruits[1] . "<br>";

// Loop through indexed array
echo "<strong>All Fruits:</strong><br>";
for ($i = 0; $i < count($fruits); $i++) {
    echo "$fruits[$i]<br>";
}

// -----------------------------
// 2. Associative Array
// -----------------------------
echo "<h2>2. Associative Array</h2>";

// Creating an associative array
$person = [
    "name" => "Ali",
    "age" => 25,
    "city" => "Cairo"
];

// Accessing elements by key
echo "Name: " . $person["name"] . "<br>";
echo "Age: " . $person["age"] . "<br>";
echo "City: " . $person["city"] . "<br>";

// Loop through associative array
echo "<strong>Person Info:</strong><br>";
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}
?>

</body>
</html>
