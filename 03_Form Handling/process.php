<!DOCTYPE html>
<html>
<head>
    <title>Form Data Result</title>
</head>
<body>

<h1>Form Submission Result</h1>

<?php
// Check if form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate and sanitize input
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $language = htmlspecialchars($_POST["language"]);
    $message = htmlspecialchars($_POST["message"]);

    // Check required fields
    if (empty($name) || empty($email) || empty($language)) {
        echo "<p style='color:red;'>Missing required fields!</p>";
        echo "<p><a href='form-page.php'>Go back to the form</a></p>";
    } else {
        // Display the submitted data
        echo "<h2>Your Submitted Information:</h2>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Favorite Language: $language<br>";
        echo "Message: $message<br>";
    }

} else {
    echo "<p style='color:red;'>Invalid request method.</p>";
}
?>

</body>
</html>
