<?php
require_once 'UserManager.php';

if (!isset($_GET['id'])) {
    echo "❌ No user selected.";
    exit;
}

$id = $_GET['id'];

$userManager = new UserManager("localhost", "root", "", "test_db");
$users = $userManager->getAllUsers();
$user = null;

foreach ($users as $u) {
    if ($u['id'] == $id) {
        $user = $u;
        break;
    }
}

if (!$user) {
    echo "❌ User not found.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h2>Edit User</h2>
<form action="update-user.php" method="post">
    <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">

    <label>Name:</label><br>
    <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required><br><br>

    <input type="submit" value="Update User">
</form>

</body>
</html>
