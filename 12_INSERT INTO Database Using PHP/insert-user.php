<?php
// Check if the request is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST["name"];
    $Email = $_POST["name"];




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
        $query = "INSERT INTO users (name, email) VALUES (?, ?);";

        $stmt = $pdo->prepare($query);

        // Execute insertion
        $stmt->execute([$Name,$Email]);

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
