<?php
class User {
    private $conn;

    // Connect to database on object creation
    public function __construct($host, $user, $pass, $dbname) {
        $this->conn = new mysqli($host, $user, $pass, $dbname);
        if ($this->conn->connect_error) {
            die("❌ Connection failed: " . $this->conn->connect_error);
        }
    }

    // Register new user
    public function register($name, $email, $password) {
        // Check if email already exists
        $check = $this->conn->prepare("SELECT id FROM users WHERE email = ?");
        $check->bind_param("s", $email);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            return "❌ Email already registered!";
        }

        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user
        $stmt = $this->conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $hashed_password);

        if ($stmt->execute()) {
            return "✅ Registration successful!";
        } else {
            return "❌ Registration failed: " . $stmt->error;
        }
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>
