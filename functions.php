<?php 
require __DIR__ . '/usersdb.php';

/**
 * 
 * 
 *Login function to validate username and password
 * 
 */

function login($username, $password, $users) {
    foreach ( $users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            return true;
        }
    }
    return false;
}

?>