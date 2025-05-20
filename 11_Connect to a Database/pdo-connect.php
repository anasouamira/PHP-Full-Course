<!DOCTYPE html>
<html>
<head>
    <title>PDO Database Connection</title>
</head>
<body>

<h1>Connect to MySQL Using PDO</h1>

<?php
// Database configuration
$host = 'localhost';
$dbname = 'test_db';
$username = 'root';
$password = '';

try {
    // Create PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set error reporting
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "✅ Connected to the database using PDO.<br>";

    // Example: Fetch all users
    $stmt = $pdo->query("SELECT * FROM users");

    if ($stmt->rowCount() > 0) {
        echo "<h3>Users from the database:</h3>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: {$row['id']} | Name: {$row['name']} | Email: {$row['email']}<br>";
        }
    } else {
        echo "No users found.";
    }

} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
?>

</body>
</html>
