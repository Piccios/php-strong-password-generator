<?php

require __DIR__ . '/usersdb.php';
require __DIR__ . '/functions.php';

session_start();

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>

<body>
    <main>
        <h1>Welcome <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
        <h4>You are now logged in!</h4>
    </main>
    <footer>
    <a href="logout.php">Logout</a>
    </footer>
</body>

</html>