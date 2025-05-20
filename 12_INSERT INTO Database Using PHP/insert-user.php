<?php
// Check if the request is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection settings
    $host = 'localhost';
    $dbname = 'test_db';
    $username = 'root';
    $password = '';

    try {
        // Connect using PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare and bind data
        $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':email', $_POST['email']);

        // Execute insertion
        $stmt->execute();

        echo "✅ User added successfully!<br>";
        echo "<a href='add-user.html'>Add another user</a>";

    } catch (PDOException $e) {
        echo "❌ Error: " . $e->getMessage();
    }
} else {
    // If not a POST request
    echo "❌ Invalid request method. Please submit the form.";
}
?>
