<?php
require_once "UserManager.php";

// Only process POST requests
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = $_POST["name"] ?? '';
    $email = $_POST["email"] ?? '';

    // Create a UserManager instance
    $userManager = new UserManager("localhost", "root", "", "test_db");

    // Insert user
    $userManager->insertUser($name, $email);
} else {
    echo "❌ Invalid request method. Please submit the form.";
}
?>
