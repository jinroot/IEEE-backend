
<?php

//not recommended to use any of the code below as i treated the cookies as a database for keeping track of users
//i just wanted to see if i could get things to work first
include_once("handle_psql.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Find user with matching email
    $query = "SELECT * FROM public.user WHERE email = :email";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user) {
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Successful login
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['username'];
            setcookie('user_name', $user['username'], time() + 86400 * 30, '/');
            setcookie('user_password', $user['password'], time() + 86400 * 30, '/');//me dont carereeeeeee
            setcookie('user_id', $user['id'], time() + 86400 * 30, '/');
            header('Location: dashboard.php');
            exit();
        } else {
            // Incorrect password
            echo '<p>Error: Incorrect password</p>';
        }
    } else {
        // User not found
        echo '<p>Error: User not found</p>';
    }
}



