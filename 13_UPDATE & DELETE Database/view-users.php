<?php
require_once 'UserManager.php';

// Create instance of the user manager (MySQLi version)
$userManager = new UserManager("localhost", "root", "", "test_db");

// Get all users
$users = $userManager->getAllUsers();
?>

<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, td, th {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .actions a {
            margin-right: 8px;
        }
    </style>
</head>
<body>

<h2>User List</h2>
<a href="add-user.html">➕ Add New User</a><br><br>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= htmlspecialchars($user['id']) ?></td>
            <td><?= htmlspecialchars($user['name']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td class="actions">
                <a href="edit-user.php?id=<?= $user['id'] ?>">✏️ Edit</a>
                <a href="delete-user.php?id=<?= $user['id'] ?>" onclick="return confirm('Are you sure you want to delete this user?');">🗑️ Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
