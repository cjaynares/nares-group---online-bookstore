<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);


    if ($username == $_SESSION['username'] && $password == $_SESSION['password']) {
        $_SESSION['loggedin'] = true;
        header("Location: ../index.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Online Bookstore</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
        <form action="login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
