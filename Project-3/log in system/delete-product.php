<?php

include_once("handle_psql.php");
include_once("check_login.php");
// Get the user ID from the cookies
$user_id = $_COOKIE['user_id'];

// Query the database for the list of products belonging to the user
$query = "SELECT product_name,id FROM products WHERE user_id = :user_id";
$stmt = $db->prepare($query);
$stmt->bindValue(':user_id', $user_id);
$stmt->execute();

// Generate the HTML for the drop-down menu
$options = "";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $options .= "<option value='" . $row['product_name'] . "'>" . $row['product_name'] . "</option>";
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.dashboard.css" />
    <title>Edit product</title>
    <style></style>
</head>
<body>
<div class="top-banner">
    <img src="logo/logo.jpg" alt="Logo">
    <form method="POST">
        <button type="submit" name="go-back">Back</button>
    </form>
    <form method="POST" action="logout.php">
        <button type="submit" name="logout">Logout</button>
    </form>
</div>
<div class="center"  style="text-align: center; padding-top: 20px">
    <h1>Edit Product</h1>
    <form method="POST">
        <label for="product">Product:</label>
        <select name="product" id="product">
            <?php echo $options; ?>
        </select>
        <br>
        <button type="submit" name="delete">Remove product</button>
        <?php


        // Handle form submission
        if (isset($_POST['delete'])) {

            $product_name = $_POST['product'];
            // Delete the product from the database
            $query = "DELETE FROM products WHERE user_id = :user_id AND product_name = :product_name";
            $stmt = $db->prepare($query);
            $stmt->bindValue(':user_id', $user_id);
            $stmt->bindValue(':product_name', $product_name);
            $stmt->execute();


            // Refresh the page to update the drop-down menu
            header("Refresh:0");
        }

        // Check if the form has been submitted and a new product has been added
        if (isset($_POST['submit'])) {
            echo '<p class="success">Product added successfully!</p>';
        }

        if (isset($_POST['go-back'])) {
            header('Location: dashboard.php');

        }



        ?>
    </form>

</div>
</body>
</html>
