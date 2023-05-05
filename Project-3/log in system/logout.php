<?php
if (isset($_POST['logout'])) {
    // Clear cookies
    setcookie('user_name', '', time() - 86400 * 30, '/');
    setcookie('user_password', '', time() - 86400 * 30, '/');

    // Destroy session
    session_unset();
    session_destroy();

    // Redirect to login page
    header('Location: login-page.php');
    exit();
}
