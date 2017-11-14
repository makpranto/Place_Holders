<?php
include('server.php');
include('../backend/registration.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="../Css/number2.css">
    <link rel="stylesheet" href="../Css/sign.css">
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/munya.css">
  <link rel="icon" type="image/png" href="../images/logo.png">
</head>
<center>
    <ul class='navba'>
      <li>Create An Account</li>
    </ul>
  </center>

<center>
  <div class="subgroupion">
    <h1>
      Bullydog
    </h1>
  </div>
</center>

<body>
  <div  class='header'>
    <h2>Register</h2>
  </div>
        <center>
          <?php include ('errors.php') ?>
          <?php include('success.php') ?>
            <form action="" method="POST">
              <label>First Name</label>
              <input type="text" class="customform" name="firstname" value=<?php echo $firstname; ?> > <br>
              <label>Last Name</label>
              <input type="text" class="customform" name="lastname" value=<?php echo $lastname; ?> > <br>
              <label>Username</label>
              <input type="text" class="customform" name="username" value=<?php echo $username; ?> > <br>
              <label>Email</label>
                <input type="email" name="email" class="customform" value=<?php echo $email; ?>  > <br>
                <input type="password" name="password_1" class="customform" placeholder="Password"> <br>
                <input type="password" name="password_2" class="customform" placeholder="Confirm Password"> <br>
                <a href="login.php" class='btn'>login</a>
                <button type="submit" name="register" class="btn">register</button>

            </form>


  <div class="subgroupion">
    <h1>
               .
    </h1>
  </div>
</center>
<?php include '../basics/footer.php'; ?>
</body>
</html>
