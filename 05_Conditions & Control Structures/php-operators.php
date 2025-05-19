<!DOCTYPE html>
<html>
<head>
    <title>PHP Conditions & Control Structures</title>
</head>
<body>

<h1>PHP Conditions & Control Structures</h1>

<?php
// Example variable
$score = 75;

// -----------------------------
// 1. if, else, elseif
// -----------------------------
echo "<h2>1. if, else, elseif</h2>";

if ($score >= 90) {
    echo "Grade: A<br>";
} elseif ($score >= 75) {
    echo "Grade: B<br>";
} elseif ($score >= 60) {
    echo "Grade: C<br>";
} else {
    echo "Grade: F<br>";
}

// -----------------------------
// 2. switch
// -----------------------------
echo "<h2>2. switch</h2>";

$day = "Tuesday";

switch ($day) {
    case "Monday":
        echo "Today is Monday<br>";
        break;
    case "Tuesday":
        echo "Today is Tuesday<br>";
        break;
    case "Wednesday":
        echo "Today is Wednesday<br>";
        break;
    default:
        echo "Unknown day<br>";
        break;
}

// -----------------------------
// 3. while loop
// -----------------------------
echo "<h2>3. while Loop</h2>";

$i = 1;
while ($i <= 5) {
    echo "Number: $i<br>";
    $i++;
}

// -----------------------------
// 4. do...while loop
// -----------------------------
echo "<h2>4. do...while Loop</h2>";

$j = 1;
do {
    echo "Value: $j<br>";
    $j++;
} while ($j <= 3);

// -----------------------------
// 5. for loop
// -----------------------------
echo "<h2>5. for Loop</h2>";

for ($k = 1; $k <= 5; $k++) {
    echo "Loop $k<br>";
}

// -----------------------------
// 6. foreach loop (arrays)
// -----------------------------
echo "<h2>6. foreach Loop</h2>";

$colors = ["Red", "Green", "Blue"];

foreach ($colors as $color) {
    echo "Color: $color<br>";
}
?>

</body>
</html>
