<?php
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  session_start();

  /* 
   * Check whether user already logged in.
   * If User already logged in, redirect to profile.php only using PHP code
   */

  // receive username and password input from POST request
  $input_username = NULL;
  $input_password = NULL;

  // static login credential 
  $username = "websecurity";
  $password = "cs447";

  if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
    header("Location: profile.php");
    die;
  }

  if (isset($_POST['login_attempt']) && $_POST['login_attempt']) {
    if (isset($_POST['username']) && $_POST['username'] == $username && isset($_POST['password']) && $_POST['password'] == $password) {
      
      $input_username = $_POST['username'];
      $input_password = $_POST['password'];
      
      $_SESSION['authenticated'] = true;
      $_SESSION['signin_time'] = time();
      header("Location: profile.php");
      die;
    }
  }

  // Write your code to check given username and password from a user.
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <div class="login-panel">
      <h1 style="font-family: system-ui; color: black">Login</h1>
      <form action="login.php" method="POST">
        <p><input class="input-field" type="text" name="username" placeholder="Username" required></p>
        <p><input class="input-field" type="password" name="password" placeholder="Password" required></p>
        <input type="hidden" name="login_attempt" value="true">
        <p><input class="input-button" type="submit" value="Login"></p>
      </form>
    </div>
  </body>
</html>
