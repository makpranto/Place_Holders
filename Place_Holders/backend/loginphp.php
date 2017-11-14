<?php
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password_1'];

    // ensure that all fields are not empty
      if (empty($username)) {
        array_push($errors, "Invalid username!");
    }
    if (empty($password)) {
        array_push($errors, "verify your details!");
}


if (count($errors) == 0) {
    $password=sha1(md5($db->real_escape_string(htmlentities($_POST['password_1']))));
    $username=($db->real_escape_string(htmlentities($_POST['username'])));
  $query = ("SELECT * FROM users WHERE username='$username' AND password='$password'");
  $result=mysqli_query($db, $query);
if (mysqli_num_rows($result)==1){
    $_SESSION['username'] = $username;
    header('location: index.php');
  }else{
  array_push($errors, "Verify your details");
}

}
}

 ?>
