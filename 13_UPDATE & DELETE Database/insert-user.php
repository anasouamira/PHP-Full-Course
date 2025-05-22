<?php
require_once 'UserManager.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name  = $_POST["name"];
    $email = $_POST["email"];

    $userManager = new UserManager("localhost", "root", "", "test_db");
    $userManager->addUser($name, $email);
} else {
    echo "❌ Invalid request.";
}
?>
