<?php
    session_start();
    //error_reporting(0);
    include("_include/dbconnect.php");
       
    if(!isset($_SESSION['this_user'])){
        header("Location: login.php");
    }else{	
        $this_user = $_SESSION['this_user'];

        $get_user = "select * from users where id='".$this_user."'";
        $gu_result = $con->query($get_user);
        while($row = $gu_result->fetch_assoc())
        {
            $tu_=$row['first_name'];
            $tu_last_name=$row['last_name'];
            $tu_profile_picture=$row['profile_picture'];
            $tu_email=$row['email'];
            $tu_phone_number=$row['phone_number'];
            $tu_address=$row['address'];
            $tu_user_id=$row['user_id'];
            $tu_role_id=$row['role_id'];
            $tu_last_login=$row['last_login'];
        }
    
        if(empty($tu_profile_picture)){
           $tu_profile_picture = "icon_user_default.png";
        }
    }
?>