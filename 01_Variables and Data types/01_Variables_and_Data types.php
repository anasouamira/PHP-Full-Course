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

// 5. Array - Collection of values
$colors = array("Red", "Green", "Blue");
echo "<h3>Array:</h3>";
foreach ($colors as $color) {
    echo "$color<br>";
}

// 6. Associative Array - Key-value pairs
$person = array("name" => "Alice", "age" => 30, "city" => "Paris");
echo "<h3>Associative Array:</h3>";
echo "Name: " . $person["name"] . "<br>";
echo "Age: " . $person["age"] . "<br>";
echo "City: " . $person["city"] . "<br>";

// 7. NULL - Empty variable
$nothing = NULL;
echo "<h3>NULL:</h3>";
var_dump($nothing); // Shows type and value
echo "<br>";

// 8. Object - Instance of a class
class Car {
    public $brand;
    public function __construct($brand) {
        $this->brand = $brand;
    }
    public function getBrand() {
        return $this->brand;
    }
}
$myCar = new Car("Toyota");
echo "<h3>Object:</h3>";
echo "Car Brand: " . $myCar->getBrand() . "<br>";

// 9. Resource - Special variable (e.g., database or file handle)
echo "<h3>Resource:</h3>";
$file = fopen("dummy.txt", "w"); // Creating a temporary file
if ($file) {
    echo "File handle created (resource).<br>";
    fclose($file);
} else {
    echo "Could not create file.<br>";
}
?>

</body>
</html>
