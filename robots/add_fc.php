<?php
	include 'dbase.php';
	$cnt = "Select * from per_files";
	$qry = $con->query($cnt);
	$cntsc = 0;
	while ($row = $qry->fetch_assoc())
	{
		$cntsc = $cntsc + 1;
	}
	$sc= date("Ymdhis");
	$sc_id = $sc."-".$cntsc;
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$add = $_POST['add'];
	$gender = $_POST['gender'];
	$bday = $_POST['bday'];
	$role = $_POST['role'];
	$connum = $_POST['connum'];
	

	
		$sql = "insert into per_files values('$sc_id','none','$lname','$fname','$mname','$add','$gender','$bday','none',0,'none','none','$connum','$role','')";
		if($con->query($sql)){
			$sql = "insert into account values(0,'$sc_id','$lname','$lname','','pending request')";
			$con->query($sql);
			header("Location:personnel.php?statu=Record save successfully!&err=success");
			
		}
		else
		{
				header("Location:personnel.php?statu=Unable to save record!&err=error");
			
		}
	
	





?>