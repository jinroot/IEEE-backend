
<?php

session_start();

$host = "localhost";
$port = "5432";
$dbname = "postgres";
$user = "postgres";
$password = "jinjin";
$db = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);//ignore the errors it works fine


// Check if username and password cookies exist
if (isset($_COOKIE['user_name']) && isset($_COOKIE['user_password'])) {
    // Check if the cookies are valid
    $user_name = $_COOKIE['user_name'];
    $user_password = $_COOKIE['user_password'];
    // Check if the username and password are valid
    $query = "SELECT * FROM public.user WHERE username = :username";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':username', $user_name);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user && !strcmp($user_password,$user['password'])) {
        // Save user data in session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['username'];
    } else {
        // Redirect to login page
        header("Location: login-page.php");
        exit();
    }

} else {
    // Redirect to login page
    header("Location: login-page.php");
    exit();
}



?>