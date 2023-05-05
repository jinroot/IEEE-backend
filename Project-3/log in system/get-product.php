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
    $options .= "<option value='" . $row['id'] . "'>" . $row['product_name'] . "</option>";
}

// Initialize variables for the selected product and its price
$selected_product = "";
$product_price = "";

// Handle form submission
if (isset($_POST['get_price'])) {

    // Get the ID of the selected product
    $selected_product_id = $_POST['product'];

    // Query the database for the price of the selected product
    $query = "SELECT product_price FROM products WHERE id = :product_id";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':product_id', $selected_product_id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Set the product price variable
    $product_price = $row['product_price'];

    // Get the name of the selected product
    $query = "SELECT product_name FROM products WHERE id = :product_id";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':product_id', $selected_product_id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Set the selected product variable
    $selected_product = $row['product_name'];

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.dashboard.css" />
    <title>Get Product Price</title>
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
    <h1>Get Product Price</h1>
    <form method="POST">
        <label for="product">Product:</label>
        <select name="product" id="product">
            <?php echo $options; ?>
        </select>
        <br>
        <button type="submit" name="get_price">Get Price</button>
        <br>
        <br>
        <?php
        // Display the selected product and its price
        if (!empty($selected_product) && !empty($product_price)) {
            echo "<label>Price of $selected_product: $product_price</label>";
        }
        ?>
        <br>
        <?php
        if (isset($_POST['go-back'])) {
            header('Location: dashboard.php');
        }
        ?>
    </form>

</div>
</body>
</html>
