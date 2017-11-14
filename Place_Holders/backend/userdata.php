<?php
if(isset($_SESSION['username'])){
    //get user data
    $username = $_SESSION['username'];
    $sqlFetchData = $db->query("SELECT * FROM `users` WHERE `username`='$username' ");
    if($sqlFetchData->num_rows==0){
        return false;
    }else{
        while($dt = $sqlFetchData->fetch_object()){


            $firstname = $dt->firstname;
            $lastname= $dt->lastname;
            $username = $dt->username;
            $email = $dt->email;
            $id = $dt->ID;
    }
}
}


 ?>
