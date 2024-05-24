<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);


    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['loggedin'] = true;

    header("Location:../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Online Bookstore</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>Sign Up</h2>
        <form action="signup.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>
