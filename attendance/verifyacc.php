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
					$usr_stat = $row['usr_status'];
				}
			
			
			if ($role == 'School Guard' and $usr_stat == 'activated') 
			{
			
				header('location:attendance.php');
			}
			
			else
			{
				
			}


?>