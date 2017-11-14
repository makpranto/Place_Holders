<?php
include ('server.php');
if  (isset($_SESSION['username'])) {
header('Location: index.php');
}
include('../backend/loginphp.php');
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login </title>
    <link rel="stylesheet" href="../Css/number2.css">
    <link rel="stylesheet" href="../Css/sign.css">
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/munya.css">
  <link rel="icon" type="image/png" href="../images/logo.png">
</head>
    <center>
    <ul class='navba'>
      <li>Welcome to Bullydog.com</li>
    </ul>
  </center>


<body>
    <div  class='header'>
      <h2>Login</h2>
    </div>
    <center>
     <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <input type="text" name="username" class="customform" placeholder="Username"> <br>
        <input type="password"  class="customform" name="password_1" placeholder="Password" > <br>
                <a href="register.php" class='btn'>Register</a>
                <button type="submit" name="login" class="btn">Login</button>

    </form>
    </center>
<center>
<?php include '../basics/footer.php'; ?>
</center>
</body>
</html>
