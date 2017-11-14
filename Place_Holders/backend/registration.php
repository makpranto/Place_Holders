<?php
if (isset($_POST['register'])) {
  $firstname= $_POST['firstname'];
  $lastname= $_POST['lastname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password_1=$_POST['password_1'];
  $password_2=$_POST['password_2'];


    // ensure that all fileds are not empty
    if (empty($firstname)) {
        array_push($errors, "provide first name");
    }
    if (empty($lastname)) {
        array_push($errors, "provide last name");
    }

    if (empty($username)) {
        array_push($errors, "provide username");
    }
    if (empty($email))  {
        array_push($errors, "provide email");
    }
    if (empty($password_1))  {
        array_push($errors, "provide password");
    }
    $check1 = preg_match('@[A-Z]@', $password_1);
    $check2 = preg_match('@[a-z]@', $password_1);
    $check3 = preg_match('@[0-9]@', $password_1);

    if(!$check1 || !$check2 || !$check3 || strlen($password_1)<7){
      array_push($errors, "Your password must have a capital letter, number and must be longer than 7 characters");
    }


    $query = "SELECT * FROM users WHERE username='$username'";
    $result=mysqli_query($db, $query);
  if (mysqli_num_rows($result)!=0){
    array_push($errors, "Username already taken");
  }
  $query = "SELECT * FROM users WHERE email='$email'";
  $result=mysqli_query($db, $query);
if (mysqli_num_rows($result)!=0){
  array_push($errors, "Email already taken");
}
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }
    //if errors are none, add user to the db
    if (count($errors) == 0) {
      $password=sha1(md5($db->real_escape_string(htmlentities($_POST['password_1']))));
      $datejoined = time();
        $sql = "INSERT INTO users (firstname, lastname, username, email, password, datejoined)
                   VALUES ('{$firstname}','{$lastname}','{$username}', '{$email}', '{$password}', '{$datejoined}')";
        mysqli_query($db, $sql);
                  if ($sql) {
        $_SESSION['username'] = $username;
        array_push($success, "Welcome to bullydog.com");
                header('location: index.php');
      }

  }
}
 ?>
