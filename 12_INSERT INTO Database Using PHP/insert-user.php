<?php
// Check if the request is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Database connection settings
    $host = 'localhost';
    $dbname = 'test_db';
    $username = 'root';
    $password = '';

        if (empty($name) || empty($email)) {
        echo "<p style='color:red;'>Missing required fields!</p>";
        echo "<p><a href='add-user.html'>Go back to the form</a></p>";
        exit();
        }
        

    try {
        // Connect using PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare and bind data
        $query = "INSERT INTO users (name, email) VALUES (:name, :email);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":email",$email);

        // Execute insertion
        $stmt->execute();

        echo "✅ User added successfully!<br>";
        echo "<a href='add-user.html'>Add another user</a>";

        $pdo = null;
        $stmt = null;
        exit();
    } catch (PDOException $e) {
        echo "❌ Error: " . $e->getMessage();
    }
} else {
    // If not a POST request
    echo "❌ Invalid request method. Please submit the form.";
}
?>
