


<?php


include_once("handle_psql.php");

// Create a new record
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate form data
    $errors = array();
    if (empty($username)) {
        $errors[] = 'Username is required';
    }
    if (empty($email)) {
        $errors[] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format';
    }
    if (empty($password)) {
        $errors[] = 'Password is required';
    } elseif (strlen($password) < 8) {
        $errors[] = 'Password must be at least 8 characters long';
    }
    if ($password != $confirm_password) {
        $errors[] = 'Passwords do not match';
    }

    // Display errors
    if (!empty($errors)) {
        echo '<h2>Error:</h2><ul>';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '</ul>';
    } else {

        // Check for duplicate email
        $query = "SELECT COUNT(*) FROM public.user WHERE email = :email";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $count = $stmt->fetchColumn();
        if ($count >= 1) {
            // Display error message if email already exists
            echo '<p>Error:Email already exists. Please choose a different email.</p>';
        } else {
            // Insert user data into database
            $query = "INSERT INTO public.user (username, email, password) VALUES (:username, :email, :password)";
            $stmt = $db->prepare($query);
            $stmt->bindValue(':username', $username);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
            $stmt->execute();
            // Success message
            echo '<p>Success: User created successfull<br> Click here to <a href="login-page.php">Login</a></p>';
        }
    }


}

// Read all records
$sql = "SELECT * FROM public.user";
$stmt = $db->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Update a record
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE public.user SET name=?, email=?, phone=? WHERE id=?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$username, $email, $phone, $id]);
}

// Delete a record
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM public.user WHERE id=?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
}
