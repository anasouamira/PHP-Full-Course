<!DOCTYPE html>
<html>
<head>
    <title>PHP Variable Scopes</title>
</head>
<body>

<h1>Variable Scopes in PHP</h1>

<?php
// -----------------------------------------
// 1. Local Scope
// -----------------------------------------
echo "<h2>1. Local Scope</h2>";

function localExample() {
    $localVar = "I am local to this function.";
    echo $localVar . "<br>";
}

localExample();
// Uncommenting the next line would cause an error:
// echo $localVar; // undefined outside the function

// -----------------------------------------
// 2. Global Scope
// -----------------------------------------
echo "<h2>2. Global Scope</h2>";

$globalVar = "I am a global variable.";

function globalExample() {
    // Accessing global variable using 'global' keyword
    global $globalVar;
    echo $globalVar . "<br>";
}

globalExample();

// -----------------------------------------
// 3. Static Scope
// -----------------------------------------
echo "<h2>3. Static Scope</h2>";

function staticExample() {
    static $count = 0;
    $count++;
    echo "Function called $count time(s)<br>";
}

staticExample();
staticExample();
staticExample();

// -----------------------------------------
// 4. Function Parameters (Local Scope via Arguments)
// -----------------------------------------
echo "<h2>4. Function Parameters</h2>";

function greet($name) {
    echo "Hello, $name!<br>";
}

greet("Ali");
greet("Sara");
?>

</body>
</html>
