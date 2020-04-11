<?php

session_start();
	ob_start();
	$role = "";
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			include "dbase.php";	
			$status = "";
			$sql = "Select * from account where usr_name = '$user' and usr_pass = '$pass'";
			$res = $con->query($sql);
			while($row = mysqli_fetch_array($res))
				{
					
					$role = $row['usr_role'];
					$idnum = $row['usrid'];
				}
			
			
			if ($role == 'SUPER ADMIN') 
			{
			
				//header('location:admin.php');
			}
			else if ($role == 'Registrar') 
			{
				header('location:admin.php');
			}
			else if ($role == 'GUARDIAN' and $status == 'approved') 
			{
				//$_SESSION['idnumber'] = $idnum;
				//header('location:guardian.php');
			}
			else
			{
				echo "Unable to log in!";
			}


?>