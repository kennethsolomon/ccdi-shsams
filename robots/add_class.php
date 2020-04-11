<?php
include 'dbase.php';

	
	$insid = $_POST['ins'];
	$track = $_POST['track'];
	$sy = $_POST['sy'];
	$sem = $_POST['sem'];
	

	
	
	
	
		$sql = "insert into per_class values(0,'$insid','$track','','','$sy','$sem','activated')";
		if($con->query($sql)){
			echo "<script>alert('Succesfully save!')</script>";
		}
		else
		{
			echo "<script>alert('Cannot save. Please recheck your filled data!')</script>";
			
		}
	
	
	
	





?>