
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
      <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Login Form</title>
    <style></style>
  </head>
  <body>
    <div class="login-form">
      <h1>Login Form</h1>
      <form method="post">
          <div class="center">
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
        <p>Don't have an account? <a href="signup-page.php">Sign up</a></p>
          <?php
          include_once('db-login.php');
          ?>
      </form>
    </div>
  </div>
  </body>
</html>
