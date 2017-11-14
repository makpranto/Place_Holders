<?php
include ('server.php') ;
if  (!isset($_SESSION['username'])) {
header('Location: login.php');
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Account</title>
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
      <input type="password" name="oldpassword" class="customform" placeholder="password"> <br>

      <?php
      if (isset($_POST['delete'])) {

        $password = $_POST['oldpassword'];

          // ensure that all fields have something
          if (empty($password)) {
              array_push($errors, "Old password is required");

          }

                $pass=sha1(md5($db->real_escape_string(htmlentities($_POST['oldpassword']))));
           $quer = "SELECT * FROM users WHERE password='$pass'";
           $resul=mysqli_query($db, $quer);
         if (mysqli_num_rows($resul)!==1){
           array_push($errors, "Wrong old password");
         }


        if (count($errors) == 0) {
          include('userdata.php');
          $sd = $db->query("DELETE  FROM `users` WHERE `username`='$usermane'");
          if($sd){
            header('location: ../backend/logout.php');
          }
        }
      }?>
        <button type="submit"  class="btn2" name="delete">delete account</button>
    </form>
</center>
  <?php include('../basics/footer.php'); ?>
</html>
