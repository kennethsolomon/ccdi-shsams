<?php
session_start();
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
if ($stat === 'pending request' or $stat === 'deactivate')
{
	$sql="UPDATE account SET usr_status='activated' where usrid = '$id'";
		if($con->query($sql)){
			header("Location:personnel.php?statu=Account activated succesfully!&err=success");
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