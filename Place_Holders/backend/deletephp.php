<?php

include('userdata.php');
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
    $username = $_SESSION['username'];
    $sd = $db->query("DELETE FROM `users` WHERE `username`='$usermane'");
    if($sd){
      header('location: logout.php');
    }
  }
}
 ?>
