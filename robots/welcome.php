<?php

if (isset($_POST["login"]))
{
  
			
			$role = "";
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			include "dbase.php";	
			$status = "";
			$sql = "Select * from account_det where usr_name = '$user' and usr_pass = '$pass'";
			$res = $con->query($sql);
			$cset = 0;
			while($row = mysqli_fetch_array($res))
				{
					$cset = 1;
					$role = $row['per_status'];
					$status = $row['usr_status'];
				}
			
			
			if ($cset == 0)
			{
					$type = "error";
					$message = "Account is not recognized!";
			}
			else
			{
						if (($role === 'Security Guard') && ($status === 'activated')) 
							{
								
								header('location:robots/attend.php');
							
				
							}
						else if (($role === 'Administrator') && ($status === 'activated')) 
							{
								define("Myheader", TRUE);
								header('location:robots/admin.php');
								
							}
						
						else
							{
							$type = "error";
							 $message = "Account is not activated!";
							}
			}

}
?>



<html lang="en">
<head>
	<title>Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="style/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="style/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/css/util.css">
	<link rel="stylesheet" type="text/css" href="style/css/main.css">
<!--===============================================================================================-->
<script type='text/javascript'>
function noBack()
{
	
	window.history.forward();
}
noBack();
window.onload = noBack;
window.onpageshow = function(evt)  { if (evt.persisted) noBack() }
window.onunload = function () { void (0) }
</script>
 <style>    


.outer-container {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 40px 20px;
	border-radius: 2px;
}



#response {
    padding: 10px;
    margin-top: 10px;
    border-radius: 2px;
    display:none;
}


.error {
	font-size:15px;
	color:red;
  
}

div#response.display-block {
    display: block;
}
</style>
</head>
<body onload="$('#uname').focus();">

	<div class="limiter">
	
		<div class="container-login100">
		
			<img src="./style/images/ccdilogo.png" height="400" width="30%"></img> &nbsp
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				

				<form class="login100-form validate-form" method="post" >
					<span class="login100-form-title">
						MEMBER LOGIN
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="user"  placeholder="Username" id="uname">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">
							LOGIN
						</button>
						
					</div>
					<div class="container-login100-form-btn">
						
						<a href="robots/signup.php" style="color:white">
							SIGNUP
						</a>
					</div>

					
					 <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    
					
					
				</form>
		
		</div>
	</div>
<!--===============================================================================================-->	
	<script src="style/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="style/vendor/bootstrap/js/popper.js"></script>
	<script src="style/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="style/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	
	<script src="style/js/main.js"></script>
</body>
</html>

