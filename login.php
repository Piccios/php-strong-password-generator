<?php
include __DIR__ . '/functions.php';
include __DIR__ . '/usersdb.php';

session_start();

$error = '';    

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (login($username, $password, $users)) {
        $_SESSION['username'] = $username;
        header('location: ./main.php');
        exit;
    }else {
        $error = 'Wrong username or password';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-autenticathor</title>
</head>
<body>
    <header>
        <h1>Welcome</h1>
        <h4>Please authenticate your login</h4>
    </header>
    <main>
        <?php if ($error):?> 
            <p><?php echo $error; ?></p>
        <?php endif; ?>
        <form action="login.php" method="POST">
            <label for="username">Username</label>
            <input type="username" name="username" id="username">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button type="submit">Login</button>
    </main>
</body>
</html>