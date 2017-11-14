 <?php include ('server.php');
if  (!isset($_SESSION['username'])) {
header('Location: login.php');
}
include '../backend/userdata.php';
include('../backend/updatephp.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update details</title>
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
    <?php include ('errors.php');
    include('success.php');
     ?>
      <form action="" method="POST">
        <label>First Name</label>
        <input type="text" class="customform" name="newfirstname" value=<?php echo $firstname; ?> > <br>
        <label>Last Name</label>
        <input type="text" class="customform" name="newlastname" value=<?php echo $lastname; ?> > <br>
        <label>Email</label>
          <input type="email" name="newemail" class="customform" value=<?php echo $email; ?>  > <br>
          <!-- <input type="password" name="password_1" class="customform" placeholder="h"> <br> -->


          <a href="changePassword.php" class='btn'>change password</a>
          <button type="submit" name="update" class="btn">save changes</button>
          <a href="delete.php" class="btn2">delete account</a>
      </form>
      <div class="col span_6_of_12 sidething">"Dear <strong><?php echo $firstname; ?></strong>, at the moment, you cannot change your username. We regret any inconveniences. How ever, our Developer <strong><a href="https://www.facebook.com/antony.makombora">@makenduru</a></strong> is working on it now." <p><br><i class="gratitude">~Place_Holders Team</i></p> <br></div>
</center>


</html>
