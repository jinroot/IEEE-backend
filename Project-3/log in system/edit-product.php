<?php

include_once("handle_psql.php");
include_once("check_login.php");

// Get the user ID from the cookies
$user_id = $_COOKIE['user_id'];

// Query the database for the list of products belonging to the user
$query = "SELECT product_name, product_price, id FROM products WHERE user_id = :user_id";
$stmt = $db->prepare($query);
$stmt->bindValue(':user_id', $user_id);
$stmt->execute();

// Generate the HTML for the drop-down menu
$options = "";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $options .= "<option value='" . $row['id'] . "'>" . $row['product_name'] . "</option>";
}

// Handle form submission
if (isset($_POST['update'])) {
    $product_id = $_POST['product'];
    $new_price = $_POST['new_price'];

    // Update the price of the product in the database
    $query = "UPDATE products SET product_price = :price WHERE id = :id";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':id', $product_id);
    $stmt->bindValue(':price', $new_price);
    $stmt->execute();

    // Refresh the page to update the drop-down menu
    header("Refresh:0");
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
        <label for="new_price">New Price:</label>
        <input type="number" name="new_price" id="new_price">
        <br>
        <button type="submit" name="update">Update Price</button>
        <?php
        // Check if the form has been submitted and the price has been updated
        if (isset($_POST['update'])) {
            echo '<p class="success">Price updated successfully!</p>';
        }

        if (isset($_POST['go-back'])) {
            header('Location: dashboard.php');

        }
        ?>
    </form>

</div>
</body>
</html>
