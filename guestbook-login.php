<?php
session_start();


if (isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}


if (isset($_POST['submit'])) {
    $username = $_POST['username'];

    
    $_SESSION['username'] = $username;

   
    header('Location: index.php');
    exit();
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form method="post">
        <p>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
        </p>
        <p>
            <button type="submit" name="submit">Login</button>
        </p>
    </form>
</body>
</html>