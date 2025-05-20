<!DOCTYPE html>
<html>
<head>
    <title>PHP Constants</title>
</head>
<body>

<h1>Constants in PHP</h1>

<?php
// ---------------------------------------
// 1. Define a constant using define()
// ---------------------------------------
define("SITE_NAME", "My Awesome Site");

echo "<h2>Using define()</h2>";
echo "Site Name: " . SITE_NAME . "<br>";

// ---------------------------------------
// 2. Define a constant using const
// ---------------------------------------
const COUNTRY = "Egypt";

echo "<h2>Using const</h2>";
echo "Country: " . COUNTRY . "<br>";

// ---------------------------------------
// 3. Constants are global
// ---------------------------------------
echo "<h2>Constants Are Global</h2>";

function showSiteName() {
    echo "Inside function - Site: " . SITE_NAME . "<br>";
}

showSiteName();

// ---------------------------------------
// 4. Trying to redefine will cause an error
// ---------------------------------------
// define("SITE_NAME", "Another Site"); // ❌ This will cause an error
?>

</body>
</html>
