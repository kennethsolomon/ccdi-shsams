<?php 
		
			include "dbase.php";
			
			
			$sql = "SELECT * FROM tblperinfo where idnumber = '$id'";
			$result = $con->query($sql);
			
			if ($result->num_rows > 0) 
			{
				echo "<script>alert('Name already'".$id."' exist!')</script>";
			}

			else{
				echo "<script>alert('Nothing!')</script>";
				
			}
			$con->close();
		 

	
?>