<?php
include __DIR__ . '/login.php';
include __DIR__ . '/functions.php';
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
        <form action="login.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button type="submit">Login</button>
    </main>
</body>
</html>