<!DOCTYPE html>
<html>
<head>
    <title>MySQLi Database Connection</title>
</head>
<body>

<h1>Connect to MySQL Using MySQLi</h1>

<?php
// Database configuration
$host = 'localhost';
$dbname = 'test_db';
$username = 'root';
$password = '';

// Create MySQLi connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

echo "✅ Connected to the database using MySQLi.<br>";

// Example: Fetch all users
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h3>Users from the database:</h3>";
    while ($row = $result->fetch_assoc()) {
        echo "ID: {$row['id']} | Name: {$row['name']} | Email: {$row['email']}<br>";
    }
} else {
    echo "No users found.";
}

// Close the connection
$conn->close();
?>

</body>
</html>

