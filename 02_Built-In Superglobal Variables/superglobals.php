<!DOCTYPE html>
<html>
<head>
    <title>PHP Superglobal Variables</title>
</head>
<body>

<h1>PHP Built-In Superglobal Variables</h1>

<?php
// -------------------------
// $_SERVER - Server info
// -------------------------
echo "<h2>\$_SERVER</h2>";
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "Script Name: " . $_SERVER['SCRIPT_NAME'] . "<br>";

// -----------------------------------
// $_GET and $_POST - Form data
// -----------------------------------
?>

<h2>$_GET and $_POST Example</h2>
<form method="post" action="">
    Name: <input type="text" name="username"><br>
    Age: <input type="number" name="age"><br>
    <input type="submit" value="Submit">
</form>

<?php
// Display form values if submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $age = $_POST['age'];

    echo "<h3>Form Submitted Using \$_POST</h3>";
    echo "Name: $name<br>";
    echo "Age: $age<br>";
}
?>

<?php
// -------------------------
// $_REQUEST - Combines $_GET, $_POST, $_COOKIE
// -------------------------
echo "<h2>\$_REQUEST</h2>";
if (isset($_REQUEST['username'])) {
    echo "Username from \$_REQUEST: " . $_REQUEST['username'] . "<br>";
}
?>

<?php
// -------------------------
// $_FILES - For file uploads
// -------------------------
echo "<h2>\$_FILES</h2>";
?>

<form method="post" enctype="multipart/form-data">
    Select file: <input type="file" name="myfile"><br>
    <input type="submit" value="Upload File">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['myfile'])) {
    if ($_FILES['myfile']['error'] == 0) {
        echo "File uploaded: " . $_FILES['myfile']['name'] . "<br>";
    } else {
        echo "File upload error.<br>";
    }
}
?>

<?php
// -------------------------
// $_ENV - Environment variables
// -------------------------
echo "<h2>\$_ENV</h2>";
// Set a dummy environment variable (for example)
$_ENV["ENVIRONMENT"] = "development";
echo "Environment: " . $_ENV["ENVIRONMENT"] . "<br>";

// -------------------------
// $_COOKIE and $_SESSION
// -------------------------

// Set a cookie
setcookie("user", "Alice", time() + 3600); // 1 hour
echo "<h2>\$_COOKIE</h2>";
if (isset($_COOKIE['user'])) {
    echo "User cookie: " . $_COOKIE['user'] . "<br>";
} else {
    echo "Cookie not set yet.<br>";
}

// Start session
session_start();
$_SESSION["role"] = "admin";

echo "<h2>\$_SESSION</h2>";
echo "User Role from session: " . $_SESSION["role"] . "<br>";
?>

</body>
</html>
