<?php 
		
			include "dbase.php";
			$idnumber = date('yMdHms');
			$lname = $_POST['lastname'];
			$fname = $_POST['firstname'];
			$mname = $_POST['middlename'];
			$address = $_POST['add'];
			$bdy = $_POST['bday'];
			$gender = $_POST['gender'];
			$connum = $_POST['cnum'];
			$role = $_POST['role'];
			$user = $_POST['uname'];
			$pass = $_POST['pass'];
if ($lname == '' or $fname == '' or $mname == '' or $gender == '' or $connum == '' or $user == '' or $pass == '')
{
	echo "<script>alert('Unable to save! Please fill up neccessary fields.')</script>";
}
else {
	
			$sql = "SELECT * FROM  per_files where (last_name like '$lname' and first_name like '$fname' and middle_name = '$mname')";
			$result = $con->query($sql);
			
			if ($result->num_rows > 0) 
			{
				echo "<script>alert('Name already exist!')</script>";
			}

			else{
			
						$sql = "insert into per_files values ('$idnumber','$lname','$fname','$mname','$address','$gender','$bdy','pending request','$connum','$role','')";
						$con->query($sql);
						
						$pas="insert into account values (0,'$idnumber','$user','$pass','$role','','pending request')";
						$con->query($pas);
						echo "<script>alert('Succesfully save!')</script>";
					}
			
				
			
			$con->close();
		 
}
	
?>