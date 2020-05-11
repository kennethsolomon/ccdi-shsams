<?php
//including the database connection file
include "dbase.php";
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table

$sql = "Select * from account_det where identification_number = '$id'";
$result = $con->query($sql);
if ($result->num_rows > 0)
{
	while ($row = $result->fetch_assoc())
	{
		$stat = $row['usr_status'];
	}
}
if ($stat === 'activated') 
{
	$sql="UPDATE account SET usr_status='deactivate' where usrid = '$id'";
		if($con->query($sql)){
			header("Location:personnel.php?statu=Account deactivated succesfully!&err=success");
		}
		else
		{
				header("Location:personnel.php?statu=Unable to save changes!&err=error");
		}
}
else
		{
			header("Location:personnel.php?statu=No changes had been made!&err=error");
		}



?>