<!DOCTYPE html>
<html>
<head>
    <title>PHP Form with Select</title>
</head>
<body>

<h1>PHP Form Handling Example</h1>

<form method="post" action="process.php">
    Name: <input type="text" name="name" ><br><br>

    Email: <input type="email" name="email"><br><br>

    Favorite Language:
    <select name="language" >
        <option value="">--Select--</option>
        <option value="PHP">PHP</option>
        <option value="JavaScript">JavaScript</option>
        <option value="Python">Python</option>
        <option value="Java">Java</option>
    </select>
    <br><br>

    Message:<br>
    <textarea name="message" rows="5" cols="40"></textarea>
    <br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
