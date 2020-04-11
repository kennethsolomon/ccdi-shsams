<?php 
		
			include "dbase.php";
			$idnumber = $_POST['idnum'];
			$user = $_POST['user'];
			$pass = $_POST['pass'];
					
			$sql = "SELECT * FROM tblacc where idnum = '$idnumber'";
			$result = $con->query($sql);
			
			if ($result->num_rows > 0) 
			{
				echo "<script>alert('ID Number already exist!')</script>";
			}

			else{
				$sql = "insert into tblacc values ('$idnumber','$user','$pass','')";
				$con->query($sql);
				echo "<script>alert('Succesfully save!')</script>";
				
				
			}
			$con->close();
		 

	
?>