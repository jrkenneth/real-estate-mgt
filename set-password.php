<?php
	session_start();
    //error_reporting(0);
    include("_include/dbconnect.php");

	if(!isset($_SESSION['user_id'])){
		header("Location: login.php");
	}else{
		$new_user = $_SESSION['user_id'];

		$get_user = "select * from users where user_id='".$new_user."'";
        $gu_result=mysqli_query($con, $get_user);
		$gu_row_count = mysqli_num_rows($gu_result);
		
		if($gu_row_count == 1){
			while($row = $gu_result->fetch_assoc()){
				$first_name=$row['first_name'];
            	$last_name=$row['last_name'];
            	$password=$row['password'];
			}
			
			if(empty($password)){
				$new_password = "";	
				$confirm_new_password = "";
				$message = "Welcome ".$first_name." ".$last_name.", kindly set your password to activate and login to your account.";
			}else{
				unset($_SESSION["user_id"]);
				header("Location: login.php");
			}
		}else{
			unset($_SESSION["user_id"]);
			header("Location: login.php");
		}
	}

	include("_include/route-handlers.php");
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	
	<!-- PAGE TITLE HERE -->
	<title>O.BRIGHTON EMPIRE LIMITED - Set Password</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
				<div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
							<h3 class="title">Set Password</h3>
							<p><?php echo $message; ?></p>
						</div>
						<form method="POST">
							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Password</label>
								<input type="password" name="new_password" value="<?php echo $new_password; ?>" id="dz-password" class="form-control" placeholder="Enter your password" required>
								<span class="show-pass eye">
								
									<i class="fa fa-eye-slash"></i>
									<i class="fa fa-eye"></i>
								
								</span>
							</div>
							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Re-enter password</label>
								<input type="password" name="confirm_new_password" value="<?php echo $confirm_new_password; ?>" id="dz-password1" class="form-control" placeholder="Confirm your password" required>
								<span class="show-pass2 eye">
								
									<i class="fa fa-eye-slash"></i>
									<i class="fa fa-eye"></i>
								
								</span>
							</div>
							<div class="text-center mb-4">
								<input type="hidden" name="user_id" value="<?php echo $new_user; ?>">
								<button type="submit" name="set_password" class="btn btn-primary btn-block">Set Password</button>
							</div>
						</form>
					</div>
				</div>
                <div class="col-xl-6 col-lg-6">
					<div class="pages-left h-100">
						<div class="login-content">
							<a href="index.php"><img src="images/logo-full.png" class="mb-3 logo-dark" alt=""></a>
							<a href="index.php"><img src="images/logi-white.png" class="mb-3 logo-light" alt=""></a>
							
							<p>Find Your Dream Home</p>
						</div>
						<div class="login-media text-center">
							<img src="images/login.png" alt="">
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
 <script src="vendor/global/global.min.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="js/deznav-init.js"></script>
<script src="js/demo.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>