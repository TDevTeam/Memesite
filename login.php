<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Dose of Memes - login</title>
    <link rel="icon" type="x/icon" href="images/sanic.png">
    <link rel="stylesheet" href="styles2.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="main-heading-div">
        <h1>Daily Dose of Memes</h1>
    </div>
    <div class="form-div">
    <form method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input class="button-submit" name="login" type="submit" value="Log in">
    </form>
    </div>
</body>
</html>

<?php
$redirect = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username) || empty($password)) {
        echo '<div class="mark-div"><mark class="error">Please fill out both username and password fields.</mark></div>';
        $redirect = false;
    } else {
        $redirect = true;
    }
}

// Redirect only if the flag is true
if ($redirect) {
    header("Location: index.php");
    exit();
}
?>
