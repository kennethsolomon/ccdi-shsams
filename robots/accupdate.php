<?php 
		
			include "dbase.php";
			$idnumber = $_POST['userid'];
			$user = $_POST['username'];
			$curpass = $_POST['curpass'];
			$pass = $_POST['userpass'];
			$sql = "SELECT * FROM account where usrid = '$idnumber'";
			$result = $con->query($sql);
			
			if ($result->num_rows > 0) 
			{
				if (($user <> "") and ($pass <> "")) $sql="update account set usr_name ='$user' and usr_pass = '$pass' where usrid = '$idnumber'";
				else if (($user <> '') and ($pass == '')) $sql="update account set usr_name ='$user' where usrid = '$idnumber'";
				else if (($user == '') and ($pass <> '')) $sql="update account set usr_pass ='$pass' where usrid = '$idnumber'";
				$con->query($sql);
				echo "<script>alert('Changes has been made!')</script>";
			}

			else{
				
				echo "<script>alert('ID Number not found!')</script>";
				
				
			}
			$con->close();
		 

	
?>