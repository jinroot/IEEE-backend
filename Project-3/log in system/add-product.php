<?php
include_once ("check_login.php")
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" type="text/css" href="styles.dashboard.css" />
      <title>Add product</title>
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
    <h1>Add Product</h1>
    <form method="POST">
      <label for="name">Product name</label>
      <input type="text" id="name" name="name" required>
      <br>
      <label for="price">Price</label>
      <input type="number" id="price" name="price" step="1" min="0" required>
      <br>
      <button type="submit" name="submit">Add Product</button>
        <?php

        include_once("handle_psql.php");
        $checker = false;
        // Check if the form has been submitted
        if (isset($_POST['submit'])) {
            // Get the product data from the form
            $name = $_POST['name'];
            $price = $_POST['price'];
            $user_id = $_COOKIE['user_id'];

            //check for duplicated product names
            $query = "SELECT COUNT(*) FROM products WHERE product_name = :name AND user_id = :id";
            $stmt = $db->prepare($query);
            $stmt->bindValue(':id', $user_id);
            $stmt->bindValue(':name', $name);
            $stmt->execute();
            $count = $stmt->fetchColumn();
            if ($count >= 1) {
                echo '<p>Error: A product with the same name already exists.</p>';
            } else {
                // Insert user data into database
                $query = "INSERT INTO products (product_name,product_price,user_id) VALUES (:name, :price,:id)";
                $stmt = $db->prepare($query);
                $stmt->bindValue(':id', $user_id);
                $stmt->bindValue(':name', $name);
                $stmt->bindValue(':price', $price);
                $checker = $stmt->execute();
            }
        }
        // Check if the form has been submitted and a new product has been added
        if (isset($_POST['submit']) && $checker) {
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
