<?php
require_once 'UserManager.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id    = $_POST["id"];
    $name  = $_POST["name"];
    $email = $_POST["email"];

    $userManager = new UserManager("localhost", "root", "", "test_db");
    $userManager->updateUser($id, $name, $email);
} else {
    echo "❌ Invalid request method.";
}
?>
