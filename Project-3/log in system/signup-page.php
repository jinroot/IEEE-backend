

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
      <link rel="stylesheet" type="text/css" href="style.css" />
      <title>Sign-up Form</title>
      <style></style>
  </head>
  <body>

    <div class="signup-form">
      <h1>Sign-up Form</h1>
        <form method="post">
          <div class="center">
              <label for="username">Username:</label>
              <input type="text" id="username" name="username" required>
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
              <label for="password">Password:</label>
              <input type="password" id="password" name="password" minlength="8" required>
              <label for="confirm_password">Confirm Password:</label>
              <input type="password" id="confirm_password" name="confirm_password" minlength="8" required>
              <button type="submit">Signup</button>

        </form>
      <p>Already have an account? <a href="login-page.php">Login</a></p>
        <?php

        include_once('db-signup.php');

        ?>
    </div>
    </div>
  </body>
</html>
