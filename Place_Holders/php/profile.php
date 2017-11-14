<?php include ('server.php');
if  (!isset($_SESSION['username'])) {
header('Location: login.php');
}
include '../backend/userdata.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profile | <?php echo $username; ?></title>
  <link rel="stylesheet" href="../Css/number2.css">
  <link rel="stylesheet" href="../Css/sign.css">
  <link rel="stylesheet" href="../Css/style.css">
  <link rel="stylesheet" href="../Css/munya.css">
  <link rel="icon" type="image/png" href="../images/logo.png">
</head>
<center>
    <ul class='navba'>
      <li><a href="index.php" class="btn">Home</a></li>
      <li><a href="pdf.php" class="btn">PDF</a></li>
    </ul>
    </ul>
  </center>
  <div class="clearfix"></div>
<div class="bannerImageReduced">
    <div class="thebannerTextReduced">
        <center>
            <?php echo $firstname.' '.$lastname;?>
        </center>
    </div>
</div>
<div class="clearfix"></div>
<!--Body-->
<div class="section group">
    <center>
        <h1 style="font-family: 'RegMons', sans-serif; font-size: 30px; margin-top: 20px;"><img src="../images/logo.png" style="width: 30px; margin-bottom: -3px;" alt="Logo"> User details</h1>
    </center>
    <div class="col span_3_of_12 sidething">"Thank you <strong><?php echo $username; ?></strong> for the support." <p><br><i class="gratitude">~Place_Holders Team</i></p> <br></div>
    <div class="col span_6_of_12 sidething">
      <span style="font-family: 'SemiBoldSans',sans-serif">First Name : </span>
      <strong><?php echo $firstname; ?></strong>
      <hr>
      <span style="font-family: 'SemiBoldSans',sans-serif">Last Name : </span>
      <strong><?php echo $lastname; ?></strong>
      <hr>
      <span style="font-family: 'SemiBoldSans',sans-serif">Username : </span>
      <strong><?php echo $username; ?></strong>
      <hr>
            <span style="font-family: 'SemiBoldSans',sans-serif">Email Address : </span>
            <strong><?php echo $email; ?></strong>
            <hr>
      <a href="update.php" class='btn'>update</a>
              <a href="../backend/logout.php" class='btn'>logout</a>
              <a href="delete.php" class='btn2'>delete account</a>
    </div>
    <div class="col span_3_of_12"></div>
</div>
	</body>
</html>
