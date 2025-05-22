<?php
require_once 'UserManager.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $userManager = new UserManager("localhost", "root", "", "test_db");
    $userManager->deleteUser($id);
} else {
    echo "❌ No user ID provided.";
}
?>
