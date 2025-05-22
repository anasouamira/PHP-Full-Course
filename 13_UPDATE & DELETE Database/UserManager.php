<?php
class UserManager {
    private $conn;

    // Connect to MySQL database
    public function __construct($host, $username, $password, $dbname) {
        $this->conn = new mysqli($host, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("❌ Connection failed: " . $this->conn->connect_error);
        }
    }

    // Update user by ID
    public function updateUser($id, $name, $email) {
        $stmt = $this->conn->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
        $stmt->bind_param("ssi", $name, $email, $id);

        if ($stmt->execute()) {
            header("Location: view-users.php");
            exit;
        } else {
            echo "❌ Update failed: " . $stmt->error;
        }

        $stmt->close();
    }

    // Delete user by ID
    public function deleteUser($id) {
        $stmt = $this->conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            header("Location: view-users.php");
            exit;
        } else {
            echo "❌ Delete failed: " . $stmt->error;
        }

        $stmt->close();
    }

    public function getAllUsers() {
    $sql = "SELECT * FROM users";
    $result = $this->conn->query($sql);

    $users = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }

    return $users;
    }

    public function addUser($name, $email) {
    $stmt = $this->conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);

    if ($stmt->execute()) {
        header("Location: view-users.php");
        exit;
    } else {
        echo "❌ Error adding user: " . $stmt->error;
    }

    $stmt->close();
}



    // Close DB connection
    public function __destruct() {
        $this->conn->close();
    }
}
?>
