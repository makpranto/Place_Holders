<?php if (isset($_POST['update'])) {
  $newfirstname= $_POST['newfirstname'];
  $newlastname= $_POST['newlastname'];
  $newemail = $_POST['newemail'];

  include('userdata.php');


    // ensure that pane zvaiswa mukati umu
    if (empty($newfirstname)) {
        array_push($errors, "provide first name");
    }
    if (empty($newlastname)) {
        array_push($errors, "provide last name");
    }

    if (empty($newemail))  {
        array_push($errors, "provide email");
    }
  $query = "SELECT * FROM users WHERE email='$newemail' AND id != '$id'";
  $result=mysqli_query($db, $query);
if (mysqli_num_rows($result)!=0){
  array_push($errors, "Email already taken");
}
    //if errors are none, add user to the db
    if (count($errors) == 0) {
include('userdata.php');
        $sqliom = "UPDATE users SET firstname='{$newfirstname}', lastname='{$newlastname}', email='{$newemail}' WHERE email='{$email}'";
        mysqli_query($db, $sqliom);
        $update = $db->query($sqliom);
          include('userdata.php');
          $username = $_SESSION['username'];
          array_push($success, "your details have been updated");

}
}
 ?>
