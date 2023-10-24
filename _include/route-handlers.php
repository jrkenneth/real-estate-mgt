<?php
    //logout
    if(isset($_GET['logout-request'])){
        unset($_SESSION['this_user']);
        header("Location: login.php");
    }

    //login
    if( isset($_POST['login']) ){
        $user=$_POST['user'];
        $password=$_POST['password'];	
        
        $login_query="SELECT * FROM users WHERE email='".$user."' or user_id='".$user."'";
        $run_lq=mysqli_query($con, $login_query);
        $row=mysqli_fetch_array($run_lq);
        $count_lq_rows = mysqli_num_rows($run_lq);
                
        if($count_lq_rows == 1) 
        {
            $id = $row['id'];
            $this_password = $row['password'];
            $dashboard_access = $row['dashboard_access'];
            $first_name = $row['first_name'];
            
            if($dashboard_access == "1"){
                if(password_verify($password, $this_password)){
                    $_SESSION['this_user'] = $id;
                    $date_time = date("Y-m-d h:i:s");

                    $update_last_login = "update users set last_login='".$date_time."' where id='".$id."'";
                    $run_ull = mysqli_query($con, $update_last_login);

                    $message = "<span class='text-success'>Login attempt successful, Welcome ".$first_name."!</span>";
                    echo "<meta http-equiv='refresh' content='3; url=index.php' >";
                }else {
                    $message = "<span class='text-danger'>Login attempt failed. Incorrect password provided, try again.</span>";
                }
            }elseif($dashboard_access == "0"){
                $message = "<span class='text-danger'>Login attempt failed. Account not activated.<br> Check your email for activation link.</span>";
            }elseif($dashboard_access == "2"){
                $message = "<span class='text-danger'>This account has been suspended. Contact Admin for more details.</span>";
            }
        }else{
            $message = "<span class='text-danger'>Login attempt failed. User not found, try again.</span>";
        }
    }	

    //set-password
    if(isset($_POST['set_password'])){
        $new_password = $_POST['new_password'];	
        $confirm_new_password = $_POST['confirm_new_password'];
        $user_id = $_POST['user_id'];

        if($new_password == $confirm_new_password){
            $hash = password_hash($new_password, PASSWORD_DEFAULT);
        
            $set_password = "update users set password='".$hash."', dashboard_access='1' where user_id='".$user_id."'";
            $run_sp = mysqli_query($con, $set_password);
            
            if($run_sp){
                unset($_SESSION["user_id"]);

                $message = "<span class='text-success'>Congrats ".$first_name.", your password has been set successfully and your account is active. You'll be redirected to the Login page shortly.</span>";
                echo "<meta http-equiv='refresh' content='10; url=login.php' >";
            }else{
                $message = "<span class='text-danger'>Password creation failed. Please try again or contact tech support.</span>";
            }
        }else{
            $message = "<span class='text-danger'>Passwords do not match. Please confirm your password carefully.</span>";
        }			
    }
        
    //add new user
    if(isset($_POST['submit_new_user'])){
        $picture_label = "<span class='text-danger'>Re-select Profile Picture</span> (ignore if nothing was selected previously)";

        $profile_picture = $_FILES['profile_picture']['name'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email_address =$_POST['email_address'];
        $contact_number =$_POST['contact_number'];	
        $location =$_POST['location'];							
        $role =$_POST['role'];

        if($role == "1"){
            $code = "OADMN";

            $ad_option = "selected";
            $ed_option = "";
            $ag_option = "";
        }elseif($role == "2"){
            $code = "OEDTR";

            $ad_option = "";
            $ed_option = "selected";
            $ag_option = "";
        }elseif($role == "3"){
            $code = "OAGNT";

            $ad_option = "";
            $ed_option = "";
            $ag_option = "selected";
        }

        $check_user_email = "select * from users where email='".$email_address."'";
        $cue_result = $con->query($check_user_email);
        $cue_row_count = mysqli_num_rows($cue_result);

        if($cue_row_count < 1){
            
            $get_all_users="SELECT * FROM users where role_id='".$role."'";
            $gau_result=mysqli_query($con, $get_all_users);
            $gau_row_count = mysqli_num_rows($gau_result);
            
            $this_user_count = $gau_row_count + 1;
            $user_id = $code."".sprintf("%04d", $this_user_count);

            $submit_new_user = "INSERT INTO users(first_name, last_name, profile_picture, email, phone_number, address, user_id, role_id)values('".mysqli_real_escape_string($con, $first_name)."','".mysqli_real_escape_string($con, $last_name)."', NULLIF('".$profile_picture."', ''),'".mysqli_real_escape_string($con, $email_address)."','".$contact_number."','".mysqli_real_escape_string($con, $location)."','".$user_id."', '".$role."')";
            $post_snu = mysqli_query($con, $submit_new_user);
                                    
            if ($post_snu) {			
                if(!empty($profile_picture)){
                    $ifile_tmp=$_FILES['profile_picture']['tmp_name'];
                    move_uploaded_file($ifile_tmp, "file_uploads/users/".$profile_picture);
                }

                //send email with link (login.php?set-password=true&user-id=[$user_id]) to set password

                $response = "success";
                $message = "User account created successfully.";

                echo "<script>window.location='manage-users.php?response=".$response."&message=".$message."';</script>";	
            } else {
                $error_display = "";
                $message = "User creation failed. Try again later or contact tech support.";
            }
        }else{
            $error_display = "";
            $message = "The entered email address is already registered. Please try again but use a different email to create this account.";
        }
    }

?>

