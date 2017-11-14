<?php
include ('server.php') ;
if  (!isset($_SESSION['username'])) {
header('Location: login.php');
}
include('../backend/changepassword.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
		<link rel="stylesheet" href="../Css/number2.css">
		<link rel="stylesheet" href="../Css/sign.css">
		<link rel="stylesheet" href="../Css/style.css">
		<link rel="stylesheet" href="../Css/munya.css">
      <link rel="icon" type="image/png" href="../images/logo.png">
</head>
<ul class='navba'>
  <li><a href="index.php" class="btn"> Home</a></li>

</ul>
<center>
    <form action="" method="POST"  >
      <?php include("errors.php"); ?>
      <?php include('success.php'); ?>
      <input type="password" name="oldpassword" class="customform" placeholder="Old password"> <br>
        <input type="password" name="newpassword" class="customform" placeholder="New Password"> <br>
        <input type="password" name="confirmpassword" class="customform" placeholder="Confirm Password"> <br>
        <button type="submit"  class="btn2" name="changepassword">save changes</button>
    </form>
</center>
  <?php include('../basics/footer.php'); ?>
</html>
