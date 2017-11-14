<?php include ('server.php');
if  (!isset($_SESSION['username'])) {
header('Location: login.php');
}
include('../backend/userdata.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bullydog | Home</title>
    <link rel="stylesheet" href="../Css/part1.css">
    <link rel="stylesheet" href="../Css/part2.css">
    <link rel="stylesheet" href="../Css/part3.css">
		<link rel="stylesheet" href="../Css/number2.css">
		<link rel="stylesheet" href="../Css/sign.css">
		<link rel="stylesheet" href="../Css/style.css">
</head>
<center class="center">
    <ul class='navba'>
      <li><a href="index.php" class="btn">Home</a></li>
      <li><a href="profile.php" class="btn"><?php echo $username; ?></a></li><br>
	<li><a href="../backend/logout.php" class="btn">logout</a></li>
    </ul>
  </center>

<div class="one">
  <ol>
    <li>
      <embed src="../Images/pdf.png" width="5%" height="5%">Training your Bully dog as instructed by Dr A. Makombora</embed><hr>
      <a href="../pdf/training your Bully by Antony Makombora.pdf" class="btn">Download pdf</a></li><hr>
      <li><embed src="../Images/pdf.png" width="5%" height="5%">Grooming by Dr Munyaradzi</embed><hr>
      <a href="../pdf/Grooming.pdf" class="btn">Download pdf</a></li><hr>
      <li><embed src="../Images/pdf.png" width="5%" height="5%">Food is life, even for a bullydog</embed><hr>
      <a href="../pdf/feeding.pdf" class="btn">Download pdf</a></li><hr>
      <li><embed src="../Images/pdf.png" width="5%" height="5%">Hygiene</embed><hr>
      <a href="../pdf/hygiene.pdf" class="btn">Download pdf</a></li><hr>
      <li><embed src="../Images/pdf.png" width="5%" height="5%">Types of Bully Dogs</embed><hr>
      <a href="../pdf/types.pdf" class="btn">Download pdf</a></li><hr>
      <li><embed src="../Images/pdf.png" width="5%" height="5%">General Information</embed><hr>
      <a href="../pdf/general.pdf" class="btn">Download pdf</a>
    </li><hr>
  </ol>
  </div>


	</body>
<?php include '../basics/footer.php'; ?>
</html>
