<?php
session_start();


if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $logged_in = true;
} else {
    $logged_in = false;
}


if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit();
}


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];

   
    $file = fopen('guestbook.txt', 'a');
    fwrite($file, "$name: $message\n");
    fclose($file);
}


$guestbook = file('guestbook.txt');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Guestbook</title>
</head>
<body>
    <h1>Guestbook</h1>

    <?php if ($logged_in): ?>
        <p>Welcome, <?php echo $username ?>! <a href="index.php?logout">Logout</a></p>
    <?php else: ?>
        <p><a href="login.php">Login</a> to leave a message.</p>
    <?php endif; ?>

    <?php if (count($guestbook) > 0): ?>
        <ul>
            <?php foreach ($guestbook as $entry): ?>
                <li><?php echo $entry ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No messages yet.</p>
    <?php endif; ?>

    <?php if ($logged_in): ?>
        <form method="post">
            <p>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $username ?>" readonly>
            </p>
            <p>
                <label for="message">Message:</label>
                <textarea id="message" name="message"></textarea>
            </p>
            <p>
                <button type="submit" name="submit">Submit</button>
            </p>
        </form>
    <?php endif; ?>
</body>
</html>
