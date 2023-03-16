<?php 
  /* 
   * Check whether user already logged in.
   * If User already logged in, keep going to process the response.
   * If not, redirect to login.php
   */   

   session_start();

  if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header("Location: login.php");
    die;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="main.css">
  <script type="text/javascript" src="app.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
    <div class="left card">
        <img src="images/free-portrait.jpg" style="width:100%">
        <h1>Your Name</h1>
        <p class="school">KAIST</p>
        <a href="#" class="fa fa-google"></a>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-youtube"></a>
        <p><button id="contact">Contact</button></p>
    </div>
    <div class="right card">
      
      <div id="private" style="visibility: hidden">
        <h2>Private Info</h1>
        <p class="category">Login information</p>
		<!-- TODO: You have to display last logged in time -->
        <p class="information">Last logged in : 
          <?php 
            echo date('Y/m/d H:i:s', $_SESSION['signin_time']); 
          ?>
        </p>
        <p class="information">Current time : <?php echo date('Y/m/d H:i:s', time()); ?></p>
      </div>
      <p><button id="unveil">Unveil</button></p>
    </div>
    <p><button id="logout" class="input-button" onclick="window.location.href='logout.php'">Logout</button></p>
  </div>
</body>
</html>




