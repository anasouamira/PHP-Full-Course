<?php
class UserManager {
    
    private $conn;

    public function __construct($host, $username, $password, $dbname) {
        // Create connection
        $this->conn = new mysqli($host, $username, $password, $dbname);

        // Check connection
        if ($this->conn->connect_error) {
            die("❌ Connection failed: " . $this->conn->connect_error);
        }
    }

    public function insertUser($name, $email) {
        if (empty($name) || empty($email)) {
            echo "<p style='color:red;'>❌ Missing required fields!</p>";
            echo "<p><a href='add-user.html'>Go back to the form</a></p>";
            return;
        }

        $stmt = $this->conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");

        if ($stmt) {
            $stmt->bind_param("ss", $name, $email);
            if ($stmt->execute()) {
                echo "✅ User added successfully!<br>";
                echo "<a href='add-user.html'>Add another user</a>";
            } else {
                echo "❌ Execution error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "❌ Statement error: " . $this->conn->error;
        }
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>
