<?php
require_once 'User.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST["name"];
    $email    = $_POST["email"];
    $password = $_POST["password"];

    $user = new User("localhost", "root", "", "oop_signup");
    $result = $user->register($name, $email, $password);

    echo "<p>$result</p>";
    echo "<a href='signup.html'>Go back</a>";
} else {
    echo "❌ Invalid request.";
}
?>
