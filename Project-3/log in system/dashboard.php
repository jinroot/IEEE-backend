
<?php
include_once("check_login.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.dashboard.css" />
    <title>Login Form</title>
    <style></style>
</head>
<body>
    <div class="top-banner">
        <img src="logo/logo.jpg" alt="Logo">
        <form method="POST" action="logout.php">
            <button type="submit" name="logout">Logout</button>
        </form>
    </div>
    <div class="center">
    <div class="center-h1">
        <h1>Welcome, <?php echo $_SESSION['user_name']; ?>!</h1>
    </div>
    <div class="button-container">
        <form method="POST" action="add-product.php">
        <button class="button" type="submit" name="add-product">Add product</button>
        </form>
        <form method="POST" action="delete-product.php">
            <button class="button" type="submit" name="delete-product">Delete product</button>
        </form>
        <form method="POST" action="edit-product.php">
            <button class="button" type="submit" name="edit-product">Edit product</button>
        </form>
        <form method="POST" action="get-product.php">
            <button class="button" type="submit" name="get-product">Get product</button>
        </form>
    </div>
    </div>
</body>
</html>
