<?php


if (isset($_POST['changepassword'])) {

  $password = $_POST['oldpassword'];
  $newpassword = $_POST['newpassword'];
  $confirmpassword =$_POST['confirmpassword'];

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
   $check1 = preg_match('@[A-Z]@', $newpassword);
   $check2 = preg_match('@[a-z]@', $newpassword);
   $check3 = preg_match('@[0-9]@', $newpassword);

   if(!$check1 || !$check2 || !$check3 || strlen($newpassword)<7){
     array_push($errors, "Your password must have a capital letter, number and must be longer than 7 characters");
   }


    if (empty($newpassword)) {
        array_push($errors, "Provide a new password");
    }
    if ($newpassword != $confirmpassword) {
        array_push($errors, "The two passwords do not match");
  }
  // if ($password === $newpassword) {
  //   array_push($errors, "you cannot use your old password");
  // }
  if (count($errors) == 0) {
    $username = $_SESSION['username'];
    $sqlFetchData = $db->query("SELECT * FROM `users` WHERE `username`='$username' ");
    if($sqlFetchData->num_rows==0){
        return false;
    }else{
        while($dt = $sqlFetchData->fetch_object()){

            $username = $dt->username;
            $email = $dt->email;
    }
}
              // $newpassword = sha1(md5($newpassword));
  $newpassword = sha1(md5(($db->real_escape_string(htmlentities($_POST['newpassword'])))));
              $changePassword = "UPDATE users
               SET password='$newpassword'
                WHERE `username`='{$username}'";
              $update = $db->query($changePassword);
              // if($update){
              //             header('location: changepassword.php');
                          array_push($success, "password change has been successful!");
              }
                }
 ?>
